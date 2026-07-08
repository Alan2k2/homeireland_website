<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Chat extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo(User::class , 'chat_to_user_id');
    }
    public function Sender(){
        return $this->hasOne(User::class , 'id','user_id');
    }
}
