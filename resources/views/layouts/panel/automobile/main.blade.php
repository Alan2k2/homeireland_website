<!DOCTYPE html>
<html lang="en"> 
<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1' name='viewport'>
    <title>HomeIreland</title>
    <meta name="description" content="Ireland's Portal For Properties and Automobiles" />
    <meta name="robots" content="index, follow"/>
    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#0f9d58" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
   
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<link rel="shortcut icon" href="https://assets.helloaddress.com/ui/build/images/favicon.ico" />-->
    <link rel="shortcut icon" href="https://homeireland.ie//public/website/images/NEW-LOGO-svg-01.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="manifest" href="/manifest.json">
    
    <link rel="dns-prefetch" href="https://fonts.googleapis.com">
    <link rel="dns-prefetch" href="https://assets.helloaddress.com">

    <link href="{{asset('panel/main.css')}}" rel="stylesheet" type="text/css" />
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700|Roboto:100,300,400,500,700|Poppins:300,700,500,400,600" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/basic.css" 
    integrity="sha512-+Vla3mZvC+lQdBu1SKhXLCbzoNCl0hQ8GtCK8+4gOJS/PN9TTn0AO6SxlpX8p+5Zoumf1vXFyMlhpQtVD5+eSw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.css" integrity="sha512-7uSoC3grlnRktCWoO4LjHMjotq8gf9XDFQerPuaph+cqR7JC9XKGdvN+UwZMC14aAaBDItdRj3DcSDs4kMWUgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style type="text/css">
    .mob-header{
         display: none;
    }
        .tablinks{
            cursor: pointer;
        }
        .nexttab{
            display: none;
        }
        /* Preloader styles */
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #ffffff;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

.spinner {
    border: 4px solid  red;
    border-left-color: #333;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

    </style> <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #333;
    padding: 1rem;
    color: white;
    position: relative;
}

.brand-title {
    font-size: 1.5rem;
    left:0;
}

.navbar-links ul {
    display: flex;
    list-style: none;
}

.navbar-links li {
    margin-left: 1rem;
}

.navbar-links a {
    color: white;
    text-decoration: none;
    font-size: 1rem;
}

.toggle-button {
    display: none;
    flex-direction: column;
    cursor: pointer;
}

.toggle-button .bar {
    height: 3px;
    width: 25px;
    background-color: white;
    margin: 4px 0;
    transition: all 0.3s;
}

.close-button {
    display: none;
    font-size: 2rem;
    color: white;
    position: absolute;
    top: 1rem;
    right: 1rem;
    cursor: pointer;
    z-index: 1;
}

@media (max-width: 768px) {
   
    .mob-header{
         display: block;
         padding-bottom:10px;
         z-index: 1000;
         
    }
    .menu_new
    {
        display: none; 
    }
    .header{
         display: none;
    }
    .navbar-links {
        display: none;
        width: 50%;
        height:100vh;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: red;
        flex-direction: column;
        align-items: left;
        z-index: 1000;
        opacity:1;
    }

    .navbar-links ul {
        flex-direction: column;
        width: 100%;
    }

    .navbar-links ul li {
        text-align: left;
        margin: 0.5rem 0;
    }

    .toggle-button {
        display: flex;
    }

    .navbar.expanded .brand-title {
        /*display: none;*/
    }

    .navbar.expanded .toggle-button {
        display: none;
    }

    .navbar.expanded .close-button {
        display: block;
    }

    .navbar.expanded .navbar-links {
        display: flex;
    }
    .navbar{
        background-color: red;
    }
}
a {
        text-decoration: none;
    }

form
{
    font-size:13px;
}
.active:hover
{
   color:white; 
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


@media(max-width:768px){
       .nav-txt{
        height:100px;
    }
}

/*style for the updated nav bar mobile view 31/07/2024*/

.toggle-button {
    display: none;
    flex-direction: column;
    cursor: pointer;
    position: absolute;
    right: 10px;
}

.toggle-button .bar {
    height: 3px;
    width: 25px;
    background-color: white;
    margin: 4px 0;
    transition: all 0.3s;
}

.close-button {
    display: none;
    font-size: 2rem;
    color: white;
    position: absolute;
    /*top: 1rem;*/ /*making the close button move a little top*/
    right: 1rem;
    cursor: pointer;
    z-index: 1;
}

/*style for the updated nav bar mobile view 31/07/2024*/

@media (max-width: 768px) {
   
    .mob-header{
         display: block;
         padding-bottom:10px;
         z-index: 1000;
         
    }
    .menu_new
    {
        display: none; 
    }
    .header{
         display: none;
    }
    .navbar-links {
        display: none;
        width: 50%;
        height:100vh;
        position: absolute;
        top: 100%;
        right: 0;
        background-color: red;
        flex-direction: column;
        align-items: left;
        z-index: 1000;
        opacity:1;
    }

    .navbar-links ul {
        flex-direction: column;
        width: 100%;
    }

    .navbar-links ul li a {
        text-align: left;
        margin: 0.5rem 0;
        font-size: 2rem; /* increased the navbar link size*/
    }
    .navbar-links ul li {
            margin-top: 2rem; /* Added space between each link */
        }

    .toggle-button {
        display: flex;
    }

    .navbar.expanded .brand-title {
        /*display: none;*/
    }

    .navbar.expanded .toggle-button {
        display: none;
    }

    .navbar.expanded .close-button {
        display: block;
    }
     .close-button{
        font-size: 35px;
    }

    .navbar.expanded .navbar-links {
        display: flex;
    }
    .navbar{
        background-color: red;
    }
    
    /*class for making the taxt center at mobile view*/
       .div1{
        text-align: center;
    }
    
    
}





    </style>
        </head>
<body class="en">

        <!--<div id="leaderBoard" class="brtop-10 hidden-xs hidden-sm text-center" ></div>-->

<header class="header" style="background-color:#d3111a;height:100px;">
    <div class="container-fluid">
        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-6 helloaddress-logo mt-3">
            <div class="card" style="background:#d3111a;border:0;">
                <a href="/" title="get your home at Helloaddress" class="hidden-xs hidden-sm">
                    <img src="{{asset('website/images/homeireland log06.svg')}}" alt="homeireland.com" title="Kerala's fastest growing property site" class="hidden-xs hidden-sm" width="70%" />
                </a>
            </div>
        </div>

        <div class="col-lg-8 col-md-9 col-sm-9 col-xs-6 rhs-linklist">
            <ul class="font-roboto regular">
                <li class="post-property-link border-radius-3 hidden-xs">
                    <a href="{{url('/home')}}" class="bg-light">
                        Dashboard
                    </a>
                </li>

                <li class="post-property-link border-radius-3 hidden-xs">
                    <a href="{{url('scheam')}}" class="bg-light" data-redirect-url="/user/property/enlist">
                        Post Your Property
                    </a>
                </li>

                <li class="signin-link">
                    <style scoped>
                        a.userDrop { background: #407887; }
                    </style>
                    <a href="#" class="">
                        <i class="fa-solid fa-gear" style="font-size:25px;"></i>
                    </a>
                    <div class="dropdown-user clearfix">
                        <div class="userName font-nunito semi-bold menu">{{Auth::user()->name;}}</div>
                        <ul>
                            <li>
                                <a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="text-decoration:none;">Logout</a>
                            </li>
                        </ul>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>

                <li class="menu-ico">
                    <a href="#" title="Menu">
                        <i class="fa-solid fa-bars" style="font-size:25px;"></i>
                    </a>
                    <div class="dropdown-link clearfix mt-2">
                        <div class="userName font-nunito semi-bold menu">Menu</div>
                        <ul>
                            <li><a href="{{url('/myprofile')}}">Profile</a></li>
                            <li><a href="{{url('/display_property')}}">Properties</a></li>
                            <li><a href="{{url('/Automobiles')}}">Automobiles</a></li>
                            <li><a href="{{url('/display_ads')}}">Advertisement</a></li>
                            <li><a href="{{url('/Enquiries')}}">Enquiries</a></li>
                            <li><a href="{{url('/payments_history')}}">Payment History</a></li>
                        </ul>
                    </div>
                </li>

                <li>
                    @if(Session::has('confirm'))
                        <div class="alert alert-success" data-aos="fade-up" data-aos-delay="100" role="alert">
                            Enquiry Submitted
                        </div>
                    @endif

                    <div class="col-lg-8 dropdown-menu" data-aos="fade-up" data-aos-delay="200" style="padding:15px; font-size:15px; width:300px;border-radius:10px;">
                        @php
                            Session::forget('confirm')
                        @endphp
                    </div>
                </li>

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
                    <!-- Additional content can go here -->
                </div>
            </ul>
        </div>
    </div>
</header> 
<!--============responsive header==================-->
<header class="mob-header">
<nav class="navbar">
         <div class="brand-title" id="brand-title" >
            <a href="/" title="get your home at Helloaddress">
            <img src="{{asset('website/images/homeireland log06.svg')}}" alt="homeireland.com" title="Kerala's fastest growing property site"  width="70%" />
            </a>
            </div>
        <a href="javascript:void(0);" class="toggle-button" id="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links" id="navbar-links">
            <ul>
                <!--<li><a href="#">Homee</a></li>-->
                <!--<li><a href="#">About</a></li>-->
                <!--<li><a href="#">Services</a></li>-->
                <!--<li><a href="#">Contact</a></li>-->
                  <li><a href={{url('/home')}}>Dashboard</a></li>
                <li><a href={{url('/myprofile')}} >Profile</a></li>
                <!--<li><a href="#">Slot</a></li>-->
                <li><a href={{url('/display_property')}}>Properties</a></li>
                <li><a href={{url('/Automobiles')}}>Automobiles</a></li>
                <li><a href={{url('/display_ads')}}>Advertisement</a></li>
                <!--<li><a href={{url('/home')}}>Chat</a></li>-->
                <li><a href={{url('/Enquiries')}}>Enquiries</a></li>
                <li><a href={{url('/payments_history')}}>Payment History</a></li>
                <li><a href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit(); ">Logout</a></li>
            </ul>
        </div>
        <a href="javascript:void(0);" class="close-button" id="close-button">&times;</a>
    </nav>
</header>
<div class="preloader">
        <div class="spinner"></div>
        <div class="preloader">
        <div class="spinner"></div>
    </div></div>
        <section class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                    <div class="clearfix lhs-post-links border-radius-3">
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-txt">
                          
                                                            <p class="font-roboto light clearfix brtop-10"><span class="progress-info-ico"></span><span class="progress-info">Please Complete your profile for more response</span>
                                                            </p>
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

                                <ul class="font-roboto light tab fs-5">
<?php
$lclass=$dclass="";
if(isset($_GET['no']))
{
    if($_GET['no']==2)
    {
         $dclass="active";
    }
}
else
{
    $lclass="active";
}
?>
<li class="tablinks" id="eu6" >
                                             <a href="#">
                                               <span class="post-link-ico"></span>
                                              Plan <span class="completed-tick"></span></a>
                                        </li>
                                       <li class="tablinks <?=$lclass?>"   id="eu4">
                                           <a href="#">
                                               <span class="post-link-ico"></span>
                                          Location                                                                                
                                           </a>
                                       </li>
                                       
                                         <li class="tablinks <?=$dclass?>" id="eu5" >
                                            <a href="#">
                                          <span class="post-link-ico"></span>
                                           Details                                            
                                            <span class="completed-tick"></span></a>
                                       </li>
                                           <li class="tablinks" id="eu6" >
                                             <a href="#">
                                                <span class="post-link-ico"></span>
                                              Description   <span class="completed-tick"></span></a>
                                        </li>  
                                      <li class="tablinks" id="eu6" >
                                             <a href="#">
                                               <span class="post-link-ico"></span>
                                              Media <span class="completed-tick"></span></a>
                                        </li>
                                         
                                        <li class="tablinks" id="eu6" >
                                             <a href="#">
                                                <span class="post-link-ico"></span>
                                              Contact<span class="completed-tick"></span>
                                            </a>
                                        </li>
                                         <li class="tablinks" id="eu6" >
                                             <a href="#">
                                                <span class="post-link-ico"></span>
                                              Billing<span class="completed-tick"></span>
                                            </a>
                                        </li>
                </ul>
                            </div>

                           
                        </div>
                       
                    </div>
                   
                    </div>
                    @yield('content')
                    </div></div>


    <!--============responsive header ends==================-->
   


<footer class="footer" style="background-color:#d3111a">
    <div class="container">
        <div class="row footer-links">         
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="head font-roboto regular">Property in Province</div>
                    <ul>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 font-roboto light">
                            <a href="{{url('/properties-filter/Connacht')}}"
                                data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"districtId=1","type":"normal","origin":"footer_district"}}'
                                title="Connacht">
                                Connacht                            
                            </a>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 font-roboto light">
                            <a href="{{url('/properties-filter/Ulster')}}"
                                data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"districtId=2","type":"normal","origin":"footer_district"}}'
                                title="Ulster">
                                Ulster                            
                            </a>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 font-roboto light">
                            <a href="{{url('/properties-filter/Munster')}}"
                                data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"districtId=3","type":"normal","origin":"footer_district"}}'
                                title="Munster">
                                Munster                            
                            </a>
                        </li>
                        <li class="col-lg-6 col-md-6 col-sm-6 col-xs-6 font-roboto light">
                            <a href="{{url('/properties-filter/Leinster')}}"
                                data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"districtId=4","type":"normal","origin":"footer_district"}}'
                                title="Leinster">
                                Leinster                            
                            </a>
                        </li>
                    
                                        </ul>
                </div>

                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="head font-roboto regular">Popular Searches in Country</div>
                    <ul>
                        <li class='font-roboto light'><a href="{{url('')}}" data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"q=flat%2Bkochi","type":"normal","origin":"footer_search"}}'>Budget Flats in Ireland</a></li>
               
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="head font-roboto regular">Most popular Towns</div>
                    <ul>
                        <li class='font-roboto light col-lg-6 col-md-6 col-sm-6 col-xs-6'>
                            <a href="{{url('')}}" data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"townId=148","type":"normal","origin":"footer_town"}}'>Kilkenny, Co. Kilkenny</a>
                        </li>
                           
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <div class="head font-roboto regular">Properties for Sale</div>
                    <ul>
                        <li class='font-roboto light '><a href="{{url('/properties')}}" data-lens-tracking='{"event":"trackSearch","name":"Search","prop":{"vars":"q=sale%2Bcochi","type":"normal","origin":"footer_sale"}}'>Properties for Sale in Ireland</a></li>                    </ul>
                </div>

            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12 zeroPadding">
                    <img data-hafe-el-name="imglazyload" src="{{asset('website/images/homeireland log06.svg')}}"  data-original-src="{{asset('website/images/homeireland log06.svg')}}" width="160px" height="70px" alt="HomeIreland Logo">
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-top-20 zeroPadding">
                    <ul class="social">
                        <li>
                            <a href="" target="_blank" rel="noopener">
                                <img data-hafe-el-name="imglazyload" src="https://assets.helloaddress.com/ui/build/images/1x1.jpg" data-original-src="https://assets.helloaddress.com/ui/build/images/fb-ico.png" alt="Helloaddress Facebook" 
                                title="Helloaddress Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="" target="_blank" rel="noopener">
                                <img data-hafe-el-name="imglazyload" src="https://assets.helloaddress.com/ui/build/images/1x1.jpg" data-original-src="https://assets.helloaddress.com/ui/build/images/twitter-ico.png" alt="Helloaddress Twitter" 
                                title="Helloaddress Twitter">
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p class="font-roboto light brtop-10">HomeIreland.com is an exclusive real estate portal for Ireland, owned by the ** group. It caters to residential, commercial, industrial and agricultural properties within the Country.
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </p>
            </div>

        </div>

        <div class="row copyright">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="font-roboto light">&copy; Copyright 2023 HomeIreland - All rights reserved. Powered by Nubicus</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <p class="font-roboto light">  24/7 Service : 0888-8888888 | admin@homeireland.com |
                    <a href="#" id="privacyPolicy" title="Privacy Policy">Privacy Policy</a> |
                    <a href="#" id="termsOfUse" title="Terms Of Use">Terms Of Use</a>  |
                    <a href="{{url('/faqs')}}" title="FAQs">FAQs</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<a href="#" class="scrollup " aria-label="Scroll to top" >
 <h1>
    
    <i class="fa fa-arrow-left" aria-hidden="true"
     style="color: rgb(1, 0, 0);font-size:25px;margin-top:13px;margin-left:13px"></i></h1>
    
</a>




<div class='hide'>
    <div class='overlayad' href="#overlayad_content" id='overlayad_content'></div>
</div>

<!--this div is responsible for the black div that appears on top of the header some times-->
<!--<div class="mobile-app-view hide">-->
   
<!--</div>-->


<div class="search-wrapper" data-el-name="gs">
    <a href="#" class="font-roboto regular close-search" title="Close">X</a>
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-12 search-form">
        <label for="suggestions">Search</label>
                <input type="text"
            id="suggestions"
            name="suggestions"
            class="search-input font-nunito light"
            placeholder=""
            autocomplete="off"
            autocorrect="off"
            autocapitalize="off"
            spellcheck="false"
            data-lens='{"event":"trackSearch","name":"Search","prop":{"vars":"","type":"normal","origin":"header_search"}}'>
        <span class="search-info font-roboto regular text-right">
            <em class="pull-left">Search by entering  keyword or  location or Property ID</em>
            Hit enter to search or ESC to close        </span>
    </div>
</div>


<div class="modal fade" id="windowTitleDialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-title font-nunito regular"></div>
            </div>
            <div class="modal-body font-roboto regular"><p></p>
            <div class="clearfix brtop-20"></div>
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn yellow-btn confirmOk">Ok</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
        var pagename = "myaccount";
    var adlocation = "";
  var jsonLocale = {"Confirm removing property":"Confirm removing property","This action will remove the property permanently":"This action will remove the property permanently","Are you sure you want to continue":"Are you sure you want to continue"};
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






<script type="text/javascript" src="https://assets.helloaddress.com/ui/build/scripts/property/listProperties-b9078bfacf.js"></script>



        
    
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
        var sessionState    = '76e11e0c8df0bc2face48f0688ebfb255d5284c9b3e93142bc62fb60a7d93010.e0d2bbaecf0e623a653584d465bd5339';
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
  $(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready
//  alert("document is ready");
 $("#event8").hide();
});
    function openCity(evt,cityName,tablinksno=20) {
//   alert(tablinksno);
        if(tablinksno==30)
        {
    var mobileNumber = document.getElementById("phone").value;
    var mobileNumberPattern = /^\d{10}$/;

    if (!mobileNumber.match(mobileNumberPattern)) {
        alert("Please enter a valid 10-digit mobile number");
        return false;
    }
    var email = document.getElementById("emailAddress").value;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!email.match(emailPattern)) {
        alert("Please enter a valid email address");
        return false;
    }

  
           
        }
        // && validateEmail();
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
//   alert(tabcontent.length)
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
  evt.currentTarget.className += "active";
  if(tablinksno!=20){
// tablinks[tablinksno].className = tablinks.addClass("active");
$('#eu'+tablinksno+'.tablinks').addClass('active');
  }
//   if(tablinksno==20){
//       alert("hi")
// tablinks[tablinksno].className = tablinks.addClass("active");
// // $('#eu'+tablinksno+'.tablinks').addClass('active');
//   }
  
}
</script>      
    <script type="text/javascript">
$(document).ready(function() {
  $(".tablinks").click(function() {
    // Use the .find() method to locate the element inside the clicked div
    var elementToFind = $(this).find(".change-active");
    
    // Check if the element was found
    if (elementToFind.length > 0) {
      // Get the class of the found element
      var elementClass = elementToFind.attr("class");
      
      // Do something with the class
      console.log("Class of the element inside the clicked div: " + elementClass);
    } else {
      console.log("Element not found inside the clicked div.");
    }
  });
});
// In this example, when the .clicked-div element is clicked, it uses .find() to locate the .element-to-find element inside it and then retrieves its class using .attr("class"). The class name is then logged to the console. If the element is not found inside the clicked div, it logs a message indicating that the element was not found.

setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000);

    </script>    
    <script>
        // JavaScript to hide the preloader when the page is fully loaded
window.addEventListener('load', function() {
    const preloader = document.querySelector('.preloader');
    preloader.style.display = 'none';
});

    </script>
    <script>
    document.getElementById("toggle-button").addEventListener("click", function() {
    var navbar = document.querySelector(".navbar");
    var navbarLinks = document.getElementById("navbar-links");
    
    navbar.classList.toggle("expanded");
    if (navbar.classList.contains("expanded")) {
        navbarLinks.style.display = "flex";
    } else {
        navbarLinks.style.display = "none";
    }
});

document.getElementById("close-button").addEventListener("click", function() {
    var navbar = document.querySelector(".navbar");
    var navbarLinks = document.getElementById("navbar-links");
    
    navbar.classList.remove("expanded");
    navbarLinks.style.display = "none";
});

    </script>
    </body>
</html>
 