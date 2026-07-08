<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Property extends Model
{
    use HasFactory;
    protected $table = 'properties';
    protected $primaryKey = 'id';
    protected $casts = [
            'facilities'=>'object',
            'bed_type'=>'object',
            'rent'=>'object',
             'en'=>'object',
            ];
                  public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
            public function User()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function property_images(){
        return $this->hasMany(PropertyImage::class);
    }
    public function property_enquiries(){
        return $this->hasMany(PropertyEnquiry::class);
    }
}
