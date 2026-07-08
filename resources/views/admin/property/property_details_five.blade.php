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


<form method="get" action="{{url('admin/property_description')}}" id="uploadForm" >
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-danger">{{$property->main_name}} / Property Details</h3>
    </div>
</div>
<div class="row" >
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                      
                                     <div>
                                         <h4 class="mt-4"> Property type</h4>
                                         <!--j2-->
                                         <?php
                                         $a=$b=$c=$d=$e=$f="";
                                         if($property->property_type=="Apartment for sale")
                                         {
                                             $a="selected";
                                         }
                                         if($property->property_type=="Bungalow for sale")
                                         {
                                             $b="selected";
                                         }
                                         if($property->property_type=="Duplex for sale")
                                         {
                                             $c="selected";
                                         }
                                         if($property->property_type=="House for sale")
                                         {
                                             $d="selected";
                                         }
                                         if($property->property_type=="Site for sale")
                                         {
                                             $e="selected";
                                         }
                                         if($property->property_type=="Studio apartment for sale")
                                         {
                                             $f="selected";
                                         }
                                         ?>
<select class="form-control" id="property_select" name="property_type" data-gmap-addr-donator="5" onchange="myFunction()">
                                           <option value="">---select Type of Property---</option>
                                                              <!--jj1-->
                                          <option value="Apartment for sale"<?=$a?>>Apartment for sale</option>
                                          <option value="Bungalow for sale" <?=$b?>>Bungalow for sale</option>
                                          <option value="Duplex for sale" <?=$c?>>Duplex for sale</option>
                                          <option value="House for sale" <?=$d?>>House for sale</option>
                                          <option value="Site for sale" <?=$e?>>Site for sale</option>
                                          <option value="Studio apartment for sale" <?=$f?>>Studio apartment for sale</option>
                                         
                                        </select>
                                     </div>
                                 </div>
                                 
                                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                                       <h4 class="mt-4">Tax Designation<span style="color:rgb(113, 113, 113)">&nbsp;(Optional)</span></h4>
                                       <?php
                                       $a=$b=$c=$d=$f="";
                                       if($property->tax=="Section 48")
                                       {
                                           $a="selected";
                                       }
                                       if($property->tax=="Section 23")
                                       {
                                           $b="selected";
                                       }if($property->tax=="Section 27")
                                       {
                                           $c="selected";
                                       }
                                       if($property->tax=="Section 50")
                                       {
                                           $d="selected";
                                       }
                                       if($property->tax=="Holiday home")
                                       {
                                           $e="selected";
                                       }
                                       ?>
    <select class="form-control"  name="tax" data-gmap-addr-donator="5" >
                                           <option value="">Not a tax based property</option>
                                                            
                                          <option value="Section 48" <?=$a?>>Section 48</option>
                                          <option value="Section 23" <?=$b?>>Section 23</option>
                                           <option value="Section 27" <?=$c?>>Section 27</option>
                                            <option value="Section 50" <?=$d?>>Section 50</option>
                                            <option value="Holiday home" <?=$e?>>Holiday home</option>
                                            
                                         
                                        </select>
                                    
                                 </div>
                            </div>
                            
                                
                            <div class="row">
                                 
                                 
                                    
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4 mb-4" >
                                     Bedrooms<br>
                                     <input type="number" class="mt-4 form-control" name="single_room" value="{{$property->Single_Bedrooms}}">
                                 </div>
                                 
                               
                                 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 mt-4 mb-4">
                                    Bathrooms
                                    <br>
                                     <input type="number" class="mt-4 form-control" name="bathroom" value="{{$property->Bathrooms}}">
                                 </div>
                              
                            </div> 
                            <div class="row" id="floor1">
                                          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4">
                                             <div class="mt-0">
                                       <h4>Floor area</h4> 
                                         <input type="text" placeholder="Floor area" class="form-control mb-4" name="floor_area" value="{{$property->floor_area}}"> 
                                    </div>
                                         </div>
                                         <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" style="padding-top:8px">
                                              <span style="font-size:14px"></span> 
                                              <?php
                                              $a=$b=$c=$d="";
                                              if($property->unit=="Acres")
                                              {
                                                  $a="selected";
                                              }
                                              if($property->unit=="Hectars")
                                              {
                                                  $b="selected";
                                              }
                                              if($property->unit=="Square Metres")
                                              {
                                                  $c="selected";
                                              }
                                              if($property->unit=="Feet")
                                              {
                                                  $d="selected";
                                              }
                                              
                                              ?>
                                              <select class="form-control mb-4 mt-4"  id="plotAreaUnit" name="unit">
                                                    <option value="Acres" <?=$a?>>Acres</option>
                                                    <option value="Hectars" <?=$b?>>Hectars</option>
                                                     <option value="Square Metres" <?=$c?>>Square Metres</option>
                                                       <option value="Feet" <?=$d?>>Feet</option>
                                                </select>
                                         </div>
                                          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 mt-4 housetype">
                                               <h4>House type</h4> 
                                               <select class="form-control mb-4 "  id="plotAreaUnit" name="plot_area_unit">
                                                    <option value="" >Select house type</option>
                                                    <option value="1" >Detached House</option>
                                                    <option value="2" >Semi-Detached House</option>
                                                    <option value="3" >Terraced House</option>
                                                    <option value="4" >End of Terrace House</option>
                                                    <option value="5" >Townhouse</option>
                                                </select>
                                         </div>
                                     </div>
                                        <div class="row" >
                                
                                  <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mt-4" required>
                                       <h4 class="mt-4">BER</h4>
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
                                 <!---->
                                 
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
                                 <!---->
                                 
                            </div>
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
</section>
@endsection