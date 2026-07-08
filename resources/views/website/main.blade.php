@extends('layouts.website.main')
@section('content')
<style>

.cookie-alert {
  position: fixed;
  bottom: 15px;
  right: 15px;
  width: 320px;
  margin: 0 !important;
  z-index: 999;
  opacity: 0;
  transform: translateY(100%);
  transition: all 500ms ease-out;
}

.cookie-alert.show {
  opacity: 1;
  transform: translateY(0%);
  transition-delay: 1000ms;
}
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
.subs
{
    font-size:18px;
}
#suggestionsList {
   
    height:200px;
    overflow:hidden ; 
    overflow-y:scroll;
}

 #suggestionsList li {
    
    padding: 8px 15px;
    margin-bottom: 5px;
    text-align: left !important; 
    cursor:pointer;
    
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
     margin:10px !important;
 }
 .tns-nav{
     display:none;
 }
 
 .ads:hover{
     border:1px red solid;
 }
 @media (min-width: 600px) {
 .banner-in-container
 {
     margin-top:50px;
 }
 #viewBtn{
     margin-left:500px;
 }
 }
  @media (max-width: 600px) {
 .banner-in-container
 {
     /*margin-top:10px;*/
 }
 .resp_hide_div
 {
   display:none;  
 }
 .maindescc{
     display:none;
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
                 .main_sub_button
                 {
                     margin-top:5px;
                 }
                 .scrollable-div {
                    height: 150px ;
                overflow:hidden; 
                overflow-y:scroll;    
                 }
                 .rounded-div
                 {
                     border: 2px solid #000;
                 }
                 .slideads{
                     min-width:49%;!important
                 }
                 .img-responsive1{
                     height:150px;!important
                    
                 }
                 
                 
 }
 
 .containerarrow center img{
     width: 100%;
     height:350px;
 }

.banner-in-container
{
   /*opacity:0.5; */
   padding-top:115px !important;
   padding-left:150px !important;
}
.line  {
    display:none;
}
.hero .item-automobiles
{
    margin:5px;
    font-size:12px;
    opacity:1;
}
.hero .item-properties 
{
    margin:5px;
    font-size:10px;
    opacity:1 !important;
   
}
.property-item.highlight {
    background-color: #ffffe0; /* Light yellow background */
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
.main_cat_btn:hover
{
    background-color:#000 !important;
}
.main_cat_btn
{
    width:100px;height:50px;padding:10px;background-color:#dc3545;border:1px solid #dc3545;border-raius:5px;color:white
}

/*changed the top padding 20 to 10px*/
 #search-btn-new
    {
        padding-top:10px;
        z-index:10;
    }

@media (max-width: 1024px) {
    #search-btn-new
    {
        display:none;
    }
}

@media (min-width: 667px) {
    #search-btn-new1
    {
        display:none;
    }
     .banner-in-container
{
   /*opacity:0.5; */
   /*padding-top:10px !important;*/
   /*padding-left:0px !important;*/
}
.item-properties
{
    width:300px;
}

.property-item{
  border-radius: 10px;
  border:2px ridge #875c5c26;
}
}

/* this id is for making the third button Automobile center*/
#spanmain{
    left:20%;!important
    /*right:10%;!important*/
}

@media(max-width:768px){
    
    #spanmain{
    left:10%;!important

}
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

.hdesc{
  margin-left: 20px !important;
  color: #fff;
  font-size: 20px;
  padding-bottom: 10px;
}

@media(min-width:375px){
  .mainbtn {
    margin: 1px;
    width: 120px;
    font-size: 15px;
  }
}

@media(min-width:344px){
  .mainbtn {
    margin: 1px;
    width: 118px;
    font-size: 15px;
  }
}


@media(min-width:768){
  .hdesc{
    text-align: center !important;
  }
  .hero .heading {
    text-align: center !important;
  }
}

.btnBox {
  display: flex;
  justify-content: center !important;
  padding: 10px;
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

@media(min-width:1200px){
    .img-responsive1{
     margin-left:4%!important;   
    }
}

@media(min-width:1199px){
    .img-responsive1{
     margin-left:1%;   
      margin-right:1%;  
    }
}

.regbtn-container{
    display:flex;
    justify-content:center;
}

@media(max-width:677px){
    #reg{
    
    margin-left:7%;
}
}
#reg{
    
    margin-left:11%;
}
/*.propertyItems*/
/*{*/
/*   box-shadow: 0 0 15px 5px rgba(255, 215, 0, 0.75);*/
/*}*/
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

@media (max-width: 500px) {
  .btnBox .mainbtn {
    font-size: 1.4rem; 
    padding: 6px 10px; 
    width: 100%;
    white-space: normal; 
    text-align: center;
  }
}
 
    </style>
<!--=========SID-start========-->

<script type="text/javascript" src="https://homeireland.ie//public/website/js/cookie-consent.js" charset="UTF-8"></script>
<script type="text/javascript" charset="UTF-8">
document.addEventListener('DOMContentLoaded', function () {
cookieconsent.run({"notice_banner_type":"simple","consent_type":"express","palette":"light","language":"en","page_load_consent_levels":["strictly-necessary"],"notice_banner_reject_button_hide":false,"preferences_center_close_button_hide":false,"page_refresh_confirmation_buttons":false,"website_privacy_policy_url":"https://homeireland.ie/services#three`","website_name":"https://homeireland.ie/"});
});
</script>

<noscript>Cookie Consent by <a href="https://homeireland.ie/">Home Ireland</a></noscript>






<!-- Below is the link that users can use to open Preferences Center to change their preferences. Do not modify the ID parameter. Place it where appropriate, style it as needed. -->

<a href="#" id="open_preferences_center">Update cookies preferences</a>


  <div class="hero">
      <div class="hero-slide">
        @foreach($banners as $banner)
       <div 
          class="img overlay mainbanner lazy-bg"
          data-src="{{asset('uploads/banner/'.$banner->image)}}" style=" position: relative;"> 
           @if(isset($banner->url))
                 <!--<a href="{{$banner->url}}" target="_blank" style="position: absolute;bottom: 20px;right: 20px; z-index: 1;"><button class="btn btn-primary">{{$banner->button_text}}</button>-->
                 <!--</a>-->
          @endif
       </div>
     

        @endforeach
      </div>
      
 <!--<div class="line bg-dark" style="width:100% ;height:10px;"></div>-->
     
    <div class=" banner-in-container mt-5 ml-3 mb-5" >
      <div class="row  ">
          <!-- just add the transpernt black for the background-color :#00000080-->
        <div class="box col-lg-9 col-sm-6 mt-5 " style="background-color:#FFFFFF00" >
            <div class="line bg-light  " ></div>
  
          <h2 class="heading" data-aos="fade-up"><b>THE DREAM OF YOUR HOME AWAITS</b></h2>
          <h5 class="maindescc hdesc">
            Map-based search. 100% verified listings. Real property pictures.
          </h5>
          
          
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

          
          
         <div class="regbtn-container">
         
          <!-- <div class="item-properties ads mainbtn">
             <a href="{{ url('/login') }}"><span id="reg" class="reg" > Login</span></a>
          </div>
          
          <div class="item-properties ads mainbtn">
             <a href="{{ url('/register') }}"><span id="reg" class="reg"> SignUp </span></a>
          </div> -->
          </div>
         
          
<!--          <div class="btnBox">-->
<!--    <div class="item-properties ads d-flex align-items-center justify-content-center" style="border-radius:50px;height:55px;width:140px;">-->
<!--        <a href="{{url('/')}}" class="w-100 text-center"><span class="">Properties</span></a>-->
<!--    </div>-->

<!--    <div class="item-properties ads d-flex align-items-center justify-content-center" style="border-radius:50px;height:55px;width:140px;">-->
<!--        <a href="{{url('/Advertisement')}}" class="w-100 text-center"><span class="">Place Ads</span></a>-->
<!--    </div>-->

<!--    <div class="item-properties ads d-flex align-items-center justify-content-center" style="border-radius:50px;height:55px;width:140px;">-->
<!--        <a href="{{url('/automobiles')}}" class="w-100 text-center"><span class="">Automobiles</span></a>-->
<!--    </div>-->
<!--</div>-->

          
              </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>
  <!--about-->
 

<!--===================MAIN STARTS============================-->
  <main>
      
      <!--====================SEARCH STARTS==========================================-->
      <!--<section id="search-btn-new">-->
      <!--           <div class="row" style="padding:10px">-->
                     <!-----1---->
      <!--                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                      <center>-->
      <!--                         <a href="{{url('filter-properties')}}?search_type=all&main_cat=1"><button  class="main_cat_btn" >Residencial Rent</button></a>-->
      <!--                      </center>-->
      <!--               </div>-->
                   <!-----2 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
                          
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=3"><button class="main_cat_btn">Commercial Rent</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----3 -->
      <!--             <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=4"><button class="main_cat_btn">Parking Rent</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----4 -->
      <!--             <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=2"><button class="main_cat_btn">Sharing</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----5 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=5"><button class="main_cat_btn">Residencail Sale</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----6 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center >-->
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=6"><button class="main_cat_btn">Commercial sale</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    
                 
                 <!---------row2---->
      <!--           <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                      <center>-->
      <!--                         <a href="{{url('filter-properties')}}?search_type=all&main_cat=7"><button class="main_cat_btn">Parking For sale</button></a>-->
      <!--                      </center>-->
      <!--               </div>-->
                   <!-----2 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
                          
      <!--                     <a href="{{url('filter-properties')}}?search_type=all&main_cat=8"><button class="main_cat_btn">Holday Homes</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----3 -->
      <!--             <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('view_needed')}}?search_type=all&main_cat=9"><button class="main_cat_btn">Residencial  Needed</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----4 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('view_needed')}}?search_type=all&main_cat=10"><button class="main_cat_btn">Sharing Room  Needed</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----5 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('view_needed')}}?search_type=all&main_cat=11"><button class="main_cat_btn">Commercial   Needed</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    <!-----6 -->
      <!--              <div class="col-lg-1 col-md-1 col-sm-2 col-xs-12 col-2 mt-8">-->
      <!--                  <center>-->
      <!--                     <a href="{{url('view_needed')}}?search_type=all&main_cat=12"><button class="main_cat_btn">Parking  Needed</button></a>-->
      <!--                  </center>-->
      <!--              </div>-->
                    
      <!--           </div>-->
                 <!-----row3---->
                  <!--<div class="row" style="padding:10px">-->
                     <!-----1---->
                  <!--    <div class="col-lg-2 col-2 mt-8">-->
                  <!--          <center>-->
                  <!--             <a href="{{url('filter-properties')}}?search_type=all&main_cat=1"><button class="main_cat_btn">Residencial Rent</button></a>-->
                  <!--          </center>-->
                  <!--   </div>-->
                   <!-----2 -->
                  <!--  <div class="col-lg-2 col-2 mt-8">-->
                  <!--      <center>-->
                          
                  <!--         <a href="{{url('filter-properties')}}?search_type=all&main_cat=3"><button class="main_cat_btn">Commercial Rent</button></a>-->
                  <!--      </center>-->
                  <!--  </div>-->
                  <!--  </div>-->
      <!--           </section>-->
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
       
     <!--======================FEUTURED STARTS===========================================-->
        <section class="feutured">
           @if((count($properties[1])>0))
              <section class="aboutDiv">
               <div class="container mt-5 mb-4">
                <div class="container-fluid text-center">
                    <a href="{{url('filter-properties')}}?search_type=f" class="ads">
                        <button class="item-properties mt-2 ads"
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 5px; ">
                             <span style="display:flex;margin:auto;">View All <br> Featured Properties</span></button></a>
                    
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[1] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item" onclick="highlightProperty(this)" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1 )
                                      {
                                            $sub_title=" - For Rent";
                                            if($property->main_cat==8)
                                            {
                                                $sub_title=" - Holiday Homes";
                                            }
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
                               <div class="propertyItems"> 
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
         <!--======================FEUTURED ENS===========================================-->
         
         
         <!--======================AGENT STARTS===========================================-->
         <section class="agent">
             
           
               
          <?php
          $agent_count=count($properties[3])+count($properties[4])+count($properties[5]);
          if($agent_count>0)
          {
          ?>
            <section class="aboutDiv">
               <div class="container mt-5 mb-4">
                <div class="container-fluid text-center">
                   <a href="{{url('filter-properties')}}?search_type=a">
                       <button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;border-radius: 5px;">
                             <span style="display:flex;margin:auto;">View All <br> Agent Properties</span></button></a>
            
                </div></section>
               
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                  <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    
                    @for($i=3;$i<=5;$i++)
                      @forelse($properties[$i] as $property)
                      
                       <?php  
                       $property=(object)$property;
                       //echo"<pre>rrrrrrrrrrrr";print_r($property);exit?>
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item " onclick="highlightProperty(this)" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1 )
                                      {
                                            $sub_title=" - For Rent";
                                            if($property->main_cat==8)
                                            {
                                                $sub_title=" - Holiday Homes";
                                            }
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
                               <div class="propertyItems">    
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
                                      if($property->main_cat==1 )
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
                                      {
                                       ?>
                                      
                               <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p> 
                                     <?php
                                     }
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
      
      
     </section>
         <!--======================AGENT ENS===========================================-->
         <!--==================MID ADD STRTS============================-->
@if(count($middleads)>0)
 <midadd >
     <div class="row">
    <div class="col-md-12">
       <div >
         <!-- <div class="arrow left-arrow" id="left-arrow-mid">&#9664;</div> -->
          <div class="slider-mid">
            <div class="slider-track-mid">
                @foreach($middleads as $ads)
                <div class="slide-mid slideads">
                    <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- <div class="arrow right-arrow" id="right-arrow-mid">&#9654;</div> -->
      </div>
    </div>
  </div>
  </div>
</midadd>
@endif   
<!--=====================MID AD ENDS===================================-->
         <!--======================STANDARD STARTS===========================================-->
         <section class="standard">
           @if((count($properties[2])>0) )
              <section class="aboutDiv">
               <div class="container mt-5 mb-4">
                <div class="container-fluid text-center">
                  <a href="{{url('filter-properties')}}?search_type=s">
                      <button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;border-radius: 5px;">
                             <span style="display:flex;margin:auto;">View All <br> Standard Properties</span></button></a>
                              </div></section>
                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[2] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item " onclick="highlightProperty(this)" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                    if($property->main_cat==1 )
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
                               <div class="propertyItems ">    
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
         <!--======================STANDARD ENS===========================================-->
</main>   
<!--===============MAIN ENDS PROPERTY DISPLAY======================-->
          
            </div>
          </div>
        </div>    

    </div>


  <div class="section section-properties">
    <div class="">
       
            <!--PROPERTIES-->
          </h2>
        </div>
        <div class="text-lg-end">
          
        </div>
      </div>
     <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
     
      
 
    <!--ads--></div>
    {{-- j2 --}}
    <!--==================BOTTOM ADD STRTS============================-->
         
    @if(count($bottomads)>0)
 <bottomadd >
     <div class="row">
    <div class="col-md-12">
      <div >
           <!-- <div class="arrow left-arrow" id="left-arrow-bottom">&#9664;</div> -->
       <div class="slider-container-bottom">
     
        <div class="slider-bottom">
            <div class="slider-track-bottom">
                @foreach($bottomads as $ads)
                <div class="slide-bottom slideads">
                    <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a></div>
                @endforeach
            </div>
        </div>
       <!-- <div class="arrow right-arrow" id="right-arrow-bottom">&#9654;</div> -->
    </div>
    </div>
  </div>
  </div>
</bottomadd>
@endif   
         <!--=====================BOTTOM AD ENDS===================================-->



    <div class="section section-4 bg-light mt-5">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-12">
          <h2 class="font-weight-bold heading text-primary " style="font-size: 34px;font-weight: 600;margin: 30px !important;">
            LET'S FIND HOME THAT'S PERFECT <br/>FOR YOU
          </h2>
          <p class="text-black-50">
         Welcome to Your  Home Ireland Awaits – your ultimate destination for finding the perfect place to call home. Whether you're a first-time buyer, looking to upgrade, or seeking an investment property, we are dedicated to providing exceptional service and expertise. Our extensive listings feature a diverse range of homes to suit every taste and budget. With a commitment to excellence, we guide you through every step of the home-buying process, ensuring a smooth and stress-free experience. Discover your dream home with us today, where quality living begins.
          </p>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <!-- First Column -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="column-content feature-h">
              <span class="icon-home2" style="font-size: 45px;"></span>
              <div class="feature-text">
                <h3 class="heading">2M PROPERTIES</h3>
                <p class="text-black-50" style="text-align: justify;margin-right: 20px;">
                Our site boasts an extensive array of properties, catering to diverse needs and preferences. Whether you're looking for residential, commercial, or investment opportunities, we have the perfect options for you.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Second Column -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="column-content feature-h">
              <span class="icon-person" style="font-size: 45px;"></span>
              <div class="feature-text">
                <h3 class="heading">TOP RATED AGENTS</h3>
                <p class="text-black-50" style="text-align: justify;margin-right: 20px;">
                  Our top-rated agents are renowned for their exceptional service and extensive market knowledge, ensuring a seamless property transaction experience. They consistently receive high praise for their dedication, professionalism, and results.
                </p>
              </div>
            </div>
          </div>
          
          <!-- Third Column -->
          <div class="col-lg-4 col-md-6 col-12">
            <div class="column-content feature-h">
              <span class="icon-security" style="font-size: 45px;"></span>
              <div class="feature-text">
                <h3 class="heading">LEGIT PROPERTIES</h3>
                <p class="text-black-50" style="text-align: justify;margin-right: 20px;">
                  LEGIT Properties is committed to offering a wide selection of high-quality properties, ensuring transparency and trust in every transaction. Our experienced team of agents is dedicated to providing top-notch service, helping you find the perfect property with confidence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
        <!-- <div class="col-lg-12 resp_hide_div d-lg-flex justify-content-between">
          <div class="d-flex feature-h align-items-center " >
            <span class="wrap-icon me-3 ">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">2M PROPERTIES</h3>
              <p class="text-black-50">
               Our site boasts an extensive array of properties, catering to diverse needs and preferences. Whether you're looking for residential, commercial, or investment opportunities, we have the perfect options for you.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h align-items-center">
            <span class="wrap-icon me-3">
              <span class="icon-person"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">TOP RATED AGENTS</h3>
              <p class="text-black-50">
                Our top-rated agents are renowned for their exceptional service and extensive market knowledge, ensuring a seamless property transaction experience. They consistently receive high praise for their dedication, professionalism, and results.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h align-items-center">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">LEGIT PROPERTIES</h3>
              <p class="text-black-50">
                LEGIT Properties is committed to offering a wide selection of high-quality properties, ensuring transparency and trust in every transaction. Our experienced team of agents is dedicated to providing top-notch service, helping you find the perfect property with confidence.
              </p>
            </div>
          </div>
        </div>
      </div> -->
      <div class="row section-counter mt-5 resp_hide_div">
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup ">2 + 5propertirentcount</span></span>
            <span class="caption text-black-50">Buy Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">3 + 5propertisellcount</span></span>
            <span class="caption text-black-50">Sell Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">4 + 5propertiescount</span></span>
            <span class="caption text-black-50">All Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">4 + 8</span></span>
            <span class="caption text-black-50">Agents</span>
          </div>
        </div>
      </div>
    </div>
  </div>

    </div>
  </div>
  </div>
  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
           <a href="{{url('filter-properties')}}?search_type=all&main_cat=5"> 
          <div class="box-feature" style="height: 200px;">
            <span class="flaticon-house"></span>
          <h3 class="mb-3">PROPERTY FOR SALE</h3>
      
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
           <a href="{{url('filter-properties')}}?search_type=all&main_cat=1"> 
          <div class="box-feature" style="height: 200px;">
            <span class="flaticon-building"></span>
            <h3 class="mb-3">PROPERTY FOR RENT</h3>
          
          </div>
           </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
         <a href="{{url('filter-properties')}}?search_type=all&main_cat=4"> 
          <div class="box-feature" style="height: 200px;">
            <span class="flaticon-house-3"></span>
            <h3 class="mb-3">PARKING FOR RENT</h3>
           
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
         <a href="{{url('filterautomobiles')}}?search_type=all&main_cat=5"> 
          <div class="box-feature" style="height: 200px;">
            <span class="flaticon-house-1"></span>
            <h3 class="mb-3">AUTOMOBILES FOR SALE</h3>
            
          </div>
           </a>
          </div>
        </div>
      </div>
  </section>
  </div>
  <!--=========ADS COROSEL===-->
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  
    <!-- script for highliting the clicked property -->
  <script>
    function highlightProperty(element) {
      console.log("inside the highlight function")
        // Remove the highlight class from all property items
        var items = document.querySelectorAll('.property-item');
        items.forEach(function(item) {
            item.classList.remove('highlight');
        });

        // Add the highlight class to the clicked item
        element.classList.add('highlight');
    }
</script>
  

<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
    $('.catsubdiv').hide();
    $('.hidethree').hide();

   $('.subs').click(function(){
     $('.subs').removeClass('linked');
     $(this).addClass('linked');
     $('.filter-search').removeClass('hidden');
   });
     $('.filter-search').change(function(){
     $(this).addClass('hidden');
   });
});

  $('.search-cat').click(function()
  {
    $('.catsubdiv').hide();
    $('.nav-item').removeClass('redactive');
    $(this).addClass('redactive');
    var thistext = $(this).text();
     if (thistext == 'BUY')
     {
        var thistext = 'Sell';
      $('.buydiv').show();
     }
     if (thistext == 'RENT')
     {
         var thistext = 'Rent';
      $('.rentdiv').show();
     }
     if (thistext == 'COMMERCIAL')
     {
         var thistext = 'Commercial';
      $('.commercialdiv').show();
     }

          if (thistext == 'SHARE')
     {
         var thistext = 'Share';
      $('.sharediv').show();
     }
     
     if (thistext == 'PARKING')
     {
         var thistext = 'Parking';
      $('.parkingdiv').show();
     } 
          if (thistext == 'NEEDED')
     {
        var thistext = 'Needed'; 
      $('.neededdiv').show();
     } 
     
     

    if (thistext == 'SELL')
      {
            window.location.href = '/register';
      }
     else
      {
              $.ajax({
                url: '/set-cat-session',
                method: 'POST',
                data:{thistext:thistext}, 
                success: function(data) {
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });  
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
      $('body').on('click', '#suggestionsList li', function() {
        $.ajaxSetup({
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
     var text = $(this).text();
     $(".appendthetext").val(text);
         setTimeout(function() {
            $('#filter-properties').submit();
        }, 1000);  
      });
      
    $('.main_sub_button').click(function()
  {
      
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
   $('#filter-properties').submit();
  });
  
  $('.subs').click(function()
  {

      var subcat=$(this).text();
      var match =  subcat.split(' ')[0];
  $('#prop_sub_cat').val(match);
  $('#prop_sub_cat_org_name').val(subcat);
  });

</script>
<script>
$(document).ready(function() {
const apiKey = 'a84cc6f1fd5246cd8d480e1af84939c0';

$('#addressInput').on('input', function() {
    const inputText = $(this).val();
    const suggestionsList = $('#suggestionsList');

    // Make a request to OpenCage Geocoding API for address suggestions
    $.ajax({
        url: `get-city`,
        method: 'GET',
        dataType: 'HTML',
        data:{inputText:inputText}, 
        success: function(data) {
            $('#suggestionsList').empty();
     $('#suggestionsList').append(data);
        },
        error: function(error) {
            console.error('Error:', error);
        }
    });
});
});
</script>


<script>
    document.addEventListener('DOMContentLoaded', function () {
    var lazyBackgrounds = [].slice.call(document.querySelectorAll('.lazy-bg'));

    if ('IntersectionObserver' in window) {
        let lazyBackgroundObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    let lazyBackground = entry.target;
                    lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset.src + ')';
                    lazyBackgroundObserver.unobserve(lazyBackground);
                }
            });
        });

        lazyBackgrounds.forEach(function (lazyBackground) {
            lazyBackgroundObserver.observe(lazyBackground);
        });
    } else {
        // For browsers that don't support Intersection Observer
        lazyBackgrounds.forEach(function (lazyBackground) {
            lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset.src + ')';
        });
    }
});

</script>
<script>
    (function () {
    "use strict";

    var cookieAlert = document.querySelector(".cookie-alert");
    var acceptCookies = document.querySelector(".accept-cookies");

    cookieAlert.offsetHeight; // Force browser to trigger reflow (https://stackoverflow.com/a/39451131)

    if (!getCookie("acceptCookies")) {
        cookieAlert.classList.add("show");
    }

    acceptCookies.addEventListener("click", function () {
        setCookie("acceptCookies", true, 60);
        cookieAlert.classList.remove("show");
    });
})();

// Cookie functions stolen from w3schools
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
</script>


@endsection
