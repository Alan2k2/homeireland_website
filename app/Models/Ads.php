<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;

class Ads extends Model
{
    use HasFactory;
    public function User()
    {
        return $this->belongsTo(User::class , 'user_id');
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
}
