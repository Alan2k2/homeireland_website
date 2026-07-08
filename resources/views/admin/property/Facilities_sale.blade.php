@extends('layouts.admin.main')
@section('content')
<style>
    .next{
                                    background-color: red;
                                    color: #fff;
                                    widows: 300px;
                                    border: red;

                                }
                                .next:hover{
                                    background-color: black;
                                    color: #fff;

                                }
    h4
    {
        font-size:15px;
        font-weight:500;
        color:black;
    }
.search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px
   }
   .search-btn:hover
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:black;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px;
       cursor:pointer;
   }
	.spaceman{
		margin: 15px;
	}
	.spaceman .row .col-md-6,.spaceman .row .col-md-12{
		margin-top:10px;

	}
	.spaceman label{
		font-weight: 600;
	}
	.spaceman .block-heading{
		margin-top: 20px;
		margin-bottom: 10px;
		font-weight: 600;
		font-size: 22px;
		border-bottom: 1px solid black;
		padding-bottom:10px ;
	}
</style>
<style>
    section
    {
        border:1px solid grey;
        padding:20px;
    }aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
 
}

</style>
<div class="spacer">
</div>
<div class="row">
    <div class="col-md-12">

        <div class="main-card card">
            <div class="card-header">Edit Properties
            </div>
			<div class="spaceman">
<!--===============MAIN STARTS===============================================-->

<!--===============section 1=====================================================-->
<section id="basic">
<form method="get" action="{{url('admin/property_description')}}" id="uploadForm" enctype="multipart/form-data">                  
<input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">
<!--=========================MAIN STARTS======================================-->
<main style="border: 0px solid rgb(221, 221, 221);padding:10px">
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-danger">{{$property->main_name}} / Property Details</h3>
    </div>
</div>
                          <div class="row">
                              
                               @if(session::get('main_cat')==1)
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <h4 class="mt-4">Furnishing</h4>
                               <select class="form-control" id="property_select" name="countryId" data-gmap-addr-donator="5" onchange="myFunction()">
                                           <option value="">---select Furnishing type---</option>
                                           <option value="1">Furnished</option>
                                           <option value="2">Un Furnished</option>
                                           <option value="3">Either Available</option>
                                          
                                       </select>
                                     </div>
                                     @endif
                                 </div><br><br>
                            
                           <!---->
                         
                            @if(isset($amenities))           
                @else
                @endif
                <!---amenities start =========================-->
                <style>
/* Style the checkbox container */
.checkbox-container {
  display: inline-block;
  cursor: pointer;
  padding: 10px 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: black;
}

/* Hide the actual checkbox */
.checkbox-container input[type=checkbox] {
  display: none;
}

/* Style the checkbox button */
.checkbox-button {
  display: inline-block;
  background-color: red;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  width:160px;
}

/* Change button color when checkbox is checked */
.checkbox-container input[type=checkbox]:checked + .checkbox-button {
  background-color: black;
}
</style>
<!--row1-->
<?php

$a=$b=$c=$e=$f=$g=$d="";
 if($property->facilities)
{
    $facilities=($property->facilities);
    if(in_array("None",$facilities))
    {
        $a="checked";
    }
    if(in_array("Alarm",$facilities))
    {
        $b="checked";
    }
    if(in_array("Parking",$facilities))
    {
        $c="checked";
    }
   
    
    
    
    if(in_array("Wheel Chair Access",$facilities))
    {
        $d="checked";
    }
    if(in_array("Oil Fired Central Heating",$facilities))
    {
        $e="checked";
    }
    if(in_array("Wired for Cable Television",$facilities))
    {
        $f="checked";
    }
   
    if(in_array("Wired for Cable Television",$facilities))
    {
        $g="checked";
    }
}
    ?>
                <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox"name="fa[]" value="None" <?=$a?>>
  <span class="checkbox-button">None</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Alarm" <?=$b?>>
  <span class="checkbox-button">Alarm</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Parking" <?=$c?>>
  <span class="checkbox-button">Parking</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox"name="fa[]" value="Wheel Chair Access" <?=$d?>>
  <span class="checkbox-button">Wheel Chair Access</span>
</label>
                 </div>
                </div>
                <!--row2 amt-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Gas Fired Central Heating" <?=$e?>>
  <span class="checkbox-button">Gas Fired Central Heating</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Oil Fired Central Heating" <?=$f?>>
  <span class="checkbox-button">Oil Fired Central Heating</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Wired for Cable Television" <?=$g?>>
  <span class="checkbox-button">Wired for Cable Television</span>
</label>
                 </div>
                  
                </div>
                <!--row3-->
                <br>
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mt-4">
                         <h4>List the property’s top features</h4>
                         <br>
                         <h4 style="color:rgb(113, 113, 113)">List up to 5 best selling points of your property. For example: PVC double glazed windows, closed to all amenities, etc.</h4>
                     </div>
                     </div>
                <!--row4-->
            <br>
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  mt-4">
                         
            <input type="text" class="form-control" name="feature"placeholder="e.g. Refurbished home" value="{{$property->feature}}">
                     </div>
                     </div>
                <!--row5-->
              
                <!--row6-->
               
                <!--row7-->
               
                <!--row8-->
               
                <!--amenities end===================================-->
                
                     <br><br>
                  <!--next button-->
                           <section>
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                <a href="{{url('detail')}}?id=2" class="btn btn-large btn-block yellow-btn next font-roboto 
                                light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                                    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                            </div>
        <!---->
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                     <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto 
                            light brbottom-30 icon-link icon-link-hover" style="margin-left">
                            <b>NEXT
                    &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                                 </div>
                                 
                            </div>
                           </section>
                           <!--next button end-->
                </div>
                

                                    
                      </main>
                      @endsection