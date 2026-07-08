@extends('layouts.website.main')
@section('content')
<style>
  #mob-banner
        {
            display:none;
            /*margin-top:100px;*/
        }
    .linked {
        background: #d3111a;
        border-radius: 6px;
    }

    .mainbanner,
    .hero {
        height: 200px !important;
    }

    .aditemin {
        margin: 10px !important;
        a
    }

    .tns-nav {
        display: none;
    }

    .scrollable-div {
        height: 300px;
        overflow: hidden;
        overflow-y: scroll;
    }
    

    @media (max-width: 600px) {
        .banner-in-container {
            margin-top: 100px;
        }

        .resp_hide_div {
            display: none;
        }

        .carsbtn1 {
            height: 50px;
            font-size: 12px;
        }

        .carbtnfont1 {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .responsive_ad {

            width: 300px !important;
            height: 150px !important;
        }

        .search-cat {
            font-size: 14px;
        }

        /*added a media query property for propert-content to make it center*/
        .property-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        #desk-banner
        {
            display:none;
        }
         #mob-banner
        {
            /*margin-top:100px;*/
            display:block;
        }
    }

    /*.mainbanner {*/
    /*       background-size: cover;*/
    /*       background-position: center;*/
    /*       width: 100%;*/
    height: 100%;
    /* Adjust height as needed */
    /*   }*/

    /*    @media (max-width: 600px) {*/
    /*       .mainbanner {*/
    /*           background-size: contain;*/
    /*           background-position: center;*/
    /*       }*/
    /*   }*/

    .form-group {
        width: 200px;
    }

    @media(min-width:1200px) {
        .img-responsive1 {
            margin-left: 3.5%;
        }

        .custombtn {
            margin-bottom: 10px;
            border-radius: 15px;
        }
    }
</style>
<style>
    .shake:hover {
        display: inline-block;
        animation: shake 1.5s infinite;
    }

    @keyframes shake {

        0%,
        100% {
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
<style>
    .navbar {
        background-color: #d3111a;
        overflow: hidden;
        position: relative;
        margin-top: -10px;
        padding:20px 10px;
        color: white;
    }

    .menu-btn {
        font-size: 20px;
        color: white;
        padding: 4px 5px;
        height: 40px !important;
        background-color: #d3111a;
        cursor: pointer;
        display: none;
        /* Hidden by default since menu is open */
    }

    .nav-links {
        height: auto;
        width: 100%;
        position: relative;
        top: 10;
        background-color: #d3111a;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
        color: white;
    }

    .nav-links p {
        padding: 2px 2px 2px 2px;
        text-decoration: none;
        font-size: 15px;
        color: white;
        display: block;
        transition: 0.3s;
    }

    .nav-links a:hover {
        background-color: #d3111a;
        color: white;
    }

    .nav-links .close-btn {
        position: absolute;
        top: 0;
        right: 2%;
        font-size: 36px;
        margin-left: 20%;
        cursor: pointer;
        color: white;
    }

    .psize {
        font-weight: 500;
        font-size: 15px !important;
    }
    .property-item{
        width:330px !important;
    }
    .menu-section{
        margin-left: 0 !important;
    }
    @media (min-width: 600px) {
        .banner-in-container {
            margin-top: -50px;
        }
        
    }
     @media (min-width: 780px) {
       
        .close-btn{
            display:none;
        }
        .nav-links{
            padding-top:20px !important;
        }
      .menu-section{
        margin-left: 1.5rem !important;
    }
        
    }
</style>
<style>
.checkbox-group {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  max-width: 100%; /* Adjust the width as needed */
}

.checkbox-container {
  display: inline-block;
  cursor: pointer;
  user-select: none;
}

.checkbox-container input {
  display: none;
}

.checkbox-label {
  padding: 5px 10px;
  border: 1px solid black;
  background-color: black;
  color: white;
  font-size: 14px;
  border-radius: 4px;
  transition: all 0.3s ease;
}

.checkbox-container input:checked + .checkbox-label {
  background-color: white;
  color: black;
}
.labelnew
{
    font-size:18px;
}
</style>
<style>
        .image-container {
            position: relative;
            text-align: center;
        }

        .centered-text {
            position: absolute;
            top: 50%;
            left: 20%;
            transform: translate(-50%, -50%);
            font-size: 44px;
            color: white; /* Adjust the text color */
            font-weight:800;
        }
        .centered-text-mob {
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            color: white; /* Adjust the text color */
            font-weight:800;
        }

        .image {
            display: block;
            width: 100%;
            height: auto;
        }
    </style>
<main>
   <banner >
       <div class="image-container" id="desk-banner">
         <img src="{{asset('website/images/banner_new.jpeg')}}" alt="Image" class="img-fluid image" height="200px"  />
          <div class="centered-text">{{strtoupper($search_title)}}</div>
       </div>
      
       <div class="image-container" id="mob-banner">
         <img src="{{asset('website/images/banner_mob.jpeg')}}" alt="Image" class="img-fluid image" height="200px"  />
          <div class="centered-text-mob">{{strtoupper($search_title)}}</div>
       </div>
     
   </banner>
    <!--=======================-->
    <div class="row">
<?php
$vselect=isset($_GET['vehicle'])?$_GET['vehicle']:"";
$tselect=isset($_GET['main_name'])?$_GET['main_name']:"";
$cselect=isset($_GET['county'])?$_GET['county']:"";
$pselect=isset($_GET['user_type'])?$_GET['user_type']:"";

$bselect=isset($_GET['brand'])?$_GET['brand']:"";
$mselect=isset($_GET['modal'])?$_GET['modal']:"";
$coselect=isset($_GET['color'])?$_GET['color']:"";
$fselect=isset($_GET['fuel'])?$_GET['fuel']:"";

$trselect=isset($_GET['transmission'])?$_GET['transmission']:"";
$drselect=isset($_GET['doors'])?$_GET['doors']:"";
$boselect=isset($_GET['body_type'])?$_GET['body_type']:"";

$minprice=isset($_GET['min_price'])?$_GET['min_price']:"";
$maxprice=isset($_GET['max_price'])?$_GET['max_price']:"";

$minmil=isset($_GET['min_mil'])?$_GET['min_mil']:"";
$maxmil=isset($_GET['max_mil'])?$_GET['max_mil']:"";


$maxy=isset($_GET['max_y'])?$_GET['max_y']:"";
$miny=isset($_GET['min_y'])?$_GET['min_y']:$maxy;

$mine=isset($_GET['min_e'])?$_GET['min_e']:"";
$maxe=isset($_GET['max_e'])?$_GET['max_e']:"";

$taxselect=isset($_GET['tax'])?$_GET['tax']:"";
$taxselect=isset($_GET['tax'])?$_GET['tax']:"";

?>
        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
            
            <section class="menu-section">
                <div class="menu-btn" id="menu-btn">
                    <center>Filter</center>
                </div><br>
                <nav class="navbar" id="navbar">
                    <div class="nav-links" id="nav-links">
                        <span class="close-btn" id="close-btn">&times;</span>
                        <p class="text-white psize">Filter&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/filterautomobiles"><span class="text-white">Reset Filter</span></a></p>
                        <hr class="text-white" style="font-weight:800">
                        <form>
                        <div class="my-5">
                            <label class="form-label">CHOOSE VEHICLE</label>
                            <select class="form-select form-select-lg"  name="vehicle">
                              <option value="">--ANY--</option>
                                <?php foreach($filter_arr[0] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->id?>" <?php if($vselect==$type->id){echo"selected";}?>><?=$type->auto_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label">CHOOSE TYPE</label>
                            <?php if($tselect==1){echo"selected";}?>
                            <select class="form-select form-select-lg"  name="main_name">
                                <option value="">--Select--</option>
                                <option value="1"  <?php if($tselect==1){echo"selected";}?>>New</option>
                                <option value="2"  <?php if($tselect==2){echo"selected";}?>>Used</option>
                                <option value="3"  <?php if($tselect==3){echo"selected";}?>>Hire</option>
                                <option value="4"  <?php if($tselect==4){echo"selected";}?>>New -  Needed </option>
                                <option value="5"  <?php if($tselect==5){echo"selected";}?>>Used -  Needed </option>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label">COUNTY</label>
                            <select class="form-select form-select-lg" name="county">
                              <option value="">--Select--</option>
                                <?php foreach($filter_arr[6] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->name?>"<?php if($cselect==$type->name){echo"selected";}?>><?=$type->name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label">SELLER TYPE</label>
                            <select class="form-select form-select-lg" name="user_type">
                                 <option value="">--Select--</option>
                                <option value="1" <?php if($pselect==1){echo"selected";}?>>Private</option>
                                 <option value="2" <?php if($pselect==2){echo"selected";}?>>Dealers</option>
                            </select>
                        </div>
                         <div class="my-5">
                            <label class="form-label">MAKE</label>
                            <select class="form-select form-select-lg" name="brand" id="mySelect">
                                 <option value="">--Select--</option>
                                <?php foreach($filter_arr[2] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->brand_name?>" <?php if($bselect==$type->id){echo"selected";}?>><?=$type->brand_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            
                        </div>
                         <div class="my-5">
                            <label class="form-label">MODEL</label>
                            <select class="form-select form-select-lg" name="modal" id="brand_model">
                                 <option value="">--Select--</option>
                                <?php 
                                if($mselect!=""){
                                foreach($filter_arr[1] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->model_name?>" <?php if($mselect==$type->id){echo"selected";}?>><?=$type->model_name?></option>
                                    <?php
                                }
                                }
                                ?>
                            </select>
                            
                        </div>
                        <div class="my-5">
                            <label class="form-label">COLOR</label>
                            <select class="form-select form-select-lg" name="color">
                                 <option value="">--Select--</option>
                                <?php foreach($filter_arr[4] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->id?>" <?php if($coselect==$type->id){echo"selected";}?>><?=$type->color_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                         
                         <div class="my-5">
                            <label class="form-label">FUEL TYPE</label>
                           <div class="checkbox-group">
                                 <?php 
                                 foreach($filter_arr[3] as $fuel) {
                                     if(!empty($_GET['fuel']))
                                        ?>
                                  <!--<label class="checkbox-container">-->
                                  <!--  <input type="checkbox" value="<?=$fuel->id?>" name="fuel" <?php if($coselect==$fuel->id){echo"selected";}?>>-->
                                  <!--  <span class="checkbox-label"><?=$fuel->fuel_name?></span>-->
                                    <!--</label>-->
                                 <?php } ?>
                                 <select class="form-select form-select-lg" name="fuel">
                                  <option value="">--Select--</option>
                                <?php foreach($filter_arr[3] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->id?>" <?php if($fselect==$type->id){echo"selected";}?>><?=$type->fuel_name?></option>
                                    <?php
                                }
                                ?>
                                </select>
                            </div>
                        </div>
                         <div class="my-5">
                            <label class="form-label">TRANSMISSION</label>
                            <select class="form-select form-select-lg" name="transmission">
                                 <option value="">Any</option>
                                <option value="1" <?php if($trselect==1){echo"selected";}?>>Manual</option>
                                 <option value="2" <?php if($trselect==2){echo"selected";}?>>Automatic</option>
                            </select>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label">BODY TYPE</label>
                            <select class="form-select form-select-lg" name="body_type">
                              <option value="">--Select--</option>
                                <?php foreach($filter_arr[5] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->id?>" <?php if($boselect==$type->id){echo"selected";}?>><?=$type->body_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                         <div class="my-5">
                            <label class="form-label">DOORS</label>
                            <select class="form-select form-select-lg" name="doors">
                                <option value="">--Select--</option>
                                <?php for($i=2;$i<=9;$i++)
                                {
                                    ?>
                                    <option value="<?=$i?>" <?php if($drselect==$i){echo"selected";}?>><?=$i?></option>
                                    <?php
                                }
                                ?>
                            </select>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label">TAX</label>
                            <select class="form-select form-select-lg" name="tax">
                                <option value="">--Select--</option>
                                <option value="1" <?php if($taxselect==1){echo"selected";}?>>0-100</option>
                                <option value="2" <?php if($taxselect==2){echo"selected";}?>>100-200</option>
                                <option value="3" <?php if($taxselect==3){echo"selected";}?>>200-300</option>
                            </select>
                            </select>
                        </div>
                        <div class="my-5">
                            <label class="form-label d-block text-center fs-1"><span class="labelnew">PRICE</span></label></label>
                            <div class="d-flex">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control me-3 my-input" name="min_price" placeholder="MIN" value="<?=$minprice?>">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control  ms-3 my-input" name="max_price"  placeholder="MAX" value="<?=$maxprice?>">
                            </div>
                        </div>
                        <div class="my-5">
                            <label class="form-label d-block text-center fs-1"><span class="labelnew">MILEAGE (Kms)</span></label></label>
                            <div class="d-flex">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control me-3" placeholder="MIN " name="min_mil"  value="<?=$minmil?>">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control  ms-3" placeholder="MAX " name="max_mil"  value="<?=$maxmil?>">
                            </div>
                        </div>
                        <div class="my-5">
                            <label class="form-label d-block text-center fs-1"><span class="labelnew">YEAR</span></label>
                            <div class="d-flex">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control me-3" placeholder="MIN " name="min_y"  value="<?=$miny?>">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control  ms-3" placeholder="MAX " name="max_y"  value="<?=$maxy?>">
                            </div>
                        </div>
                        <div class="my-5">
                            <label class="form-label d-block text-center fs-1"><span class="labelnew">ENGINE SIZE (L)</span></label></label>
                            <div class="d-flex">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control me-3" placeholder="MIN " name="min_e"  value="<?=$mine?>">
                                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" class="form-control  ms-3" placeholder="MAX " name="max_e"  value="<?=$maxe?>">
                            </div>
                        </div>
                        <!--<div class="my-5">-->
                        <!--    <label class="form-label d-block text-center fs-1"><span class="labelnew">TAX</span></label></label>-->
                        <!--    <div class="d-flex">-->
                        <!--        <input type="text" class="form-control me-3" placeholder="MIN " name="min_price"  value="<?=$minprice?>">-->
                        <!--        <input type="text" class="form-control  ms-3" placeholder="MAX " name="min_price"  value="<?=$minprice?>">-->
                        <!--    </div>-->
                        <!--</div>-->
                         <!--<div class="my-5">-->
                            <!--<label class="form-label">BODY TYPE</label>-->
                           <!--<div class="checkbox-group">-->
                                 <?php 
                                
                                 foreach($filter_arr[5] as $fuel) { 
                                        ?>
                                 
                                  <!--<label class="checkbox-container">-->
                                  <!--  <input type="checkbox" value="apple">-->
                                  <!--  <span class="checkbox-label"><?=$fuel->body_name?></span>-->
                                  <!--  </label>-->
                                 <?php } ?>
                            <!--</div>-->
                        <!--</div>-->
                        <div class="my-5 text-center">
                            <a href="/filterautomobiles"><button type="button" class="btn btn-lg fs-4 fw-bold" style="background-color:#FFF200;">CLEAR</button></a>
                            <button type="submit" class="btn btn-lg fs-4 fw-bold" style="background-color:#FFF200;" id="btnconnecter">APPLY</button>
                           
                        </div>
                        </form>
                    </div>
                </nav>

            </section>
        </div>


        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
            <!--==================TOP ADD STRTS============================-->

 @if(count($topads)>0)
<topadd >
<div class="row">
    <div class="col-md-12">
       <div class="slider-container">
        <!-- <div class="arrow left-arrow" id="left-arrow">&#9664;</div> -->
        <div class="slider">
            <div class="slider-track">
                @foreach($topads as $ads)
                
                   <div class="slide slideads">
                       <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                    </div>
                
                @endforeach
            </div>
        </div>
        <!-- <div class="arrow right-arrow" id="right-arrow">&#9654;</div> -->
    </div>
  </div>
  </div>
</topadd>
@endif   
         <!--=====================TOP AD ENDS===================================-->
   
    <?php
    $fdata_count=$adata_count=$sdata_count=0;
    ?>
    
    @if((count($data)>0))
    @forelse($data->where('subcription_type',1)->values() as $d)
     @php
     $fdata_count=1;
     @endphp
     @empty
     @endforelse
     
     @forelse($data->whereIn('subcription_type',[3,4,5])->values() as $d)
     @php
     $adata_count=1;
     @endphp
     @empty
     @endforelse
     
     @forelse($data->where('subcription_type',2)->values() as $d)
     @php
     $sdata_count=1;
     @endphp
     @empty
     @endforelse
    @endif
   
            <!--======================FEUTURED STARTS===========================================-->
            <section class="feutured">
                @if(count($data)==0)
                <div style="height:400px">
                    <center>
                        <p style="color:red ;margin-top:200px"> No Data! </p>
                    </center>
                </div>
                @endif
                @if((count($data)>0))
                @if($fdata_count==1)
                <section class="aboutDiv">
                    <div class="container mt-5 ">
                        <div class="container-fluid text-center">
                            <a href="{{url('filterautomobiles')}}?search_type=1">
                                <button class="item-properties mt-2" onmouseover="this.style.backgroundColor='black';"
                                    onmouseout="this.style.backgroundColor='#d3111a';"
                                    style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                                    <span style="display:flex;margin:auto;">View All <br> Featured
                                        Listings</span></button></a>

                        </div>
                </section>
@endif
                <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                <div class="row boxes ms-1 " style="display:flex; margin:auto; justify-content:center;">


                    @forelse($data->where('subcription_type',1)->values() as $d)
                    <div class="col-xl-4  col-xxl-4 col-lg-4 property-item "
                        style="border:1px solid red; border-radius:15px;" onclick="highlightProperty(this)">
                        <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">



                            <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>



                            <center>
                               @foreach($filter_arr[2]->where('id',$d->brand)->values() as $t)
                                
                                <h5 style="color:#dc3545"><b> {{$t->brand_name}} / {{$type}}</b></h5>
                                @endforeach
                            </center>
                            <div class="propertyItems border-radius:15px; shake">
                                <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image"
                                    class="img-fluid" />
                                <?php } else { ?>
                                <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                                <div class="text-center">
                                    <div class="property-content">
                                        <div class="price mb-2"></div>
                                        <p><span> </span></p>

                                        <h6 style="font-weight:bold;color:#dc3545">€
                                            {{$d->price}}
                                            @if(!empty($d->duration))

                                            @endif</h6>
                                        <div>
                                            {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                        </div>
                                        <center>


                                            <p style="font-size:15px">

                                                @foreach($filter_arr[1]->where('id',$d->version)->values() as $t)
                                                      {{$t->model_name}}-{{$d->year}}
                                                @endforeach




                                        </center>


                                    </div>
                                    <h6 style="font-weight:bold;"><i class="fa fa-address-book-o"
                                            aria-hidden="true"></i>&nbsp;
                                        @if(!empty($d->user->name))
                                        {{$d->user->name}}
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse


                </div>
                @endif
            </section>
            <!--======================FEUTURED ENS===========================================-->

            <!--======================AGENT STARTS===========================================-->
            <section class="dealers">
                @if((count($data)>0))
                @if($adata_count==1)
                <section class="aboutDiv">
                    <div class="container mt-5 ">
                        <div class="container-fluid text-center">
                            <a href="{{url('filterautomobiles')}}?search_type=3">
                                <button class="item-properties mt-2" onmouseover="this.style.backgroundColor='black';"
                                    onmouseout="this.style.backgroundColor='#d3111a';"
                                    style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                                    <span style="display:flex;margin:auto;">View All <br> Dealers
                                        Listings</span></button></a>

                        </div>
                </section>
@endif
                <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                <div class="row boxes  ms-1 " style="display:flex; margin:auto; justify-content:center;">


                    @forelse($data->whereIn('subcription_type',[3,4,5])->values() as $d)
                    <div class="col-xl-4  col-xxl-4 col-lg-4 property-item "
                        style="border:1px solid red; border-radius:15px;" onclick="highlightProperty(this)">
                        <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">


                            <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>

                            <center>
                               @foreach($filter_arr[2]->where('id',$d->brand)->values() as $t)
                                
                                <h5 style="color:#dc3545"><b> {{$t->brand_name}} / {{$type}}</b></h5>
                                @endforeach
                            </center>
                            <div class="propertyItems border-radius:15px; shake">
                                <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image"
                                    class="img-fluid" />
                                <?php } else { ?>
                                <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                                <div class="text-center">
                                    <div class="property-content">
                                        <div class="price mb-2"></div>
                                        <p><span></span></p>

                                        <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}
                                            @if(!empty($d->duration))


                                            @endif</h6>
                                        <div>
                                            {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                        </div>
                                        <center>


                                            <p style="font-size:15px">
 @foreach($filter_arr[1]->where('id',$d->version)->values() as $t)
                                                      {{$t->model_name}}-{{$d->year}}
                                                @endforeach




                                        </center>


                                    </div>
                                    <h6 style="font-weight:bold;"><i class="fa fa-address-book-o"
                                            aria-hidden="true"></i>&nbsp;
                                        @if(!empty($d->user->name))
                                        {{$d->user->name}}
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse


                </div>
                @endif
            </section>
            <!--======================STANDARD ENDS===========================================-->
             <!--==================MID ADD STRTS============================-->
@if(count($middleads)>0)
 <midadd >
     <div class="row">
    <div class="col-md-12">
       <div >
         <!--<div class="arrow left-arrow" id="left-arrow-mid">&#9664;</div>-->
          <div class="slider-mid">
            <div class="slider-track-mid">
                @foreach($middleads as $ads)
                <div class="slide-mid slideads">
                    <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                </div>
                @endforeach
            </div>
        </div>
        <!--<div class="arrow right-arrow" id="right-arrow-mid">&#9654;</div>-->
      </div>
    </div>
  </div>
</midadd>
@endif   
<!--=====================MID AD ENDS===================================-->
            <!--======================AGENT STARTS===========================================-->

            <section class="standard">
                @if((count($data)>0))
                  @if($sdata_count==1)
                <section class="aboutDiv">
                    <div class="container mt-5 ">
                        <div class="container-fluid text-center">
                            <a href="{{url('filterautomobiles')}}?search_type=2">
                                <button class="item-properties mt-2" onmouseover="this.style.backgroundColor='black';"
                                    onmouseout="this.style.backgroundColor='#d3111a';"
                                    style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                                    <span style="display:flex;margin:auto;">View All <br> Standard
                                        Listings</span></button></a>

                        </div>
                </section>
@endif
                <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                <div class="row boxes  ms-1 " style="display:flex; margin:auto; justify-content:center;">


                    @forelse($data->where('subcription_type',2)->values() as $d)
                    <div class="col-xl-4  col-xxl-4 col-lg-4 property-item "
                        style="border:1px solid red; border-radius:15px;" onclick="highlightProperty(this)">
                        <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">



                            <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>



                            <center>
                                @foreach($filter_arr[2]->where('id',$d->brand)->values() as $t)
                                
                                <h5 style="color:#dc3545"><b> {{$t->brand_name}} / {{$type}}</b></h5>
                                @endforeach
                            </center>
                            <div class="propertyItems border-radius:15px; shake">
                                <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image"
                                    class="img-fluid" />
                                <?php } else { ?>
                                <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                                <div class="text-center">
                                    <div class="property-content">
                                        <div class="price mb-2"></div>
                                        <p><span></span></p>

                                        <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}
                                            @if(!empty($d->duration))

                                            @endif
                                        </h6>
                                        <div>
                                            {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                        </div>
                                        <center>
                                            <p style="font-size:15px">
                                                 @foreach($filter_arr[1]->where('id',$d->version)->values() as $t)
                                                      {{$t->model_name}}-{{$d->year}}
                                                @endforeach
                                        </center>
                                    </div>
                                    <h6 style="font-weight:bold;"><i class="fa fa-address-book-o"
                                            aria-hidden="true"></i>&nbsp;
                                        @if(!empty($d->user->name))
                                        {{$d->user->name}}
                                        @endif
                                    </h6>
                                </div>
                            </div>
                        </a>
                    </div>
                    @empty
                    @endforelse


                </div>
                @endif
                <section>

                    <center>
                        <div class="row">
                            <div class="col-md-12">
                                {{$data->links()}}
                            </div>
                        </div>
                    </center>

                </section>
            </section>

            <!--======================AGENT ENDS===========================================-->


            <div>

                </div></div></div></div></div></div></div>
                    <!--==================BOTTOM ADD STRTS============================-->

                   
</main>
 <!--==================BOTTOM ADD STRTS============================-->
         
    @if(count($bottomads)>0)
 <bottomadd >
     <div class="row">
    <div class="col-md-12">
      <div >
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

<script>

    document.getElementById("menu-btn").onclick = function () {
        document.getElementById("menu-btn").style.display = "none";
        document.getElementById("navbar").style.display = "block";
    };

    document.getElementById("close-btn").onclick = function () {
        document.getElementById("menu-btn").style.display = "block";
        document.getElementById("navbar").style.display = "none";
    };


</script>
<script>
    // Select all select elements on the page
    const selectBoxes = document.querySelectorAll('select');

    // Add an event listener to each select box
    selectBoxes.forEach(selectBox => {
        selectBox.addEventListener('change', function() {
        //   $('#btnconnecter').trigger( "click" );
        });
    });
</script>
<script>
    // Select all checkbox elements on the page
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    // Add an event listener to each checkbox
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('click', function() {
            //  $('#btnconnecter').trigger( "click" );
        });
    });
</script>
<script>
   
</script>
<script>
    // Select all input elements with the specific class 'my-input'
    // const inputBoxes = document.querySelectorAll('input.my-input');

    // // Add an event listener to each input box for the 'keyup' event
    // inputBoxes.forEach(inputBox => {
    //     inputBox.addEventListener('keyup', function() {
    //       $('#btnconnecter').trigger( "click" );
    //     });
    // });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $('#mySelect').on('change', function() {
            // Your logic here
            var brand_name = $(this).val();
            // alert(type_id);
             var csrfToken = $('meta[name="csrf-token"]').attr('content');
           $.ajaxSetup({
            headers: {
           'X-CSRF-TOKEN': csrfToken
    }
});
               $.ajax({
        method:'POST',        
        url:"{{ url('/get_brand_model') }}",
        data:{brand_name:brand_name},
        success:function(data){
// alert(data)
$('#brand_model').html(data);
        }
     });
        });
</script>
@endsection