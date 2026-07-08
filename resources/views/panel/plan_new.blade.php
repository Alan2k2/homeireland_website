<?php
// echo"<pre>";print_r($data);exit;
?>
@extends('layouts.panel.main')
@section('content')

<!-- CSS Styles -->
<style>
/* General Styles */
.sidebar{
    font-size: small;
    font-weight: 500;
}
a {
    text-decoration: none;
    color: white;
}

form {
    font-size: 10px;
}

input.larger {
    width: 20px;
    height: 20px;
}

.main-heading {
    /* font-weight: 800; */
    /* font-size: 15px; */
    /* color:red; */
}

/* Button Styles */
 .next{
        background-color: red;
        color: #fff;
         border: red;

    }
.next:hover{
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


.custom-button {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 20px; /* Adjust padding as needed */
    
}

/*added media query for next button for small and medium devices*/
@media (max-width: 1200px) and (min-width: 768px) {
    .custom-button {
        width: 90%; /* Adjust width for medium devices */
        float: right; /* Align to the right */
    }
}

@media (min-width: 400px)and (max-width: 768px) {
    .custom-button {
        width: 45%; /* Adjust width for small devices */
        float: right; /* Align to the right */
    }
}

@media (max-width: 400px) {
    .custom-button {
        width: 40%; /* Adjust width for very small devices */
        float: right; /* Align to the right */
    }
}

@media(max-width:768px){
       .nav-txt{
        height:80px;
    }
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

input[type='radio'] {
    transform: scale(2);
}

label {
    padding: 20px;
}

aside {
    border: 1px solid rgb(221, 221, 221);
    padding-left: 15px;
    border-radius: 4px;
}

.featured {
    font-size: 14px;
}


.button-section {
    display: flex;
    align-items: center;
    /* Reduced margin */
    margin: 15px 0;
}

.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    /* Reduced padding */
    padding: 0 10px; 
    /* Reduced margin */
    margin: 5px 0;
}

.button-container .btn {
    margin: 0 5px;
    text-align: center;
}

.left-align {
    justify-content: flex-start;
}

.right-align {
    justify-content: flex-end;
}

/* Card Styles */
.card {
    margin-bottom: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    transition: transform 0.3s ease;
    height: 100%;
}

.card-body {
    padding: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

.card-body h1 {
    font-size: 24px;
    margin-bottom: 15px;
    font-weight: 600;
}

.card-body ul {
    list-style-type: none;
    padding-left: 0;
    margin-bottom: auto;
}

.card-body ul li {
    margin-bottom: 10px;
    padding-left: 20px;
    position: relative;
}

.card-body ul li:before {
    content: "✓";
    position: absolute;
    left: 0;
    color: green;
    font-weight: bold;
}

/* Responsive Media Queries */
@media (max-width: 768px) {
    .custom-radio {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-bottom: 15px;
    }
    
    input.larger {
        width: 15px;
        height: 15px;
    }
    
    .nav-txt {
        height: 100px;
    }
    
    .button-container {
        justify-content: space-between;
    }
    
    .button-container .btn {
        margin: 0 5px;
    }
    
    .card-body h1 {
        font-size: 20px;
    }
    
    .custom-radio {
        justify-content: center;
        margin-top: 15px;
    }
}

/* Plan Selection Styles */
.plan-card {
    margin-bottom: 30px;
}

.plan-title {
    font-weight: 600;
    font-size: x-large;
}

.plan-price {
    float: right;
}

.plan-features {
    margin: 20px 0;
}

.plan-select {
    text-align: right;
    margin-top: auto;
}

.plan-select label {
    padding: 10px;
    cursor: pointer;
}

/* Navigation Tab Styles */
.tab {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.tab li {
    margin-bottom: 5px;
}

.tab li a {
    display: block;
    padding: 10px 15px;
    color: #333;
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.tab li a:hover {
    background-color: #f5f5f5;
}

.tab li.active a {
    background-color: #d3111a;
    color: white;
}

.tab li.active a b {
    color: white;
}

/* Alert Styles */
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.alert-success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

/* Form Styles */
.form-group {
    margin-bottom: 15px;
}

.form-control {
    display: block;
    width: 100%;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
}



.icon-link {
    position: relative;
}

.icon-link-hover:hover {
    text-decoration: none;
}

.brtop-30 {
    border-top: 30px solid transparent;
}

.brbottom-30 {
    border-bottom: 30px solid transparent;
}

.border-radius-3 {
    border-radius: 3px;
}

.font-roboto {
    font-family: 'Roboto', sans-serif;
}

.light {
    font-weight: 300;
}

.semi-bold {
    font-weight: 600;
}

.text-uppercase {
    text-transform: uppercase;
}

.clearfix::after {
    content: "";
    display: table;
    clear: both;
}

/* Progress Bar Styles */
.progress {
    height: 20px;
    margin-bottom: 20px;
    overflow: hidden;
    background-color: #f5f5f5;
    border-radius: 4px;
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}

.progress-bar {
    float: left;
    width: 0;
    height: 100%;
    font-size: 12px;
    line-height: 20px;
    color: #fff;
    text-align: center;
    background-color: #337ab7;
    box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
    transition: width 0.6s ease;
}

.property-step-progress-bar {
    background-color: #5cb85c;
}



@keyframes sk-rotateplane {
    0% { transform: perspective(120px) rotateX(0deg) rotateY(0deg); }
    50% { transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg); }
    100% { transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg); }
}

/* Responsive adjustments for the plan cards */
@media (max-width: 992px) {
    .featured {
        margin-bottom: 20px;
    }
}

@media (max-width: 576px) {
    .card-body h1 {
        font-size: 18px;
    }
    
    .custom-radio {
        justify-content: center;
        margin-top: 15px;
    }
    
    .plan-price {
        float: none;
        display: block;
        text-align: right;
        margin-top: 5px;
    }
}
</style>

<!-- External CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">

<!-- HTML Content -->
<div class="preloader">
    <div class="spinner"></div>
</div>

<section class="postWrapper clearfix">
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                <div class="clearfix lhs-post-links border-radius-3">
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-txt">
                        <p class="font-roboto light clearfix brtop-10">
                            <span class="progress-info-ico"></span>
                            <span class="progress-info">Please Complete your profile for more response</span>
                        </p>
                    </div>
                    <div class="expand text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="#" class="font-roboto regular"> Navigation</a>
                    </div>
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @php
                            $id = 1;
                            @endphp
                            <ul class="font-roboto light tab sidebar">
                                <li class="tablinks active" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        <b style="color:white"> Plan</b>
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" onclick="openCity(event,'event1',0)" id="eu0">
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
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Property Details
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
                                <li class="tablinks" id="eu6">
                                    <a href="{{url('media')}}">
                                        <span class="post-link-ico"></span>
                                        Media
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
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert"></button>
                    <strong>{{ $message }}</strong>
                </div>
                @endif

                <form name="myForm" method="get" action="{{url('basic')}}" id="uploadForm" enctype="multipart/form-data" onsubmit="return validateForm()">
                    @csrf
                    <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">
                    
                    @php
                    $a1 = $b = "";
                    if(isset($data)) {
                        if($data->subcription_type == 1) {
                            $a1 = "checked";
                        }
                        if($data->subcription_type == 2) {
                            $b = "checked";
                        }
                    }
                    @endphp
                    
                    <main style="border: 0px solid rgb(221, 221, 221);padding:10px">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h1 style="color: #d3111a;font-weight: 600;">Choose Your Plan</h1>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-top:2%">
                            <!-- Standard Plan -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 featured plan-card">
                                @php
                                // Fetch the STANDARD plan with payment_mode = 1
                                $standardPlan = $PropertySubscription->where('id', 2)->where('payment_mode', 1)->first();
                                @endphp
                                
                                @if($standardPlan)
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="plan-title">
                                            STANDARD 
                                            <span class="plan-price">
                                                @foreach($PropertySubscription->where('id',2)->values() as $a)
                                                {{ $a->Price}}€
                                                @endforeach
                                            </span>
                                        </h1>
                                        <hr class="mt-4 mb-4">
                                        <div class="plan-features">
                                            <ul>
                                                <li>90 days Live<span style="color:rgb(113, 113, 113)"></span></li>
                                            </ul>
                                        </div>
                                        <div class="plan-select">
                                            <div class="custom-radio">
                                                <input type="radio" class="larger" name="slot" id="slot" value="2" <?=$b?>>
                                                <label for="slot"><b>&nbsp;&nbsp;SELECT</b></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                            
                            <!-- Featured Plan -->
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 featured plan-card">
                                @php
                                // Fetch the FEATURED plan with payment_mode = 1
                                $featuredPlan = $PropertySubscription->where('id', 1)->where('payment_mode', 1)->first();
                                @endphp
                                
                                @if($featuredPlan)
                                <div class="card">
                                    <div class="card-body">
                                        <h1 class="plan-title">
                                            FEATURED 
                                            <span class="plan-price">
                                                @foreach($PropertySubscription->where('id',1)->values() as $a)
                                                {{ $a->Price}}€
                                                @endforeach
                                            </span>
                                        </h1>
                                        <hr class="mt-4 mb-4">
                                        <div class="plan-features">
                                            <ul>
                                                <li style="color:green"><b>3X MORE AD VIEWS</b></li>
                                                <li>Listed above all standard and agent ads</li>
                                                <li>Extra large ad format</li>
                                                <li>90 days Live<br/><span style="color:rgb(113, 113, 113)">(30 days as Featured then become Standard)</span></li>
                                            </ul>
                                        </div>
                                        <div class="plan-select">
                                            <div class="custom-radio">
                                                <input type="radio" class="larger" name="slot" value="1" id="slot2" <?=$a1?>>
                                                <label for="slot2"><b>&nbsp;&nbsp;SELECT</b></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        
                        <!-- Next Button -->
                        <section>
                               <div class="row">
                                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                       </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                       </div>
                                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                 <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto 
                            light icon-link-hover custom-btn" style="margin-left">
                            <b>NEXT
                    &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                            </div>
                                 
                            </div>
                           </section>
                    </main>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Hidden Template for Price -->
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

<!-- External JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Internal JavaScript -->
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
    function googleTagConversion(conversionType) {
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
    var _comscore = _comscore || [];
    _comscore.push({ c1: "2", c2: "7947673" });
    (function() {
        var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
        s.async = true;
        s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
        el.parentNode.insertBefore(s, el);
    })();
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
<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/lib/jquery-cbf84e7554.validate.min.js"></script>

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
        // Declare all variables
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
    $(document).ready(function() {
        $('.hidethree').hide();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    $('.amenities-block').click(function() {
        $(this).toggleClass('active');
        var amenity_name = $(this).text();
        var property_id = $('#property_id').val();
        $.ajax({
            url: 'property/save-amenities',
            method: 'POST',
            data: {property_id: property_id, amenity_name: amenity_name},
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

    $(document).ready(function () {
        $(".priceRange1").on("input", function () {
            var selectedPrice1 = $(this).val() + " Km";
            $(".selectedPrice1").text(selectedPrice1);
        });
        $(".priceRange2").on("input", function () {
            var selectedPrice2 = $(this).val() + " Km";
            $(".selectedPrice2").text(selectedPrice2);
        });
        $(".priceRange3").on("input", function () {
            var selectedPrice3 = $(this).val() + " Km";
            $(".selectedPrice3").text(selectedPrice3);
        });
        $(".priceRange4").on("input", function () {
            var selectedPrice4 = $(this).val() + " Km";
            $(".selectedPrice4").text(selectedPrice4);
        });
        $(".priceRange5").on("input", function () {
            var selectedPrice5 = $(this).val() + " Km";
            $(".selectedPrice5").text(selectedPrice5);
        });
        $(".priceRange6").on("input", function () {
            var selectedPrice6 = $(this).val() + " Km";
            $(".selectedPrice6").text(selectedPrice6);
        });
        $(".priceRange7").on("input", function () {
            var selectedPrice7 = $(this).val() + " Km";
            $(".selectedPrice7").text(selectedPrice7);
        });
        $(".priceRange8").on("input", function () {
            var selectedPrice8 = $(this).val() + " Km";
            $(".selectedPrice8").text(selectedPrice8);
        });
    });

    $(document).ready(function () {
        $('#uploadForm').submit(function (event) {
            var property_type = $('#property_type').val();
            if(property_type === '') {
                alert('Property Type is Required');
                event.preventDefault();
            }
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
                imgWrap = $(this).closest('.upload_box').find('.upload_img-wrap');
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
                                var html = "<div class='upload_img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".uploadimg-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload_img-close'></div></div></div>";
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

    Dropzone.options.dropzoneForm = {
        autoProcessQueue : true,
        acceptedFiles : ".png,.jpg,.gif,.bmp,.jpeg",
        addRemoveLinks: true,
        maxFiles: 10,
        parallelUploads: 20,
        url: "/upload", // Your upload URL
        init: function() {
            var submitButton = document.querySelector("#submit-all");
            myDropzone = this;

            submitButton.addEventListener('click', function() {
                myDropzone.processQueue();
            });

            this.on("complete", function() {
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
        var prop_id = $('#property_id').val();
        $.ajax({
            data: {prop_id: prop_id},
            url: "{{ url('dropzonefetch') }}",
            success: function(data) {
                $('#demo_img').hide();
                if(data == 0) {
                    $('#demo_img').show();
                    data = "";
                }
                $('#uploaded_image').html(data);
            }
        })
    }

    $(document).on('click', '.removefetchedimage', function() {
        var id = $(this).closest('.card').find('.img_id').val();
        $.ajax({
            url: "{{ url('removefetchedimage') }}",
            data: {id: id},
            success: function(data) {
                load_images();
            }
        })
    });

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
        // Any DOM ready functions can be added here
    });

    function validateForm() {
        if (!$('#slot').prop('checked')) {
            if (!$('#slot2').prop('checked')) {
                alert("Please Select Slot");
                return false;
            }
        }
    }

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