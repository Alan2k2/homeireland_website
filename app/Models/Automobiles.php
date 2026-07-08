<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automobiles extends Model
{
    use HasFactory;
    protected $fillable = [       
        'location_disp_flag'    
    ];
                public function User()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
     public function Automobile_images(){
        return $this->hasMany(AutomobileImage::class);
    }
}
