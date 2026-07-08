<!-- /*
* Template Name: Property
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!DOCTYPE html>
@php
var_dump($automobile);
@endphp
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

    <link rel="stylesheet" href="{{asset('website/css/tiny-slider.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/aos.css')}}" />
    <link rel="stylesheet" href="{{asset('website/css/style.css')}}" />
   <style type="text/css">
     .save_property{
      cursor: pointer;
     }
   </style>
    <title>
      detail page
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

    <nav class="site-nav">
      <div class="container">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="index.html" class="logo m-0 float-start"> <img src="./images/homeirelandLogo.png" width="10%"></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li class="has-children">
                <a href="{{url('/all-properties')}}">Properties</a>
                <ul class="dropdown">
                  <li><a href="#">Buy Property</a></li>
                  <li><a href="#">Sell Property</a></li>
                  <li class="has-children">
                    <a href="#">Dropdown</a>
                    <ul class="dropdown">
                      <li><a href="#">Sub Menu One</a></li>
                      <li><a href="#">Sub Menu Two</a></li>
                      <li><a href="#">Sub Menu Three</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="services.html">Services</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>

            <a
              href="#"
              class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
              data-toggle="collapse"
              data-target="#main-navbar"
            >
              <span></span>
            </a>
          </div>
        </div>
      </div>
    </nav>

    <div
      class="hero page-inner overlay"
      style="background-image: url('website/images/hero_bg_3.jpg')"
    >
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              {{$automobile->type}} for {{$automobile->transaction_type}}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="properties.html">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page">
                  {{$automobile->address}}
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">
      <div class="container">
        <div class="row justify-content-between">
          
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="main-image gallery-bg" id="mainImage">
              <!-- Large image will be displayed here -->
            </div>
            <div class="thumbnail-container" id="thumbnailContainer">
              <!-- Small thumbnail images will be displayed here -->
              @if(isset($automobile->image))
              <input type="hidden" id="main_image_display" value="{{$automobile->image}}" name="">
              <img src="{{asset('uploads/automobiles/'.$automobile->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/automobiles/{{$automobile->image}}')">
              @endif

              @foreach($prop_images as $img)
              <img src="{{asset('uploads/automobiles/'.$img->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/automobiles/{{$img->image}}')">
              @endforeach

              <!-- Add more thumbnails as needed -->
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 parentme">
            <input type="hidden" class="findme" value="{{$automobile->id}}" name="">
            <p class="badge font-nunito semi-bold text-uppercase"></p>
            
            @if($chk == true)
            <span style="" class="save_property">
             <img src="{{asset('panel/images/save.png')}}" style="display:none;" class="save_image" height="50px" width="50px"/> 
             <img src="{{asset('panel/images/saved.png')}}"  class="saved_image" height="50px" width="50px"/> 
            </span>
            @else
            <span style="" class="save_property">
              <img src="{{asset('panel/images/save.png')}}" class="save_image" height="50px" width="50px" /> 
              <img src="{{asset('panel/images/saved.png')}}" style="display:none;" class="saved_image" height="50px" width="50px"/> 
            </span>            
            @endif
            <h2 class="heading text-primary">{{$automobile->address}}</h2>
            <p class="meta">{{$automobile->street}}, {{$automobile->area}}, {{$automobile->province}}</p>
            <p class="text-black-50">
              {{$automobile->description}}
            </p>

            
            <div class="mt-4"><span class="meta"><i class="fa fa-bed"></i>&nbsp;&nbsp; Odometer : {{$automobile->kilometer_driven}} </span> <span class="meta px-3"><i class="fa fa-shower"></i>&nbsp;&nbsp; Mileage : {{$automobile->mileage}} </span> </div>

            <div class="row mt-3 mx-0 meta">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p>Property ID <span class="utltydetails">P941009</span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p>Posted On <span class="utltydetails">{{$automobile->created_at->format('Y-m-d');}}</span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p>Odometer <span class="utltydetails">{{$automobile->built_area}} {{$automobile->kilometer_driven}} </span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p>Views <br><span class="utltydetails">{{$automobile->view_count}}</span> </p> </div>
            </div>
            <div class="row mt-3 meta d-flex align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><a href="#" class="btn btn-dark py-2 px-3"> View Contact Details </a></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 align-items-center pt-2"><span class="meta"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;</span> <span class="meta px-3 chat-icon"><i class="fa fa-comment fa-lg"></i></span> </div>
                
            </div>
            <div class="open-chat">
              <input type="hidden" id="prop-id-main" value="{{$automobile->id}}" name="">
                <div class="chat-header">
                  <span class="remove-chat">x</span>      
                </div>

                 <div class="chat-content">
                 <div class="chat-div chat-div-right">
                     <p class="chat-text">Hei,Here's we to help you</p>
                 </div> 

                 <div class="for-jq">
                   
                 </div>               
                 <input type="text" class="chat-input"><button type="button" class="chat-button">Send</button>
                 </div>
            </div>

          </div>
            @if($amenitiescount > 0)
                  <div class="col-md-12">
                      <h3>Features</h3>
                    <div class="row">
                        @foreach($amenities as $dat)
                        <div class="col-md-3">
                           <p>->{{$dat->amenity_name}}</p>
                        </div>
                        @endforeach                      
                    </div>
                 </div>
            @endif

        </div>
      </div>
    </div>

    <div class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="widget">
              <h3>Contact</h3>
              <address>43 Raymouth Rd. Baltemoer, London 3910</address>
              <ul class="list-unstyled links">
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
                <li>
                  <a href="mailto:info@mydomain.com">info@mydomain.com</a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Sources</h3>
              <ul class="list-unstyled float-start links">
                <li><a href="#">About us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Mission</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Privacy</a></li>
              </ul>
              <ul class="list-unstyled float-start links">
                <li><a href="#">Partners</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Creative</a></li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <div class="widget">
              <h3>Links</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Our Vision</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>

              <ul class="list-unstyled social">
                <li>
                  <a href="#"><span class="icon-instagram"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-twitter"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-facebook"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-linkedin"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-pinterest"></span></a>
                </li>
                <li>
                  <a href="#"><span class="icon-dribbble"></span></a>
                </li>
              </ul>
            </div>
            <!-- /.widget -->
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->

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
              <a href="https://bethelsoft.com">Bethelsoft Technologies</a>
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

    <script type="text/javascript">
      function changeImage(imageUrl) {
      // Change the background image of the main image container
      document.getElementById('mainImage').style.backgroundImage = `url('${imageUrl}')`;
      }

      document.addEventListener("DOMContentLoaded", function () {
       
        var x = document.getElementById("main_image_display").value;
      // Set an initial image on page load
      changeImage("uploads/automobiles/"+ x +"");
      });

    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript">
              $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
       });
      $('.save_property').click(function()
        {
          $('.save_image').toggle();
          $('.saved_image').toggle();
          var property_id = $(this).closest('.parentme').find('.findme').val();
                       $.ajax({
                url: 'website/save-property',
                method: 'POST',
                data:{property_id:property_id}, 
                success: function(data) 
                {
                    $('#result').html('<pre>' + JSON.stringify(data, null, 2) + '</pre>');
                },
                error: function(xhr, status, error) 
                {
                    console.error(xhr.responseText);
                }
            });         
        });

        $('.chat-icon').click(function()
        {
           $('.open-chat').show(); 
           $('.open-chat').addClass('opened-chat'); 
 
        });
        $('.remove-chat').click(function()
        {
           $('.open-chat').hide(); 
           $('.open-chat').removeClass('opened-chat'); 
 
        });
        $('.chat-button').click(function()
        {
         var property_id =$('#prop-id-main').val();
         var message = $('.chat-input').val();
         var from = 'web';
         
          $('.for-jq').append('<div class="chat-div chat-div-left"><p class="chat-text">'+ message +'</p></div>');
          $('.chat-input').val('');
              $.ajax({
                url: '/addchat',
                method: 'GET',
                data:{property_id:property_id,message:message,from:from}, 
                success: function(data) 
                {

                },
                error: function(xhr, status, error) 
                {

                }
            });
        });

    </script>
    <script src="https://kit.fontawesome.com/7ae76ea903.js" crossorigin="anonymous"></script>

    <script src="{{asset('website/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('website/js/tiny-slider.js')}}"></script>
    <script src="{{asset('website/js/aos.js')}}"></script>
    <script src="{{asset('website/js/navbar.js')}}"></script>
    <script src="{{asset('website/js/counter.js')}}"></script>
    <script src="{{asset('website/js/custom.js')}}"></script>
  </body>
</html>
