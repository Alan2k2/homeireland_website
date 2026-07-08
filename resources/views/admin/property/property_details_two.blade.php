@extends('layouts.admin.main')
@section('content')
<style>
    input.larger {
        width: 20px;
        height: 20px;
      }
    a {
        text-decoration: none;
    }

form
{
    font-size:15px;
}

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

@media(max-width:767px){
    .preferencecontainer{
        display:flex;
        flex:wrap;
    }
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


<form method="get" action="{{url('admin/Facilities')}}" id="uploadForm" >
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-danger">{{$property->main_name}} / Property Details</h3>
    </div>
</div>
<div class="row">

                          
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     <div>
                                         <h4 class="mt-4"> Property type</h4>
                                         <!--j2-->
<select class="form-control" id="property_select" name="property_type" data-gmap-addr-donator="5" onchange="myFunction()" required>
                                           <option value="">---select Type of Property---</option>
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
                                           
                                       </select>
                                     </div>
                                     </div>

                                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                     
                                       
                                       <h4 class="mt-4">Available from</h4>
                                       
                                       <?php
                                       if($property)
                                       {
                                       $af_date=$property->Available_from;
                                       
                                      }
                                       ?>
     <input class="form-control valid" type="date" value="<?=$af_date?>" required data-gmap-addr-donator="0" id="available_from" name="available_from" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                   
                                 </div>
                            </div>
                                    
                                    <!-- ----new row--- -->
<div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4" >
    <h4 class="mt-4">Available for </h4>
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
                                 
                            </div>
                            
                                    
    

                                    <!-- -----new row ends------ -->
    
     <div class="row" >
                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" >
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
                                          </center>
                                         <div style="display:flex;">
                                            <div class="preferencecontainer">
                                                
                                        <input type="radio" class="larger" name="Preference" value="Female only"<?=$fcheck?>><span class="">&nbsp;&nbsp;Female only&nbsp;&nbsp;</span>
                                            </div> 
                                        <div class="preferencecontainer">
                                                
                                        <input type="radio" class="larger" name="Preference" value="Male only" <?=$mcheck?>><span class="">&nbsp;&nbsp;Male only&nbsp;&nbsp;</span>
                                            </div>
                                        <div class="preferencecontainer">
                                                
                                        <input type="radio" class="larger" name="Preference" value="Either" <?=$echeck?>><span class="">&nbsp;&nbsp;Either&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                            </div>
                                        
                                         </div>
                                       
                                     </div>
                                     
                                 </div>
                                  
                            </div>
                            @endif
                             <!--row4-->
        
    
</section>
<!--===============section 2=====================================================-->
<section id="next">
      <!--next button-->
     
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                            <a href="{{url('admin/edit-properties')}}/{{$property->id}}?a=2&&b=4"  class="btn btn-large btn-block yellow-btn next font-roboto 
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
                                    </form>
                           <!--next button end-->
</section>
@endsection