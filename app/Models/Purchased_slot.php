<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Purchased_slot extends Model
{
    use HasFactory;
    protected $table = 'purchased_slot';
    protected $primaryKey = 'id';
    
    // public function subscription()
    // {
    //     return $this->belongsTo(User::class , 'subscription_id');
    // }
    //         public function User()
    // {
    //     return $this->belongsTo(User::class , 'user_id');
    // }
}
