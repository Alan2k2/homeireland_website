@extends('layouts.panel.main')
@section('content')

<!-- Styles -->
<style>
.sidebar{
    font-size: small;
}
    /* Form Styles */
    form {
        font-size: 15px;
    }
    
    .main-heading {
        /* Additional styling if needed */
    }
    
    /* Button Styles */
    .next {
        background-color: red;
        color: #fff;
        width: 300px;
        border: red;
    }
    
    .next:hover {
        background-color: black;
        color: #fff;
    }
    
    .save {
        background-color: green;
        color: #fff;
        width: 300px;
    }
    
    .save:hover {
        background-color: black;
        color: #fff;
    }
    
    /* Switch Styles */
    .switch-container {
        display: inline-block;
        position: relative;
    }
    
    .switch-input {
        display: none;
    }
    
    .switch-track {
        width: 50px;
        height: 25px;
        background-color: #ccc;
        border-radius: 25px;
        position: relative;
        cursor: pointer;
        display: inline-block;
    }
    
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
    
    .switch-input:checked + .switch-track .switch-thumb {
        transform: translateX(100%);
    }
    
    .switch-input:checked + .switch-track {
        background-color: #3498db;
    }
    
    /* Input Styles */
    input[type='radio'] {
        transform: scale(2);
    }
    
    label {
        padding: 2px;
        margin-left: 10px;
    }
    
    aside {
        border: 1px solid rgb(221, 221, 221);
        padding-left: 15px;
        border-radius: 4px;
    }
    
    /* Custom Button Styles */
    .custom-btn {
        background-color: red;
        color: #fff;
        border: 1px solid red;
        width: 300px;
    }
    
    .custom-btn:hover {
        background-color: black;
        color: #fff;
    }
    
    .button-section {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }
    
    .button-container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 0 20px;
        margin: 10px 2px;
    }
    
    .button-container .btn {
        margin: 0 10px;
        text-align: center;
    }
    
    .left-align {
        justify-content: flex-start;
    }
    
    .right-align {
        justify-content: flex-end;
    }
    
    /* Textarea Styles */
    .feature-textarea {
        font-size: 14px;
        line-height: 1.6;
        resize: vertical;
        text-align: left;
        vertical-align: top;
    }
    
    input.larger {
        width: 20px;
        height: 20px;
    }
    
    a {
        text-decoration: none;
    }
    
    /* Responsive Styles */
    @media (max-width: 768px) {
        .button-container {
            justify-content: space-between;
        }
        
        .button-container .btn {
            margin: 0 5px;
        }
        
        .custom-btn {
            width: 200px;
        }
        
        .nav-txt {
            height: 100px;
        }
        
        .aside_rooms1 {
            padding-left: 10px;
        }
        
        .aside_rooms1Div {
            padding-left: 15px;
        }
        
        .input-small {
            width: 85%;
            margin-left: 5px;
        }
        
        .inputspan {
            padding-right: 40px;
        }
    }
    
    @media (max-width: 600px) {
        .input-small {
            width: 80%;
            margin-left: 5px;
        }
    }
    
    @media (max-width: 400px) {
        .input-small {
            width: 70%;
            margin-left: 5px;
        }
    }
    
    /* Input Styles */
    .input-small {
        width: 100%;
    }
    
    .custom-input {
        width: 100%;
        border: 1px solid var(--bs-border-color);
        padding: 0.375rem 0.75rem;
        border-radius: 0.25rem;
        box-sizing: border-box;
        height: 34px;
        background-color: white;
    }
    
    @media (max-width: 767px) {
        .custom-input {
            width: 100%;
        }
    }
</style>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

<div class="preloader">
    <div class="spinner"></div>
</div>

<section class="postWrapper clearfix">
    <div class="container">
        <div class="row">
            <!-- Sidebar Navigation -->
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                <div class="clearfix lhs-post-links border-radius-3">
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-txt">
                        <p class="font-roboto light clearfix brtop-10">
                            <span class="progress-info-ico"></span>
                            <span class="progress-info">Please Complete your profile for more response</span>
                        </p>
                    </div>
                    <div class="expand text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="#" class="font-roboto regular">Navigation</a>
                    </div>
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @php
                            $id=1;
                            
                            
                            @endphp
                            
                            <?php 
                                //  dd(Session::get('main_cat'));
                            ?>
                            <ul class="font-roboto light tab sidebar">
                                <li class="tablinks" id="eu0">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Basic
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Location
                                    </a>
                                </li>
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Price
                                    </a>
                                </li>
                                <li class="tablinks active" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        <b style="color:white">Property Details</b>
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                @if(Session::get('main_cat')!=3 && Session::get('main_cat')!=4 && Session::get('main_cat')!=6 && Session::get('main_cat')!=7)
                                <li class="tablinks" id="eu4">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Facilities
                                    </a>
                                </li>
                                @endif
                                <li class="tablinks" id="eu5">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Description
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                @if(Session::get('main_cat')!=10 && Session::get('main_cat')!=11 && Session::get('main_cat')!=9 && Session::get('main_cat')!=12)
                                <li class="tablinks" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Media
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                @endif
                                <li class="tablinks" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Plan
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Contact
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Main Content -->
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif
                
                <form method="get" action="{{url('details_store')}}" id="uploadForm" enctype="multipart/form-data">
                    <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">
                    
                    <!-- Main Content Area -->
                    <main style="border: 0px solid rgb(221, 221, 221);padding:10px">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h3 style="color:red">{{Session::get('title')}} \ Add property details</h3>
                            </div>
                        </div>
                        
                        <!-- Property Type Section -->
                        <div class="row">
                            <?php if(Session::get('main_cat')==12){?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                <!--<h3 style="margin-left:1px">Spaces Available</h3>-->
                                <h3 style="margin-left:1px">Number Of Parking Needed</h3>
                                <input style="margin-left:1px" type="number" min="0" oninput="this.value = Math.abs(this.value)" name="space" value="{{$property->space}}" class="mt-4 form-control" placeholder="Enter a Number">
                            </div>
                            <?php 
                            }
                            if( Session::get('main_cat')!=4 && Session::get('main_cat')!=7 &&  Session::get('main_cat')!=12)
                            {
                            ?>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                <div>
                                    <h4 class="mt-4">Property type</h4>
                                    <select class="form-control" id="property_select" name="property_type" data-gmap-addr-donator="5" onchange="myFunction()" required>
                                        <option value="">---select Type of Property---</option>
                                        <?php
                                        $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k="";
                                        if($property)
                                        {
                                            if($property->property_type=="Agricultural Land")
                                            {
                                                $a="selected";  
                                            }
                                            if($property->property_type=="Commercial Site")
                                            {
                                                $b="selected";  
                                            }
                                            if($property->property_type=="Development Land")
                                            {
                                                $c="selected";  
                                            }
                                            if($property->property_type=="Industrial Site")
                                            {
                                                $d="selected";  
                                            }
                                            if($property->property_type=="Industrial Unit")
                                            {
                                                $e="selected";  
                                            }
                                            if($property->property_type=="Investment Property")
                                            {
                                                $f="selected";  
                                            }
                                            if($property->property_type=="Office Share")
                                            {
                                                $g="selected";  
                                            }
                                            if($property->property_type=="Office Space")
                                            {
                                                $h="selected";  
                                            }
                                            if($property->property_type=="Restaurant / Bar / Hotel")
                                            {
                                                $i="selected";  
                                            }
                                            if($property->property_type=="Retail Unit")
                                            {
                                                $j="selected";  
                                            }
                                            if($property->property_type=="Serviced Office")
                                            {
                                                $k="selected";  
                                            }
                                        }
                                        
                                        ?>
                                        @if(session::get('main_cat')==3 ||session::get('main_cat')==6 || session::get('main_cat')==11)
                                        <option value="Agricultural Land"<?=$a?>>Agricultural Land</option>
                                        <option value="Commercial Site"<?=$b?>>Commercial Site</option>
                                        <option value="Development Land"<?=$c?>>Development Land</option>
                                        <option value="Industrial Site"<?=$d?>>Industrial Site</option>
                                        <option value="Industrial Unit"<?=$e?>>Industrial Unit</option>
                                        <option value="Investment Property"<?=$f?>>Investment Property</option>
                                        <option value="Office Share"<?=$g?>>Office Share</option>
                                        <option value="Office Space"<?=$h?>>Office Space</option>
                                        <option value="Restaurant / Bar / Hotel"<?=$i?>>Restaurant / Bar / Hotel</option>
                                        <option value="Retail Unit"<?=$j?>>Retail Unit</option>
                                        <option value="Serviced Office"<?=$k?>>Serviced Office</option>
                                        @else
                                        <?php
                                        $h_check=$a_check=$s_check=$f_check="";
                                        ?>
                                        @if($property)
                                        @if($property->property_type=="House")
                                        <?php
                                        $h_check="selected";
                                        ?>
                                        @elseif($property->property_type=="Apartment")
                                        <?php
                                        $a_check="selected";
                                        ?>
                                        @elseif($property->property_type=="Studio")
                                        <?php
                                        $s_check="selected";
                                        ?>
                                        @elseif($property->property_type=="Flat")
                                        <?php
                                        $f_check="selected";
                                        ?>
                                        @endif
                                        @endif
                                        <option value="House" <?=$h_check?>>House</option>
                                        <option value="Apartment" <?=$a_check?>>Apartment</option>
                                        @if(session::get('main_cat')==1)
                                        <option value="Studio" <?=$s_check?>>Studio</option>
                                        @endif
                                        <option value="Flat" <?=$f_check?>>Flat</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                            <?php } ?>
                            
                            <!-- Available From Section -->
                            @if(session::get('main_cat')!=8)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                @if(session::get('main_cat')!=9)
                                <?php if(session::get('main_cat')==10 ||session::get('main_cat')==11 ||session::get('main_cat')==12) 
                                {?>
                                <h4 class="mt-4">Needed from</h4>
                                <?php } 
                                else
                                {
                                ?>
                                <h4 class="mt-4">Available from</h4>
                                <?php
                                }
                                ?>
                                <?php
                                if($property)
                                {
                                    $af_date=$property->Available_from;
                                }
                                ?>
                                <input class="custom-input valid custom-input-height" type="date" value="<?=$af_date?>" required data-gmap-addr-donator="0" id="available_from" name="available_from" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                @endif
                            </div>
                            @else
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4">
                                <h4 class="mt-4">Available From</h4>
                                <?php
                                if($property)
                                {
                                    $af_date=$property->Available_from;
                                }
                                ?>
                                <input class="custom-input valid custom-input-height" type="date" value="<?=$af_date?>" required data-gmap-addr-donator="0" id="available_from" name="available_from" data-gtm-form-interact-field-id="0" aria-invalid="false">
                            </div>
                            
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4">
                                <h4 class="mt-4">Available To</h4>
                                <?php
                                if($property)
                                {
                                    $at_date=$property->Available_to;
                                }
                                ?>
                                <input class="custom-input valid custom-input-height" type="date" value="<?=$at_date?>" required data-gmap-addr-donator="0" id="available_from" name="available_to" data-gtm-form-interact-field-id="0" aria-invalid="false">
                            </div>
                            @endif
                        </div>
                        
                        <!-- Bedrooms Section -->
                        <?php 
                        if(session::get('main_cat')==1||session::get('main_cat')==8||session::get('main_cat')==9)
                        {
                        ?>
                        <div class="row mt-4 mb-4">
                            @if(session::get('main_cat')==1|| session::get('main_cat')==8 ||session::get('main_cat')==9)
                            <aside id="aside_rooms">
                                @else
                                <aside id="aside_rooms1" class="aside_rooms1">
                                    @endif
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4 aside_rooms1Div">
                                        Single Bedrooms<br>
                                        <input type="number" min="0" oninput="this.value = Math.abs(this.value)" class="mt-4 input-small" name="single_room" value="{{isset($property)?$property->Single_Bedrooms:''}}">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4 aside_rooms1Div">
                                        Double Bedrooms
                                        <br>
                                        <input type="number" min="0" oninput="this.value = Math.abs(this.value)" class="mt-4 input-small" name="double_room"value="{{isset($property)?$property->Double_Bedrooms:''}}">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4 aside_rooms1Div">
                                        Twin Bedrooms
                                        <br>
                                        <input type="number" min="0" oninput="this.value = Math.abs(this.value)" class="mt-4 input-small" name="twin_room"value="{{isset($property)?$property->Twin_Bedrooms:''}}">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4 aside_rooms1Div">
                                        Bathrooms
                                        <br>
                                        <input type="number" min="0" oninput="this.value = Math.abs(this.value)" class="mt-4 input-small" name="bathroom" value="{{isset($property)?$property->Bathrooms:''}}">
                                    </div>
                                </aside>
                            </div>  
                            <?php
                            }
                            ?>
                            
                            <!-- Available For Section -->
                            @if(session::get('main_cat')==2||session::get('main_cat')==10 || session::get('main_cat')==11||session::get('main_cat')==12)
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                    <?php
                                    $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k=$l=$m="";
                                    if($property->av_for=="1 Months")
                                    {
                                        $a="selected";
                                    }
                                    if($property->av_for=="2 Months")
                                    {
                                        $b="selected";
                                    }
                                    if($property->av_for=="3 Months")
                                    {
                                        $c="selected";
                                    }
                                    if($property->av_for=="4 Months")
                                    {
                                        $d="selected";
                                    }
                                    if($property->av_for=="5 Months")
                                    {
                                        $e="selected";
                                    }
                                    if($property->av_for=="6 Months")
                                    {
                                        $f="selected";
                                    }
                                    if($property->av_for=="7 Months")
                                    {
                                        $g="selected";
                                    }
                                    if($property->av_for=="8 Months")
                                    {
                                        $h="selected";
                                    }
                                    if($property->av_for=="9 Months")
                                    {
                                        $i="selected";
                                    }
                                    if($property->av_for=="10 Months")
                                    {
                                        $j="selected";
                                    }
                                    if($property->av_for=="11 Months")
                                    {
                                        $k="selected"; 
                                    }
                                    if($property->av_for=="1 Year")
                                    {
                                        $l="selected";
                                    }
                                    if($property->av_for=="More Than Year")
                                    {
                                        $m="selected";
                                    }
                                    
                                    ?>
                                    <div>
                                        <?php if(session::get('main_cat')==10 || session::get('main_cat')==11|| session::get('main_cat')==12) 
                                        {?>
                                        <h4 class="mt-4">Needed for </h4>
                                        <?php } 
                                        else
                                        {
                                        ?>
                                        <h4 class="mt-4">Available for </h4>
                                        <?php
                                        }
                                        ?>
                                        <select class="form-control" id="countryId" name="av_for" data-gmap-addr-donator="5">
                                            <option value="">---Select Months---</option>
                                            <option value="1 Months" <?=$a?> selected>1 Months</option>
                                            <option value="2 Months" <?=$b?>>2 Months</option>
                                            <option value="3 Months" <?=$c?>>3 Months</option>
                                            <option value="4 Months" <?=$d?>>4 Months</option>
                                            <option value="5 Months" <?=$e?>>5 Months</option>
                                            <option value="6 Months" <?=$f?>>6 Months</option>
                                            <option value="7 Months" <?=$g?>>7 Months</option>
                                            <option value="8 Months" <?=$h?>>8 Months</option>
                                            <option value="9 Months" <?=$i?>>9 Months</option>
                                            <option value="10 Months" <?=$j?>>10 Months</option>
                                            <option value="11 Months" <?=$k?>>11 Months</option>
                                            <option value="1 Year" <?=$l?>>1 Year</option>
                                            <option value="More Than Year" <?=$m?>>More Than Year</option>
                                        </select>
                                    </div>
                                </div>
                                <?php if(session::get('main_cat')!=11 && session::get('main_cat')!=12){?>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                    <h4 class="mt-4">Number of other tenants sharing</h4>
                                    <?php
                                    $a=$b=$c=$e=$d=$f="";
                                    if($property->no_tenants=="1")
                                    {
                                        $a="selected";
                                    }
                                    if($property->no_tenants=="2")
                                    {
                                        $b="selected";
                                    }
                                    if($property->no_tenants=="3")
                                    {
                                        $c="selected";
                                    }
                                    if($property->no_tenants=="4")
                                    {
                                        $d="selected";
                                    }
                                    if($property->no_tenants=="5")
                                    {
                                        $e="selected";
                                    }
                                    if($property->no_tenants=="6")
                                    {
                                        $f="selected";
                                    }
                                    
                                    ?>
                                    <select class="form-control" id="countryId" name="no_tenants" data-gmap-addr-donator="5">
                                        <option value="">---Select Number Of Tenants---</option>
                                        <option value="1"<?=$a?>>1 Tenant</option>
                                        <option value="2" <?=$b?>>2 Tenant</option>
                                        <option value="3" <?=$c?>>3 Tenant</option>
                                        <option value="4" <?=$d?>>4 Tenant</option>
                                        <option value="5" <?=$e?>>5 Tenant</option>
                                        <option value="6" <?=$f?>>6+ Tenant</option>
                                    </select>
                                </div>
                                <?php } ?>
                            </div>
                            @endif
                            
                            <!-- Floor Area Section -->
                            @if(session::get('main_cat')==3||session::get('main_cat')==6)
                            <div class="row" id="floor">
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4">
                                    <div class="mt-0">
                                        <h4>Land area</h4> 
                                        <input type="text" placeholder="Land area" class="form-control mb-4" value="<?=$property->floor_area?>" name="floor_area1"> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                    <span style="font-size:14px"></span> 
                                    <h4>Area</h4> 
                                    <select class="form-control mb-4" id="plotAreaUnit" name="unit">
                                        <?php
                                        $a=$b="";
                                        if($property->unit=="Acres")
                                        {
                                            $a="checked";
                                        }
                                        if($property->unit=="Hectars")
                                        {
                                            $b="checked";
                                        }
                                        
                                        ?>
                                        <option value="Acres" <?=$a?>>Acres</option>
                                        <option value="Hectars" <?=$b?>>Hectars</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offshare" style="padding-top:8px">
                                    <h4>Number of people space accommodates</h4> 
                                    <?php $sle="";?>
                                    <select class="form-control mb-4 mt-4" id="plotAreaUnit" name="space">
                                        <?php for($i=1;$i<=15;$i++){
                                        if(trim($property->space)==$i)
                                        {
                                            $sle="selected";
                                        }
                                        else
                                        {
                                            $sle="";
                                        }
                                        ?>
                                        <option value="<?=$i?>" <?=$sle?>><?=$i?> space</option>
                                        <?php }?>
                                    </select>
                                </div>
                                
                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-4 floor2">
                                    <div class="mt-0">
                                        <h4>Floor area</h4> 
                                        <input type="text"value="<?=$property->floor_area?>" placeholder="Floor area" name="floor_area" class="form-control mb-4"> 
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4 floor2" style="padding-top:8px">
                                    <span style="font-size:14px"></span> 
                                    <?php
                                    $a=$b="";
                                    if($property->unit=="Square Metres")
                                    {
                                        $a="checked";
                                    }
                                    if($property->unit=="Feet")
                                    {
                                        $b="checked";
                                    }
                                    
                                    ?>
                                    <select class="form-control mb-4 mt-4" id="plotAreaUnit" name="unit">
                                        <option value="Square Metres" <?=$a?>>Square Metres</option>
                                        <option value="Feet"<?=$b?> >Feet</option>
                                    </select>
                                </div>
                            </div>
                            @endif
                            
                            <!-- BER Number Section -->
                            @if(session::get('main_cat')!=9 && session::get('main_cat')!=10
                            && session::get('main_cat')!=11 && session::get('main_cat')!=12
                            && session::get('main_cat')!=8  && session::get('main_cat')!=2
                            && session::get('main_cat')!=4 
                            )
                            
                            
                            <div class="row">
                                
                                @if(session::get('main_cat')!=7)
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" required>
                                        <h4 class="mt-4">BER Number</h4>
                                        <select class="form-control" id="ber" name="ber" data-gmap-addr-donator="5">
                                            <?php
                                            $a=$a1_select=$a2_select=$a3_select=$a4_select=$a5_select="";
                                            $a=$b=$c=$d=$e=$f=$g=$h=$i=$j="";
                                            if($property->BER=="A1")
                                            {
                                                $a1_select="selected";
                                            }
                                            if($property->BER=="A2")
                                            {
                                                $a2_select="selected";
                                            }
                                            if($property->BER=="A3")
                                            {
                                                $a3_select="selected";
                                            }
                                            if($property->BER=="B1")
                                            {
                                                $a4_select="selected";
                                            }
                                            if($property->BER=="B2")
                                            {
                                                $a5_select="selected";
                                            }
                                            if($property->BER=="B3")
                                            {
                                                $a="selected";
                                            }
                                            
                                            if($property->BER=="C1")
                                            {
                                                $b="selected";
                                            }
                                            if($property->BER=="C2")
                                            {
                                                $c="selected";
                                            }
                                            if($property->BER=="C3")
                                            {
                                                $d="selected";
                                            }
                                            
                                            if($property->BER=="D1")
                                            {
                                                $e="selected";
                                            }
                                            if($property->BER=="D2")
                                            {
                                                $f="selected";
                                            }
                                            
                                            if($property->BER=="E1")
                                            {
                                                $g="selected";
                                            }
                                            if($property->BER=="E2")
                                            {
                                                $h="selected";
                                            }
                                            
                                            if($property->BER=="F")
                                            {
                                                $i="selected";
                                            }
                                            if($property->BER=="G")
                                            {
                                                $j="selected";
                                            }
                                            
                                            ?>
                                            <option value="">---Select Option---</option>
                                            <option value="A1" <?=$a1_select?>>A1</option>
                                            <option value="A2" <?=$a2_select?>>A2</option>
                                            <option value="A3" <?=$a3_select?>>A3</option>
                                            <option value="B1" <?=$a4_select?>>B1</option> 
                                            <option value="B2" <?=$a5_select?>>B2</option>
                                            <option value="B3" <?=$a?>>B3</option>
                                            <option value="C1" <?=$b?>>C1</option>
                                            <option value="C2" <?=$c?>>C2</option>
                                            <option value="C3" <?=$d?>>C3</option>
                                            <option value="D1" <?=$e?>>D1</option>
                                            <option value="D2" <?=$f?>>D2</option>
                                            <option value="E1" <?=$g?>>E1</option>
                                            <option value="E2" <?=$h?>>E2</option>
                                            <option value="F" <?=$i?>>F</option>
                                            <option value="G" <?=$j?>>G</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" style="display:none;">
                                        <div>
                                            <h4 class="mt-4"> BER NO (Optional)</h4>
                                            <input class="form-control valid" type="text" value="{{isset($property)?$property->BER_NO:''}}" data-gmap-addr-donator="0" id="ber_no" name="ber_no" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2 mt-4">
                                        <div>
                                            <h4 class="mt-4"> BER Not Available</h4>
                                            <?php
                                            $a="";
                                            if($property->ber_no_avl==1)
                                            {
                                                $a="checked";
                                            }
                                            
                                            ?>
                                            <input type="checkbox"name="ber_no_avl" class="larger " id="auction11" value="1" <?=$a?>>
                                        </div>
                                    </div>
                                
                                @endif
                                <?php
                                
                                
                                    if(session('main_cat')=='7'){
                                   ?>
                                   
                                  
                                
                                <div class="col-lg-6 col-md-4 col-sm-12 col-xs-12 mt-4">
                                              <div class="mt-0">
                                                   <h4 class="mt-4">Sale price</h4> 
                                                     <input type="number" placeholder="€" class="form-control mb-4" name="price_sale" value="{{$property->price_sale}}"> 
                                        </div>
                                </div>
                            
                             <?php
                                    }
                                ?>
                            @endif
                            
                            <!-- Facilities Section -->
                            @if(session::get('main_cat')==6 ||session::get('main_cat')==3)
                            <div class="row" id="facilities_section">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                    <h4 class="mt-2">Facilities</h4>
                                    <div style="display:flex;margin-top:15px;flex-wrap:wrap">
                                        <?php
                                        $facilities = $property->facilities;
                                        if(!empty($facilities)) {      
                                            if(!is_array($facilities)) {
                                                $facilities = explode(',', $facilities);
                                            }
                                        } else {
                                            $facilities = [];
                                        }

                                        $mainCatId = session::get('main_cat');
                                        $allFacilities = \App\Models\Facility::all()->filter(function($f) use ($mainCatId) {
                                            $cats = explode(',', $f->category_ids);
                                            return in_array($mainCatId, $cats);
                                        });
                                        ?>
                                        
                                        @foreach($allFacilities as $fac)
                                        <div class="form-check me-3 mb-3 dynamic-facility" data-subcategories="{{ $fac->subcategories }}">
                                            <input type="checkbox" name="fa1[]" class="form-check-input larger" id="facility_{{ $fac->id }}" value="{{ $fac->name }}" {{ in_array($fac->name, $facilities) ? 'checked' : '' }}>
                                            <label class="form-check-label" for="facility_{{ $fac->id }}">{{ $fac->name }}</label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            <!-- Minimum Lease Section -->
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                    @if(session::get('main_cat')==1)
                                    <div>
                                        <h4 class="mt-4">Minimum Lease</h4>
                                        <input class="form-control valid" type="text" value="{{isset($property)?$property->Minimum_lease:''}}" data-gmap-addr-donator="0" id="ber_no" name="minimum_lease" data-gtm-form-interact-field-id="0" aria-invalid="false" placeholder="eg: 6 Weeks/ Months/ Years">
                                    </div>
                                    @endif
                                    @if(session::get('main_cat')==2)
                                    <div>
                                        <center style="display:flex">
                                            <?php
                                            $owcheck="";
                                            if($property->Owner_occupied==1)
                                            {
                                                $owcheck="checked";
                                            }
                                            ?>
                                            <h4 style="padding-right:10px" class="mt-4">Owner occupied </h4> 
                                            <input type="checkbox" name="Owner_occupied" value="1" class="larger mt-4" <?=$owcheck?>>
                                        </center>
                                    </div>
                                    @endif
                                </div>
                                @if(session::get('main_cat')==2)
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                    <div style="display:flex;margin-top:0%">
                                        <h4 class="mt-4">+1 person OK</h4>
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                                        <?php
                                        $onecheck="";
                                        if($property->one_person=="1")
                                        {
                                            $onecheck="checked";
                                        }
                                        ?>
                                        <input class=" larger mt-4" type="checkbox" name="one_person" <?=$onecheck?> value="1">
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            <!-- Preference Section -->
                            @if(session::get('main_cat')==2)
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                    <div>
                                        <center style="display:flex">
                                            <h4 style="padding-right:10px" class="mt-2">Preference</h4> 
                                            &nbsp;&nbsp;
                                            <?php
                                            $fcheck=$mcheck=$echeck="";
                                            if($property->Preference=="Female only")
                                            {
                                                $fcheck="checked";
                                            }
                                            if($property->Preference=="Male only")
                                            {
                                                $mcheck="checked";
                                            }
                                            if($property->Preference=="Either")
                                            {
                                                $echeck="checked";
                                            }
                                            ?>
                                        </center>
                                        <div class="d-flex flex-wrap">
                                            <div class="form-check me-3">
                                                <input type="radio" class="form-check-input larger1" name="Preference" value="Female only"<?=$fcheck?>>
                                                <label class="form-check-label">Female only</label>
                                            </div>
                                            <div class="form-check me-3">
                                                <input type="radio" class="form-check-input larger1" name="Preference" value="Male only" <?=$mcheck?>>
                                                <label class="form-check-label">Male only</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input larger1 inputradio3" name="Preference" value="Either" <?=$echeck?>>
                                                <label class="form-check-label">Either</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            <!-- Feature Section -->
                            @if(session::get('main_cat')==9||session::get('main_cat')==10||session::get('main_cat')==11||session::get('main_cat')==12)
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                    <h4>Enter Feature You want to display in main page</h4>
                                    <small>Max Words 150</small>
                                    <textarea class="form-control feature-textarea" name="feature" rows="2" cols="15">{{$property->feature}}</textarea>
                                </div>
                            </div>
                            @endif
                            
                            <!-- Button Section -->
                            <section class="button-section">
                                <div class="button-container">
                                    <a href="{{url('price')}}?id=2" class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover left-align">
                                        <b><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b>
                                    </a>
                                    <button type="submit" class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover right-align">
                                        <b>NEXT &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b>
                                    </button>
                                </div>
                            </section>
                        </main>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script type="text/javascript">
    var postedLanguage = "EN";
    var jsonTransactionTypes = {"RA":{"S":"Sell","R":"Rent"},"RH":{"S":"Sell","R":"Rent"},"RL":{"S":"Sell","R":"Rent"},"RO":{"S":"Sell","R":"Rent"},"CS":{"S":"Sell","R":"Rent","L":"Lease"},"CF":{"S":"Sell","R":"Rent","L":"Lease"},"CB":{"S":"Sell","R":"Rent","L":"Lease"},"CL":{"S":"Sell","R":"Rent","L":"Lease"},"CO":{"S":"Sell","R":"Rent","L":"Lease"},"IB":{"S":"Sell","R":"Rent","L":"Lease"},"IL":{"S":"Sell","R":"Rent","L":"Lease"},"AL":{"S":"Sell","R":"Rent","L":"Lease"}};
    var jsonPriceList = {"S":{"0-0":"Price not provided","100000-500000":"1 Lac to 5 Lac","500000-1000000":"5 Lac to 10 Lac","1000000-1500000":"10 Lac to 15 Lac","1500000-2000000":"15 Lac to 20 Lac","2000000-2500000":"20 Lac to 25 Lac","2500000-3000000":"25 Lac to 30 Lac","3000000-3500000":"30 Lac to 35 Lac","3500000-4000000":"35 Lac to 40 Lac","4000000-4500000":"40 Lac to 45 Lac","4500000-5000000":"45 Lac to 50 Lac","5000000-5500000":"50 Lac to 55 Lac","5500000-6000000":"55 Lac to 60 Lac","6000000-6500000":"60 Lac to 65 Lac","6500000-7000000":"65 Lac to 70 Lac","7000000-7500000":"70 Lac to 75 Lac","7500000-8000000":"75 Lac to 80 Lac","8000000-8500000":"80 Lac to 85 Lac","8500000-9000000":"85 Lac to 90 Lac","9000000-9500000":"90 Lac to 95 Lac","9500000-10000000":"95 Lac to 1 Crore","10000000-12000000":"1 Crore to 1.2 Crore","12000000-14000000":"1.2 Crore to 1.4 Crore","14000000-16000000":"1.4 Crore to 1.6 Crore","16000000-18000000":"1.6 Crore to 1.8 Crore","18000000-20000000":"1.8 Crore to 2 Crore","20000000-23000000":"2 Crore to 2.3 Crore","23000000-26000000":"2.3 Crore to 2.6 Crore","26000000-30000000":"2.6 Crore to 3 Crore","30000000-35000000":"3 Crore to 3.5 Crore","35000000-40000000":"3.5 Crore to 4 Crore","40000000-45000000":"4 Crore to 4.5 Crore","45000000-50000000":"4.5 Crore to 5 Crore","50000000-55000000":"5 Crore to 5.5 Crore","55000000-60000000":"5.5 Crore to 6 Crore","60000000-65000000":"6 Crore to 6.5 Crore","65000000-70000000":"6.5 Crore to 7 Crore","70000000-75000000":"7 Crore to 7.5 Crore","75000000-80000000":"7.5 Crore to 8 Crore","80000000-85000000":"8 Crore to 8.5 Crore","85000000-90000000":"8.5 Crore to 9 Crore","90000000-95000000":"9 Crore to 9.5 Crore","95000000-100000000":"9.5 Crore to 10 Crore","100000001-100000001":"Above 10 crore"},"R":{"0-0":"Price not provided","1000-5000":"1,000 to 5,000","5000-10000":"5,000 to 10,000","10000-15000":"10,000 to 15,000","15000-20000":"15,000 to 20,000","20000-25000":"20,000 to 25,000","25000-30000":"25,000 to 30,000","30000-35000":"30,000 to 35,000","35000-40000":"35,000 to 40,000","40000-45000":"40,000 to 45,000","45000-50000":"45,000 to 50,000","50000-55000":"50,000 to 55,000","55000-60000":"55,000 to 60,000","60000-65000":"60,000 to 65,000","65000-70000":"65,000 to 70,000","70000-75000":"70,000 to 75,000","75000-80000":"75,000 to 80,000","80000-85000":"80,000 to 85,000","85000-90000":"85,000 to 90,000","90000-95000":"90,000 to 95,000","95000-100000":"95,000 to 1 lac","100000-500000":"1 lac to 5 lac","500000-1000000":"5 lac to 10 lac","1000001-1000001":"Above 10 lac"},"L":{"0-0":"Price not provided","1000-5000":"1,000 to 5,000","5000-10000":"5,000 to 10,000","10000-15000":"10,000 to 15,000","15000-20000":"15,000 to 20,000","20000-25000":"20,000 to 25,000","25000-30000":"25,000 to 30,000","30000-35000":"30,000 to 35,000","35000-40000":"35,000 to 40,000","40000-45000":"40,000 to 45,000","45000-50000":"45,000 to 50,000","50000-55000":"50,000 to 55,000","55000-60000":"55,000 to 60,000","60000-65000":"60,000 to 65,000","65000-70000":"65,000 to 70,000","70000-75000":"70,000 to 75,000","75000-80000":"75,000 to 80,000","80000-85000":"80,000 to 85,000","85000-90000":"85,000 to 90,000","90000-95000":"90,000 to 95,000","95000-100000":"95,000 to 1 lac","100000-500000":"1 lac to 5 lac","500000-1000000":"5 lac to 10 lac","1000001-1000001":"Above 10 lac"}};
    var jsonPriceLabel = {"S":"Sell","R":"Rent","L":"Lease"};
    var jsonLocale = {"Total Price":"Total Price","Rent Amount":"Rent Amount","Lease Amount":"Lease Amount","Select":"Select","SMS":"SMS","REMOVE":"REMOVE","Outside Kerala":"Outside Kerala"};
    var jsonTransReqFields = ["propertyDescription"];
    var appUrl = 'https://www.helloaddress.com/nc';
    var themeUrl = 'https://assets.helloaddress.com/ui/build';
    var HAFE = {};
    var generalError = 'Please check the indicated fields';
    var loadingTxt = "Loading.....";
    var isPopup = false;
    var device = '';
    var deviceOs = '';
    var mobileNotifyDuration = '1800';
    var appLocale = 'en';
    var lensOriginParam = 'l_src';
    var adsLensClickTrack = {"event":"trackClickPromo","name":"Clicked Promotion","prop":{"id":"","type":"ad","placement":"","page":""}};
    var adsLensViewTrack = {"event":"trackViewPromo","name":"Viewed Promotions","prop":{"ids":"","type":"ad","placement":"","page":""}};
</script>

<script type="text/javascript" src="{{ asset('js/library.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/transliteration.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/manageProperty.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/underscore-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-validate.js') }}"></script>

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
    var lensUID = 152995;
    var clientId = 'hello-address-prod';
    var sessionState = 'a61ec9c2bf7d4b18b07ca97fece13b3cd0d15f599c62394a1749d69951d0f707.a15debe66f9ee7456ede9b18c46ba521';
    var targetOrigin = 'https://id.manoramaonline.com';

    function ssoPopupWindow(url, title, w, h) {
        var left = (screen.width/2)-(w/2);
        var top = (screen.height/2)-(h/2);

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

<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>

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
    function openCity(evt, cityName, val=0) {
        var i, tabcontent, tablinks;
        
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace("active", "");
        }
        
        var email = document.getElementById('emailAddress').value;
        console.log(email);
        
        if (cityName === 'event4') {
            var email = document.getElementById('emailAddress').value;
            var phone = document.getElementById('phone').value;

            if (email.trim() === '' || phone.trim() === '') {
                alert('Please fill in both email and phone fields.');
                evt.preventDefault();
            }
        }
        
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.hidethree').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        
        $('.amenities-block').click(function() {
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
        
        $('.property-type').click(function() {
            $('.property-type').removeClass('active');
            $(this).toggleClass('active');
            var property_type = $(this).text(); 
            var property_id = $('#property_id').val();
            $('#property_type').val(property_type);
        });  
        
        $('.trans_check').click(function() {
            var vals = $(this).val();
            if(vals == 'HolidayHome') {
                $('.fromandto').show();
            } else if(vals == 'Lease') {
                $('.fromandto').show();
            } else {
                $('.fromandto').hide();
            }
        });
        
        $('.filter-search').change(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var currentval = $(this).val();
            $('.filter-search-county').hide();
            $('.filter-search-county-dummy').hide();
            if(currentval == 'Ulster') {
                $('.county-ulster').show(); 
            }
            if(currentval == 'Munster') {
                $('.county-munster').show();
            }
            if(currentval == 'Leinster') {
                $('.county-leinster').show();
            }
            if(currentval == 'Connacht') {
                $('.county-connacht').show();
            }
        });       
        
        $(".priceRange1").on("input", function() {
            var selectedPrice1 =  $(this).val() + " Km" ;
            $(".selectedPrice1").text(selectedPrice1);
        });
        
        $(".priceRange2").on("input", function() {
            var selectedPrice2 = $(this).val() + " Km" ;
            $(".selectedPrice2").text(selectedPrice2);
        }); 
        
        $(".priceRange3").on("input", function() {
            var selectedPrice3 = $(this).val() + " Km" ;
            $(".selectedPrice3").text(selectedPrice3);
        });
        
        $(".priceRange4").on("input", function() {
            var selectedPrice4 = $(this).val() + " Km" ;
            $(".selectedPrice4").text(selectedPrice4);
        });
        
        $(".priceRange5").on("input", function() {
            var selectedPrice5 = $(this).val() + " Km" ;
            $(".selectedPrice5").text(selectedPrice5);
        });
        
        $(".priceRange6").on("input", function() {
            var selectedPrice6 = $(this).val() + " Km" ;
            $(".selectedPrice6").text(selectedPrice6);
        });
        
        $(".priceRange7").on("input", function() {
            var selectedPrice7 = $(this).val() + " Km" ;
            $(".selectedPrice7").text(selectedPrice7);
        });
        
        $(".priceRange8").on("input", function() {
            var selectedPrice8 = $(this).val() + " Km" ;
            $(".selectedPrice8").text(selectedPrice8);
        });
        
        $('#uploadForm').submit(function (event) {
            var property_type = $('#property_type').val();
            if(property_type === '') {
                alert('Property Type is Required'); 
                event.preventDefault();
            }
        });
        
        var property_select = document.getElementById("property_select").value;
        
        if(property_select=="Studio"){
            $("#aside_rooms").hide();
        } 
        $("#aside_rooms1").hide()
        $("#floor").hide()
        $(".floor2").hide()
        $(".offshare").hide()
        // $("#facilities_section").hide(); // We keep it visible but filter children
        ImgUpload();
        myFunction();
    });
    
    function myFunction() {
        var property_select = document.getElementById("property_select").value;
        
        if(property_select!="Studio"){
            $("#aside_rooms").show();
        }
        if(property_select=="Studio"){
            $("#aside_rooms").hide();
        }
        if(property_select=="Agricultural Land"||property_select=="Commercial Site"||property_select=="Development Land"||property_select=="Industrial Site"){
            $("#floor").show()
            $(".floor2").hide()
        }
        else if(property_select=="Industrial Unit"||property_select=="Investment Property"||property_select=="Office Share"||property_select=="Office Space"||
        property_select=="Restaurant / Bar / Hotel"||property_select=="Retail Unit"||property_select=="Serviced Office")
        {
            $(".floor2").show()
            
            if(property_select=="Office Share") {
                $(".offshare").show()
            } else {
                $(".offshare").hide()
            }
            $("#floor").hide()
        }

        // Filter facilities
        var anyVisible = false;
        $(".dynamic-facility").each(function() {
            var subcatsStr = $(this).attr("data-subcategories");
            if (!subcatsStr) {
                // If no subcategories assigned, assume it applies to all in this category
                $(this).show();
                anyVisible = true;
            } else {
                var subcats = subcatsStr.split(",");
                if (subcats.indexOf(property_select) !== -1) {
                    $(this).show();
                    anyVisible = true;
                } else {
                    $(this).hide();
                }
            }
        });

        if (anyVisible) {
            $("#facilities_section").show();
        } else {
            $("#facilities_section").hide();
        }
    }
    
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
        url: "/upload",
        init:function(){
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;

            submitButton.addEventListener('click', function(){
                myDropzone.processQueue();
            });

            this.on("complete", function(){
                if(this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) {
                    var _this = this;
                    _this.removeAllFiles();
                }
                load_images();
            });
        }
    };

    load_images();

    function load_images() {
        var prop_id=$('#property_id').val();
        
        $.ajax({
            data:{prop_id:prop_id},
            url:"{{ url('dropzonefetch') }}",
            success:function(data) {
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
        // Additional initialization if needed
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
    window.intlTelInput(input1, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
    window.intlTelInput(input2, {
        initialCountry: "auto",
        separateDialCode: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
    });
</script>

@endsection