<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\PropertyImage;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
use App\Models\Order;
use App\Models\Ads;
// use App\Models\User;
use App\Models\Automobiles;
use App\Models\Property;
use Intervention\Image\Facades\Image;
class Common extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class , 'chat_to_user_id');
    }
    public function Sender(){
        return $this->hasOne(User::class , 'id','user_id');
    }
    public function upload_image($path,$file)
    {
       
                $number = rand(100,100000);
                
                // $imageName = time() . '.' . $file->getClientOriginalExtension();
                $fileName = time() . $number . $file->getClientOriginalExtension();
                $file->getClientOriginalExtension();
                $filePath = 'uploads/'.$path.'/' . $fileName;
                $img = InterventionImage::make($file->getRealPath());
                $img = InterventionImage::make($file->getRealPath());
                // $width = 300;
                // $height = 300;
                // $img = Image::make($file->getRealPath())->fit($width, $height);

                $new_width= 400;
                $new_height= 350;
         
                $img->resize($new_width, $new_height, function($constraint) {
                       $constraint->aspectRatio();
                });
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
                                $fontSize = 15; // GD internal font size
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
                                // echo$fileName;exit;
                                return $fileName;
         
    }
    public function upload_video($path,$fileName)
    {
       
        $timestamp = now()->format('YmdHis');
        $extension = $fileName->getClientOriginalExtension();
        $filename = "video_{$timestamp}.{$extension}";
        $filePath = 'uploads/'.$path.'/' . $fileName;
         $fileName->move(public_path('uploads/'.$path.'/'), $filename); 
         return $filename;
    }
public function get_property($NotInArray,$status,$needed)
    {
        
        $query = Property::query();
        $query->select('*','users.id as user_id','properties.id as id','properties.status as status');
        $query->join('users', 'properties.user_id', '=', 'users.id');
        $query->join('main_category', 'properties.main_cat', '=', 'main_category.id');
        $query->whereNotIn('main_cat',$NotInArray);
        $query->whereIn('properties.status',$status);
        $query->where('users.status',1);
        if(auth::user()->role!="")
         {    
           $query->where('users.id',auth::user()->id);
           $user_name=1;
           Session::put('user_id',auth::user()->id);
           $user=User::find(auth::user()->id);
            
         }
         if(!empty($_GET['main_name'])&&($_GET['main_name']!="all"))
         {
            $query->where('main_cat',$_GET['main_name']);
         }
         $query->orderBy('properties.id','desc');
         $properties=$query->Paginate(20);
        //  echo"<pre>";print_r($properties);exit;
         return $properties;
    }
 public function get_property_view($needed,$view)
    {
        
        $query = Property::query();
        $query->select('*','users.id as user_id','properties.id as id','properties.status as status');
        $query->join('users', 'properties.user_id', '=', 'users.id');
        if($needed==0)
        {
        $query->leftJoin('property_images', 'properties.id', '=', 'property_images.property_id');
        }
        // $query->join('bed_type', 'properties.id', '=', 'bed_type.property_id');
        $query->join('main_category', 'properties.main_cat', '=', 'main_category.id');
        $query->leftJoin('property_subscription', 'properties.subcription_type', '=', 'property_subscription.id');
        $query->where('users.status',1);
        if(auth::user()->role!="")
         {    
           $query->where('users.id',auth::user()->id);
           $user_name=1;
           Session::put('user_id',auth::user()->id);
           $user=User::find(auth::user()->id);
            
         }
         
         $query->where('properties.id', $view);
         $query->orderBy('properties.id','desc');
         $properties=$query->first();
        //  echo"<pre>";print_r($properties);exit;
         return $properties;
    }
    public function get_property_image()
    {
         $properties = PropertyImage::all();
         return $properties;
    }
     public function get_single_property($id)
    {
        $query = Property::query();
        $query->select('*','users.id as user_id','properties.id as id','properties.status as status');
        $query->join('users', 'properties.user_id', '=', 'users.id');
        $query->join('main_category', 'properties.main_cat', '=', 'main_category.id');
            $query->where('properties.id',$id);
            $properties=$query->first();
             return $properties;
    }
    public function auto_store($request)
    {
    //  echo"<pre>";print_r($_GET);exit;  
      
      Session::forget('main_cat');
    //   Session::forget('a_id');
      Session::forget('property_id');
    //   exit;
       if(Session::has('a_id'))
       {
           $aid=Session::get('a_id');
           $automobiles= Automobiles::find($aid);
           $automobiles->user_id=auth::user()->id;
           if($request['slot'])
          {
              $slot=$request['slot'];
              $automobiles->subcription_type=$slot;
          }
          if(auth::user()->role=="agent")
                {
                    $automobiles->subcription_type=3;
                    $purches_slot=DB::table('purchased_slot')->select('*')->where('user_id',auth::user()->id)->where('status',1)->where('payment_status',1)->orderby('slot_number','asc')->first();
                    if($purches_slot)
                        {
                            $used_slot=($purches_slot->used_slot)+1;
                            
                        //   echo"<pre>";print_r($purches_slot);exit;
                           if($purches_slot)
                            {
                                 $automobiles->subcription_type=$purches_slot->subscription_id;
                                 $automobiles->payment_status=1;
                            }
                            else
                            {
                                 $automobiles->payment_status=0;
                            }
                           
                            $status=1;
                            
                            if($used_slot==$purches_slot->slot_number)
                            {
                                $status=0;
                            }
                             
                             DB::table('purchased_slot')->where('id',$purches_slot->id)->update(['used_slot'=>$used_slot,'status'=>$status]);
        
                        }
                }
        //   print_r($request['slot']);
        //   echo$slot;exit;
        
       }
       else
       {
          $automobiles=new Automobiles();
          $automobiles->user_id=auth::user()->id;
          
          if($request['slot'])
          {
              $slot=$request['slot'];
          }
        //   print_r($request['slot']);
        //   echo$slot;exit;
          $automobiles->subcription_type=$slot;
          if(auth::user()->role=="agent")
                {
                    $automobiles->subcription_type=3;
                    $purches_slot=DB::table('purchased_slot')->select('*')->where('user_id',auth::user()->id)->where('status',1)->where('payment_status',1)->orderby('slot_number','asc')->first();
                    if($purches_slot)
                        {
                            $used_slot=($purches_slot->used_slot)+1;
                            
                        //   echo"<pre>";print_r($purches_slot);exit;
                           if($purches_slot)
                            {
                                 $automobiles->subcription_type=$purches_slot->subscription_id;
                                 $automobiles->payment_status=1;
                            }
                            else
                            {
                                 $automobiles->payment_status=0;
                            }
                           
                            $status=1;
                            
                            if($used_slot==$purches_slot->slot_number)
                            {
                                $status=0;
                            }
                             
                             DB::table('purchased_slot')->where('id',$purches_slot->id)->update(['used_slot'=>$used_slot,'status'=>$status]);
        
                        }
                }
    //   echo"stop";exit;
       }
       
       
    
          if(isset($request['duration'])){$automobiles->duration=$request['duration'];}
          if(isset($request['price'])){$automobiles->price=$request['price'];}
          if(isset($request['name'])){$automobiles->aname=$request['name'];}
          if(isset($request['brand'])){$automobiles->brand=$request['brand'];}
          if(isset($request['type'])){$automobiles->type=$request['type'];}
          if(isset($request['county'])){$automobiles->county=$request['county'];}
          if(isset($request['city'])){$automobiles->city=$request['city'];}
          if(isset($request['town'])){$automobiles->town=$request['town'];}
          if(isset($request['street'])){$automobiles->street=$request['street'];}
          if(isset($request['eir_code'])){$automobiles->eir_code=$request['eir_code'];}
        //   if(isset($request['location_show_flag'])){$automobiles->location_disp_flag=$request['location_show'];}
        // if(isset($request['location_show'])) { $automobiles->location_disp_flag = $request['location_show'] == '1' ? 1 : 0;}
        if (isset($request['location_show'])) {
        $automobiles->location_disp_flag = $request['location_show'] == '1' ? 1 : 0;
    } else {
        $automobiles->location_disp_flag = 0;  // Set to 0 if the checkbox is not checked
    }
        
          
          
          if(isset($request['version'])){$automobiles->version=$request['version'];}
          if(isset($request['year'])){$automobiles->year=$request['year'];}
          if(isset($request['body_type'])){$automobiles->body_type=$request['body_type'];}
          if(isset($request['fuel_type'])){$automobiles->fuel_type=$request['fuel_type'];}
          if(isset($request['transmission'])){$automobiles->transmission=$request['transmission'];}
          if(isset($request['engine_size'])){$automobiles->engine_size=$request['engine_size'];}
          
          if(isset($request['color'])){$automobiles->color=$request['color'];}
          if(isset($request['doors'])){$automobiles->doors=$request['doors'];}
          if(isset($request['owners'])){$automobiles->owners=$request['owners'];}
          if(isset($request['milage'])){$automobiles->milage=$request['milage'];}
          if(isset($request['tax_exp'])){$automobiles->tax_exp=$request['tax_exp'];}
          if(isset($request['nct_exp'])){$automobiles->nct_exp=$request['nct_exp'];}
          //description
          if(isset($request['description'])){$automobiles->description=$request['description'];}
          
          $automobiles->save();
          
        Session::put('a_id',$automobiles->id);
        return back();
    }
    public function get_auto($status="")
    {
        
        $query = Automobiles::query();
        $query->select('*','users.id as user_id','automobiles.id as id','automobiles.status as status');
        $query->join('users', 'automobiles.user_id', '=', 'users.id');
         if(!empty($_GET['vehicle']))
        {
           $vehicle=$_GET['vehicle'];
           
           $a=DB::table('type_automobiles')
           ->where('id',$vehicle)
           ->first();
           
            $query->where('aname',$a->auto_name);
        }
        if(!empty($_GET['county']))
        {
           $county=$_GET['county'];
           
           
           $query->Where('county', 'like', "%{$county}%");
        }
         if(!empty($_GET['brand']))
        {
           $brand=$_GET['brand'];
           
           $b=DB::table('brand')
           ->where('id',$brand)
           ->first();
        //   dd($b);
           
           $query->where('brand',$b->brand_name);
        }
        if(!empty($_GET['modal']))
        {
           $modal=$_GET['modal'];
           
           $c=DB::table('brand_model')
           ->where('id',$modal)
           ->first();
           
        //   dd($c);
           
           $query->where('version',$c->model_name);
        }
        if(!empty($_GET['color']))
        {
          $color=$_GET['color'];
          $query->where('color',$color);
        }
        if(!empty($_GET['fuel']))
        {
          $fuel=$_GET['fuel'];
          $query->where('fuel_type',$fuel);
        }
        if(!empty($_GET['transmission']))
        {
          $transmission=$_GET['transmission'];
          $query->where('transmission',$transmission);
        }
        if(!empty($_GET['doors']))
        {
          $doors=$_GET['doors'];
          $query->where('doors',$doors);
        }
        if(!empty($_GET['body_type']))
        {
          $body_type=$_GET['body_type'];
          $query->where('body_type',$body_type);
        }
        $query->where('users.status',1);
        // if(!empty($_GET['status']))
        // {
        //     $status=$_GET['status'];
        // }
        // if($status!="")
        //  {
        //     $query->where('automobiles.status',$status);
        //  }
         
         if(!empty($_GET['main_name']))
         {
            $query->where('type',$_GET['main_name']);
         }
         if(!empty($_GET['user_type'])&&($_GET['user_type']=="2"))
         {
            $query->whereIn('subcription_type',[3,4,5]);
         }
         if(!empty($_GET['user_type'])&&($_GET['user_type']=="1"))
         {
            $query->whereIn('subcription_type',[1,2]);
         }
         if(!empty($_GET['user_id']))
         {
             $user_id=$_GET['user_id'];
             $query->where('user_id',$user_id);
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
            if (!empty($_GET['min_mil'])) 
            {
                $min_mil=trim($_GET['min_mil']);
                $data['min_mil']=$min_mil;
                $query->where('milage', '>=', $min_mil);
            }
            if (!empty($_GET['max_mil'])) 
            {  
                $max_mil=trim($_GET['max_mil']);
                $data['max_mil']=$max_mil;
                $query->where('milage', '<=', $max_mil);
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
            // if (!empty($_GET['min_y'])) 
            // {  
            //     $miny=trim($_GET['min_y']);
            //     $data['miny']=$miny;
            //     $query->where('year', '==', $miny);
            // }
            if (!empty($_GET['max_y'])) 
            {  
                $maxy=trim($_GET['max_y']);
                $data['maxy']=$maxy;
                //  dd($maxy);
                $query->where('year', $maxy);
            }
            
            ////===engin
            if (!empty($_GET['min_e'])) 
            {  
                $mine=trim($_GET['min_e']);
                $query->where('engine_size', '>=', $mine);
            }
            if (!empty($_GET['max_e'])) 
            {  
                $maxe=trim($_GET['max_e']);
                $query->where('engine_size', '<=', $maxe);
            }
            
            // ===
            if (!empty($_GET['search_type']))
            {
                if($_GET['search_type']==1)
                {
                    $search_type=[1];
                }
                elseif($_GET['search_type']==2)
                {
                    $search_type=[2];
                }
                elseif($_GET['search_type']==2)
                {
                    $search_type=[2];
                }
                elseif($_GET['search_type']==3)
                {
                    $search_type=[3];
                }
                elseif($_GET['search_type']==4)
                {
                    $search_type=[4];
                }
                 elseif($_GET['search_type']==5)
                {
                    $search_type=[5];
                }
                else
                {
                  $search_type=[3,4,5]; 
                }
                 $query->whereIn('subcription_type',$search_type);
            }
         $query->orderby('automobiles.id','desc');
         $data=$query->Paginate(30);
         
         
         
         
        //  return $get;
        //  dd($_GET['vehicle']);
        //  dd($data);
         return $data;
         
        //  $get=DB::table('automobiles')
        //  ->leftJoin('users','automobiles.user_id','=','users.id')
        //  ->where('automobiles.aname',$_GET['vehicle'])
        //  ->get();
         
        //  dd($get);
    }
    public function Autotrigger()
    {
        $data=['payment_status'=>0];
        $expiredItems = Order::whereDate('expire_date', '<=', Carbon::today())->update($data);
        if($expiredItems)
        {
            $expiredItems = Ads::whereDate('expire_date', '<=', Carbon::today())->update($data);
            $expiredItems = Automobiles::whereDate('expire_date', '<=', Carbon::today())->update($data);
            $expiredItems = Property::whereDate('expire_date', '<=', Carbon::today())->update($data);
        }
       

        
    }
    public function Autotrigger_email()
    {

        for($i=0;$i<3;$i++)
        {
            if($i==0){
              $message = 'Your Ad will expire soon .please login and renew.';
              $items = Ads::whereDate('expire_date', '<=', Carbon::today()->addDays(6))
                  ->whereDate('expire_date', '>=', Carbon::today())
                  ->where('expire_status',0)
                  ->get();
            
            }
            if($i==1){
                 $message = 'Your Automobile Ad will expire soon .please login and renew.';
                 $items = Automobiles::whereDate('expire_date', '<=', Carbon::today()->addDays(6))
                  ->whereDate('expire_date', '>=', Carbon::today())
                  ->where('expire_status',0)
                  ->get();
            }
            if($i==2){
                 $message = 'Your Property Ad will expire soon .please login and renew.';
                 $items = Property::whereDate('expire_date', '<=', Carbon::today()->addDays(6))
                  ->whereDate('expire_date', '>=', Carbon::today())
                  ->where('expire_status',0)
                  ->get();
            }
            if(!empty($items))
            {
            // foreach($items as $item)
            // {
            //     $user=User::find($item->user_id);
            //     $to=$user->email;
            //            // $to = 'jusammilamk@gmail.com';
            //             $subject = 'Homeireland';
                       
                        
            //             $headers = 'From:Homeireland' . "\r\n" .
            //                     //   'Cc: jusammilamk@gmail.com' . "\r\n" .
            //                        'X-Mailer: PHP/' . phpversion();
                        
            //             $success = mail($to, $subject, $message, $headers);
            //             if ($success) 
            //             {
            //                  $data=['expire_status'=>1];
            //                  if($i==0){
            //                   $expiredItems = Ads::where('id', $item->id)->update($data);
            //                  }
            //                  if($i==1)
            //                  {
            //                   $expiredItems = Automobiles::where('id', $item->id)->update($data);
            //                  }
            //                  if($i==2)
            //                  {
            //                   $expiredItems = Property::where('id', $item->id)->update($data);
            //                  }
            //             } else {
            //                 // echo 'Failed to send email.';
            //                 // exit;
            //             }
                
            // }
            }
        }
    }
  public function  save_admin_pay($id,$tablename,$val)
    {
        $data=array('payment_status'=>$val,'admin_pay'=>1);
        $save=DB::table($tablename)->where('id',$id)->update($data);
        return $save;
    }
}

