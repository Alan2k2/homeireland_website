@extends('layouts.panel.main')

@section('content')     
       <section class="green-strip-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 page-title">
                        <h1 class="font-nunito regular">Add Property</h1>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 page-breadcumb hidden-sm hidden-xs">
                        <ul class="font-roboto regular">
                             <li class="breadcrumb-item"><a href="{{url('/')}}" title="Home">Home</a></li>            
                             <li class="breadcrumb-item">
                                <a href="{{url('panel/dashboard')}}" title="Home">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item active">Manage Property</li>
                        </ul>
                    </div> 
                </div>
            </div>
        </section>

        <section class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                    <div class="clearfix lhs-post-links border-radius-3">
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
                                                Basic
                                                <span class="completed-tick"></span>                                            </a>
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
         
                                         <li class="tablinks" onclick="openCity(event, 'event7')">
                                            <a>
                                                <span class="post-link-ico"></span>
                                                Gallery                
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
                        <form method="POST" action="{{url('/panel/store-slots')}}" id="uploadForm" enctype="multipart/form-data">
                          @csrf   
                        <input type="hidden" value="{{isset($data)?$data->id:''}}" name="slot_id" id="slot_id">

                        <input type="hidden" id="latitude" name="latitude">
                        <input type="hidden" id="longitude" name="longitude">
                        <div class="row font-roboto regular tabcontent" id="event1">
                                             <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Basic Info</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <button type="button" onclick="openCity(event, 'event2')" class="btn btn-large yellow-btn font-roboto light brbottom-30">Next </button>

                            </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30 field-wrap">
                                    <label class="text-uppercase el-required">
                                        Slot Type</label><br>
                                    <input type="hidden" name="property_type" value="{{isset($data)?$data->property_type:''}}" id="property_type">
                                    @if(isset($data))
                                    <div class="row">
                                                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='For Cars'?'active':''}}">
                                      <input class="hide" type="radio" value="RA" id="propertyTypeRA" name="propertyType" disabled="disabled" >
                                        <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RA.png" alt="Residential Apartment">
                                                    <p class="font-roboto light">For Cars</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='For Bikes'?'active':''}}">
                                                    <input class="hide" type="radio" value="RH" id="propertyTypeRH" name="propertyType" disabled="disabled"
                                                    checked="checked">
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RH.png" alt="Residential House/Villa">
                                                    <p class="font-roboto light">For Bikes</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='For Trucks and buses'?'active':''}}">
                                                    <input class="hide" type="radio" value="RL" id="propertyTypeRL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RL.png" alt="Residential Land">
                                                    <p class="font-roboto light">For Trucks and buses</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='Other'?'active':''}}">
                                                    <input class="hide" type="radio" value="RO" id="propertyTypeRO" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RO.png" alt="Residential Other">
                                                    <p class="font-roboto light">Other</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='Containers'?'active':''}}">
                                                    <input class="hide" type="radio" value="CS" id="propertyTypeCS" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CS.png" alt="Commercial Shop">
                                                    <p class="font-roboto light">Containers</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center {{$data->slot_type=='Any Others'?'active':''}}">
                                                    <input class="hide" type="radio" value="CF" id="propertyTypeCF" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CF.png" alt="Commercial Office">
                                                    <p class="font-roboto light">Any Others</p>
                                                </div>
                                            </div>
                                                     
                                                                            </div>
                                @else
                                     <div class="row">
                                                                                <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                      <input class="hide" type="radio" value="RA" id="propertyTypeRA" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RA.png" alt="Residential Apartment">
                                                    <p class="font-roboto light">For Cars</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                                    <input class="hide" type="radio" value="RH" id="propertyTypeRH" name="propertyType" disabled="disabled"
                                                    checked="checked">
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RH.png" alt="Residential House/Villa">
                                                    <p class="font-roboto light">For Bikes</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                                    <input class="hide" type="radio" value="RL" id="propertyTypeRL" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RL.png" alt="Residential Land">
                                                    <p class="font-roboto light">For Trucks and buses</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                                    <input class="hide" type="radio" value="RO" id="propertyTypeRO" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/RO.png" alt="Residential Other">
                                                    <p class="font-roboto light">Other</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                                    <input class="hide" type="radio" value="CS" id="propertyTypeCS" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CS.png" alt="Commercial Shop">
                                                    <p class="font-roboto light">Containers</p>
                                                </div>
                                            </div>
                                                                                    <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 brtop-20">
                                                <div class="property-type border-radius-3 clearfix text-center">
                                                    <input class="hide" type="radio" value="CF" id="propertyTypeCF" name="propertyType" disabled="disabled"
                                                    >
                                                    <a href="javascript:void(0);"></a>
                                                    <img src="https://assets.helloaddress.com/ui/build/images/CF.png" alt="Commercial Office">
                                                    <p class="font-roboto light">Any Others</p>
                                                </div>
                                            </div>
                                              
                                                                            </div>                               
                                @endif
                                                                    </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap" data-el-name="section-transaction-types">
                                            <label class="text-uppercase brbottom-20 el-required">Transaction Type</label><br>
                                            @if(isset($data))
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Sell" id="transactionTypeS" name="transaction_type" data-el-name="transaction-type" {{$data->transaction_type=='Sell'?'checked':''}}>
                                                    <label for="transactionTypeS">Sell</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Rent" id="transactionTypeR" name="transaction_type" data-el-name="transaction-type" {{$data->transaction_type=='Rent'?'checked':''}}>                                                        
                                                    <label for="transactionTypeR">Rent</label>
                                                </div>
                                                @else
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Sell" id="transactionTypeS" name="transaction_type" data-el-name="transaction-type">
                                                    <label for="transactionTypeS">Sell</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Rent" id="transactionTypeR" name="transaction_type" data-el-name="transaction-type" >                                                        
                                                    <label for="transactionTypeR">Rent</label>
                                                </div>
                                                @endif                                                                         </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap">
                                            <label class="text-uppercase brbottom-20 el-required">Ownership Type</label><br>
                                            @if(isset($data))
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Single" id="ownershipTypeS" name="ownership_type"
                                                                                                        {{$data->ownership_type=='Single'?'checked':''}}>
                                                    <label for="ownershipTypeS">Single</label>
                                                </div>
                                                <div class="radio radio-inline">
                                                    <input type="radio" value="Joint" id="ownershipTypeJ" name="ownership_type"
                                                                                                       {{$data->ownership_type=='Joint'?'checked':''}} >
                                                    <label for="ownershipTypeJ">Joint</label>
                                                </div>
                                                                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Trust" id="ownershipTypeT" name="ownership_type"
                                                                                                     {{$data->ownership_type=='Trust'?'checked':''}}   >
                                                    <label for="ownershipTypeT">Trust</label>
                                                </div>
                                                                                            <div class="radio radio-inline">
                                                    <input type="radio" value="Other" id="ownershipTypeO" name="ownership_type"
                                                                                                      {{$data->ownership_type=='Other'?'checked':''}}  >
                                                    <label for="ownershipTypeO">Other</label>
                                                </div>
                                                @else
                                                 <div class="radio radio-inline">
                                                    <input type="radio" value="Single" id="ownershipTypeS" name="ownership_type"
                                                                                                        >
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
                                                @endif
                                                                                                                                </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-30">
                                    <div class="row">
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20" data-el-name="section-price">
                                         <label class="text-uppercase brbottom-20 el-required" for="totalPrice">Price - Sell</label><br>
                                         <div class="form-group field-wrap">
                                          <input type="text" class="form-control" value="{{isset($data)?$data->price:''}}" name="price">
                                         </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap">
                                
                                         </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20">
                                    <div class="form-group field-wrap">
                                        <label class="text-uppercase brbottom-10 el-required" for="propertyDescription">Description
                                        <span class="badge pending font-roboto light">Under approval</span>
                                        </label>
                                        <textarea class="form-control verticalResize" rows="7" id="propertyDescription" name="description">
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
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="text-uppercase brbottom-20 el-required">List Image</label><br>
    
                                    <div class="row">
                                        <div class="col-md-6">
                                         <input type="file" name="list_image" id="fileInput" accept="image/*">
                                        
                                        </div>
                                         <div class="col-md-6">
                    @if(isset($data->image))
                    <img src="{{asset('uploads/properties/'.$data->image)}}" id="imagePreview" alt="Image"  />
                    @else
                    <img src="{{asset('website/images/no-image.jpg')}}" id="imagePreview" alt="Image"  />    
                    @endif                             
                                            @if(isset($data->image))
                   <img id="imagePreview" src="{{asset('uploads/properties'.$data->image)}}" alt="Image Preview" style="max-width: 300px; display: none;">
                                            @else
                   <img id="imagePreview" src="#" alt="Image Preview" style="max-width: 300px; display: none;">
                                           

                               @endif
                                         
                                        </div>                                       
                                        
                                    </div>
                                </div>
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="text-uppercase brbottom-20 el-required">Banner Image</label><br>
    
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
                                </div>                               
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 
                                </div>
                            
                        </div>
                        <div class="row font-roboto regular tabcontent nexttab" id="event2" >
                                                                         <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Location</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                     <button type="button" onclick="openCity(event, 'event3')" class="btn btn-large yellow-btn font-roboto light brbottom-30">Next </button>
                                                                   

                            </div>
<div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Country</label>
      <select class="form-control" id="countryId" name="countryId" data-gmap-addr-donator="5">
        <option value="1" selected="selected">Ireland</option>
      </select>
    </div>
    <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Province</label>
      <select class="form-control" id="countryId" name="province" data-gmap-addr-donator="5">
        @if(isset($data))
        <option value="Connacht" {{$data->province=='Connacht'?'selected':''}}>Connacht</option>
        <option value="Ulster" {{$data->province=='Ulster'?'selected':''}}>Ulster</option>
        <option value="Munster" {{$data->province=='Munster'?'selected':''}}>Munster</option>
        <option value="Leinster" {{$data->province=='Leinster'?'selected':''}}>Leinster</option> 
        @else
        <option value="Connacht">Connacht</option>
        <option value="Ulster">Ulster</option>
        <option value="Munster">Munster</option>
        <option value="Leinster">Leinster</option>       
        @endif

      </select>
    </div>

        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Area</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->area:''}}" data-gmap-addr-donator="0" id="street" name="area" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>
        <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
      <label class="text-uppercase el-required" for="countryId">Street</label>
     <input class="form-control valid" type="text" value="{{isset($data)?$data->street:''}}" data-gmap-addr-donator="0" id="street" name="street" data-gtm-form-interact-field-id="0" aria-invalid="false">
    </div>  

</div>

                              
                         <div class="row font-roboto regular tabcontent nexttab" id="event3" >
                            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Profile</h3>                                        
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <button type="button" onclick="openCity(event, 'event4')" class="btn btn-large yellow-btn font-roboto light brbottom-30">Next
                            </button>
                            </div>             
                        <div class="row font-roboto regular">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12 brbottom-30">
                                    <label class="text-uppercase" for="propertyAddress">
                                        Property Address</label>
                                    <textarea class="form-control noResize" rows="8" id="propertyAddress" name="address">{{isset($data)?$data->address:''}}</textarea>
                                                                    </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">

                                    <label class="text-uppercase el-required" for="emailAddress">Email Address</label>
                                    <input class="form-control" type="text" value="{{isset($data)?$data->email:''}}" id="emailAddress" name="email">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                                    <label class="text-uppercase el-required" for="confirmEmailAddress">Phone</label>
                                    <input class="form-control" type="text" value="{{isset($data)?$data->phone:''}}" id="confirmEmailAddress" name="phone">
                                </div>
                    
                             
                            
                        </div>                                  
                                  </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event4" >
                                                                                 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Details</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <button type="button" onclick="openCity(event, 'event7')" class="btn btn-large yellow-btn font-roboto light brbottom-30">Next </button>

                            </div>
               
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="plotArea">Plot Area</label>
                    <input class="form-control" type="text" value="{{isset($data)?$data->plot_area:''}}" id="plotArea" name="plot_area">                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="plotAreaUnit">Plot Area Unit</label>
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
             
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12 field-wrap">
                    <label class="text-uppercase el-required" for="constructedYear">Constructed Year</label>
                    <select class="form-control" id="constructedYear" name="constructed_year" data-el-name="constructed-year">
                        <option value="">-- Select --</option>
                        <option value="1">Under Construction</option>
       @if(isset($data))
<option value="1950" {{$data->constructed_year=='1950'?'selected':''}}>1950</option>
<option value="1951" {{$data->constructed_year=='1951'?'selected':''}}>1951</option>
<option value="1952" {{$data->constructed_year=='1952'?'selected':''}}>1952</option>
<option value="1953" {{$data->constructed_year=='1953'?'selected':''}}>1953</option>
<option value="1954" {{$data->constructed_year=='1954'?'selected':''}}>1954</option>
<option value="1955" {{$data->constructed_year=='1955'?'selected':''}}>1955</option>
<option value="1956" {{$data->constructed_year=='1956'?'selected':''}}>1956</option>
<option value="1957" {{$data->constructed_year=='1957'?'selected':''}}>1957</option>
<option value="1958" {{$data->constructed_year=='1958'?'selected':''}}>1958</option>
<option value="1959" {{$data->constructed_year=='1959'?'selected':''}}>1959</option>
<option value="1960" {{$data->constructed_year=='1960'?'selected':''}}>1960</option>
<option value="1961" {{$data->constructed_year=='1961'?'selected':''}}>1961</option>
<option value="1962" {{$data->constructed_year=='1962'?'selected':''}}>1962</option>
<option value="1963" {{$data->constructed_year=='1963'?'selected':''}}>1963</option>
<option value="1964" {{$data->constructed_year=='1964'?'selected':''}}>1964</option>
<option value="1965" {{$data->constructed_year=='1965'?'selected':''}}>1965</option>
<option value="1966" {{$data->constructed_year=='1966'?'selected':''}}>1966</option>
<option value="1967" {{$data->constructed_year=='1967'?'selected':''}}>1967</option>
<option value="1968" {{$data->constructed_year=='1968'?'selected':''}}>1968</option>
<option value="1969" {{$data->constructed_year=='1969'?'selected':''}}>1969</option>
<option value="1970" {{$data->constructed_year=='1970'?'selected':''}}>1970</option>
<option value="1971" {{$data->constructed_year=='1971'?'selected':''}}>1971</option>
<option value="1972" {{$data->constructed_year=='1972'?'selected':''}}>1972</option>
<option value="1973" {{$data->constructed_year=='1973'?'selected':''}}>1973</option>
<option value="1974" {{$data->constructed_year=='1974'?'selected':''}}>1974</option>
<option value="1975" {{$data->constructed_year=='1975'?'selected':''}}>1975</option>
<option value="1976" {{$data->constructed_year=='1976'?'selected':''}}>1976</option>
<option value="1977" {{$data->constructed_year=='1977'?'selected':''}}>1977</option>
<option value="1978" {{$data->constructed_year=='1978'?'selected':''}}>1978</option>
<option value="1979" {{$data->constructed_year=='1979'?'selected':''}}>1979</option>
<option value="1980" {{$data->constructed_year=='1980'?'selected':''}}>1980</option>
<option value="1981" {{$data->constructed_year=='1981'?'selected':''}}>1981</option>
<option value="1982" {{$data->constructed_year=='1982'?'selected':''}}>1982</option>
<option value="1983" {{$data->constructed_year=='1983'?'selected':''}}>1983</option>
<option value="1984" {{$data->constructed_year=='1984'?'selected':''}}>1984</option>
<option value="1985" {{$data->constructed_year=='1985'?'selected':''}}>1985</option>
<option value="1986" {{$data->constructed_year=='1986'?'selected':''}}>1986</option>
<option value="1987" {{$data->constructed_year=='1987'?'selected':''}}>1987</option>
<option value="1988" {{$data->constructed_year=='1988'?'selected':''}}>1988</option>
<option value="1989" {{$data->constructed_year=='1989'?'selected':''}}>1989</option>
<option value="1990" {{$data->constructed_year=='1990'?'selected':''}}>1990</option>
<option value="1991" {{$data->constructed_year=='1991'?'selected':''}}>1991</option>
<option value="1992" {{$data->constructed_year=='1992'?'selected':''}}>1992</option>
<option value="1993" {{$data->constructed_year=='1993'?'selected':''}}>1993</option>
<option value="1994" {{$data->constructed_year=='1994'?'selected':''}}>1994</option>
<option value="1995" {{$data->constructed_year=='1995'?'selected':''}}>1995</option>
<option value="1996" {{$data->constructed_year=='1996'?'selected':''}}>1996</option>
<option value="1997" {{$data->constructed_year=='1997'?'selected':''}}>1997</option>
<option value="1998" {{$data->constructed_year=='1998'?'selected':''}}>1998</option>
<option value="1999" {{$data->constructed_year=='1999'?'selected':''}}>1999</option>
<option value="2000" {{$data->constructed_year=='2000'?'selected':''}}>2000</option>
<option value="2001" {{$data->constructed_year=='2001'?'selected':''}}>2001</option>
<option value="2002" {{$data->constructed_year=='2002'?'selected':''}}>2002</option>
<option value="2003" {{$data->constructed_year=='2003'?'selected':''}}>2003</option>
<option value="2004" {{$data->constructed_year=='2004'?'selected':''}}>2004</option>
<option value="2005" {{$data->constructed_year=='2005'?'selected':''}}>2005</option>
<option value="2006" {{$data->constructed_year=='2006'?'selected':''}}>2006</option>
<option value="2007" {{$data->constructed_year=='2007'?'selected':''}}>2007</option>
<option value="2008" {{$data->constructed_year=='2008'?'selected':''}}>2008</option>
<option value="2009" {{$data->constructed_year=='2009'?'selected':''}}>2009</option>
<option value="2010" {{$data->constructed_year=='2010'?'selected':''}}>2010</option>
<option value="2011" {{$data->constructed_year=='2011'?'selected':''}}>2011</option>
<option value="2012" {{$data->constructed_year=='2012'?'selected':''}}>2012</option>
<option value="2013" {{$data->constructed_year=='2013'?'selected':''}}>2013</option>
<option value="2014" {{$data->constructed_year=='2014'?'selected':''}}>2014</option>
<option value="2015" {{$data->constructed_year=='2015'?'selected':''}}>2015</option>
<option value="2016" {{$data->constructed_year=='2016'?'selected':''}}>2016</option>
<option value="2017" {{$data->constructed_year=='2017'?'selected':''}}>2017</option>
<option value="2018" {{$data->constructed_year=='2018'?'selected':''}}>2018</option>
<option value="2019" {{$data->constructed_year=='2019'?'selected':''}}>2019</option>
<option value="2020" {{$data->constructed_year=='2020'?'selected':''}}>2020</option>
<option value="2021" {{$data->constructed_year=='2021'?'selected':''}}>2021</option>
<option value="2022" {{$data->constructed_year=='2022'?'selected':''}}>2022</option>
<option value="2023" {{$data->constructed_year=='2023'?'selected':''}}>2023</option>       
       @else
<option value="1950">1950</option>
<option value="1951">1951</option>
<option value="1952">1952</option>
<option value="1953">1953</option>
<option value="1954">1954</option>
<option value="1955">1955</option>
<option value="1956">1956</option>
<option value="1957">1957</option>
<option value="1958">1958</option>
<option value="1959">1959</option>
<option value="1960">1960</option>
<option value="1961">1961</option>
<option value="1962">1962</option>
<option value="1963">1963</option>
<option value="1964">1964</option>
<option value="1965">1965</option>
<option value="1966">1966</option>
<option value="1967">1967</option>
<option value="1968">1968</option>
<option value="1969">1969</option>
<option value="1970">1970</option>
<option value="1971">1971</option>
<option value="1972">1972</option>
<option value="1973">1973</option>
<option value="1974">1974</option>
<option value="1975">1975</option>
<option value="1976">1976</option>
<option value="1977">1977</option>
<option value="1978">1978</option>
<option value="1979">1979</option>
<option value="1980">1980</option>
<option value="1981">1981</option>
<option value="1982">1982</option>
<option value="1983">1983</option>
<option value="1984">1984</option>
<option value="1985">1985</option>
<option value="1986">1986</option>
<option value="1987">1987</option>
<option value="1988">1988</option>
<option value="1989">1989</option>
<option value="1990">1990</option>
<option value="1991">1991</option>
<option value="1992">1992</option>
<option value="1993">1993</option>
<option value="1994">1994</option>
<option value="1995">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>      
       @endif                 

                    </select>                                
                                    </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label class="text-uppercase" for="readyToMove">Ready To Move</label><br>
                    <div class="radio radio-inline">
                        <input type="radio" value="Y" name="readyToMove" id="readyToMoveY" data-el-name="ready-to-move" disabled="disabled">
                        <label for="readyToMoveY">Yes</label>
                    </div>
                    <div class="radio radio-inline">
                        <input type="radio" value="N" name="readyToMove" id="readyToMoveN" data-el-name="ready-to-move" disabled="disabled">
                        <label for="readyToMoveN">No</label>
                    </div> 
                                    </div>
           
                                   </div>
                                   <div class="row font-roboto regular tabcontent nexttab" id="event5" >
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Amenities</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <button type="button" onclick="openCity(event, 'event6') class="btn btn-large yellow-btn font-roboto light brbottom-30">Next </button>

                            </div>
                         @if(isset($amenities))           
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click electricityBackup {{$amenities->contains('amenity_name', 'Electricity backup')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="electricityBackup" id="electricityBackup">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/electricity-backup-ico.png" alt="Electricity backup"> Electricity backup                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click lift {{$amenities->contains('amenity_name', 'Electricity backup')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="lift" id="lift">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/elivator-ico.png" alt="Lift"> Lift                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click healthClub {{$amenities->contains('amenity_name', 'Health club')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="healthClub" id="healthClub">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/health-club-ico.png" alt="Health club"> Health club                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click clubHouse {{$amenities->contains('amenity_name', 'Club house')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="clubHouse" id="clubHouse">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/club-house-ico.png" alt="Club house"> Club house                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click swimmingPool {{$amenities->contains('amenity_name', 'Swimming pool')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="swimmingPool" id="swimmingPool">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/pool-ico.png" alt="Swimming pool"> Swimming pool                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click joggingTrack {{$amenities->contains('amenity_name', 'Jogging Track')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="joggingTrack" id="joggingTrack">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/jogging-track-ico.png" alt="Jogging Track"> Jogging Track                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
 

                     

                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click shoppingArea {{$amenities->contains('amenity_name', 'Shopping Area')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="shoppingArea" id="shoppingArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/shopping-area-ico.png" alt="Shopping Area"> Shopping Area                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click security {{$amenities->contains('amenity_name', 'Security')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="security" id="security">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/security-ico.png" alt="Security"> Security                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click laundryService {{$amenities->contains('amenity_name', 'Laundry Service')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="laundryService" id="laundryService">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/laundry-ico.png" alt="Laundry Service"> Laundry Service                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click waterStorage {{$amenities->contains('amenity_name', 'Water Storage')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="waterStorage" id="waterStorage">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/water-storage-ico.png" alt="Water Storage"> Water Storage                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Children PlayArea')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="childrensPlayArea" id="childrensPlayArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/play-area-ico.png" alt="Children's PlayArea"> Children PlayArea                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Servant Bathroom')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="servantsBathroom" id="servantsBathroom">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/servent-bathroom-ico.png" alt="Servant's Bathroom"> Servant Bathroom                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Auditorium')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="auditorium" id="auditorium">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/auditoriam-ico.png" alt="Auditorium"> Auditorium                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Centralized Gas')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="centralizedGas" id="centralizedGas">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/centralized-gas-ico.png" alt="Centralized Gas"> Centralized Gas                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Visitor Parking')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="visitorParking" id="visitorParking">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/visitors-parking-ico.png" alt="Visitor Parking"> Visitor Parking                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Gymnasium')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="gymnasium" id="gymnasium">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/gym-ico.png" alt="Gymnasium"> Gymnasium                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click {{$amenities->contains('amenity_name', 'Waste Disposal')?'active':''}}">
                        <input class="hide" type="checkbox" value="Y" name="wasteDisposal" id="wasteDisposal">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/waste-disposal-ico.png" alt="Waste Disposal"> Waste Disposal                        </p>
                    </div>
                </div>
                @else
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click electricityBackup">
                        <input class="hide" type="checkbox" value="Y" name="electricityBackup" id="electricityBackup">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/electricity-backup-ico.png" alt="Electricity backup"> Electricity backup                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click lift">
                        <input class="hide" type="checkbox" value="Y" name="lift" id="lift">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/elivator-ico.png" alt="Lift"> Lift                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click healthClub">
                        <input class="hide" type="checkbox" value="Y" name="healthClub" id="healthClub">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/health-club-ico.png" alt="Health club"> Health club                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click clubHouse">
                        <input class="hide" type="checkbox" value="Y" name="clubHouse" id="clubHouse">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/club-house-ico.png" alt="Club house"> Club house                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click swimmingPool">
                        <input class="hide" type="checkbox" value="Y" name="swimmingPool" id="swimmingPool">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/pool-ico.png" alt="Swimming pool"> Swimming pool                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click joggingTrack">
                        <input class="hide" type="checkbox" value="Y" name="joggingTrack" id="joggingTrack">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/jogging-track-ico.png" alt="Jogging Track"> Jogging Track                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
 
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click shoppingArea">
                        <input class="hide" type="checkbox" value="Y" name="shoppingArea" id="shoppingArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/shopping-area-ico.png" alt="Shopping Area"> Shopping Area                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click security">
                        <input class="hide" type="checkbox" value="Y" name="security" id="security">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/security-ico.png" alt="Security"> Security                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click laundryService">
                        <input class="hide" type="checkbox" value="Y" name="laundryService" id="laundryService">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/laundry-ico.png" alt="Laundry Service"> Laundry Service                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click waterStorage">
                        <input class="hide" type="checkbox" value="Y" name="waterStorage" id="waterStorage">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/water-storage-ico.png" alt="Water Storage"> Water Storage                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click">
                        <input class="hide" type="checkbox" value="Y" name="childrensPlayArea" id="childrensPlayArea">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/play-area-ico.png" alt="Children's PlayArea"> Children PlayArea                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click">
                        <input class="hide" type="checkbox" value="Y" name="servantsBathroom" id="servantsBathroom">
                        <a href="javascript:void(0);"></a>
                        <p class="font-roboto regular">
                            <img src="https://assets.helloaddress.com/ui/build/images/servent-bathroom-ico.png" alt="Servant's Bathroom"> Servant Bathroom                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 brbottom-20">
                    <div data-el-name="amenity" class="amenities-block clearfix border-radius-3 hover-click">
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
                @endif
                  
                                                        </div>
                 <div class="row font-roboto regular tabcontent nexttab" id="event6">
                                                                 <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Distance From</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                                                    <button type="button"  onclick="openCity(event, 'event7') class="btn btn-large yellow-btn font-roboto light brbottom-30">Next </button>

                            </div>
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
                        </div>  
                                                            
                    <div class="row font-roboto regular tabcontent nexttab" id="event7">
                                                                     <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <h3 class="font-nunito regular brbottom-40">Gallery</h3>
                                                                   
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                             <button type="" class="btn btn-large yellow-btn font-roboto light brbottom-30">Save </button>
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
          <form id="dropzoneForm" class="dropzone" action="{{ url('dropzone_ds') }}">
            @csrf
            <input type="hidden" value="{{isset($data)?$data->id:''}}" name="idxz">
            <input type="hidden" value="{{isset($randomstring)?$randomstring:''}}" name="randomstring" id="property_id">
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
        </div>
        <div class="panel-body" id="uploaded_image">
          
        </div>
      </div>
    </div>
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
    <p id="location">Waiting for location...</p>

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
 <script type="text/javascript">
    function openCity(evt, cityName) {

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

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>     
<script type="text/javascript">
        $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
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
            var maxSize = 5 * 1024 * 1024; // 5MB limit
            var fileSize = $('#fileInput')[0].files[0].size;

            if (fileSize > maxSize) {
                alert('Image size exceeds the 5MB limit.');
                event.preventDefault(); // Prevent form submission
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
    autoProcessQueue : false,
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

</script>
@endsection
