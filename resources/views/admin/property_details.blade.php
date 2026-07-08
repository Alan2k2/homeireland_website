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
            <div class="card-header">Edit Properties
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
    $b="checked";
}
if($main_cat==3)
{
    $c="checked";
}
if($main_cat==4)
{
    $d="checked";
}
if($main_cat==5)
{
    $e="checked";
}
if($main_cat==6)
{
    $f="checked";
}
if($main_cat==7)
{
    $f="checked";
}
if($main_cat==8)
{
    $g="checked";
}
}

?>
@php

Session::put('main_cat', $main_cat);
@endphp
<div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">1.Basic Info</h3>
                               </div>
                               </div>
     <section >
                               <!---->
                               <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <p>Rent</p>
                               </div>
                               </div>
                               <!---->
                                <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="1" disabled <?=$a?>>&nbsp;<label>Residential Rent</label>
                                     </aside>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="2" disabled <?=$b?>>&nbsp;<label>Sharing (room)</label>
                                     </aside>
                                 </div>
                            </div>
                            <!---->
                             <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="3" disabled <?=$c?>>&nbsp;<label>Commercial Rent</label>
                                     </aside>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="4" disabled <?=$d?>>&nbsp;<label>Parking Rent</label>
                                     </aside>
                                 </div>
                            </div>
                            <!---->
                           </section>
                            <section >
                               <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <p>Sale</p>
                               </div>
                               </div>
                               <!---->
                                <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="5" disabled <?=$e?>>&nbsp;<label>Residential Sale</label>
                                     </aside>
                                 </div>
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="6" disabled <?=$f?>>&nbsp;<label>Commercial Sale</label>
                                     </aside>
                                 </div>
                            </div>
                            <!---->
                             <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                     <aside>
                                         <input type="radio" name="main_cat" value="7" disabled <?=$g?>>&nbsp;<label>Parking Sale</label>
                                     </aside>
                                 </div>
                                 
                            </div>
                          <div class="row mt-4">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <p>Holiday Homes</p>
                               </div>
                               </div>
                             <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                     <aside>
                                         <input type="radio" name="main_cat" value="8" disabled <?=$g?>>&nbsp;<label>Holiday Homes</label>
                                     </aside>
                                 </div>
                                  
                            </div>
                            
                           </section>
</section>
<!--===============section 2=====================================================-->
<section id="location">
      <main >
          <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">2.Location</h3>
                               </div>
                               </div>
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                 <div>
                                     <p>County</p>
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
                    <option>Select A County</option>
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
                                     <p>City</p>
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
                                      <input class="form-control valid" type="text" value="{{isset($property)?$property->town:''}}" required data-gmap-addr-donator="0" id="town" placeholder="Town"name="town" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                 </div>
                             </div>
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                 <div >
                                     <p>Street</p>
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->street:''}}" required data-gmap-addr-donator="0" id="street" name="street"placeholder="Street" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                 </div>
                             </div>
                         </div>
                         <!--row 3-->
                         <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                 <div >
                                     ERICODE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->eir_code:''}}" required data-gmap-addr-donator="0" id="eir_code" name="eir_code"placeholder="EIR Code" data-gtm-form-interact-field-id="0" aria-invalid="false">
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
                           <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <h4>PRICE/<?=Session::get('main_cat')?></h4>
                             </div>
                           </div>
                           
                          
                                 
                                    @if (Session::get('main_cat') == 1||Session::get('main_cat') == 8 ||
                                    Session::get('main_cat') == 9||Session::get('main_cat') == 10||Session::get('main_cat') == 11||Session::get('main_cat') == 12
                                    ) 
                                     <div class="row" style="">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  ">
                                     
                                     <aside>
                                         @if (Session::get('main_cat') == 10|| Session::get('main_cat') == 1 ||Session::get('main_cat') == 8)
                                          <h3 class="mt-4"> Rent €</h3>
                                         @else
                                         <h3 class="mt-4"> price €</h3>
                                         @endif
                                         <input type="text" placeholder="€" name="price" value="{{isset($property)?$property->price:''}}"required> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                         
                                         <?php
                                         $a=$b=$c="";
                                         if($property->price_type=="monthly")
                                         {
                                             $a="checked";
                                         }
                                         if($property->price_type=="weekly")
                                         {
                                             $b="checked";
                                         }
                                          if($property->price_type=="Buy")
                                         {
                                             $c="checked";
                                         }
                                         ?>
                                        
                                         <input type="radio" name="price_type" value="monthly" <?=$a?>><label>Monthly</label>
                                          <input type="radio" name="price_type" value="weekly" <?=$b?>><label>Weekly</label>
                                          @if(Session::get('main_cat') == 9||Session::get('main_cat') == 11||Session::get('main_cat') == 12)
                                          <input type="radio" name="price_type" value="Buy" <?=$c?>><label>Buy</label>
                                          @endif
                                     </aside>
                                     
                                     </div>
                                     </div>
                                   @endif
                                     @if (session('main_cat') == 2) 
                                      <div class="row" >
                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                     
                                         <h3 class="">Rent collection</h3>
                                         <?php
                                         $mcheck=$wcheck="";
                                         if($property)
                                         {
                                             if($property->rent_coll=="Monthly")
                                             {
                                                 $mcheck="checked";
                                             }
                                             else
                                             {
                                                 $wcheck="checked";
                                             }
                                         }
                                         
                                         ?>
                                         <input type="radio" name="rent_coll"value="Monthly"<?=$mcheck?> checked>&nbsp;&nbsp;<label>Monthly</label>&nbsp;&nbsp;
                                          <input type="radio" name="rent_coll"value="Weekly"<?=$wcheck?>>&nbsp;&nbsp;<label>Weekly</label>
                                    
                                         </div>
                                         <!---->
                                         <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                     
                                         <h3 class="mt-4">Bedroom Available</h3>
                                        <!--======================-->
                                        <span style="font-size:25px;"  >
                                        <span class="count-minus  text-success">  <i class="fa fa-minus-circle" aria-hidden="true"></i></span>
                                          <?php
                                           $count=1;$bed_count=0;
                                           if(count($property_bed_type)>0)
                                           {
                                            $bed_count=$count=count($property_bed_type);
                                           }
                                         ?>
                                            <span id="count" style="padding:5px"><?=$count?></span>
                                              <span class="count-plus text-success">  <i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                           
                                        </span>
                                        
                                        
                                        <!--===============================-->
                                     
                                         </div>
                                         </div>
                                         <!--row2-->
                                         
                                         
                                         <?php
                                         
                                         if($bed_count>0)
                                         {
                                               
                                         $i=0;
                                         foreach($property_bed_type as $bedtype)
                                         {
                                             $i++;
                                         ?>
                                 
                                         <section class="bedrooms">
                                             <div class="bedroom">
                                         <aside >
                                         <div class="row" >
                                             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-4">
                                                 <h5 class="mt-2">Bedroom <?=$i?></h5>
                                                 </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                     
                                         <div class="mt-4">
                                       <span style="font-size:14px">Rent €</span> 
                                         <input type="text" placeholder="€" name="rent[]" value="<?=$bedtype->rent?>"> 
                                    </div>
                                         </div>
                                         <!---->
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                                     
                                        
                                          <span style="font-size:14px">Room type</span> 
                                          <select class="form-control" id="plotAreaUnit" name="bed_type[]" >
                        <option value="">-- Select bedroom type--</option>
                       <?php
                       $sc=$dc=$tc=$sr="";
                       if($bedtype->bed_type_name=="Single room")
                       {
                           $sc="selected";
                       }
                       if($bedtype->bed_type_name=="Double room")
                       {
                           $dc="selected";
                       }
                       if($bedtype->bed_type_name=="Twin room")
                       {
                           $tc="selected";
                       }
                       if($bedtype->bed_type_name=="Shared room")
                       {
                           $sr="selected";
                       }
                       
                       ?>
                        <option value="Single room"<?=$sc?>>Single room</option>
                          <option value="Double room"<?=$dc?>>Double room</option>
                            <option value="Twin room"<?=$tc?>>Twin room</option>
                              <option value="Shared room"<?=$sr?>>Shared room</option>
                        </select>
                                         
                                     
                                         </div>
                                         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-0">
                                             <span style="font-size:14px">En-suite</span> 
                                             <center style="display:flex" class="mt-2">
                                           <select class="form-control" id="plotAreaUnit" name="en[]" >
                       <?php
                       $sc=$dc="";
                       if($bedtype->en_suite=="0")
                       {
                           $sc="selected";
                       }
                       if($bedtype->en_suite=="1")
                       {
                           $dc="selected";
                       }
                       
                       
                       ?>
                          <option value="0" <?=$sc?>>No</option>
                            <option value="1" <?=$dc?>>Yes</option>
                            
                        </select>
                                           </center>
                                          </div>
                                         </div>
                                         </aside><br>
                                         </div>
                                         </section>
                                         <?php }
                                         }
                                         else
                                         {
                                         ?>
                                         <section class="bedrooms">
                                             <div class="bedroom">
                                         <aside >
                                         <div class="row" >
                                             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-4">
                                                 <h5 class="mt-2">Bedroom 1</h5>
                                                 </div>
                                     <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                                     
                                         <div class="mt-4">
                                       <span style="font-size:14px">Rent €</span> 
                                         <input type="text" placeholder="€" name="rent[]" > 
                                    </div>
                                         </div>
                                         <!---->
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                                     
                                        
                                          <span style="font-size:14px">Room type</span> 
                                          <select class="form-control" id="plotAreaUnit" name="bed_type[]" >
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
                                           <select class="form-control" id="plotAreaUnit" name="en[]" >
                       
                          <option value="0">No</option>
                            <option value="1">Yes</option>
                            
                        </select>
                                           </center>
                                          </div>
                                         </div>
                                         </aside><br>
                                         </div>
                                         </section>
                                         <?php }
                                         ?>
                                         <!---->
                                     @endif
                                     
                                     @php
                                  
                                  
                                  @endphp
                                  @if(Session::get('main_cat') == 3||Session::get('main_cat') == 4||Session::get('main_cat') == 6 ||Session::get('main_cat') == 7)
                                  
                                  
                                          <!--row 3-->
                                     <div class="row" style="margin-top:2%;display:none1">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     
                                         <h3 class="mt-4"> For Sale or To Let </h3>
                                         <?php
                                         $a=$b=$c=$d=$e="";
                                         if($property->for_let_sale==1)
                                         {
                                             $a="selected";
                                         }
                                         if($property->for_let_sale==2)
                                         {
                                             $b="selected";
                                         }
                                         if($property->for_let_sale==3)
                                         {
                                             $c="selected";
                                         }
                                         if($property->for_let_sale==4)
                                         {
                                             $d="selected";
                                         }
                                         if($property->for_let_sale==5)
                                         {
                                             $e="selected";
                                         }
                                         ?>
                                          <select class="form-control mb-4" style="padding:10px" id="choose_prop" name="for_let_sale" >
                                                <option value="">-- Select property type--</option>
                                    @if(Session::get('main_cat') == 3||Session::get('main_cat') == 6||Session::get('main_cat') == 4 ||Session::get('main_cat') == 7)
                                                <option value="1" <?=$a?>>To Let</option>
                                                <option value="2" <?=$b?>>For Sale</option>
                                                <option value="3" <?=$c?>>To Let or For Sale</option>
                                                
                                                @endif
                                          </select>
                                   </div>
                                     </div>
                                      
                                     <!---hide and show in section 3 starts-->
                                     <section id="forlet">
                                       <div class="row" style="margin-top:2%">
                                          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4 forlet">
                                             <div class="mt-0">
                                                <h4 id="rent">Rent €</h4> 
                                         <input type="text" placeholder="€" class="form-control mb-4" value="{{$property->price}}" name="price" > 
                                    </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4 forlet hr" style="padding-top:8px">
                                              <span style="font-size:14px"></span> 
                                              <?php
                                              $a=$b=$c="";
                                              if($property->price_type=="Yearly")
                                              {
                                                  $a="selected";
                                              }
                                              if($property->price_type=="Monthly")
                                              {
                                                  $b="selected";
                                              }
                                              
                                              if($property->price_type=="Weekly")
                                              {
                                                  $c="selected";
                                              }
                                              
                                              
                                              ?>
                                              <select class="form-control mb-4 mt-4"  id="plotAreaUnit" name="price_type" >
                        <option value="">-- Select property type--</option>
                         <option value="Monthly"  <?=$b?>>Monthly</option>
                         <option value="Weekly" <?=$c?>>Weekly</option>
                        <option value="Yearly" <?=$a?>>Yearly</option>
                       
                        
                       
                       
                        </select>
                                         </div>
                                     </div>
                                     <!--row new-->
                                      <div class="row forlet" style="margin-top:2%">
                                          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                                             <div style="display:flex">
                                                 <?php 
                                                 $d="";
                                                 if($property->price_apn==1)
                                                 {
                                                     $d="checked";
                                                 }
                                                 ?>
                                           <input type="checkbox" class="larger" name="price_apn"value="1" <?=$d?>> &nbsp;
                                                   &nbsp;&nbsp; <h4 class="mt-2">Price on application</h4>
                                           </div>
                                              </div>
                                              </div>
                                              <hr style="padding:5px">
                                        </section>
                                        
                                       
                                        <!--foe slae--->
                                        <section id="forsale">
                                       <div class="row" style="margin-top:2%">
                                         <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 mt-4" >
                                             <div style="display:flex;margin-top:15px">
                                                 <?php 
                                                 $d="";
                                                 if($property->auction==1)
                                                 {
                                                     $d="checked";
                                                 }
                                                 ?>
                                              <input type="checkbox" class="larger "placeholder="€" id="auction"name="auction" value="1"<?=$d?>> &nbsp;
                                               &nbsp;&nbsp;<h4 class="mt-2">   Auction</h4>
                                               </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                              <div class="mt-0">
                                                   <h4>Auction Date & Time</h4> 
                                                     <input type="datetime-local" name="au_d1"placeholder="" value="{{$property->auction_date}}"class="form-control mb-4"> 
                                           </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                              <div class="mt-0">
                                                   <h4>Auction Location</h4> 
                        <input type="text" placeholder="Location" class="form-control mb-4" name="auction_location3" value="{{$property->auction_location}}"> 
                                           </div>
                                        </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                          <div class="mt-0">
                                       <h4>Sale price</h4> 
                                         <input type="text" placeholder="€" class="form-control mb-4" name="price_sale" value="{{$property->price_sale}}"> 
                                    </div>
                                    </div>
                                     </div>
                                    
                                     <!--new row-->
                                     <div class="row" style="margin-top:2%" id="price_on_application">
                                         
                                         <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4" >
                                             <div style="display:flex;margin-top:15px">
                                              <input type="checkbox" class="larger "placeholder="€"> &nbsp;
                                               &nbsp;&nbsp;<h4 class="mt-2">   Price on application</h4>
                                               </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                              <div class="mt-0">
                                                   <h4>Auction Date & Time</h4> 
                                                     <input type="datetime-local" name="au_d2"placeholder="" value="{{$property->auction_date}}"class="form-control mb-4"> 
                                           </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                              <div class="mt-0">
                                                   <h4>Auction Location</h4> 
                        <input type="text" placeholder="Location" class="form-control mb-4" name="auction_location2" value="{{$property->auction_location}}"> 
                                           </div>
                                        </div>
                                    </div>
                                     <!---row end-->
                                     
                                     
                                     
                                        </section><br><br>
                                      <!---hide and show in section 3 ends-->
                                     
                                      <!--row 3 ends-->
                                   @endif
                            @if (session('main_cat') == 5)
                            <!--j5-->
                            <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mb-4">
                                     
                                        
                                        <br>  <span style="font-size:14px">Selling type</span> 
                                        <?php
                                        $a=$b=$c=$d="";
                                        if($property->selling_type==1)
                                        {
                                            $a="selected";
                                        }
                                        if($property->selling_type==2)
                                        {
                                            $b="selected";
                                        }
                                        if($property->selling_type==3)
                                        {
                                            $c="selected";
                                        }
                                        if($property->selling_type==4)
                                        {
                                            $d="selected";
                                        }
                                        
                                        
                                        ?>
                                        
                                          <select class="form-control" id="selling_type" name="selling_type">
                        <option value="">-- Select Selling type--</option>
                       
                        <option value="1"<?=$a?>>For Sale by Private Treaty</option>
                          <option value="2" <?=$b?>>For Sale by Public Auction</option>
                            <option value="3" <?=$c?>>For Sale by Public Tender</option>
                              <option value="4" <?=$d?>>For Sale by Private Tender</option>
                        </select>
                                         
                                     
                                         </div> 
                                          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-0">
                                              <div class="mt-0">
                                                   <h4>Price</h4> 
                                                     <input type="text" name="price" 
                                                     value="{{$property->price}}"placeholder="€" class="form-control mb-4"> 
                                           </div>
                                        </div>
                                         </div>
                                         <!---new row-->
                                          <div class="row">
                                        
                                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-2">
                                             <div style="display:flex">  
                                             <?php
                                             $a="";
                                             if($property->price_on_app==1)
                                             {
                                                 $a="checked";
                                             }
                                             ?>
                                           <input type="checkbox" class="larger"value="1"<?=$a?> name="price_on_app"> &nbsp;&nbsp;&nbsp;
                                           <h4>Price on application</h4>
                                           </div>
                                           <small style="color:rgb(113, 113, 113)">We strongly advise against using POA. It can cause your ad to lose impressions</small>
                                           
                                          </div>
                                         </div><br><br>
                                         <!---row end-->
                                         <div class="row selling_type_section">
                                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2">
                                                     <span style="font-size:14px">Auction Date & Time<span style="color:rgb(113, 113, 113)">(Optional)</span></span> 
                        <input type="datetime-local" name="au_d3"class="form-control mb-4" value="{{$property->auction_date}}"> 
                                                 </div>
                                                 
                                                 <!---->
                                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-2">
                                                     <span style="font-size:14px">Auction Location<span style="color:rgb(113, 113, 113)">(Optional)</span></span> 
                <input type="text" placeholder="auction_location" name="auction_location1"class="form-control mb-4" value="{{$property->auction_location}}"> 
                                                 </div>
                                                  <!---->
                                          </div>
                                         <!---re->
                            @endif
                            <!---->
                       
                      </section>
<!--=========================MAIN ENDS======================================-->  
<!--===============section 4=====================================================-->
    <section class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">

                                    @if ($message = Session::get('success'))  
                                    <div class="alert alert-success alert-block">  
                                        <button type="button" class="close" data-dismiss="alert"></button>   
                                            <strong>{{ $message }}</strong>  
                                    </div>  
                                    @endif  
   


 
                        <form method="get" action="{{url('details_store')}}" id="uploadForm" enctype="multipart/form-data">
                          
                             
                        
                        <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">
<!--=========================MAIN STARTS======================================-->
<?php

if( Session::get('main_cat')!=4 && Session::get('main_cat')!=7)
{
?>
                      
<main style="border: 0px solid rgb(221, 221, 221);padding:10px">
                           <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3><?=Session::get('title')?> \ Add property details\{{session::get('main_cat')}}</h3>
                               
                             </div>
                           </div>
                          
                      
                          
                            <div class="row" >
                                <?php if(Session::get('main_cat')==12){?>
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                 <h3 style="margin-left:1px">Spaces Available</h3>
                                 <input  style="margin-left:1px"type="number" name="space" value="{{$property->space}}" class="mt-4 form-control" placeholder="Enter a Number">
                                   
                               </div>
                               <?php 
                                }
                               if( Session::get('main_cat')!=4 && Session::get('main_cat')!=7 &&  Session::get('main_cat')!=12)
                               {
                               ?>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     <div>
                                         <h4 class="mt-4"> Property type</h4>
                                         <!--j2-->
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
     <input class="form-control valid" type="date" value="<?=$af_date?>" required data-gmap-addr-donator="0" id="available_from" name="available_from" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                    @endif
                                 </div>
                            </div>
                            <!---->
                            <?php 
                            
        if(session::get('main_cat')==1||session::get('main_cat')==8||session::get('main_cat')==9)
                            {
                            ?>
                             <div class="row mt-4 mb-4" >
                    @if(session::get('main_cat')==1|| session::get('main_cat')==8 ||session::get('main_cat')==9)
                                 <aside id="aside_rooms">
                                     @else
                                      <aside id="aside_rooms1">
                                     @endif
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4" >
                                     Single Bedrooms<br>
                                     <input type="text" class="mt-4" name="single_room" value="{{isset($property)?$property->Single_Bedrooms:''}}">
                                 </div>
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4">
                                     Double Bedrooms
                                     <br>
                                     <input type="text" class="mt-4" name="double_room"value="{{isset($property)?$property->Double_Bedrooms:''}}">
                                 </div>
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4">
                                   Twin Bedrooms
                                   <br>
                                     <input type="text" class="mt-4" name="twin_room"value="{{isset($property)?$property->Twin_Bedrooms:''}}">
                                 </div>
                                 <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 mt-4 mb-4">
                                    Bathrooms
                                    <br>
                                     <input type="text" class="mt-4" name="bathroom" value="{{isset($property)?$property->Bathrooms:''}}">
                                 </div>
                                 </aside>
                            </div>  
                            <?php
                            }
                            ?>
                            @if(session::get('main_cat')==2||session::get('main_cat')==10 || session::get('main_cat')==11||session::get('main_cat')==12)
                            <!---row2-->
                              <div class="row" >
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
                                          <option value="" >---Select Months---</option>
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
                                            <option value="6" <?=$f?>>6 Tenant</option>
                                          
                                       </select>
                                    
                                 </div>
                                 <?php } ?>
                            </div>
                            
                            <!---row2 end-->
                            @endif
                            <!---->
                             @if(session::get('main_cat')==3||session::get('main_cat')==6)
                            <!--row new for agriculture-->
                            <div class="row" id="floor">
                                          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4">
                                             <div class="mt-0">
                                       <h4>Floor area</h4> 
                <input type="text" placeholder="Floor area" class="form-control mb-4" value="<?=$property->floor_area?>" name="floor_area1"> 
                                    </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" style="padding-top:8px">
                                              <span style="font-size:14px"></span> 
                                              <select class="form-control mb-4 mt-4"  id="plotAreaUnit" name="unit">
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
                            <!---->
                            <!--row new for industrial unit floor 2-->
                            <div class="row" >
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 offshare" style="padding-top:8px" >
                                             
                                              <h4>Number of people space accommodates</h4> 
                                              <?php $sle="";?>
                                              <select class="form-control mb-4 mt-4"  id="plotAreaUnit" name="space">
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
                                              <select class="form-control mb-4 mt-4"  id="plotAreaUnit" name="unit">
                       
                        <option value="Square Metres" <?=$a?>>Square Metres</option>
                        <option value="Feet"<?=$b?> >Feet</option>
                       
                       
                       
                        </select>
                                         </div>
                                        
                            </div>
                            @endif
                            <!---->
                            @if(session::get('main_cat')!=9 && session::get('main_cat')!=10
                            && session::get('main_cat')!=11 && session::get('main_cat')!=12
                            )
                            <div class="row" >
                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" required>
                                       <h4 class="mt-4">BER<?php echo session::get('main_cat')?></h4>
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
                                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                    <div>
                                         <h4 class="mt-4"> BER NO (Optional)</h4>
                                      
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->BER_NO:''}}" data-gmap-addr-donator="0" id="ber_no" name="ber_no" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                     </div>
                                 </div>
                                 
                                 
                                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                    <div>
                                         <h4 class="mt-4"> BER NO Available</h4>
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
                                 
                                 
                            </div>
                            @endif
                            <!---->
                            <!--serviced oofice j3-->
                             @if(session::get('main_cat')==6 ||session::get('main_cat')==3)
                             <div class="row" id="serviced_office">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                        <h4 class="mt-2">   Facilities</h4>
                                       <div style="display:flex;margin-top:15px">
                                         <?php
                                       
                                         $facilities=$property->facilities;
                                     if(!empty($facilities)){      
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
    if(in_array("Meeting Rooms",$facilities))
    {
        $d="checked";
    }
    if(in_array("Reception",$facilities))
    {
        $e="checked";
    }
    if(in_array("Toilets",$facilities))
    {
        $f="checked";
    }
    if(in_array("Phone lines",$facilities))
    {
        $g="checked";
    }
    if(in_array("Kitchen Area",$facilities))
    {
        $h="checked";
    }if(in_array("Cat 6 Data Cabling",$facilities))
    {
        $i="checked";
    }
    if(in_array("Cat 5 Cabling",$facilities))
    {
        $j="checked";
    }
                                     }
                                         ?>
                                              <input type="checkbox"name="fa1[]" class="larger "placeholder="€" id="auction"value="None" <?=$a?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2" >   None </h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="checkbox"name="fa1[]" class="larger "placeholder="€" id="auction" value="Alarm" <?=$b?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2" >   Alarm</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Parking" <?=$c?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Parking</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Meeting Rooms" <?=$d?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Meeting Rooms</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Reception" <?=$e?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Reception</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Toilets" <?=$f?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Toilets</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Phone lines" <?=$g?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Phone lines</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Kitchen Area" <?=$h?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Kitchen Area</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Cat 6 Data Cabling" <?=$i?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Cat 6 Data Cabling</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Cat 5 Cabling" <?=$j?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">  Cat 5 Cabling</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                               </div>
                                 </div>
                            </div>
                             <!--serviced oofice end-->
                            @endif
                           
                            <!---->
                             <div class="row" >
                                 
                                 <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4">
                                      @if(session::get('main_cat')==1)
                                     <div>
                                         <h4 class="mt-4">Minimum lease<small>(In Weeks)</small></h4>
                                        <!--<select class="form-control" id="countryId" name="minimum_lease" data-gmap-addr-donator="5" required>-->
                                        <!--  -->
                                        <!--//   $moth3=$moth6="";-->
                                        <!--//   if($property->Minimum_lease=="3 months")-->
                                        <!--//   {-->
                                        <!--//       $moth3="selected";-->
                                        <!--//   }-->
                                        <!--//   else if($property->Minimum_lease=="6 months")-->
                                        <!--//   {-->
                                        <!--//       $moth6="selected";-->
                                        <!--//   }-->
                                          
                                        <!--  -->
                                        <!--   <option value="">---No minimum Lease---</option>-->
                                        <!--   <option value="3 months" //$moth3?>>3 Moths</option>-->
                                        <!--   <option value="6 months" //$moth6?>>6 Months</option>-->
                                       <!--</select>-->
                                       
                                    <input class="form-control valid" type="text" value="{{isset($property)?$property->Minimum_lease:''}}" data-gmap-addr-donator="0" id="ber_no" name="minimum_lease" data-gtm-form-interact-field-id="0" aria-invalid="false" placeholder="eg: 6 Weeks">
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
                                        <h4 style="padding-right:10px" class="mt-4" >Owner occupied </h4> 
                                         
                                        <input type="checkbox" name="Owner_occupied"  value="1"  class="larger mt-4" <?=$owcheck?>>
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
     <input class=" larger mt-4" type="checkbox"  name="one_person" <?=$onecheck?> value="1">
                                     </div>
                                 </div>
                                 @endif
                            </div>
                            <!---->
                            <!--row4-->
                             @if(session::get('main_cat')==2)
                              <div class="row" >
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
                                        <input type="radio" class="larger1" name="Preference" value="Female only"<?=$fcheck?>><span class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Female only&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="radio" class="larger1" name="Preference" value="Male only" <?=$mcheck?>><span class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Male only&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        <input type="radio" class="larger1" name="Preference" value="Either" <?=$echeck?>><span class="mt-3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Either&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                        
                                        </center>
                                     </div>
                                     
                                 </div>
                                  
                            </div>
                            @endif
                             <!--row4-->
                             @if(session::get('main_cat')==9||session::get('main_cat')==10||session::get('main_cat')==11||session::get('main_cat')==12)
                              <div class="row" >
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                     Enter Feature You want to display in main page
                                     <small>Max Words 150</small>
                                         <textarea class="form-control" maxlength="300" name="feature" rows="2" cols="15" value="{{$property->feature}}">
                                             {{$property->feature}}
                                         </textarea>
                                   </div>
                                </div>
                            @endif
                            <!--row4 end-->
                        <!--next button-->
                           <section>
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                <a href="{{url('price')}}?id=2" class="btn btn-large btn-block yellow-btn next font-roboto 
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
                      </main>
                    
                      <?php 
}
                      if( Session::get('main_cat')==4 ||Session::get('main_cat')==7)
                      {
                          ?>
                      
                      <main style="border: 0px solid rgb(221, 221, 221);padding:10px">
                           <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3><?=Session::get('title')?> \ Add property details\{{session::get('main_cat')}}</h3><br><br>
                                
                                   
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  mb-4" >
                                      <h5><b>Access</b></h5>
                                      <?php
                                      $a=$b="";
                                      if($property->Access==1)
                                      {
                                          $a="checked";
                                      }
                                      if($property->Access==2)
                                      {
                                          $b="checked";
                                      }
                                      ?>
                                     <aside style="boder:1px solid black;padding:10px">
                                         &nbsp;&nbsp;&nbsp;    Business&nbsp;&nbsp;&nbsp;
                                             &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; <input type="radio" name="Access" value="1" <?=$a?> >
                                    </aside>
                                 </div>
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4 mb-4" >
                                      <h5><b></b></h5>
                                     <aside style="boder:1px solid black;padding:10px">
                                           &nbsp;&nbsp;&nbsp;  
24/7&nbsp;&nbsp;&nbsp;
                                           &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;   
                                           <input type="radio" name="Access" value="2" <?=$b?>>
                                    </aside>
                                 </div>
                             </div>
                           </div>
                           <div class="row ml-4">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ml-4">
                                 <h3 style="margin-left:12px">Spaces Available</h3>
                                 <input  style="margin-left:12px"type="number" name="space" value="{{$property->space}}" class="mt-4 form-control" placeholder="Enter a Number">
                                   
                               </div> </div><br><br>
                                @if(session::get('main_cat')==4||session::get('main_cat')==7)
                            <div class="row" id="serviced_office">
                                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                        <h4 class="mt-2">   Facilities</h4>
                                       <div style="display:flex;margin-top:15px">
                                         <?php
                                    //   j5
                                         $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k="";
                                         $facilities=$property->facilities;
                                     if(!empty($facilities)){      
            if(in_array("Garage",$facilities))
    {
        $a="checked";
    }
    if(in_array("Bus",$facilities))
    {
        $b="checked";
    }
    if(in_array("Train",$facilities))
    {
        $c="checked";
    }
    if(in_array("Meeting Rooms",$facilities))
    {
        $d="checked";
    }
    if(in_array("Shopping",$facilities))
    {
        $e="checked";
    }
    if(in_array("Toilets",$facilities))
    {
        $f="checked";
    }
   
                                     }
                                         ?>
                                              <input type="checkbox"name="fa1[]" class="larger "placeholder="€" id="auction"value="Garage" <?=$a?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2" >   Garage </h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="checkbox"name="fa1[]" class="larger "placeholder="€" id="auction" value="Bus" <?=$b?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2" >   Bus</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Train" <?=$c?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Train</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Meeting Rooms" <?=$d?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Meeting Rooms</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Shopping" <?=$e?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Shopping</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <input type="checkbox" name="fa1[]" class="larger "placeholder="€" id="auction"value="Toilets" <?=$f?>> &nbsp;
                                               &nbsp;&nbsp;<h6 class="mt-2">   Toilets</h6>&nbsp;&nbsp;&nbsp;&nbsp;
                                               
                                               
                                               
                                               </div>
                                 </div>
                            </div>
                            @endif
                            <!--=========parking facilities ends===-->
                                <!--next button-->
                           <section>
                                <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                            <a href="{{url('price')}}?id=2" class="btn btn-large btn-block yellow-btn next font-roboto 
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
                                           &nbsp;&nbsp;&nbsp;
                                               <i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                                             </div>
                                             
                                        </div>
                           </section>
                           <!--next button end-->
                        </main>
                     <?php } ?>
<!--=========================MAIN ENDS======================================-->                                       
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
<!--===============section 5=====================================================-->
<section id="Facilities">
     <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">5.Facilities</h3>
                              </div>
                          </div>
    <!--=========================MAIN STARTS======================================-->
                      <main style="border: 0px solid rgb(221, 221, 221);padding:10px">
                          <div class="row">
                               
                               @if(session::get('main_cat')==1)
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <h4 class="mt-4">Furnishing</h4>
                               <select class="form-control" id="property_select" name="Furnishing" data-gmap-addr-donator="5" onchange="myFunction()" required>
                                   <?php
                                   $fc=$uf=$ev="";
                                   if($property->furnishing=="Furnished")
                                   {
                                      $fc="selected"; 
                                   }
                                   else if($property->furnishing=="Un Furnished")
                                   {
                                        $uf="selected";
                                   }
                                   else if($property->furnishing=="Either Available")
                                   {
                                      $ev="selected";  
                                   }
                                   
                                   ?>
                                           <option value="">---select Furnishing type---</option>
                                           <option value="Furnished"<?=$fc?>>Furnished</option>
                                           <option value="Un Furnished"<?=$uf?>>Un Furnished</option>
                                           <option value="Either Available"<?=$ev?>>Either Available</option>
                                          
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

 $Alarm=$Smoker=$PetsAllowed=$StepFreeAccess=$WalkInShower= $WheelchairAccess=$HalfFurnished=$FullFurnished=$Dishwasher=$FirstLetting=$Garage=$NoFurniture=$BillsIncluded=$StudentAccommodation=$SeaViews= $Gym=$Balcony=$Patio=$Garden=$Broadband=$Microwave=$CentralHeating=$CableTelevision=$HeatedFlooring=$Dryer=$parking_select=$WashingMachine=$En_suite_check=$No_Pets=$TennisCourt=$SwimmingPool=$GamesRoom=$NoPets="";
 if($property->facilities)
{
    $facilities=($property->facilities);
    
 if(in_array("Step Free Access",$facilities))
    {
        $StepFreeAccess="checked";
    }
    if(in_array("Parking",$facilities))
    {
        $parking_select="checked";
    }
    if(in_array("En-suite",$facilities))
    {
        $En_suite_check="checked";
    }
    if(in_array("Washing Machine",$facilities))
    {
        $WashingMachine="checked";
    }
    if(in_array("Dryer",$facilities))
    {
        $Dryer="checked";
    }
    if(in_array("Heated Flooring",$facilities))
    {
        $HeatedFlooring="checked";
    }
    if(in_array("Cable Television",$facilities))
    {
        $CableTelevision="checked";
    }
    if(in_array("Central Heating",$facilities))
    {
        $CentralHeating="checked";
    }
    if(in_array("Microwave",$facilities))
    {
        $Microwave="checked";
    }
    if(in_array("Broadband",$facilities))
    {
        $Broadband="checked";
    }
    if(in_array("Garden",$facilities))
    {
        $Garden="checked";
    }
    if(in_array("Patio",$facilities))
    {
        $Patio="checked";
    }
    if(in_array("Balcony",$facilities))
    {
        $Balcony="checked";
    }
    if(in_array("Alarm",$facilities))
    {
        $Alarm="checked";
    }
    if(in_array("Smoker",$facilities))
    {
        $Smoker="checked";
    }
    if(in_array("Microwave",$facilities))
    {
        $Microwave="checked";
    }
    if(in_array("Pets Allowed",$facilities))
    {
        $PetsAllowed="checked";
    }
    if(in_array("Walk In Shower",$facilities))
    {
        $WalkInShower="checked";
    }
    if(in_array("Wheelchair Access",$facilities))
    {
        $WheelchairAccess="checked";
    }
    if(in_array("Half Furnished",$facilities))
    {
        $HalfFurnished="checked";
    }
    if(in_array("Full Furnished",$facilities))
    {
        $FullFurnished="checked";
    }
    if(in_array("Dishwasher",$facilities))
    {
        $Dishwasher="checked";
    }
    if(in_array("First Letting",$facilities))
    {
        $FirstLetting="checked";
    }
    if(in_array("Garage",$facilities))
    {
        $Garage="checked";
    }
    if(in_array("No Furniture",$facilities))
    {
        $NoFurniture="checked";
    }
    if(in_array("Bills Included",$facilities))
    {
        $BillsIncluded="checked";
    }
    if(in_array("Student Accommodation",$facilities))
    {
        $StudentAccommodation="checked";
    }
    if(in_array("Sea Views",$facilities))
    {
        $SeaViews="checked";
    }
    if(in_array("Gym",$facilities))
    {
        $Gym="checked";
    }
    if(in_array("Games Room",$facilities))
    {
        $GamesRoom="checked";
    }
    if(in_array("Swimming Pool",$facilities))
    {
        $SwimmingPool="checked";
    }
    if(in_array("Tennis Court",$facilities))
    {
        $TennisCourt="checked";
    }
    if(in_array("Garage",$facilities))
    {
        $Garage="checked";
    }
    if(in_array("No Pets",$facilities))
    {
        $NoPets="checked";
    }
    if(in_array("Garage",$facilities))
    {
        $Garage="checked";
    }
   
}



?>
                <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Parking" <?=$parking_select?>>
  <span class="checkbox-button">Parking</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="En-suite"<?=$En_suite_check?>>
  <span class="checkbox-button">En-suite</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Washing Machine" <?=$WashingMachine?>>
  <span class="checkbox-button">Washing Machine</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Dryer" <?=$Dryer?>>
  <span class="checkbox-button">Dryer</span>
</label>
                 </div>
                </div>
                <!--row2 amt-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Heated Flooring" <?=$HeatedFlooring?>>
  <span class="checkbox-button">Heated Flooring</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Cable Television" <?=$CableTelevision?>>
  <span class="checkbox-button">Cable Television</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Central Heating" <?=$CentralHeating?>>
  <span class="checkbox-button">Central Heating</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Microwave" <?=$Microwave?>>
  <span class="checkbox-button">Microwave</span>
</label>
                 </div>
                </div>
                <!--row3-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Broadband" <?=$Broadband?>>
  <span class="checkbox-button"> Broadband</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Garden" <?=$Garden?>>
  <span class="checkbox-button">Garden</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Patio" <?=$Patio?>>
  <span class="checkbox-button">Patio</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Balcony" <?=$Balcony?>>
  <span class="checkbox-button">Balcony</span>
</label>
                 </div>
                </div>
                <!--row4-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Alarm" <?=$Alarm?>>
  <span class="checkbox-button">Alarm</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Smoker" <?=$Smoker?>>
  <span class="checkbox-button">Smoker</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Pets Allowed" <?=$PetsAllowed?>>
  <span class="checkbox-button">Pets Allowed</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Step Free Access" <?=$StepFreeAccess?>>
  <span class="checkbox-button">Step Free Access</span>
</label>
                 </div>
                </div>
                <!--row5-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Walk In Shower" <?=$WalkInShower?>>
  <span class="checkbox-button">Walk In Shower</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Wheelchair Access" <?=$WheelchairAccess?>>
  <span class="checkbox-button">Wheelchair Access</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Half Furnished" <?=$HalfFurnished?>>
  <span class="checkbox-button">Half Furnished</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Full Furnished" <?=$FullFurnished?>>
  <span class="checkbox-button">Full Furnished</span>
</label>
                 </div>
                </div>
                <!--row6-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Dishwasher" <?=$Dishwasher?>>
  <span class="checkbox-button">Dishwasher</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="First Letting" <?=$FirstLetting?>>
  <span class="checkbox-button">First Letting</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Garage" <?=$Garage?>>
  <span class="checkbox-button">Garage</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="No Furniture" <?=$NoFurniture?>>
  <span class="checkbox-button">No Furniture</span>
</label>
                 </div>
                </div>
                <!--row7-->
                 <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Bills Included" <?=$BillsIncluded?>>
  <span class="checkbox-button"> Bills Included</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Student Accommodation" <?=$StudentAccommodation?>>
  <span class="checkbox-button">Student Accommodation</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Sea Views" <?=$SeaViews?>>
  <span class="checkbox-button">Sea Views</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Gym" <?=$Gym?>>
  <span class="checkbox-button">Gym</span>
</label>
                 </div>
                </div>
                <!--row8-->
                <div  class="row">
                   <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Games Room" <?=$GamesRoom?>>
  <span class="checkbox-button"> Games Room</span>
</label>
                 </div>
                 <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Swimming Pool" <?=$SwimmingPool?>>
  <span class="checkbox-button">Swimming Pool</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="Tennis Court" <?=$TennisCourt?>>
  <span class="checkbox-button">Tennis Court</span>
</label>
                 </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >
            <label class="checkbox-container">
  <input type="checkbox" name="fa[]" value="No Pets" <?=$NoPets?>>
  <span class="checkbox-button">No Pets</span>
</label>
                 </div>
                </div>
                <!--amenities end===================================-->
                <br>
                  
                
                

                                    
                      </main>
<!--=========================MAIN ENDS======================================--> 
</section>
<!--===============section 6=====================================================-->
<section id="description">
    <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <h3 class="text-danger">6.Describe your property</h3>
                              </div>
                          </div>
    <!--=========================MAIN STARTS======================================-->
                      <main style="">
                           <div class="row">
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <span style="color:rgb(113, 113, 113);">(Optional)</span>
                               
                             </div>
                           </div>
                          <!---->
                          <div class="row mt-4">
                             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                 <small>What's great about your property? You can describe the decoration, the neighborhood, what's nearby, etc...</small>
                               
                             </div>
                           </div>
                          <!---->
                            <div class="row" style="margin-top:0%">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                      
                                     
                                        <textarea id="description" rows="20" cols="120"  name="description"
                                        placeholder="Describe Your Property Here...">{{isset($property)?$property->description:''}}</textarea>
                                     
                                 </div>
                            </div>
                            <!---->
                             <!---->
                            <div class="row" style="margin-top:0%">
                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 mt-4">
                                      
                                     
                                        
                                     
                                 </div>
                            </div>
                            <!---->
                           
                        
                      </main>
<!--=========================MAIN ENDS======================================-->                   
</section>
<!--===============section 8=====================================================-->

<section id="media">
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
                                section.postWrapper .container img
{
  height:250px !important;
}
                                 
  </style>

              
                                                          
                                        
    
                                       
                                    
   <!-- ===================part1==============-->
    
                                
                                
                    <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                    <h4>Media</h4>
                     </div>
                </div>
                                
                                    <div class="row">                          
                               
                                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                                        COVER PHOTO<br><h6 class=" text-danger">Image Size should be Maximum 1KB</h6>
                                        <input type="file" name="list_image" id="fileInput"  accept="image/*"><br>
                                                        
                                    <!--</div>-->
                                    <!--    <div class="col-md-6">-->
                                                             
                                    @if(isset($property->main_image))
                                   
                                    <img src="{{asset('uploads/properties/'.$property->main_image)}}" id="imagePreview" alt="Image"   width="320px" height="240px" style="max-width: 320px";/>
                                    @else
                                    <img src="{{asset('website/images/no-image.jpg')}}" id="imagePreview" 
                                    alt="Image"    width="320" height="240" />    
                                    @endif                             
                                   
                                         
                                        </div> 

                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap " >
                                   <h5> VIDEO</h5>
                                   <div class="form-group">
            <label for="video">Choose Video</label>
            
            <input type="file" class="form-control-file" id="video" name="video" accept="video/*" onchange="previewVideo(event)">
            <video width="320" height="240" controls id="uploadedVideo">
            <source src="{{asset('uploads/videos/'.$property->video_url)}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
        <div class="form-group">
            <video id="videoPreview" width="320" height="240" controls style="display:none;">
                <source id="videoSource">
                Your browser does not support the video tag.
            </video>
        </div>
                                  <script>
function previewVideo(event) {
    var uploadedVideo = document.getElementById('uploadedVideo');
    if (uploadedVideo) {
        uploadedVideo.style.display = 'none';
    }
    var video = document.getElementById('videoPreview');
    var source = document.getElementById('videoSource');
    video.style.display = 'block';
    source.src = URL.createObjectURL(event.target.files[0]);
    video.load();
}
</script>
                                   <div style="margin-top:10px;font-size:15px">
                                   <label>Upload Youtube Video id here</label>
                                   <input type="text" name="Youtube_video_url" class="form-control" placeholder ="eg:https://www.youtube.com/watch?v=zwWt1zall34" value="{{isset($property)?$property->Youtube_video_url:''}}">
                                </div> 
                                </div>
                                </div>  
                                <!----------row2-------------->
                                <div class="row">
                                  
                                </div>
                       
                      
                                   
                   <br><br>               
   <!-- ===================part1 endss================- -->

   <!-- ===============PAERT 2 GALLERY STARTS============ -->
    
   <style>
section.postWrapper .container1 img
{
  height:100px !important;
  width:100px !important;
}
.titlebar
{
height:auto;
width:100%;
color:#fff;
background-color:green;
font-size:20px;
font-weight:800;
padding:10px;
border-radius:5px;
}
.addnew
{
  /* height:auto;
  width:200px;
  background-color:red; */
   /* color:#fff; */
  font-size:15px ;
  float:right;
}
.close-circle{
color:red;
font-size:18px;
font-weight:800;
float:center;
padding-top:-1px;
}
.img_box
{
  border:1px solid black;
  padding:5px
}
.file-upload-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.upload-button {
    border: 2px solid #4CAF50;
    color: white;
    background-color: #4CAF50;
    padding: 2px 2px;
    /* border-radius: 8px; */
    width:140px;
    font-size: 12px;
    cursor: pointer;
}

.file-input {
    font-size: 8px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

   </style>
   <div class="titlebar">Extra Images<button onclick="return false;"class="btn btn-warning addnew" >Add New +</button></div>
<br>
<?php $count=count($property_arr);
if($count<1)
{
    $icount=3;
}
else{
    $icount=$count;
}
?>
   <section class="container1">
<div class="row" id="parent-div">
   <?php for($i=0;$i<$icount;$i++) { 
   if($count>0){
        $img=$property_arr[$i];
   }
   else
   {
       $img=$i;
   }
      
   ?>
  <div id="img_<?=$img?>" class="col-md-2 ">
    <div class="img_box">
    <span  onclick="remove('<?=$img?>')">
      <span class="close-circle" >
      <i class="fa fa-times-circle" aria-hidden="true"></i>
   </span>
    </span><br>
    <?php if($count>0){
        $img=$property_arr[$i];
        ?>
      <img src="{{asset('uploads/properties/'.$img)}}" id="<?=$i?>" alt="your image" width="140" height="100" />
      <?php  } 
      else{
      ?>
      <img src="{{ asset('website/images/no-image.jpg') }}" id="<?=$i?>" alt="your image" width="140" height="100" />
      <?php } ?>
      <br>
      <div class="file-upload-wrapper">
      <?php if($count<1){ ?>
  <button class="upload-button" onclick="return false;">Upload File</button>
  <?php } ?>
  <input type="file" id="file-input" name="extra_img[]"class="file-input" onchange="document.getElementById(<?=$i?>).src = window.URL.createObjectURL(this.files[0])">
</div>
</div>
    </div>
<br>
        <?php
        }
        ?>
</div>
<center><br><br>
<div style="padding:10px">
<button class="search-btn">SAVE</button>
</div>
</center>
      </div>
<script>
  let noteBank = document.querySelector(".note_bank");
var i=3;
let addNew = document.querySelector(".addnew");
addNew.addEventListener('click', () => {
  
  if(i==10)
  {
    // alert(ji);
// return false;
  }
  i++
  let newNote = document.createElement("div");
  newNote.classList.add("new_note");
  document.getElementById("parent-div")
                .innerHTML +=
                `  <div id="img_`+i+`" class="col-md-2 ">
    <div class="img_box">
    <span  onclick="remove(`+i+`)">
      <span class="close-circle" >
      <i class="fa fa-times-circle" aria-hidden="true"></i>
   </span>
    </span><br>
      <img src="{{ asset('website/images/no-image.jpg') }}" id="`+i+`" alt="your image" width="140" height="100" />
      <br>
      <div class="file-upload-wrapper">
     
  <button class="upload-button"onclick="return false;">Upload File</button>
  <input type="file" name="extra_img[]" id="file-input" class="file-input" onchange="document.getElementById(`+i+`).src = window.URL.createObjectURL(this.files[0])">
</div>`;
});

function remove(el) {
//   alert(el);
  var element = el;
  i--;
  document.getElementById("img_"+el).remove();
  $.ajax({
      url:"{{ url('removefetchedimage') }}",
      data:{id : el},
      success:function(data){
      }
    })
}
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
</div>
</section>    
</section>

<!--===============MAIN ENDS===============================================-->
			</div>	
		</div>
	</div>
</div>

@endsection