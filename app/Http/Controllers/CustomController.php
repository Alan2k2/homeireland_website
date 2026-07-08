<?php

namespace App\Http\Controllers; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class CustomController extends Controller
{
    public function bookings(){
        return response()->json(['message'=>'Bookings API'],200);
    }
}