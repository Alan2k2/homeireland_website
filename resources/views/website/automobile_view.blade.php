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

    <nav class="site-nav" style="height:70px;">
      <div class="">
        <div class="menu-bg-wrap">
          <div class="site-navigation">
            <a href="{{url('/')}}" class="logo mt-3 ms-2 float-start"> <img src="{{asset('website/images/homeireland log06.svg')}}" width="70%"></a>

            <ul
              class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end mt-3 me-2">
              <li><a href="{{url('/about')}}">ABOUT</a></li>
              <li><a href="{{url('/contact-us')}}">CONTACT</a></li>
              <li><a href="{{url('/register')}}">ADVERTISE</a></li>
              <li><a class="nav-link bg-light text-danger mb-3" href="{{url('/login')}}"  style="">
             Log-In
          </a></li>
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

    <!--<div-->
    <!--  class="hero page-inner overlay"-->
    <!--  style="background-image: url('website/images/hero_bg_3.jpg')"-->
    <!-->-->
    <!--  <div class="container">-->
    <!--    <div class="row justify-content-center align-items-center">-->
    <!--      <div class="col-lg-9 text-center mt-5">-->
    <!--        <h1 class="heading" data-aos="fade-up">-->
    <!--          {{$automobile->type}} for {{$automobile->transaction_type}}-->
    <!--        </h1>-->

    <!--        <nav-->
    <!--          aria-label="breadcrumb"-->
    <!--          data-aos="fade-up"-->
    <!--          data-aos-delay="200">-->
    <!--          <ol class="breadcrumb text-center justify-content-center">-->
    <!--            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>-->
    <!--            <li class="breadcrumb-item">-->
    <!--              <a href="{{url('/automobiles')}}">Automobiles</a>-->
    <!--            </li>-->
    <!--            <li-->
    <!--              class="breadcrumb-item active text-white-50"-->
    <!--              aria-current="page">-->
    <!--              {{$automobile->type}}-->
    <!--            </li>-->
    <!--          </ol>-->
    <!--        </nav>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->

    <!--<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 section">-->
    <!--  <div class="container">-->
    <!--    <div class="row justify-content-between">-->
          
    <!--      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">-->
    <!--        <div class="main-image gallery-bg" id="mainImage">-->
              <!-- Large image will be displayed here -->
    <!--        </div>-->
    <!--        <div class="thumbnail-container" id="thumbnailContainer">-->
              <!-- Small thumbnail images will be displayed here -->
    <!--          @if(isset($automobile->image))-->
    <!--          <input type="hidden" id="main_image_display" value="{{$automobile->image}}" name="">-->
    <!--          <img src="{{asset('uploads/automobiles/'.$automobile->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/automobiles/{{$automobile->image}}')">-->
    <!--          @endif-->

    <!--          @foreach($prop_images as $img)-->
    <!--          <img src="{{asset('uploads/automobiles/'.$img->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/automobiles/{{$img->image}}')">-->
    <!--          @endforeach-->

              <!-- Add more thumbnails as needed -->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 parentme">-->
    <!--        <input type="hidden" class="findme" value="{{$automobile->id}}" name="">-->
    <!--        <p class="badge font-nunito semi-bold text-uppercase"></p>-->
            
    <!--        @if($chk == true)-->
    <!--        <span style="" class="save_property">-->
    <!--         <img src="{{asset('panel/images/save.png')}}" style="display:none;" class="save_image" height="50px" width="50px"/> -->
    <!--         <img src="{{asset('panel/images/saved.png')}}"  class="saved_image" height="50px" width="50px"/> -->
    <!--        </span>-->
    <!--        @else-->
    <!--        <span style="" class="save_property">-->
    <!--          <img src="{{asset('panel/images/save.png')}}" class="save_image" height="50px" width="50px" /> -->
    <!--          <img src="{{asset('panel/images/saved.png')}}" style="display:none;" class="saved_image" height="50px" width="50px"/> -->
    <!--        </span>            -->
    <!--        @endif-->
    <!--        <h2 class="heading text-primary">{{$automobile->full_address}}</h2>-->
            <!--<p class="meta">{{$automobile->street}}, {{$automobile->area}}, {{$automobile->province}}</p>-->
    <!--        <p class="text-black-50">-->
    <!--          {{$automobile->description}}-->
    <!--        </p>-->

            
    <!--        <div class="mt-4"><span class="meta"><i class="fa fa-bed"></i>&nbsp;&nbsp; Odometer : {{$automobile->kilometer_driven}} </span> <span class="meta px-3"><i class="fa fa-shower"></i>&nbsp;&nbsp; Mileage : {{$automobile->mileage}} </span> </div>-->

    <!--        <div class="row mt-3 mx-0 meta">-->
    <!--            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p>Property ID <span class="utltydetails">P941009</span> </p> </div>-->
    <!--            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p>Posted On <span class="utltydetails">{{$automobile->created_at->format('Y-m-d');}}</span> </p> </div>-->
    <!--            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p>Odometer <span class="utltydetails">{{$automobile->built_area}} {{$automobile->kilometer_driven}} </span> </p> </div>-->
    <!--            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p>Views <br><span class="utltydetails">{{$automobile->view_count}}</span> </p> </div>-->
    <!--        </div>-->
    <!--        <div class="row mt-3 meta d-flex align-items-center">-->
    <!--            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><a class="btn btn-dark py-2 px-3 view_contact"> View Contact Details </a></div>-->
    <!--            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 align-items-center pt-2"><span class="meta"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;</span> <span class="meta px-3 chat-icon"><i class="fa fa-comment fa-lg"></i></span> </div>-->
                
    <!--        </div>-->
    
    <!--              <div class="col-md-12">-->
    <!--                  <h3>Features</h3>-->
    <!--                <div class="row">-->
                       
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Fuel : {{$automobile->fuel}}</p>-->
    <!--                    </div>-->
    <!--                     <div class="col-md-3">-->
    <!--                       <p>Km Driven : {{$automobile->kilometer_driven}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Drive Mode : {{$automobile->drive_mode}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Year Manufactured : {{$automobile->year_manufactured}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Color : {{$automobile->color}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Engine Size : {{$automobile->engine_size}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Body Type : {{$automobile->body_type}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Owners : {{$automobile->owners}}</p>-->
    <!--                    </div>-->
    <!--                    <div class="col-md-3">-->
    <!--                       <p>Mileage : {{$automobile->mileage}}</p>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--             </div>-->
            

    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <div class=" viewPage row " >
          <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
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
            <div class="parentme">
            <input type="hidden" class="findme" value="{{$automobile->id}}" name="">
            <p class="badge font-nunito semi-bold text-uppercase"></p>
            
            @if($chk == true)
            <span style="" class="save_property">
              <img src="{{asset('panel/images/save.png')}}" style="display:none;" class="save_image" height="50px" width="50px" /> 
              <img src="{{asset('panel/images/saved.png')}}"  class="saved_image" height="50px" width="50px"/> 
            </span>
            @else
            <!--<span style="" class="save_property">-->
            <!--  <img src="{{asset('panel/images/save.png')}}" class="save_image" height="50px" width="50px" /> -->
            <!--  <img src="{{asset('panel/images/saved.png')}}" style="display:none;" class="saved_image" height="50px" width="50px"/> -->
            <!--</span>            -->
            @endif
            <div class="d-flex justify-content-between">
                <h4 class="heading " style="color:#d3111a;">{{$automobile->category}} {{$automobile->name}}</h4>
                  <h4 style="color:#d3111a;">{{$automobile->price}} <b>€ </b></h4>
            </div>
            <!--<p class="meta"><i class="fa-solid fa-location-dot"></i> {{isset($property->street)?$property->street.',':''}}{{isset($property->area)?$property->area.',':''}}{{isset($property->province)?$property->province:''}}</p>-->
            <!--<p class="text-black-50">-->
            <!--</p>-->
             <!--@if($amenitiescount > 0)-->
             <!--       <div class="col-md-12" style="">-->
             <!--         <h5>Amenities</h5>-->
             <!--         <div class="row">-->
             <!--           @foreach($amenities as $dat)-->
             <!--           <div class="col-md-3">-->
             <!--               <div style="padding:10px;height:40px; width:150px;margin-top:10px;align-items:center;background-color:#d3111a;color:white;">-->
             <!--              <p style="display:flex;justify-content:center;">{{$dat->amenity_name}}</p></div>-->
             <!--           </div>-->
                        <!--@endforeach-->
                        
                      </div>
                    
            @endif
              <!--<br>-->
              <!--</div>-->

            

            <div class="row mt-3 mx-0 meta">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3  border"> <p><b>Posted On</b> <br><span class="utltydetails">{{$automobile->created_at->format('Y-m-d');}}</span> </p> </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3  border"> <p>Odometer <span class="utltydetails">{{$automobile->built_area}} {{$automobile->kilometer_driven}} </span> </p> </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 border"> <p><b>Views</b> <br><span class="utltydetails">{{$automobile->view_count}}</span> </p> </div>
               <div class="mt-3">  <p class="text-black-50 ">
              {{$automobile->description}}
            </p></div></div>

<!--<div class="row mt-3 meta d-flex align-items-center">-->
<!--                <div class="btnBox">-->
<!--          <div class="item-properties">-->
<!--             <a href="{{url('/all-properties')}}"><span class=""> Properties</span></a>-->
<!--          </div></div>-->

<!--            </div>-->
            <div class=" mt-3 meta d-flex  justify-content-between" style="display:flex;justify-content:center;align-items:center;">
               
                <div class="" style="height:60px;width:160px;display:flex;justify-content:center;align-items:center;background-color:black;cursor:pointer;"><a class=" text-light py-2 px-3 view_contact"> Contact Details</a></div>
                <!--<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 align-items-center pt-2">-->
                  <!--<span class="meta"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;</span> -->
                  
                  <!--<span class="meta px-3 chat-icon"><i class="fa fa-comment fa-lg"></i></span> -->

                <!--</div>-->
                
            </div>
            </div>
          
           
                    </div>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
    <form method="post" action="">
        @csrf
                        <div class="card-pro" style=" background-color: #D3D3D3;border-radius:10px;padding:16px;">

                            <h5 class="text-center">Quick Enquiry</h5>  
                            <input type="hidden" value="{{$automobile->unique_id}}" id="quick-uniq-id">
                            <input type="text" class="form-control" id="quick-name" placeholder="Name" required > <br>
                            <input type="number" class="form-control" id="quick-phone" placeholder="Phone"  required  > <br>
                            <input type="email" class="form-control" id="quick-email" placeholder="Email"  required  > <br>
                            <input type="number" class="form-control" id="quick-adults" placeholder="No:of Adults"> <br>
                            <label>Pets[Optional]</label>
                            <label class="custom-radio">
                                <input type="radio" name="pets" value="yes" class="quick-pets"/>
                                <span class="checkmark"></span>
                               Yes
                            </label>
                            <label class="custom-radio">
                                <input type="radio" name="pets" value="no" class="quick-pets"/>
                                <span class="checkmark"></span>
                                No
                            </label>
                        <br><br> 
                        <label>Move In Date[Optional]</label>
                         <input type="date" placeholder="Moving Date" class="form-control" id="quick-date"><br>
                         <label>Message[Optional]</label>
                         <textarea name="message" class="form-control" rows="4" id="quick-message"></textarea>
                        <button  type="submit"class="form-control text-white mt-2 " id="quick-btn" style="background-color:#d3111a;">Send</button>
                                                                                
                    </div>
                    </form>
                       
                    
                    </div>
    </div>
    <div class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="widget">
             <img src="{{asset('website/images/homeireland log06.svg')}}" width="70%"/>
             <p class="mt-2" style="color:#fff;text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius  Duis aute irure dolor in reprehenderit in voluptate velit esse cillu.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eius  Duis aute irure dolor in reprehenderit</p>
 <ul class="list-unstyled social d-flex justify-content-start">
            <li>
              <a href="#" class="soc_fot ms-2"><i class="fa-brands fa-instagram"></i></a>
            </li>
            <li>
              <a href="#" class="soc_fot ms-5"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
              <a href="#" class="soc_fot ms-5"><i class="fa-brands fa-x-twitter"></i></a>
            </li>
          </ul>
<!--          <h3>Contact</h3>-->
<!--          <address style="color:#a1a1a1 !important;">Hillside,-->
<!--Garrymore,-->
<!--Ballinagh,-->
<!--Cavan,Ireland-->
<!--H12 X935</address>-->
<!--          <ul class="list-unstyled links">-->
<!--            <li><a href="tel://11234567890">0858544057</a></li>-->
<!--            <li><a href="tel://11234567890">0899488580</a></li>-->
<!--            <li>-->
<!--              <a href="mailto:info@mydomain.com">info@homeireland.ie</a>-->
<!--            </li>-->
<!--          </ul>-->
        </div>
        <!-- /.widget -->
      </div>
      <!-- /.col-lg-4 -->
<!--      <div class="col-lg-4 col-md-4 col-sm-4">-->
<!--        <div class="widget">-->
<!--<h3>Contact</h3>-->
<!--          <address style="color:#a1a1a1 !important;">Hillside,-->
<!--Garrymore,-->
<!--Ballinagh,-->
<!--Cavan,Ireland-->
<!--H12 X935</address>-->
<!--          <ul class="list-unstyled links">-->
<!--            <li><a href="tel://11234567890">0858544057</a></li>-->
<!--            <li><a href="tel://11234567890">0899488580</a></li>-->
<!--            <li>-->
<!--              <a href="mailto:info@mydomain.com">info@homeireland.ie</a>-->
<!--            </li>-->
<!--          </ul>-->
<!--        </div>-->
         <!--/.widget -->
<!--      </div>-->
      <!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4 col-sm-4 hideonmob mt-3">
        <div class="widget  text-center">
          <h3>Quick Links</h3>
          <div class="d-flex justify-content-between">
          <ul class="list-unstyled links text-center">
            <li > <a href="{{url('/about')}}"> About us</a></li>
            <li><a href="{{url('/contact-us')}}"> Contact us</a></li>
             <li><a href="#"> Advertising</a></li>
            <li><a href="#"> Help centre</a></li>           
          </ul>
          <ul class="list-unstyled links text-center">
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Equality</a></li>
            <li><a href="#">Cookie policy</a></li>
            <!--<li><a href="#">Consent choices</a></li>-->
            <li><a href="#">Terms of use</a></li>         
          </ul>
          </div>

          <!--<ul class="list-unstyled social">-->
          <!--  <li>-->
          <!--    <a href="#" class="soc_fot"><span class="icon-instagram"></span></a>-->
          <!--  </li>-->
          <!--  <li>-->
          <!--    <a href="#" class="soc_fot"><span class="icon-twitter"></span></a>-->
          <!--  </li>-->
          <!--  <li>-->
          <!--    <a href="#" class="soc_fot"><span class="icon-facebook"></span></a>-->
          <!--  </li>-->
          <!--</ul>-->
        </div>
        <!-- /.widget -->
      </div>
      <!-- /.col-lg-4 -->
      <!-- /.col-lg-4 -->
      <div class="col-lg-4 col-md-4 col-sm-4 mt-3 ">
        <div class="widget ">
<h3 class="text-center">Contact</h3>
          <address style="color:#fff !important;">Hillside,
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
         <!--/.widget -->
      </div>
      <!-- /.col-lg-4 -->
    </div>
    
    <!-- /.row -->
                  <form method="GET" action="{{url('/filter-properties')}}" id="filter-properti">
                    @csrf
                    <input type="hidden" id="prop_sub_cats" name="prop_sub_cat">
                    <input type="hidden" id="prop_sub_cats_org_name" name="prop_sub_cat_org_name">
                    <input type="hidden" name="city" value="{{isset($string)?$string:''}}" id="addressonmainInput">
                  </form>
    <div class="row mt-5">
        <hr style="color:#c8c8c8">
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

    <script type="text/javascript">
      function changeImage(imageUrl) {
   
      // Change the background image of the main image container
      document.getElementById('mainImage').style.backgroundImage = `url('${imageUrl}')`;
      }
      document.addEventListener("DOMContentLoaded", function () {
       
        var x = document.getElementById("main_image_display").value;
      // Set an initial image on page load
      changeImage("/uploads/automobiles/"+ x +"");
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
