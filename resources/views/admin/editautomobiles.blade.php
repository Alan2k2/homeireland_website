@extends('layouts.admin.main')
@section('content')
<style>
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
            <div class="card-header">Edit Automobiles
            </div>
			<div class="spaceman">
<!--===============MAIN STARTS===============================================-->

<!--===============section 1=====================================================-->
<section id="basic">
 <?php
echo$main_cat=$property->main_cat;
if($main_cat){
$a=$b=$c=$d=$e=$f=$g="";
if($main_cat==1)
{
    $a="checked";
}
if($main_cat==2)
{
    $a="checked";
}
if($main_cat==3)
{
    $b="checked";
}
if($main_cat==4)
{
    $c="checked";
}
if($main_cat==5)
{
    $d="checked";
}
if($main_cat==6)
{
    $e="checked";
}
if($main_cat==7)
{
    $f="checked";
}
}

?>
<div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">{{$property->aname}}</h3>
                               </div>
                               </div>
                               <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <?php 
if($property->status==1)
{
$status="Approved";
$sclass="text-success";
 } 
 elseif($property->status==2){
    $status="Sold Out";
    $sclass="text-warning";
 }
 else{
    $status="Approvel Pending";
    $sclass="text-danger";
 }
  if($property->payment_status==1)
{
             $admin_pay_status="";
            if($property->admin_pay==1)
            {
                $admin_pay_status="(Paid By Admin)";
            }
            $pstatus="Completed ".$admin_pay_status;
 } 
 elseif($property->payment_status==2){
    $pstatus="Renew";
 }
 else{
    $pstatus="Not Paid";
 }
 ?>
                                 <h6 >Payment Status:<?=$pstatus?>
                                 </h6>
                                 <h6 class="<?=$sclass?>">Property Status:<?=$status?>
                                 </h6>
                                 <?php if($property->payment_status==1){ ?>
                                 <h6 >Invoice Status:

                                 </h6>
                                 <h6 >Expiry Date:

                                 </h6>
                                 <?php } if($property->payment_status!=1)
                                 {
                                 ?>
                                 <button class="btn-sm btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">PAY BY ADMIN</button>
                                 <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="card">
        <div class="card-body" >
            <form action="" method="get" style="padding:20px">
               <center>
                   <select class="form-control" name="admin_pay">
                        <option value="1">Enable Pay</option>
                        <option value="0">Disable Pay</option>
                   </select><br>
            
              <button class="bt-sm btn-danger" style="border-radius:6px">Submit</button>
            </center>
            <form>
        </div>
       </div>
    </div>
  </div>
</div>
                                 <?php
                                 }
                                 ?>
                               </div>
                               </div>
     
</section>
<!--===============section 2=====================================================-->
<section id="location">
      <main>
           <form method="get" action="{{url('admin/automobile_details')}}">
                        <input type="hidden" value="2" name="no" id="no">
<!--=========================MAIN STARTS======================================-->
          <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">1.Location</h3>
                               </div>
                               </div>
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                 <div>
                                     <p>County<span style="color:red">*</span></p>
                                     @if(isset($property))
                           
                 <select class="form-control searchbar filter-search-county county-ulster  " name="county" data-gmap-addr-donator="5" id="counties" required>
                    <option>Select A County</option>
                    <option value="Antrim" {{$property->county=='Antrim'?'selected':''}}>Antrim</option>
                    <option value="Armagh" {{$property->county=='Armagh'?'selected':''}}>Armagh</option>
                    <option value="Cavan" {{$property->county=='Cavan'?'selected':''}}>Cavan</option>
                    <option value="Donegal" {{$property->county=='Donegal'?'selected':''}}>Donegal</option>
                    <option value="Down" {{$property->county=='Down'?'selected':''}}>Down</option>
                    <option value="Fermanagh" {{$property->county=='Fermanagh'?'selected':''}}>Fermanagh</option>
                    <option value="Londonderry" {{$property->county=='Londonderry'?'selected':''}}>Londonderry</option>
                    <option value="Monaghan" {{$property->county=='Monaghan'?'selected':''}}>Monaghan</option>
                    <option value="Tyrone" {{$property->county=='Tyrone'?'selected':''}}>Tyrone</option>
                    <option value="Clare" {{$property->county=='Clare'?'selected':''}}>Clare</option>
                    <option value="Cork" {{$property->county=='Cork'?'selected':''}}>Cork</option>
                    <option value="Kerry" {{$property->county=='Kerry'?'selected':''}}>Kerry</option>
                    <option value="Limerick" {{$property->county=='Limerick'?'selected':''}}>Limerick</option>
                    <option value="Tipperary" {{$property->county=='Tipperary'?'selected':''}}>Tipperary</option>
                    <option value="Waterford" {{$property->county=='Waterford'?'selected':''}}>Waterford</option>
                    <option value="Carlow" {{$property->county=='Carlow'?'selected':''}}>Carlow</option>
                    <option value="Dublin" {{$property->county=='Dublin'?'selected':''}}>Dublin</option>
                    <option value="Kildare" {{$property->county=='Kildare'?'selected':''}}>Kildare</option>
                    <option value="Kilkenny" {{$property->county=='Kilkenny'?'selected':''}}>Kilkenny</option>
                    <option value="Laois" {{$property->county=='Laois'?'selected':''}}>Laois</option>
                    <option value="Longford" {{$property->county=='Longford'?'selected':''}}>Longford</option>
                    <option value="Louth" {{$property->county=='Louth'?'selected':''}}>Louth</option>
                    <option value="Meath" {{$property->county=='Meath'?'selected':''}}>Meath</option>
                    <option value="Offaly" {{$property->county=='Offaly'?'selected':''}}>Offaly</option>
                    <option value="Westmeath" {{$property->county=='Westmeath'?'selected':''}}>Westmeath</option>
                    <option value="Wexford" {{$property->county=='Wexford'?'selected':''}}>Wexford</option>
                    <option value="Wicklow" {{$property->county=='Wicklow'?'selected':''}}>Wicklow</option>
                    <option value="Galway" {{$property->county=='Galway'?'selected':''}}>Galway</option>
                    <option value="Leitrim" {{$property->county=='Limerick'?'selected':''}}>Leitrim</option>
                    <option value="Mayo" {{$property->county=='Mayo'?'selected':''}}>Mayo</option>
                    <option value="Roscommon" {{$property->county=='Roscommon'?'selected':''}}>Roscommon</option>
                    <option value="Sligo" {{$property->county=='Sligo'?'selected':''}}>Sligo</option>

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
                    <option> Select A County </option>
                    <option value="Galway">Galway</option>
                    <option value="Leitrim">Leitrim</option>
                    <option value="Mayo">Mayo</option>
                    <option value="Roscommon">Roscommon</option>
                    <option value="Sligo">Sligo</option>

                  </select>                    
                  @endif
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4 ">
                                 <div >
                                     <p>City <span style="color:red">*</span></p>
                                    <input class="form-control valid  " type="text" value="{{isset($property)?$property->city:''}}" required data-gmap-addr-donator="0" id="street" 
                                    name="city" data-gtm-form-interact-field-id="0" placeholder="city"aria-invalid="false">
                                 </div>
                             </div>
                         </div>
                         <!--row 2-->
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  ">
                                 <div>
                                     <p>Town</p>
                                      <input class="form-control valid" type="text" value="{{isset($property)?$property->town:''}}"  data-gmap-addr-donator="0" id="town" placeholder="Town"name="town" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                 <div >
                                     <p>Street</p>
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->street:''}}"  data-gmap-addr-donator="0" id="street" name="street"placeholder="Street" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                 </div>
                             </div>
                         </div>
                         <!--row 3-->
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                 <div >
                                     EIRCODE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->eir_code:''}}"  data-gmap-addr-donator="0" id="eir_code" name="eir_code"placeholder="EIR Code" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                 <div style="display:flex">
                                     @php
           $disp_check="";
           $disp=isset($property)?$property->location_disp_flag:''; 
           if($disp==1)$disp_check="checked";
           @endphp
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="checkbox" name="location_show" value="1"<?=$disp_check?>>&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:12px">i don't want to display the Exact Address</span> 
                                 </div>
                             </div>
                             
                            
                         </div>
                     </main>
</section>
<!--===============section 3=====================================================-->
<!--=========================MAIN STARTS======================================-->
                      <section id="price">
                           
  
<style>

 a {
        text-decoration: none;
    }

form
{
    font-size:15px;
    font-weight:500px;
}
 input.larger {
        width: 20px;
        height: 20px;
      }

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
    input[type='radio'] {
    transform: scale(2);
   
}
label{
    padding:20px;
}
aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
   
 
}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

       <div class="preloader">
        <div class="spinner"></div>
    </div>
        <div class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                    
                    </div>
                                                        </div>
                    <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                        
                                    @if ($message = Session::get('success'))  
                                    <div class="alert alert-success alert-block">  
                                        <button type="button" class="close" data-dismiss="alert"></button>   
                                            <strong>{{ $message }}</strong>  
                                    </div>  
                                    @endif  
  



                       
                   
                                                <!--next button-->
                           
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                <a href="{{url('admin/automobiles')}}?a=3&&b=7" class="btn btn-large btn-block yellow-btn next font-roboto 
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
                                 </form>
                            </div>
                           
                           <!--next button end-->
                   
                    
<!--=========================MAIN ENDS======================================-->                                       
                    </div>
                    
                </div>
            </div>
            <!--price div starts event============= 8-->
            <!--price div end event================= 8-->
        



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
       var property_id = $('#choose_prop').val();
       var selling_type = $('#selling_type').val();
    //   alert(property_id)
    if(selling_type!=2){
       $('.selling_type_section').hide();
       }
       if(property_id!=1 &&property_id!=3){
        $('.forlet').hide();
       }
       if(property_id!=2 &&property_id!=3){
        $('#forsale').hide();
       }
       if(property_id==5){
         $('.forlet').show();
                 $('.hr').hide();
                $('#forsale').hide();
                $('#price_on_application').hide();
                 $("#rent").text("Price");
       }
       if(property_id==4){
        $('.forlet').show();
                
                 $('.hr').hide();
                $('#forsale').hide();
                $('#price_on_application').hide();
                $("#rent").text("Price(Monthly)");
       }
        $('#price_on_application').hide();
         
        
        // =======on change slect box===
        $('#choose_prop').on('change', function() {
            // Your logic here
           
            var prop = $(this).val();
            if(prop==1)
            {
                $('.forlet').show();
                $('#forsale').hide();
                $('#price_on_application').hide();
            }
            else if(prop==2)
            {
                    $('.forlet').hide();
                    $('#forsale').show();
                    $('#price_on_application').hide();
            }
            else if(prop==3)
            {
                $('.forlet').show();
                $('#forsale').show();
                $('#price_on_application').hide();
            }
            else if(prop==4)
            {
                $('.forlet').show();
                
                 $('.hr').hide();
                $('#forsale').hide();
                $('#price_on_application').hide();
                $("#rent").text("Price(Monthly)");
            }
            else if(prop==5)
            {
                $('.forlet').show();
                 $('.hr').hide();
                $('#forsale').hide();
                $('#price_on_application').hide();
                 $("#rent").text("Price");
            }
            else
            {
                $('.forlet').hide();
                $('#forsale').hide();
                $('#price_on_application').hide();
            }
           
        });
        
        // ======on change select box ends=====
        // ============on check auction=============
       $('#auction').click(function(){
        
              var sellingtype = $(this).val();
            if(sellingtype==2)
            {
                $('.selling_type_section').show();
            }
            else
            {
                $('.selling_type_section').hide();
            }
        });
        
        // =====on click auction ends==============
        
        // ===========on selling type change starts========
        $('#selling_type').on('change', function() {
            // Your logic here
        //   alert("hi");
            var prop = $(this).val();
            if(prop==2)
            {
                $('.selling_type_section').show();
            } else {
                $('.selling_type_section').hide();
            }
        });
        
        // ===========on selling type change ends==========
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

// =================counter part strat
 $(".count-plus").click(function(){
     var countValue = $("#count").text();
     countValue++
     var i=0;
     $("#count").text(countValue);
    //   ==========append bedroom strats===
        var field = ` <div class="bedroom">
        <aside>
                                         <div class="row" >
                                             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-4">
                                                 <h5 class="mt-2">Bedroom `+countValue+`</h5>
                                                 </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                     
                                         <div class="mt-4">
                                       <span style="font-size:14px">Rent €</span> 
                                         <input type="text" placeholder="€" name="rent[]" required> 
                                    </div>
                                         </div>
                                         <!---->
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                                     
                                        
                                          <span style="font-size:14px">Room type</span> 
                                          <select class="form-control" id="plotAreaUnit" name="bed_type[]" required>
                        <option value="">-- Select bedroom type--</option>
                       
                        <option value="Single room">Single room</option>
                          <option value="Double room">Double room</option>
                            <option value="Twin room">Twin room</option>
                             <option value="Shared room">Shared room</option>
                        </select>
                                         
                                     
                                         </div>
                                        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-0">
                                             <span style="font-size:14px">En-suite</span> 
                                             <center style="display:flex" class="mt-2">
                                          <select class="form-control" id="plotAreaUnit" name="en[]" required>
                       
                          <option value="0">No</option>
                            <option value="1">Yes</option>
                            
                        </select>
                                          </div>
                                         </div>
                                         </aside><br></div>
                                         `;
    var closestElements = $('.bedrooms');

    // Get the last closest element
    var lastClosestElement = closestElements.last();

    // Add a <div> element to the last closest element
    lastClosestElement.append(field);
    //  $('.bedrooms[3]').append(field);
      //============== append bedroom ends=======
        // alert(countValue);
    });
    
    // ============count minu part strt
    $(".count-minus").click(function(){
     var countValue = $("#count").text();
     if(countValue>1){
     countValue--
     $('.bedroom:last').remove();
     }
     $("#count").text(countValue);
        // alert(countValue);
    });

// ============counter paer end

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
