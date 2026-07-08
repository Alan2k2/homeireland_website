<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Property;

class PropertyEnquiry extends Model
{
    use HasFactory;
    protected $guarded= [];

   public function property(){
       return $this->belongsTo(Property::class);
   }
    
}
