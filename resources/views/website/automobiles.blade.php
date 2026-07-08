@extends('layouts.website.main')
@section('content')
<style>
  .boxp{
    width: 300px;
    height: 200px;
    border: 2px solid #000;
    padding: 20px;
    box-sizing: border-box; /* Ensures padding is included in the width and height */
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

body{
    overflow-x:hidden;
}
.line  {
    display:none;
}
 .mainbtn {
  background: linear-gradient(to bottom right, #cb092b, #950707);
  border: 0;
  border-radius: 5px;
  color: #FFFFFF;
  cursor: pointer;
  display: inline-block;
  font-family: -apple-system,system-ui,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
  font-size: 16px;
  font-weight: 500;
  line-height: 2.5;
  outline: transparent;
  padding: 2px 1rem;
  text-align: center;
  text-decoration: none;
  transition: box-shadow .2s ease-in-out;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  margin: 5px;
  width: 140px;
  text-transform: uppercase;
}

.mainbtn:not([disabled]):focus {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}

.mainbtn:not([disabled]):hover {
  box-shadow: 0 0 .25rem rgba(0, 0, 0, 0.5), -.125rem -.125rem 1rem rgba(239, 71, 101, 0.5), .125rem .125rem 1rem rgba(255, 154, 90, 0.5);
}



@media (max-width: 500px) {
  .btnBox .mainbtn {
    font-size: 1.4rem; 
    padding: 6px 10px; 
    width: 100%;
    white-space: normal; 
    text-align: center;
  }
}

.btnBox {
  display: flex;
  justify-content: center !important;
  padding: 10px;
}

.hdesc{
  margin-left: 20px !important;
  color: #fff;
  font-size: 20px;
  padding-bottom: 10px;
}



.heading {
    color: #fff;
    font-size: 40px;
    margin-bottom: 10px;
    font-weight: 550;
    line-height: 44px !important;
    margin: 10px !important;
}

.feature-h{
  margin-bottom: 30px;
  text-align: center;
}

.regbtn-container{
    display:flex;
    justify-content:center;
}

.btn-font
{
  font-weight:bold;font-size:12px;text-transform:uppercase;   
}
  .linked
  {
    background:#d3111a;
    border-radius: 6px;
  }
 .mainbanner ,.hero
 {
     height:200px !important;
 }
 .aditemin{
     margin:10px !important;a
 }
 .tns-nav{
     display:none;
 }
 .scrollable-div {
    height: 300px ;
overflow:hidden; 
overflow-y:scroll;    
 }
 .left_b
 {
     margin-left:20% !important;
 }

 .property-item.highlight {
    background-color: #ffffe0; /* Light yellow background */
}

.property-item{
  border-radius: 10px;
  border:2px ridge #875c5c26;
}
.banner-in-container
{
   /*opacity:0.5; */
   padding-top:115px !important;
   padding-left:150px !important;
}
 @media (min-width: 600px) {
 .banner-in-container
 {
     margin-top:50px;
 }
 }
 @media only screen and (max-width: 700px) {
    .banner-in-container
{
   /*opacity:0.5; */
   padding-top:115px !important;
   padding-left:0px !important;
}
.item-automobiles
{
    left: 1% !important
}
.property-item{
  border-radius: 10px;
  border:2px ridge #875c5c26;
}
.box-feature{
  border-radius: 15px;
  height: 200px !important;
}

}
 /* @media (max-width: 1000px) {
     .automobilesBtn
     {
        font-size:12px !important; 
        padding:2px;
    
     }
             .btn-font
        {
          font-weight:bold;font-size:10px;text-transform:uppercase;   
       }
       .btnBox div {
        width: 700px !important;
        /* height: 30px !important; */
    }
    .left_b
 {
     margin-left:0% !important;
 }
 } */
  @media (max-width: 600px) {
 
 .resp_hide_div
 {
   display:none;  
 }
 .carsbtn1
 {
     height:50px;
      font-size:12px;
 }
 .carbtnfont1{
     display:none;
 }
 .left_b
 {
     margin-left:10%;
 }
 }
   @media (max-width: 600px) {
 .responsive_ad
 {
     
     width:300px !important;
     height:150px !important;
 }
 
 .search-cat
 {
     font-size:14px;
 }
 
 /*added a media query property for propert-content to make it center*/
 .property-content{
     display:flex;
     flex-direction:column;
     justify-content:center;
     align-items:center;
 }
 .maindescc{
     display:none;
 }
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
  <div class="hero">
      <!-- <div class="hero-slide">
        @foreach($banners as $banner)
       <div 
          class="img overlay mainbanner"
          style="background-image: url('{{asset('uploads/banner/'.$banner->image)}}"style=" position: relative;">            
       </div>
        @endforeach
      </div> -->
      <div class="hero-slide">
        @foreach($banners as $banner)
        <div 
          class="img overlay mainbanner lazy-bg"
          style=" position: relative;background-image: url('{{asset('uploads/banner/'.$banner->image)}}');"> 
            @if(isset($banner->url))
                  <!--<a href="{{$banner->url}}" target="_blank" style="position: absolute;bottom: 20px;right: 20px; z-index: 1;"><button class="btn btn-primary">{{$banner->button_text}}</button>-->
                  <!--</a>-->
            @endif
        </div>
        @endforeach
      </div>

    <div class=" banner-in-container mt-5 ml-3 mb-5" >
      <div class="row  ">
        <div class="box col-lg-9 col-sm-6 mt-5" style="width: 600px;
    background-color: #FFFFFF00;">
            <div class="line bg-light"></div>
            <h2 class="heading" data-aos="fade-up"><b>THE DREAM OF <br/> YOUR VEHICLE AWAITS</b></h2>
            <ul class="list-inline maindescc hdesc">
              <li>Map-based Search.</li>
              <li>100% Verified Listings.</li>
              <li>Real Vehicle Pictures.</li>
            </ul>
            <div class="btnBox d-flex flex-wrap d-sm-none">
              <a href="{{url('filter-properties')}}?search_type=all" class="col-4 m-2">
                <button class="mainbtn" role="button">Properties</button>
              </a>
              <a href="{{url('/automobiles')}}" class="col-5 m-2">
                <button class="mainbtn" role="button">Automobiles</button>
              </a>
              <a href="{{url('/Advertisement')}}" class="col-4 m-2">
                <button class="mainbtn" role="button">Place Ads</button>
              </a>
              <a href="{{url('/login')}}" class="col-4 m-2">
                <button class="mainbtn" role="button">Login</button>
              </a>
              <a href="{{url('/register')}}" class="col-4 m-2">
                <button class="mainbtn" role="button">SignUp</button>
              </a>
            </div>
            <div class="btnBox d-none d-sm-flex flex-wrap">
              <a href="{{url('filter-properties')}}?search_type=all" class="m-2">
                <button class="mainbtn" role="button">Properties</button>
              </a>
              <a href="{{url('/automobiles')}}" class="m-2">
                <button class="mainbtn" role="button">Automobiles</button>
              </a>
              <a href="{{url('/Advertisement')}}" class="m-2">
                <button class="mainbtn" role="button">Place Ads</button>
              </a>
              <a href="{{url('/login')}}" class="m-2">
                <button class="mainbtn" role="button">Login</button>
              </a>
              <a href="{{url('/register')}}" class="m-2">
                <button class="mainbtn" role="button">SignUp</button>
              </a>
            </div>

          <div class="col-lg-12  tcutomized " style="">
            <div id="tabs" >

              <div class="tab-content " >
                <div id="tab-1" class="col-lg-12 tab-pane active">
                             
                </div>

              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
  </div>
  
  
  
  <?php
$vselect=isset($_GET['vehicle'])?$_GET['vehicle']:"";
$tselect=isset($_GET['main_name'])?$_GET['main_name']:"";
$cselect=isset($_GET['county'])?$_GET['county']:"";
$pselect=isset($_GET['user_type'])?$_GET['user_type']:"";

$bselect=isset($_GET['brand'])?$_GET['brand']:"";
$mselect=isset($_GET['modal'])?$_GET['modal']:"";
$coselect=isset($_GET['color'])?$_GET['color']:"";
$fselect=isset($_GET['fuel'])?$_GET['fuel']:"";
?>
<!--=================quick search=====-->
<section >
  <div style="padding-bottom:5px;background-color:red;width:100%;height:auto;margin-top:0px;padding:10px">
    <div class="row">
         <div class="col-md-1 col-lg-1 col-sm-6 col-xs-4">
            </div>
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-4">
           <div class="my-5">
               <form action="/filterautomobiles"  method="GET">
                            <label class="form-label text-white">CHOOSE VEHICLE</label>
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
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-4">
            <div class="my-5">
                            <label class="form-label text-white">MAKE / BRAND</label>
                                <select class="form-select form-select-lg"  name="brand" id="mySelect">
                                     <option value="">--Select--</option>
                                <?php foreach($filter_arr[2] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->id?>" <?php if($bselect==$type->id){echo"selected";}?>><?=$type->brand_name?></option>
                                    <?php
                                }
                                ?>
                                </select>
                        </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-4">
            <div class="my-5">
                            <label class="form-label text-white"> MODEL</label>
                                <select class="form-select form-select-lg"  name="modal" id="brand_model">
                                    <option value="">--Select Make--</option>
                               
                                </select>
                        </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-4">
            <div class="my-5">
                            <label class="form-label text-white">YEAR</label> 
                            <input type="hidden" value="" id="miny" name="min_y">
                                <select class="form-select form-select-lg"  name="max_y" id="mySelect">
                                    <option value="">--Select--</option>
                                  <?php 
                                  $current_year=date('Y');
                                  for($i=$current_year;$i>=1928;$i--)
                                  { 
                                  ?>
                                  <option value="<?=$i?>"><?=$i?></option>
                                  <?php 
                                  }
                                  ?>
                                </select>
                        </div>
        </div>
        <div class="col-md-2 col-lg-2 col-sm-6 col-xs-4">
            <div class="my-5">
                            <label class="form-label text-white">COUNTY</label>
                                <select class="form-select form-select-lg"  name="county">
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
        </div>
     </div>
     <div class="row">
      <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
           <div class="text-center d-flex flex-column flex-sm-row justify-content-center align-items-center gap-2">
                            <button type="submit" class="btn btn-sm fs-4 fw-bold" style="background-color:#FFF200;width:160px;height:50px;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px;">QUICK SEARCH</button>
                            </form>
                           <a href="/filterautomobiles"> <button type="submit" class="btn btn-sm fs-4 fw-bold" style="background-color:#FFF200;width:160px;height:50px;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px;" id="btnconnecter">BROWSE ALL</button></a>
                           
                        </div>
        </div>
        
      </div>
    </div>
</section>

<!--=====quick search ends====-->
 
 
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
<main>
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
           @if((count($data)>0))
           @if($fdata_count==1)
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <a href="{{url('filterautomobiles')}}?search_type=1">
                        <button class="item-properties mt-2" style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px; ">
                         <span style="display:flex;margin:auto;">View All <br> Featured Listings</span></button></a>
                    
                </div></section>
       @endif
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->where('subcription_type',1)->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                     
                                   <?php
                                   if($d->type==3)
                                   {
                                       $type="For Hire";
                                   }
                                   if($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   else
                                   {
                                      $type="New - For Sale"; 
                                   }
                                   ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span></span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}</h6>
                                <div>
                               
                                  </div>
                                   <center>
                                 
                                     
                                          <p style="font-size:15px">
                                   
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                    
                                     
                                   
                                  
                              </center>
                                 
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
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
                        <button class="item-properties mt-2" style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px; ">
                         <span style="display:flex;margin:auto;">View All <br> Dealers Listings</span></button></a>
                    
                </div></section>
            @endif
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->whereIn('subcription_type',[3,4,5])->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item " onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                     
                                   <?php
                                   if($d->type==3)
                                   {
                                       $type="For Hire";
                                   }
                                   if($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   else
                                   {
                                      $type="New - For Sale"; 
                                   }
                                   ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span></span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}</h6>
                                <div>
                               
                                  </div>
                                   <center>
                                 
                                     
                                          <p style="font-size:15px">
                                   
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                    
                                     
                                   
                                  
                              </center>
                                 
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
     </section>
         <!--======================agent ENDS===========================================-->
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
  </div>
</midadd>
@endif   
<!--=====================MID AD ENDS===================================-->
          <!--======================standard STARTS===========================================-->
        <section class="standard">
           @if((count($data)>0))
             @if($sdata_count==1)
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <a href="{{url('filterautomobiles')}}?search_type=2">
                    <button class="item-properties mt-2" style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px; ">
                    <span style="display:flex;margin:auto;">View All <br> Standard Listings</span></button></a>
                    
                </div></section>
        @endif
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->where('subcription_type',2)->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item " onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                     
                                   <?php
                                   if($d->type==3)
                                   {
                                       $type="For Hire";
                                   }
                                   if($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   else
                                   {
                                      $type="New - For Sale"; 
                                   }
                                   ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span></span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}</h6>
                                <div>
                               
                                  </div>
                                   <center>
                                 
                                     
                                          <p style="font-size:15px">
                                   
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                    
                                     
                                   
                                  
                              </center>
                                 
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
     </section>
         <!--======================AGENT ENDS===========================================-->
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

</main>
<script>
    
    // Get the select element
var selectElement = document.getElementById('mySelect');

// Get the selected value
var selectedValue = selectElement.value;
var inputElement = document.getElementById('miny');
// Add event listener for change event
selectElement.addEventListener('change', function() {
    var selectedValue = this.value;
    console.log(selectedValue); // This will log the value each time the selection changes
     inputElement.value = selectedValue;
});


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
// <script type="text/javascript">
//      $('#mySelect').on('change', function() {
//             // Your logic here
//             var type_id = $(this).val();
//             // alert(type_id);
//              var csrfToken = $('meta[name="csrf-token"]').attr('content');
//           $.ajaxSetup({
//             headers: {
//           'X-CSRF-TOKEN': csrfToken
//     }
// });
//               $.ajax({
//         method:'POST',        
//         url:"{{ url('/get_brand_model') }}",
//         data:{type_id:type_id},
//         success:function(data){
// // alert(data)
// $('#brand_model').html(data);
//         }
//      });
//         });
// </script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Your JS code here
        // console.log("Page content loaded");
        
        const brand=document.getElementById('mySelect');
        
        getBrandModel();
        
        brand.addEventListener('change',function(){
            getBrandModel();
        });
        
        function getBrandModel(){
            $.ajax({
                url:"{{route('GetBrandModel')}}",
                method:"GET",
                data:{
                    'brand_id':brand.value
                },
                success: function (response) {

                    const modelSelect = document.getElementById("brand_model");
                    modelSelect.innerHTML = '<option value="">--Select Model--</option>';
                
                    response.Model.forEach(item => {
                        const option = document.createElement("option");
                        option.value = item.id;
                        option.textContent = item.model_name;
                        modelSelect.appendChild(option);
                    });
                }
            })
        }
        
        
        
        // console.log(brand);
    });
</script>
 @endsection