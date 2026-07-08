<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

            public function User()
    {
        return $this->belongsTo(User::class , 'user_id');
    } 
                public function Property()
    {
        return $this->belongsTo(Property::class , 'user_id');
    } 
}
 