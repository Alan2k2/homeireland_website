<?php
namespace App\Http\Controllers\panel;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Models\AmenitiesOnProperties;
use App\Models\Property;
use App\Models\PropertyImage;
use App\Models\Vat;
use App\Models\AutomobileImage;
use App\Models\SavedProperty;
use App\Models\Automobiles;
use App\Models\ParkingSlot;
use App\Models\Chat;
use App\Models\User;
use App\Models\Ads;
use App\Models\Common;
use App\Models\Purchased_slot;
use App\Models\Advertisement;
use App\Models\PropertySubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Auth;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Support\Facades\DB;
use Session;
use Intervention\Image\Facades\Image;

class PropertysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $id=Session::get('property_id');
    //   echo$id;exit;
       $property=Property::find($id);
       $property->subcription_type=$_GET['slot'];
       $property->save();
       return view('panel.property.basic');
    }
    public function pay_now($property_id)
    {
       
       $property=Property::find($property_id); 
       Session::put('property_id',$property_id);
       Session::put('main_cat',$property->main_cat);
       $main_cat=$property->main_cat;
    //   echo$main_cat;exit;
       $PropertySubscription=PropertySubscription::all();
                               if($main_cat==1) {
                                  $title= "Residential Rent";
                                }
                                if($main_cat==2)
                                {
                                  $title= "Sharing (room)";
                                }
                                if($main_cat==3)
                                {
                                  $title= "Commercial Rent";
                                }
                                if($main_cat==4)
                                {
                                  $title= "Parking Rent";
                                }
                                if($main_cat==5)
                                {
                                  $title= "Residential Sale";
                                }
                                if($main_cat==6)
                                {
                                  $title= "Commercial Sale";
                                }
                                if($main_cat==7)
                                {
                                  $title= "Parking Sale";
                                }
                                if($main_cat==8)
                                {
                                  $title= "Holiday Homes";
                                }
                                if($main_cat==9||$main_cat==10||$main_cat==11||$main_cat==12)
                                {
                                  $title= "Needed";
                                }
                                Session::put('title', $title);
       if($property->main_cat==9||$property->main_cat==10||$property->main_cat==11||$property->main_cat==12)
       {
          return view('panel.property.pay_needed',compact('PropertySubscription')); 
       }
       if($property->main_cat==8)
       {
          return view('panel.property.pay_holiday_homes',compact('PropertySubscription'));
       }
       else
       {
          
           if($property->payment_status==1)
            {
                return redirect()->route('display_property');
            }
           elseif(auth::user()->role=="agent")
           {
             
            //   k1
            return redirect()->route('myslots');
           }
           else
           {
              $data=Property::find($property_id);
              return view('panel.property.plan',compact('data','PropertySubscription')); 
               
           }
       }
       
    }
     public function pay_ad($ad_id)
    {
       $ads=Ads::find($ad_id); 
       Session::put('ad_id',$ad_id);
    //   echo"<pre>";print_r(count($ads));exit;
       return view('panel.property.ad_plan',compact('ads'));
    }
    public function contact1()
    {
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        
    if(Session::get('ad_id')!="")
        {
            // echo"hi";exit;
            $ad_id=Session::get('ad_id');
            $ads=Ads::find($ad_id); 
            $Advertisement_id=$ads->ad_id;
            $Advertisemtnt=DB::table('Adverisement')->where('id',$Advertisement_id)->first();
            $vat=Vat::where('status',1)->orderBy('created_at', 'desc')->first();
                Session::put('category','ads');
                Session::put('category_id',$ad_id);
                Session::put('amount',$Advertisemtnt->price);
                Session::put('duration',$Advertisemtnt->duration);
                Session::put('vat',$vat->vat);
                if(Session::get('amount')!="")
                {
                return view('panel.property.contact',compact('user'));
                }
            
        }
         else
        {
            return redirect()->route('home');
        }
    }
    public function contact()
    {
        //  print_r(Session::get('a_id'));exit;
        // echo"hi";exit;
        $user_id=Auth::user()->id;
        $user=User::find($user_id);
        // echo Session::get('ad_id');exit;
        if(Session::get('a_id')!="")
        {
            Session::forget('main_cat');
           Session::forget('property_id');
            // echo"hiaut";exit;
            $id=Session::get('a_id');
            $data=Automobiles::find($id);
            $data->subcription_type=$data->subcription_type;;
            $save=$data->save();
            $PropertySubscription=PropertySubscription::find($data->subcription_type);
           if($save)
           {
                Session::put('category','automobiles');
                Session::put('category_id',$id);
                Session::put('amount',$PropertySubscription->Price);
                Session::put('duration',$PropertySubscription->duration);
                if(Session::get('amount')!="")
                {
                return view('panel.property.contact',compact('user'));
                }
                else
                {
                    return redirect()->route('home');
                }
           }
        }
        elseif(Session::get('property_id')!="")
        {
            
      Session::forget('a_id');
       
            // Session::forget('a_id');
            //  echo"hiprop";exit;
           $property_id=Session::get('property_id');
           $data=Property::find($property_id);
           $slot=$data->subcription_type;
           if(Session::get('main_cat')==8)
           {
            $data->subcription_type=6;   
            $PropertySubscription=PropertySubscription::find(6);
           }
           elseif(Session::get('main_cat')==9||Session::get('main_cat')==10||Session::get('main_cat')==11||Session::get('main_cat')==12)
           {
              $data->subcription_type=7; 
              $PropertySubscription=PropertySubscription::find(7);
           }
           else
           {
            $data->subcription_type=$slot;
            $PropertySubscription=PropertySubscription::find($slot);
            
           }
           $save=$data->save();
           if($save)
           {
                Session::put('category','property');
                Session::put('category_id',$property_id);
                Session::put('amount',$PropertySubscription->Price);
                Session::put('duration',$PropertySubscription->duration);
                if(Session::get('amount')!="")
                {
                return view('panel.property.contact',compact('user'));
                }
                else
                {
                    return redirect()->route('home');
                }
           }
        }
        elseif(isset($_GET['slot']))
            {
                // echo"slot";exit;
               $PropertySubscription=PropertySubscription::find($_GET['slot']);
               Session::put('duration',$PropertySubscription->duration);
                Session::put('category','slot');
                Session::put('category_id',$_GET['slot']);
                // echo"<pre>";print_r(Session::get('category_id'));exit;
                Session::put('amount',$PropertySubscription->Price);
                if(Session::get('amount')!="")
                {
                return view('panel.property.contact',compact('user'));
                }
                else
                {
                    return redirect()->route('home');
                }
            }
            else
            {
                return redirect()->route('home');
            }
        
        
    }
     public function plan()
    {
        $property_id=Session::get('property_id');
       $property=Property::find($property_id); 
       Session::put('property_id',$property_id);
       Session::put('main_cat',$property->main_cat);
       $main_cat=$property->main_cat;
       $PropertySubscription=PropertySubscription::all();
        if($main_cat==1)
                                {
                                  $title= "Residential Rent";
                                }
                                if($main_cat==2)
                                {
                                  $title= "Sharing (room)";
                                }
                                if($main_cat==3)
                                {
                                  $title= "Commercial Rent";
                                }
                                if($main_cat==4)
                                {
                                  $title= "Parking Rent";
                                }
                                if($main_cat==5)
                                {
                                  $title= "Residential Sale";
                                }
                                if($main_cat==6)
                                {
                                  $title= "Commercial Sale";
                                }
                                if($main_cat==7)
                                {
                                  $title= "Parking Sale";
                                }
                                if($main_cat==8)
                                {
                                  $title= "Holiday Homes";
                                }
                                if($main_cat==9||$main_cat==10||$main_cat==11||$main_cat==12)
                                {
                                  $title= "Needed";
                                }
                                Session::put('title', $title);
       if($property->main_cat==9||$property->main_cat==10||$property->main_cat==11||$property->main_cat==12)
       {
          return view('panel.property.pay_needed',compact('PropertySubscription')); 
       }
       if($property->main_cat==8)
       {
          return view('panel.property.pay_holiday_homes',compact('PropertySubscription'));
       }
       else
       {
           if($property->payment_status==1)
            {
                return redirect()->route('display_property');
            }
           elseif(auth::user()->role=="agent")
           {
               
           }
           else
           {
              $data=Property::find($property_id);
              return view('panel.property.plan',compact('data','PropertySubscription')); 
               
           }
       }
       
    }
    public function myslots()
    {
      Session::forget('main_cat');
      Session::forget('property_id');
      Session::forget('category');
      Session::forget('category_id');
      Session::forget('amount');
      Session::forget('oid');
         $property_id=Session::get('property_id');
           $data=Property::find($property_id);
        
         $Purchased_slot= Purchased_slot::
              join('property_subscription', 'property_subscription.id', '=', 'purchased_slot.subscription_id')
             ->where('user_id',auth::user()->id)->get();
         $PropertySubscription=PropertySubscription::all();
        return view('panel.property.myslots',compact('PropertySubscription','Purchased_slot','data'));
    }
    
     public function media()
    {
        
       $property_arr=array();
        if(Session::get('property_id')!="")
        {
           $property_id=Session::get('property_id');
           $data=Property::find($property_id);
            if(isset($_GET['description']))
          { 
           $data->description=$_GET['description'];
           }
           $data->save();
           $PropertyImage=PropertyImage::where('property_id',$property_id)->get();
           foreach($PropertyImage as $p)
           {
           $property_arr[]=$p->image;
           }
          
        }
        // echo"<pre>";print_r($property_arr);exit;
        return view('panel.property.media',compact('data','property_arr'));
    }
     public function description()
    {
        // echo"<pre>";print_r(Session::get('property_id'));exit;
        if(Session::get('property_id')!="")
        {
           $property_id=Session::get('property_id');
           $property=Property::find($property_id);
           if(isset($_GET['fa']))
    { 
       
        if(isset($_GET['Furnishing']))
        { 
           $property->furnishing=$_GET['Furnishing'];
        }
        if(isset($_GET['feature']))
           {
                $property->feature=$_GET['feature'];
           }
        //   echo"k1";exit;
           $property->facilities=$_GET['fa'];
           $property->save();
    }
           
        }
        // exit;
        return view('panel.property.description',compact('property'));
    }
    public function location(Request $request)
  {
      $county=DB::table('ie_counties')->where('status',1)->get();
       if(isset($_GET['main_cat']))
        {
            $main_cat=$_GET['main_cat'];
            Session::put('main_cat', $_GET['main_cat']);
        }
    if(Session::get('property_id')=="")
    {
        
        if(isset($_GET['edit_id']))
            {
                 Session::put('property_id', $_GET['edit_id']);
                 $data=Property::find($_GET['edit_id']);
                 Session::put('main_cat',$data->main_cat);
                 $main_cat=Session::get('main_cat');
            }
                if(isset($main_cat))
                {
                    
                    $property = new Property();
                    $property->main_cat=$main_cat;
                    if(auth::user()->role=="agent")
                {
                    $property->subcription_type=3;
                    $purches_slot=DB::table('purchased_slot')->select('*')->where('user_id',auth::user()->id)->where('status',1)->where('payment_status',1)->orderby('slot_number','asc')->first();
                    if($purches_slot)
                    {
                         $property->payment_status=1;
                         $property->subcription_type=$purches_slot->subcription_type;
                    }
                    else
                    {
                         $property->payment_status=0;
                    }
                    if($purches_slot)
                    {
                        $used_slot=($purches_slot->used_slot)+1;
                        $status=1;
                        if($used_slot==$purches_slot->slot_number)
                        {
                            $status=0;
                        }
                        
                         DB::table('purchased_slot')->where('id',$purches_slot->id)->update(['used_slot'=>$used_slot,'status'=>$status]);
                    }
                    
                     $property->user_id=auth::user()->id;
                }
                    $ave=$property->save();
                        
                        if($ave)
                        {
                          Session::put('main_cat', $main_cat);
                          Session::put('property_id',$property->id);
                        }
                }
    }
    
    if(isset($_GET['id']))
    {
        // 2 for manula location entry
        // echo Session::get('main_cat');exit;
        if($_GET['id']==2)
        {
            if(isset($_GET['edit_id']))
            {
               
                 Session::put('property_id', $_GET['edit_id']);
                 $property_id=Session::get('property_id');
                 $property=Property::find($property_id);
                 
                 Session::put('main_cat', $property->main_cat);
            }
           
               if(Session::get('property_id')!="")
                     {
                              $main_cat=Session::get('main_cat');
                                $property_id=Session::get('property_id');
                                $data=Property::find($property_id);
                                 $data->main_cat=$main_cat;
                                 $data->save();
                                 $main_cat=$data->main_cat;
                                 Session::put('main_cat', $main_cat);
                                 if(isset($main_cat))
                                {
                                $main_cat=$main_cat;
                                }
                                else
                                {
                                     $main_cat=Session::get('main_cat');
                                }
                        //   echo$main_cat;exit;
                                if($main_cat==1)
                                {
                                  $title= "Residential Rent";
                                }
                                if($main_cat==2)
                                {
                                  $title= "Sharing (room)";
                                }
                                if($main_cat==3)
                                {
                                  $title= "Commercial Rent";
                                }
                                if($main_cat==4)
                                {
                                  $title= "Parking Rent";
                                }
                                if($main_cat==5)
                                {
                                  $title= "Residential Sale";
                                }
                                if($main_cat==6)
                                {
                                  $title= "Commercial Sale";
                                }
                                if($main_cat==7)
                                {
                                  $title= "Parking Sale";
                                }
                                if($main_cat==8)
                                {
                                  $title= "Holiday Homes";
                                }
                                if($main_cat==9||$main_cat==10||$main_cat==11||$main_cat==12)
                                {
                                  $title= "Needed";
                                }
                                Session::put('title', $title);
                             
                                //  echo"huix";exit;
                                return view('panel.property.location_manually',compact('data','county')); 
                     }
           
        }
    }
    
    
}
public function price(Request $request)
{
 
    if(Session::get('property_id')!="")
    {
       
              $property_id=Session::get('property_id');
              $property=Property::find($property_id);
              $property_bed_type=DB::table('bed_type')->where('property_id',$property_id)->get();
                $property->user_id=auth::user()->id;
                if(auth::user()->role=="agent")
                {
                    $property->subcription_type=3;
                }
                 if(isset($_GET['county']))
            { 
                $property->county=$_GET['county'];
            }  if(isset($_GET['city2']))
            { 
                $property->city=$_GET['city2'];
            }
              if(isset($_GET['town']))
            { 
                $property->town=$_GET['town'];
            }
                  if(isset($_GET['street']))
            { 
                $property->street=$_GET['street'];
            }
                if(isset($_GET['eir_code']))
            { 
                $property->eir_code=$_GET['eir_code'];
            }
                if(isset($_GET['location_show']))
                {
                $property->location_disp_flag=$_GET['location_show'];
                }
                else
                {
                    $property->location_disp_flag=0;
                }
                if(isset($_GET['Longitude']))
                {
                $property->Longitude=$_GET['Longitude'];
                }
                if(isset($_GET['Latitude']))
                {
                $property->Latitude=$_GET['Latitude'];
                }

                $property_save=$property->save();
                               
                return view('panel.property.price',compact('property','property_bed_type'));
                     
            
              
    
      
         }
}
public function property_details()
{
  
    $property_id=Session::get('property_id');
    $property=Property::find($property_id);
    
        if(Session::get('property_id')!="")
        {
            if(!empty($_GET['auction_location1']))
           {
             
                $property->auction_location=$_GET['auction_location1'];
           }
            if(!empty($_GET['auction_location2']))
           {
              
                $property->auction_location=$_GET['auction_location2'];
           }
           if(!empty($_GET['auction_location3']))
           {
              
                $property->auction_location=$_GET['auction_location3'];
           }
           
           
            if(!empty($_GET['au_d1']))
           {
                $property->auction_date=$_GET['au_d1'];
           }
           if(!empty($_GET['au_d2']))
           {
                $property->auction_date=$_GET['au_d2'];
           }
           if(!empty($_GET['au_d3']))
           {
                $property->auction_date=$_GET['au_d3'];
           }
            if(isset($_GET['price_on_app']))
           {
                $property->price_on_app=$_GET['price_on_app'];
           }
            if(isset($_GET['selling_type']))
           {
                $property->selling_type=$_GET['selling_type'];
           }
            if(isset($_GET['price']))
           {
           $property->price=$_GET['price'];
           }
            if(isset($_GET['price_type']))
           {
           $property->price_type=$_GET['price_type'];
           }
           if(isset($_GET['for_let_sale']))
           {
               if($_GET['for_let_sale']==4)
               {
                   $property->price_type="Monthly";
               }
               $property->for_let_sale=$_GET['for_let_sale'];
           }
           if(isset($_GET['price_apn']))
           {
               $property->price_apn=$_GET['price_apn'];
           }
           if(isset($_GET['price_sale']))
           {
               $property->price_sale=$_GET['price_sale'];
           }
           if(isset($_GET['auction']))
           {
               $property->auction=$_GET['auction'];
           }
           $property_save=$property->save();
       
           if(isset($_GET['rent_coll']))
            {
               $property->rent_coll=$_GET['rent_coll'];
             }
            if(isset($_GET['bed_type']))
            {   for($i=0;$i<count($_GET['bed_type']);$i++)
              {
                  $bed=[
                    'bed_type_name' => trim($_GET['bed_type'][$i]),
                    'rent' => trim($_GET['rent'][$i]),
                    'en_suite' => trim($_GET['en'][$i]),
                    'property_id' => trim($property_id),
                ];
                 $save=DB::table('bed_type')->where($bed)->first();
                  if(!$save)
                  {
                    DB::table('bed_type')->insert($bed);
                  }
              }
            }
     $property_save=$property->save();
   
  
   
       if($property_save)
                       
         {              
                 
                            
                             if(Session::get('main_cat')==5)
                                        {
                                        return view('panel.property.property_sale',compact('property'));
                                        }
                            return view('panel.property.property_details',compact('property'));
                 
         }
    }
   
     
}
public function details_store()
{
  
     
        if(Session::get('property_id')!="")
        {
           $property_id=Session::get('property_id');
           $property=Property::find($property_id);
           if(isset($_GET['property_type']))
           {
           $property->property_type=$_GET['property_type'];
           
           }
           if(isset($_GET['available_from']))
           {
           $property->Available_from=$_GET['available_from'];
           }
           if(isset($_GET['available_to']))
           {
           $property->Available_to=$_GET['available_to'];
           }
           if(isset($_GET['single_room']))
           {
           $property->Single_Bedrooms=$_GET['single_room'];
           }
           if(isset($_GET['double_room']))
           {
           $property->Double_Bedrooms=$_GET['double_room'];
           }
           if(isset($_GET['twin_room']))
           {
           $property->Twin_Bedrooms=$_GET['twin_room'];
           }
           $count_single_bedroom=$count_double_bedroom=$total_rooms=$count_twin_bedroom=0;
           if(!empty($_GET['single_room'])){$count_single_bedroom=$_GET['single_room'];}
           if(!empty($_GET['double_room'])){$count_double_bedroom=$_GET['double_room'];}
           if(!empty($_GET['twin_room'])){$count_twin_bedroom=$_GET['twin_room'];}
           $total_rooms=$count_single_bedroom+$count_double_bedroom+$count_twin_bedroom;
           if($total_rooms>0)
           {
               $property->total_rooms=$total_rooms;
           }
           if(isset($_GET['bathroom']))
           {
           $property->Bathrooms=$_GET['bathroom'];
           }
           if(isset($_GET['ber']))
           {
           $property->BER=$_GET['ber'];
           }
           if(isset($_GET['ber_no']))
           {
           $property->BER_NO=$_GET['ber_no'];
           }
           if(isset($_GET['Access']))
           {
           	$property->Access=$_GET['Access'];
           }
           if(isset($_GET['ber_no_avl']))
           {
           	$property->ber_no_avl=$_GET['ber_no_avl'];
           }
           if(isset($_GET['fa']))
           {
           	$property->facilities=$_GET['fa'];
           }
           if(isset($_GET['fa1']))
           {
           	$property->facilities=$_GET['fa1'];
           }
            if(Session::get('main_cat')==4||Session::get('main_cat')==7|| Session::get('main_cat')==12)
            {
                   	if(isset($_GET['space']))
                   {
                   $property->space=$_GET['space'];
                   }
            }
            if(isset($_GET['feature']))
           {
                $property->feature=$_GET['feature'];
           }
           	if(isset($_GET['unit']))
           {
           $property->unit=$_GET['unit'];
           }
          if(isset($_GET['floor_area1']))
           {
           $property->floor_area=$_GET['floor_area1'];
           }
           	elseif(isset($_GET['floor_area']))
           {
           $property->floor_area=$_GET['floor_area'];
           }
           if(isset($_GET['minimum_lease']))
           {
           $property->Minimum_lease=$_GET['minimum_lease'];
           }
           if(isset($_GET['av_for']))
           {
           $property->av_for=$_GET['av_for'];
           }
           if(isset($_GET['no_tenants']))
           {
           $property->no_tenants=$_GET['no_tenants'];
           }
           if(isset($_GET['Owner_occupied']))
           {
           $property->Owner_occupied=$_GET['Owner_occupied'];
           }
           if(isset($_GET['one_person']))
           {
           $property->one_person=$_GET['one_person'];
           }
            if(isset($_GET['Preference']))
           {
           $property->Preference=$_GET['Preference'];
           }
           if(isset($_GET['tax']))
           {
           $property->tax=$_GET['tax'];
           }
           if($property->property_type=="Studio")
           {
             $property->total_rooms=1;
              $property->Bathrooms=1;
           }
           $property_save=$property->save();
       }
    
    //   if(Session::get('main_cat')!=3 && Session::get('main_cat')!=4 && Session::get('main_cat')!=6 && Session::get('main_cat')!=7)
    //   {
      
       if($property_save)
       {
                  if(Session::get('main_cat')==5)
            {
            return view('panel.property.Facilities_sale',compact('property'));
            }
               else
               {
                   if(Session::get('main_cat')==4|| Session::get('main_cat')==7 || Session::get('main_cat')==30)
            {
            return redirect()->route('description');
            }
                 return view('panel.property.Facilities',compact('property'));
               } 
    //   }
      }
}
public function media_store(Request $request)
{
  if(Session::get('property_id')!="")
        {
       
          $property_id=Session::get('property_id');
          $property=Property::find($property_id); 
          $common=new Common();     
          if($request->file('list_image')) 
          {  
            $file=$request->file('list_image');
            $fileName=$common->upload_image('properties',$file);
            if($fileName)
            {
                if($property->main_image)
                {
                          unlink(public_path('uploads/properties/'.$property->main_image)) ;
                        
                }
                $property->main_image=$fileName;
              }
          }   
               
                if($request->file('video')) 
             { 
               $file=$request->file('video');
               $fileName=$common->upload_video('videos',$file);
                if($property->video_url)
                {
                        //   unlink(public_path('uploads/videos/'.$property->video_url)) ;  
                       
                }
                $property->video_url=$fileName;
                 
               } 
               if(isset($_POST['Youtube_video_url'])){
               $property->Youtube_video_url=$_POST['Youtube_video_url'];
               
               }
                $property->save();
                $role=Auth::user()->role;
                
                  if($files=$request->file('extra_img'))
                  {
                    $PropertyImage=PropertyImage::where('property_id',$property_id)->get();
                if($PropertyImage)
                {
                      foreach($PropertyImage as $p)
                      {
                                // unlink(public_path('uploads/properties/'.$p->image)) ;
                                // PropertyImage::where('',$p->id)->delete();
                      }
                
                 }
                    foreach($files as $file)
                    {
                      $fileName=$common->upload_image('properties',$file);
                      $PropertyImage=new PropertyImage();
                      $PropertyImage->image=$fileName;
                      $PropertyImage->property_id=$property_id;
                      $PropertyImage->save();
                    }
                } 
                    
               
               if($property->payment_status==1)
               {
                     return redirect()->route('display_property');
                 
               }
               elseif($role=="agent")
               {
                    return redirect()->route('myslots');
                 
               }
               elseif($property->main_cat==8)
               {
                return redirect()->route('pay_holiday_homes');
               }
               else
               {
                   return redirect()->route('contact');
               }
        }
        else
        {
            return redirect()->route('display_property'); 
        }
       
}
 public function Facilities()
{
    if(Session::get('property_id')!="")
        {
           $property_id=Session::get('property_id');
           $property=Property::find($property_id);
      if(Session::get('main_cat')==5)
    {
    return view('panel.property.Facilities_sale',compact('property'));
    }
   else
   {
     return view('panel.property.Facilities',compact('property'));
   }
        }
}
    public function Enquiries()
    {
       $userid=auth::user()->id;
       $query = Property::query();
                         $query->select('*','users.id as user_id','property_enquiries.id as id');
                         $query->join('users', 'properties.user_id', '=', 'users.id');
                         $query->join('property_enquiries', 'properties.id', '=', 'property_enquiries.property_id');
                         $query->where('property_enquiries.show_to_seller',1);
                          $query->where('properties.user_id',$userid);
                          $query->orderBy('property_enquiries.id', 'desc');
          $enquiries= $query->Paginate(20);
         return view('panel.property.Enquiries',compact('enquiries'));
    }
    public function delete_Enquiries()
    {
        $id=$_GET['id'];
        DB::table('property_enquiries')->where('id',$id)->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
   public function needed()
    {
         Session::forget('main_cat');
       Session::forget('property_id');
       Session::forget('category');
       Session::forget('category_id');
       Session::forget('amount');
       
        return view('panel.property.needed');
    }
     public function pay_needed()
    {
        $PropertySubscription=PropertySubscription::all();
        return view('panel.property.pay_needed',compact('PropertySubscription'));
    }
    public function pay_holiday_homes()
    {
        $PropertySubscription=PropertySubscription::all();
        return view('panel.property.pay_holiday_homes',compact('PropertySubscription'));
    }
    public function add_ad()
    {
        
        $Advertisement1=DB::table('Adverisement')->where('status',1)->get();
        
          if(isset($_GET['page_name'])&&$_GET['page_name']!="all")
          {
              $Advertisement=DB::table('Adverisement')
              ->where('page_name',$_GET['page_name'])
              ->where('status',1)
             ->Paginate(100);
          }
          elseif(isset($_GET['page_name'])&&$_GET['page_name']=="all")
          {
              $Advertisement=DB::table('Adverisement')
              ->where('status',1)
              ->Paginate(20);
          }
          else
          {
               $Advertisement=DB::table('Adverisement')->where('status',1)->Paginate(20);
          }
         return view('panel.Advertisements.Advertisement',compact('Advertisement','Advertisement1'));
    }
    public function payments_history()
    {
         $ads=Ads::where('user_id',auth::user()->id)->get();
         $orders=DB::table('orders')
          ->whereNotNull('category_id')
          ->whereNotNull('category')
         ->where('customer_id',auth::user()->id)->where('orders.payment_status',1)
         ->Paginate(20);
        return view('panel.payment.payments',compact('orders','ads'));
    }
  public function display_ads()
    {
         $Advertisement1=DB::table('Adverisement')->where('status',1)->get();
        
          if(isset($_GET['page_name'])&&$_GET['page_name']!="all")
          {
             
               $Advertisement=DB::table('ads')
               ->select('*','ads.id as id','ads.status as status')
               ->join('Adverisement', 'ads.ad_id', '=', 'Adverisement.id')
               ->where('page_name',$_GET['page_name'])
               ->where('user_id',auth::user()->id)
               ->Paginate(20);
          }
          else
          {
               $Advertisement=DB::table('ads')
               ->select('*','ads.id as id','ads.status as status','ads.payment_status as payment_status')
               ->join('Adverisement', 'ads.ad_id', '=', 'Adverisement.id')
                ->where('user_id',auth::user()->id)
               ->Paginate(20);
          }
         return view('panel.Advertisements.display_ads',compact('Advertisement','Advertisement1'));
    }
    public function delete_ad($id)
    {
        DB::table('ads')->where('id',$id)->delete();
        return redirect()->back()->with('success','Deleted Successfully');
    }
    public function delete_property($id)
    {
         $status=DB::table('properties')->where('id',$id)->delete();
         if($status)
         {
             $AutomobileImage=PropertyImage::where('property_id',$id)->delete();
             if(auth::user()->role=="agent")
                {
                    $existing_slot=$purches_slot=DB::table('purchased_slot')->select('*')->where('user_id',auth::user()->id)->whereNot('used_slot',0)->where('status',1)->where('payment_status',1)->orderby('slot_number','asc')->first();
                   if(!$existing_slot)
                   {
                         $purches_slot=DB::table('purchased_slot')->select('*')->where('user_id',auth::user()->id)->whereNot('used_slot',0)->where('status',0)->where('payment_status',1)->orderby('slot_number','asc')->first();
                        if($purches_slot)
                        {
                            $used_slot=($purches_slot->used_slot)-1;
                            DB::table('purchased_slot')->where('id',$purches_slot->id)->update(['used_slot'=>$used_slot,'status'=>1]);
                        }
                   }
                 else
                    {
                    $purches_slot=DB::table('purchased_slot')->select('*')->whereNot('used_slot',0)->where('user_id',auth::user()->id)->where('status',1)->where('payment_status',1)->orderby('slot_number','asc')->first();
                    $used_slot=($purches_slot->used_slot)-1;
                     DB::table('purchased_slot')->where('id',$purches_slot->id)->update(['used_slot'=>$used_slot]);
                    }
                   
                }
                 return redirect()->back()->with('success','Deleted Successfully');
         }
       
        else
        {
            return redirect()->back()->with('success','Try later ');
        }
    }
    public function  display_property()
    {
      $Common=new Common();
      $NotInArray=[];
      $status=[0,1,2];
      $needed=0;
      $property=$Common->get_property($NotInArray,$status,$needed);
      $PropertyImage=$Common->get_property_image();
      $main_Cat=DB::table('main_category')->whereNotIn('id',[9,10,11,12])->get();
      return view('panel.property.display_prop',compact('property','main_Cat','PropertyImage'));
    }
    
    public function  display_needed()
    {
      $Common=new Common();
      $NotInArray=[1,2,3,4,5,6,7,8];
      $status=[0,1,2];
      $needed=1;
      $property=$Common->get_property($NotInArray,$status,$needed);
      $main_Cat=DB::table('main_category')->whereNotIn('id',$NotInArray)->get();
      return view('panel.property.display_needed',compact('property','main_Cat'));
    }
    public function view_property()
    {
      $Common=new Common();
      $needed=0;
      if(isset($_GET['needed']))
{
     $needed=1;
}
    $view=$_GET['view_id'];
      $property=$Common->get_property_view($needed,$view);
      if (!$property) {
        return view('panel.property.display_view_property', compact('property'));
      }
      $prop_images=PropertyImage::where('property_id',$property->id)->get();
      return view('panel.property.display_view_property',compact('property','prop_images'));
    }
    
   public function scheam()
   {
       Session::forget('main_cat');
       Session::forget('property_id');
       Session::forget('a_id');
       Session::forget('category');
       Session::forget('category_id');
       Session::forget('amount');
       
        if(isset($_GET['edit_id']))
            {
                 Session::put('property_id', $_GET['edit_id']);
                 $data=Property::find($_GET['edit_id']);
                 Session::put('main_cat',$data->main_cat);
            }
            else
            {
                $data=new Property;
                $data->main_cat=0;
                $data->save();
                Session::put('property_id', $data->id);
               
            }
            // echo Session::get('property_id');exit;
       
       $PropertySubscription=PropertySubscription::all();
       return view('panel.plan_new',compact('data','PropertySubscription')); 
   }
    public function upgrade_featured()
    {
        // echo"hi";exit;
        $id=Session::get('property_id');
        $property=Property::find($id);
        $property->subcription_type=1;
        $property->save();
        echo"1";
        // return redirect()->back()->with('success','Try later ');
        
    }
}
