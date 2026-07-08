<?php
// app/Models/Order.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ads;

class Order extends Model{
    use HasFactory;


    protected $guarded = [];
    
    public function ads(){
        return $this->belongsTo(Ads::class);
    }
}