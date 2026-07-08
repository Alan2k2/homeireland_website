<?php
// echo"<pre>";print_r($properties);
?>
<style>
    .page-link {
    padding: 12px 15px;
    color: #FF4005;
}
.page-item.active .page-link {
    background-color: #FF4005;
    border-color: #FF4005;
}
.page-link:focus{
    box-shadow: none;
}
.page-link {
  position: relative;
  display: block;
  padding: $pagination-padding-y $pagination-padding-x;
  margin-left: -$pagination-border-width;
  line-height: $pagination-line-height;
  color: $pagination-color;
  text-decoration: if($link-decoration == none, null, none);
  background-color: $pagination-bg;
  border: $pagination-border-width solid $pagination-border-color;
}
  .property-ad-img {
    height: 350px;
    width: 100%;
  }
  .breadcrumps
  {
     font-size:12px; 
  }
  .breadcrumps:hover
  {
      color:blue !important;
  }
  
                                .save{
                                    background-color: rgb(211, 17, 26);
                                    color: #fff;
                                    widows: 300px;
                                    /*border-radius:5px;*/
                                     border:1px solid rgb(211, 17, 26);
                                     font-weight:800;

                                }
                                .save:hover{
                                    background-color: black;
                                    color: #fff;

                                }
                                
                                @media(min-width:1200px){
                                    .roww{
                                        display:flex;
                                        justify-content:space-between;
                                    }
                                    .controll{
                                        /*width:200px !important;*/
                                        margin-left:15px!important;
                                    }
                                    .custom-width {
                                         /*width: 250px !important; */
                                         font-size:12px !important;
                                         margin-right:15px!important;
                                    }
                                    .custom-width1 {
                                         /*width: 250px !important; */
                                         font-size:12px !important;
                                         /*margin-right:15px!important;*/
                                    }
                                    
                                }
                                
        .myform{
            
            border-radius: 10px;
        }             
                                
         @media(max-width:500px){
        .myform{
            margin: 0px 5px;
            border-radius: 10px;
        }
        
          .item-properties{
            border-radius: 25px;
        }
        
         .save{
            border-radius: 25px;
        }
        
         .next-save{
            margin-bottom: 5px;
        }
    }
    
    /*media query for select text*/
    @media(max-width:768px){
        #countryId{
            text-align:center;
            padding-left:0px;
            padding-right:0px;
        }
        
        .myform{
            margin-top:30px;
        }
    }
    
    @media (min-width: 992px) {
  .text-lg {
    font-size: 0.875rem; 
  }
}
    
    @media(min-width:1200px){
         .img-responsive{
        margin-left:15%;
    }
    .img-responsive1{
        margin-left:0%!important;
    }
    }
    
  .form-control {
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.form-control:hover {
  border-color: #007bff; /* Blue border */
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Glowing effect */
}

/* Optionally, add focus effect for when the input is clicked */
.form-control:focus {
  border-color: #007bff;
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
}

@media(min-width:1000px){
    .row111{
        margin-right:15px;
    }
    .row12{
        display:flex;
        justify-content:space-evenly;
    }
    .row11{
        display:flex;
        justify-content:space-evenly;
    }
    .custom-margin{
        margin-left:25px;
    }
    .custom-margin1{
        margin-left:13px;
    }
    .custom-margin2{
        margin-left:19px;
    }
    .custom-margin3{
        margin-left:19px;
    }
    
    .selecttype{
        margin-left:60px;
    }
    
    .preferencetype{
        margin-left:45px;
    }
    .rowmain{
        display:flex;
        justify-content:center;
    }
}
@media(min-width:1300px){
    .selecttype{
         margin-left:85px;
    }
    
       
    .preferencetype{
        margin-left:70px;
    }
}

.rowmain{
    display:flex;
    justify-content:center;
}

    
</style>
<style>
        .shake:hover {
            display: inline-block;
            animation: shake 1.5s infinite;
        }

        @keyframes shake {
            0%, 100% {
                transform: translateY(0);
            }
            25% {
                transform: translateY(-10px);
            }
            50% {
                transform: translateY(10px);
            }
            75% {
                transform: translateY(-10px);
            }
        }
        </style>
@extends('layouts.website.main') 
@section('content')



    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section class="container" style="margin-top:-200px">
         <!--==============BREAD CRUMPS STARTS===================-->
         <?php
         $var1=$var2=$var3=$var4="";
         $var1="Home";
         
     if(Session::get('search_type')=="all")
       {
         $var2=" ";
       }
         elseif(Session::get('search_type')=="f")
         {
        $var2=" / Featured";
         }
         elseif(Session::get('search_type')=="s")
          {
        $var2=" / Standard";
          }
          elseif(Session::get('search_type')=="a")
          {
         $var2=" / Agent";
        
          }
          if(Session::get('main_categorty')!="")
          {
             if(Session::get('main_categorty')==1)
                                      {
                                            $var3="  / Residential Rent";
                                            
                                      }
                                    if(Session::get('main_categorty')==2)
                                       { 
                                           $var3=" / Sharing";
                                          
                                           
                                       }
                                      if(Session::get('main_categorty')==3)
                                       { 
                                           $var3=" / Commercial Rent";
                                       }
                                       if(Session::get('main_categorty')==4)
                                       { 
                                           $var3=" / Parking";
                                       }
                                       if(Session::get('main_categorty')==5)
                                       { 
                                          $var3=" / Residential Sale";
                                          
                                       }
                                       if(Session::get('main_categorty')==6)
                                       { 
                                           $var3=" / Commercial Sale";
                                       }
                                      if(Session::get('main_categorty')==7)
                                      { 
                                          $var3="/ Parking";
                                         
                                      }
                                     if(Session::get('main_categorty')==8)
                                      { 
                                          $var3=" / Holiday Home";
                                           
                                       }
          }
          if($user_name==1)
          {
             $var4=" / Agent /"; 
             $var5=strtoupper($user->name);
          }
         ?>
        <section style="float:left;" class="breadscrumpSec">
             <table width="100%">
                 <tr>
                     <td>
                         <breadscrup class="breadscrump">
                             <a href="{{url('/')}}" class='breadcrumps'><?=$var1?></a>
                             <a href="{{url('filter-properties')}}?search_type=all" class='breadcrumps'>/ Search All</a>
                           <a href="{{url('filter-properties')}}?search_type=a" class='breadcrumps'><?=$var2?></a>  
                             <?php if($var4!="")
                             {
                            echo $var3;
                             }
                             else
                             {
                                 $var5=$var3;
                             }
                                 ?>
                                 <?=$var4?>
                                 <span  style="color:red">
                               <?=$var5?>
                          </span>
                            
                           
                          </breadscrup>
                     </td>
                 </tr>
             </table>
         </section>
         <br>
           <!--===================BREAD CRUMBS ENDS============-->
    <!--=======================head======================-->
    <?php $page=isset($_GET['page'])?($_GET['page']):1;
    $user_present=isset($_GET['user_id'])?($_GET['user_id']):'';
    ?>
     <form action="{{url('filter-properties')}}"style="border:7px solid red" id="myForm" class="myform">
         <br>
         <input type="hidden" name="page" id="page" value="<?=$page?>">
          <input type="hidden" name="user_id" id="user_id" value="<?=$user_present?>">
          <center>
                <h4><b>{{$search_title}}</b></h4>
            </center>
            @if(Session::get('main_categorty')=="")
                 <div class="row rowmain" style="padding:10px;">
                      <!--<div class="col-lg-2 col-2 mt-2">-->
                      <!--    </div>-->
                    <div class="col-lg-4  col-8 mt-8">
                        <center>
                       <div class="form-group">
                       
                      <select class="form-control" name="main_cat" id="cat-id" >
          <option value=""> Select Category </option>
          
          <!--<option value="1" >Residential Rent - For Rent</option>-->
          <!--<option value="2" >Sharing (room) - For Rent</option>-->
          <!--<option value="3" >Commercial Rent- For Rent</option>-->
          
          
          <!--<option value="5" >Residential Sale- For Sale</option>-->
          <!--<option value="6" >Commercial Sale - For Sale</option>-->
          <!--<option value="4" >Parking Rent - For Rent</option>-->
          <!-- <option value="7" >Parking Sale - For Sale</option>-->
          <!-- <option value="8" >Holiday Homes </option>-->
          <!-- <option value="9" >Residential - Needed </option>-->
          <!--  <option value="10" >Sharing - Needed </option>-->
          <!--   <option value="11" >Commercial - Needed </option>-->
          <!--    <option value="12" >Parking - Needed </option>-->
          <!-- <p>RENT</p> -->
              <option value="" class="h3" disabled>RENT</option>
              <option value="1">House</option>
              <option value="2">Sharing</option>
              <option value="3">Commercial</option>
              <option value="8">Holiday Home</option>
              <option value="7">Parking</option>
              <!-- <p>SALE</p> -->
              <option value="" class="h3" disabled>SALE</option>
              <option value="5">House</option>
              <option value="2">Sharing</option>
              <option value="6">Commercial</option>
              <option value="8">Holiday Home</option>
              <option value="7">Parking</option>
              <!-- <p>NEEDED</p> -->
              <option value="" class="h3" disabled>NEEDED</option>
              <option value="9">House</option>
              <option value="10">Sharing</option>
              <option value="11">Commercial</option>
              <option value="8">Holiday Home</option>
              <option value="12">Parking</option>
          </select>
                     </div> 
                     </center>
                    </div>
                 </div>
            @endif               
            @if(Session::get('main_categorty')!="")
                         
            <div class="row roww" style="padding:10px">
                 @if(Session::get('main_categorty')=="43" || Session::get('main_categorty')=="34"||Session::get('main_categorty')=="73"|| Session::get('main_categorty')=="62")
                          <div class="col-lg-3 col-3 mt-3">
                              </div>
                             
                          @endif
                    <div class="row row11 ">
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 row111">
        <div class="form-group">
            <label for="exampleFormControlInput1"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Location</label>
            <input type="text" list="browsers" id="browser" name="location" class="form-control custom-width"  placeholder="County/City/Town/Street/EIR Code" value="{{isset($data['location'])?$data['location']:""}}">
            
            <datalist id="browsers">
                @foreach($counties as $coun)
        <option value="{{$coun->name}}">
        @endforeach
    </datalist>
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 row111">
        <div class="form-group">
            <label for="exampleFormControlInput1">Minimum Price</label>
            <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="min_price" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Minimum Price" value="{{isset($data['min_price'])?$data['min_price']:""}}">
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 row111">
        <div class="form-group">
            <label for="exampleFormControlInput1">Maximum Price</label>
            <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="max_price" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Maximum Price" value="{{isset($data['max_price'])?$data['max_price']:""}}">
        </div>
    </div>
</div>
@if(Session::get('main_categorty')==1||Session::get('main_categorty')==5||Session::get('main_categorty')==8)
<div class="row row12">
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 custom-margin1">
        <div class="form-group">
            <label for="exampleFormControlInput1">Minimum Bedroom</label>
            <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="min_bed" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Minimum Bed" value="{{isset($data['min_bed'])?$data['min_bed']:""}}">
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 custom-margin2">
        <div class="form-group">
            <label for="exampleFormControlInput1">Maximum Bedroom</label>
            <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="max_bed" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Maximum Bed" value="{{isset($data['max_bed'])?$data['max_bed']:""}}">
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 custom-margin3">
        <div class="form-group">
            <label for="exampleFormControlInput1">Minimum Bathrooms</label>
            <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="min_bathroom" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Minimum Bath" value="{{isset($data['min_bathroom'])?$data['min_bathroom']:""}}">
        </div>
    </div>
    </div>
    @if(Session::get('main_categorty')==8)
    <div class="row row12">
    <div class="col-lg-2 col-md-2 col-sm-12 mt-3 custom-margin2">
        <div class="form-group">
            <label for="exampleFormControlInput1">From date</label>
            <input type="date" name="fdate" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Maximum Bed" value="{{isset($data['fdate'])?$data['fdate']:""}}">
        </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 mt-3 custom-margin3">
        <div class="form-group">
            <label for="exampleFormControlInput1">To date</label>
            <input type="date" name="tdate" class="form-control custom-width1" id="exampleFormControlInput1" placeholder="Minimum Bath" value="{{isset($data['tdate'])?$data['tdate']:""}}">
        </div>
    </div>
    <div class="col-lg-3 col-md-4 col-sm-12 mt-3 custom-margin3"></div>
    </div>
    @endif

@endif

                  <div>
                      
                  
                    @if(Session::get('main_categorty')==2)
                    <div class="col-lg-3 col-md-3 col-sm-2 mt-3 selecttype">
                        <div class="form-group ">
                        <label for="exampleFormControlInput1">Type Of Bedroom</label>
                        <?php
                            $a=$b=$c=$d="";
                            if(isset($data['bed_type']))
                            {
                                if(in_array("Single room",$data['bed_type']))
                                {
                                    $a="selected";
                                }
                                if(in_array("Double room",$data['bed_type']))
                                {
                                    $b="selected";
                                }
                                if(in_array("Twin room",$data['bed_type']))
                                {
                                    $c="selected";
                                }
                                if(in_array("Shared room",$data['bed_type']))
                                {
                                    $d="selected";
                                }
                            }
                            ?>
                         <select class="form-control" multiple="multiple" size="30" style="height:100px;" name="bed_type[]" data-gmap-addr-donator="5" multiple>
                                           
                                             <option value="Single room"<?=$a?>>Single room</option>
                                             <option value="Double room" <?=$b?>>Double room</option>
                                             <option value="Twin room" <?=$c?>>Twin room</option>
                                             <option value="Shared room" <?=$d?>>Shared room</option>
                                       </select>
                      </div>
                   </div>
                   
                   <div class="col-lg-3 col-md-3  col-sm-12 mt-3 preferencetype">
                        <div class="form-group">
                            <?php
                            $a=$b=$c="";
                            if(isset($data['preference']))
                            {
                                if($data['preference']=="Female only")
                                {
                                    $a="selected";
                                }
                                if($data['preference']=="Male only")
                                {
                                    $b="selected";
                                }
                                if($data['preference']=="Either")
                                {
                                    $c="selected";
                                }
                            }
                            ?>
                        <label for="exampleFormControlInput1">Preference</label>
        <select class="form-control" id="countryId" name="preference" data-gmap-addr-donator="5">
                                             <option value="">---Select---</option>
                                           <option value="Female only"<?=$a?>>Female only</option>
                                           <option value="Male only" <?=$b?>>Male only</option>
                                            <option value="Either" <?=$c?>>Either</option>
                                            
                                          
                                       </select>
                      </div>
                   </div>
                   @endif
                 </div>
            </div>
            
            <!----------------row 2------------------------->
            <style>
                input.larger {
        width: 25px;
        height: 25px;
      }
      
        .tdtxtbottom input{
              margin-top:8px;
          }
          
             .tdtxtbottom label{
              margin-top:10px;
          }
      
      @media(max-width:768px){
          .tdtxtbottom td{
              vertical-align: bottom;
          }
          .tdtxtbottom label{
              margin-top:22px;
          }
          .tdtxtbottom input{
              margin-top:15px;
          }
          
          .tdtxtbottom1 input{
               margin-top:30px!important;
          }
          .tdtxtbottom2 input{
               margin-top:35px!important;
          }
      }
      
      /*style for the font inside the table*/
      .property-type {
    font-size: 12px; 
}

@media (max-width: 768px) {
    .property-type {
        font-size: 12px; 
    }
    
    
}

    .customised_searchbtn{
        width:200px;
        height:auto;
        padding:10px;
        background-color:#dc3545;
        border:1px solid #dc3545;
        border-radius:5px;
        color:white;
        margin-bottom:5px;
    }
    
    .customised_clearbtn{
         width:120px;
         height:42px;
         background-color:#dc3545;
         border:1px solid #dc3545;
         border-radius:5px;
         color:white;
         margin-bottom:5px;
         font-weight:bold;
         }
         @media(max-width:677px){
             .customised_clearbtn{
                 width:80px;
                 height:36px;
             }
         }



.property-options-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-evenly;
}

.property-option {
    display: flex;
    flex-direction: column; /* Makes the label appear above the input */
    margin-right: 10px; /* Adjust as needed */
    margin-bottom: 10px; /* Adjust as needed */
}

.tenants-select {
    margin-left: 20px; /* Adjust as needed */
    display: flex;
    flex-direction: column; /* Makes the label appear above the select input */
}


            </style>
            <center>
                <?php
            $a=$b=$c=$d=$e=$f=$g=$h=$i=$j=$k=$l=$m=$n=$o="";
            if(isset($data['property_type']))
            {
                if(in_array("House",$data['property_type']))
                {
                    $a="checked";
                }
                if(in_array("Apartment",$data['property_type']))
                {
                    $b="checked";
                }
                if(in_array("Studio",$data['property_type']))
                {
                    $c="checked";
                }
                if(in_array("Flat",$data['property_type']))
                {
                    $d="checked";
                }
                // ---3-------------------------------------------------------------
                if(in_array("Commercial Site",$data['property_type']))
                {
                    $e="checked";
                }
                if(in_array("Agricultural Land",$data['property_type']))
                {
                    $f="checked";
                }
                if(in_array("Development Land",$data['property_type']))
                {
                    $g="checked";
                }
                if(in_array("Industrial Site",$data['property_type']))
                {
                    $g="checked";
                }
                if(in_array("Industrial Unit",$data['property_type']))
                {
                    $i="checked";
                }
                if(in_array("Investment Property",$data['property_type']))
                {
                    $j="checked";
                }
                // ----row2------
                
                if(in_array("Office Share",$data['property_type']))
                {
                    $k="checked";
                }
                if(in_array("Office Space",$data['property_type']))
                {
                    $l="checked";
                }
                if(in_array("Restaurant / Bar / Hotel",$data['property_type']))
                {
                    $m="checked";
                }
                if(in_array("Retail Unit",$data['property_type']))
                {
                    $n="checked";
                }
                if(in_array("Serviced Office",$data['property_type']))
                {
                    $o="checked";
                }
            }
            
            ?>
@if(Session::get('main_categorty')==1 ||Session::get('main_categorty')==2)
           
            <!--<table width="100%">-->
            <!--    <tr>-->
            <!--        <td align="center" width="1%"> <label for="exampleFormControlInput1 ">House</label>-->
            <!--            &nbsp;&nbsp;<input type="checkbox" class="larger " value="House" name="property_type[]" <?=$a?>></td>-->
            <!--         <td  width="1%">&nbsp;</td>-->
            <!--         <td align="center" width="1%"> <label for="exampleFormControlInput1">Apartment</label>-->
            <!--            &nbsp;&nbsp;<input type="checkbox" class="larger" value="Apartment" name="property_type[]" <?=$b?>></td>-->
            <!--         <td  width="1%">&nbsp;</td>-->
            <!--         @if(Session::get('main_categorty')==1)-->
            <!--         <td align="center" width="1%"><label for="exampleFormControlInput1">Studio</label>-->
            <!--            &nbsp;&nbsp;<input type="checkbox" class="larger" value="Studio" name="property_type[]" <?=$c?>></td>-->
            <!--            @endif-->
            <!--         <td  width="1%">&nbsp;</td>-->
            <!--         <td align="center" width="1%"> <label for="exampleFormControlInput1">Flat</label><br>-->
            <!--            &nbsp;&nbsp;<input type="checkbox" class="larger" value="Flat" name="property_type[]" <?=$d?>></td>-->
            <!--            <td  width="1%">&nbsp;</td><td  width="1%">&nbsp;</td>-->
            <!--            <td width="9%">-->
            <!--                <label for="exampleFormControlInput1"> Tenants</label>-->
            <!--                <select class="form-control form-select1" id="countryId" name="no_tenants" data-gmap-addr-donator="5">-->
            <!--                                 <option value="">Select</option>-->
            <!--                               <option value="1"<?=$a?>>1 Tenant</option>-->
            <!--                               <option value="2" <?=$b?>>2 Tenant</option>-->
            <!--                                <option value="3" <?=$c?>>3 Tenant</option>-->
            <!--                                <option value="4" <?=$d?>>4 Tenant</option>-->
            <!--                                <option value="5" <?=$e?>>5 Tenant</option>-->
            <!--                                <option value="6" <?=$f?>>6 Tenant</option>-->
                                          
            <!--                           </select></td>-->
            <!--         <td  width="10%">&nbsp;</td>-->
            <!--    </tr>-->
            <!--</table>-->
 <div class="property-options-container">
    <div class="property-option">
        <label for="exampleFormControlInput1">House</label>
        <input type="checkbox" class="larger" value="House" name="property_type[]" <?=$a?>>
    </div>
    <div class="property-option">
        <label for="exampleFormControlInput1">Apartment</label>
        <input type="checkbox" class="larger" value="Apartment" name="property_type[]" <?=$b?>>
    </div>
    @if(Session::get('main_categorty')==1)
    <div class="property-option">
        <label for="exampleFormControlInput1">Studio</label>
        <input type="checkbox" class="larger" value="Studio" name="property_type[]" <?=$c?>>
    </div>
    @endif
    <div class="property-option">
        <label for="exampleFormControlInput1">Flat</label>
        <input type="checkbox" class="larger" value="Flat" name="property_type[]" <?=$d?>>
    </div>
    <div class="property-option tenants-select">
        <label for="exampleFormControlInput1">No Of Tenants</label>
         <?php
                                       $a=$b=$c=$e=$d=$f="";
                                      $no_tenants= "";
                                       if(isset($data['no_tenants']))
                                       {
                                           $no_tenants= $data['no_tenants'];
                                           if($data['no_tenants']=="1")
                                           {
                                               $a="selected";
                                           }
                                           if($data['no_tenants']=="2")
                                           {
                                               $b="selected";
                                           }
                                           if($data['no_tenants']=="3")
                                           {
                                               $c="selected";
                                           }
                                           if($data['no_tenants']=="4")
                                           {
                                               $d="selected";
                                           }
                                           if($data['no_tenants']=="5")
                                           {
                                               $e="selected";
                                           }
                                           if($data['no_tenants']=="6")
                                           {
                                               $f="selected";
                                           }
                                       }
                                       ?>
                        
        <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="" size="2" value="<?=$no_tenants?>" name="no_tenants" >
        <!--<select class="form-control form-select1" id="countryId" name="no_tenants" data-gmap-addr-donator="5">-->
        <!--    <option value="">Select</option>-->
        <!--    <option value="1" <?=$a?>>1 Tenant</option>-->
        <!--    <option value="2" <?=$b?>>2 Tenant</option>-->
        <!--    <option value="3" <?=$c?>>3 Tenant</option>-->
        <!--    <option value="4" <?=$d?>>4 Tenant</option>-->
        <!--    <option value="5" <?=$e?>>5 Tenant</option>-->
        <!--    <option value="6" <?=$f?>>6 Tenant</option>-->
        <!--    <option value="6" <?=$f?>>6 Tenant</option>-->
        <!--</select>-->
    </div>
</div>


            
            
            
             <table width="80%">
                <tr>
                     @if(Session::get('main_categorty')==2)
                        
                         @endif
                         </tr>
                         </table>
            @endif
             @if(Session::get('main_categorty')==3 ||Session::get('main_categorty')==6)
             <style>
             td,th
                 {
                     font-size:12px !important;
                 }
                 table
                 {
                     margin-left:10% !important
                 }
                 .checkbox
                 {
                     padding-left:20px !important;
                 }
                 @media only screen and (max-width: 600px) {
                     table
                 {
                     margin-left:2% !important
                 }
                 }
             </style>
             <table width="100%" boder=1 id="six_three">
                <tr>
                    <td align="left" width="10%" class="tdtxtbottom"><label for="exampleFormControlInput1">Commercial Site</label>
                        &nbsp;&nbsp;<input type="checkbox" class="larger checkbox" value="Commercial Site" name="property_type[]" <?=$e?>></td>
                     <td  width="1%">&nbsp;</td>
                     <td align="left" width="10%" class="tdtxtbottom"> <label for="exampleFormControlInput1">Agricultural Land</label>
                        &nbsp;&nbsp;<input type="checkbox" class="larger checkbox" value="Agricultural Land" name="property_type[]" <?=$f?>></td>
                     <td  width="1%">&nbsp;</td>
                     
                     <td align="left" width="10%" class="tdtxtbottom">
                         <label for="exampleFormControlInput1">Development Land</label>
                        &nbsp;&nbsp;<input type="checkbox" class="larger checkbox" value="Development Land" name="property_type[]" <?=$g?>>
                        </td>
                      
                     <td  width="1%">&nbsp;</td>
                     <td align="left" width="20%" class="tdtxtbottom">  <label for="exampleFormControlInput1">Industrial Site<br></label>
                        &nbsp;&nbsp;<input type="checkbox" class="larger checkbox" value="Industrial Site" name="property_type[]" <?=$h?>></td>
                     
                    
                    
                    <td  width="1%">&nbsp;</td>
                </tr>
            
                <tr>
                    <td align="left" width="10%" class="tdtxtbottom"><label for="exampleFormControlInput1">Investment Property <input type="checkbox" class="larger checkbox" value="Investment Property" name="property_type[]" <?=$j?>></label>
                            </td>
                     <td  width="1%" align="left" > &nbsp;&nbsp;</td>
                     <td align="left" width="10%" class="tdtxtbottom tdtxtbottom1"> <label for="exampleFormControlInput1">Office Share<input type="checkbox" class="larger checkbox " value="Office Share" name="property_type[]" <?=$k?>></label>
                                       </td>
                     <td  width="1%" align="left"> &nbsp;&nbsp;</td>
                     
                     <td align="left" width="10%" class="tdtxtbottom">
                         <label for="exampleFormControlInput1">Office Space</label>
                           <input type="checkbox" class="larger checkbox" value="Office Space" name="property_type[]" <?=$l?>>             
                        </td>
                      
                     <td  width="1%" align="left">&nbsp;&nbsp;</td>
                     <td align="left" width="10%" class="tdtxtbottom">  <label for="exampleFormControlInput1">Restaurant / Bar / Hotel</label>
                            <input type="checkbox" class="larger checkbox" value="Restaurant / Bar / Hotel" name="property_type[]" <?=$m?>>
                                        </td>
                     
                     
                    
                    <td  width="1%">&nbsp;&nbsp;</td>
                </tr>
           
            <!-----tbl4-->
           
                <tr>
                    <td align="left" width="10%" class="tdtxtbottom"><label for="exampleFormControlInput1">Industrial Unit</label>
                        &nbsp;&nbsp;<input type="checkbox" class="larger checkbox" value="Industrial Unit" name="property_type[]" <?=$i?>></td>
                     <td  width="1%" align="left">&nbsp;</td>
                     <td align="left" width="10%" class="tdtxtbottom tdtxtbottom2">  <label for="exampleFormControlInput1">Retail Unit</label>
                                        &nbsp;<input type="checkbox" class="larger checkbox" value="Retail Unit" name="property_type[]" <?=$n?>></td>
                     <td  width="1%" align="left">&nbsp;</td>
                     
                     <td align="left" width="10%" class="tdtxtbottom">
                          <label for="exampleFormControlInput1">Serviced Office</label>
                             &nbsp;&nbsp; <input type="checkbox" class="larger checkbox " value="Serviced Office" name="property_type[]" <?=$o?>>          
                        </td>
                      
                     <td  width="1%" align="left"> &nbsp;&nbsp;</td>
                     <td align="left" width="20%"></td>
                </tr>
            </table>
           
             @endif
             @if(Session::get('main_categorty')==5)
                      <?php
                      $e=$f=$g=$h=$i=$j="";
                      if(!empty($data['property_type']))
                      {
                          
                          if(in_array("Apartment for sale",$data['property_type']))
                          {
                              $e="checked";
                          }
                          if(in_array("Bungalow for sale",$data['property_type']))
                          {
                              $f="checked";
                          }
                          if(in_array("Duplex for sale",$data['property_type']))
                          {
                              $g="checked";
                          }
                          if(in_array("House for sale",$data['property_type']))
                          {
                              $h="checked";
                          }
                          if(in_array("Site for sale",$data['property_type']))
                          {
                              $i="checked";
                          }
                          if(in_array("Studio apartment for sale",$data['property_type']))
                          {
                              $j="checked";
                          }
                      }
                      ?>
                     
           

 <div class="property-options-container">
    <div class="property-option">
          <label for="exampleFormControlInput1">Apartment</label>
        <input type="checkbox" class="larger" value="Apartment for sale" name="property_type[]" <?=$e?>>
    </div>
    <div class="property-option">
        <label for="exampleFormControlInput1">Bungalow</label>
        <input type="checkbox" class="larger" value="Bungalow for sale" name="property_type[]" <?=$f?>>
    </div>
   
    <div class="property-option">
         <label for="exampleFormControlInput1">Duplex</label>
        <input type="checkbox" class="larger" value="Duplex for sale" name="property_type[]" <?=$g?>>
    </div>
   
    <div class="property-option">
       <label for="exampleFormControlInput1">House</label>
        <input type="checkbox" class="larger" value="House for sale" name="property_type[]" <?=$h?>>
    </div>
    <div class="property-option">
        <label for="exampleFormControlInput1">Site</label>
        <input type="checkbox" class="larger" value="Site for sale" name="property_type[]" <?=$i?>>
    </div>
    <div class="property-option">
       <label for="exampleFormControlInput1">Studio apartment</label>
        <input type="checkbox" class="larger" value="Studio apartment for sale" name="property_type[]" <?=$j?>>
    </div>
  
</div>

            
                      @endif
             
            </center>
            
            @endif
            <div class="row">
                <center><br><br>
                   <button id="search_btn" style=" padding:10px; background-color:#dc3545; border:1px solid #dc3545; border-radius:5px;margin-bottom:5px;color:white;" class="customised_searchbtn" >SEARCH &nbsp;<i class="fa fa-search" aria-hidden="true"></i></button>
                     </form>
                    <!-- </form></form> -->
                     <?php
                     $search_type=Session::get('search_type');
                     $main_cat=Session::get('main_categorty');
                     if(Session::get('user_id')!="")
                     {
                     $user_id=Session::get('user_id');
                     }
                     else
                     {
                      $user_id='';   
                     }
                     ?>
                 <a href="{{url('filter-properties')}}?search_type={{$search_type}}&&main_cat={{$main_cat}}&&user_id={{$user_id}}" > 
                
                <button type="reset" class="customised_clearbtn" style=" padding:10px; background-color:#dc3545; border:1px solid #dc3545; border-radius:5px;margin-bottom:5px;color:white;"
                 >CLEAR ALL &nbsp;<i class="fa fa-eraser" aria-hidden="true"></i></button></a>
                </center>
            </div><br>
     
     
    <!--=============================FORM Ends===================================================================-->
    

     <!--=======================head======================-->

       <head style="margin-top:20px" >
          
           <?php if($user_name==1)
           {
               ?>
               <!-- <center>
                <h1 style="color:#dc3545"><b>{{strtoupper($user->name)}}</b></h1>
                <h6>Phone:{{$user->phone}}</h6>
                <h6>Email:{{$user->email}}</h6>
            </center> -->
          <?php
            }
           else
           {
           ?>
            <!-- <center>
                <h1 style="color:#dc3545"><b>{{strtoupper($title)}}</b></h1>
            </center> -->
            <?php } ?>
        </head>
</section>
<section>

<!--==================TOP ADD STRTS============================-->
@if(count($topads)>0)
    <topadd >
        <div class="row">
            <div class="col-md-12">
                <div class="slider-container">
                    <div class="slider">
                        <div class="slider-track">
                            @foreach($topads as $ads)
                            <div class="slide slideads">
                                <!-- <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a> -->
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </topadd>
@endif   
<!--=====================TOP AD ENDS===================================-->
<!--==================MID ADD STRTS============================-->
@if(count($middleads)>0)
<midadd >
    <div class="row">
        <div class="col-md-12">
            <div>
                <div class="slider-container-bottom" >
                    <div class="slider-mid">
                        <div class="slider-track-mid">
                            @foreach($middleads as $ads)
                                <div class="slide-mid slideads">
                                    <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</midadd>
@endif   
<!--=====================MID ADD ENDS===================================-->
</section>
<!--=======================head======================-->

    <head style="margin-top:20px;" >
        <?php if($user_name==1)
        {
        ?>
            <center>
                <h1 style="color:#dc3545;margin-top: 40px;"><b>{{strtoupper($user->name)}}</b></h1>
                <h6>Phone:{{$user->phone}}</h6>
                <h6>Email:{{$user->email}}</h6>
            </center>
        <?php
        }
        else
        {
        ?>
            <center>
                <h1 style="color:#dc3545;margin-top: 40px;"><b>{{strtoupper($title)}}</b></h1>
            </center>
        <?php } ?>
    </head>
</section>
 
    <!--=============================FORM ENDS===================================================================-->

<!--===================MAIN STARTS============================-->
  <main>
     <!--======================FEUTURED STARTS===========================================-->
         <section class="feutured">
           @if((count($properties[1])>0) &&((Session::get('search_type')=='all')||Session::get('search_type')=='f'))
              <section class="aboutDiv">
               <div class="container">
                <div class="container-fluid text-center">
                    
                    <a href="{{url('filter-properties')}}?search_type=f"><button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;">
                             <span style="display:flex;margin:auto;">View All <br> Featured Listings</span></button></a>
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[1] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;border-radius:10px;" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1)
                                      {
                                            $sub_title=" - For Rent";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                      }
                                    if($property->main_cat==2)
                                       { 
                                           $sub_title=" - For Sharing";
                                           foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                              {
                                               $price=$bed->rent;
                                              }
                                          }
                                           
                                           $rent_coll=" - ".$property->rent_coll;
                                           
                                       }
                                       if($property->main_cat==3)
                                       { 
                                            $sub_title=" - For Rent/Sale";
                                           if($property->for_let_sale==1)
                                           {
                                               $sub_title=" - For Rent";
                                           }
                                           if($property->for_let_sale==2)
                                           {
                                               $sub_title=" - For Sale";
                                           }
                                           
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                          
                                       }
                                       if($property->main_cat==4 || $property->main_cat==7)
                                       { 
                                           $sub_title="Parking - For Rent";
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                           if($property->for_let_sale==2)
                                           {
                                           $sub_title="Parking - For Sale";
                                           $rent_coll="";
                                           }
                                           if($property->for_let_sale==3)
                                           {
                                           $sub_title="Parking - For Rent/Sale";
                                           $rent_coll=" ".$property->price_type;
                                           }
                                          
                                       }
                                       if($property->main_cat==5)
                                       { 
                                           $sub_title=" ";
                                            $price=$property->price;
                                          
                                       }
                                       if($property->main_cat==6)
                                       { 
                                           $sub_title=" - For Sale";
                                            $price=$property->price;
                                           
                                       }
                                    //   if($property->main_cat==7)
                                    //   { 
                                    //       $sub_title="Parking - For Sale";
                                    //       $price=$property->price;
                                    //       $rent_coll="  ";
                                    //   }
                                        if($property->main_cat==8)
                                       { 
                                          $sub_title=" - Holiday Home";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                       }
                                       ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b>{{$property->property_type}} {{$sub_title}}</b></h5></center> 
                               <div class="propertyItems shake">    
                                <?php if(!empty($property->main_image)){ ?>
                                <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span>{{$property->city}},{{$property->town}}, {{$property->street}} ,{{$property->county}}</span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}</h6>
                                <div>
                               <!--<span class="d-block mb-2 text-black-50 propaddr" style="height:35px;">{{$property->address}}</span>-->
                                  </div>
                                  <div class="specs d-flex mb-0">
                                      <center>
                                          <p style="font-size:15px">
                                    <?php
                                      if($property->main_cat==1)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                      if($property->main_cat==2)
                                      {
                                          foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                          {
                                            echo$bed->bed_type_name.", &nbsp;&nbsp;";
                                          }
                                          }
                                            echo "Tenants -".$property->no_tenants.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                       if($property->main_cat==3)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==4)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                     if($property->main_cat==5)
                                      { ?>
                                       <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p>
                                    <?php  }
                                      if($property->main_cat==6)
                                      {
                                       
                                      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==7)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                       if($property->main_cat==8)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                     ?></p>
                                    </center>
                                  </div>
            
                                  <!--<a-->
                                  <!--  href="{{url('property'.$property->id)}}"-->
                                  <!--  class="btn btn-danger py-2 px-3"-->
                                  <!--  >See details</a-->
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; {{$property->name}}</h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
     </section>
     <!--==================TOP ADD STRTS============================-->
         


         
         <!--=====================TOP AD ENDS===================================-->
         <!--======================FEUTURED ENS===========================================-->
         <!--======================AGENT STARTS===========================================-->
         <section class="agent">
             
            @if(((Session::get('search_type')=='all')||Session::get('search_type')=='a'))
               
          <?php
          $agent_count=count($properties[3])+count($properties[4])+count($properties[5]);
          if($agent_count>0)
          {
          ?>
                 <section class="aboutDiv">
               <div class="container">
                <div class="container-fluid text-center">
                   <a href="{{url('filter-properties')}}?search_type=a"><button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;">
                             <span style="display:flex;margin:auto;">View All <br> Agent Properties</span></button></a>
                    
                </div></section>
               
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                  <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    <?php  //echo"<pre>";print_r($Agent_property);?>
                    @for($i=3;$i<=5;$i++)
                      @forelse($properties[$i] as $property)
                      
                       <?php  
                       $property=(object)$property;
                       //echo"<pre>rrrrrrrrrrrr";print_r($property);exit?>
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;border-radius:10px;" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1)
                                      {
                                            $sub_title=" - For Rent";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                      }
                                    if($property->main_cat==2)
                                       { 
                                           $sub_title=" - For Sharing";
                                           foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                              {
                                               $price=$bed->rent;
                                              }
                                          }
                                           
                                           $rent_coll=" - ".$property->rent_coll;
                                           
                                       }
                                       if($property->main_cat==3)
                                       { 
                                            $sub_title=" - For Rent/Sale";
                                           if($property->for_let_sale==1)
                                           {
                                               $sub_title=" - For Rent";
                                           }
                                           if($property->for_let_sale==2)
                                           {
                                               $sub_title=" - For Sale";
                                           }
                                           
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                          
                                       }
                                       if($property->main_cat==4 || $property->main_cat==7)
                                       { 
                                           $sub_title="Parking - For Rent";
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                           if($property->for_let_sale==2)
                                           {
                                           $sub_title="Parking - For Sale";
                                           $rent_coll="";
                                           }
                                           if($property->for_let_sale==3)
                                           {
                                           $sub_title="Parking - For Rent/Sale";
                                           $rent_coll=" ".$property->price_type;
                                           }
                                          
                                       }
                                       if($property->main_cat==5)
                                       { 
                                           $sub_title=" ";
                                            $price=$property->price;
                                          
                                       }
                                       if($property->main_cat==6)
                                       { 
                                           $sub_title=" - For Sale";
                                            $price=$property->price;
                                           
                                       }
                                      
                                       if($property->main_cat==8)
                                       { 
                                          $sub_title=" - Holiday Home";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                       }
                                       ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b>{{$property->property_type}} {{$sub_title}}</b></h5></center> 
                               <div class="propertyItems shake">    
                                 <?php if(!empty($property->main_image)){ ?>
                                <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span>{{$property->city}},{{$property->town}}, {{$property->street}} ,{{$property->county}}</span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}</h6>
                                <div>
                               <!--<span class="d-block mb-2 text-black-50 propaddr" style="height:35px;">{{$property->address}}</span>-->
                                  </div>
                                  <div class="specs d-flex mb-0">
                                      <center>
                                          <p style="font-size:15px">
                                    <?php
                                      if($property->main_cat==1)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                      if($property->main_cat==2)
                                      {
                                          foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                          {
                                            echo$bed->bed_type_name.", &nbsp;&nbsp;";
                                          }
                                          }
                                            echo "Tenants -".$property->no_tenants.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                       if($property->main_cat==3)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==4)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                      if($property->main_cat==5)
                                      { ?>
                                       <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p>
                                    <?php  }
                                      if($property->main_cat==6)
                                      {
                                       
                                      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==7)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                       if($property->main_cat==8)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                     ?></p>
                                    </center>
                                  </div>
            
                                  <!--<a-->
                                  <!--  href="{{url('property'.$property->id)}}"-->
                                  <!--  class="btn btn-danger py-2 px-3"-->
                                  <!--  >See details</a-->
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; {{$property->name}}</h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
            @endfor
             
            
                  </div> 
                   
            
            <?php } ?>     
      @endif
   
      
     </section>
         <!--======================AGENT ENS===========================================-->
        
         <!--======================STANDARD STARTS=========================================== -->
         <section class="standard">
             
           @if((count($properties[2])>0) &&((Session::get('search_type')=='all')||Session::get('search_type')=='s'))
              <section class="aboutDiv">
               <div class="container">
                <div class="container-fluid text-center">
                    <a href="{{url('filter-properties')}}?search_type=s"><button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius:25px;">
                             <span style="display:flex;margin:auto;">View All <br> Standard Properties</span></button></a>
                    
                </div></section>
                
            
                  
                 
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[2] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;border-radius:10px;" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1)
                                      {
                                            $sub_title=" - For Rent";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                      }
                                    if($property->main_cat==2)
                                       { 
                                           $sub_title=" - For Sharing";
                                           foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                              {
                                               $price=$bed->rent;
                                              }
                                          }
                                           
                                           $rent_coll=" - ".$property->rent_coll;
                                           
                                       }
                                       if($property->main_cat==3)
                                       { 
                                            $sub_title=" - For Rent/Sale";
                                           if($property->for_let_sale==1)
                                           {
                                               $sub_title=" - For Rent";
                                           }
                                           if($property->for_let_sale==2)
                                           {
                                               $sub_title=" - For Sale";
                                           }
                                           
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                          
                                       }
                                       if($property->main_cat==4 || $property->main_cat==7)
                                       { 
                                           $sub_title="Parking - For Rent";
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                           if($property->for_let_sale==2)
                                           {
                                           $sub_title="Parking - For Sale";
                                           $rent_coll="";
                                           }
                                           if($property->for_let_sale==3)
                                           {
                                           $sub_title="Parking - For Rent/Sale";
                                           $rent_coll=" ".$property->price_type;
                                           }
                                          
                                       }
                                       if($property->main_cat==5)
                                       { 
                                           $sub_title=" ";
                                            $price=$property->price;
                                          
                                       }
                                       if($property->main_cat==6)
                                       { 
                                           $sub_title=" - For Sale";
                                            $price=$property->price;
                                           
                                       }
                                       
                                       if($property->main_cat==8)
                                       { 
                                          $sub_title=" - Holiday Home";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                       }
                                       ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b>{{$property->property_type}} {{$sub_title}}</b></h5></center> 
                               <div class="propertyItems shake">    
                                <?php if(!empty($property->main_image)){ ?>
                                <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span>{{$property->city}},{{$property->town}}, {{$property->street}} ,{{$property->county}}</span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}</h6>
                                <div>
                               <!--<span class="d-block mb-2 text-black-50 propaddr" style="height:35px;">{{$property->address}}</span>-->
                                  </div>
                                  <div class="specs d-flex mb-0">
                                      <center>
                                          <p style="font-size:15px">
                                    <?php
                                      if($property->main_cat==1)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                      if($property->main_cat==2)
                                      {
                                          foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                          {
                                            echo$bed->bed_type_name.", &nbsp;&nbsp;";
                                          }
                                          }
                                            echo "Tenants -".$property->no_tenants.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                       if($property->main_cat==3)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==4)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                      if($property->main_cat==5)
                                      { ?>
                                       <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p>
                                    <?php  }
                                      if($property->main_cat==6)
                                      {
                                       
                                      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==7)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                       if($property->main_cat==8)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                     ?></p>
                                    </center>
                                  </div>
            
                                  <!--<a-->
                                  <!--  href="{{url('property'.$property->id)}}"-->
                                  <!--  class="btn btn-danger py-2 px-3"-->
                                  <!--  >See details</a-->
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; {{$property->name}}</h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
                 
      @endif
     </section><br>
         <!--======================STANDARD ENS===========================================-->
         <!--======================HOLIDAY HOMES STARTS===========================================-->
         <section class="standard">
             
           @if((count($properties[6])>0) &&((Session::get('search_type')=='all')))
              <section class="aboutDiv">
               <div class="container">
                <div class="container-fluid text-center">
                    <a href="{{url('filter-properties')}}?search_type=s"><button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;">
                             <span style="display:flex;margin:auto;">View All <br> Holiday Homes</span></button></a>
                </div></section>
                
            
                  
                 
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[6] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;border-radius:10px;" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1)
                                      {
                                            $sub_title=" - For Rent";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                      }
                                    if($property->main_cat==2)
                                       { 
                                           $sub_title=" - For Sharing";
                                           foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                              {
                                               $price=$bed->rent;
                                              }
                                          }
                                           
                                           $rent_coll=" - ".$property->rent_coll;
                                           
                                       }
                                       if($property->main_cat==3)
                                       { 
                                            $sub_title=" - For Rent/Sale";
                                           if($property->for_let_sale==1)
                                           {
                                               $sub_title=" - For Rent";
                                           }
                                           if($property->for_let_sale==2)
                                           {
                                               $sub_title=" - For Sale";
                                           }
                                           
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                          
                                       }
                                       if($property->main_cat==4 || $property->main_cat==7)
                                       { 
                                           $sub_title="Parking - For Rent";
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                           if($property->for_let_sale==2)
                                           {
                                           $sub_title="Parking - For Sale";
                                           $rent_coll="";
                                           }
                                           if($property->for_let_sale==3)
                                           {
                                           $sub_title="Parking - For Rent/Sale";
                                           $rent_coll=" ".$property->price_type;
                                           }
                                          
                                       }
                                       if($property->main_cat==5)
                                       { 
                                           $sub_title=" ";
                                            $price=$property->price;
                                          
                                       }
                                       if($property->main_cat==6)
                                       { 
                                           $sub_title=" - For Sale";
                                            $price=$property->price;
                                           
                                       }
                                       
                                       if($property->main_cat==8)
                                       { 
                                          $sub_title=" - Holiday Home";
                                            $rent_coll=" - ".$property->price_type;
                                            $room="Rooms - ".$property->total_rooms;
                                       }
                                       ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b>{{$property->property_type}} {{$sub_title}}</b></h5></center> 
                               <div class="propertyItems shake">    
                                <?php if(!empty($property->main_image)){ ?>
                                <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span>{{$property->city}},{{$property->town}}, {{$property->street}} ,{{$property->county}}</span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}</h6>
                                <div>
                               <!--<span class="d-block mb-2 text-black-50 propaddr" style="height:35px;">{{$property->address}}</span>-->
                                  </div>
                                  <div class="specs d-flex mb-0">
                                      <center>
                                          <p style="font-size:15px">
                                    <?php
                                      if($property->main_cat==1)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                      if($property->main_cat==2)
                                      {
                                          foreach($bed_type_properties as $bed)
                                          {
                                              if($property->id==$bed->property_id)
                                          {
                                            echo$bed->bed_type_name.", &nbsp;&nbsp;";
                                          }
                                          }
                                            echo "Tenants -".$property->no_tenants.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                       if($property->main_cat==3)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==4)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                      if($property->main_cat==5)
                                      { ?>
                                       <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p>
                                    <?php  }
                                      if($property->main_cat==6)
                                      {
                                       
                                      echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==7)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                       if($property->main_cat==8)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                     ?></p>
                                    </center>
                                  </div>
            
                                  <!--<a-->
                                  <!--  href="{{url('property'.$property->id)}}"-->
                                  <!--  class="btn btn-danger py-2 px-3"-->
                                  <!--  >See details</a-->
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; {{$property->name}}</h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
                 
      @endif
     </section><br>
         <!--======================HOLIDAY HOMES ENS===========================================-->
         <!--=================PAGINATION STARTS=======================-->
      <center>
         <!--next button-->
                           <section>
                    <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                <!--<button class="save prev-save" -->
                                <!--<b><i class="fa fa-arrow-left" -->
                                <!--    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV&nbsp;&nbsp;&nbsp;&nbsp;</b></button>-->
                                {{$properties[2]->links()}}
                            </div>
        <!---->
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                   </div>
                                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-3">
                                <!--    <button class="next-save save" -->
                                <!--<b>&nbsp;&nbsp;&nbsp;&nbsp;NEXT&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right" -->
                                <!--    aria-hidden="true"></i></b></button>-->
                                 </div>
                                 
                            </div>
                           </section>
                           <!--next button end-->
      </center>
<!--=================PAGINATION ENDS=======================-->
</main>   
<!--===============MAIN ENDS PROPERTY DISPLAY======================-->

<!--==================BOTTOM ADD STRTS============================-->
@if(count($bottomads)>0)
    <bottomadd >
        <div class="row">
            <div class="col-md-12">
                <div>
                    <!--<div class="arrow left-arrow" id="left-arrow-bottom">&#9664;</div>-->
                    <div class="slider-container-bottom">
                        <div class="slider-bottom">
                            <div class="slider-track-bottom">
                                @foreach($bottomads as $ads)
                                    <div class="slide-bottom slideads">
                                        <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a></div>
                                @endforeach
                            </div>
                        </div>
                        <!--<div class="arrow right-arrow" id="right-arrow-bottom">&#9654;</div>-->
                    </div>
                </div>
            </div>
        </div>
    </bottomadd>
@endif   
<!--=====================BOTTOM AD ENDS===================================-->      
    <br>       
<script>
    $(document).ready(function()
    {
  
   
           $('.prev-save').click(function(){
               if($("#cat-id").val()=="")
   {
    //   alert("Please select Category");
    //   return false;
   }
             var page = $("#page").val();
             if(page>1)
             {
               page=parseInt(page)-parseInt(1);
               $("#page").val(page);
               $('#search_btn').trigger( "click" );
             }
          });
          $('.next-save').click(function(){
              if($("#cat-id").val()=="")
   {
    //   alert("Please select Category");
    //   return false;
   }
             var page = $("#page").val();
             page=parseInt(page)+parseInt(1);
            //  alert(page);
             $("#page").val(page);
             $('#search_btn').trigger( "click" );
          });
   });
</script>
 <script>
            // Instantiate the Bootstrap carousel
$('.multi-item-carousel').carousel({
  interval: 2000
});

// for every slide in carousel, copy the next slide's item in the slide.
// Do the same for the next, next item.
$('.multi-item-carousel .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));
  
  if (next.next().length>0) {
    next.next().children(':first-child').clone().appendTo($(this));
  } else {
  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
  }
});
        </script> 

  


@endsection