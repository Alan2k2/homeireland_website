@extends('layouts.panel.main')
@section('content')      
<section class="green-strip-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 page-title">
                        <h1 class="font-nunito regular">Property Basic Info</h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 page-breadcumb hidden-sm hidden-xs">
                        <ul class="font-roboto regular">
                            <li class="breadcrumb-item"><a href="https://www.helloaddress.com/nc" title="Home">Home</a></li>
                            <li class="breadcrumb-item"><a href="https://www.helloaddress.com/nc/myaccount">My Account</a></li>
                            <li class="breadcrumb-item active">Property Basic Info</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="postWrapper clearfix">


            <div class="">
                <div class="row">
                    @php
$currentYear = date("Y");
dd($currentYear);
@endphp
                                                                    </div>
                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30" style="background-color:#d3111a;">
                    <div class="clearfix lhs-post-links border-radius-3" >
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                            <div class="clearfix brtop-20">
                                <h3 class="font-nunito semi-bold text-uppercase">Completion Status</h3>
                            </div>
                            <div class="progress">
                                <div class="progress-bar property-step-progress-bar" role="progressbar" style="width: 33%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">33%</div>
                            </div>
                                                            <p class="font-roboto light clearfix brtop-10"><span class="progress-info-ico"></span><span class="progress-info">Please Complete your profile for more response</span></p>
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
                                                                    <li class="active tablinks" onclick="openCity(event, 'event1')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Basic            <span class="completed-tick"></span>                                            </a>
                                        </li>
                                                                    <li class="tablinks" onclick="openCity(event, 'event2')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Location                                                                                            </a>
                                        </li>
                                                                    <li class="tablinks" onclick="openCity(event, 'event3')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Profile                                                                                            </a>
                                        </li>
                                                                    <li class="tablinks" onclick="openCity(event, 'event4')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Details                                                                                            </a>
                                        </li>
                                                                            <li class="tablinks" onclick="openCity(event, 'event5')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Amenities                                                                                            </a>
                                        </li>
                                                                            <li class="tablinks" onclick="openCity(event, 'event6')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Distance From                                                <span class="completed-tick"></span>                                            </a>
                                        </li>
                                    
                                                                    </ul>
                            </div>

                   
                        </div>
                    </div>
                                                        </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                                    @if ($message = Session::get('success'))  
<div class="alert alert-success alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
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
                        <form method="POST" action="{{url('/panel/store-property')}}">
                         @csrf   
                        <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id">
                        <div class="row font-roboto regular tabcontent" id="event1">
                            <div style="display:flex;width: 100%;">
                            <h3 class="font-nunito regular brbottom-40">Basic Info</h3>
                            <button type="submit" class="btn btn-large yellow-btn font-roboto light brbottom-30" style="float:right;">Save</button>                               
                            </div>


                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30 field-wrap">
                                    <label class="text-uppercase el-required">Property Type</label><br>
                                    <div class="row">
                                                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                      <input class="hide" type="radio" value="RA" id="propertyTypeRA" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RA.png" alt="Residential Apartment">
                                                    <p class="font-roboto light">Residential Apartment</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center active">
                                                    <input class="hide" type="radio" value="RH" id="propertyTypeRH" name="propertyType" disabled="disabled"
                                                    checked="checked">
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RH.png" alt="Residential House/Villa">
                                                    <p class="font-roboto light">Residential House/Villa</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="RL" id="propertyTypeRL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RL.png" alt="Residential Land">
                                                    <p class="font-roboto light">Residential Land</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="RO" id="propertyTypeRO" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RO.png" alt="Residential Other">
                                                    <p class="font-roboto light">Residential Other</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="CS" id="propertyTypeCS" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CS.png" alt="Commercial Shop">
                                                    <p class="font-roboto light">Commercial Shop</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="CF" id="propertyTypeCF" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CF.png" alt="Commercial Office">
                                                    <p class="font-roboto light">Commercial Office</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="CL" id="propertyTypeCL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CL.png" alt="Commercial Land">
                                                    <p class="font-roboto light">Commercial Land</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="CB" id="propertyTypeCB" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CB.png" alt="Commercial Building">
                                                    <p class="font-roboto light">Commercial Building</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="CO" id="propertyTypeCO" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CO.png" alt="Commercial Other">
                                                    <p class="font-roboto light">Commercial Other</p>
                                                </div>
                                            </div>
                                           <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="IB" id="propertyTypeIB" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/IB.png" alt="Industrial Building">
                                                    <p class="font-roboto light">Industrial Building</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="IL" id="propertyTypeIL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/IL.png" alt="Industrial Land">
                                                    <p class="font-roboto light">Industrial Land</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center ">
                                                    <input class="hide" type="radio" value="AL" id="propertyTypeAL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/AL.png" alt="Agricultural Land">
                                                    <p class="font-roboto light">Agricultural Land</p>
                                                </div>
                                            </div>
                                                                            </div>
                                                                    </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap" data-el-name="section-transaction-types">
                                            <label class="text-uppercase brbottom-20 el-required">Transaction Type</label><br>
                                                 <div class="radio radio-inline">
                                                    <input type="radio" value="Sell" id="transactionTypeS" name="transaction_type" data-el-name="transaction-type"
                                                                                                        checked="checked">
                                                    <label for="transactionTypeS">Sell</label>
                                                </div>
                                                                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Rent" id="transactionTypeR" name="transaction_type" data-el-name="transaction-type">
                                                                                                        
                                                    <label for="transactionTypeR">Rent</label>
                                                </div>
                                                                                                                                </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap">
                                            <label class="text-uppercase brbottom-20 el-required">Ownership Type</label><br>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Single" id="ownershipTypeS" name="ownershipType"
                                                                                                        checked="checked">
                                                    <label for="ownershipTypeS">Single</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Joint" id="ownershipTypeJ" name="ownership_type"
                                                                                                        >
                                                    <label for="ownershipTypeJ">Joint</label>
                                                </div>
                                                                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Trust" id="ownershipTypeT" name="ownership_type"
                                                                                                        >
                                                    <label for="ownershipTypeT">Trust</label>
                                                </div>
                                                                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Other" id="ownershipTypeO" name="ownership_type"
                                                                                                        >
                                                    <label for="ownershipTypeO">Other</label>
                                                </div>
                                                                                                                                </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20" data-el-name="section-price">
                                            <label class="text-uppercase brbottom-20 el-required" for="totalPrice">Price - Sell</label><br>
                                            <div class="form-group field-wrap">
                                                <select class="form-control border-radius-3 field-total-price" id="totalPrice" name="price"
                                                    >
                                                    <option value="">-- Select --</option>
                                                    <option value="0-0" >Price not provided</option>
<option value="100000-500000"  selected="selected">1 Lac to 5 Lac</option>
<option value="500000-1000000" >5 Lac to 10 Lac</option>
<option value="1000000-1500000" >10 Lac to 15 Lac</option>
<option value="1500000-2000000" >15 Lac to 20 Lac</option>
<option value="2000000-2500000" >20 Lac to 25 Lac</option>
<option value="2500000-3000000" >25 Lac to 30 Lac</option>
<option value="3000000-3500000" >30 Lac to 35 Lac</option>
<option value="3500000-4000000" >35 Lac to 40 Lac</option>
<option value="4000000-4500000" >40 Lac to 45 Lac</option>
<option value="4500000-5000000" >45 Lac to 50 Lac</option>
<option value="5000000-5500000" >50 Lac to 55 Lac</option>
<option value="5500000-6000000" >55 Lac to 60 Lac</option>
<option value="6000000-6500000" >60 Lac to 65 Lac</option>
<option value="6500000-7000000" >65 Lac to 70 Lac</option>
<option value="7000000-7500000" >70 Lac to 75 Lac</option>
<option value="7500000-8000000" >75 Lac to 80 Lac</option>
<option value="8000000-8500000" >80 Lac to 85 Lac</option>
<option value="8500000-9000000" >85 Lac to 90 Lac</option>
<option value="9000000-9500000" >90 Lac to 95 Lac</option>
<option value="9500000-10000000" >95 Lac to 1 Crore</option>
<option value="10000000-12000000" >1 Crore to 1.2 Crore</option>
<option value="12000000-14000000" >1.2 Crore to 1.4 Crore</option>
<option value="14000000-16000000" >1.4 Crore to 1.6 Crore</option>
<option value="16000000-18000000" >1.6 Crore to 1.8 Crore</option>
<option value="18000000-20000000" >1.8 Crore to 2 Crore</option>
<option value="20000000-23000000" >2 Crore to 2.3 Crore</option>
<option value="23000000-26000000" >2.3 Crore to 2.6 Crore</option>
<option value="26000000-30000000" >2.6 Crore to 3 Crore</option>
<option value="30000000-35000000" >3 Crore to 3.5 Crore</option>
<option value="35000000-40000000" >3.5 Crore to 4 Crore</option>
<option value="40000000-45000000" >4 Crore to 4.5 Crore</option>
<option value="45000000-50000000" >4.5 Crore to 5 Crore</option>
<option value="50000000-55000000" >5 Crore to 5.5 Crore</option>
<option value="55000000-60000000" >5.5 Crore to 6 Crore</option>
<option value="60000000-65000000" >6 Crore to 6.5 Crore</option>
<option value="65000000-70000000" >6.5 Crore to 7 Crore</option>
<option value="70000000-75000000" >7 Crore to 7.5 Crore</option>
<option value="75000000-80000000" >7.5 Crore to 8 Crore</option>
<option value="80000000-85000000" >8 Crore to 8.5 Crore</option>
<option value="85000000-90000000" >8.5 Crore to 9 Crore</option>
<option value="90000000-95000000" >9 Crore to 9.5 Crore</option>
<option value="95000000-100000000" >9.5 Crore to 10 Crore</option>
<option value="100000001-100000001" >Above 10 crore</option>
                                                </select>
                                                                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap">
                                            <label class="text-uppercase brbottom-20 el-required">Display Price</label><br>
                                            <div class="radio radio-inline">
                                                <input type="radio" value="true" name="displayPrice" id="displayPriceY"
                                                                                                checked="checked">
                                                <label for="displayPriceY">Yes</label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" value="false" name="display_price" id="displayPriceN"
                                                                                                >
                                                <label for="displayPriceN">No</label>
                                            </div>
                                                                                    </div>
                                    </div>
                                </div>
                            
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <button type="submit" class="btn btn-large yellow-btn font-roboto light brbottom-30">Save &amp; Continue</button>
                                </div>
                            
                        </div>
                        <div class="row font-roboto regular tabcontent nexttab" id="event2" >
<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Country</label>
      <select class="form-control" id="countryId" name="countryId" data-gmap-addr-donator="5">
        <option value="1" selected="selected">India</option>
      </select>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Province</label>
      <select class="form-control" id="countryId" name="state" data-gmap-addr-donator="5">
        <option value="Connacht" >Connacht</option>
        <option value="Ulster" >Ulster</option>
        <option value="Munster" >Munster</option>
        <option value="Leinster" >Leinster</option>
    
      </select>
    </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Area</label>
     <input class="form-control valid" type="text" value="" data-gmap-addr-donator="0" id="street" name="area" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Street</label>
     <input class="form-control valid" type="text" value="" data-gmap-addr-donator="0" id="street" name="street" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>  

</div>

                                 <button type="submit">Save</button>
                              
                                  <div class="row font-roboto regular tabcontent nexttab" id="event3" >
  <div class="row font-roboto regular">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 brbottom-30">
                                    <label class="text-uppercase" for="propertyAddress">
                                        Property Address                                                                            </label>
                                    <textarea class="form-control noResize" rows="8" id="propertyAddress" name="propertyAddress"></textarea>
                                                                    </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">

                                    <label class="text-uppercase el-required" for="emailAddress">Email Address</label>
                                    <input class="form-control" type="text" value="" id="emailAddress" name="emailAddress">
                                                                    </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                                    <label class="text-uppercase el-required" for="confirmEmailAddress">Confirm Email Address</label>
                                    <input class="form-control" type="text" value="" id="confirmEmailAddress" name="confirmEmailAddress">
                                                                    </div>
                                 <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">

                                    <label class="text-uppercase el-required" for="emailAddress">Phone Number</label>
                                    <input class="form-control" type="text" value="" id="emailAddress" name="emailAddress">
                                                                    </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                                    <label class="text-uppercase el-required" for="confirmEmailAddress">Landline Number</label>
                                    <input class="form-control" type="text" value="" id="confirmEmailAddress" name="confirmEmailAddress">
                                                                    </div>                                                                   
                            
                        </div>                                  
                                  </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event4" >
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="builtArea">Built Area</label>
                    <input class="form-control" type="text" value="" id="builtArea" name="built_area">                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="builtAreaUnit">Built Area Unit</label>
                    <select class="form-control" id="builtAreaUnit" name="built_area_unit">
                        <option value="">-- Select --</option>
                        <option value="SQT">Sq-ft</option>
                        <option value="SQM">Sq-m</option>
                        <option value="SQD">Sq-Yrd</option>
                    </select>                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="plotArea">Plot Area</label>
                    <input class="form-control" type="text" value="" id="plotArea" name="plot_area">                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="plotAreaUnit">Plot Area Unit</label>
                    <select class="form-control" id="plotAreaUnit" name="plot_area_unit">
                        <option value="">-- Select --</option>
                        <option value="SQT">Sq-ft</option>
                        <option value="SQM">Sq-m</option>
                        <option value="SQD">Sq-Yrd</option>
                        <option value="ACR">Acre</option>
                        <option value="BHA">Bigha</option>
                        <option value="HCR">Hectare</option>
                        <option value="MRL">Marla</option>
                        <option value="KNL">Kanal</option>
                        <option value="BW1">Biswa1</option>
                        <option value="GRD">Ground</option>
                        <option value="AKM">Aankadam</option>
                        <option value="ROD">Rood</option>
                        <option value="CTK">Chatak</option>
                        <option value="KOH">Kottah</option>
                        <option value="CNT">Cent</option>
                        <option value="PRH">Perch</option>
                        <option value="GNA">Guntha</option>
                        <option value="ARE">Are</option>
                    </select>                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="bedrooms">Bedrooms</label>
                    <select class="form-control" id="bedrooms" name="bedrooms">
                        <option value="">-- Select --</option>
                        <option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
                    </select>                                
                                    </div>
                <div class=">-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label class="text-uppercase" for="bathrooms">Bathrooms</label>
                    <select class="form-control" id="bathrooms" name="bathrooms">
                        <option value="">-- Select --</option>
                        <option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
                    </select>                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="constructedYear">Constructed Year</label>
                    <select class="form-control" id="constructedYear" name="constructed_year" data-el-name="constructed-year">
                        <option value="">-- Select --</option>
                        <option value="1">Under Construction</option>
       @if(isset($data))
       @for($i = 1950; $i <= 2024; $i++)
        <option value="{{ $i }}" {{ $data->constructed_year == $i ? 'selected' : '' }}>{{ $i }}</option>
    @endfor

       @else
       @for($i = 1950; $i <= 2024; $i++)
       <option value="{{$i}}">"{{$i}}"</option>
    @endfor
  
       @endif                 

                    </select>                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <label class="text-uppercase" for="readyToMove">Ready To Move</label><br>
    <div class="radio radio-inline">
        <input type="radio" value="Y" name="readyToMove" id="readyToMoveY" data-el-name="ready-to-move">
        <label for="readyToMoveY">Yes</label>
    </div>
    <div class="radio radio-inline">
        <input type="radio" value="N" name="readyToMove" id="readyToMoveN" data-el-name="ready-to-move">
        <label for="readyToMoveN">No</label>
    </div> 
</div>

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-large yellow-btn font-roboto light brbottom-30">Save &amp; Continue</button>
                </div>
                                   </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event5" >
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="electricityBackup" id="electricityBackup">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/electricity-backup-ico.png" alt="Electricity backup"> Electricity backup                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="lift" id="lift">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/elivator-ico.png" alt="Lift"> Lift                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="healthClub" id="healthClub">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/health-club-ico.png" alt="Health club"> Health club                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="clubHouse" id="clubHouse">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/club-house-ico.png" alt="Club house"> Club house                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="swimmingPool" id="swimmingPool">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/pool-ico.png" alt="Swimming pool"> Swimming pool                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="joggingTrack" id="joggingTrack">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/jogging-track-ico.png" alt="Jogging Track"> Jogging Track                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="shoppingArea" id="shoppingArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/shopping-area-ico.png" alt="Shopping Area"> Shopping Area                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="security" id="security">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/security-ico.png" alt="Security"> Security                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="laundryService" id="laundryService">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/laundry-ico.png" alt="Laundry Service"> Laundry Service                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="waterStorage" id="waterStorage">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/water-storage-ico.png" alt="Water Storage"> Water Storage                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="childrensPlayArea" id="childrensPlayArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/play-area-ico.png" alt="Children's PlayArea"> Children's PlayArea                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="servantsBathroom" id="servantsBathroom">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/servent-bathroom-ico.png" alt="Servant's Bathroom"> Servant's Bathroom                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="auditorium" id="auditorium">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/auditoriam-ico.png" alt="Auditorium"> Auditorium                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="centralizedGas" id="centralizedGas">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/centralized-gas-ico.png" alt="Centralized Gas"> Centralized Gas                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="visitorParking" id="visitorParking">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/visitors-parking-ico.png" alt="Visitor Parking"> Visitor Parking                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="gymnasium" id="gymnasium">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/gym-ico.png" alt="Gymnasium"> Gymnasium                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click ">
                        <input class="hide" type="checkbox" value="Y" name="wasteDisposal" id="wasteDisposal">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/waste-disposal-ico.png" alt="Waste Disposal"> Waste Disposal                        </p>
                    </div>
                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button type="submit" class="btn btn-large yellow-btn font-roboto light brbottom-30">Save &amp; Continue</button>
                </div>
                                                        </div>    
                                                            </form>                  
                    </div>
                    <script type="text/html" id="tmpl-price">
                        <label class="text-uppercase brbottom-20 el-required" for="totalPrice">Price - <%= record.label %></label><br>
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
        </section>

@endsection