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

class AutomobilesController extends Controller
{
    public function __construct()
    {
        
      Session::forget('main_cat');
    //   Session::forget('a_id');
      Session::forget('property_id');
      
    }

   
    public function index()
    {
        $search_key="";
        
        // dd('fff',$_GET['search_key']);
      if(isset($_GET['search_key'])&&($_GET['search_key']!="all"))
      {
          $search_key=$_GET['search_key'];
           $Automobiles=Automobiles::where('type',$_GET['search_key'])->Paginate(20);
      }
      else
      {
        $Automobiles=Automobiles::where('user_id',auth::user()->id)->Paginate(20);
      }
        return view('panel.automobile.index',compact('Automobiles','search_key'));
    }
 
    public function Location()
    {
        $data=array();
         
        if(isset($_GET['edit_id']))
        {
            $eid=$_GET['edit_id'];
            $data=Automobiles::find($eid);
            Session::put('a_id',$eid);
        }
           $county=DB::table('ie_counties')->where('status',1)->get();
        return view('panel.automobile.location',compact('data','county'));
    }


    public function Auto_store(Request $request)
    {
        
        $data=array();
        $no=isset($_GET['no'])?$_GET['no']:0;
        //echo $no;
        $common=new Common();
        $property=$common->auto_store($request);
         $filter_arr[0]=DB::table('type_automobiles')->where('status',1)->get();
         $filter_arr[1]=DB::table('brand_model')->where('status',1)->get();
         $filter_arr[2]=DB::table('brand')->where('status',1)->get();
         $filter_arr[3]=DB::table('fuel_type')->where('status',1)->get();
         $filter_arr[4]=DB::table('color')->where('status',1)->get();
         $filter_arr[5]=DB::table('body_type')->where('status',1)->get();     
        if(Session::has('a_id'))
        {
           $eid=Session::get('a_id');
           $data=Automobiles::find($eid);
           if ($data && !empty($data->aname)) {
               $type_auto = DB::table('type_automobiles')->where('auto_name', $data->aname)->first();
               if ($type_auto) {
                   $filter_arr[2] = DB::table('brand')->where('type_id', $type_auto->id)->where('status', 1)->get();
               }
           }
        }
        if($no==2)
        {
             return view('panel.automobile.details',compact('data','filter_arr'));
        }
        if($no==3)
        {
             return view('panel.automobile.description',compact('data'));
        }
        if($no==4)
        {
            $automobileneeded=DB::table('automobiles')
                ->where('id',$eid)
                ->whereNotNull('main_id')
                ->first();
                
                // dd($automobileneeded);
                
                // $data=Automobiles::find($a_id);
                    //   echo"<pre>";print_r($data);exit;
                      $PropertySubscription=PropertySubscription::all();
                
                if(!empty($automobileneeded)){
                    return view('panel.automobile.plan_auto_needed',compact('data','PropertySubscription'));
                }
            
            
           $property_arr=array();
           $PropertyImage=AutomobileImage::where('a_id',$eid)->get();
           foreach($PropertyImage as $p)
           {
           $property_arr[]=$p->image;
           }
           return view('panel.automobile.media',compact('data','property_arr'));
        }
        else
        {
           
            return redirect('Auto_Location');
            
        }
    }
    
    public function  automobileNeededRedirectToPurchasePage(Request $request){
        $no = $request->input('no', isset($_GET['no']) ? $_GET['no'] : 0);
        $eid = \Session::get('a_id'); // Assuming the ID is in the session as in Auto_store
        
        if($no==4)
        {
           $property_arr=array();
           $PropertyImage=AutomobileImage::where('a_id',$eid)->get();
           
           
           foreach($PropertyImage as $p)
           {
           $property_arr[]=$p->image;
           }
           
           
           return redirect()->route('Automobiles');
        }
        
        
    }
    
    
 public function Auto_media_store(Request $request){
    if(Session::get('a_id')!="")
        {
            
          $a_id=Session::get('a_id');
          $data=Automobiles::find($a_id); 
          $common=new Common();     
          if($request->file('list_image')) 
          {  
            $file=$request->file('list_image');
            $fileName=$common->upload_image('automobiles',$file);
            // echo$fileName;exit;
            if($fileName)
            {
                if($data->main_image)
                {
                          unlink(public_path('uploads/automobiles/'.$data->main_image)) ;           
                }
                $data->main_image=$fileName;
              }
          }   
               
                if($request->file('video')) 
             { 
               $file=$request->file('video');
               $fileName=$common->upload_video('videos',$file);
                if($data->video_url)
                {
                        //   unlink(public_path('uploads/videos/'.$property->video_url)) ;           
                }
                $data->video_url=$fileName;
                 
               } 
               if(isset($_POST['Youtube_video_url'])){
               $data->Youtube_video_url=$_POST['Youtube_video_url'];
               
               }
                $data->save();
                $role=Auth::user()->role;
                
                  if($files=$request->file('extra_img'))
                  {
                    $AutomobileImage=AutomobileImage::where('a_id',$a_id)->get();
                if($AutomobileImage)
                {
                      foreach($AutomobileImage as $p)
                      {
                               
                                // unlink(public_path('uploads/automobiles/'.$p->image)) ;
                                //  AutomobileImage::where('image',$p->image)->delete();
                              
                      }
                
                 }
                    foreach($files as $file)
                    {
                      $fileName=$common->upload_image('automobiles',$file);
                      $AutomobileImage=new AutomobileImage();
                      $AutomobileImage->image=$fileName;
                      $AutomobileImage->a_id=$a_id;
                      $AutomobileImage->save();
                    }
                } 
                    
                
            //   echo$role;exit;
            if($data->payment_status==1)
            {
                return redirect()->route('Automobiles');
            }
               elseif($role=="agent")
               {
                    return redirect()->route('myslots');
                 
               }
               else
               {
                      $data=Automobiles::find($a_id);
                    //   echo"<pre>";print_r($data);exit;
                      $PropertySubscription=PropertySubscription::all();
                      return view('panel.automobile.plan_auto',compact('data','PropertySubscription'));
               }
        }
}
   public function Auto_pay_now($property_id)
    {
       
       $property=Automobiles::find($property_id); 
       Session::put('a_id',$property_id);
       
    
    //   echo$main_cat;exit;
       $PropertySubscription=PropertySubscription::all();
                            $title="Automobiles";
                            Session::put('title', $title);
       
           if(auth::user()->role=="agent")
           {
             
            //   k1
            return redirect()->route('myslots');
           }
           else
           {
              $data=Automobiles::find($property_id);
             return view('panel.automobile.plan_auto',compact('data','PropertySubscription'));
               
           }
       
       
    }
    public function Auto_single($id)
    {
        
            $data=Automobiles::find($id);
            $AutomobileImage=AutomobileImage::where('a_id',$id)->get();
 
       return view('Automobiles.Automobile_single',compact('data','AutomobileImage'));
    }
    public function Auto_search()
    {
        $data=array();
         Session::forget('a_id');
        if(isset($_GET['edit_id']))
        {
            $eid=$_GET['edit_id'];
            $data=Automobiles::find($eid);
            Session::put('a_id',$eid);
        }
 
        return view('Automobiles.Automobile_Search',compact('data'));
    }
      public function Auto_delete($id)
    {
        $Automobiles=Automobiles::where('id',$id)->delete();
        if($Automobiles)
        {
           $AutomobileImage=AutomobileImage::where('a_id',$id)->delete();
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
    public function view_automobile()
    {
      $view=$_GET['view_id'];
      $property=Automobiles::find($view);
      $prop_images=AutomobileImage::where('a_id',$view)->get();
      return view('panel.automobile.display_view_automobiles',compact('property','prop_images'));
    }
    public function scheam_auto()
    {
        Session::forget('main_cat');
       Session::forget('property_id');
       Session::forget('a_id');
       Session::forget('category');
       Session::forget('category_id');
       Session::forget('amount');
       
         if(isset($_GET['edit_id']))
            {
                 Session::put('a_id',$_GET['edit_id']);
                 $data=Automobiles::find($_GET['edit_id']);
                //  Session::put('main_cat',$data->main_cat);
            }
            else
            {
                $data=new Automobiles;
                $data->save();
                Session::put('a_id', $data->id);
               
            }
            // echo Session::get('property_id');exit;
       
       $PropertySubscription=PropertySubscription::all();
        return view('panel.automobile.plan_new',compact('data','PropertySubscription'));
    }
    
    
    public function addAutomobileNeeded(Request $request)
    {
        
        // 
           Session::forget('main_cat');
           Session::forget('property_id');
           Session::forget('a_id');
           Session::forget('category');
           Session::forget('category_id');
           Session::forget('amount');
       
         if(isset($_GET['edit_id']))
            {
                
                 Session::put('a_id',$_GET['edit_id']);
                 $data=Automobiles::find($_GET['edit_id']);
                //  Session::put('main_cat',$data->main_cat);
                
            }
            else
            {
                
                
                $data=new Automobiles;
                $data->main_id='13';
                $data->save();
                Session::put('a_id', $data->id);
                
               
            }
            // echo Session::get('property_id');exit;
    //   dd($data);
        $PropertySubscription=PropertySubscription::all();
        return view('panel.automobile.plan_automobile_needed',compact('data','PropertySubscription'));
        
        
    }
    public function upgrade_featured_auto()
    {
        // echo"hi";exit;
        $id=Session::get('a_id');
        $property=Automobiles::find($id);
        $property->subcription_type=1;
        $property->save();
        echo"1";
        // return redirect()->back()->with('success','Try later ');
        
    }
}
