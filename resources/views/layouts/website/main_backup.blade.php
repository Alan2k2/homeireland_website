<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Untree.co" />
    <link rel="shortcut icon" href="favicon.png" />

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap5" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="{{asset('website/fonts/icomoon/style.css')}}" />
    <link rel="stylesheet" href="{{asset('website/fonts/flaticon/font/flaticon.css')}}" />
<style>
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
</style>
    <link rel="stylesheet" href="{{asset('website/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    @php
    $string=Request::segment(1);
    $firstseven = substr($string, 0, 8);
   
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
    @elseif(Request::segment(1) == 'filter-automobiles')
    
    @else
     <link rel="stylesheet" href="{{asset('website/css/style-inner.css')}}" />
    @endif
     <title>
      Home Ireland - Rent or Lease we are here for you
    </title>
  </head>
  <body>
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
    @elseif(Request::segment(1) == 'filter-automobiles')
    @else
<nav class="navbar navbar-expand-sm navbar-dark bg-dark hideonmob" style="padding-right:35px;">
	  <div class="container-fluid">	    
		<div class="collapse navbar-collapse " id="navbarSupportedContent">
		  <ul class="navbar-nav me-auto order-0 ">
			<li class="nav-item">
			  <a class="nav-link active " aria-current="page" href="{{url('/')}}" > <img src="{{asset('website/images/Home Ireland Logo-01.svg')}}" width="70%" height="50px"></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#"></a>
			</li>
			<li class="nav-item">
			  <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
			</li>
		  </ul>
		  <div class="mx-auto">
			<a class="navbar-brand " href="#"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
		</div>
		  <form class="d-flex ms-auto order-5">
		 <a class="nav-link" href="/about" style="color:white;">ABOUT</a>
         <a class="nav-link" href="/contact-us" style="color:white;">CONTACT</a>
          <a class="nav-link" href="/register" style="color:white;">ADVERTISE</a>
                                      @if (Route::has('login'))
          <a class="nav-link btn btn-primary" href="{{url('/log')}}"  style="height:33px;padding:6px !important;margin-bottom:26px;">
              LOG-IN
          </a>
                            @endif

          </form>
		</div>
	  </div>
	</nav>

    @endif
       @if(Request::segment(1) == '')
    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo m-0 float-start"> <img src="{{asset('website/images/Home Ireland Logo-01.svg')}}" width="80%"></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li><a href="{{url('/about')}}">ABOUT</a></li>
              <li><a href="{{url('/contact-us')}}">CONTACT</a></li>
              <li><a href="{{url('/register')}}">ADVERTISE</a></li>
              <li><a href="{{url('/login')}}"><button class="btn btn-primary btn-block">Log-In</button></a></li>
            </ul>

            <a href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar" >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>  
           @elseif(Request::segment(1) == 'automobiles' || Request::segment(1) == 'filter-automobiles') 
    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo m-0 float-start"> <img src="{{asset('website/images/Home Ireland Logo-01.svg')}}" width="80%"></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li><a href="{{url('/about')}}">ABOUT</a></li>
              <li><a href="{{url('/contact-us')}}">CONTACT</a></li>
              <li><a href="{{url('/register')}}">ADVERTISE</a></li>
              <li><a href="{{url('/login')}}"><button class="btn btn-primary btn-block">Log-In</button></a></li>
            </ul>

            <a href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar" >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>
    
       @else

      <nav class="site-nav" style="margin-top:63px !important;color:white !important;">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <!--<a href="{{url('/')}}" class="logo m-0 float-start"> <img src="{{asset('website/images/Home Ireland Logo-01.svg')}}" width="80%"></a>-->

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                            <li class="has-children">
             
                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                  <li class="has-children">
                    <a class="page_cat" style="color:red !important;font-size:18px;"><b>BUY</b></a>
                    <ul class="dropdown" >
                        <input type="hidden" class="close_li_val" value="Buy">
                      <li class="test_li_click"><a href="#">All Properties</a></li>
                      <li class="test_li_click"><a href="#">House For Sale</a></li>
                      <li class="test_li_click"><a href="#">Apartment For Sale</a></li>
                      <li class="test_li_click"><a href="#">New Homes</a></li>
                      <li class="test_li_click"><a href="#">Site For Sale</a></li>
                    </ul>
                  </li>
                  <li class="has-children">
                    <a style="color:red !important;font-size:18px;"><b>RENT</b></a>
                    <ul class="dropdown">
                        <input type="hidden" class="close_li_val" value="Rent">
                     <li class="test_li_click"><a >All Properties</a></li>
                     <li class="test_li_click"><a>House To Rent</a></li>
                     <li class="test_li_click"><a>Apartment To Rent</a></li>
                     <li class="test_li_click"><a>Students Accommodation</a></li>
                     <li class="test_li_click"><a>Holiday Homes</a></li>
                     <li class="test_li_click"><a>Site To Rent</a></li>

                     </ul>
                  </li>
                   <li class="has-children">
                    <a style="color:red !important;font-size:18px;" href="#"><b>SHARE</b></a>
                    <ul class="dropdown">
                        <input type="hidden" class="close_li_val" value="Share">
                      <li class="test_li_click"><a href="#">Shared Accommodation</a></li>
                      <li class="test_li_click"><a href="#">Students Accommodation</a></li>
                      <li class="test_li_click"><a href="#">Commercial Share</a></li>
                      
                    </ul>
                  </li> 
                  <li class="has-children">
                    <a style="color:red !important;font-size:18px;" href="#"><b>NEEDED</b></a>
                    <ul class="dropdown">
                        <input type="hidden" class="close_li_val" value="Needed">
                      <li class="test_li_click"><a href="#">All properties</a></li>
                      <li class="test_li_click"><a href="#">House</a></li>
                      <li class="test_li_click"><a href="#">Apartment</a></li>
                      <li class="test_li_click"><a href="#">Students Accomodation</a></li>
                      <li class="test_li_click"><a href="#">Holiday Homes</a></li>
                      <li class="test_li_click"><a href="#">Short Term</a></li>
                    </ul>
                  </li> 
                  <li class="has-children">
                    <a style="color:red !important;font-size:18px;" href="#"><b>COMMERCIAL</b></a>
                    <ul class="dropdown">
                        <input type="hidden" class="close_li_val" value="Commercial">
                      <li class="test_li_click"><a href="#">For Sale</a></li>
                      <li class="test_li_click"><a href="#">To Rent</a></li>
                      <li class="test_li_click"><a href="#">Farm Land</a></li>
                      <li class="test_li_click"><a href="#">Commercial Land</a></li>
                    </ul>
                  </li> 
                  <li class="has-children">
                    <a style="color:red !important;font-size:18px;" href="#"><b>PARKING</b></a>
                    <ul class="dropdown">
                        <input type="hidden" class="close_li_val" value="Parking">
                      <li class="test_li_click"><a href="#">For Sell</a></li>
                      <li class="test_li_click"><a href="#">To Rent</a></li>
                      <li class="test_li_click"><a href="#">To Share</a></li>
                    </ul>
                  </li> 
                </ul>
              </li>
            </ul>

            <a href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar" >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>          
       @endif
@yield('content')

<div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="widget">
          <h3>Contact</h3>
          <address style="color:#a1a1a1 !important;">Hillside,
Garrymore,
Ballinagh,
Cavan,Ireland
H12 X935</address>
          <ul class="list-unstyled links">
            <li><a href="tel://11234567890">0858544057</a></li>
            <li><a href="tel://11234567890">0899488580</a></li>
            <li>
              <a href="mailto:info@mydomain.com">info@homeireland.ie</a>
            </li>
          </ul>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="widget">
          <h3>Sources</h3>
          <ul class="list-unstyled float-start links">
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Cookie policy</a></li>
            <li><a href="#">Consent choices</a></li>
            <li><a href="#">Equality</a></li>
            <li><a href="#">Data requests</a></li>
            <li><a href="#">Remembering Carolan</a></li>

          </ul>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4 col-sm-4 hideonmob">
        <div class="widget">
          <h3>Quick Links</h3>
          <ul class="list-unstyled links">
            <li><a href="{{url('/about')}}">About us</a></li>
            <li><a href="{{url('/contact-us')}}">Contact us</a></li>
             <li><a href="#">Advertising</a></li>
            <li><a href="#">Help centre</a></li>           
          </ul>

          <ul class="list-unstyled social">
            <li>
              <a href="#" class="soc_fot"><span class="icon-instagram"></span></a>
            </li>
            <li>
              <a href="#" class="soc_fot"><span class="icon-twitter"></span></a>
            </li>
            <li>
              <a href="#" class="soc_fot"><span class="icon-facebook"></span></a>
            </li>
          </ul>
        </div>
        <!-- /.widget -->
      </div>
      <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
                  <form method="POST" action="{{url('/filter-properties')}}" id="filter-properti">
                    @csrf
                    <input type="hidden" id="prop_sub_cats" name="prop_sub_cat">
                    <input type="hidden" id="prop_sub_cats_org_name" name="prop_sub_cat_org_name">
                  </form>
    <div class="row mt-5">
      <div class="col-12 text-center">
            <!-- 
              **==========
              NOTE: 
              Please don't remove this copyright link unless you buy the license here https://untree.co/license/  
              **==========
            -->

            <p>
              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script>
              . All Rights Reserved. &mdash; Designed with love by
              <a href="https://nubicus.in" target="_blank">Nubicus</a>
              <!-- License information: https://untree.co/license/ -->
            </p>

          </div>
        </div>
      </div>
      <!-- /.container -->
    </div>
    <!-- /.site-footer -->

    <!-- Preloader -->
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
            $('.test_li_click').click(function()
      {
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


    </script>

    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>

    <script src="{{asset('website/js/jquer.js')}}"></script>
    <script src="{{asset('website/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('website/js/tiny-slider.js')}}"></script>
    <script src="{{asset('website/js/aos.js')}}"></script>
    <script src="{{asset('website/js/navbar.js')}}"></script>
    <script src="{{asset('website/js/counter.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
  </body>
</html>
