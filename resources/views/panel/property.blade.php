
<?php
// echo"<pre>";print_r($data);exit;
?>
@extends('layouts.panel.main')
@section('content')    
<style>
   .main-heading{
/* font-weight: 800; */
/* font-size: 15px; */
/* color:red; */
   }
                                /* j1 */
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
                                 /* j1 */
                                 .save{
                                    background-color: green;
                                    color: #fff;
                                    widows: 300px;

                                }
                                .save:hover{
                                    background-color: black;
                                    color: #fff;

                                }
                               

    .switch-container {
      display: inline-block;
      position: relative;
    }

    /* Styling for the switch input */
    .switch-input {
      display: none; /* Hide the actual checkbox input */
    }

    /* Styling for the switch track */
    .switch-track {
      width: 50px;
      height: 25px;
      background-color: #ccc;
      border-radius: 25px;
      position: relative;
      cursor: pointer;
      display: inline-block;
    }

    /* Styling for the switch thumb (the moving part) */
    .switch-thumb {
      width: 25px;
      height: 25px;
      background-color: #fff;
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 0;
      transition: transform 0.3s ease-in-out;
    }

    /* Styling for the switch when it's checked */
    .switch-input:checked + .switch-track .switch-thumb {
      transform: translateX(100%);
    }
      .switch-input:checked + .switch-track {
      background-color: #3498db; /* Change the background color to blue */
    }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

       <!--<section class="green-strip-wrapper">-->
       <!--     <div class="container">-->
       <!--         <div class="row">-->
       <!--             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 page-title">-->
       <!--                 <h1 class="font-nunito regular">Add Property</h1>-->
       <!--             </div>-->
       <!--             <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 page-breadcumb hidden-sm hidden-xs">-->
       <!--                 <ul class="font-roboto regular">-->
       <!--                      <li class="breadcrumb-item"><a href="{{url('/')}}" title="Home">Home</a></li>            -->
       <!--                      <li class="breadcrumb-item">-->
       <!--                         <a href="{{url('panel/dashboard')}}" title="Home">Dashboard</a>-->
       <!--                     </li>-->
       <!--                     <li class="breadcrumb-item active">Manage Property</li>-->
       <!--                 </ul>-->
       <!--             </div> -->
       <!--         </div>-->
       <!--     </div>-->
       <!-- </section>-->

        <section class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                    <div class="clearfix lhs-post-links border-radius-3">
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--<div class="clearfix brtop-20">-->
                            <!--    <h3 class="font-nunito semi-bold text-uppercase">Completion Status</h3>-->
                            <!--</div>-->
                            <!--<div class="progress">-->
                            <!--    <div class="progress-bar property-step-progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>-->
                            <!--</div>-->
                                                            <p class="font-roboto light clearfix brtop-10"><span class="progress-info-ico"></span><span class="progress-info">Please Complete your profile for more response</span>
                                                            </p>
                                                    </div>
                        <div class="expand text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="font-roboto regular "> Navigation</a>
                        </div>
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row ">
                                <!-- Assume $i=1 -->
                                @php
                                $id=1;
                                @endphp

                                <ul class="font-roboto light tab">
                                        <li class=" tablinks active" onclick="openCity(event,'event1',0)" id="eu0" >
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Basic
                                                <span class="completed-tick"></span>
                                            </a>
                                        </li>
                                          <li class=" tablinks " onclick="openCity(event,'event8',7)" id="eu8" >
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Property Detail
                                                <span class="completed-tick"></span>
                                            </a>
                                        </li>
                                                                    <li class="tablinks"   
                                                                    onclick="openCity(event,'event2',1)" id="eu1">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Location                                                                                            </a>
                                        </li>
                                            <li class="tablinks"  onclick="openCity(event, 'event3',2)" id="eu2">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Profile                                                                                            </a>
                                        </li>
                                        <li class="tablinks" id="eu3" onclick="openCity(event, 'event4',3)">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Details                                                                                            </a>
                                        </li>
                                        <li class="tablinks"  onclick="openCity(event,'event5',4)" id="eu4">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Amenities                                                                                 
                                            </a>
                                        </li>
                                            <li class="tablinks" id="eu5" onclick="openCity(event, 'event6',5)">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Distance From                                                <span class="completed-tick"></span>                                            </a>
                                        </li>
                                            <li class="tablinks" id="eu6" onclick="openCity(event, 'event7',6)">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Gallery                                               <span class="completed-tick"></span>                                            </a>
                                        </li>                                   
                                                                    </ul>
                            </div>

                   
                        </div>
                    </div>
                                                        </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                        
                                    @if ($message = Session::get('success'))  
                                    <div class="alert alert-success alert-block">  
                                        <button type="button" class="close" data-dismiss="alert"></button>   
                                            <strong>{{ $message }}</strong>  
                                    </div>  
                                    @endif  
  
@if ($message = Session::get('error'))  
<div class="alert alert-danger alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
        <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('warning'))  
<div class="alert alert-warning alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('info'))  
<div class="alert alert-info alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($errors->any())  
<div class="alert alert-danger">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    Please check the form below for errors  
</div>  
@endif  

{{Session::forget('success')}}
{{Session::forget('error')}}
{{Session::forget('warning')}}
{{Session::forget('info')}}
                        <form method="POST" action="{{url('/panel/store-property')}}" id="uploadForm" enctype="multipart/form-data">
                         @csrf   
                        <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">

                    
                        <div class="row font-roboto regular tabcontent" id="event1">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Basic Info</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                

                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30 mt-4">
                                {{-- property type start=================================== --}}
                                <div class="row" style="border: 1px solid #f1f1f0;padding:5px">
                                   <center> <label class="main-heading"><h4>Property Type</h></label><br></center>
                                   <?php  $check_one=$check_two=$check_three=$check_four=$check_five=$check_six=$check_seven=""?>
                                   @if(isset($data))
                                      @if($data->property_type=="Residencial Rent")
                                        <?php  $check_one="checked"?>
                                        @elseif($data->property_type=="Sharing (Rent a room)")
                                        <?php  $check_two="checked"?>
                                        @elseif($data->property_type=="Commercial Rent")
                                        <?php  $check_three="checked"?>
                                        @elseif($data->property_type=="Parking Rent")
                                        <?php  $check_four="checked"?>

                                        @elseif($data->property_type=="Residencial Sale")
                                        <?php  $check_five="checked"?>
                                        @elseif($data->property_type=="Commercial Sale")
                                        <?php  $check_six="checked"?>
                                        @elseif($data->property_type=="Parking Sale")
                                        <?php  $check_seven="checked"?>
                                      @endif
                                   @endif
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                       <label><b>Sale</b></label><br>
                                          
                                       <input type="radio" name="propertyType" value="Residencial Rent" 
                                       <?=$check_one?>> &nbsp;&nbsp;&nbsp;House<br>
                                       <input type="radio" name="propertyType" value="Sharing (Rent a room)" <?=$check_two?>>&nbsp;&nbsp;&nbsp;
                                       Apartment<br>
                                       <input type="radio" name="propertyType" value="Commercial Rent" <?=$check_three?>>&nbsp;&nbsp;&nbsp;
                                       New Houses<br>
                                       <input type="radio" name="propertyType" value="Parking Rent" <?=$check_four?>>&nbsp;&nbsp;&nbsp;
                                       Site<br>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                        <label><b>Rent</b></label><br>
                                        <input type="radio" name="propertyType" value="Residencial Sale"<?=$check_five?>> &nbsp;&nbsp;&nbsp;House<br>
                                       <input type="radio" name="propertyType" value="Commercial Sale" <?=$check_six?>>&nbsp;&nbsp;&nbsp;Apartment<br>
                                       <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Students<br>
                                       <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Holiday Homes<br>
                                       <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Site<br>
                                     </div>
                                    
                                </div>
                                <!--row2-->
                                <div class="row" style="border: 1px solid #f1f1f0;padding:5px">
                                  
                                   <?php  $check_one=$check_two=$check_three=$check_four=$check_five=$check_six=$check_seven=""?>
                                   @if(isset($data))
                                      @if($data->property_type=="Residencial Rent")
                                        <?php  $check_one="checked"?>
                                        @elseif($data->property_type=="Sharing (Rent a room)")
                                        <?php  $check_two="checked"?>
                                        @elseif($data->property_type=="Commercial Rent")
                                        <?php  $check_three="checked"?>
                                        @elseif($data->property_type=="Parking Rent")
                                        <?php  $check_four="checked"?>

                                        @elseif($data->property_type=="Residencial Sale")
                                        <?php  $check_five="checked"?>
                                        @elseif($data->property_type=="Commercial Sale")
                                        <?php  $check_six="checked"?>
                                        @elseif($data->property_type=="Parking Sale")
                                        <?php  $check_seven="checked"?>
                                      @endif
                                   @endif
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                       <label><b>Share</b></label><br>

                                       <input type="radio" name="propertyType" value="Residencial Rent" 
                                       <?=$check_one?>> &nbsp;&nbsp;&nbsp;Share Room<br>
                                       <input type="radio" name="propertyType" value="Sharing (Rent a room)" <?=$check_two?>>&nbsp;&nbsp;&nbsp;
                                       Students<br>
                                       <input type="radio" name="propertyType" value="Commercial Rent" <?=$check_three?>>&nbsp;&nbsp;&nbsp;
                                       Commercial<br>
                                      
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                        <label><b>Needed</b></label><br>
                                        <input type="radio" name="propertyType" value="Residencial Sale"<?=$check_five?>> &nbsp;&nbsp;&nbsp;House<br>
                                       <input type="radio" name="propertyType" value="Commercial Sale" <?=$check_six?>>&nbsp;&nbsp;&nbsp;Apartment<br>
                                       <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Students<br>
                                        <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Holiday Homes<br>
                                         <input type="radio" name="propertyType" value="Parking Sale" <?=$check_seven?>>&nbsp;&nbsp;&nbsp;Short termse<br>
                                     </div>
                                    
                                </div>
                                <!---row 3-->
                                 <div class="row" style="border: 1px solid #f1f1f0;padding:5px">
                                  
                                   <?php  $check_one=$check_two=$check_three=$check_four=$check_five=$check_six=$check_seven=""?>
                                   @if(isset($data))
                                      @if($data->property_type=="Residencial Rent")
                                        <?php  $check_one="checked"?>
                                        @elseif($data->property_type=="Sharing (Rent a room)")
                                        <?php  $check_two="checked"?>
                                        @elseif($data->property_type=="Commercial Rent")
                                        <?php  $check_three="checked"?>
                                        @elseif($data->property_type=="Parking Rent")
                                        <?php  $check_four="checked"?>

                                        @elseif($data->property_type=="Residencial Sale")
                                        <?php  $check_five="checked"?>
                                        @elseif($data->property_type=="Commercial Sale")
                                        <?php  $check_six="checked"?>
                                        @elseif($data->property_type=="Parking Sale")
                                        <?php  $check_seven="checked"?>
                                      @endif
                                   @endif
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                       <label><b>Commercial</b></label><br>

                                       <input type="radio" name="propertyType" value="Residencial Rent" 
                                       <?=$check_one?>> &nbsp;&nbsp;&nbsp;Sale<br>
                                       <input type="radio" name="propertyType" value="Sharing (Rent a room)" <?=$check_two?>>&nbsp;&nbsp;&nbsp;
                                       Rent<br>
                                       <input type="radio" name="propertyType" value="Commercial Rent" <?=$check_three?>>&nbsp;&nbsp;&nbsp;
                                       Farm Land<br>
                                       <input type="radio" name="propertyType" value="Commercial Rent" <?=$check_three?>>&nbsp;&nbsp;&nbsp;
                                       Commercial Land<br>
                                      
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="border: 1px solid #f1f1f0;padding:5px">
                                       <label><b>Parking</b></label><br>

                                       <input type="radio" name="propertyType" value="Residencial Rent" 
                                       <?=$check_one?>> &nbsp;&nbsp;&nbsp;Sale<br>
                                       <input type="radio" name="propertyType" value="Sharing (Rent a room)" <?=$check_two?>>&nbsp;&nbsp;&nbsp;
                                       Rent<br>
                                       <input type="radio" name="propertyType" value="Commercial Rent" <?=$check_three?>>&nbsp;&nbsp;&nbsp;
                                       Share<br>
                                      
                                    </div>
                                   
                                    
                                </div>
                                
                                
                                <div class="row">
                                   
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap" 
                                    data-el-name="section-transaction-types">
                                      </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">                                                      
                                          
                                    </div>
                                </div>
                            </div>
                                                                    {{-- property type end --}}
                                
                                
                    
                <!--ownership start===-->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                                            <label class="text-uppercase brbottom-20">Ownership </label><br>
                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Owner" id="ownershipTypeS" name="ownership_type"
                                                                                                        >
                                                    <label for="ownershipTypeS">Owner</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Agent" id="ownershipTypeJ" name="ownership_type"
                                                                                                       >
                                                    <label for="ownershipTypeJ">Agent</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Other" id="ownershipTypeO" name="ownership_type"
                                                                                                       >
                                                    <label for="ownershipTypeO">Other</label>
                                                </div>
                   </div>
                   <!--ownership end===-->
                
                                
                                                              
                               
                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                                        List Image<br>
                                        <input type="file" name="list_image" id="fileInput"  accept="image/*"><br>
                                                        
                                    <!--</div>-->
                                    <!--    <div class="col-md-6">-->
                                                             
                                    @if(isset($data->image))
                                   
                                    <img src="{{asset('uploads/fetchpropertiimage'.$data->image)}}" id="imagePreview" alt="Image"   height="200px" width="200px"style="max-width: 300px";/>
                                    @else
                                    <img src="{{asset('website/images/no-image.jpg')}}" id="imagePreview" 
                                    alt="Image"   height="270px"/>    
                                    @endif                             
                                   <!--                         @if(isset($property->image))-->
                                   <!--<img id="imagePreview" src="{{asset('uploads/properties'.$property->image)}}" alt="Image Preview" style="max-width: 300px; display: none;">-->
                                   <!--                         @else-->
                                   <!--<img id="imagePreview" src="#" alt="Image Preview" style="max-width: 300px; display: none;">-->
                                   <!--                        @endif-->
                                         
                                        </div> 

                              
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                     @if(Auth::user()->premium == 1)
                                     
                                    <label class="text-uppercase brbottom-20">Banner Image</label><br>
    
                                    <div class="row">
                                        <div class="col-md-6">
                                         <input type="file" name="banner_image" id="fileInputbanner" accept="image/*">
                                        
                                        </div>
                                         <div class="col-md-6">
                    
                                            @if(isset($data->banner_image))
                   <img id="imagePreviewbanner" src="{{asset('uploads/properties'.$data->banner_image)}}" alt="Image Preview" style="max-width: 300px; display: none;">
                                            @else
                   <img id="imagePreviewbanner" src="#" alt="Image Preview" style="max-width: 300px; display: none;">
                                           

                               @endif
                                         
                                        </div>                                       
                                        
                                    </div>
                                    @endif
                                </div>   
                       
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 
                                </div>
                                                         <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                          
                                                                   
                            </div>
                           
                                                       {{-- prev next row --}}
                                                       <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                                           
                                                        </div>
                                                         <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                                           
                                                        </div>
                                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                                            <button type="submit"  onclick="openCity(event,'event8',1)" 
                                                            class="btn btn-large btn-block yellow-btn save font-roboto 
                            light brbottom-30 icon-link icon-link-hover" style="margin-left">
                            <b>
                                &nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true"></i> &nbsp;&nbsp; Next 
                            </b></button>
                                                        </div>
                    <!--        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >-->
                    <!--            <a  class="btn btn-large btn-block yellow-btn next font-roboto -->
                    <!--light brbottom-30 icon-link icon-link-hover" style="margin-left: right">-->
                    <!--<b>NEXT-->
                    <!--&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    -->
                    <!--</b></a>-->
                    <!--        </div>-->
                                                       </div>
                                                        {{-- prev next row end--}}
                            
                        </div>
                        <!--event8 price starts-->
                        <div class="row font-roboto regular tabcontent" id="event8">
                            <label><h4>Property Details</h4></label>
                            <style>
  .table_price {
    border-collapse: collapse;
    width: 100%;
  }
  td {
    padding: 10px; /* Adjust this value as needed */
    border: 1px solid #ddd; /* Optional: Add borders for better visualization */
  }
</style>
                            <div class="row" >
                                <table border="1" style="font-size:px;" class="table_price">
                                  
                                    <!--row 1-->
                                   
                                   <tr>
                                        <td align="center">
                                            <label>Rent Collection</label>
                                           
                                        </td>
                                         <td align="left">
                                           <label>Monthly</label>&nbsp;
                                            <input type="radio" name="bedroom">&nbsp;&nbsp;
                                             <label>Weekly</label>&nbsp;&nbsp;
                                            <input type="radio" name="bedroom">
                                        </td>
                                    </tr> 
                                    <!--row 4-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Property Price in €</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="number" name="bedroom">
                                        </td>
                                    </tr>
                                   
                                   <!--row 2-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Number Of bedroom Available</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="number" name="bedroom">
                                        </td>
                                    </tr>
                                    <!--row 3-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Number Of Bathroom Available</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="number" name="bedroom">
                                        </td>
                                    </tr>
                                    
                                     <!--row 5-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Hours Of Parking</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="number" name="bedroom">
                                        </td>
                                    </tr>
                                    <!---->
                                     <!--row 5-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Number Tanants Allowed</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="number" name="bedroom">
                                        </td>
                                    </tr>
                                    <!---->
                                    <!--row 6-->
                                    <tr>
                                        <td align="center">
                                            <label>Enter Type Of Roofing</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="text" name="bedroom" placeholder="eg:Terrace">
                                        </td>
                                    </tr>
                                    <!---->
                                    <!--row 7-->
                                    <tr>
                                        <td align="center">
                                            <label>Available From</label>
                                           
                                        </td>
                                         <td align="left">
                                           
                                            <input type="text" name="bedroom" placeholder="eg:Terrace">
                                        </td>
                                    </tr>
                                    <!---->
                                    
                                    
                                </table>
                            </div>
                             {{-- prev next row --}}
     <div class="row mt-5">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <a onclick="openCity(event, 'event1',0)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left">
<b>
&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; SAVE 
</b></button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <a onclick="openCity(event,'event3',2)" class="btn btn-large btn-block yellow-btn next font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
<b>NEXT
&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
</b></a>
        </div>
       </div>
        {{-- prev next row end--}}
                        </div>
                        <!--event8 price ned-->
                        <div class="row font-roboto regular tabcontent nexttab active" id="event2" >
                                                                         <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Location</h3>
                                                                   
                            </div>
                            
<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Country</label>
      <select class="form-control" id="countryId" name="countryId" data-gmap-addr-donator="5">
        <option value="1" selected="selected">Ireland</option>
      </select>
    </div>
    <!--<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">-->
    <!--  <label class="text-uppercase el-required" for="countryId">Province</label>-->
    <!--  <select class="form-control filter-search" id="countryId" name="province" data-gmap-addr-donator="5">-->
    <!--    @if(isset($data))-->
    <!--    <option value="Connacht" {{$data->province=='Connacht'?'selected':''}}>Connacht</option>-->
    <!--    <option value="Ulster" {{$data->province=='Ulster'?'selected':''}}>Ulster</option>-->
    <!--    <option value="Munster" {{$data->province=='Munster'?'selected':''}}>Munster</option>-->
    <!--    <option value="Leinster" {{$data->province=='Leinster'?'selected':''}}>Leinster</option> -->
    <!--    @else-->
    <!--    <option value="Connacht">Connacht</option>-->
    <!--    <option value="Ulster">Ulster</option>-->
    <!--    <option value="Munster">Munster</option>-->
    <!--    <option value="Leinster">Leinster</option>       -->
    <!--    @endif-->

    <!--  </select>-->
    <!--</div>-->
    
    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="counties">County</label>
@if(isset($data))
                           
                 <select class="form-control searchbar filter-search-county county-ulster  " name="county" data-gmap-addr-donator="5" id="counties">
                    <option>Select A County</option>
                    <option value="Antrim" {{$data->county=='Antrim'?'selected':''}}>Antrim</option>
                    <option value="Armagh" {{$data->county=='Armagh'?'selected':''}}>Armagh</option>
                    <option value="Cavan" {{$data->county=='Cavan'?'selected':''}}>Cavan</option>
                    <option value="Donegal" {{$data->county=='Donegal'?'selected':''}}>Donegal</option>
                    <option value="Down" {{$data->county=='Down'?'selected':''}}>Down</option>
                    <option value="Fermanagh" {{$data->county=='Fermanagh'?'selected':''}}>Fermanagh</option>
                    <option value="Londonderry" {{$data->county=='Londonderry'?'selected':''}}>Londonderry</option>
                    <option value="Monaghan" {{$data->county=='Monaghan'?'selected':''}}>Monaghan</option>
                    <option value="Tyrone" {{$data->county=='Tyrone'?'selected':''}}>Tyrone</option>
                    <option value="Clare" {{$data->county=='Clare'?'selected':''}}>Clare</option>
                    <option value="Cork" {{$data->county=='Cork'?'selected':''}}>Cork</option>
                    <option value="Kerry" {{$data->county=='Kerry'?'selected':''}}>Kerry</option>
                    <option value="Limerick" {{$data->county=='Limerick'?'selected':''}}>Limerick</option>
                    <option value="Tipperary" {{$data->county=='Tipperary'?'selected':''}}>Tipperary</option>
                    <option value="Waterford" {{$data->county=='Waterford'?'selected':''}}>Waterford</option>
                    <option value="Carlow" {{$data->county=='Carlow'?'selected':''}}>Carlow</option>
                    <option value="Dublin" {{$data->county=='Dublin'?'selected':''}}>Dublin</option>
                    <option value="Kildare" {{$data->county=='Kildare'?'selected':''}}>Kildare</option>
                    <option value="Kilkenny" {{$data->county=='Kilkenny'?'selected':''}}>Kilkenny</option>
                    <option value="Laois" {{$data->county=='Laois'?'selected':''}}>Laois</option>
                    <option value="Longford" {{$data->county=='Longford'?'selected':''}}>Longford</option>
                    <option value="Louth" {{$data->county=='Louth'?'selected':''}}>Louth</option>
                    <option value="Meath" {{$data->county=='Meath'?'selected':''}}>Meath</option>
                    <option value="Offaly" {{$data->county=='Offaly'?'selected':''}}>Offaly</option>
                    <option value="Westmeath" {{$data->county=='Westmeath'?'selected':''}}>Westmeath</option>
                    <option value="Wexford" {{$data->county=='Wexford'?'selected':''}}>Wexford</option>
                    <option value="Wicklow" {{$data->county=='Wicklow'?'selected':''}}>Wicklow</option>
                    <option value="Galway" {{$data->county=='Galway'?'selected':''}}>Galway</option>
                    <option value="Leitrim" {{$data->county=='Limerick'?'selected':''}}>Leitrim</option>
                    <option value="Mayo" {{$data->county=='Mayo'?'selected':''}}>Mayo</option>
                    <option value="Roscommon" {{$data->county=='Roscommon'?'selected':''}}>Roscommon</option>
                    <option value="Sligo" {{$data->county=='Sligo'?'selected':''}}>Sligo</option>

                  </select>
                  @else
                                   
                 <select class="form-control searchbar filter-search-county county-ulster " name="county" data-gmap-addr-donator="5" id="counties">
                    <option>Select A County</option>
                    <option value="Antrim">Antrim</option>
                    <option value="Armagh">Armagh</option>
                    <option value="Cavan">Cavan</option>
                    <option value="Donegal">Donegal</option>
                    <option value="Down">Down</option>
                    <option value="Fermanagh">Fermanagh</option>
                    <option value="Londonderry">Londonderry</option>
                    <option value="Monaghan">Monaghan</option>
                    <option value="Tyrone">Tyrone</option>
                    <option>Select A County</option>
                    <option value="Clare">Clare</option>
                    <option value="Cork">Cork</option>
                    <option value="Kerry">Kerry</option>
                    <option value="Limerick">Limerick</option>
                    <option value="Tipperary">Tipperary</option>
                    <option value="Waterford">Waterford</option>
                    <option>Select A County</option>
                    <option value="Carlow">Carlow</option>
                    <option value="Dublin">Dublin</option>
                    <option value="Kildare">Kildare</option>
                    <option value="Kilkenny">Kilkenny</option>
                    <option value="Laois">Laois</option>
                    <option value="Longford">Longford</option>
                    <option value="Louth">Louth</option>
                    <option value="Meath">Meath</option>
                    <option value="Offaly">Offaly</option>
                    <option value="Westmeath">Westmeath</option>
                    <option value="Wexford">Wexford</option>
                    <option value="Wicklow">Wicklow</option>
                    <option>Select A County</option>
                    <option value="Galway">Galway</option>
                    <option value="Leitrim">Leitrim</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Roscommon">Roscommon</option>
                    <option value="Sligo">Sligo</option>

                  </select>                    
                  @endif
    </div>    
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase" for="countryId">City</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->city:''}}" data-gmap-addr-donator="0" id="street" name="city" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase" for="countryId">Town</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->area:''}}" data-gmap-addr-donator="0" id="street" name="area" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase" for="countryId">Street</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->street:''}}" data-gmap-addr-donator="0" id="street" name="street" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>  
            <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase" for="countryId">EIR Code</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->eir_code:''}}" data-gmap-addr-donator="0" id="eir_code" name="eir_code" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div> 
    <!--location show checkbox-->
 <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
         <input type="checkbox" name="location_show">&nbsp;
        <span style="font-size:12px">i don't want to display the Exact Address</span> 
        </div>
        
        </div><br>
 <!--location show checkbox end-->
    
    {{-- j2 --}}
     {{-- prev next row --}}
     <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <a onclick="openCity(event, 'event1',0)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left">
<b>
&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; SAVE 
</b></button>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
            <a onclick="openCity(event,'event3',2)" class="btn btn-large btn-block yellow-btn next font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
<b>NEXT
&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
</b></a>
        </div>
       </div>
        {{-- prev next row end--}} 
</div>

                              
                         <div class="row font-roboto regular tabcontent nexttab" id="event3" >
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Profile</h3>                                        
                            </div>
                            {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                               
 <a onclick="openCity(event, 'event2')" class="btn btn-large btn-block yellow-btn font-roboto light brbottom-30 icon-link icon-link-hover">Prev </a>
                            <a class="btn btn-large yellow-btn font-roboto light brbottom-30" 
                            onclick="openCity(event,'event4',1)">Next3</a>
                            </div>              --}}
                        <div class="row font-roboto regular">
                                <!--<div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 brbottom-30">-->
                                <!--    <label class="text-uppercase" for="propertyAddress">-->
                                <!--        Property Address</label>-->
                                <!--    <textarea class="form-control noResize" rows="8" id="propertyAddress" name="address">{{isset($data)?$data->address:''}}</textarea>-->
                                <!--                                    </div>-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">

                                    <label class="text-uppercase el-required" for="emailAddress">Email Address</label>
                                    <input class="form-control" type="text" value="{{isset($data)?$data->email:''}}" 
                                    id="emailAddress" name="email" >
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                                    <label class="text-uppercase el-required" for="confirmEmailAddress">Phone</label>
                                    <input class="form-control" type="text" value="{{isset($data)?$data->phone:''}}" 
                                    id="phone" name="phone"   id="phone">
                                </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                                    <label class="text-uppercase " for="confirmEmailAddress">Alternate Phone</label>
                                    <input class="form-control" id="phone2"type="text" value="{{isset($data)?$data->alternate_phone:''}}" 
                                    id="alternatePhone" name="alternate_phone">
                                </div>
                                <!-- <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">-->
                                <!--    <label class="text-uppercase " for="confirmEmailAddress">Whatsapp Number</label>-->
                                <!--    <input class="form-control" type="text" value="{{isset($data)?$data->whatsapp_no:''}}" id="whatsappNo" name="whatsapp_no">-->
                                <!--</div>                               -->
           <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap flex flex-col">
    <label class="text-uppercase" for="whatsappNo">Whatsapp Number</label>
    <input class="form-control" type="tel" id="whatsappNo" name="whatsapp_no">
</div>


                    
                             
                            
                        </div>  
                        <!---->
                        <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 mt-3 mb-3" >
         <input type="checkbox" name="location_show">&nbsp;
        <span style="font-size:12px">i don't want to display the Exact Phone Number</span> 
        </div>
                             <!---->
                          {{-- prev next row --}}
                          <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                <a onclick="openCity(event, 'event2',1)" class="btn btn-large btn-block yellow-btn next font-roboto 
                                light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                                    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left">
<b>
    &nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; SAVE 
</b></button>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                                <a onclick="openCity(event,'event4',3)" class="btn btn-large btn-block yellow-btn next font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
<b>NEXT
    &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
</b></a>
                            </div>
                           </div>
                            {{-- prev next row end--}}
                                  </div>
                                  </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event4" >
                                                                                 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Details</h3>
                                                                   
                            </div>
                            {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <a onclick="openCity(event, 'event3')" class="btn btn-large btn-block yellow-btn font-roboto light brbottom-30 icon-link icon-link-hover">Prev </a>
                                <a class="btn btn-large yellow-btn font-roboto light brbottom-30" onclick="openCity(event, 'event5')">Next4 </a>

                            </div> --}}
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase" for="builtArea">Ber No</label>
                    <input class="form-control" type="text" value="{{isset($data)?$data->ber_no:''}}" id="builtArea" name="ber_no">                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase" for="builtArea">Energy Performance Indicator</label>
                    <input class="form-control" type="text" value="{{isset($data)?$data->energy_performance_indicator:''}}" id="builtArea" name="energy_performance_indicator">                                
                                    </div>                                    
                <!--<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">-->
                <!--    <label class="text-uppercase" for="builtArea">Built Area</label>-->
                <!--    <input class="form-control" type="text" value="{{isset($data)?$data->built_area:''}}" id="builtArea" name="built_area">                                -->
                <!--                    </div>-->
                <!--<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">-->
                <!--    <label class="text-uppercase" for="builtAreaUnit">Built Area Unit</label>-->
                <!--    <select class="form-control" id="builtAreaUnit" name="built_area_unit">-->
                <!--        <option value="">-- Select --</option>-->
                <!--        @if(isset($data))-->
                <!--        <option value="SQT" {{$data->built_area_unit=='SQT'?'selected':''}}>Sq-ft</option>-->
                <!--        <option value="SQM" {{$data->built_area_unit=='SQM'?'selected':''}}>Sq-m</option>-->
                <!--        <option value="SQD" {{$data->built_area_unit=='SQD'?'selected':''}}>Sq-Yrd</option>-->

                <!--        @else-->
                <!--        <option value="SQT">Sq-ft</option>-->
                <!--        <option value="SQM">Sq-m</option>-->
                <!--        <option value="SQD">Sq-Yrd</option>                        -->
                <!--        @endif-->
                <!--    </select>                                -->
                <!--                    </div>-->
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase" for="plotArea">Plot Area</label>
                    <input class="form-control" type="text" value="{{isset($data)?$data->plot_area:''}}" id="plotArea" name="plot_area">                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase" for="plotAreaUnit">Plot Area Unit</label>
                    <select class="form-control" id="plotAreaUnit" name="plot_area_unit">
                        <option value="">-- Select --</option>
                        @if(isset($data))
                        <option value="SQT" {{$data->plot_area_unit=='SQT'?'selected':''}}>Sq-ft</option>
                        <option value="SQM" {{$data->plot_area_unit=='SQM'?'selected':''}}>Sq-m</option>
                        <option value="SQD" {{$data->plot_area_unit=='SQD'?'selected':''}}>Sq-Yrd</option>
                        <option value="ACR" {{$data->plot_area_unit=='ACR'?'selected':''}}>Acre</option>
                        <option value="BHA" {{$data->plot_area_unit=='BHA'?'selected':''}}>Bigha</option>
                        <option value="HCR" {{$data->plot_area_unit=='HCR'?'selected':''}}>Hectare</option>
                        <option value="MRL" {{$data->plot_area_unit=='MRL'?'selected':''}}>Marla</option>
                        <option value="KNL" {{$data->plot_area_unit=='KNL'?'selected':''}}>Kanal</option>
                        <option value="BW1" {{$data->plot_area_unit=='BW1'?'selected':''}}>Biswa1</option>
                        <option value="BW2" {{$data->plot_area_unit=='BW2'?'selected':''}}>Biswa2</option>
                        <option value="GRD" {{$data->plot_area_unit=='GRD'?'selected':''}}>Ground</option>
                        <option value="AKM" {{$data->plot_area_unit=='AKM'?'selected':''}}>Aankadam</option>
                        <option value="ROD" {{$data->plot_area_unit=='ROD'?'selected':''}}>Rood</option>
                        <option value="CTK" {{$data->plot_area_unit=='CTK'?'selected':''}}>Chatak</option>
                        <option value="KOH" {{$data->plot_area_unit=='KOH'?'selected':''}}>Kottah</option>
                        <option value="CNT" {{$data->plot_area_unit=='CNT'?'selected':''}}>Cent</option>
                        <option value="PRH" {{$data->plot_area_unit=='PRH'?'selected':''}}>Perch</option>
                        <option value="GNA" {{$data->plot_area_unit=='GNA'?'selected':''}}>Guntha</option>
                        <option value="ARE" {{$data->plot_area_unit=='ARE'?'selected':''}}>Are</option>
                                                
                        @else
                         <option value="SQT" >Sq-ft</option>
                        <option value="SQM" >Sq-m</option>
                        <option value="SQD" >Sq-Yrd</option>
                        <option value="ACR" >Acre</option>
                        <option value="BHA" >Bigha</option>
                        <option value="HCR" >Hectare</option>
                        <option value="MRL" >Marla</option>
                        <option value="KNL" >Kanal</option>
                        <option value="BW1" >Biswa1</option>
                        <option value="BW2" >Biswa2</option>
                        <option value="GRD" >Ground</option>
                        <option value="AKM" >Aankadam</option>
                        <option value="ROD" >Rood</option>
                        <option value="CTK" >Chatak</option>
                        <option value="KOH" >Kottah</option>
                        <option value="CNT" >Cent</option>
                        <option value="PRH" >Perch</option>
                        <option value="GNA" >Guntha</option>
                        <option value="ARE" >Are</option>                       
                        @endif
                    </select>                                
                                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20 my-4">
                                    <div class="form-group field-wrap">
                                        <label class="text-uppercase brbottom-10 " for="propertyDescription">Description( optional )
                                        <span class="badge pending font-roboto light"></span>
                                        </label>
                                        <textarea class="form-control verticalResize text-start " rows="7" id="propertyDescription" name="description">
                                            {{isset($data)?$data->description:''}}
                                        </textarea>
                                        
                                        <div class="basic-editor pull-right">
                                            <button type="button" class="btn bold-btn" data-action="b" title="Bolded Text">B</button>
                                            <button type="button" class="btn italics-btn" data-action="i" title="Italicized Text">I</button>
                                            <button type="button" class="btn underline-btn" data-action="u" title="Underlined Text">U</button>
                                            <button type="button" class="btn strikethrough-btn" data-action="s" title="Strikethrough Text">S</button>
                                        </div>

                                        <span class="font-roboto light field-info">
                                            Minimum 50 and Maximum 2000 characters                                       
                                        </span>
                                                                            </div>
                                </div>
                <!--<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">-->
                <!--    <label class="text-uppercase" for="bedrooms">Bedrooms</label>-->
                <!--    <select class="form-control" id="bedrooms" name="bedrooms">-->
                <!--        <option value="">-- Select --</option>-->
                <!--        @if(isset($data))-->
                <!--        <option value="1" {{$data->bedrooms=='1'?'selected':''}}>1</option>-->
                <!--        <option value="2" {{$data->bedrooms=='2'?'selected':''}}>2</option>-->
                <!--        <option value="3" {{$data->bedrooms=='3'?'selected':''}}>3</option>-->
                <!--        <option value="4" {{$data->bedrooms=='4'?'selected':''}}>4</option>-->
                <!--        <option value="5" {{$data->bedrooms=='5'?'selected':''}}>5</option>-->
                <!--         <option value="6" {{$data->bedrooms=='6'?'selected':''}}>6</option>-->
                <!--         <option value="7" {{$data->bedrooms=='7'?'selected':''}}>7</option>-->
                <!--         <option value="8" {{$data->bedrooms=='8'?'selected':''}}>8</option>-->
                <!--         <option value="9" {{$data->bedrooms=='9'?'selected':''}}>9</option>-->
                <!--         <option value="10" {{$data->bedrooms=='10'?'selected':''}}>10</option>-->
                        
                <!--        @else-->
                <!--         <option value="1">1</option>-->
                <!--         <option value="2">2</option>-->
                <!--         <option value="3">3</option>-->
                <!--         <option value="4">4</option>-->
                <!--         <option value="5">5</option>-->
                <!--        <option value="6">6</option>-->
                <!--        <option value="7">7</option>-->
                <!--        <option value="8">8</option>-->
                <!--        <option value="9">9</option>-->
                <!--        <option value="10">10</option>-->
                <!--        @endif-->
                <!--    </select>                                -->
                <!--</div>-->
                <!--<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
                <!--    <label class="text-uppercase" for="bathrooms">Bathrooms</label>-->
                <!--    <select class="form-control" id="bathrooms" name="bathrooms">-->
                <!--        <option value="">-- Select --</option>-->
                <!--        @if(isset($data))-->
                <!--        <option value="1" {{$data->bathrooms=='1'?'selected':''}}>1</option>-->
                <!--        <option value="2" {{$data->bathrooms=='2'?'selected':''}}>2</option>-->
                <!--        <option value="3" {{$data->bathrooms=='3'?'selected':''}}>3</option>-->
                <!--        <option value="4" {{$data->bathrooms=='4'?'selected':''}}>4</option>-->
                <!--        <option value="5" {{$data->bathrooms=='5'?'selected':''}}>5</option>-->
                <!--        <option value="6" {{$data->bathrooms=='6'?'selected':''}}>6</option>-->
                <!--        <option value="7" {{$data->bathrooms=='7'?'selected':''}}>7</option>-->
                <!--        <option value="8" {{$data->bathrooms=='8'?'selected':''}}>8</option>-->
                <!--        <option value="9" {{$data->bathrooms=='9'?'selected':''}}>9</option>-->
                <!--        <option value="10" {{$data->bathrooms=='10'?'selected':''}}>10</option>-->
                <!--        @else-->
                <!--        <option value="1">1</option>-->
                <!--        <option value="2">2</option>-->
                <!--        <option value="3">3</option>-->
                <!--        <option value="4">4</option>-->
                <!--        <option value="5">5</option>-->
                <!--        <option value="6">6</option>-->
                <!--        <option value="7">7</option>-->
                <!--        <option value="8">8</option>-->
                <!--        <option value="9">9</option>-->
                <!--        <option value="10">10</option>-->
                <!--        @endif-->
                <!--    </select>                                -->
                <!--                    </div>-->
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase" for="constructedYear">Constructed Year</label>
                    <select class="form-control" id="constructedYear" name="constructed_year" data-el-name="constructed-year">
                        <option value="">-- Select --</option>
                        <option value="1">Under Construction</option>
       @if(isset($data))
 @for($i = 1950; $i <= 2024; $i++)
        <option value="{{ $i }}" {{ $data->constructed_year == $i ? 'selected' : '' }}>{{ $i }}</option>
    @endfor      
       @else
@for($i = 1950; $i <= 2024; $i++)
       <option value="{{$i}}">{{$i}}</option>
    @endfor   
       @endif                 

                    </select>                                
                                    </div>
                <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <label class="text-uppercase" for="readyToMove">Ready To Move</label><br>
                    <div class="radio radio-inline">
                        <input type="radio" value="Y" name="readyToMove" id="readyToMoveY" data-el-name="ready-to-move" >
                        <label for="readyToMoveY">Yes</label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" value="N" name="readyToMove" id="readyToMoveN" data-el-name="ready-to-move" >
                        <label for="readyToMoveN">No</label>
                    </div> 
                             
                </div>
                
                <div class="form-group col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <label class="text-uppercase" for="readyToMove"> Move Date</label><br>
                    <div class="radio radio-inline">
                        <input type="date" value="Y" name="readyToMove" id="readyToMoveY" data-el-name="ready-to-move" >
                        
                    </div>
                   
                             
                </div>
                <!--para-->
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 mt-3 mb-3" >
                         <input type="checkbox" name="location_show">&nbsp;
                         <span style="font-size:12px">I have read the Terms and Conditions</span> 
        
                       
                 </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4 mt-3 mb-3" >
                        
        
                        <input type="checkbox" name="location_show">&nbsp;
                         <span style="font-size:12px">I have read the Equality Guidelines</span> 
                 </div>
                 </div>
                <!--para end-->
                
                <div class="row">
              {{-- prev next row --}}
              <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                    <a onclick="openCity(event,'event3',2)" class="btn btn-large btn-block yellow-btn next font-roboto 
                    light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                        aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                    <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left">
<b>
&nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; SAVE 
</b></button>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" >
                    <a onclick="openCity(event,'event5',4)" class="btn btn-large btn-block yellow-btn next font-roboto 
light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
<b>NEXT
&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
</b></a>
                </div>
               </div>
                {{-- prev next row end--}}
         </div>
                                   </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event5" >
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Amenities</h3>
                                                                   
                            </div>
                            {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <a onclick="openCity(event, 'event4')" class="btn btn-large btn-block yellow-btn font-roboto light brbottom-30 icon-link icon-link-hover">Prev </a>
                            <a class="btn btn-large yellow-btn font-roboto light brbottom-30"  onclick="openCity(event, 'event6')"  >Next5 </a>

                            </div> --}}
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
  background-color: #red;
}

/* Hide the actual checkbox */
.checkbox-container input[type=checkbox] {
  display: none;
}

/* Style the checkbox button */
.checkbox-button {
  display: inline-block;
  background-color: black;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  width:160px;
}

/* Change button color when checkbox is checked */
.checkbox-container input[type=checkbox]:checked + .checkbox-button {
  background-color: red;
}
</style>
<!--row1-->
                <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Parking</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">En-suite</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Washing Machine</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Dryer</span>
</label>
                 </div>
                </div>
                <!--row2 amt-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Heated Flooring</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Cable Television</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Central Heating</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Microwave</span>
</label>
                 </div>
                </div>
                <!--row3-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button"> Broadband</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Garden</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Patio</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Balcony</span>
</label>
                 </div>
                </div>
                <!--row4-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Alarm</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Smoker</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Pets Allowed</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Step Free Access</span>
</label>
                 </div>
                </div>
                <!--row5-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Walk In Shower</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Wheelchair Access</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Half Furnished</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Full Furnished</span>
</label>
                 </div>
                </div>
                <!--row6-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Dishwasher</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">First Letting</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Garage</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">No Furniture</span>
</label>
                 </div>
                </div>
                <!--row7-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button"> Bills Included</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Student Accommodation</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Sea Views</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Gym</span>
</label>
                 </div>
                </div>
                <!--row8-->
                <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button"> Games Room</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Swimming Pool</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">Tennis Court</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox">
  <span class="checkbox-button">No Pets</span>
</label>
                 </div>
                </div>
                <!--amenities end===================================-->
                <br>
                <div class="row">
                     {{-- next4 and prev --}}
           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <a onclick="openCity(event, 'event4',3)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" width="300px"><b><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
               
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <a onclick="openCity(event,'event6',5)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
            <b>NEXT
                &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
            </b></a>
       </div>
                </div>
        {{--  next and prev end--}} 
                </div>
                

                                                        
                 <div class="row font-roboto regular tabcontent nexttab" id="event6">
                                                                 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Distance From</h3>
                                                                   
                            </div>
                            {{-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                 <a onclick="openCity(event, 'event5',4)" class="btn btn-large btn-block yellow-btn font-roboto light brbottom-30 icon-link icon-link-hover">Prev </a>
                                                                    <a class="btn btn-large yellow-btn font-roboto light brbottom-30"  
                                                                     onclick="openCity(event, 'event7')" >Next 6</a>

                            </div> --}}
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20 distance-info">
                                                                
                                    <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to School" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange1" name="distance_to_school" id="priceRange" min="0" max="100" value="{{isset($data)?$data->distance_to_school:''}}">
             
                                            <label>Distance to <b>School</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice1" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_school:''}} Km</span>
                                        </div>
                                    </div>
                                     <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Hospital" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange2" name="distance_to_hospital" id="priceRange" min="0" max="100" value="{{isset($data)?$data->distance_to_hospital:''}}">
             
                                            <label>Distance to <b>Hospital</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice2" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_hospital:''}} Km</span>
                                        </div>
                                    </div> 
                                     <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Bus Stop" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange3" name="distance_to_busstop" id="priceRange" min="0" max="100" value="{{isset($data)?$data->distance_to_busstop:''}}">
             
                                            <label>Distance to <b>Bus Stop</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice3" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_busstop:''}} Km</span>
                                        </div>
                                    </div>                                     

                                       <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Airport" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange4" name="distance_to_airport" id="priceRange" min="0" max="100" value="{{isset($data)?$data->distance_to_airport:''}}">
             
                                            <label>Distance to <b>Airport</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice4" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_airport:''}} Km</span>
                                        </div>
                                    </div> 
                                      <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Railway Station" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                            
                                       <input type="range" class="priceRange5" name="distance_to_railwaystation" id="priceRange" min="0" max="100" value="{{isset($data)?$data->distance_to_railwaystation:''}}">
             
                                            <label>Distance to <b>Railway Station</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice5" data-el-name="from-school">
                                                                            {{isset($data)?$data->distance_to_railwaystation:''}} Km</span>
                                        </div>
                                    </div> 
                                    <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Supermarket" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange6" id="priceRange" name="distance_to_supermarket" min="0" max="100" value="{{isset($data)?$data->distance_to_supermarket:''}}">
             
                                            <label>Distance to <b>Supermarket</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice6" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_supermarket:''}} Km</span>
                                        </div>
                                    </div> 
                                    <div class="row brbottom-30">
                                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-2 text-center">
                                            <span title="Distance to Shopping" class="ico school-distance"></span>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-8">
                                       <input type="range" class="priceRange7" id="priceRange" name="distance_to_shopping" min="0" max="100" value="{{isset($data)?$data->distance_to_shopping:''}}">

                                            <label>Distance to <b>Shopping</b></label>
                                                                                    </div>
                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                            <span class="distance-value selectedPrice7" data-el-name="from-school">
                                                                             {{isset($data)?$data->distance_to_shopping:''}} Km</span>
                                        </div>
                                    </div> 
                             
                                                                                      
                                 
                               
                            </div>
                            <div class="row">
                                 {{-- next6 and prev --}}
           <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <a onclick="openCity(event, 'event5',4)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" width="300px"><b><i class="fa fa-arrow-left" aria-hidden="true">
                </i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
               
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <a onclick="openCity(event,'event7',6)" class="btn btn-large btn-block yellow-btn next font-roboto 
            light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
            <b>NEXT
                &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i>    
            </b></a>
       </div>
                
        {{--  next and prev end--}} 
                            </div>
                        </div>  
                                                            
                    <div class="row font-roboto regular tabcontent nexttab" id="event7">
                                                                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Gallery</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                {{-- <a onclick="openCity(event, 'event6')" class="btn btn-large btn-block yellow-btn font-roboto light brbottom-30 icon-link icon-link-hover">Prev </a>
            <button type="submit" class="btn btn-large yellow-btn font-roboto light brbottom-30">Save </button> --}}
                            </div>
                             </form> 
                            <br>
                        <div class="container-fluid">
      <br />
    <br />
        
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Select Image</h3>
        </div>
        <div class="panel-body">
          <form id="dropzoneForm" class="dropzone" action="{{ url('dropzone_ds') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{isset($data)?$data->id:''}}" name="idxz">
            <input type="hidden" value="{{isset($randomstring)?$randomstring:''}}" name="randomstring" id="property_id">
            <div class="fallback">
        <input name="file" type="file" multiple />
          </div>
          </form>
          <div align="center">
            <button type="button" class="btn btn-info" id="submit-all">Upload</button>
          </div>
        </div>
      </div>
      <br />
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Uploaded Image</h3>
         <div id="demo_img">
            <img width="100"  src="{{ asset('uploads/ads/1712352416.jpg') }}" alt="">
          
        </div>
        
        </div>
        
        <div class="panel-body" id="uploaded_image">

        </div>
      </div>
    </div>
     {{-- next6 and prev --}}
     <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
        <a onclick="openCity(event,'event6',5)" class="btn btn-large btn-block yellow-btn next font-roboto 
        light brbottom-30 icon-link icon-link-hover" width="300px"><b><i class="fa fa-arrow-left" aria-hidden="true">
            </i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
        
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
           
    </div>
    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
        <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto 
        light brbottom-30 icon-link icon-link-hover" style="margin-left: right">
        <b>
            &nbsp;&nbsp;<i class="fa fa-check" aria-hidden="true"></i> &nbsp;&nbsp; SAVE 
        </b></button>
   </div>
            
    {{--  next and prev end--}} 
                    </div>                                        
                                       
                                                                         
                    </div>
                    <script type="text/html" id="tmpl-price">
                        <label class="text-uppercase brbottom-20 el-required" for="totalPrice">Price - <%= record.label %>
                        </label><br>
                        <div class="form-group field-wrap">
                            <select class="form-control border-radius-3 field-total-price" id="totalPrice" name="totalPrice">
                                <option value="">-- Select --</option>
                                <% _.each(record.items, function(label, key) { %>
                                    <option value="<%= key %>"><%= label %></option>
                                <% }) %>
                            </select>
                        </div>
                    </script>
                </div>
            </div>
            <!--price div starts event============= 8-->
            <!--price div end event================= 8-->
        </section>



<script type="text/javascript">
        var postedLanguage = "EN";
  var jsonTransactionTypes = {"RA":{"S":"Sell","R":"Rent"},"RH":{"S":"Sell","R":"Rent"},"RL":{"S":"Sell","R":"Rent"},"RO":{"S":"Sell","R":"Rent"},"CS":{"S":"Sell","R":"Rent","L":"Lease"},"CF":{"S":"Sell","R":"Rent","L":"Lease"},"CB":{"S":"Sell","R":"Rent","L":"Lease"},"CL":{"S":"Sell","R":"Rent","L":"Lease"},"CO":{"S":"Sell","R":"Rent","L":"Lease"},"IB":{"S":"Sell","R":"Rent","L":"Lease"},"IL":{"S":"Sell","R":"Rent","L":"Lease"},"AL":{"S":"Sell","R":"Rent","L":"Lease"}};
  var jsonPriceList = {"S":{"0-0":"Price not provided","100000-500000":"1 Lac to 5 Lac","500000-1000000":"5 Lac to 10 Lac","1000000-1500000":"10 Lac to 15 Lac","1500000-2000000":"15 Lac to 20 Lac","2000000-2500000":"20 Lac to 25 Lac","2500000-3000000":"25 Lac to 30 Lac","3000000-3500000":"30 Lac to 35 Lac","3500000-4000000":"35 Lac to 40 Lac","4000000-4500000":"40 Lac to 45 Lac","4500000-5000000":"45 Lac to 50 Lac","5000000-5500000":"50 Lac to 55 Lac","5500000-6000000":"55 Lac to 60 Lac","6000000-6500000":"60 Lac to 65 Lac","6500000-7000000":"65 Lac to 70 Lac","7000000-7500000":"70 Lac to 75 Lac","7500000-8000000":"75 Lac to 80 Lac","8000000-8500000":"80 Lac to 85 Lac","8500000-9000000":"85 Lac to 90 Lac","9000000-9500000":"90 Lac to 95 Lac","9500000-10000000":"95 Lac to 1 Crore","10000000-12000000":"1 Crore to 1.2 Crore","12000000-14000000":"1.2 Crore to 1.4 Crore","14000000-16000000":"1.4 Crore to 1.6 Crore","16000000-18000000":"1.6 Crore to 1.8 Crore","18000000-20000000":"1.8 Crore to 2 Crore","20000000-23000000":"2 Crore to 2.3 Crore","23000000-26000000":"2.3 Crore to 2.6 Crore","26000000-30000000":"2.6 Crore to 3 Crore","30000000-35000000":"3 Crore to 3.5 Crore","35000000-40000000":"3.5 Crore to 4 Crore","40000000-45000000":"4 Crore to 4.5 Crore","45000000-50000000":"4.5 Crore to 5 Crore","50000000-55000000":"5 Crore to 5.5 Crore","55000000-60000000":"5.5 Crore to 6 Crore","60000000-65000000":"6 Crore to 6.5 Crore","65000000-70000000":"6.5 Crore to 7 Crore","70000000-75000000":"7 Crore to 7.5 Crore","75000000-80000000":"7.5 Crore to 8 Crore","80000000-85000000":"8 Crore to 8.5 Crore","85000000-90000000":"8.5 Crore to 9 Crore","90000000-95000000":"9 Crore to 9.5 Crore","95000000-100000000":"9.5 Crore to 10 Crore","100000001-100000001":"Above 10 crore"},"R":{"0-0":"Price not provided","1000-5000":"1,000 to 5,000","5000-10000":"5,000 to 10,000","10000-15000":"10,000 to 15,000","15000-20000":"15,000 to 20,000","20000-25000":"20,000 to 25,000","25000-30000":"25,000 to 30,000","30000-35000":"30,000 to 35,000","35000-40000":"35,000 to 40,000","40000-45000":"40,000 to 45,000","45000-50000":"45,000 to 50,000","50000-55000":"50,000 to 55,000","55000-60000":"55,000 to 60,000","60000-65000":"60,000 to 65,000","65000-70000":"65,000 to 70,000","70000-75000":"70,000 to 75,000","75000-80000":"75,000 to 80,000","80000-85000":"80,000 to 85,000","85000-90000":"85,000 to 90,000","90000-95000":"90,000 to 95,000","95000-100000":"95,000 to 1 lac","100000-500000":"1 lac to 5 lac","500000-1000000":"5 lac to 10 lac","1000001-1000001":"Above 10 lac"},"L":{"0-0":"Price not provided","1000-5000":"1,000 to 5,000","5000-10000":"5,000 to 10,000","10000-15000":"10,000 to 15,000","15000-20000":"15,000 to 20,000","20000-25000":"20,000 to 25,000","25000-30000":"25,000 to 30,000","30000-35000":"30,000 to 35,000","35000-40000":"35,000 to 40,000","40000-45000":"40,000 to 45,000","45000-50000":"45,000 to 50,000","50000-55000":"50,000 to 55,000","55000-60000":"55,000 to 60,000","60000-65000":"60,000 to 65,000","65000-70000":"65,000 to 70,000","70000-75000":"70,000 to 75,000","75000-80000":"75,000 to 80,000","80000-85000":"80,000 to 85,000","85000-90000":"85,000 to 90,000","90000-95000":"90,000 to 95,000","95000-100000":"95,000 to 1 lac","100000-500000":"1 lac to 5 lac","500000-1000000":"5 lac to 10 lac","1000001-1000001":"Above 10 lac"}};
  var jsonPriceLabel = {"S":"Sell","R":"Rent","L":"Lease"};
  var jsonLocale = {"Total Price":"Total Price","Rent Amount":"Rent Amount","Lease Amount":"Lease Amount","Select":"Select","SMS":"SMS","REMOVE":"REMOVE","Outside Kerala":"Outside Kerala"};
  var jsonTransReqFields = ["propertyDescription"];
    var appUrl               = 'https://www.helloaddress.com/nc';
    var themeUrl             = 'https://assets.helloaddress.com/ui/build';
    var HAFE                 = {};
    var generalError         = 'Please check the indicated fields';
    var loadingTxt           = "Loading.....";
    var isPopup              = false;
    var device               = '';
    var deviceOs             = '';
    var mobileNotifyDuration = '1800';
    var appLocale            = 'en';
        var lensOriginParam      = 'l_src';
    var adsLensClickTrack    = {"event":"trackClickPromo","name":"Clicked Promotion","prop":{"id":"","type":"ad","placement":"","page":""}};
    var adsLensViewTrack     = {"event":"trackViewPromo","name":"Viewed Promotions","prop":{"ids":"","type":"ad","placement":"","page":""}};
</script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/library-4e4e84aca3.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/transliteration-73281adcf4.I.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/property/manageProperty-7d125f00e6.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/underscore-min-78634e93a1.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/jquery-cbf84e7554.validate.min.js"></script>
		<script type="text/javascript"> 
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ 
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o), 
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) 
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga'); 

		ga('create', 'UA-34234632-1', 'auto'); 
		ga('require', 'displayfeatures');
		ga('send', 'pageview'); 
			</script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-875103674"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'AW-875103674');
	</script>

        <script type="text/javascript">
        var GOOGLE_CONVERSATION_IMG = "//www.googleadservices.com/pagead/conversion/875103674/?label=zGqICO-nlmcQlpytygM";
        </script>

        <script type="text/javascript">
    function googleTagConversion(conversionType)
    {
    	if("registrationSuccess" == conversionType) {
    		var sendToKey = "cwPbCPLgyXQQuoukoQM";
    	} else if("projectEnquirySuccess" == conversionType) {
    		var sendToKey = "k_shCO2v8ZUBELqLpKED";
    	} else if("contactViewSuccess" == conversionType) {
    		var sendToKey = "k_shCO2v8ZUBELqLpKED";
    	}
    	gtag('event', 'conversion', {
		    'send_to': 'AW-875103674/'+sendToKey
		});
    }
    </script>

    
    <script type="text/javascript">
	  var _comscore = _comscore || [];_comscore.push({ c1: "2", c2: "7947673" });(function() {var s = document.createElement("script"), el = document.getElementsByTagName("script")[0]; s.async = true;s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";el.parentNode.insertBefore(s, el);})();
	</script>
	<noscript>
	  <img src="https://sb.scorecardresearch.com/p?c1=2&c2=7947673&cv=2.0&cj=1" />
	</noscript>

    <script type="text/javascript">
        var lensUID         = 152995;
        var clientId        = 'hello-address-prod';
        var sessionState    = 'a61ec9c2bf7d4b18b07ca97fece13b3cd0d15f599c62394a1749d69951d0f707.a15debe66f9ee7456ede9b18c46ba521';
        var targetOrigin    = 'https://id.manoramaonline.com';

                
                function ssoPopupWindow(url, title, w, h) {
            var left    = (screen.width/2)-(w/2);
            var top     = (screen.height/2)-(h/2);

            window.open(url, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, copyhistory=no, width='+w+', height='+h+', top='+top+', left='+left);
        }
        
                if ($("#ssoChangePassword").length) {
            $("#ssoChangePassword").on('click', function() {
                ssoPopupWindow($(this).data('href'), 'ChangePassword', 600, 500);
            });
        }
        
                if ($('[data-sso-profile-edit="edit"]').length) {
            $('[data-sso-profile-edit="edit"]').on('click', function() {
                ssoPopupWindow($(this).data('href'), 'EditProfile', 1000, 600);
            });
        }
        
    </script>

<script type="text/javascript" src="https://sdk.mmonline.io/js/lens-helloaddress.1.0-latest.js"></script>
<script type="text/javascript">     
if ('undefined' !== typeof lens) {
    lens.publisher.config.setApp('helloaddress', '1.0.1');
    lens.publisher.config.setApiUrl('https://scribe-classifieds.mmonline.io/helloaddress/t');
    lens.publisher.init();

    
    }
</script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/property/manageProperty-7d125f00e6.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/slider-ba8b9a8ddb.js"></script>
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/jquery-cbf84e7554.validate.min.js">
</script>
    <!--<p id="location">Waiting for location...</p>-->
@php
$thirdSegment = request()->segment(2);
@endphp
@if($thirdSegment == 'add-properties')
    <script>
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var latitude = position.coords.latitude;
                var longitude = position.coords.longitude;
                var locationElement = document.getElementById("location");
                var latitudes = document.getElementById("latitude");
                var longitudes = document.getElementById("longitude");
                latitudes.value = latitude;
                longitudes.value = longitude;
                locationElement.textContent = "Latitude: " + latitude + ", Longitude: " + longitude;
            });
        } else {
            var locationElement = document.getElementById("location");
            locationElement.textContent = "Geolocation is not available on this device.";
        }
    </script>
    @endif
    <script type="text/javascript">
function openCity(evt, cityName,val=0) {
    // Declare all variables
    // j1
alert(val);
return false;
    var i, tabcontent, tablinks;
 
    
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace("active", "");
    }
    var email = document.getElementById('emailAddress').value;
    console.log(email);
     // Custom validation
    if (cityName === 'event4') { // Assuming 'event4' corresponds to the next tab
        var email = document.getElementById('emailAddress').value;
        var phone = document.getElementById('phone').value;

        // Check if email and phone are empty
        if (email.trim() === '' || phone.trim() === '') {
            // Alert the user or handle the validation failure in your preferred way
            alert('Please fill in both email and phone fields.');
            // Prevent navigation
            evt.preventDefault();
        }
    }
    
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";

   
}
</script>

 <script type="text/javascript">
//     function openCity(evt, cityName) {

//   // Declare all variables
//   var i, tabcontent, tablinks;

//   // Get all elements with class="tabcontent" and hide them
//   tabcontent = document.getElementsByClassName("tabcontent");
//   for (i = 0; i < tabcontent.length; i++) {
//     tabcontent[i].style.display = "none";
//   }

//   // Get all elements with class="tablinks" and remove the class "active"
//   tablinks = document.getElementsByClassName("tablinks");
//   for (i = 0; i < tablinks.length; i++) {
//     tablinks[i].className = tablinks[i].className.replace("active", "");
//   }

//   // Show the current tab, and add an "active" class to the link that opened the tab
//   document.getElementById(cityName).style.display = "block";
//   evt.currentTarget.className += " active";
  
//       // Custom validation
//     if (cityName === 'event4') { // Assuming 'event4' corresponds to the next tab
//         var email = document.getElementById('emailAddress').value;
//         var phone = document.getElementById('confirmEmailAddress').value;

//         // Check if email and phone are empty
//         if (email.trim() === '' || phone.trim() === '') {
//             // Alert the user or handle the validation failure in your preferred way
//             alert('Please fill in both email and phone fields.');
//             // Prevent navigation
//             evt.preventDefault();
//         }
//     }
// }
</script>     
<script type="text/javascript">
    $(document).ready(function()
    {
         $('.hidethree').hide();
        $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
    });

         $('.amenities-block').click(function()
         {
            $(this).toggleClass('active');
           var amenity_name = $(this).text(); 
           var property_id = $('#property_id').val();
                       $.ajax({
                url: 'property/save-amenities',
                method: 'POST',
                data:{property_id:property_id,amenity_name:amenity_name}, 
                success: function(data) {
                    $('#result').html('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            }); 
         });
         $('.property-type').click(function()
         {
            $('.property-type').removeClass('active');
            $(this).toggleClass('active');
           var property_type = $(this).text(); 
           var property_id = $('#property_id').val();
           $('#property_type').val(property_type);
 
         });  
                  $('.trans_check').click(function()
         {
          var vals = $(this).val();
           if(vals == 'HolidayHome')
           {
            $('.fromandto').show();
           }
           else if(vals == 'Lease')
           {
            $('.fromandto').show();
           }
           else
           {
            $('.fromandto').hide();
           }
            
         });
         
    $('.filter-search').change(function()
  {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
  var currentval = $(this).val();
  $('.filter-search-county').hide();
  $('.filter-search-county-dummy').hide();
  if(currentval == 'Ulster')
   {
      $('.county-ulster').show(); 
   }
     if(currentval == 'Munster')
   {
     $('.county-munster').show();
   }
     if(currentval == 'Leinster')
   {
     $('.county-leinster').show();
   }
     if(currentval == 'Connacht')
   {
     $('.county-connacht').show();
   }
   
  });       
                     $(document).ready(function () {
            $(".priceRange1").on("input", function () {
                
                var selectedPrice1 =  $(this).val() + " Km" ;
                $(".selectedPrice1").text(selectedPrice1);
            });
             $(".priceRange2").on("input", function () {
                
                var selectedPrice2 = $(this).val() + " Km" ;
                $(".selectedPrice2").text(selectedPrice2);
            }); 
              $(".priceRange3").on("input", function () {
                
                var selectedPrice3 = $(this).val() + " Km" ;
                $(".selectedPrice3").text(selectedPrice3);
            });
              $(".priceRange4").on("input", function () {
                
                var selectedPrice4 = $(this).val() + " Km" ;
                $(".selectedPrice4").text(selectedPrice4);
            });
              $(".priceRange5").on("input", function () {
                
                var selectedPrice5 = $(this).val() + " Km" ;
                $(".selectedPrice5").text(selectedPrice5);
            });
             $(".priceRange6").on("input", function () {
                
                var selectedPrice6 = $(this).val() + " Km" ;
                $(".selectedPrice6").text(selectedPrice6);
            });
             $(".priceRange7").on("input", function () {
                
                var selectedPrice7 = $(this).val() + " Km" ;
                $(".selectedPrice7").text(selectedPrice7);
            });
               $(".priceRange8").on("input", function () {
                
                var selectedPrice8 = $(this).val() + " Km" ;
                $(".selectedPrice8").text(selectedPrice8);
            });                                                                             
        });
            $(document).ready(function () {
        $('#uploadForm').submit(function (event) {
        
             var property_type = $('#property_type').val();
             if(property_type === '')
              {
               alert('Property Type is Required'); 
               event.preventDefault();
              }
            
            // var maxSize = 2 * 1024 * 1024; 
            // var fileSize = $('#fileInput')[0].files[0].size;
            // if (fileSize > maxSize) {
            //     alert('Image size exceeds the 2MB limit.');
            //     event.preventDefault(); // Prevent form submission
            // }
        });
    });
jQuery(document).ready(function () {
  ImgUpload();
});

function ImgUpload() {
  var imgWrap = "";
  var imgArray = [];

  $('.upload__inputfile').each(function () {
    $(this).on('change', function (e) {
      imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
      var maxLength = $(this).attr('data-max_length');

      var files = e.target.files;
      var filesArr = Array.prototype.slice.call(files);
      var iterator = 0;
      filesArr.forEach(function (f, index) {

        if (!f.type.match('image.*')) {
          return;
        }

        if (imgArray.length > maxLength) {
          return false
        } else {
          var len = 0;
          for (var i = 0; i < imgArray.length; i++) {
            if (imgArray[i] !== undefined) {
              len++;
            }
          }
          if (len > maxLength) {
            return false;
          } else {
            imgArray.push(f);

            var reader = new FileReader();
            reader.onload = function (e) {
              var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
              imgWrap.append(html);
              iterator++;
            }
            reader.readAsDataURL(f);
          }
        }
      });
    });
  });

  $('body').on('click', ".upload__img-close", function (e) {
    var file = $(this).parent().data("file");
    for (var i = 0; i < imgArray.length; i++) {
      if (imgArray[i].name === file) {
        imgArray.splice(i, 1);
        break;
      }
    }
    $(this).parent().parent().remove();
  });
}

     </script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     <script type="text/javascript">

  Dropzone.options.dropzoneForm = {
    autoProcessQueue : true,
    acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
    addRemoveLinks: true,
    maxFiles: 10,
    parallelUploads: 20,
    url: "/upload", // Your upload URL
    init:function(){
      var submitButton = document.querySelector("#submit-all");
      myDropzone = this;

      submitButton.addEventListener('click', function(){
        myDropzone.processQueue();
      });

      this.on("complete", function(){
        if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0)
        {
          var _this = this;
          _this.removeAllFiles();
        }
        load_images();
      });

    }

  };

  load_images();

  function load_images()
  {
    var prop_id=$('#property_id').val();
  
    $.ajax({
      data:{prop_id:prop_id},
      url:"{{ url('dropzonefetch') }}",
      success:function(data)
      {
        //   alert(data);
          console.log(data);
          $('#demo_img').hide();
if(data==0){
     $('#demo_img').show();
     data="";
}
 $('#uploaded_image').html(data);
      }
    })
  }

  $(document).on('click', '.removefetchedimage', function(){
    var id = $(this).closest('.card').find('.img_id').val();
    $.ajax({
      url:"{{ url('removefetchedimage') }}",
      data:{id : id},
      success:function(data){
        load_images();
      }
    })
  });

</script>

<script>
        const fileInput = document.getElementById("fileInput");
        const imagePreview = document.getElementById("imagePreview");

        fileInput.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = "block";
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "";
                imagePreview.style.display = "none";
            }
        });
        
        const fileInputbanner = document.getElementById("fileInputbanner");
        const imagePreviewbanner = document.getElementById("imagePreviewbanner");

        fileInputbanner.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreviewbanner.src = e.target.result;
                    imagePreviewbanner.style.display = "block";
                };

                reader.readAsDataURL(file);
            } else {
                imagePreviewbanner.src = "";
                imagePreviewbanner.style.display = "none";
            }
        });
         document.addEventListener('DOMContentLoaded', function() {
   
});


</script>
<script>
    var input = document.querySelector("#whatsappNo");
    var input1 = document.querySelector("#phone");
    var input2 = document.querySelector("#phone2");
    window.intlTelInput(input, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
// 
 window.intlTelInput(input1, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    // 
     window.intlTelInput(input2, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>

@endsection
