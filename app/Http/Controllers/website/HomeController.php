<?php
namespace App\Http\Controllers\website;
use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\ItemViews;
use App\Models\AmenitiesOnProperties;
use App\Models\PropertyImage;
use App\Models\SavedProperty;
use App\Models\Automobiles;
use App\Models\User;
use App\Models\AutomobileImage; 
use App\Models\Banner; 
use App\Models\Ads;
use App\Models\ParkingSlot;
use App\Models\Testimonial;
use App\Models\ContactEnquiry;
use App\Models\Upcity;
use App\Models\Upcounty;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mime\Part\TextPart;
use Symfony\Component\Mime\Part\HtmlPart;
use Intervention\Image\Facades\Image;
use App\Models\PropertySubscription;
use App\Models\PropertyEnquiry;
use Illuminate\Support\Facades\DB;
use App\Models\Adverisement;
use App\Mail\TestMail;
use Auth;
// use DB;
use Session;
use Str;
use App\Models\Common;
use App\Models\Term;
use Illuminate\Http\Request;

class HomeController extends Controller{
    
  public function stampImage()
{
    // Path to your base image and stamp image
    $basePath = public_path('uploads/properties/1699078245.jpg');
    $stampPath = public_path('website/images/logo111.png');

    // Load the base image and the stamp
    $baseImage = Image::make($basePath);
    $stamp = Image::make($stampPath);

    // Calculate stamp size relative to the base image dimensions
    $baseWidth = $baseImage->width();
    $desiredStampWidth = $baseWidth * 0.3; // Adjust the percentage as needed
    $stamp->resize($desiredStampWidth, null, function ($constraint) {
        $constraint->aspectRatio();
    });

    // Stamp the image (overlay the stamp onto the base image)
    $baseImage->insert($stamp, 'top-right', 30, 20);

    // Output the image to the browser
    return $baseImage->response();
}

public function fetchpropertiimage($image)
{
    $basePath = public_path('uploads/properties/'.$image);
    $stampPath = public_path('website/images/Home-Ireland-Logo-01.png');

    // Load the base image and the stamp
    $baseImage = Image::make($basePath);
    $stamp = Image::make($stampPath);

    // Calculate stamp size relative to the base image dimensions
    $baseWidth = $baseImage->width();
    $desiredStampWidth = $baseWidth * 0.3; // Adjust the percentage as needed
    $stamp->resize($desiredStampWidth, null, function ($constraint) {
        $constraint->aspectRatio();
    });

    // Stamp the image (overlay the stamp onto the base image)
    $baseImage->insert($stamp, 'top-right', 10, 10);

    // Output the image to the browser
    return $baseImage->response();  
}
public function fetchpropertishowimage($image)
{
    $basePath = public_path('uploads/properties/'.$image);
    $stampPath = public_path('website/images/Home-Ireland-Logo-01.png');

    // Load the base image and the stamp
    $baseImage = Image::make($basePath);
    $stamp = Image::make($stampPath);

    // Calculate stamp size relative to the base image dimensions
    $baseWidth = $baseImage->width();
    $desiredStampWidth = $baseWidth * 0.3; // Adjust the percentage as needed
    $stamp->resize($desiredStampWidth, null, function ($constraint) {
        $constraint->aspectRatio();
    });

    // Stamp the image (overlay the stamp onto the base image)
    $baseImage->insert($stamp, 'top-right', 10, 10);

    // Output the image to the browser
    return $baseImage->response();  
}

   public function fetchautoimage($image)
{
    $basePath = public_path('uploads/automobiles/'.$image);
    $stampPath = public_path('website/images/Home-Ireland-Logo-01.png');

    // Load the base image and the stamp
    $baseImage = Image::make($basePath);
    $stamp = Image::make($stampPath);

    // Calculate stamp size relative to the base image dimensions
    $baseWidth = $baseImage->width();
    $desiredStampWidth = $baseWidth * 0.3; // Adjust the percentage as needed
    $stamp->resize($desiredStampWidth, null, function ($constraint) {
        $constraint->aspectRatio();
    });

    // Stamp the image (overlay the stamp onto the base image)
    $baseImage->insert($stamp, 'top-right', 10, 10);

    // Output the image to the browser
    return $baseImage->response();  
}

    public function index()
    {
        // mail("jusammilamk@gmail.com","My subject","testt");
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        // j3
        for($i=1;$i<=5;$i++)
        {
            $property_subsciption_temp = PropertySubscription::find($i);
            // echo"<pre>";print_r()
            $subscription_statusp[$i] = $property_subsciption_temp ? $property_subsciption_temp->payment_mode : 0;
           $bed_type_properties= DB::table('bed_type')->get();
            if($subscription_statusp[$i]==1)
            {
                $properties[$i]=Property::select('*','users.id as user_id','properties.id as id')
                ->join('users', 'properties.user_id', '=', 'users.id')
                ->where('properties.status',1)->where('users.status',1)
                 ->whereNotIn('main_cat',[9,10,11,12])
                ->where('subcription_type',$i)->where('payment_status',1)->take(8)->orderBy('properties.id','desc')->get();
            }
            else
            {
                 $properties[$i]=Property::select('*','users.id as user_id','properties.id as id')
                ->join('users', 'properties.user_id', '=', 'users.id')
                ->where('properties.status',1)->where('users.status',1)
                 ->whereNotIn('main_cat',[9,10,11,12])
                ->where('subcription_type',$i)->take(8)->orderBy('properties.id','desc')->get();
            }
        }
        
        $Agent_property = collect($properties[3])->merge(collect($properties[4]))->merge(collect($properties[5]));
        $Agent_property = (object) $Agent_property->all();

        $user_id=Auth::id();
        $automobiles=Automobiles::take(4)->get();
        $banners=Banner::where('status','active')->where('page','property')->orderBy('sort_order','asc')->get();
        
     for($i=1;$i<=3;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[1];
        $middleads=$ads[2];
        $bottomads=$ads[3];
       
         return view('website.main',compact('bed_type_properties','properties','Agent_property','automobiles','topads','middleads','bottomads','banners'));

    } 
        public function sampleIndex()
    {

        $properties=Property::where('status','active')->where('make_featured','on')->take(8)->get();
    
        $propertiescount=Property::where('status','active')->where('make_featured','on')->count();
        $propertisellcount=Property::where('transaction_type','Sell')->where('status','active')->count();
        $propertirentcount=Property::where('transaction_type','Rent')->where('status','active')->count();
        $user_id=Auth::id();
        $automobiles=Automobiles::take(4)->get();
        $banners=Banner::where('status','active')->where('page','property')->orderBy('sort_order','asc')->get();
 
     
        $topads=Ads::where('page','home')->where('status','on')->where('display_section','top')->where('status','on')->inRandomOrder()->get();
        $middleads=Ads::where('page','home')->where('status','on')->where('display_section','middle')->where('status','on')->inRandomOrder()->get();
        $bottomads=Ads::where('page','home')->where('status','on')->where('display_section','bottom')->where('status','on')->inRandomOrder()->get();
        $ads=Ads::all();
 
         return view('website.sample',compact('properties','automobiles','propertisellcount','propertirentcount','propertiescount','topads','middleads','bottomads','banners'));

    }
    public function add_review(Request $request)
     {
      $testimonial = new Testimonial();
      $testimonial->property_id=$request['property_id'];
      $testimonial->description=$request['description'];
      $testimonial->user_id=Auth::id();
      $testimonial->save();
        Session::put('confirm','Review Added Successfully');
      return back();
     }
 public function enquiry_submit()
{
    $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
    $enquiry_flag=0;
    if($_GET['enquiry_flag']==0)
    {
       $enquiry_flag=1; 
    }
    
    DB::table('property_enquiries')->insert([
    'name' => $_GET['name'],
    'email' => $_GET['email'],
    'phone' => $_GET['phone'],
    'type' => 3,
    'message' => $_GET['message'],
    'property_id'=>$_GET['id'],
    'show_to_seller'=>$enquiry_flag
     ]);
 return redirect()->back()->with('success','Submitted Successfully !');
}
 public function enquiry_submit_admin()
{
    $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
    $enquiry_flag=0;
    if($_GET['enquiry_flag']==0)
    {
       $enquiry_flag=1; 
    }
    
    DB::table('property_enquiries')->insert([
    'name' => $_GET['name'],
    'email' => $_GET['email'],
    'phone' => $_GET['phone'],
    'type' => 4,
    'message' => $_GET['message'],
    'property_id'=>$_GET['id'],
    'show_to_seller'=>$enquiry_flag
     ]);
 return redirect()->back()->with('success2','Submitted Successfully !');
}
public function enquiry_auto_submit()
{
    $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
    $enquiry_flag=0;
    if($_GET['enquiry_flag']==0)
    {
       $enquiry_flag=1; 
    }
    
    DB::table('property_enquiries')->insert([
    'name' => $_GET['name'],
    'email' => $_GET['email'],
    'phone' => $_GET['phone'],
    'type' => 2,
    'message' => $_GET['message'],
    'property_id'=>$_GET['id'],
    'show_to_seller'=>$enquiry_flag
     ]);
 return redirect()->back()->with('success','Submitted Successfully !');
}
    public function property_show($id)
    {
               $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
                         $query = Property::query();
                         $query->select('*','users.id as user_id','properties.id as id');
                         $query->join('users', 'properties.user_id', '=', 'users.id');
                         $query->where('properties.id',$id);
                         $property=$query->first();
         if (!$property) {
             return abort(404);
         }
         if($property)
        {
           $lat_real_count= $property->view_count;
        }
        else
        {
           $lat_real_count=0;
        }
        $user_id=Auth::id();
        $add_to_count=$lat_real_count + 1;
        $data=array('view_count'=>$add_to_count);
        // print_r($data);exit;
          DB::table('properties')->where('id',$id)->update(array('view_count'=>$add_to_count));
        $prop_images=PropertyImage::where('property_id',$id)->get();
   
                   $query = Property::query();
                            $query->where('status','1');
          if (!empty($property->property_type)) {
              $query->where('property_type','like', '%'.$property->property_type.'%' );
          }
          
            $similarproperties = $query->get();
       $Enquiry_setting = DB::table('Enquiry_setting')
           ->where('id',1)
           ->first();
            $data['enquiry_flag']=0;
           if($Enquiry_setting->status==1)
           {
               $admin=User::where('role','admin')->first();
               $data['admin']=$admin;
               $data['enquiry_flag']=1;
           }
        //   echo"<pre>";print_r($data);exit;
      $main_cat=$property->main_cat;
                                  
      $main_cat_arr= [$main_cat];
      
     for($i=1;$i<=5;$i++)
        {
            $property_subsciption_temp = PropertySubscription::find($i);
            // echo"<pre>";print_r()
            $subscription_statusp[$i] = $property_subsciption_temp ? $property_subsciption_temp->payment_mode : 0;
           $bed_type_properties= DB::table('bed_type')->get();
            if($subscription_statusp[$i]==1)
            {
                $properties[$i]=Property::select('*','users.id as user_id','properties.id as id')
                    ->join('users', 'properties.user_id', '=', 'users.id')
                   ->where('properties.status',1)->where('users.status',1)
                    ->whereIn('main_cat',$main_cat_arr)
                   ->where('payment_status',1)->take(8)->orderBy('properties.id','desc')->get();
            }
            else
            {
                 $properties[$i]=Property::select('*','users.id as user_id','properties.id as id')
                    ->join('users', 'properties.user_id', '=', 'users.id')
                    ->where('properties.status',1)->where('users.status',1)
                     ->whereIn('main_cat',$main_cat_arr)
                    ->take(8)->orderBy('properties.id','desc')->get();
            }
        }
        $bed_type_properties= DB::table('bed_type')
                                           ->get();
        $topads=Ads::where('ad_id','7')->where('status','1')->get();
        $middleads=Ads::where('ad_id','8')->where('status','1')->inRandomOrder()->get();
        $bottomads=Ads::where('ad_id','9')->where('status','1')->inRandomOrder()->get();
     return view('website.property_view',compact('bed_type_properties','properties','property','prop_images','topads','middleads','bottomads','similarproperties','data'));

    }
    public function slot_show($id)
    {
$common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $property=ParkingSlot::where('id',$id)->first();
        if($property)
        {
           $lat_real_count= $property->view_count;
        }
        else
        {
           $lat_real_count=0;
        }
        $user_id=Auth::id();
        $add_to_count=$lat_real_count + 1;
        $data=array('view_count'=>$add_to_count);
          ParkingSlot::where('id',$id)->update($data);
        $prop_images=PropertyImage::where('property_id',$id)->get();
        $amenities=AmenitiesOnProperties::where('property_id',$id)->get();
        $amenitiescount=AmenitiesOnProperties::where('property_id',$id)->count();
       
        $chk=SavedProperty::where('property_id',$id)->where('user_id',$user_id)->exists();
        $topads=Ads::where('page','Property View')->where('display_section','top')->where('status','on')->get();
        $middleads=Ads::where('page','Property View')->where('display_section','middle')->where('status','on')->inRandomOrder()->get();
        $bottomads=Ads::where('page','Property View')->where('display_section','bottom')->where('status','on')->inRandomOrder()->get();
     return view('website.slot_view',compact('property','amenities','prop_images','chk','amenitiescount','topads','middleads','bottomads'));        
        
    }
    public function sub_prop_enq(Request $request)
     {
$name = $request['name'];
$phone = $request['phone'];
$email = $request['email'];
$propid = $request['propid'];

Mail::raw("Property Id: $propid\nName: $name\nPhone: $phone\nEmail: $email", function ($message) {
    $message->to('lijo.nubicus@gmail.com')
        ->subject('Quick Enquiry');
});
     }
        public function automobile_show($id)
    {
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $automobile=Automobiles::where('id',$id)->first();
         if($automobile)
          {
            $lat_real_count= $automobile->view_count;
          }
         else
          {
            $lat_real_count=0;
          }
        $user_id=Auth::id();
        $add_to_count=$lat_real_count + 1;
        $data=array('view_count'=>$add_to_count);
          Automobiles::where('id',$id)->update($data);
        $prop_images=AutomobileImage::where('automobile_id',$id)->get();
        $amenities=AmenitiesOnProperties::where('property_id',$id)->get();
        $amenitiescount=AmenitiesOnProperties::where('property_id',$id)->count();
        $savedproperty=SavedProperty::where('user_id',$user_id)->get();
        $chk=SavedProperty::where('property_id',$id)->where('user_id',$user_id)->exists();
        $topads=Ads::where('page','Automobile View')->where('display_section','top')->where('status','on')->inRandomOrder()->take(3)->get();
        $middleads=Ads::where('page','Automobile View')->where('display_section','middle')->where('status','on')->inRandomOrder()->take(3)->get();
        $bottomads=Ads::where('page','Automobile View')->where('display_section','bottom')->where('status','on')->inRandomOrder()->take(3)->get();
         return view('website.automobile_view',compact('automobile','amenities','prop_images','chk','savedproperty','amenitiescount','topads','middleads','bottomads'));        
    }
    
    public function save_properties(Request $request)
    {
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
     $property_id = $request['property_id'];
     $user_id=Auth::id();
     $chk=SavedProperty::where('property_id',$property_id)->where('user_id',$user_id)->exists();
     if($chk == true)
      {
         SavedProperty::where('property_id',$property_id)->where('user_id',$user_id)->delete();
      } 
      else{
        $prop= new SavedProperty();
        $prop->property_id=$property_id;
        $prop->user_id=$user_id;
        $prop->save();       
       } 

    }
    public function automobiles()
    {
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        // z1
        $common=new Common();
          $allautos=array();
        //   $all_auto=$common->get_auto();
          $data=$common->get_auto(1);
// echo"<pre>";print_r($data);
        
        $banners=Banner::where('status','active')->where('page','automobile')->orderby('sort_order')->get();
        for($i=16;$i<=18;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[16];
        $middleads=$ads[17];
        $bottomads=$ads[18];
        
        $filter_arr[0]=DB::table('type_automobiles')->where('status',1)->get();
         $filter_arr[1]=DB::table('brand_model')->where('status',1)->get();
         $filter_arr[2]=DB::table('brand')->where('status',1)->get();
         $filter_arr[3]=DB::table('fuel_type')->where('status',1)->get();
         $filter_arr[4]=DB::table('color')->where('status',1)->get();
         $filter_arr[5]=DB::table('body_type')->where('status',1)->get();
         $filter_arr[6]=DB::table('ie_counties')->where('status',1)->get();
       return view('website.automobiles',compact('filter_arr','data','banners','topads','middleads','bottomads'));
    }
    public function allproperties()
    {
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $allproperties=Property::where('status','active')->paginate(15);
        $featuredproperties=Property::where('make_featured','on')->where('status','active')->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('status','active')->count();
        $allpropertiescount = Property::count();
         $topads = Ads::where('page', 'Properties List')->where('display_section', 'top')->where('status', 'on')->get();
        $banners=Banner::where('status','active')->where('page','property')->orderBy('sort_order','asc')->get();
      
     return view('website.allproperties',compact('featuredproperties','allproperties','featuredpropertiescount','allpropertiescount','topads','banners'));
    }
     public function parking_slots(Request $request)
      {
          $parking_cat=Session::get('parking_cat');
          if($parking_cat == 'For  Sale')
           {
               $parking_cat = 'For Sale';
           }
    
          if($parking_cat == 'For Sale')
          {
              $parking_cat='Sell';
          }
          elseif($parking_cat == 'To Rent')
          {
              $parking_cat='Rent';
          }
          elseif($parking_cat == 'To Share')
          {
              $parking_cat='Share';
          }
          $city=$request['city'];
          $string=$request['city'];
          
            if($city == '')
          {
             
              $city=Session::get('city_session');
             
              $string=$city;
          }
         if(isset($city))
         {
            $words = explode(' ', $city);
            $city = isset($words[0]) ? $words[0] : '';    
             $parkingslots = ParkingSlot::where('transaction_type',$parking_cat)->where('full_address', 'like', '%'.$city.'%')->get();
        $featuredslots=ParkingSlot::where('transaction_type',$parking_cat)->where('make_featured','on')->where('full_address', 'like', '%'.$city.'%')->get();
        $featuredslotscount = ParkingSlot::where('transaction_type',$parking_cat)->where('make_featured','on')->where('full_address', 'like', '%'.$city.'%')->count();
        $parkingslotscount = ParkingSlot::where('transaction_type',$parking_cat)->where('full_address', 'like', '%'.$city.'%')->count();        
         }
         else
         {
               $parkingslots = ParkingSlot::where('transaction_type',$parking_cat)->get();
        $featuredslots=ParkingSlot::where('transaction_type',$parking_cat)->where('make_featured','on')->get();
        $featuredslotscount = ParkingSlot::where('transaction_type',$parking_cat)->where('make_featured','on')->count();
        $parkingslotscount = ParkingSlot::where('transaction_type',$parking_cat)->count();      
         }

     return view('website.parkingslots',compact('featuredslots','parkingslots','featuredslotscount','parkingslotscount','parking_cat','city','string' ));            
      }
    public function about()
    {
        for($i=13;$i<=15;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
          $topads=$ads[13];
        $middleads=$ads[14];
        $bottomads=$ads[15];
      return view('website.about',compact('topads','middleads','bottomads'));  
    }
        public function services()
    {
       for($i=13;$i<=15;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
          $topads=$ads[13];
        $middleads=$ads[14];
        $bottomads=$ads[15];
        $term = Term::first();
        // $testimonials=Testimonial::where('status','on')->get();
      return view('website.services',compact('topads','middleads','bottomads','term'));  
    }
        public function contact_us()
    {
    
    for($i=13;$i<=15;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
          $topads=$ads[13];
        $middleads=$ads[14];
        $bottomads=$ads[15];
        
      return view('website.contact',compact('topads','middleads','bottomads'));  
    }

    public function getAreasInIreland()
    {
        $apiKey = config('services.google.places_api_key');
        $client = new Client();

        $response = $client->get("https://maps.googleapis.com/maps/api/place/autocomplete/json?input=Ireland&types=(regions)&key={$apiKey}");
        $areas = json_decode($response->getBody(), true);

        return response()->json($areas);
    }
    public function set_cat_session(Request $request)
     {
       $cat_session=$request['thistext'];
       Session::put('cat_session',$cat_session);
     }
     public function filtercommercialproperties(Request $request)
     {

     }

    public function filterproperties_backup(Request $request)
    {
        // kkl
        $counties=DB::table('ie_counties')->where('status',1)->get();
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $cat_session = Session::get('cat_session');
        $prop_sub_cat=$request['prop_sub_cat'];
         
         if(isset($request['prop_sub_cat']))
         {
            Session::put('prop_sub_cat',$request['prop_sub_cat']);
         }
         else
         {
            $prop_sub_cat=Session::get('prop_sub_cat');
            Session::forget('prop_sub_cat');
         }
         if($cat_session == 'Parking')
         {
             Session::put('city_session',$request['city']);
             $cityss =  Session::get('city_session');
              dd($cityss);
            return redirect('/parking-slots');
         }
         if($cat_session == 'Commercial')
         {

            $prop_sub_cat='Commercial';
            if($request['prop_sub_cat'] == 'To')
            {
                $cat_session = 'Rent';
            }
            elseif($request['prop_sub_cat'] == 'For')
            {
               $cat_session = 'Sell'; 
            }
            elseif($request['prop_sub_cat'] == 'Farm')
            {
               $cat_session = ''; 
               $prop_sub_cat='Agricultural';
            }
            else
            {
                $cat_session=''; 
            }
           
            
         }
         
         if($cat_session == 'Needed')
         {

            $cat_session='';
         }
         
        $req_province=$request['province'];
        $req_rooms=$request['rooms'];
        $req_price=$request['price'];

         if($cat_session == 'Buy')
          {
             $cat_session = 'Sell';
          }
        //    catsession is not null
         if($cat_session != '' || $cat_session != NULL)
         {
         
          if(isset($request['price']) && isset($request['rooms']))
          {           
            $after = Str::after($request['price'], '-');
            $before = Str::before($request['price'], '-');

        $allproperties = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('make_featured','off')->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->get();
        $featuredproperties = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->count();
          }
            elseif(isset($request['price']))
          {    
            $after = Str::after($request['price'], '-');
            $before = Str::before($request['price'], '-');
        $allproperties = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('make_featured','off')->where('transaction_type',$cat_session)->get();
        $featuredproperties = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('transaction_type',$cat_session)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('transaction_type',$cat_session)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('transaction_type',$cat_session)->count();
          }        
         elseif(isset($request['rooms']))
         {

        $allproperties = Property::where('province',$request['province'])->where('make_featured','off')->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->get();
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->where('bedrooms',$req_rooms)->count();
         }
         // elseif(isset($request['price']))
         // {

         // }
         else
         {
    
           if(isset($prop_sub_cat))
           {

            if($prop_sub_cat=='Students' || $prop_sub_cat=='Holiday' || $prop_sub_cat=='Apartment' || $prop_sub_cat=='House' || $prop_sub_cat=='Commercial')
            {

               if(isset($request['province']) && $request['province'] != 'Ulster') 
               {

        $allproperties = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();        
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();  
                           
               }
               else
               {
          
         $allproperties = Property::where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();    
        $featuredproperties = Property::where('make_featured','on')->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();
        $allpropertiescount = Property::where('transaction_type',$cat_session)->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();                    
               }
            }
            else
            {

              if(isset($request['province']) && $request['province'] != 'Ulster') 
               {
            
        $allproperties = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->get();

        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->count();    
               }
               else
               {
                  
         $allproperties = Property::where('transaction_type',$cat_session)->get();

        $featuredproperties = Property::where('make_featured','on')->where('transaction_type',$cat_session)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('transaction_type',$cat_session)->count();
        $allpropertiescount = Property::where('transaction_type',$cat_session)->count();                  
               }
            }
            
           }
           else
           {
          
        $allproperties = Property::where('province',$request['province'])->where('make_featured','off')->where('transaction_type',$cat_session)->get();
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('transaction_type',$cat_session)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('transaction_type',$cat_session)->count();
           }

         }      
         } 
         else
         {
     
          if(isset($request['price']) && isset($request['rooms']))
          {    

            $after = Str::after($request['price'], '-');
            $before = Str::before($request['price'], '-');

        $allproperties = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('make_featured','off')->where('bedrooms',$req_rooms)->get();
        $featuredproperties = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('bedrooms',$req_rooms)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->where('bedrooms',$req_rooms)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('bedrooms',$req_rooms)->count();
          }
            elseif(isset($request['price']))
          {    
            $after = Str::after($request['price'], '-');
            $before = Str::before($request['price'], '-');
        $allproperties = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->where('make_featured','off')->get();
        $featuredproperties = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('price','>=',$before)->where('price','<=',$after)->where('province',$request['province'])->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('price','>=',$before)->where('price','<=',$after)->count();
          }        
         elseif(isset($request['rooms']))
         {

        $allproperties = Property::where('province',$request['province'])->where('make_featured','off')->where('bedrooms',$req_rooms)->get();
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('bedrooms',$req_rooms)->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('bedrooms',$req_rooms)->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('bedrooms',$req_rooms)->count();
         }
         // elseif(isset($request['price']))
         // {

         // }
         else
         {
       
           if(isset($prop_sub_cat))
           {
    if($request['province']){

            if($prop_sub_cat=='Students' || $prop_sub_cat=='Holiday' || $prop_sub_cat=='Apartment' || $prop_sub_cat=='House' || $prop_sub_cat=='Commercial')
            {
               
        $allproperties = Property::where('province',$request['province'])->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();    
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();
        $allpropertiescount = Property::where('province',$request['province'])->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();               
            }
            else
            {
              
        $allproperties = Property::where('province',$request['province'])->where('make_featured','off')->get();
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->count();
        $allpropertiescount = Property::where('province',$request['province'])->count();               
            }
            
    }
    else
    {
               
        $allproperties = Property::where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();    
        $featuredproperties = Property::where('make_featured','on')->where('property_type', 'like', '%'.$prop_sub_cat.'%')->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();
        $allpropertiescount = Property::where('property_type', 'like', '%'.$prop_sub_cat.'%')->count();               
    }
           }
           else
           {
        $allproperties = Property::where('province',$request['province'])->where('make_featured','off')->get();
        $featuredproperties = Property::where('make_featured','on')->where('province',$request['province'])->get();
        $featuredpropertiescount = Property::where('make_featured','on')->where('province',$request['province'])->count();
        $allpropertiescount = Property::where('province',$request['province'])->count();
           }

         }            
         }       
        //  j-all
        for($i=4;$i<=6;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[4];
        $middleads=$ads[5];
        $bottomads=$ads[6];
      
      return view('website.allproperties',compact('counties','featuredproperties','allproperties','featuredpropertiescount','allpropertiescount','req_province','req_rooms','req_price','topads','middleads','bottomads'));       
    }
         
         public function filterprop(Request $request)
    {
       $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
         $sub1=$request['prop_sub_cat_org_name'];
         $main1=Session::get('cat_session');
         $cat_session = Session::get('cat_session');
         $prop_sub_cat=$request['prop_sub_cat'];
         $text=$request['text'];
         
         if($prop_sub_cat == 'All')
         {
           $prop_sub_cat='';  
         }
         if(isset($request['prop_sub_cat']))
         {
            Session::put('prop_sub_cat',$request['prop_sub_cat']);
         }
         else
         {
            $prop_sub_cat=Session::get('prop_sub_cat');
            Session::forget('prop_sub_cat');
         }
         if($cat_session == 'Parking')
         {
            return redirect('/parking-slots');
         }
         if($cat_session == 'Commercial')
         {
            if($prop_sub_cat == 'Commercial')
            {
               $prop_sub_cat = 'Commercial Land';
               
            }
            else
            {
               $prop_sub_cat='Commercial'; 
            }
            
            if($request['prop_sub_cat'] == 'To')
            {
                $cat_session = 'Rent';
            }
            elseif($request['prop_sub_cat'] == 'For')
            {
               $cat_session = 'Sell'; 
            }
            elseif($request['prop_sub_cat'] == 'Farm')
            {
               $cat_session = ''; 
               $prop_sub_cat='Agricultural';
            }
            else
            {
                $cat_session=''; 
            }
           
            
         }
         
         if($cat_session == 'Needed')
         {

            $cat_session='';
         }
            if($cat_session == 'Buy')
          {
             $cat_session = 'Sell';
          }
        $req_province=$request['province'];
        $req_county=$request['county'];
        $req_rooms=$request['rooms'];
        $req_price=$request['price'];
        $string=$request['text'];
$parts = explode(',', $string);
$extractedString1 = trim($parts[0]);
$extractedString2 = trim($parts[1]);
        $allproperties = Property::where('county', 'cavan')
                           ->orWhere('province', 'like', "%$extractedString1%")
                           ->get();
        $featuredproperties = Property::where('county', 'like', "%$extractedString1%")
                           ->orWhere('province', 'like', "%$extractedString1%")
                           ->get();
        $topads=Ads::where('page','Properties List')->where('display_section','top')->where('status','on')->inRandomOrder()->take(3)->get();
        $middleads=Ads::where('page','Properties List')->where('display_section','middle')->where('status','on')->inRandomOrder()->take(3)->get();
        $bottomads=Ads::where('page','Properties List')->where('display_section','bottom')->where('status','on')->inRandomOrder()->take(3)->get();

       return view('website.allproperties',compact('featuredproperties','allproperties','req_province','req_county','req_rooms','req_price','topads','middleads','bottomads','sub1','main1','prop_sub_cat'));
    }
    
    
    
    
    public function filterproperties(Request $request)
    {
         $counties=DB::table('ie_counties')->where('status',1)->get();
        if(isset($_GET['main_cat']))
        {
           if($_GET['main_cat']==9||$_GET['main_cat']==10||$_GET['main_cat']==11||$_GET['main_cat']==12)
           {
               $main_cat=$_GET['main_cat'];
               return redirect('view_needed?search_type=all&&main_cat='.$main_cat)->with('success','Updated Successfully!');
        //   return redirect('/view_needed');
           }
            
        }
        // j2
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $user_name=0;$user="";
        $search_title="Customized Search";
       
        if(isset($_GET['search_type']))
        {
            Session::forget('main_categorty');
            $search_title="Choose Your Type";
        Session::put('search_type', $_GET['search_type']);
        
        }
        if(isset($_GET['main_cat']))
        {
        Session::put('main_categorty', $_GET['main_cat']);
        $search_title="Customized Search";
        }
            if(Session::get('search_type')!="")
            {       $data=array();
                    $title="View All Properties";
                    $bed_type_properties= DB::table('bed_type')
                                           ->get();
                for($i=1;$i<=6;$i++)
                {
                    
                    $property_subsciption_temp = PropertySubscription::find($i);
                    $subscription_statusp[$i] = $property_subsciption_temp ? $property_subsciption_temp->payment_mode : 0;
                      
                         $query = Property::query();
                         $query->select('*','users.id as user_id','properties.id as id');
                         
                         $query->join('users', 'properties.user_id', '=', 'users.id');
                         $query->whereNotIn('main_cat',[9,10,11,12]);
                         $query->where('properties.status',1);
                         $query->where('users.status',1);
                         
                         $query->where('subcription_type',$i);
                         if(!empty($_GET['user_id']))
                          {    
                            $query->where('users.id',$_GET['user_id']);
                            $user_name=1;
                            Session::put('user_id',$_GET['user_id']);
                            $user=User::find($_GET['user_id']);
                             
                          }
                          if($subscription_statusp[$i]==1)
                          {    
                            $query->where('payment_status',1);
                          }
                          if(Session::get('main_categorty')!="")
                           {
                               if(Session::get('main_categorty')==1)
                               {
                                   $title="Residential Rent ";
                               }
                               if(Session::get('main_categorty')==2)
                               {
                                  $bed_type=DB::table('bed_type')->where('property_id', '=', 'properties.id')->get();
                                  $query->join('bed_type', 'bed_type.property_id', '=', 'properties.id');
                                   $title="Sharing Room-For Rent";
                               }
                               if(Session::get('main_categorty')==8)
                               {
                                   $title="Holiday Homes ";
                               }
                               if(Session::get('main_categorty')==3)
                               {
                                   $title="Commercial Rent ";
                                //   $a=[1,3];
                                //   $query->whereIn('for_let_sale',$a);
                               }
                               if(Session::get('main_categorty')==4 ||Session::get('main_categorty')==7)
                               {
                                  
                                   $title="Parking -For Rent/Sale";
                               }
                               if(Session::get('main_categorty')==5)
                               {
                                  
                                   $title="Residential Sale -For Sale";
                               }
                               if(Session::get('main_categorty')==6)
                               {
                                  
                                   $title="Commercial Sale -For Sale";
                               }
                                if (!empty($_GET['location'])) 
                                {
                                    $location=trim($_GET['location']);
                                   $data['location']=$location;
                                    $query->where(function($q) use ($location) {
            
                                        $q->orWhere('county', 'like', "%{$location}%");
                                        $q->orWhere('city', 'like', "%{$location}%");
                                        $q->orWhere('town', 'like', "%{$location}%");
                                        $q->orwhere('street', 'like', "%{$location}%");
                                        $q->orwhere('eir_code', 'like', "%{$location}%");
                                    
                                    });
                                }
                                // if(Session::get('main_categorty')==1||Session::get('main_categorty')==3)
                                if(1)
                               {
                                if (!empty($_GET['min_price'])) 
                                {
                                    $min_price=trim($_GET['min_price']);
                                    $data['min_price']=$min_price;
                                    $query->where('price', '>=', $min_price);
                                }
                                if (!empty($_GET['max_price'])) 
                                {  
                                    $max_price=trim($_GET['max_price']);
                                    $data['max_price']=$max_price;
                                    $query->where('price', '<=', $max_price);
                                }
                               }
                               if(Session::get('main_categorty')==2)
                               {
                                if (!empty($_GET['min_price'])) 
                                {
                                    $min_price=trim($_GET['min_price']);
                                    $data['min_price']=$min_price;
                                    $query->where('rent', '>=', $min_price);
                                }
                                if (!empty($_GET['max_price'])) 
                                {  
                                    $max_price=trim($_GET['max_price']);
                                    $data['max_price']=$max_price;
                                    $query->where('rent', '<=', $max_price);
                                }
                               }
                                
                                if (!empty($_GET['min_bed'])) 
                                {
                                        $min_bed=trim($_GET['min_bed']);
                                        $data['min_bed']=$min_bed;
                                         $query->where('total_rooms', '>=', $min_bed);
                                }
                                if (!empty($_GET['max_bed'])) 
                                {
                                        $max_bed=trim($_GET['max_bed']);
                                        $data['max_bed']=$max_bed;
                                        $query->where('total_rooms', '<=',$max_bed);
                                    
                                }
                               
                                if (!empty($_GET['bed_type'])) 
                                {
                                        $bed_type=$_GET['bed_type'];
                                        $data['bed_type']=$bed_type;
                                        // $bed_type=implode(',',$bed_type);
                                         $query->whereIn('bed_type_name',$bed_type);
                                }
                                
                                if (!empty($_GET['min_bathroom'])) 
                                {
                                    $min_bathroom=trim($_GET['min_bathroom']);
                                    $data['min_bathroom']=$min_bathroom;
                                    $query->where('Bathrooms', '>=', $min_bathroom);
                                }
                                if (!empty($_GET['property_type'])) 
                                {
                                    $property_type=($_GET['property_type']);
                                    $data['property_type']=$property_type;
                                    $query->whereIn('property_type', $property_type);
                                }
                                if (!empty($_GET['preference'])) 
                                {
                                    $preference=($_GET['preference']);
                                    $data['preference']=$preference;
                                    $query->where('Preference', $preference);
                                }
                                if (!empty($_GET['no_tenants'])) 
                                {
                                    $no_tenants=($_GET['no_tenants']);
                                    $data['no_tenants']=$no_tenants;
                                    $query->where('no_tenants', $no_tenants);
                                }
                                $main_cat=Session::get('main_categorty');
                                $main_cat_arr=[$main_cat];
                                if($main_cat==4)
                                {
                                     $query->whereIn('for_let_sale',[3,1]);
                                    $main_cat_arr=[4,7];
                                }
                                if($main_cat==7)
                                {
                                     $query->whereIn('for_let_sale',[3,2]);
                                    $main_cat_arr=[4,7];
                                }
                                if (!empty($_GET['fdate'])&&!empty($_GET['tdate'])) 
                                {
                                    $fdate=$_GET['fdate'];
                                    $tdate=$_GET['tdate'];
                                    $query->where('Available_from', '>=', $fdate);
                                    $query->where('Available_to', '<=', $tdate);
                                    $data['fdate']=$fdate;
                                    $data['tdate']=$tdate;
                                }
                               
                          $query->whereIn('main_cat',$main_cat_arr);
                           }
                          $query->orderBy('properties.id','desc');
                        //   $properties[$i]=$query->simplePaginate(2);
                        // if(!empty($_GET['page']))
                        // {
                        // $page=$_GET['page']*16;
                        // }
                        // else
                        // {
                        //     $page=16;
                        // }
                        
                        // $skip=$page-16;
                          
                          $properties[$i]= $query->Paginate(30);
                        //   $properties[$i]= $query->skip(0)->take(10)->get();
                           }
                         
                            
                           

                    }
                // echo"<pre>";print_r($data);exit;

             $topads=Ads::where('ad_id',4)->where('status',1)->inRandomOrder()->take(3)->get();
             $middleads=Ads::where('ad_id',5)->where('status',1)->inRandomOrder()->take(3)->get();
             $bottomads=Ads::where('ad_id',6)->where('status',1)->inRandomOrder()->take(3)->get();
             $banners=Banner::where('status','active')->where('page','property')->orderBy('sort_order','asc')->get();
         return view('website.allproperties',compact('counties','data','search_title','title','properties','topads','middleads','bottomads','banners','bed_type_properties','user_name','user'));
    }
    
    
    
    
    
    public function filterautomobiles(Request $request)
    {
        // k2
        
        // dd('123');
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $search_title="AUTOMOBILES";
        if(!empty($_GET['main_name']))
        
        // dd($_GET['main_name']);
        {
            Session::put('main_name',$_GET['main_name']);
            if($_GET['main_name']==1)
            {
            $search_title="New Automobile";
            }
            elseif($_GET['main_name']==2)
            {
                $search_title="Used Automobile";
            }
            elseif($_GET['main_name']==3)
            {
                $search_title="Hire Automobile";
            }
             elseif($_GET['main_name']==4)
            {
                $search_title="New Automobile Needed";
            }
             elseif($_GET['main_name']==3)
            {
                $search_title="Used Automobile Needed";
            }
            elseif($_GET['main_name']=="dealers")
            {
                $search_title="Dealers Automobile";
            }
            elseif($_GET['main_name']=="pseller")
            {
                $search_title="Private Automobile";
            }
            elseif($_GET['main_name']=="all")
            {
                $search_title="All Automobile";
            }
        }
        else
        {
            Session::forget('main_name');
            $search_title="Automobiles";
        }
        $user="";
        $common=new Common();
        if(!empty($_GET['user_id']))
         {
        $user=User::find($_GET['user_id']);
         }
         $filter_arr[0]=DB::table('type_automobiles')->where('status',1)->get();
         $filter_arr[1]=DB::table('brand_model')->where('status',1)->get();
         $filter_arr[2]=DB::table('brand')->where('status',1)->get();
         $filter_arr[3]=DB::table('fuel_type')->where('status',1)->get();
         $filter_arr[4]=DB::table('color')->where('status',1)->get();
         $filter_arr[5]=DB::table('body_type')->where('status',1)->get();
         $filter_arr[6]=DB::table('ie_counties')->where('status',1)->get();
         
         $data=$common->get_auto(1);
         
         
         $banners=Banner::where('status','active')->where('page','automobile')->orderby('sort_order')->get();
         for($i=16;$i<=18;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[16];
        $middleads=$ads[17];
        $bottomads=$ads[18];
        // echo"<pre>";print_r(count($bottomads));exit;
        return view('Automobiles.Automobile_Search_new',compact('filter_arr','banners','user','search_title','data','topads','middleads','bottomads'));
        // return view('Automobiles.Automobile_Search',compact('user','search_title','data','topads','middleads','bottomads'));
    }
    public function property_enquiry(Request $request){
        $request->validate([
            'name'=>'required|string|max:255',
            'phone'=>'required',
            'email'=>'required|email',
            'pets'=>'nullable',
            'message'=>'nullable',
            'no_of_adults'=>'required',
            'move_in_date'=>'nullable',
            
            ]);
          
            $enquiry = new PropertyEnquiry();
            $enquiry->property_id = $request['property_id'];
            $enquiry->name=$request['name'];
        $enquiry->email=$request['email'];
        $enquiry->phone=$request['phone'];
        $enquiry->message=$request['message'];
         $enquiry->type=2;
         $enquiry->pets=$request['pets'];
          $enquiry->no_of_adults=$request['no_of_adults'];
           $enquiry->move_in_date=$request['move_in_date'];
        $enquiry->save();
        Session::put('confirm','done');
            
            
        return back();
    }
    public function contactEnquiry(Request $request)
    {
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $contact = new PropertyEnquiry();
        $contact->property_id=0;
        $contact->name=$request['name'];
        $contact->email=$request['email'];
        $contact->type=1;
        $contact->message=$request['message'];
        $contact->save();
        Session::put('confirm','done');
         return redirect()->back()->with('success','Submitted Successfully !');
    }
    public function testemail()
    {
Mail::raw('This is the email content', function ($message) {
    $message->to('lijo.nubicus@gmail.com');
    $message->subject('Subject of the email');
    // You can also add 'from', 'cc', 'bcc', and other email fields here if needed
});
    }
    public function get_city(Request $request)
    {
        $text=$request['inputText'];
      if($text == '')
      {
          
      }
      else
      {
              $citydat=Upcity::where('name', 'LIKE', '%' . $text . '%')->get();
        $citycodat=Upcity::where('county', 'LIKE', '%' . $text . '%')->get();
        $countydat=Upcounty::where('name', 'LIKE', '%'.$text.'%')->get();
        //  return response()->json($citydat);

        return view('append_cities',compact('citydat','countydat','citycodat'))->render();    
      }

    }
    public function up_city()
    {
        $counties = Upcounty::get();
        return view('up_city',compact('counties'));
    }
    public function upload_city(Request $request)
    {
        $upcity=new Upcity();
        $upcity->name=$request['name'];
        $upcity->county=$request['county'];
        $upcity->save();
        return back();
    }
    public function view_needed()
    {
        // j3
        $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
        $data=array();
        if($_GET['main_cat']==9)
        {
           $type="Residencial Properties";
        }
        if($_GET['main_cat']==10)
        {
           $type="Sharing Rooms";
        }
        if($_GET['main_cat']==11)
        {
           $type="Commercial Properties";
        }
        if($_GET['main_cat']==12)
        {
           $type="Parking";
        }
        // j3
        $user_name=0;
        // $needed_arr=[9,10,11,12];
        $needed_arr=[$_GET['main_cat']];
                         $query = Property::query();
                         $query->select('*','users.id as user_id','properties.id as id');
                         $query->join('users', 'properties.user_id', '=', 'users.id');
                         $query->where('properties.status',1);
                         $query->where('users.status',1);
                         $query->whereIn('properties.main_cat',$needed_arr);
                         if (!empty($_GET['location'])) 
                                {
                                    $location=trim($_GET['location']);
                                   $data['location']=$location;
                                    $query->where(function($q) use ($location) {
            
                                        $q->orWhere('county', 'like', "%{$location}%");
                                        $q->orWhere('city', 'like', "%{$location}%");
                                        $q->orWhere('town', 'like', "%{$location}%");
                                        $q->orwhere('street', 'like', "%{$location}%");
                                        $q->orwhere('eir_code', 'like', "%{$location}%");
                                    
                                    });
                                }
                                if(!empty($_GET['user_id']))
                                 {    
                                    $query->where('users.id',$_GET['user_id']);
                                    $user_name=1;
                                    Session::put('user_id',$_GET['user_id']);
                                    $user=User::find($_GET['user_id']);
                                     
                                  }
                                if (!empty($_GET['min_price'])) 
                                {
                                    $min_price=trim($_GET['min_price']);
                                    $data['min_price']=$min_price;
                                    $query->where('price', '>=', $min_price);
                                }
                                if (!empty($_GET['max_price'])) 
                                {  
                                    $max_price=trim($_GET['max_price']);
                                    $data['max_price']=$max_price;
                                    $query->where('price', '<=', $max_price);
                                }
                                if (!empty($_GET['min_bathroom'])) 
                                {
                                    $min_bathroom=trim($_GET['min_bathroom']);
                                    $data['min_bathroom']=$min_bathroom;
                                    $query->where('Bathrooms', '>=', $min_bathroom);
                                }
                                $query->orderBy('properties.id','desc');
                         $properties=$query->simplePaginate(16);
                        //  echo"<pre>";print_r($data);exit;
                       $title="Needed  - ".$type;
                        $search_title="Needed  - ".$type;
                        // j-n
                         for($i=10;$i<=12;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[10];
        $middleads=$ads[11];
        $bottomads=$ads[12];
        
         $banners=Banner::where('status','active')->where('page','property')->orderBy('sort_order','asc')->get();
        return view('website/view_needed',compact('data','properties','search_title','title','topads','middleads','bottomads','user_name'));
    }
public function Advertisement()
{
    $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
    for($i=13;$i<=15;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[13];
        $middleads=$ads[14];
        $bottomads=$ads[15];
       $PropertySubscription=PropertySubscription::where('status',1)->get();
    //   echo"<pre>";print_r($PropertySubscription);exit;
    $Advertisement=DB::table('Adverisement')->where('status',1)->simplePaginate(30);
     return view('website/Advertisement',compact('Advertisement','topads','middleads','bottomads','PropertySubscription'));
    // echo"hi";exit;
}
  public function view_automobiles()
{
    $common=new Common();
        $common->Autotrigger();
        $common->Autotrigger_email();
    $id=$_GET['no'];
        $Enquiry_setting = DB::table('Enquiry_setting')
           ->where('id',1)
           ->first();
            $data1['enquiry_flag']=0;
           if($Enquiry_setting->status==1)
           {
               $admin=User::where('role','admin')->first();
               $data1['admin']=$admin;
               $data1['enquiry_flag']=1;
           }
        $data=Automobiles::find($id);
        $prop_images=AutomobileImage::where('a_id',$id)->get();
        $similarproperties=Automobiles::get();
        for($i=13;$i<=15;$i++)
        {
            $ad_subsciption_temp = Adverisement::where('status',1)->where('id',$i)->first();
            $ad_subsciption[$i] = $ad_subsciption_temp ? $ad_subsciption_temp->payment_status : 0;
            if($ad_subsciption[$i]==1)
            {
               $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->where('payment_status','1')->orderBy('id','desc')->get();
            }
            else
            {
                  $ads[$i] =Ads::where('ad_id',$i)->where('status','1')->orderBy('id','desc')->get();  
            }
         }
        //  echo"<pre>";print_r($ads);exit;
        $topads=$ads[13];
        $middleads=$ads[14];
        $bottomads=$ads[15];
        
        
         return view('Automobiles/Automobile_single',compact('data1','data','topads','middleads','bottomads','prop_images','similarproperties'));
    }
    public function HomeLogout()
    {
        Session::flush();
return redirect()->back();
    }
     public function get_brand_model()
    {
        $brand_name=$_POST['brand_name'];
      //$filter_arr=DB::table('brand_model')->where('status',1)->where('brand_id',$type_id)->get();
      $filter_arr = DB::table('brand')
                ->join('brand_model', 'brand.id', '=', 'brand_model.brand_id')
                ->where('brand.brand_name', '=', $brand_name)
                ->select('brand.id AS brand_id', 'brand.brand_name', 'brand_model.id AS model_id', 'brand_model.model_name')
                ->get();
      $output="<option value=''>--Select Model--</option>";
      foreach($filter_arr as $type)
                                {
                                    
                                    
                                    $output.="<option value=".$type->model_name.">".$type->model_name."</option>";
                                }
        print_r($output);
    }
    
    public function get_vehicle_brands(Request $request)
    {
        $vehicle_name = isset($_POST['vehicle_name']) ? $_POST['vehicle_name'] : $request->input('vehicle_name');
        $type_auto = DB::table('type_automobiles')->where('auto_name', '=', $vehicle_name)->first();
        
        if ($type_auto) {
            $filter_arr = DB::table('brand')
                    ->where('status', 1)
                    ->where(function($q) use ($type_auto) {
                        $q->where('type_id', $type_auto->id)
                          ->orWhere('type_id', 0);
                    })
                    ->select('id', 'brand_name')
                    ->get();
        } else {
            $filter_arr = DB::table('brand')
                    ->where('status', 1)
                    ->select('id', 'brand_name')
                    ->get();
        }
                
        $output = "";
        foreach($filter_arr as $type) {
            $output .= "<option value='".$type->brand_name."'>".$type->brand_name."</option>";
        }
        print_r($output);
    }
    
    // public function reset_password()
    // {
    //     $mail_id=$_GET['email'];
    //     $user=User::where('email',$mail_id)->first();
    //     if($user)
    //     {
    //         // echo"hi";exit;
    //         $message="Please click here to reset your password https://homeireland.ie/changepassword";
    //         $to=$user->email;
    //         $subject = 'Homeireland';
    //         $headers = 'From:info@homeireland.ie' . "\r\n" .
    //                             //   'Cc: jusammilamk@gmail.com' . "\r\n" .
    //                               'X-Mailer: PHP/' . phpversion();
                     
    //                     Session::put('changeemail',$mail_id);
    //         $success = mail($to, $subject, $message, $headers);
    //         if($success)
    //         {
    //           return redirect()->back()->with('status','Email reset Link send to your email.');
    //         }
    //         else
    //         {
    //             return redirect()->back()->with('status','Please Try lalter.');
    //         }
    //     }
    //     else
    //     {
    //         return redirect()->back()->with('status','Invalid email Please Register.');
    //     }
        
    // }
public function reset_password(Request $request)
{
    $mail_id = $request->input('email');
    $user = User::where('email', $mail_id)->first();

    if (!$user) {
        return redirect()->back()->with('status', 'Invalid email. Please register.');
    }

    try {
        $resetLink = "https://homeireland.ie/changepassword";

        Mail::send([], [], function ($message) use ($user, $resetLink) {
            $htmlContent = "
                <h1>Password Reset Request</h1>
                <p>Hello,</p>
                <p>You requested a password reset. Click the link below to reset your password:</p>
                <a href='$resetLink'>$resetLink</a>
                <p>If you did not request this, please ignore this email.</p>
                <p>Thank you,<br>HomeIreland Team</p>";
            
            $message->to($user->email)
                ->subject('Password Reset Request')
                ->html($htmlContent) // Use the `html()` method instead of `setBody()`.
                ->from('info@homeireland.ie', 'HomeIreland');
        });

        // Store the email in the session for further actions
        Session::put('changeemail', $mail_id);

        return redirect()->back()->with('status', 'Email reset link sent to your email.');
    } catch (\Exception $e) {
        \Log::error('Error sending password reset email: ' . $e->getMessage());
        return redirect()->back()->with('status', 'An error occurred. Please try again later.');
    }
}
public function changepassword()
    {
        $email=Session::get('changeemail');
       
        if($email)
        {
           
            return view('auth/passwords/changepassword');
        }
        else
        {
            return view('auth/passwords/errorpage');
        }
        
    }

  public function change_password_store(Request $request)
  {
      
      if($request->isMethod('get')){
          return redirect('/login')->with('error', 'Unauthorized access!');
      }
      $email=Session::get('changeemail');
       
        if($email)
        {
       
          $password=$_POST['password'];
          $user=User::where('email',$email)->first();
            if($user)
            {
           
                $user->password=bcrypt($password);
                $user->save();
                 return redirect()->back()->with('status','Password Changed Successfully please login.');
                // return redirect('/login')->with('changepassword','Password Changed Successfully please login!');

            }
            else
            {
                return view('auth/passwords/errorpage');
            }
      }
  }
    public function change_password_store1()
  {
      
      $email=Session::get('changeemail');
       
        if($email)
        {
       
          $password=$_POST['password'];
          $user=User::where('email',$email)->first();
            if($user)
            {
           
                $user->password=bcrypt($password);
                $user->save();
                 return redirect()->back()->with('status','Password Changed Successfully please login.');
                // return redirect('/login')->with('changepassword','Password Changed Successfully please login!');

            }
            else
            {
                return view('auth/passwords/errorpage');
            }
      }
  }
// public function change_password_store(Request $request)
// {
//     // Prevent direct access via browser
//     if ($request->isMethod('get')) {
//         return redirect('/login')->with('error', 'Unauthorized access!');
//     }

//     // Ensure session has email
//     $email = Session::get('changeemail');
//     if (!$email) {
//         return redirect('/login')->with('error', 'Invalid request!');
//     }

//     // Update password
//     $password = $request->password;
//     $user = User::where('email', $email)->first();
//     if ($user) {
//         $user->password = bcrypt($password);
//         $user->save();

//         // Clear session after password change
//         Session::forget('changeemail');

//         return redirect('/login')->with('changepassword', 'Password Changed Successfully! Please login.');
//     }

//     return view('auth/passwords/errorpage');
// }

   public function verify_code()
   {
       $code=$_POST['code'];
       $email=Session::get('changeemail');
       $user=User::where('email',$email)->first();
            if($user)
            {
                $user_verify_code=$user->verify_tocken;
                if($code==$user_verify_code)
                {
                    $user->verified=1;
                    $user->save();
                    return redirect()->back()->with('status','Verified Successfully.');
                }
                else
                {
                    return redirect()->back()->with('status','Wrong Code.');
                }
            }
            else
            {
                return redirect()->back()->with('status','No user exist.');
            }
   }
   public function test()
   {
       return view('test');
   }
   
   
   
   ///// get data from brandmodel table to fetch the correspoding data to the brand choose in the dropdown /////
   
   
    public function getBrandModel(Request $request){
       
       $model=DB::table('brand_model')
       ->where('brand_id',$request->brand_id)
       ->where('status','1')
       ->get();
       
       return response()->json([
           'Model'=>$model
        ]);
    }
    
}