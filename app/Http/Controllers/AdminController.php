<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\Ads;
use App\Models\Banner;
use App\Models\Automobiles;
use App\Models\Testimonial;
use App\Models\User;
use App\Models\Order;
use App\Models\ContactEnquiry;
use App\Mail\RenewListingEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\PropertyEnquiry;
use App\Models\Chat;
use App\Models\Advertisement;
use App\Models\PropertySubscription;
use Illuminate\Http\Request;
use Session;
use App\Models\AutomobileImage;
use App\Models\PropertyImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image as InterventionImage;
use Intervention\Image\Facades\Image;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use App\Models\Common;
use Auth;
use App\Models\Facility;
use App\Models\Term;
use Illuminate\Support\Facades\Crypt;
class AdminController extends Controller
{
    public function index()
    {
        $title = "Dashboard";
        $prop['propertycount_all'] = Property::count();
        $prop['property_standard_count'] = Property::where('subcription_type', 2)->count();
        $prop['property_featured_count'] = Property::where('subcription_type', 1)->count();
        $prop['property_agent_count'] = Property::whereIn('subcription_type', [3, 4, 5])->count();
        $prop['property_expired_count'] = Property::where('payment_status', 2)->count();

        $auto['autocount_all'] = Automobiles::count();
        $auto['auto_standard_count'] = Automobiles::where('subcription_type', 2)->count();
        $auto['auto_featured_count'] = Automobiles::where('subcription_type', 1)->count();
        $auto['auto_agent_count'] = Automobiles::whereIn('subcription_type', [3, 4, 5])->count();
        $auto['auto_expired_count'] = Automobiles::where('payment_status', 2)->count();

        $prop['agent_count'] = User::where('role', 'agent')->count();
        $prop['user_count'] = User::where('role', 'seller')->count();
        $automobilecount = Automobiles::count();
        $agentcount = User::count();
        return view('admin.dashboard', compact('prop', 'automobilecount', 'agentcount'));
    }

    public function banners()
    {
        $banners = Banner::latest()->paginate(20);
        return view('admin.banners', compact('banners'));
    }

    public function addbanners(Request $request)
    {
        if ($request['id'] == NULL) {

            $banner = new Banner();
        } else {

            $id = $request['id'];
            $banner = Banner::find($id);
        }

        if (isset($request->image)) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/banner'), $imageName);
            $banner->image = $imageName;
        }
        $banner->page = $request['page'];
        $banner->sort_order = $request['sort_order'];
        $banner->status = 'active';
        $banner->button_text = $request['button_text'];
        $banner->url = $request['button_url'];
        $banner->save();
        Session::put('confirm', 'done');
        return back();
    }

    public function ads()
    {
        $common = new Common();
        if (isset($_GET['admin_pay'])) {
            $val = $_GET['admin_pay'];
            $table = "ads";
            $id = $_GET['id'];
            $save = $common->save_admin_pay($id, $table, $val);
        }

        $Advertisement1 = DB::table('Adverisement')->where('status', 1)->get();
        $users = User::where('status', 1)->get();
        if (isset($_GET['page_name']) && $_GET['page_name'] != "all") {

            $Advertisement = DB::table('ads')
                ->select('*', 'ads.id as id', 'ads.status as status')
                ->join('Adverisement', 'ads.ad_id', '=', 'Adverisement.id')
                ->where('page_name', $_GET['page_name'])
                ->Paginate(20);
        } else {
            $Advertisement = DB::table('ads')
                ->select('*', 'ads.id as id', 'ads.status as status')
                ->join('Adverisement', 'ads.ad_id', '=', 'Adverisement.id')
                ->Paginate(20);
        }
        // echo"<pre>";print_r($Advertisement);exit;
        return view('admin.ads', compact('Advertisement', 'Advertisement1', 'users'));
    }
    public function ads_enquiry_delete($id)
    {
        DB::table('ads_enquiries')->where('id', $id)->delete();
        return redirect('admin/ads_enquiry?a=1&&b=1')->with('success', 'Deleted Successfully!');
    }
    public function ads_enquiry()
    {
        $title = "Ads Enquiries";
        $ads_enquiries = DB::table('ads_enquiries')->Paginate(20);
        if (isset($_GET['keyword'])) {
            $ads_enquiries = DB::table('ads_enquiries')->Paginate(20);
        } else {
            $ads_enquiries = DB::table('ads_enquiries')->Paginate(20);
        }
        $uesrs = User::where('status', 1)->get();
        return view('admin.ads_enquiries', compact('ads_enquiries', 'title'));
    }
    public function properties()
    {
        Property::where('user_id', 0)->delete();


        $query = Property::query();
        if (!empty($_GET['type'])) {
            $query->where('subcription_type', $_GET['type']);
        }

        if (isset($_GET['status'])) {
            $query->where('status', $_GET['status']);
        }
        if (!empty($_GET['main_cat'])) {
            $query->where('main_cat', $_GET['main_cat']);
        }
        $query->orderby('created_at', 'desc');
        $properties = $query->paginate(30);
        $main_catagory = DB::table('main_category')->get();

        return view('admin.properties', compact('properties', 'main_catagory'));
    }

    public function edit_automobiles($id)
    {
        Session::put('a_id', $id);
        $common = new Common();
        if (isset($_GET['admin_pay'])) {
            $val = $_GET['admin_pay'];
            $table = "automobiles";
            $save = $common->save_admin_pay($id, $table, $val);
        }
        $property = Automobiles::where('id', $id)->first();
        return view('admin.editautomobiles', compact('property'));
    }

    public function automobiles()
    {

        $common = new Common();
        $status = "";
        if (isset($_GET['status'])) {
            $status = $_GET['status'];
        }
        $automobiles = $common->get_auto($status);
        return view('admin.automobiles', compact('automobiles'));
    }

    public function agents()
    {
        $query = User::query();
        $query->select('*');

        if (!empty($_GET['u'])) {
            $query->where('role', 'pseller');
        } else {
            $query->where('role', 'agent');
        }
        if (!empty($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);

            $query->where(function ($q) use ($keyword) {
                $q->orWhere('name', 'like', "%{$keyword}%");
                $q->orWhere('email', 'like', "%{$keyword}%");
                $q->orWhere('phone', 'like', "%{$keyword}%");
                $q->orwhere('address', 'like', "%{$keyword}%");
            });

            if ($query->count() == 0) {
                session()->flash('error', 'No items found.');
            }
        }
        $query->orderBy('id', 'desc');
        $agents = $query->Paginate(20);
        return view('admin.agents', compact('agents'));
    }

    public function testimonials()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.testimonials', compact('testimonials'));
    }

    public function change_status(Request $request)
    {
        $val = $request['val'];
        $modal = $request['modal'];
        $findid = $request['findid'];
        $data = array('status' => $val);
        if ($modal == 'Banner') {
            Banner::where('id', $findid)->update($data);
        }
        if ($modal == 'Testimonial') {
            Testimonial::where('id', $findid)->update($data);
        }
        if ($modal == 'Property') {
            Property::where('id', $findid)->update($data);
        }
        if ($modal == 'ParkingSlot') {
            ParkingSlot::where('id', $findid)->update($data);
        }
        if ($modal == 'Automobiles') {
            Automobiles::where('id', $findid)->update($data);
        }
    }

    public function delete_item(Request $request)
    {
        $modal = $request['modal'];

        $findid = $request['id'];
        if ($modal == 'Property') {
            Property::where('id', $findid)->delete();
        }
        if ($modal == 'ParkingSlot') {
            ParkingSlot::where('id', $findid)->delete();
        }
        if ($modal == 'Automobiles') {
            Automobiles::where('id', $findid)->delete();
        }
        if ($modal == 'Banner') {
            Banner::where('id', $findid)->delete();
        }
        if ($modal == 'Testimonial') {

            Testimonial::where('id', $findid)->delete();
        }
        if ($modal == 'Ads') {
            Ads::where('id', $findid)->delete();
        }
        Session::put('delete', 'success');
        return back();
    }
    public function verify_item(Request $request)
    {
        $ver_id = $request['ver_id'];
        $ver_modal = $request['ver_modal'];
        $data = array('admin_verify' => 'on');
        if ($ver_modal == 'Property') {
            $propuser = Property::where('id', $ver_id)->first();
            $propuniq = $propuser->unique_id;
            $propuseremail = $propuser->User->email;
            Property::where('id', $ver_id)->update($data);
            Mail::raw('Property ' . $propuniq . ' has been Verified', function ($message) use ($propuseremail) {
                $message->to($propuseremail);
                $message->subject('Property Verification');
            });
        }
        if ($ver_modal == 'Automobiles') {
            Automobiles::where('id', $ver_id)->update($data);
        }
    }
    public function change_order(Request $request)
    {
        $val = $request['val'];
        $modal = $request['modal'];
        $findid = $request['findid'];
        $data = array('sort_order' => $val);
        if ($modal == 'Banner') {
            Banner::where('id', $findid)->update($data);
        }
    }

    public function verify_clients(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        if ($user) {
            $user->status -= 1;
            $user->save();
        }
    }

    public function verify_listing(Request $request)
    {
        $id = $request->id;
        $property = Property::find($id);
        if ($property) {
            $property->status -= 1;
            $property->save();
        }
    }

    public function addads(Request $request)
    {

        $id = $request['ad_id'];
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:1048',
            'ad_id' => 'required',


        ]);
        $Advertisement = DB::table('Adverisement')->where('id', $id)->first();
        $price = $Advertisement->price;
        $duration = $Advertisement->duration;
        $position = $Advertisement->position;
        $ads = new Ads();
        $ads->url = $request['url'];
        $ads->price = $price;
        $ads->user_id = $request['user_id'];
        $ads->ad_id = $request['ad_id'];
        $ads->status = 0;
        $ads->duration = $duration;
        $ads->created_by = "Admin";
        if ($request->file('image')->isValid()) {

            $number = rand(100, 100000);
            $file = $request->file('image');
            $fileName = time() . $number . '.' . $file->getClientOriginalExtension();
            $filePath = 'uploads/ads/' . $fileName;

            $img = Image::make($file)
                ->resize(300, 300, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', 75);
            $logo = Image::make(public_path('watermark/Logo.png'));

            // Resize the logo to a suitable size
            $logo->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            });

            // Create a canvas for the watermark
            $watermarkWidth = $logo->width();
            $watermarkHeight = $logo->height() + 50; // Additional space for text
            $watermark = Image::canvas($watermarkWidth, $watermarkHeight);

            // Insert the logo into the canvas
            $watermark->insert($logo, 'top');

            // Insert the watermark into the center of the image
            $fontSize = 15; // GD internal font size

            // Insert watermark text
            $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function ($font) {
                $font->file(null); // No file needed for internal font
                $font->size(12);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');
                ;
            });
            $img->insert($watermark, 'center');
            // =========
            $img->save(public_path($filePath));

            if ($fileName) {
                // $image_path =asset("uploads/Agent/{$user->image}");
                if ($ads->image) {
                    //  unlink(public_path('uploads/Agent/'.$user->image)) ;
                    // unlink($image_path);

                }
                $ads->image = $fileName;
            }
        } else {
            return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
        }
        $save = $ads->save();
        if ($save) {
            $ad_id = $ads->id;
            return redirect()->back()->with('success', 'Added Successfully!');
        } else {
            return redirect()->back()->withErrors(['image' => 'Something Went Wrong']);
        }
    }
    public function editads(Request $request)
    {
        $ads_id = $request['ads_id'];
        $id = $request['ad_id'];
        $request->validate([
            // 'image' => 'required|image|mimes:jpeg,jpg,png|max:1048', // 3MB max size
            'ad_id' => 'required',
            'user_id' => 'required',


        ]);
        $Advertisement = DB::table('Adverisement')->where('id', $id)->first();
        $price = $Advertisement->price;
        $duration = $Advertisement->duration;
        $position = $Advertisement->position;
        // echo$ads_id;exit;
        $ads = Ads::find($ads_id);
        $ads->url = $request['url'];
        $ads->price = $price;
        $ads->user_id = $request['user_id'];
        $ads->ad_id = $request['ad_id'];
        $ads->status = 0;
        $ads->duration = $duration;
        $ads->created_by = "Admin";
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,jpg,png|max:1048', // 3MB max size
                'ad_id' => 'required',


            ]);
            if ($request->file('image')->isValid()) {

                $number = rand(100, 100000);
                $file = $request->file('image');
                // $imageName = time() . '.' . $file->getClientOriginalExtension();
                $fileName = time() . $number . '.' . $file->getClientOriginalExtension();
                $filePath = 'uploads/ads/' . $fileName;
                // $img = InterventionImage::make($file->getRealPath());
                // $img = InterventionImage::make($file->getRealPath());
                // $width = 350;
                // $height = 200;
                // $img = Image::make($file->getRealPath())->fit($width, $height);
                $img = Image::make($file)
                    ->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    })
                    ->encode('jpg', 75);
                $logo = Image::make(public_path('watermark/Logo.png'));

                // Resize the logo to a suitable size
                $logo->resize(100, 100, function ($constraint) {
                    $constraint->aspectRatio();
                });

                // Create a canvas for the watermark
                $watermarkWidth = $logo->width();
                $watermarkHeight = $logo->height() + 50; // Additional space for text
                $watermark = Image::canvas($watermarkWidth, $watermarkHeight);

                // Insert the logo into the canvas
                $watermark->insert($logo, 'top');

                // Insert the watermark into the center of the image




                $fontSize = 15; // GD internal font size

                // Insert watermark text
                $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function ($font) {
                    $font->file(null);
                    $font->size(12);
                    $font->color('#ffffff');
                    $font->align('center');
                    $font->valign('top');
                    ;
                });
                $img->insert($watermark, 'center');
                // =========
                $img->save(public_path($filePath));

                if ($fileName) {
                    // $image_path =asset("uploads/Agent/{$user->image}");
                    if ($ads->image) {
                        //  unlink(public_path('uploads/ads/'.$user->image)) ;
                        // unlink($image_path);

                    }
                    $ads->image = $fileName;
                }
            } else {
                return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
            }
        }
        $save = $ads->save();
        if ($save) {
            $ad_id = $ads->id;
            return redirect()->back()->with('success', 'Updated Successfully!');
        } else {
            return redirect()->back()->withErrors(['image' => 'Something Went Wrong']);
        }
    }

    public function make_featured(Request $request)
    {
        $val = $request['val'];
        $prop_id = $request['prop_id'];
        $prop_modal = $request['prop_modal'];

        $data = array('make_featured' => $val);
        if ($prop_modal == 'Automobiles') {
            Automobiles::where('id', $prop_id)->update($data);
        } else {
            Property::where('id', $prop_id)->update($data);
        }
    }

    public function make_agent_verified(Request $request)
    {
        $val = $request['val'];
        $user_id = $request['prop_id'];
        if ($val == 0) {
            $data1 = array('status' => 22);
            $s = 1;
        } else {
            $data1 = array('status' => 1);
            $s = 22;
        }

        Property::where('user_id', $user_id)->where('status', $s)->update($data1);
        Ads::where('user_id', $user_id)->where('status', $s)->update($data1);
        Automobiles::where('user_id', $user_id)->where('status', $s)->update($data1);
        $data = array('verified' => $val);
        User::where('id', $user_id)->update($data);

    }

    public function change_ad_status(Request $request)
    {
        if ($request['val'] == "off") {
            $val1 = 0;
        } else {
            $val1 = 1;
        }
        $val = $val1;
        $prop_id = $request['prop_id'];
        $data = array('status' => $val);
        $adgmail = Ads::where('id', $prop_id)->first();
        $adgmailget = $adgmail->User->email;
        if ($val == 'on') {
            Mail::raw('Your Ad has been Verified and went live', function ($message) use ($adgmailget) {
                $message->to($adgmailget);
                $message->subject('Ad Verification');
            });
        }

        Ads::where('id', $prop_id)->update($data);
    }

    public function deleteitem(Request $request)
    {
        $modal = $request['modal'];
        $id = $request['id'];
        if ($modal == 'ads') {
            ads::where('id', $request['id'])->delete();
        } elseif ($modal == 'Banner') {
            Banner::where('id', $id)->delete();
        }
        Session::put('delete', 'done');
        return back();
    }
    public function edituser(Request $request)
    {

        $id = $request['id'];
        $user = User::find($id);
        $user->name = $request['name'];
        $user->phone = $request['phone'];
        $user->address = $request['address'];
        if ($request['password'] != NULL) {

            $user->password = Hash::make($request['password']);
        }

        $user->save();
        return back();
    }
    public function enquiries()
    {
        $enquiries = ContactEnquiry::latest()->paginate();
        return view('admin.enquiries', compact('enquiries'));
    }
    public function property_enquiries()
    {
        $query = PropertyEnquiry::query();
        if (isset($_GET['keyword'])) {
            $location = trim($_GET['keyword']);
            $query->where(function ($q) use ($location) {

                $q->orWhere('name', 'like', "%{$location}%");
                $q->orWhere('phone', 'like', "%{$location}%");
                $q->orWhere('email', 'like', "%{$location}%");
                $q->orwhere('message', 'like', "%{$location}%");
                // $q->orwhere('eir_code', 'like', "%{$location}%");

            });

        }
        $enquiries = $query->latest()->paginate(20);
        return view('admin.property_enquiries', compact('enquiries'));
    }
    public function bulkDelete(Request $request)
    {
        $ids = $request->input('ids');
        if ($ids && count($ids)) {
            PropertyEnquiry::whereIn('id', $ids)->delete();
            return redirect()->back()->with('success', 'Selected enquiries deleted successfully.');
        }
        return redirect()->back()->with('error', 'No enquiries selected.');
    }

    public function editproperties(Request $request)
    {
        $property = Property::find($request->id);
        $property->property_type = $request['property_type'];
        $property->post_in_language = $request['post_in_language'];
        $property->building_name = $request['building_name'];
        $property->province = $request['province'];
        $property->banner_image = $request['banner_image'];
        $property->area = $request['area'];
        $property->street = $request['street'];
        $property->town = $request['town'];
        $property->district = $request['district'];
        $property->state = $request['state'];
        $property->country = $request['country'];
        $property->email = $request['email'];
        $property->phone = $request['phone'];
        $property->transaction_type = $request['transaction_type'];
        $property->ownership_type = $request['ownership_type'];
        $property->display_price = $request['display_price'];
        $property->price = $request['price'];
        $property->built_area = $request['built_area'];
        $property->built_area_unit = $request['built_area_unit'];
        $property->plot_area = $request['plot_area'];
        $property->plot_area_unit = $request['plot_area_unit'];
        $property->bedrooms = $request['bedrooms'];
        $property->bathrooms = $request['bathrooms'];
        $property->address = $request['address'];
        $property->make_featured = 'off';
        $property->constructed_year = $request['constructed_year'];
        $property->description = $request['description'];
        $property->distance_to_school = $request['distance_to_school'];
        $property->distance_to_hospital = $request['distance_to_hospital'];
        $property->distance_to_busstop = $request['distance_to_busstop'];
        $property->distance_to_airport = $request['distance_to_airport'];
        $property->distance_to_railwaystation = $request['distance_to_railwaystation'];
        $property->distance_to_supermarket = $request['distance_to_supermarket'];
        $property->distance_to_shopping = $request['distance_to_shopping'];
        $property->approval_status = $request['approval_status'];
        $property->status = 'inactive';
        if (isset($request->list_image)) {
            $image = $request->file('list_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/properties'), $imageName);
            $property->image = $imageName;
        }
        if (isset($request->banner_image)) {
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/properties'), $imageName);
            $property->banner_image = $imageName;
        }

        $property->save();
        $randomstring = Session::get('randomstring');
        $randomstringonamenities = Session::get('randomstringonamenities');
        if (isset($randomstring)) {
            $data = array('property_id' => $property->id);
            PropertyImages::where('unique_string', $randomstring)->update($data);
        }
        if (isset($randomstringonamenities)) {
            $data = array('property_id' => $property->id);
            AmenitiesOnProperties::where('unique_id', $randomstring)->update($data);
        }
        Session::forget('randomstring');
        Session::forget('randomstringonamenities');

        Session::put('success', 'done');
        return back();
    }


    public function change_property_enquiry_status(Request $request)
    {
        $val = $request['val'];
        $enq_id = $request['enq_id'];
        if ($val == "on") {
            $val = 1;
        } else {
            $val = 0;
        }
        $data = array('show_to_seller' => $val);
        $adgmail = PropertyEnquiry::where('id', $enq_id)->first();
        PropertyEnquiry::where('id', $enq_id)->update($data);
    }
    public function change_general(Request $request)
    {

        $id = $request['id'];
        $data = array(
            'status' => $request['val'],
        );
        if ($request['modal'] == "county") {
            $save = DB::table('ie_counties')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "type_automobiles") {
            $save = DB::table('type_automobiles')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "brand") {
            $save = DB::table('brand')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "brand_model") {
            $save = DB::table('brand_model')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "color") {
            $save = DB::table('color')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "fuel_type") {
            $save = DB::table('fuel_type')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "body_type") {
            $save = DB::table('body_type')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "vat") {
            $save = DB::table('vat')->where('id', $id)->update($data);
        }
        if ($request['modal'] == "facilities") {
            $save = DB::table('facilities')->where('id', $id)->update($data);
        }

    }
    public function chats()
    {


        $receiver = auth()->user();

        $query = Chat::query();
        $query->select('chats.*');
        $query->join('users', 'chats.user_id', '=', 'users.id');
        $query->leftJoin('chats as c2', function ($join) {
            $join->on('chats.user_id', '=', 'c2.user_id')
                ->whereRaw('chats.created_at < c2.created_at');
        });
        $query->whereNull('c2.user_id');
        $query->where('chats.user_id', '!=', $receiver->id);
        $query->with('Sender');
        $query->orderBy('chats.created_at', 'desc');
        if (!empty($_GET['keyword'])) {
            $location = trim($_GET['keyword']);

            $query->where(function ($q) use ($location) {

                $q->orWhere('chats.message', 'like', "%{$location}%");
                $q->orWhere('name', 'like', "%{$location}%");

            });
        }
        $chats = $query->paginate(10);
        return view('admin.chats', compact('chats'));
    }

    public function messages($sender_id)
    {
        $receiver = auth()->user();
        $messages = chat::with('Sender')->where('user_id', $sender_id)->get();
        return view('admin.message', compact('receiver', 'messages', 'sender_id'));
    }
    public function properties_Subscription()
    {
        $title = "Price";
        $PropertySubscription = PropertySubscription::all();
        $payment_mode = PropertySubscription::find(1)->payment_mode;
        return view('admin.properties_subscription', compact('PropertySubscription', 'title', 'payment_mode'));
    }
    public function property_subscribe_edit($id)
    {
        // dd($id);

        $title = "Edit";
        $PropertySubscription = PropertySubscription::find($id);
        return view('admin.properties_subscription_edit', compact('PropertySubscription', 'title'));
    }
    public function store_subscription(Request $request)
    {
        // dd($request);

        $title = "Edit";
        $id = $_POST['id'];
        $PropertySubscription = PropertySubscription::find($id);
        $PropertySubscription->Name = $request['name'];
        $PropertySubscription->Price = $request['price'];
        $PropertySubscription->duration = $request['duration'];
        $PropertySubscription->payment_mode = $request['charge'];
        $PropertySubscription->payment_mode = $request->payment_mode;
        $PropertySubscription->save();
        //  echo"<pre>";print_r($PropertySubscription);exit;
        return redirect()->back()->with('success', 'Updated Successfully!');
    }

    public function propertysubscription_update(Request $request)
    {
        $id = $_POST['id'];
        $PropertySubscription = PropertySubscription::find($id);
        $PropertySubscription->Price = $_POST['price'];
        $PropertySubscription->save();
        return redirect()->back()->with('success', 'Updated Successfully!');
    }
    public function payment_mode_save(Request $request)
    {
        $title = "Price";
        echo $id = $_POST['pmode'];
        PropertySubscription::query()->update(['payment_mode' => $id]);
        return redirect()->back()->with('success', 'Updated Successfully!');
    }
    public function Enquiry_setting()
    {
        if (isset($_GET['status'])) {
            DB::table('Enquiry_setting')->update(['status' => $_GET['status']]);
            echo json_encode($_GET['status']);

        }
        $title = "Enquiry Setting";
        $enquiries = DB::table('Enquiry_setting')
            ->where('id', 1)
            ->first();
        return view('admin.Enquiry_setting', compact('enquiries', 'title'));
    }
    public function admin_update()
    {
        $title = "Admin profile";
        $id = auth()->user()->id;
        $admin = User::find($id);

        return view('admin.admin_profile', compact('admin', 'title'));
    }
    public function admin_update_store(Request $request)
    {
        // print_r($_POST);exit;
        $title = "Admin profile";
        $id = auth()->user()->id;
        $admin = User::find($id);
        $admin->name = $request['name'];
        $admin->phone = $request['phone'];
        $admin->email = $request['email'];
        $admin->whatsapp = $request['whatsapp'];
        $admin->address = $request['address'];
        $admin->save();
        $param = "a=4&&b=45";
        return redirect('admin/admin_update?a=4&&b=43')->with('success', 'Updated Successfully!');

        //   return redirect()->route('admin_update');
    }
    public function admin_password()
    {
        $title = "Change Password";
        $id = auth()->user()->id;
        $admin = User::find($id);
        return view('admin.admin_password', compact('admin', 'title'));
    }
    public function admin_password_update(Request $request)
    {

        $id = auth()->user()->id;
        $admin = User::find($id);

        if (trim($request['new_password']) == trim($request['confirm_password'])) {
            $length = strlen(trim($request['new_password']));
            if ($length < 8) {
                return redirect('admin/admin_password?a=4&&b=43')->with('fail', ' The password must be at least 8 characters!');
            } else {
                $admin->password = Hash::make(trim($request['new_password']));
                //  echo"success";exit;
                $admin->save();
                return redirect('admin/admin_password?a=4&&b=43')->with('success', 'Password Updated Successfully!');
            }
        } else {
            return redirect('admin/admin_password?a=4&&b=43')->with('fail', ' password mismatch!');
        }


    }
    public function Advertisement_page()
    {
        $Advertisement1 = DB::table('Adverisement')->get();
        $title = "Set Advertisement";
        if (isset($_GET['status'])) {
            $status[] = $_GET['status'];
            if ($_GET['status'] == "2") {
                $status = [1, 0];
            }
        }

        if (isset($_GET['page_name']) && $_GET['page_name'] != "all") {
            $Advertisement = DB::table('Adverisement')
                ->where('page_name', $_GET['page_name'])
                ->whereIn('status', $status)
                ->Paginate(100);
        } elseif (isset($_GET['page_name']) && $_GET['page_name'] == "all" && $_GET['status'] != "") {
            $Advertisement = DB::table('Adverisement')
                ->where('status', $status)
                ->Paginate(100);
        } else {
            $Advertisement = DB::table('Adverisement')->Paginate(20);
        }
        return view('admin.adpage', compact('Advertisement', 'title', 'Advertisement1'));
    }
    public function Advertisement_edit($id)
    {
        $title = "Set Advertisement";
        $Advertisement = DB::table('Adverisement')->where('id', $id)->first();
        return view('admin.adpage_edit', compact('Advertisement', 'title'));
    }


    public function store_Advertisement()
    {
        $title = "Edit";
        $id = $_POST['id'];
        $data = [
            'page_name' => trim($_POST['page_name']),
            'position' => trim($_POST['position']),
            'duration' => trim($_POST['duration']),
            'price' => trim($_POST['price']),
            'status' => trim($_POST['status']),
            'payment_status' => trim($_POST['payment_status']),
        ];
        $save = DB::table('Adverisement')->where('id', $id)->update($data);
        return redirect('admin/Advertisement_edit/' . $id . '?a=4&&b=43')->with('success', 'Updated Successfully!');
    }
    public function payments_history_admin(Request $request)
    {
        $title = "Payment History";
        $query = Order::query();
        $query->select('*', 'users.id as user_id', 'orders.id as id', 'orders.created_at as created_at');
        $query->join('users', 'orders.customer_id', '=', 'users.id');
        $query->where('orders.payment_status', 1);
        if (!empty($request['order_id'])) {
            $query->where('unique_id', $request['order_id']);
        }
        if (!empty($request['category'])) {
            $query->where('category', $request['category']);
        }
        if (!empty($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);

            $query->where(function ($q) use ($keyword) {

                $q->orWhere('name', 'like', "%{$keyword}%");
                $q->orWhere('email', 'like', "%{$keyword}%");
                $q->orWhere('phone', 'like', "%{$keyword}%");
                $q->orwhere('address', 'like', "%{$keyword}%");

            });
        }
        if (!empty($_GET['fdate']) && !empty($_GET['tdate'])) {
            $fromDate = strtotime($_GET['fdate']);
            $fromDate = date("Y-m-d", $fromDate);
            $toDate = strtotime($_GET['tdate']);
            $toDate = date("Y-m-d", $toDate);

            $startDate = Carbon::parse($fromDate);
            $endDate = Carbon::parse($toDate);
            $query->whereBetween('orders.created_at', [$startDate, $endDate]);

        }

        $orders = $query->Paginate(20);
        return view('admin.payment.payment', compact('orders', 'title'));
    }

    public function add_property()
    {

        $title = "Property Edit";
        $common = new Common();
        $users = User::where('status', 1)->get();
        return view('admin.property.add_property', compact('users'));
    }
    public function inser_property()
    {
        $property = new Property();
        $property->user_id = $_GET['user_id'];
        $property->main_cat = $_GET['main_cat'];
        $property->save();
        $id = $property->id;
        return redirect('admin/edit-properties/' . $id . '?a=4&&b=43');
    }
    public function add_needed_property()
    {
        $title = "Property Edit";
        $common = new Common();
        $users = User::where('status', 1)->get();
        return view('admin.property.add_needed_property', compact('users'));
    }
    public function edit_properties($id)
    {
        $common = new Common();
        if (isset($_GET['admin_pay'])) {
            $val = $_GET['admin_pay'];
            $table = "properties";
            $save = $common->save_admin_pay($id, $table, $val);
            $title = "Property Edit";
            $property = $common->get_single_property($id);
            $property_bed_type = DB::table('bed_type')->where('property_id', $id)->get();
            Session::put('main_cat', $property->main_cat);
            Session::put('property_id', $property->id);
        }
        $title = "Property Edit";
        $property = $common->get_single_property($id);
        $property_bed_type = DB::table('bed_type')->where('property_id', $id)->get();
        Session::put('main_cat', $property->main_cat);
        Session::put('property_id', $property->id);
        return view('admin.editproperties', compact('property', 'title', 'property_bed_type'));
    }
    public function properties_details()
    {

        $title = "Property Details";
        if (Session::get('property_id') != "") {




            $property_id = Session::get('property_id');
            $property = Property::find($property_id);
            $property_bed_type = DB::table('bed_type')->where('property_id', $property_id)->get();
            $property->user_id = auth::user()->id;
            if (auth::user()->role == "agent") {
                $property->subcription_type = 3;
            }
            if (isset($_GET['county'])) {
                $property->county = $_GET['county'];
            }
            if (isset($_GET['city'])) {
                $property->city = $_GET['city'];
            }
            if (isset($_GET['town'])) {
                $property->town = $_GET['town'];
            }
            if (isset($_GET['street'])) {
                $property->street = $_GET['street'];
            }
            if (isset($_GET['eir_code'])) {
                $property->eir_code = $_GET['eir_code'];
            }
            if (isset($_GET['location_show'])) {
                $property->location_disp_flag = $_GET['location_show'];
            } else {
                $property->location_disp_flag = 0;
            }
            if (isset($_GET['Longitude'])) {
                $property->Longitude = $_GET['Longitude'];
            }
            if (isset($_GET['Latitude'])) {
                $property->Latitude = $_GET['Latitude'];
            }
            if (!empty($_GET['auction_location1'])) {

                $property->auction_location = $_GET['auction_location1'];
            }
            if (!empty($_GET['auction_location2'])) {

                $property->auction_location = $_GET['auction_location2'];
            }
            if (!empty($_GET['auction_location3'])) {

                $property->auction_location = $_GET['auction_location3'];
            }


            if (!empty($_GET['au_d1'])) {
                $property->auction_date = $_GET['au_d1'];
            }
            if (!empty($_GET['au_d2'])) {
                $property->auction_date = $_GET['au_d2'];
            }
            if (!empty($_GET['au_d3'])) {
                $property->auction_date = $_GET['au_d3'];
            }
            if (isset($_GET['price_on_app'])) {
                $property->price_on_app = $_GET['price_on_app'];
            }
            if (isset($_GET['selling_type'])) {
                $property->selling_type = $_GET['selling_type'];
            }
            if (isset($_GET['price'])) {
                $property->price = $_GET['price'];
            }
            if (isset($_GET['price_type'])) {
                $property->price_type = $_GET['price_type'];
            }
            if (isset($_GET['for_let_sale'])) {
                if ($_GET['for_let_sale'] == 4) {
                    $property->price_type = "Monthly";
                }
                $property->for_let_sale = $_GET['for_let_sale'];
            }
            if (isset($_GET['price_apn'])) {
                $property->price_apn = $_GET['price_apn'];
            }
            if (isset($_GET['price_sale'])) {
                $property->price_sale = $_GET['price_sale'];
            }
            if (isset($_GET['auction'])) {
                $property->auction = $_GET['auction'];
            }
            $property_save = $property->save();

            if (isset($_GET['rent_coll'])) {
                $property->rent_coll = $_GET['rent_coll'];
            }
            //   print_r(count($_GET['bed_type']));exit;
            if (isset($_GET['bed_type'])) {
                DB::table('bed_type')->where('property_id', trim($property_id))->delete();
                for ($i = 0; $i < count($_GET['bed_type']); $i++) {

                    DB::table('bed_type')->insert([
                        'bed_type_name' => trim($_GET['bed_type'][$i]),
                        'rent' => trim($_GET['rent'][$i]),
                        'en_suite' => trim($_GET['en'][$i]),
                        'property_id' => trim($property_id),
                    ]);
                }
            }
            $property_save = $property->save();



            if ($property_save) {
                $common = new Common();
                $property = $common->get_single_property($property_id);
                $property_bed_type = DB::table('bed_type')->get();
                Session::put('main_cat', $property->main_cat);
                Session::put('property_id', $property->id);


                if (Session::get('main_cat') == 1 || Session::get('main_cat') == 9) {
                    return view('admin.property_details_one', compact('property'));
                }
                if (Session::get('main_cat') == 2 || Session::get('main_cat') == 10) {
                    return view('admin.property.property_details_two', compact('property'));
                }
                if (Session::get('main_cat') == 3 || Session::get('main_cat') == 11) {
                    return view('admin.property.property_details_three', compact('property'));
                }
                if (Session::get('main_cat') == 4 || Session::get('main_cat') == 12) {
                    return view('admin.property.property_details_four', compact('property'));
                }
                if (Session::get('main_cat') == 5) {
                    return view('admin.property.property_details_five', compact('property'));
                }
                if (Session::get('main_cat') == 6) {
                    return view('admin.property.property_details_three', compact('property'));
                }
                if (Session::get('main_cat') == 7) {
                    return view('admin.property.property_details_four', compact('property'));
                }


            }

        }
        echo "hi";
    }
    // public function  Facilities()
    // {

    //     $title="Property description";
    //     if(Session::get('property_id')!="")
    //     {
    //       $property_id=Session::get('property_id');
    //       $property=Property::find($property_id);
    //       if(isset($_GET['property_type']))
    //       {
    //       $property->property_type=$_GET['property_type'];

    //       }
    //       if(isset($_GET['available_from']))
    //       {
    //       $property->Available_from=$_GET['available_from'];
    //       }
    //       if(isset($_GET['single_room']))
    //       {
    //       $property->Single_Bedrooms=$_GET['single_room'];
    //       }
    //       if(isset($_GET['double_room']))
    //       {
    //       $property->Double_Bedrooms=$_GET['double_room'];
    //       }
    //       if(isset($_GET['twin_room']))
    //       {
    //       $property->Twin_Bedrooms=$_GET['twin_room'];
    //       }
    //       $count_single_bedroom=$count_double_bedroom=$total_rooms=$count_twin_bedroom=0;
    //       if(!empty($_GET['single_room'])){$count_single_bedroom=$_GET['single_room'];}
    //       if(!empty($_GET['double_room'])){$count_double_bedroom=$_GET['double_room'];}
    //       if(!empty($_GET['twin_room'])){$count_twin_bedroom=$_GET['twin_room'];}
    //       $total_rooms=$count_single_bedroom+$count_double_bedroom+$count_twin_bedroom;
    //       if($total_rooms>0)
    //       {
    //           $property->total_rooms=$total_rooms;
    //       }
    //       if(isset($_GET['bathroom']))
    //       {
    //       $property->Bathrooms=$_GET['bathroom'];
    //       }
    //       if(isset($_GET['ber']))
    //       {
    //       $property->BER=$_GET['ber'];
    //       }
    //       if(isset($_GET['ber_no']))
    //       {
    //       $property->BER_NO=$_GET['ber_no'];
    //       }
    //       if(isset($_GET['Access']))
    //       {
    //       	$property->Access=$_GET['Access'];
    //       }
    //       if(isset($_GET['ber_no_avl']))
    //       {
    //       	$property->ber_no_avl=$_GET['ber_no_avl'];
    //       }
    //       if(isset($_GET['fa']))
    //       {
    //       	$property->facilities=$_GET['fa'];
    //       }
    //       if(isset($_GET['fa1']))
    //       {
    //       	$property->facilities=$_GET['fa1'];
    //       }
    //         if(Session::get('main_cat')==4||Session::get('main_cat')==7|| Session::get('main_cat')==12)
    //         {
    //               	if(isset($_GET['space']))
    //               {
    //               $property->space=$_GET['space'];
    //               }
    //         }
    //         if(isset($_GET['feature']))
    //       {
    //             $property->feature=$_GET['feature'];
    //       }
    //       	if(isset($_GET['unit']))
    //       {
    //       $property->unit=$_GET['unit'];
    //       }
    //       if(isset($_GET['floor_area1']))
    //       {
    //       $property->floor_area=$_GET['floor_area1'];
    //       }
    //       	elseif(isset($_GET['floor_area']))
    //       {
    //       $property->floor_area=$_GET['floor_area'];
    //       }
    //       if(isset($_GET['minimum_lease']))
    //       {
    //       $property->Minimum_lease=$_GET['minimum_lease'];
    //       }
    //       if(isset($_GET['av_for']))
    //       {
    //       $property->av_for=$_GET['av_for'];
    //       }
    //       if(isset($_GET['no_tenants']))
    //       {
    //       $property->no_tenants=$_GET['no_tenants'];
    //       }
    //       if(isset($_GET['Owner_occupied']))
    //       {
    //       $property->Owner_occupied=$_GET['Owner_occupied'];
    //       }
    //       if(isset($_GET['one_person']))
    //       {
    //       $property->one_person=$_GET['one_person'];
    //       }
    //         if(isset($_GET['Preference']))
    //       {
    //       $property->Preference=$_GET['Preference'];
    //       }
    //       if(isset($_GET['tax']))
    //       {
    //       $property->tax=$_GET['tax'];
    //       }
    //       if($property->property_type=="Studio")
    //       {
    //          $property->total_rooms=1;
    //           $property->Bathrooms=1;
    //       }
    //       $property_save=$property->save();
    //   }


    //   if($property_save)
    //   {
    //                 $common=new Common();
    //                 $property= $common->get_single_property($property_id);
    //                 $property_bed_type= DB::table('bed_type')->get();
    //                 Session::put('main_cat',$property->main_cat);
    //                 Session::put('property_id', $property->id); 
    //               if(Session::get('main_cat')==5)
    //         {
    //         return view('admin.property.Facilities_sale',compact('property'));
    //         }
    //           else
    //           {
    //               if(Session::get('main_cat')==4|| Session::get('main_cat')==6 ||Session::get('main_cat')==7 )
    //         {
    //         return redirect()->route('property_description');
    //         }
    //              return view('admin.property.Facilities',compact('property'));
    //           } 
    // //   }
    //   }
    //     return view('admin.property_description',compact('title'));
    // }
    public function Facilities()
    {
        $title = "Property description";

        if (Session::get('property_id') != "") {
            $property_id = Session::get('property_id');
            $property = Property::find($property_id);

            if (isset($_GET['property_type'])) {
                $property->property_type = $_GET['property_type'];
            }
            if (isset($_GET['available_from'])) {
                $property->Available_from = $_GET['available_from'];
            }
            if (isset($_GET['single_room'])) {
                $property->Single_Bedrooms = $_GET['single_room'];
            }
            if (isset($_GET['double_room'])) {
                $property->Double_Bedrooms = $_GET['double_room'];
            }
            if (isset($_GET['twin_room'])) {
                $property->Twin_Bedrooms = $_GET['twin_room'];
            }

            $count_single_bedroom = $count_double_bedroom = $count_twin_bedroom = 0;

            if (!empty($_GET['single_room'])) {
                $count_single_bedroom = $_GET['single_room'];
            }
            if (!empty($_GET['double_room'])) {
                $count_double_bedroom = $_GET['double_room'];
            }
            if (!empty($_GET['twin_room'])) {
                $count_twin_bedroom = $_GET['twin_room'];
            }

            $total_rooms = $count_single_bedroom + $count_double_bedroom + $count_twin_bedroom;

            if ($total_rooms > 0) {
                $property->total_rooms = $total_rooms;
            }

            if (isset($_GET['bathroom'])) {
                $property->Bathrooms = $_GET['bathroom'];
            }
            if (isset($_GET['ber'])) {
                $property->BER = $_GET['ber'];
            }
            if (isset($_GET['ber_no'])) {
                $property->BER_NO = $_GET['ber_no'];
            }
            if (isset($_GET['Access'])) {
                $property->Access = $_GET['Access'];
            }
            if (isset($_GET['price_sale'])) {
                $property->price_sale = $_GET['price_sale'];
            }

            if (isset($_GET['ber_no_avl'])) {
                $property->ber_no_avl = $_GET['ber_no_avl'];
            }
            if (isset($_GET['fa'])) {
                $property->facilities = $_GET['fa'];
            }
            if (isset($_GET['fa1'])) {
                $property->facilities = $_GET['fa1'];
            }

            if (Session::get('main_cat') == 4 || Session::get('main_cat') == 7 || Session::get('main_cat') == 12) {
                if (isset($_GET['space'])) {
                    $property->space = $_GET['space'];
                }
            }

            if (isset($_GET['feature'])) {
                $property->feature = $_GET['feature'];
            }
            if (isset($_GET['unit'])) {
                $property->unit = $_GET['unit'];
            }
            if (isset($_GET['floor_area1'])) {
                $property->floor_area = $_GET['floor_area1'];
            } elseif (isset($_GET['floor_area'])) {
                $property->floor_area = $_GET['floor_area'];
            }

            if (isset($_GET['minimum_lease'])) {
                $property->Minimum_lease = $_GET['minimum_lease'];
            }
            if (isset($_GET['av_for'])) {
                $property->av_for = $_GET['av_for'];
            }
            if (isset($_GET['no_tenants'])) {
                $property->no_tenants = $_GET['no_tenants'];
            }
            if (isset($_GET['Owner_occupied'])) {
                $property->Owner_occupied = $_GET['Owner_occupied'];
            }
            if (isset($_GET['one_person'])) {
                $property->one_person = $_GET['one_person'];
            }
            if (isset($_GET['Preference'])) {
                $property->Preference = $_GET['Preference'];
            }
            if (isset($_GET['tax'])) {
                $property->tax = $_GET['tax'];
            }

            if ($property->property_type == "Studio") {
                $property->total_rooms = 1;
                $property->Bathrooms = 1;
            }

            $property_save = $property->save();
        }

        if ($property_save) {
            $common = new Common();
            $property = $common->get_single_property($property_id);

            // Store required session
            Session::put('main_cat', $property->main_cat);
            Session::put('property_id', $property->id);


            $facilities = Facility::get();
            $selectedFacilities = [];

            if (!empty($property->facilities)) {

                if (is_array($property->facilities)) {
                    // If it’s already an array (happens on BACK)
                    $selectedFacilities = $property->facilities;

                } else {
                    // If it’s stored as comma-separated string in DB
                    $selectedFacilities = explode(",", $property->facilities);
                }
            }
            // SALES CATEGORY
            if (Session::get('main_cat') == 5) {
                return view(
                    'admin.property.Facilities_sale',
                    compact('property', 'facilities', 'selectedFacilities')
                );
            }

            // REDIRECT CASE
            if (Session::get('main_cat') == 4 || Session::get('main_cat') == 6 || Session::get('main_cat') == 7) {
                return redirect()->route('property_description');
            }

            // RENT CATEGORY
            return view(
                'admin.property.Facilities',
                compact('property', 'facilities', 'selectedFacilities')
            );
        }

        return view('admin.property_description', compact('title'));
    }
    public function property_description()
    {
        $title = "Property description";
        if (Session::get('property_id') != "") {
            $property_id = Session::get('property_id');
            $property = Property::find($property_id);
            if (isset($_GET['fa'])) {

                if (isset($_GET['Furnishing'])) {
                    $property->furnishing = $_GET['Furnishing'];
                }
                if (isset($_GET['feature'])) {
                    $property->feature = $_GET['feature'];
                }
                //   echo"k1";exit;
                $property->facilities = $_GET['fa'];
                $property->save();
            }

        }
        $common = new Common();
        $property = $common->get_single_property($property_id);
        $property_bed_type = DB::table('bed_type')->get();
        Session::put('main_cat', $property->main_cat);
        Session::put('property_id', $property->id);
        return view('admin.property.description', compact('property'));

    }
    public function property_media()
    {
        $property_arr = array();
        if (Session::get('property_id') != "") {
            $property_id = Session::get('property_id');
            $data = Property::find($property_id);
            if (isset($_GET['description'])) {
                $data->description = $_GET['description'];
            }
            $data->save();
            $PropertyImage = PropertyImage::where('property_id', $property_id)->get();
            foreach ($PropertyImage as $p) {
                $property_arr[] = $p->image;
            }

        }
        $common = new Common();
        $data = $common->get_single_property($property_id);
        $property_bed_type = DB::table('bed_type')->get();
        Session::put('main_cat', $data->main_cat);
        Session::put('property_id', $data->id);
        return view('admin.property.media', compact('data', 'property_arr'));
    }
    public function media_store(Request $request)
    {
        if (Session::get('property_id') != "") {
            $property_id = Session::get('property_id');
            $property = Property::find($property_id);
            $common = new Common();
            if ($request->file('list_image')) {
                $file = $request->file('list_image');
                $fileName = $common->upload_image('properties', $file);
                if ($fileName) {
                    if ($property->main_image) {
                        //   unlink(public_path('uploads/properties/'.$property->main_image)) ;           
                    }
                    $property->main_image = $fileName;
                }
            }

            if ($request->file('video')) {
                $file = $request->file('video');
                $fileName = $common->upload_video('videos', $file);
                if ($property->video_url) {
                    // unlink(public_path('uploads/videos/'.$property->video_url)) ;           
                }
                $property->video_url = $fileName;

            }
            if (isset($_POST['Youtube_video_url'])) {
                $property->Youtube_video_url = $_POST['Youtube_video_url'];

            }
            $property->save();
            $role = Auth::user()->role;

            if ($files = $request->file('extra_img')) {
                $PropertyImage = PropertyImage::where('property_id', $property_id)->get();
                if ($PropertyImage) {
                    foreach ($PropertyImage as $p) {
                        // unlink(public_path('uploads/properties/'.$p->image)) ;
                        // PropertyImage::where('id',$p->id)->delete();
                    }

                }
                foreach ($files as $file) {
                    $fileName = $common->upload_image('properties', $file);
                    $PropertyImage = new PropertyImage();
                    $PropertyImage->image = $fileName;
                    $PropertyImage->property_id = $property_id;
                    $PropertyImage->save();
                }
            }


        }
        return redirect('admin/properties?a=3&&b=7&&no=4')->with('success', 'Added Successfully!');

    }
    public function add_automobiles()
    {
        $users = User::where('status', 1)->get();
        if (isset($_GET['user_id'])) {
            $automobiles = new Automobiles();
            // echo"<pre>";print_r($auto);exit;
            $automobiles->user_id = $_GET['user_id'];
            $automobiles->save();
            $id = $automobiles->id;
            // return redirect()->route('admin/edit-automobiles/'.$id);
            return redirect('admin/edit-automobiles/' . $id . '?a=4&&b=43');
        }
        return view('admin.automobiles.add_auto', compact('users'));
    }
    public function automobile_details(Request $request)
    {

        $data = array();
        $no = isset($_GET['no']) ? $_GET['no'] : 0;
        $common = new Common();
        $property = $common->auto_store($request);
        if (Session::has('a_id')) {
            $eid = Session::get('a_id');
            $data = Automobiles::find($eid);
        }
        if ($no == 2) {
            $filter_arr[0] = DB::table('type_automobiles')->where('status', 1)->get();
            $filter_arr[1] = DB::table('brand_model')->where('status', 1)->get();
            $filter_arr[2] = DB::table('brand')->where('status', 1)->get();
            $filter_arr[3] = DB::table('fuel_type')->where('status', 1)->get();
            $filter_arr[4] = DB::table('color')->where('status', 1)->get();
            $filter_arr[5] = DB::table('body_type')->where('status', 1)->get();
            $filter_arr[6] = DB::table('ie_counties')->where('status', 1)->get();
            return view('admin.automobiles.details', compact('data', 'filter_arr'));
        }
        if ($no == 3) {
            return view('admin.automobiles.description', compact('data'));
        }
        if ($no == 4) {
            $property_arr = array();
            $PropertyImage = AutomobileImage::where('a_id', $eid)->get();
            foreach ($PropertyImage as $p) {
                $property_arr[] = $p->image;
            }

            return view('admin.automobiles.media', compact('data', 'property_arr'));
        }
    }
    public function automobile_media_store(Request $request)
    {
        if (Session::get('a_id') != "") {

            $a_id = Session::get('a_id');
            $data = Automobiles::find($a_id);
            $common = new Common();
            if ($request->file('list_image')) {
                $file = $request->file('list_image');
                $fileName = $common->upload_image('automobiles', $file);
                if ($fileName) {
                    if ($data->main_image) {
                        //   unlink(public_path('uploads/properties/'.$property->main_image)) ;           
                    }
                    $data->main_image = $fileName;
                }
            }

            if ($request->file('video')) {
                $file = $request->file('video');
                $fileName = $common->upload_video('videos', $file);
                if ($data->video_url) {
                    // unlink(public_path('uploads/videos/'.$property->video_url)) ;           
                }
                $data->video_url = $fileName;

            }
            if (isset($_POST['Youtube_video_url'])) {
                $data->Youtube_video_url = $_POST['Youtube_video_url'];

            }
            $data->save();
            $role = Auth::user()->role;

            if ($files = $request->file('extra_img')) {
                $AutomobileImage = AutomobileImage::where('a_id', $a_id)->get();
                if ($AutomobileImage) {
                    foreach ($AutomobileImage as $p) {
                        // unlink(public_path('uploads/properties/'.$p->image)) ;
                        // PropertyImage::where('id',$p->id)->delete();
                    }

                }
                foreach ($files as $file) {
                    $fileName = $common->upload_image('automobiles', $file);
                    $AutomobileImage = new AutomobileImage();
                    $AutomobileImage->image = $fileName;
                    $AutomobileImage->a_id = $a_id;
                    $AutomobileImage->save();
                }
            }


            return redirect('admin/automobiles?a=3&&b=7&&no=4')->with('success', 'Added Successfully!');

        }
    }
    public function county()
    {
        $query = DB::table('ie_counties');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('name' => $_GET['county']);
            $save = DB::table('ie_counties')->insert($data);
            if ($save) {
                return redirect('admin/county?a=11&&b=11&&no=4')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.county', compact('counties'));
    }
    public function delete_county($id)
    {
        $save = DB::table('ie_counties')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/county?a=11&&b=11&&no=11')->with('success', 'Deleted Successfully!');
        }
    }
    public function vehicle()
    {
        $query = DB::table('type_automobiles');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('auto_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('auto_name' => $_GET['county']);
            $save = DB::table('type_automobiles')->insert($data);
            if ($save) {
                return redirect('admin/vehicle?a=11&&b=7&&no=12')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.vehicles', compact('counties'));
    }
    public function delete_vehicle($id)
    {
        $save = DB::table('type_automobiles')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/vehicle?a=11&&b=7&&no=12')->with('success', 'Deleted Successfully!');
        }
    }
    public function brand()
    {
        $query = DB::table('brand');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('brand_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('brand_name' => $_GET['county']);
            $save = DB::table('brand')->insert($data);
            if ($save) {
                return redirect('admin/brand?a=11&&b=7&&no=13')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.brand', compact('counties'));
    }
    public function delete_brand($id)
    {
        $save = DB::table('brand')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/brand?a=11&&b=7&&no=13')->with('success', 'Deleted Successfully!');
        }
    }
    public function modal()
    {
        $brand = DB::table('brand')->get();
        $query = DB::table('brand_model');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('model_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('model_name' => $_GET['county'], 'brand_id' => $_GET['brand_id']);
            $save = DB::table('brand_model')->insert($data);
            if ($save) {
                return redirect('admin/modal?a=11&&b=7&&no=14')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        // echo"<pre>";print_r($brand);exit;
        return view('admin.master.modal', compact('counties', 'brand'));
    }
    public function delete_modal($id)
    {
        $save = DB::table('brand_model')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/modal?a=11&&b=7&&no=14')->with('success', 'Deleted Successfully!');
        }
    }
    public function color()
    {
        $query = DB::table('color');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('color_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('color_name' => $_GET['county']);
            $save = DB::table('color')->insert($data);
            if ($save) {
                return redirect('admin/color?a=11&&b=7&&no=15')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.color', compact('counties'));
    }
    public function delete_color($id)
    {
        $save = DB::table('color')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/color?a=11&&b=7&&no=15')->with('success', 'Deleted Successfully!');
        }
    }
    public function fuel()
    {
        $query = DB::table('fuel_type');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('fuel_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('fuel_name' => $_GET['county']);
            $save = DB::table('fuel_type')->insert($data);
            if ($save) {
                return redirect('admin/fuel?a=11&&b=7&&no=16')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.fuel', compact('counties'));
    }
    public function delete_fuel($id)
    {
        $save = DB::table('fuel_type')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/fuel?a=11&&b=16')->with('success', 'Deleted Successfully!');
        }
    }
    public function body_type()
    {
        $query = DB::table('body_type');
        if (!empty($_GET['keyword'])) {
            $location = $_GET['keyword'];
            $query->Where('body_name', 'like', "%{$location}%");
        }
        if (!empty($_GET['county'])) {
            $data = array('body_name' => $_GET['county']);
            $save = DB::table('body_type')->insert($data);
            if ($save) {
                return redirect('admin/body_type?a=11&&b=7&&no=17')->with('success', 'Added Successfully!');
            }
        }
        $counties = $query->paginate(20);
        return view('admin.master.body_type', compact('counties'));
    }
    public function delete_body_type($id)
    {
        $save = DB::table('body_type')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/body_type?a=11&&b=17')->with('success', 'Deleted Successfully!');
        }
    }
    public function admin_register(Request $request)
    {
        $data = $_POST;
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['string', 'min:7'],
            // 'address' => ['string', 'min:10'],
            'role' => ['required', 'string'],
        ]);
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'code' => $data['code'],
            'codew' => $data['codew'],
            'whatsapp' => $data['whatsapp'],
            'verify_tocken' => 0
        ]);
        if ($data['role'] == "agent") {
            return redirect('admin/agents?a=6&&b=2')->with('success', 'Added  Successfully!');
        } else {
            return redirect('admin/agents?a=6&&b=1&&u=1')->with('success', 'Added  Successfully!');
        }
    }
    //  public function  edit_password_change()
    // {

    //   $b=$_POST['b'];
    //   $user_id=$_POST['user_id'];
    //   $user=User::find($user_id);
    //   $user->password=bcrypt($_POST['password_c']);
    //   $save=$user->save();
    //   if($save)
    //   {
    //       if($b==1)
    //       {
    //       return redirect('admin/agents?a=6&&b=1&&u=1')->with('success','Password Changed Successfully!');
    //       }
    //       else
    //       {
    //          return redirect('admin/agents?a=6&&b=2')->with('success','Password Changed Successfully!');  
    //       }
    //   }
    // }
    public function edit_password_change()
    {
        $b = $_POST['b'] ?? null; // Use null if 'b' does not exist
        $user_id = $_POST['user_id'] ?? null; // Use null if 'user_id' does not exist

        if (!$user_id || !isset($_POST['password_c'])) {
            return redirect()->back()->with('error', 'Invalid request data!');
        }

        $user = User::find($user_id);

        if ($user) {
            $user->password = bcrypt($_POST['password_c']);
            $save = $user->save();

            if ($save) {
                if ($b == 1) {
                    return redirect('admin/agents?a=6&&b=1&&u=1')->with('success', 'Password Changed Successfully!');
                } else {
                    return redirect('admin/agents?a=6&&b=2')->with('success', 'Password Changed Successfully!');
                }
            }
        }

        return redirect()->back()->with('error', 'Failed to update password!');
    }

    //Admin can edit cookies policy.
    public function cookiespolicy(Request $request)
    {
        $term = Term::findOrFail(1);
        if (!$term) {
            $term = new Term();
        }

        if ($request->isMethod('put')) {
            // Validate inputs
            $validated = $request->validate([
                'privacy' => 'nullable|string',
                'equality' => 'nullable|string',
                'cookie' => 'nullable|string',
                'terms' => 'nullable|string'
            ]);

            // Update the terms with the validated input data
            $term->privacy = $request->input('privacy');
            $term->equality = $request->input('equality');
            $term->cookie = $request->input('cookie');
            $term->terms = $request->input('terms');

            // Save the updated model to the database
            $term->save();

            return redirect()->route('admin.cookie')->with('success', 'Terms and conditions updated successfully');
        }

        return view('admin.cookie', compact('term'));
    }


    /* VAT functions 06-01-2025 */

    public function vat()
    {
        $query = DB::table('vat');

        if (!empty($_GET['vat'])) {
            $data = array('vat' => $_GET['vat']);
            $save = DB::table('vat')->insert($data);
            if ($save) {
                return redirect('admin/vat')->with('success', 'Added Successfully!');
            }
        }
        $vat = $query->paginate(20);
        return view('admin.master.vat', compact('vat'));
    }
    public function delete_vat($id)
    {
        $save = DB::table('vat')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/vat')->with('success', 'Deleted Successfully!');
        }
    }

    /* Function for add new facilities 16-01-2025 */

    public function add_facilities()
    {
        $query = DB::table('facilities');

        if (!empty($_GET['facilities'])) {
            $data = array('facilities' => $_GET['facilities']);
            $save = DB::table('facilities')->insert($data);
            if ($save) {
                return redirect('admin/add_facilities')->with('success', 'Added Successfully!');
            }
        }
        $facilities = $query->paginate(20);
        return view('admin.master.facilities', compact('facilities'));
    }
    public function delete_facilities($id)
    {
        $save = DB::table('facilities')->where('id', $id)->delete();
        if ($save) {
            return redirect('admin/add_facilities')->with('success', 'Deleted Successfully!');
        }
    }

    /* Facilities FUNCTIONS ENDS */

    // Reports
    // public function report(Request $request)
    // {
    // $query = User::leftJoin('orders', 'users.id', '=', 'orders.customer_id')
    //     ->select(
    //         'users.name',
    //         'users.email',
    //         'users.phone',
    //         'users.role',
    //         'users.premium',
    //         'users.address',
    //         DB::raw('COUNT(orders.order_id) AS total_orders'),
    //         DB::raw('SUM(orders.amount) AS total_amount'),
    //         DB::raw('MIN(orders.created_at) AS first_order_date'),
    //         DB::raw('MAX(orders.created_at) AS last_order_date'),
    //         DB::raw('GROUP_CONCAT(orders.unique_id SEPARATOR ", ") AS unique_id'),
    //         DB::raw('GROUP_CONCAT(orders.order_id SEPARATOR ", ") AS order_id')
    //     )
    //     ->groupBy(
    //         'users.id',
    //         'users.name',
    //         'users.email',
    //         'users.phone',
    //         'users.role',
    //         'users.premium',
    //         'users.address'
    //     );

    // // Apply filters
    // if ($request->has('role') && $request->role) {
    //     $query->where('users.role', $request->role);
    // }

    // if ($request->has('start_date') && $request->start_date) {
    //     $query->whereDate('orders.created_at', '>=', $request->start_date);
    // }

    // if ($request->has('end_date') && $request->end_date) {
    //     $query->whereDate('orders.created_at', '<=', $request->end_date);
    // }

    // if ($request->has('name') && $request->name) {
    //     $query->where('users.name', 'like', '%' . $request->name . '%');
    // }

    // // Paginate results
    // $users = $query->paginate(10);

    // // Fetch total amount
    // $totalAmount = User::leftJoin('orders', 'users.id', '=', 'orders.customer_id')
    //     ->select(DB::raw('SUM(orders.amount) AS grand_total_amount'))
    //     ->value('grand_total_amount');

    // return view('admin.report', compact('users', 'totalAmount'));
    // }
// Reports
    public function report(Request $request)
    {
        $query = User::join('orders', 'users.id', '=', 'orders.customer_id') // INNER JOIN to exclude users without orders
            ->select(
                'users.name',
                'users.email',
                'users.phone',
                'users.role',
                'users.premium',
                'users.address',
                DB::raw('COUNT(orders.order_id) AS total_orders'),
                DB::raw('SUM(orders.amount) AS total_amount'),
                DB::raw('MIN(orders.created_at) AS first_order_date'),
                DB::raw('MAX(orders.created_at) AS last_order_date'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.unique_id SEPARATOR ", ") AS unique_id'),
                DB::raw('GROUP_CONCAT(DISTINCT orders.order_id SEPARATOR ", ") AS order_id')
            )
            ->groupBy(
                'users.id',
                'users.name',
                'users.email',
                'users.phone',
                'users.role',
                'users.premium',
                'users.address'
            );

        // Apply filters
        if ($request->has('role') && $request->role) {
            $query->where('users.role', $request->role);
        }

        if ($request->has('start_date') && $request->start_date) {
            $query->whereDate('orders.created_at', '>=', $request->start_date);
        }

        if ($request->has('end_date') && $request->end_date) {
            $query->whereDate('orders.created_at', '<=', $request->end_date);
        }

        if ($request->has('name') && $request->name) {
            $query->where('users.name', 'like', '%' . $request->name . '%');
        }

        // Paginate results
        $users = $query->paginate(10);

        // Fetch total amount only from users who have orders
        $totalAmount = User::join('orders', 'users.id', '=', 'orders.customer_id') // INNER JOIN
            ->select(DB::raw('SUM(orders.amount) AS grand_total_amount'))
            ->value('grand_total_amount');

        return view('admin.report', compact('users', 'totalAmount'));
    }

    public function exportReport()
    {
        // Fetch all user data with aggregated fields (no pagination)
        $users = User::Join('orders', 'users.id', '=', 'orders.customer_id')
            ->select(
                'users.name',
                'users.email',
                'users.phone',
                'users.role',
                'users.premium',
                'users.address',
                DB::raw('COUNT(orders.order_id) AS total_orders'),
                DB::raw('SUM(orders.amount) AS total_amount'),
                DB::raw('MIN(orders.created_at) AS first_order_date'),
                DB::raw('MAX(orders.created_at) AS last_order_date'),
                DB::raw('GROUP_CONCAT(orders.unique_id SEPARATOR ", ") AS unique_id'),
                DB::raw('GROUP_CONCAT(orders.order_id SEPARATOR ", ") AS order_id')
            )
            ->groupBy(
                'users.id',
                'users.name',
                'users.email',
                'users.phone',
                'users.role',
                'users.premium',
                'users.address'
            )
            ->orderByDesc(DB::raw('total_orders'))
            ->get();

        // Calculate the total amount for all users
        $totalAmount = $users->sum('total_amount');

        // Generate the PDF
        $pdf = Pdf::loadView('admin.export_report', compact('users', 'totalAmount'));

        // Return the PDF as a download
        return $pdf->download('user_report.pdf');
    }

    //delete user_report
    public function deleteUser(Request $request)
    {
        $user = User::find($request->user_id);

        if ($user) {
            // Delete related records first (adjust table names as per your DB)
            DB::table('orders')->where('customer_id', $user->id)->delete();
            DB::table('customers')->where('user_id', $user->id)->delete();

            // Now delete the user
            $user->delete();

            return redirect()->back()->with('success', 'User deleted successfully.');
        }

        return redirect()->back()->with('error', 'User not found.');
    }
    public function togglePropertySubscriptionStatus(Request $request)
    {
        dd($request);
        $subscription = PropertySubscription::find($request->id);
        if (!$subscription) {
            return response()->json(['status' => false, 'message' => 'Subscription not found']);
        }

        // Toggle between active/inactive
        $subscription->payment_mode = $subscription->payment_mode == 1 ? 0 : 1;
        $subscription->save();

        return response()->json([
            'status' => true,
            'new_status' => $subscription->payment_mode,
            'message' => 'Status updated successfully'
        ]);
    }

}
