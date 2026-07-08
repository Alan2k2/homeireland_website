<?php

namespace App\Http\Controllers;

use App\Models\ParkingSlot;
use Illuminate\Http\Request;
use Session;

class ParkingSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parkingslot = new ParkingSlot();
        $parkingslot->name=$request['name']; 
        $parkingslot->price=$request['price']; 
        $parkingslot->currency=$request['currency']; 
        $parkingslot->full_address=$request['full_address']; 
        $parkingslot->town=$request['town']; 
        $parkingslot->district=$request['district']; 
        $parkingslot->state=$request['state']; 
        $parkingslot->country=$request['country']; 
        $parkingslot->image=$request['image']; 
        $parkingslot->verified=$request['verified']; 
        $parkingslot->featured=$request['featured']; 
        $parkingslot->ownership=$request['ownership']; 
        $parkingslot->description=$request['description']; 
        $parkingslot->status=$request['status']; 
        $parkingslot->save();
        Session::put('confirm','done');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function show(ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ParkingSlot $parkingSlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ParkingSlot  $parkingSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ParkingSlot $parkingSlot)
    {
        //
    }
}
