<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Nubicus" />
    <link rel="shortcut icon" href="https://homeireland.ie//public/website/images/NEW-LOGO-svg-01.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
     <link rel="stylesheet" href="{{asset('website/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/responsive.css')}}" />
  
    <meta name="description" content="Map-based search. 100% verified listings. Real property pictures." />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

<!-- Meta Image for Facebook (Open Graph) -->
    <meta property="og:image" content="https://homeireland.ie//public/website/images/NEW-LOGO-svg-01.png" />
    <meta property="og:image:secure_url" content="https://homeireland.ie//public/website/images/logo02.svg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    
    <!-- Twitter Image -->
    <meta name="twitter:image" content="https://homeireland.ie//public/website/images/logo02.svg" />
    <meta name="twitter:card" content="THE DREAM OF YOUR HOME AWAITS" />
    
    <!-- Facebook (Open Graph) Meta Tags -->
    <meta property="og:title" content="THE DREAM OF YOUR HOME AWAITS" />
    <!--<meta property="og:description" content="Map-based search. 100% verified listings. Real property pictures." />-->
    <meta property="og:url" content="" />
    <meta property="og:type" content="website" />

    <!-- Twitter Meta Tags -->
    <meta name="twitter:title" content="THE DREAM OF YOUR HOME AWAITS" />
    <!--<meta name="twitter:description" content="Map-based search. 100% verified listings. Real property pictures." />-->
    <meta name="twitter:url" content="" />
    
    <!-- Basic Meta Tags -->
    <!--<meta name="description" content="Map-based search. 100% verified listings. Real property pictures." />-->
    <meta name="keywords" content="" />
    <meta name="title" content="THE DREAM OF YOUR HOME AWAITS"
    <meta name="author" content="Nubicus" />

    <link rel="stylesheet" href="{{asset('website/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}" />
    <script src="https://kit.fontawesome.com/29d1847fa7.js" crossorigin="anonymous"></script>
    <script async defer crossorigin="anonymous" 
    src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v13.0" 
    nonce="abc123">
</script>

    
  <!---------SID-----  -->
<style>

.breadscrump
{
   font-size:15px; 
   font-weight:800;
   padding:10px;
}
 breadscrup a:hover
  {
      color:blue!important;
      font-size:15px !important; 
  }
  .breadcrumps:hover
  {
      color:blue !important;
  }
.jump-up-arrow {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #000;
    color: #fff;
    padding: 10px 15px;
    border-radius: 50%;
    cursor: pointer;
    display: none; /* Initially hidden */
    transition: opacity 0.3s ease-in-out;
    z-index:10;
}

.jump-up-arrow.show {
    display: block; /* Show when class 'show' is added */
    opacity: 1;
}
.px-2
{
      font-size: 18px;
      font-weight:500;
}
h4
{
           font-size: 25px;
           font-weight:800;
}
h5
{
           font-size: 18px;
}
h6
{
    font-size: 14px; 
}
a {
    color: #000 !important;
    font-size:12px;
    text-decoration: none !important;
}
.site-nav{
    z-index:50;
}
@media only screen and (max-width: 600px){
    .slides{
        display:inline-flex!important;
        /*margin:10px;*/
    }
    #phead{
        margin-top:50px;
    }
    .ml-4{
        margin-left:130px;
    }
    .site-nav-wrap:hover{
        color:white;
    }
}
#footer a
{
    color:#fff !important;
}
</style>
     <!---------SID-----  --> 
    
<style>
 .image {
            display: block;
            /*width: 350%;*/
            /*height: 300;*/
        }
  .slider-container {
  overflow: hidden;
}

.slider {
  /*display: flex;*/
  transition: transform 0.5s ease-in-out;
}

.slide {
  flex: 0 0 23.33%; /* Adjust according to your need */
}

.slide img {
  /*width: 100%;*/
}
/* /* =======mid starts================= */

.slider-container-mid {
  overflow: hidden;
}

.slider-mid {
  /*display: flex;*/
  transition: transform 0.5s ease-in-out;
}

.slide-mid {
  flex: 0 0 23.33%; /* Adjust according to your need */
}

.slide img {
  /*width: 100%;*/
}

*/
  /* new end */
.loginBtn{
    display:none;
}

 @media (max-width: 600px){
     .loginBtn{
         display:block;
     }
 }
    textarea {
      vertical-align: top;
      text-align: left;
    }
    .bg-left-half {
  position: relative; }
  .bg-left-half:before {
    position: absolute;
    width: 50%;
    height: 100%;
    z-index: -1;
    content: "";
    left: 0;
    top: 0;
    background-color: #f8f9fa; }

.media-29101 img {
  margin-bottom: 20px; }

.media-29101 h3 {
  font-size: 18px;
  font-weight: 900 !important; }
  .media-29101 h3 a {
    color: #6c757d; }

.owl-2-style .owl-nav {
  display: none; }

.owl-2-style .owl-dots {
  text-align: center;
  position: relative;
  bottom: -30px; }
  .owl-2-style .owl-dots .owl-dot {
    display: inline-block; }
    .owl-2-style .owl-dots .owl-dot span {
      display: inline-block;
      width: 15px;
      height: 3px;
      border-radius: 0px;
      background: #cccccc;
      -webkit-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
      -o-transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
      transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
      margin: 3px; }
    .owl-2-style .owl-dots .owl-dot.active span {
      background: #007bff; }
    .owl-2-style .owl-dots .owl-dot:active, .owl-2-style .owl-dots .owl-dot:focus {
      outline: none; }
       .containerarrow {
  position: relative;
  text-align: center;
  color: black;
  font-size:50px;
        }
        
        .bottom-right {
  position: absolute;
  bottom: 200px;
  right: 50px;
  opacity: 0.5;
}
.bottom-left {
  position: absolute;
  bottom: 200px;
  left: 50px;
  opacity: 0.5;
}
</style>
          <style>
               .multi-item-carousel{
  .carousel-inner{
    > .item{
      transition: 500ms ease-in-out left;
    }
    .active{
      &.left{
        left:-33%;
      }
      &.right{
        left:33%;
      }
    }
    .next{
      left: 33%;
    }
    .prev{
      left: -33%;
    }
    @media all and (transform-3d), (-webkit-transform-3d) {
      > .item{
        // use your favourite prefixer here
        transition: 500ms ease-in-out left;
        transition: 500ms ease-in-out all;
        backface-visibility: visible;
        transform: none!important;
      }
    }
  }
  .carouse-control{
    &.left, &.right{
      background-image: none;
       opacity:0;
    }
   
  }
}


.img-responsive
{
         height:200px;
         width:330px;
         padding:0px !important;
         padding-top:0px;
}
 @media (max-width: 600px){
     .img-responsive{
        height:100px;
        width:200px;
        padding-top:0px;
     }
 }
 .carousel-control.right{
      height:250px;
      width="350px";
      background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0000) 0, rgba(0, 0, 0, .0) 0000%);
 }
  .carousel-control.left{
      height:250px;
       width="350px";
       background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .0000) 0, rgba(0, 0, 0, .0) 0000%);
 }
           </style>
           <style>
<style>
.slider-container {
    position: relative;
    width: 80%;
}

.slider {
    overflow: hidden;
    /*border: 2px solid #ccc;*/
    /*border-radius: 10px;*/
    background-color: #fff;
}

.slider-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide {
    min-width: 25%;
    box-sizing: border-box;
    padding: 10px;
}

.slide-adv {
    min-width: 25%;
    box-sizing: border-box;
}

/* =============mid  */
.slider-container-mid {
    position: relative;
    width: 100%;
}

.slider-mid {
    overflow: hidden;
    /*border: 2px solid #ccc;*/
    /*border-radius: 10px;*/
    background-color: #fff;
}

.slider-track-mid {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide-mid {
    min-width: 25%;
    box-sizing: border-box;
    padding: 10px;
}

/* ===bottom== */
.slider-container-bottom {
    position: relative;
    width: 100%;
}

.slider-bottom {
    overflow: hidden;
    /*border: 2px solid #ccc;*/
    /*border-radius: 10px;*/
    background-color: #fff;
}

.slider-track-bottom {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.slide-bottom {
    min-width: 25%;
    box-sizing: border-box;
    padding: 10px;
}
.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    color: #333;
    background-color: rgba(255, 255, 255, 0.7);
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    z-index: 1000;
}

.left-arrow {
    left: 40px;
     color:black;
}

.right-arrow {
    right: 40px;
    color:black;
}
.login2
{
    display:none !important;
    
}
@media only screen and (max-width: 1200px){
        .login2
{
    display:block !important;
}
.mediumhide{
     display:none !important;
}
}
@media only screen and (max-width: 950px){
    .login_mob
    {
        height: 30px; background-color: #ffff; color:black; font-weight: bold; border: 0px;color:black;width:150px;
        text-align:center;display:flex;justify-content:center;
    }
    .log_mob_color
    {
        color:black;
    }
}

@media only screen and (max-width: 600px){
    .login2
{
    display:block !important;
}
    .slides{
        display:inline-flex!important;
    }
    
}
    .hero .box
    {
        height:400px;
    }
      .logoutbtn{
        margin-left:20px;
    }
    
     .footerrow{
            margin-top:3rem !important;
        }
    
    @media(min-width:1200px){
        .site-footer{
            padding:10px 0px 10px 0px !important;
        }
        .widgefooter{
            margin-bottom:5px !important;
        }
        .footerrow{
            margin-top:0rem !important;
        }
        
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
                      width:200px !important;
                 }
                 
                 
 }
 
 
 @media screen and (min-width: 992px) and (max-width: 1249px) {

  .site-nav .site-navigation .site-menu.d-none.d-lg-inline-block {
    display: none !important;
  }
  
 
  .site-nav .site-navigation .js-menu-toggle {
    display: block !important;
  }
  
 
  .site-mobile-menu {
    display: block;
  }
}


@media screen and (min-width: 1249px) {
  .site-nav .site-navigation .site-menu.d-none.d-lg-inline-block {
    display: inline-block !important;
  }
  
  .site-nav .site-navigation .js-menu-toggle {
    display: none !important;
  }
}
   
</style>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @php
    $strings=Request::segment(1);
    $firstseven = substr($strings, 0, 8);
   
    @endphp
    @if($firstseven == 'property')
    @else
    <style>
     .hero.page-inner,
     .hero.page-inner > .container > .row {
       height: 70vh;
       min-height: 300px;
     }
    </style>
    @endif
    @if(Request::segment(1) == '')
    
    @elseif(Request::segment(1) == 'automobiles')
    @elseif(Request::segment(1) == 'filterautomobiles')
    
    @else
     <link rel="stylesheet" href="{{asset('website/css/style-inner.css')}}" />
    @endif
     <title>
      Home Ireland - Rent or Lease we are here for you
    </title>
  </head>
  <body style="scroll-behavior: smooth;">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icofont-close js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    @if(Request::segment(1) == '')
    
    @elseif(Request::segment(1) == 'automobiles')
    @elseif(Request::segment(1) == 'filterautomobiles')
    @else
<div class="preloader">
        <div class="spinner"></div>
    </div>
<nav class="site-nav " style="height:70px;">
      <div class=" ">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo float-start ms-3  mt-3"> <img src="{{asset('website/images/homeireland log06.svg')}}" width="70%"/></a>
                
            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start  site-menu float-end mt-2">
               
                 <li><a href="{{url('/')}}" class="page_cat">HOME</a></li>
                
                  <li class="has-children">
                    <a style="" data-bs-toggle="collapse" data-bs-target="#collapseItem0">RENT</a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Rent">
                     <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all">All Properties</a></li>-->
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=1">Residential Rent</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=3">Commercial Rent</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=4">Parking Rent</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=2">Sharing</a></li>
                    

                     </ul>
                  </li>
                 <li class="has-children">
                    <a style="" href="#" data-bs-toggle="collapse" data-bs-target="#collapseItem1">SALE</a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Commercial">
                       <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all">All Properties</a></li>-->

                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=5">Residential Sale</a></li>
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=6">Commercial sale</a></li>
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=7">Parking For sale</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a style="" data-bs-toggle="collapse" data-bs-target="#collapseItem2">NEEDED </a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Needed">
                      <!--<li class="test_li_click"><a href="{{url('view_needed')}}">All Needed properties</a></li>-->
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=9">Residential properties</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=10">Sharing Room</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=11">Commercial properties</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=12">Parking</a></li>
                      <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=8">All Holiday Homes</a></li>-->
                     
                    </ul>
                  </li> 
                   
                  <li class="has-children">
                    <a style="" href="#" data-bs-toggle="collapse" data-bs-target="#collapseItem3">PARKING</a>
                    <ul class="dropdown bg-light "  style="margin-bottom:20px !important;">
                        <input type="hidden" class="close_li_val" value="Parking">
                     <!--<li class="test_li_click"><a href="#">View All</a></li>-->
                     
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=4">For Rent</a></li>
                      <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=5">For Rent/sale</a></li>-->
                       <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=7">For Sale</a></li>
                    </ul>
                  </li>
                  <!-- <li class="has-children">
                    <a style="" href="{{url('filter-properties')}}?search_type=all&main_cat=8" data-bs-toggle="collapse" data-bs-target="#collapseItem4"> HOLIDAY HOMES</a>
                    <ul class="dropdown bg-light "  style="margin-bottom:20px !important;">
                        <input type="hidden" class="close_li_val" value="Parking">
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=8">All Holiday Homes</a></li>

                      
                    </ul>
                  </li> -->
                 
                   <li><a href="{{url('filter-properties')}}?search_type=all&main_cat=8"class=""><span style=" font-weight: bold; " class=""> HOLIDAY HOMES</span></a><br></li>
                   <li><a href="{{ url('/automobiles') }}"class=""><span style=" font-weight: bold; " class="">AUTOMOBILES</span></a><br></li>  
                  @if(Auth::user())
                     @if(Auth::user() && Auth::user()->isAdmin())
                     
                       <li><a href="{{url('/admin')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span><br></a></li>
                        @else
                       <li><a href="{{url('/home')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span><br></a></li>
                       @endif 
                       
                   <li><br><a href="/HomeLogout"  class="login_mob"><span class="log_mob_color">LOGOUT</span></a></li>
              @else
              <li><a href="{{ url('/login') }}"class="login_mob"><span style=" font-weight: bold; " class="log_mob_color">LOGIN</span></a><br></li>
              <li><a href="{{ url('/register') }}" class="login_mob"><span style=" font-weight: bold;" class="log_mob_color">SIGNUP</span></a></li>
              @endif
                  
   <!--                                <li class="login2"><a href="{{ url('/login') }}"><button class="px-2 loginBtn" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Log-In</button></a></li>-->
   <!--               <li>-->
   <!--                   <div class="dropdown">-->
  
   <!--<i class="hideonmob fa-solid fa-user dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px;color:#fff;cursor:pointer;"></i>-->
  
   <!--             <ul class="dropdown-menu" style="justify-content:center;align-items:center;margin:auto;">-->
   <!--                 <li><a class="dropdown-item" href="#">@if(Auth::user())-->
   <!--                     @if(Auth::user() && Auth::user()->isAdmin())-->
   <!--                         <li><a href="{{ url('/admin') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
   <!--                     @else-->
   <!--                         <li><a href="{{ url('/home') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
   <!--                     @endif-->
   <!--                 @else-->
   <!--                     <li><a href="{{ url('/login') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Log-In</button></a></li>-->
   <!--                 @endif</a></li>-->
   <!--                  @if(Auth::user())-->
   <!--                  <li> <form action="{{ route('logout') }}" method="POST"> @csrf-->
                     <!--changed logout3 to logout-->
   <!--                      <button class="px-2  logoutbtn" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Logout</button></form></li>-->
   <!--                 @else-->
   <!--                  <li><a href="{{ url('/register') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Sign up</button></a></li>-->
   <!--                 @endif-->
   
   <!--             </ul>-->
   <!--         </div>-->
   <!--               </li>-->
                  
                
                
            </ul>
            <a href="#" class="d-lg-none float-end me-3 mt-3 site-menu-toggle js-menu-toggle  d-inline-block " data-toggle="collapse" data-target="#main-navbar"><i class="fa-solid fa-bars text-light" style="font-size:30px;"></i></a>
          </div>
        </div>
        
      </div>
    </nav>  
    
    @endif
       @if(Request::segment(1) == '')
    <nav class="site-nav " style="height:70px;">
      <div class=" ">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo float-start ms-3  mt-3"> <img src="{{asset('website/images/homeireland log06.svg')}}" width="70%"/></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end mt-3 me-4">
            
                  <li class="has-children">
                    <a  class="close_li_val" href="#" style="" data-bs-toggle="collapse" data-bs-target="#collapseItem0">RENT</a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Rent">
                     <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all">All Properties</a></li>-->
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=1">RESIDENTIAL RENT</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=3">COMMERCIAL RENT</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=4">PARKING RENT</a></li>
                     <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=2">SHARING</a></li>
                    

                     </ul>
                  </li>
                  
                 <li class="has-children">
                    <a style=""  class="close_li_val" href="#" data-bs-toggle="collapse" data-bs-target="#collapseItem1">SALE</a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Commercial">
                       <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all">All Properties</a></li>-->

                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=5">RESIDENTIAL SALE</a></li>
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=6">COMMERCIAL SALE</a></li>
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=7">PARKING FOR SALE</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a style="" class="close_li_val" data-bs-toggle="collapse" data-bs-target="#collapseItem2">NEEDED </a>
                    <ul class="dropdown bg-light ">
                        <input type="hidden" class="close_li_val" value="Needed">
                      <!--<li class="test_li_click"><a href="{{url('view_needed')}}">All Needed properties</a></li>-->
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=9">RESIDENTIAL PROPERTIES</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=10">SHARING ROOM</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=11">COMMERCIAL PROPERTIES</a></li>
                      <li class="test_li_click"><a href="{{url('view_needed')}}?search_type=all&main_cat=12">PARKING</a></li>
                      <!-- <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=8">ALL HOLIDAY HOMES</a></li> -->
                     
                    </ul>
                  </li> 
                   
                  <li class="has-children">
                    <a style="" href="#" data-bs-toggle="collapse" data-bs-target="#collapseItem3">PARKING</a>
                    <ul class="dropdown bg-light "  style="margin-bottom:20px !important;">
                        <input type="hidden" class="close_li_val" value="Parking">
                     <!--<li class="test_li_click"><a href="#">View All</a></li>-->
                     
                      <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=4">FOR RENT</a></li>
                      <!--<li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=5">For Rent/sale</a></li>-->
                       <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=7">FOR SALE</a></li>
                    </ul>
                  </li>
                   <!-- <li class="has-children">
                    <a style="" href="{{url('filter-properties')}}?search_type=all&main_cat=8" data-bs-toggle="collapse" data-bs-target="#collapseItem4"> HOLIDAY HOMES</a>
                    <ul class="dropdown bg-light "  style="margin-bottom:20px !important;">
                        <input type="hidden" class="close_li_val" value="Parking">

                          <li class="test_li_click"><a href="{{url('filter-properties')}}?search_type=all&main_cat=8">ALL HOLYDAY HOME</a></li>
                    </ul>
                  </li> -->
                  
                      <li><a href="{{url('filter-properties')}}?search_type=all&main_cat=8"class=""><span style=" font-weight: bold; " class=""> HOLIDAY HOMES</span></a><br></li>
                      <li><a href="{{ url('/automobiles') }}"class=""><span style=" font-weight: bold; " class="">AUTOMOBILES</span></a><br></li>              
 @if(Auth::user())
                     @if(Auth::user() && Auth::user()->isAdmin())
                     
                       <li><a href="{{url('/admin')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span></a><br></li>
                        @else
                       <li><a href="{{url('/home')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span></a><br></li>
                       @endif 
                       
                   <li><a href="/HomeLogout" class="login_mob"><span class="log_mob_color">LOGOUT</span></a><br></li>
              @else
              <li><a href="{{ url('/login') }}" class="login_mob"><span class="log_mob_color">LOGIN</span></a><br></li>
              <li><a href="{{ url('/register') }}" class="login_mob"><span class="log_mob_color">SIGNUP</span></a></li>
              @endif
                 
        <!--               @if(Auth::user())-->
        <!--                    <li class="login2"><a href="{{ url('/admin') }}"><button class="px-2 loginBtn" style="height: 50px;width:120px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
        <!--                @else-->
        <!--              <li class="login2"> <a href="{{ url('/login') }}"><button class="px-2 loginBtn" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Log-In</button></a></li>-->
        <!--              @endif-->
        <!--          @if(Auth::user())-->
        <!--         <li class="login2 " style="margin-left:20px">-->
        <!--<form  action="{{ route('logout') }}" method="POST"> @csrf-->
        <!--    <button class="px-2 loginBtn " style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Logout</button></form></li>-->
        <!--          <li>-->
        <!--              @else-->
        <!--               <li class="login2"><a href="{{ url('/register') }}"><button class="px-2 loginBtn" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Sign Up</button></a></li>-->
                  
                      @endif
                      
                      
                      <!--<li>-->
   <!--                   <div class="dropdown mediumhide">-->
  
   <!--<i class="hideonmob fa-solid fa-user dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px;color:#fff;cursor:pointer;"></i>-->
  
   <!--             <ul class="dropdown-menu" style="justify-content:center;align-items:center;margin:auto;">-->
   <!--                 <li><a class="dropdown-item" href="#">@if(Auth::user())-->
   <!--                     @if(Auth::user() && Auth::user()->isAdmin())-->
   <!--                         <li><a href="{{ url('/admin') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
   <!--                     @else-->
   <!--                         <li><a href="{{ url('/home') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
   <!--                     @endif-->
   <!--                 @else-->
   <!--                     <li><a href="{{ url('/login') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Log-In</button></a></li>-->
   <!--                 @endif</a></li>-->
   <!--                  @if(Auth::user())-->
   <!--                 <li style="margin-left:20px;"><form  action="{{ route('logout') }}" method="POST" > @csrf-->
   <!--                 <button class="px-2 ml-4" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Logout</button></form></li>-->
   <!--                  @else-->
   <!--                    <li><a href="{{ url('/register') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; -->
   <!--                    color: #d3111a; font-weight: bold;-->
   <!--                    border: 0px;">Sign up</button></a></li>-->
   <!--                  @endif-->
   <!--             </ul>-->
   <!--         </div>-->
   <!--               </li>-->
                  
                
              
            </ul>
            

            <!--<a href="#"-->
            <!--  class="burger light   float-end  site-menu-toggle js-menu-toggle d-inline-block d-lg-none"-->
            <!--  data-toggle="collapse"-->
            <!--  data-target="#main-navbar"style="" >-->
            <!--  <span></span>-->
            <!--</a>-->
            <a href="#" class="d-lg-none float-end me-3 mt-3 site-menu-toggle js-menu-toggle  d-inline-block " data-toggle="collapse" data-target="#main-navbar"><i class=" fa-solid fa-bars text-light" style="font-size:30px;"></i></a>
          </div>
        </div>
        
      </div>
    </nav>  
    
           @elseif(Request::segment(1) == 'automobiles' || Request::segment(1) == 'filterautomobiles'||Request::segment(1) == 'view_automobiles') 
            <div class="line bg-dark" style="width:100% ;height:10px;"></div>
     
    <nav class="site-nav " style="height:70px;">
      <div class=" ">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo float-start ms-3  mt-3"> <img src="{{asset('website/images/homeireland log06.svg')}}" width="70%"/></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end mt-3 me-4">
                @if(Request::segment(1) == 'filterautomobiles')
                  <li><a href="{{url('/automobiles')}}">HOME</a></li>
                @endif
              <li><a href="{{url('/filterautomobiles')}}">ALL</a></li>
              <li><a href="{{url('/filterautomobiles')}}?main_name=1">NEW</a></li>
              <li><a href="{{url('/filterautomobiles')}}?main_name=2">USED</a></li>
              <li><a href="{{url('/filterautomobiles')}}?main_name=1">PRIVATE</a></li>
              <li><a href="{{url('/filterautomobiles')}}?search_type=dealers">DEALERS</a></li>
              <li><a href="{{url('/filterautomobiles')}}?main_name=3"> HIRE</a></li>
              <li class="mb-4 mb-lg-0"><a href="{{url('/filterautomobiles')}}?main_name=4"> NEEDED </a></li>
              <li><a href="{{url('/')}}">PROPERTY HOME</a></li>
              @if(Auth::user())
                     @if(Auth::user() && Auth::user()->isAdmin())
                     
                       <li><a href="{{url('/admin')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span></a><br></li>
                        @else
                       <li><a href="{{url('/home')}}" class="login_mob"><span class="log_mob_color">DASHBOARD</span></a><br></li>
                       @endif 
                       
                   <li><a href="/HomeLogout" class="login_mob"><span class="log_mob_color">LOGOUT</span><br></a></li>
              @else
              <li><a href="{{ url('/login') }}" class="login_mob"><span class="log_mob_color">LOGIN</span></a><br></li>
              <li><a href="{{ url('/register') }}" class="login_mob"><span class="log_mob_color">SIGNUP</span></a></li>
              @endif
    <!--        <li>-->
    <!--<div class="dropdown">-->
    <!--  <i class="hideonmob fa-solid fa-user dropdown-toggle"  type="button" data-bs-toggle="dropdown" aria-expanded="false" style="font-size:20px;color:#fff;cursor:pointer;"></i>-->
    <!--     <ul class="dropdown-menu" style="justify-content:center;align-items:center;margin:auto;">-->
    <!--                <li><a class="dropdown-item" href="#">@if(Auth::user())-->
    <!--                    @if(Auth::user() && Auth::user()->isAdmin())-->
    <!--                        <li><a href="{{ url('/admin') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
    <!--                    @else-->
    <!--                        <li><a href="{{ url('/home') }}"><button class="px-2" style="height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">{{Auth::user()->name}}</button></a></li>-->
    <!--                    @endif-->
    <!--                @else-->
    <!--                    <li><a href="{{ url('/login') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Log-In</button></a></li>-->
    <!--                @endif</a></li>-->
    <!--                 @if(Auth::user())-->
    <!--                 <li> <form action="{{ route('logout') }}" method="POST"> @csrf-->
    <!--                     <button class="px-2 logoutbtn" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Logout</button></form></li>-->
    <!--                @else-->
    <!--                 <li><a href="{{ url('/register') }}"><button class="px-2" style=" height: 40px; background-color: #ffff; color: #d3111a; font-weight: bold; border: 0px;">Sign up</button></a></li>-->
    <!--                @endif-->
   
    <!--            </ul>-->
    <!--        </div></li>-->
            </ul>
            

            <a href="#" class="d-lg-none float-end me-3 mt-3 site-menu-toggle js-menu-toggle  d-inline-block " data-toggle="collapse" data-target="#main-navbar">
                <i class="fa-solid fa-bars text-light" style="font-size:30px;"></i></a>
          </div>
        </div>
        
      </div>
    </nav>  
    
    
       @else

   
       @endif
@yield('content')

<div class="site-footer" id="footer">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-4">
        <div class="widget widgefooter">
             <img src="{{asset('website/images/homeireland log06.svg')}}" width="50%"/>
             @php
             if (Request::is('automobiles'))
              {
                @endphp
                <p>your vehicle awaits, we pride ourselves on being a trusted partner in the real estate market. With years of experience , we are committed to helping you find the perfect home. Our company values integrity, transparency, and customer satisfaction above all else. We offer a wide range of services, from personalized home searches to expert advice on buying and selling. Join us at Your Dream Vehicle Awaits, where your real estate dreams become reality.</p>

            @php
              }else{
            @endphp
                <p class="m-3" style="font-family: Montserrat, sans-serif;
    font-weight: 400;
    font-size: small;">The dream of your home awaits , we pride ourselves on being a trusted partner in the real estate market. With years of experience , we are committed to helping you find the perfect home. Our company values integrity, transparency, and customer satisfaction above all else. We offer a wide range of services, from personalized home searches to expert advice on buying and selling. Join us at Your dream of your home awaits, where your real estate dreams become reality.</p>
            @php
              }
             @endphp
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4  mt-3">
        <div class="widget m-5">
          <!--<h3>Quick Links</h3>-->
          <div class="d-flex justify-content-between" style="margin-top: 50px;">
            
            <ul class="list-unstyled links">
              <li > <h6>ABOUT US</h6></li>
              <li><a href="{{url('contact_us')}}"> Contact us</a></li>
              <li><a href="{{url('contact_us')}}"> Help centre</a></li>           
            </ul>
            <ul class="list-unstyled links ">
              <li><h6>QUICK LINKS</h6></li>
              <li><a href="{{url('Advertisement')}}"> Advertising</a></li>
              <li><a href="{{url('services')}}#one">Privacy</a></li>
              <li><a href="{{url('services')}}#two">Equality</a></li>
              <li><a href="{{url('services')}}#three">Cookie policy</a></li>
              <li><a href="{{url('services')}}#four">Terms of use</a></li>         
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-4 mt-3 ">
        <div class="widget " style="margin-top: 50px;">
          <ul class="list-unstyled links">
            <li><h6>CONNECT US</h6></li>
            <li><a href="mailto:info@mydomain.com">info@homeireland.ie</a></li>
          </ul>
          <ul class="list-unstyled social d-flex justify-content-start">
            <li>
              <a href="#" class="soc_fot ms-2"><i class="fa-brands fa-instagram"></i></a>
              
            </li>
            <li>
                <div class="jump-up-arrow" id="jumpUpArrow">&#8593;</div>
            </li>
            <li>
              <a href="#" class="soc_fot ms-5"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="#" class="soc_fot ms-5"><i class="fa-brands fa-x-twitter"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
                  <form method="GET" action="{{url('/filter-properties')}}" id="filter-properti">
                    @csrf
                    <input type="hidden" id="prop_sub_cats" name="prop_sub_cat">
                    <input type="hidden" id="prop_sub_cats_org_name" name="prop_sub_cat_org_name">
                    <input type="hidden" name="city" value="{{isset($string)?$string:''}}" id="addressonmainInput">
                  </form>
    <div class="row  footerrow ">
        <hr style="color:#c8c8c8">
      <div class="col-12 text-center">
            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              All Rights Reserved. &mdash; Designed with love by
              <a href="http://nubicus.com" target="_blank">Nubicus</a>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div id="overlayer"></div>
    <div class="loader">
      <div class="spinner-border" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <script src="https://kit.fontawesome.com/7ae76ea903.js" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   
<script type="text/javascript">
      $('.view_contact').click(function()
      {
        $('.hidecontactdet').show();
      });
      $("body").on("click", '.test_li_click', function() 

      {
          $(this).css("background", "#dc3545");
          $(this).css("font-color", "black");
     
                    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });      
        var thistext=$(this).closest('.dropdown').find('.close_li_val').val();
        var match=$(this).text();
        var thisval =  match.split(' ')[0];
        $('#prop_sub_cats').val(thisval);
        $('#prop_sub_cats_org_name').val(match);
        

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
        setTimeout(function () {
                    $('#filter-properti').submit();
                 }, 500);
      });
            $('.buttonDiv').click(function()
      {
         
                    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });      
        var thistext=$(this).closest('.dropdowns').find('.close_li_vals').val();
        var match=$(this).text();
         var matche=$(this).text().replace(/^\s+/g, '');
        var thisval =  matche.split(' ')[0];
        $('#prop_sub_cats').val(thisval);
        $('#prop_sub_cats_org_name').val(match);
        setTimeout(function () {
                    $('#filter-properti').submit();
                 }, 500);
   
     
      });

    </script>



    <script src="{{asset('website/js/jquer.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('website/js/tiny-slider.js')}}"></script>
    <script src="{{asset('website/js/aos.js')}}"></script>
    <script src="{{asset('website/js/navbar.js')}}"></script>
    <script src="{{asset('website/js/counter.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
   
 <script>
    let currentIndex = 0;
const sliderTrack = document.querySelector('.slider-track');
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length-3;

// Clone first four slides and append them to the end for infinite looping
for (let i = 0; i < 4; i++) {
    const clone = sliderTrack.children[i].cloneNode(true);
    sliderTrack.appendChild(clone);
}
function moveSlider() {
    currentIndex++;

    sliderTrack.style.transition = 'transform 0.5s ease-in-out';
    sliderTrack.style.transform = `translateX(-${currentIndex * 25}%)`;

    // Reset slider position to the start without transition
    if (currentIndex >= totalSlides) {
        setTimeout(() => {
            sliderTrack.style.transition = 'none';
            sliderTrack.style.transform = 'translateX(0)';
            currentIndex = 0;
        }, 500); // Delay to match the transition duration
    }
}
let sliderInterval = setInterval(moveSlider, 2000); // Change slide every 2 seconds
// =========mid starts==========.
let currentIndexmid = 0;
const sliderTrackmid = document.querySelector('.slider-track-mid');
const slidesmid = document.querySelectorAll('.slide-mid');
const totalSlidesmid = slidesmid.length-3;

// Clone first four slides and append them to the end for infinite looping
for (let i = 0; i < 4; i++) {
    const clone = sliderTrackmid.children[i].cloneNode(true);
    sliderTrackmid.appendChild(clone);
}
function moveSlidermid() {
    currentIndexmid++;
    sliderTrackmid.style.transition = 'transform 0.5s ease-in-out';
    sliderTrackmid.style.transform = `translateX(-${currentIndexmid * 25}%)`;
    // Reset slider position to the start without transition
    if (currentIndexmid >= totalSlidesmid) {
        setTimeout(() => {
            sliderTrackmid.style.transition = 'none';
            sliderTrackmid.style.transform = 'translateX(0)';
            currentIndexmid = 0;
        }, 500); // Delay to match the transition duration
    }
}

 let sliderIntervalmid = setInterval(moveSlidermid, 2000); // Change slide every 2 seconds
//  ================bottom

let currentIndexbottom = 0;
const sliderTrackbottom = document.querySelector('.slider-track-bottom');
const slidesbottom = document.querySelectorAll('.slide-bottom');
const totalSlidesbottom = slidesbottom.length-3;

// Clone first four slides and append them to the end for infinite looping
for (let i = 0; i < 4; i++) {
    const clone = sliderTrackbottom.children[i].cloneNode(true);
    sliderTrackbottom.appendChild(clone);
}
function moveSliderbottom() {
    currentIndexbottom++;
    sliderTrackbottom.style.transition = 'transform 0.5s ease-in-out';
    sliderTrackbottom.style.transform = `translateX(-${currentIndexbottom * 25}%)`;
    // Reset slider position to the start without transition
    if (currentIndexbottom >= totalSlidesbottom) {
        setTimeout(() => {
            sliderTrackbottom.style.transition = 'none';
            sliderTrackbottom.style.transform = 'translateX(0)';
            currentIndexbottom = 0;
        }, 500); // Delay to match the transition duration
    }
}

 let sliderIntervalbottom = setInterval(moveSliderbottom, 2000); // Change slide every 2 seconds

// ====top arrow====
document.getElementById('left-arrow').addEventListener('click', () => {
    clearInterval(sliderInterval);
    currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalSlides - 1;
    sliderTrack.style.transition = 'transform 0.5s ease-in-out';
    sliderTrack.style.transform = `translateX(-${currentIndex * 25}%)`;

    if (currentIndex === 0) {
        setTimeout(() => {
            sliderTrack.style.transition = 'none';
            sliderTrack.style.transform = `translateX(-${(totalSlides - 4) * 25}%)`;
            currentIndex = totalSlides - 4;
        }, 500);
    }

    sliderInterval = setInterval(moveSlider, 2000);
});

document.getElementById('right-arrow').addEventListener('click', () => {
    clearInterval(sliderInterval);
    moveSlider();
    sliderInterval = setInterval(moveSlider, 2000);
});
// ====mid arrow====
document.getElementById('left-arrow-mid').addEventListener('click', () => {
    
    clearInterval(sliderIntervalmid);
    
    currentIndexmid = (currentIndexmid > 0) ? currentIndexmid - 1 : totalSlidesmid - 1;
    sliderTrackmid.style.transition = 'transform 0.5s ease-in-out';
    sliderTrackmid.style.transform = `translateX(-${currentIndexmid * 25}%)`;

    if (currentIndexmid === 0) {
        setTimeout(() => {
            sliderTrackmid.style.transition = 'none';
            sliderTrackmid.style.transform = `translateX(-${(totalSlidesmid - 4) * 25}%)`;
            currentIndexmid = totalSlidesmid - 4;
        }, 500);
    }

    sliderIntervalmid = setInterval(moveSlidermid, 2000);
});

document.getElementById('right-arrow-mid').addEventListener('click', () => {
    clearInterval(sliderIntervalmid);
    moveSlidermid();
    sliderIntervalmid = setInterval(moveSlidermid, 2000);
});
// ====bottom arrow====
document.getElementById('left-arrow-bottom').addEventListener('click', () => {
    
    clearInterval(sliderIntervalbottom);
    
    currentIndexbottom = (currentIndexbottom > 0) ? currentIndexbottom - 1 : totalSlidesbottom - 1;
    sliderTrackbottom.style.transition = 'transform 0.5s ease-in-out';
    sliderTrackbottom.style.transform = `translateX(-${currentIndexbottom * 25}%)`;

    if (currentIndexbottom === 0) {
        setTimeout(() => {
            sliderTrackbottom.style.transition = 'none';
            sliderTrackbottom.style.transform = `translateX(-${(totalSlidesbottom - 4) * 25}%)`;
            currentIndexbottom = totalSlidesbottom - 4;
        }, 500);
    }

    sliderIntervalbottom = setInterval(moveSliderbottom, 2000);
});

document.getElementById('right-arrow-bottom').addEventListener('click', () => {
    clearInterval(sliderIntervalbottom);
    moveSliderbottom();
    sliderIntervalbottom = setInterval(moveSliderbottom, 2000);
});
</script>


  
        
</script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script>
      // Get the jump-up arrow element
const jumpUpArrow = document.getElementById('jumpUpArrow');

// Add an event listener for the window's scroll event
window.addEventListener('scroll', () => {
    if (window.scrollY > 300) {
        jumpUpArrow.classList.add('show');
    } else {
        jumpUpArrow.classList.remove('show');
    }
});

// Add an event listener for the arrow click event
jumpUpArrow.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

  </script>
  <script>
    $(document).ready(function() {

// ============mid=============
 var mid_add_count=$("#mid_add_count").val();
    var c=1;
    // alert(mid_add_count)
    // alert(bottom_add_count)
    for(var k=2;k<=mid_add_count;k++)
    {
        // alert("l")
      $("#mid_add_"+k).hide(); 
      
    }
    
// ============bottom ends=============
   function blink()
   {
    
        $("#mid_add_"+c).hide();
         c+=1
        //  alert(c+"c,midcount"+mid_add_count)
        if(c>mid_add_count)
        {
            c=1;
           
        }
        
         $("#mid_add_"+c).show();
         
     
   }
   

   setInterval(function() {
       
        blink();
    }, 4000); // Show div every 2 seconds
   
   
  
         });
        //  ==========ARROW CLICKS==============
        
</script>
  </body>
</html>
