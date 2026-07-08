<?php
namespace App\Http\Controllers\panel;
 
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\AmenitiesOnProperties;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\AutomobileImage;
use App\Models\SavedProperty;
use App\Models\Automobiles;
use App\Models\ParkingSlot;
use App\Models\Chat;
use App\Models\User;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Auth;
use Session;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image as InterventionImage;
use App\Models\PropertySubscription;

use DB;
 
class MainController extends Controller
{
    public function verifyemail(Request $request)
{
   $randomnumber = Session::get('randomNumber');
     //$randomnumber = 123456;
   
    if ($randomnumber == $request->code) {
        $dat = User::find(Auth::user()->id);
        $dat->verified = 1;
        $dat->save();           
        return redirect('/home'); 
    } else {
        Session::put('invalidcode', 'Code Is Wrong');
        return back();
    }
}
public function myprofile()
{
    $user_id=Auth::user()->id;
    $user=User::find($user_id);
    // echo"<pre>";print_r($user);exit;
    return view('panel/myprofile',compact('user')); 
}
 public function  myprofile_store(Request $request)
{
    if ($request->input('action') === 'delete') {
        // Delete the user's profile
        $user = User::find(Auth::id());
        $user->verified = 0;
        $user->save();
        Auth::logout();
        return redirect()->route('home')->with('success', 'Your account has been deleted.');
    }else {
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        $user->name=trim($request['name']);
        $user->email=trim($request['email']);
        $user->phone=trim($request['phone']);
        $user->whatsapp=trim($request['whatsapp']);
        $user->address=trim($request['address']);
        $user->code=trim($request['code']);
        $user->codew=trim($request['codew']);
        $user->role=trim($request['role']);
        if($request->file('image'))
        {
            $number = rand(100,100000);
            $file=$request->file('image');
            // $imageName = time() . '.' . $file->getClientOriginalExtension();
            $fileName = time() . $number .'.'. $file->getClientOriginalExtension();
            $filePath = 'uploads/Agent/' . $fileName;
            $img = InterventionImage::make($file->getRealPath());
            $img = InterventionImage::make($file->getRealPath());
            $width = 300;
            $height = 300;
            $img = Image::make($file->getRealPath())->fit($width, $height);
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
            $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function($font) {
                $font->file(null); // No file needed for internal font
                $font->size(12);
                $font->color('#ffffff');
                $font->align('center');
                $font->valign('top');;
            });
            $img->insert($watermark, 'center');
            $img->save(public_path($filePath));
            if($fileName)
            {
                // $image_path =asset("uploads/Agent/{$user->image}");
                if($user->image){
                    //  unlink(public_path('uploads/Agent/'.$user->image)) ;
                    // unlink($image_path);
                }
                $user->image=$fileName;
            }
            else
            {
                $user->image=$user->image;
                return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
            }
        }
        $status= $user->save();
        if($status)
        {
            return redirect()->back()->with('success','Updated Successfully!');
        }
        else
        {
            return redirect()->back()->with('fail','Something Went wrong Please  try again.');
        }
    }
}
     public function devtest()
     {
         return view('devtest');
     }
    
    public function dashboard()
{
   
    if (Auth::user()->verified != 1) {
        // Your existing logic for sending verification code
        $randomnumber = random_int(100000, 999999);
        $messageContent = 'Email Verification Code To Enter HomeIreland is '.$randomnumber;
        // Mail::raw($messageContent, function ($message) use ($randomnumber) {
        //     $message->to(Auth::user()->email);
        //     $message->subject('Verification Code');
        // });
        Session::put('randomNumber', $randomnumber);
        return view('auth.verifyemail');
    } else {
        // Update email_verified_at timestamp
        Auth::user()->forceFill([
            'email_verified_at' => now(),
        ])->save();

        // Proceed with dashboard logic
        if (Auth::check() && Auth::user()->isAdmin()) {
            return redirect('/admin');
        } else {
            
            $user_id = Auth::user()->id;
         
            $myproperties = Property::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();
            $mypropertiescount = Property::where('user_id', $user_id)->count();
        
            $myautomobiles = Automobiles::where('user_id', $user_id)->orderBy('created_at', 'desc')->get();  
            
            
            $chats = Chat::where('user_id', $user_id)->orderBy('id', 'asc')->get();
           
            $ads = Ads::where('user_id', $user_id)->get();
             $query = Property::query();
                         $query->select('*','users.id as user_id','property_enquiries.id as id');
                         $query->join('users', 'properties.user_id', '=', 'users.id');
                         $query->join('property_enquiries', 'properties.id', '=', 'property_enquiries.property_id');
                         $query->where('property_enquiries.show',1);
                         $query->where('property_enquiries.view_user',1);
          $enquiries_view= $query->count();
          
        //   =====COUNT====
        
        $prop['propertycount_all_count']=Property::where('user_id',auth::user()->id)->count();
        $prop['advertisemnt_all_count']=ads::where('user_id',auth::user()->id)->count();
                              $query = Property::query();
                                     $query->select('*','users.id as user_id','property_enquiries.id as id');
                                     $query->join('users', 'properties.user_id', '=', 'users.id');
                                     $query->join('property_enquiries', 'properties.id', '=', 'property_enquiries.property_id');
                                     $query->where('property_enquiries.show',1);
                                     $query->where('properties.user_id',auth::user()->id);
                                     $query->orderBy('property_enquiries.id', 'desc');
          $prop['enquiry_all_count']= $query->count();
        $prop['autocount_all_count']=Automobiles::where('user_id',auth::user()->id)->count();
//  echo"<pre>";print_r($prop);exit;
        //=============== COUNT ENDS========
          
          
        //   echo$enquiries_view;exit;
            return view('panel.dashboard', compact('prop','myproperties', 'user_id', 'mypropertiescount', 'myautomobiles', 'chats', 'ads','enquiries_view')); 
        }
    }
}

    public function addtestimonials(Request $request)
    {
      $testimonial = new Testimonial;
      $testimonial->user_id = Auth::id();
      $testimonial->description=$request['description'];
      $testimonial->property_id=$request['property_id'];
      $testimonial->property_type=$request['property_type'];
      $testimonial->status=$request['status'];
      $testimonial->save();
      Session::put('confirm','done');
      return back();
    }

    public function addproperties()
    {
        $randomstring = Str::random(10);
        
      return view('panel.property',compact('randomstring'));  
    }
        public function addslots()
    {
        $randomstring = Str::random(10);
      return view('panel.slots.slots',compact('randomstring'));  
    }
    
    public function editproperties($id)
    {
     $data=Property::where('id',$id)->first();
    //  $propertyImages = PropertyImage::where('property_id',$id)->get();
     $amenities=AmenitiesOnProperties::where('property_id',$id)->get();
     return view('panel.property',compact('data','amenities'));
    } 
        public function editslots($id)
    {
     $data=ParkingSlot::where('id',$id)->first();
     return view('panel.slots.slots',compact('data'));
    } 
    
    public function store_property(Request $request){
        // $request->validate([
        //      'phone'=>'required|string',
        //      'email'=>'required|email',
        //     ]);
        //check if the property exists or not 
        if($request['property_id'] == NULL)
        {
          
           $property = new Property(); 
           $prevproperty=Property::latest()->first();
           //generating unique id for the property
           if($prevproperty)
           {
             $prevpropertylastthree=$prevproperty->unique_id;
             $getlastthree= substr($prevpropertylastthree, -3);
             $getlastthree=$getlastthree+1;
             $one=$property->id + $getlastthree; 
           }
           else
           {
             $one=$property->id + 100;  
           }
        
        $two=str_pad($one, 7, '0', STR_PAD_LEFT);
        $unique_id='PRO-'.$two;  
        $property->unique_id=$unique_id;  
  
        $property->status='inactive';
        
        Mail::raw('New Property '.$unique_id.' is Added', function ($message) use ($unique_id) {
        $message->to('shemeeraps99@gmail.com');
        $message->subject('New Property Request');
         });     
        }else{
             $id=$request['property_id'];
             $property = Property::find($id);
             
        }
      
        $property->user_id=Auth::id();
        $property->property_type=$request['property_type'];
        $property->post_in_language=$request['post_in_language'];
        $property->building_name=$request['building_name'];
        $property->province=$request['province'];
        $property->county=$request['county'];
        $property->banner_image=$request['banner_image'];
        $property->area=$request['area'];
        $property->street=$request['street'];
        $property->town=$request['town'];
        $property->city=$request['city'];
        $property->address=$request['street'].', '.$request['area'].', '.$request['city'].', '. $request['county'] .', '. $request['eir_code'];
        $property->district=$request['district'];
        $property->state=$request['state'];
        $property->country=$request['country'];
        $property->email=$request['email'];
        $property->phone=$request['phone'];
        
        $property->eir_code=$request['eir_code']; 
        
        
        $property->alternate_phone=$request['alternate_phone']?$request['alternate_phone']:null;
        $property->whatsapp_no=$request['whatsapp_no']?$request['whatsapp_no']:null;
        
        $property->transaction_type=$request['transaction_type'];
        $property->from=$request['from'];
        $property->to=$request['to'];
        $property->ownership_type=$request['ownership_type'];
        $property->display_price=$request['display_price'];
        $property->price=$request['price'];
     
        $property->plot_area=$request['plot_area'];
        $property->plot_area_unit=$request['plot_area_unit'];
        $property->ber_no = $request['ber_no'];
        $property->energy_performance_indicator	= $request['energy_performance_indicator'];
        $property->bedrooms=$request['bedrooms'];
        $property->bathrooms=$request['bathrooms'];
        
        $property->make_featured='off';
        $property->constructed_year=$request['constructed_year'];
        $property->description=$request['description'];
        $property->distance_to_school=$request['distance_to_school'];
        $property->distance_to_hospital=$request['distance_to_hospital'];
        $property->distance_to_busstop=$request['distance_to_busstop'];
        $property->distance_to_airport=$request['distance_to_airport'];
        $property->distance_to_railwaystation=$request['distance_to_railwaystation'];
        $property->distance_to_supermarket=$request['distance_to_supermarket'];
        $property->distance_to_shopping=$request['distance_to_shopping'];
        $property->approval_status=$request['approval_status'];

        if(isset($request->list_image)){
            $image = $request->file('list_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/properties'), $imageName);    
            $property->image=$imageName;
        }
        if(isset($request->banner_image))
        {
            $image = $request->file('banner_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/properties'), $imageName);    
            $property->banner_image=$imageName;
        }
         
         $property->save();
        
         // Store multiple property images
        //  if ($request->hasFile('list_image')) {
        //      $image = $request->file('list_image');
            
        //         $imageName = time() . '_' . $image->getClientOriginalName();
        //         $image->move(public_path('uploads/properties'), $imageName);
    
        //         // Save the image to the database 
        //         $propertyImage = new PropertyImage();
        //         $propertyImage->property_id = $property->id;
        //         $propertyImage->image = $imageName;
               
        //         $propertyImage->save();
            
            
        // }
        $propertyImages = PropertyImage::where('property_id',$property['id'])->get();
        //dd($propertyImages);
        $randomstring=Session::get('randomstring');
        $randomstringonamenities=Session::get('randomstringonamenities');
        if(isset($randomstring)){
            $data=array('property_id'=>$property->id);
            PropertyImage::where('unique_string',$randomstring)->update($data);
        }
        if(isset($randomstringonamenities))
        {
            $data=array('property_id'=>$property->id);
            AmenitiesOnProperties::where('unique_id',$randomstring)->update($data);
        }
          
        Session::forget('randomstring');
        Session::forget('randomstringonamenities');
        Session::put('success','Done');

        if($request['property_id'] == NULL){
          return redirect('panel/dashboard');
        }else{
           return back();
        }
     }
     
     
     
     
    public function store_slots(Request $request)
     {
        if($request['slot_id'] == NULL)
        {
           $slot = new ParkingSlot(); 
                   $one=$slot->id + 100;
        $two=str_pad($one, 7, '0', STR_PAD_LEFT);
        $unique_id='SLO-'.$two;  
        $slot->unique_id=$unique_id;  
        $slot->latitude=$request['latitude'];
        $slot->longitude=$request['longitude'];  
        }
        else
        {
         $id=$request['slot_id'];
         $slot = ParkingSlot::find($id);
        }
    
        $slot->user_id=Auth::id();
        $slot->slot_type=$request['propertyType'];
        
        $slot->post_in_language=$request['post_in_language'];
        $slot->building_name=$request['building_name'];
        
        $slot->landmark=$request['landmark'];
        $slot->province=$request['province'];
        
        $slot->banner_image=$request['banner_image'];
        
        $slot->area=$request['area'];
        $slot->street=$request['street'];
        $slot->town=$request['town'];
        
        $slot->district=$request['district'];
        $slot->state=$request['state'];
        $slot->country=$request['country'];
        
        $slot->email=$request['email'];
        $slot->phone=$request['phone'];
        
        $slot->transaction_type=$request['transaction_type'];
        $slot->ownership_type=$request['ownership_type'];
        
        $slot->display_price=$request['display_price'];
        $slot->price=$request['price'];
        $slot->plot_area=$request['plot_area'];
        $slot->plot_area_unit=$request['plot_area_unit'];
        $slot->status='inactive';
        if(isset($request->list_image))
{
    $image = $request->file('list_image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads/slots'), $imageName);    
    $slot->image=$imageName;
}
$slot->save();

 Session::put('success','done');
        if($request['slot_id'] == NULL)
        {
            
          return redirect('/panel/edit-slots/'.$slot->id);
        }
        else
        {
           return back(); 
        }
     }
     public function property_delete($id)
     {
        Property::where('id',$id)->delete();
        SavedProperty::where('property_id',$id)->delete();
        Session::put('delete','Property Deleted');
        PropertyImage::where('property_id',$id)->delete();
        return back();
     }

     public function automobile_delete($id)
     {
        Automobiles::where('id',$id)->delete();
        SavedProperty::where('automobile_id',$id)->delete();
        Session::put('delete','Item Deleted');
        return back();        
     }
          public function slot_delete($id)
     {
        ParkingSlot::where('id',$id)->delete();
        SavedProperty::where('property_id',$id)->delete();
        Session::put('delete','Property Deleted');
        return back();
     }
     
     public function property_sold_out($id)
     {
        $check=Property::where('id',$id)->first();
         $getname=$check->status;
         if($getname == '1' || $getname == '0')
         {
            $data=array('status'=>'3');
         }
         else
         {
            $data=array('status'=>'1');
         }
      
        Property::where('id',$id)->update($data);
        Session::put('soldout','done');
        return back();
     }
     public function save_amenities(Request $request)
     {
               $id=$request->property_id;
           if(isset($id))
           {           
             $randomString = '';              
           }
           else
           {
            $randomString = $request['randomstring'];
            Session::put('randomstringonamenities',$randomString);           
           }
       $chk=AmenitiesOnProperties::where('property_id',$request['property_id'])->where('amenity_name',$request['amenity_name'])->exists();
        if($chk == true)
        {
          AmenitiesOnProperties::where('property_id',$request['property_id'])->where('amenity_name',$request['amenity_name'])->delete();
        }
        else
        {
         $amenity=new AmenitiesOnProperties();
         $amenity->amenity_name=$request['amenity_name'];
         $amenity->amenity_id=$request['amenity_id'];
         $amenity->property_id=$request['property_id'];
         $amenity->unique_id=$randomString;    
         $amenity->save();           
        }

     }

     public function save_residential(Request $request)
      {
        $property_id=$request['property_id'];
        $property_type=$request['property_type'];
        $data=array('property_type'=>$property_type);
        Property::where('id',$property_id)->update($data);
      }
     public function upload(Request $request)
      {
        //   j3
           $request->validate([
            //   'image' => 'image|max:3012',
              ]);
       
       $id=$request->idxz;
           if(isset($id))
           {           
             $randomString = '';              
           }
           else
           {
            $randomString = $request['randomstring'];
            Session::put('randomstring',$randomString);           
           }
    
            if($request->file('file')) 
             {
                if ($request->file('image')->isValid()) {
                     $number = rand(100,100000);
                     $file=$request->file('file');
                    // $imageName = time() . '.' . $file->getClientOriginalExtension();
                    $fileName = time() . $number . $file->getClientOriginalExtension();
                    $filePath = 'uploads/properties/' . $fileName;
                    $img = InterventionImage::make($file->getRealPath());
                    $img = InterventionImage::make($file->getRealPath());
                    $width = 300;
                    $height = 300;
                    $img = Image::make($file->getRealPath())->fit($width, $height);
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
                     $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function($font) {
                        $font->file(null); // No file needed for internal font
                        $font->size(12);
                       $font->color('#ffffff');
                        $font->align('center');
                      $font->valign('top');;
                    });
                    $img->insert($watermark, 'center');
                    // =========
                      $img->save(public_path($filePath));
                    // $file->move(public_path('uploads/properties'), $imageName);
                    $property=new PropertyImage();
                    $property->image=$fileName;
                    $property->property_id=$id;
                    $property->save();
                }
                 
                 else
                 {
                     echo json_encode(1);
                    //  return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
                 }
             }
       }
          public function uploadauto(Request $request)
      {
       $id=$request->idxz;
           if(isset($id))
           {           
             $randomString = '';              
           }
           else
           {
            $randomString = $request['randomstring'];
            Session::put('randomstring',$randomString);           
           }
         if(isset($request->file))  
       {
        $property=new AutomobileImage();
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/autos'), $imageName);    
        $property->image=$imageName;
        $property->automobile_id=$id;
        $property->unique_string=$randomString;
        $property->save();
       }
     }
     
     
     public function dropzonefetch(Request $request)
     {
       $prop=PropertyImage::where('property_id',$request->prop_id)->get();
       return view('panel.extras.fetchimages',compact('prop'));
     }

          public function upload_automobile(Request $request)
      {
       $id=$request->idxz;          
          if(isset($id))
           {           
             $randomString = '';
           }
           else
           {
             $randomString = $request['randomstring'];
            Session::put('randomstring',$randomString);
            
           }

         if(isset($request->file))  
       {
        $property=new AutomobileImage();
        $image = $request->file('file');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/automobiles'), $imageName);    
        $property->image=$imageName;
        $property->automobile_id=$id;
        $property->unique_string=$randomString;        
        $property->save();
       }
     }
     public function dropzonefetch_automobile(Request $request)
     {
       $prop=AutomobileImage::where('automobile_id',$request->prop_id)->get();

       return view('panel.extras.fetchautoimages',compact('prop'));
     }
     
     public function removefetchedimage(Request $request)
     {
        $PropertyImage=PropertyImage::where('image',($request['id']))->first();
        if($PropertyImage->image){
             unlink(public_path('uploads/properties/'.$PropertyImage->image)) ;
                // unlink($image_path);
                 
                }
        PropertyImage::where('id',$PropertyImage->id)->delete();
     }
     public function removefetchedimage_auto(Request $request)
     {
        $PropertyImage=AutomobileImage::where('image',($request['id']))->first();
        if($PropertyImage->image){
             unlink(public_path('uploads/automobiles/'.$PropertyImage->image)) ;
                // unlink($image_path);
                 
                }
        AutomobileImage::where('id',$PropertyImage->id)->delete();
     }
     public function property_saved_delete($id)
     {
        dd('sdf');
     }
     public function addautomobiles(Request $request)
     {
         return view('panel.automobile.index');
     }
          public function editautomobiles($id)
     {
        $data=Automobiles::where('id',$id)->first();
         return view('panel.automobile.index',compact('data'));
     }
     
     public function store_automobiles(Request $request)
     {
  
        if($request['property_id'] == NULL)
         {
            $auto = new Automobiles(); 
         }
        else
         {
            $id=$request['property_id'];
            $auto = Automobiles::find($id);
            $oldData = $auto->exists ? $auto->toArray() : [];
         }
         
       $auto->user_id=Auth::id();
       $auto->name=$request['name'];
       $auto->type=$request['auto_type'];
       $auto->category=$request['category'];
       $auto->price=$request['price'];
       $auto->currency=$request['currency'];
       $auto->isAutomatic=$request->has('isAutomatic');
       $auto->transaction_type=$request['transaction_type'];
       $auto->year_manufactured=$request['year_manufactured'];
       $auto->kilometer_driven=$request['kilometer_driven'];
       $auto->town=$request['town'];
       $auto->province=$request['province'];
       $auto->area=$request['area'];
       $auto->street=$request['street'];
       $auto->color=$request['color'];
       $auto->mileage=$request['mileage'];
       $auto->engine_size=$request['engine_size'];
       $auto->body_type=$request['body_type'];
       $auto->owners=$request['owners'];
       $auto->district=$request['district'];
       $auto->state=$request['state'];
       $auto->country=$request['country'];
       $auto->verified=$request['verified'];
       $auto->featured=$request['featured'];
       $auto->fuel=$request['fuel'];
       $auto->full_address=$request['full_address'];
       $auto->email=$request['email'];
      
       $auto->phone=$request['phone'];
       $auto->description=$request['description'];
       $auto->drive_mode = $request['drive_mode'];
       $auto->ownership=$request['ownership'];
          if(isset($request->list_image))
            {
              $image = $request->file('list_image');
              $imageName = time() . '.' . $image->getClientOriginalExtension();
              $image->move(public_path('uploads/automobiles'), $imageName);    
              $auto->image=$imageName;
            }
        //dd($auto);
       $auto->save();
       Session::put('success','done');
       
        if($request['property_id'] == NULL)
        {
          return redirect('/panel/edit-automobiles/'.$auto->id);
        }
        else
        {
           return back(); 
        }

     }

     public function addchat(Request $request)
     {
        
        $chat= new Chat();
        $chat->user_id=$request['user_id']; 
        $chat->flag=$request['flag']; 
        $chat->message=$request['message']; 
        $chat->save();
     }
     
    
    public function chatcontents(Request $request)
    {
        $user_id=Auth::id();
        $chat_to_user_id=$request['foreign_user_id'];
        $finduniqueid=$request['finduniqueid'];
        $findchat = $request['findchat'];
        $specchats = Chat::where('unique_id',$finduniqueid)->get();

          return view('panel.extras.appendchat',compact('specchats','user_id'));
    }

    public function subscription()
    {
        return view('panel.subscription');
    }

    public function add_ads()
    {
        return view('panel.ad.ads');
    }
public function addNewAds(Request $request)
{      
    // dd($request->ad_id);

    // j1
    $request->validate([
        // 'image' => 'required|image|mimes:jpeg,jpg,png|max:3048', // 3MB max size
        'ad_id'=>'required',
        'price'=>'required',
        'duration'=>'required',
        
    ]);

    $ads = new Ads();
    $ads->url = $request['url'];
    $ads->price = $request['price'];
    $ads->user_id = Auth::id();
    $ads->ad_id = $request['ad_id'];
    $ads->status = 0;
    $ads->duration = $request['duration']; 
   $plan = PropertySubscription::find($request->plan_id);
    //  dd($plan);
    if ($plan) {
        $ads->plan_id = $plan->id;
        $ads->plan_name = $plan->Name;
        $ads->plan_price = $plan->Price;
    }
     if ($request->file('image')->isValid()) {
           
                 $number = rand(100,100000);
                 $file=$request->file('image');
                // $imageName = time() . '.' . $file->getClientOriginalExtension();
                $fileName = time() . $number .'.'. $file->getClientOriginalExtension();
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
                 $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function($font) {
                    $font->file(null); // No file needed for internal font
                    $font->size(12);
                   $font->color('#ffffff');
                    $font->align('center');
                  $font->valign('top');;
                });
                $img->insert($watermark, 'center');
                // =========
                  $img->save(public_path($filePath));
           
            if($fileName)
            {
                // $image_path =asset("uploads/Agent/{$user->image}");
                if($ads->image){
            //  unlink(public_path('uploads/Agent/'.$user->image)) ;
                // unlink($image_path);
                 
                }
                $ads->image=$fileName;
            }
        }
        else
        {
             return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
        }
    $save=$ads->save();
    if($save)
    {
    $ad_id=$ads->id;
       Session::put('ad_id',$ad_id);
       return view('panel.property.ad_plan',compact('ads'));
    }
    else
    {
        return redirect()->back()->withErrors(['image' => 'Something Went Wrong']);
    }
}

    public function editAds(Request $request){
        // j2
        //print_r($_POST);exit;
        
         $request->validate([
       
        'ad_id'=>'required',
        'price'=>'required',
        'duration'=>'required',
      
    ]);
        $ads = Ads::find($request['id']);
        $ads->url = $request['url'];
    $ads->price = $request['price'];
    $ads->user_id = 67;
    $ads->ad_id = $request['ad_id'];
    $ads->status = 0;
    $ads->duration = $request['duration'];
    if($request->file('image')) 
             {
                 $request->validate([
        'image' => 'required|image|mimes:jpeg,jpg,png|max:1048', // 3MB max size
        
    ]);
                if ($request->file('image')->isValid()) {
                   
                         $number = rand(100,100000);
                         $file=$request->file('image');
                        // $imageName = time() . '.' . $file->getClientOriginalExtension();
                        $fileName = time() . $number .'.'. $file->getClientOriginalExtension();
                        $filePath = 'uploads/ads/' . $fileName;
                        $img = InterventionImage::make($file->getRealPath());
                        $img = InterventionImage::make($file->getRealPath());
                        $width = 350;
                        $height = 200;
                        $img = Image::make($file->getRealPath())->fit($width, $height);
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
                         $watermark->text('', $watermarkWidth / 2, $logo->height() + 30, function($font) {
                            $font->file(null); // No file needed for internal font
                            $font->size(12);
                           $font->color('#ffffff');
                            $font->align('center');
                          $font->valign('top');;
                        });
                        $img->insert($watermark, 'center');
                        // =========
                          $img->save(public_path($filePath));
                   
                    if($fileName)
                    {
                        // $image_path =asset("uploads/Agent/{$user->image}");
                        if($ads->image){
                    //  unlink(public_path('uploads/Agent/'.$user->image)) ;
                        // unlink($image_path);
                         
                        }
                        $ads->image=$fileName;
                    }
                }
                else
                {
                     return redirect()->back()->withErrors(['image' => 'Invalid image upload']);
                }
             }

    $ads->save();
    Session::put('confirm', 'done');
    return back()->with('success', 'Ad updated successfully!');
        
        
    }
    public function deleteAd( $ad){
        $ad = Ads::find($ad);
        $ad->delete();
        return redirect()->back()->with('success','Add Deleted Successfully...');
    }
    public function email_verification_try(Request $request)
    {
     $useremail=$request['useremail'];   
            Mail::raw('New User while trying registration with email '.$useremail.' dont received verification code', function ($message) use ($useremail) {
    $message->to('lijo.nubicus@gmail.com');
    $message->subject('Verification Code Stucks');
});
    }
    
  
    

}
