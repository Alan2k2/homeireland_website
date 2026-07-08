<?php

namespace App\Http\Controllers;
 
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
use App\Models\Cronejobs;
use App\Models\PropertySubscription;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Auth;
use Intervention\Image\Facades\Image as InterventionImage;
use Illuminate\Support\Facades\DB;
use Session;
use Intervention\Image\Facades\Image;

class Cronejob extends Controller
{
 public function Cronejob()
 {
        //  echo"ji";exit;
          $data=array('cronejobdate'=>'hi','status'=>0);
          DB::table('cronejobs')->insert($data);
          Cronejobs::query()->update(['status' => 1]);
 }
}