@extends('layouts.website.main')
@section('content')
<div class="preloader">
  <div class="spinner">
  </div>
</div>
<style>
#midadd
{
   margin-top:20%; 
}
#mob_enq_form
    {
        display:none
    }
    @media (max-width: 765px) {
    #desk_enq_form
    {
        display:none;
        
    }
    #mob_enq_form
    {
        display:block
    }
    }
  i {
    color: red;
  }

  .no-bullets {
    list-style-type: none;
  }
  
   .enquirybtn{
        margin-left:25%;
    }

  #m {
    margin: 0;
    padding: 0;
    width: 90%;
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .home-image-container {
    height: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
  }

  .home-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .form-container {
    background-color: #d3111a;
    /* Light grey background */
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /*float:left;*/
  }

  main {
    padding: 2px;
    padding-bottom: 10px;
    margin-top:8%
  }

  .desc_content {
    margin-left: 10%;
  }

  .property-ad-img {
    height: 350px;
    width: 100%;
  }
  
  /* media query for property view page  */
  @media (max-width: 500px) {
    .home-image-container
    {
        border-radius: 5px 5px;
    }
    .property-item{
      border-radius: 10px;
    }
   
   .form-container{
    margin: 5px;
   }
}

  @media (max-width: 767px) {
   #images_enquiry{
      
          margin-top:80px;
      }
  }
  breadscrup a:hover
  {
      color:blue!important;
      font-size:15px !important; 
  }
  
    @media(min-width:1200px){
    .contactcmpny{
        margin-bottom:10px;
        padding-left:0px;
    }
    ..form-container1{
         margin-left:50px!important;
    }
    .form-container{
        margin-left:15px;
    }
    .img-responsive{
        margin-left:15%;
    }
    .img-responsive1{
        margin-left:0%!important;
    }
}


    .form-container1 {
    background-color: #d3111a;
    /* Light grey background */
    padding: 20px;
   
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /*float:left;*/
  }
 
  }
 .btncontact:hover{
      background-color: black!important;
 }
 .form-group1{
     margin-bottom:5px!important;
 }
 .contactbtn{
     border: 2px solid white!important;
 }
</style>
<!--======================MAIN STARTS===================-->
<main style="">
  <section id="images_enquiry">

    <head class="container">
        <!--<div class="row container">-->
        <!--  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">-->
        <!--      <breadscrup class="breadscrump">-->
        <!--     <a href="{{url('/')}}">Home</a>  > <span style="color:red">Automobiles</span>-->
        <!--     </breadscrup>-->
        <!--      </div>-->
        <!--      </div>-->
      <div class="row">
          
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <center>
           <h3 style="color:#d3111a;font-size:45px"><b>
             
              <span style="color:#d3111a;font-size:45px;margin-left:5%;margin-top:10%">
                <i class="fa fa-car" aria-hidden="true"></i>
              </span>
              Automobiles
             
            </b></h3><br><br>

        
          </center>
        </div>
      </div>
    </head>
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
         <section id="images_enquiry">
    <div class="container">
        <div class="row">
            <!--<h1 class="text-center text-danger">-->
            <!--    <strong>-->
            <!--        <i class="fa-solid fa-house fa-lg"></i>&nbsp;Home-->
            <!--    </strong>-->
            <!--</h1>-->
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container mt-5">
                    <div class="row">
                        <!-- Left Side: Property Details -->
                        <div class="col-md-10 pr-2">
                            <p class="text-start h3">
                                <span class="h2">Home</span>&nbsp;&nbsp;<i class="fa-solid fa-arrow-right fa-lg" style="color: #000000;"></i>&nbsp;&nbsp;<span class="h2">Automobiles</span>
                            </p>
                        </div>
                        <!-- Right Side: Share Button -->
                        <div class="col-md-2 text-end">
    @php
    $link = request()->fullUrl();
    $whatsAppLink = "https://wa.me/?text=" . $link;
    $facebookShare = "https://www.facebook.com/sharer/sharer.php?u=$link";
    $twitterShare = "https://twitter.com/intent/tweet?url=$link";
    $linkedinShare = "https://www.linkedin.com/sharing/share-offsite/?url=$link";
    @endphp

    <!-- Share Button -->
    <a type="button" id="shareButton" class="text-success h2">
    <i class="fa-solid fa-share-nodes fa-2xl" style="color: #000000;"></i>
    </a>
    &nbsp;&nbsp;&nbsp;

    <!-- Heart Button -->
    <!-- <a type="button" class="text-success h2" id="heartButton">
        <i class="fa-regular fa-heart fa-2xl" style="color: #ff0026;" id="heartIcon"></i>
    </a> -->
</div>

<!-- Custom Share Modal -->
<div id="customModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h5>Share This Page</h5>
            <span class="close">&times;</span>
        </div>
        
        <div class="modal-body">
            <ul class="list-unstyled">
                <li>
                    <a class="d-flex align-items-center" href="{{ $facebookShare }}" target="_blank">
                        <i class="fa-brands fa-facebook fa-2xl" style="color: #005eff;"></i>&nbsp;&nbsp;
                        <span class="ms-2 h4">Facebook</span>
                    </a>
                </li>
                <br>
                <li>
                    <a class="d-flex align-items-center" href="{{ $twitterShare }}" target="_blank">
                        <i class="fa-brands fa-x-twitter fa-2xl" style="color: #000000;"></i>&nbsp;&nbsp;
                        <span class="ms-2 h4">Twitter</span>
                    </a>
                </li>
                <br>
                <li>
                    <a class="d-flex align-items-center" href="{{ $linkedinShare }}" target="_blank">
                        <i class="fa-brands fa-linkedin-in fa-2xl" style="color: #0e6590;"></i>&nbsp;&nbsp;
                        <span class="ms-2 h4">LinkedIn</span>
                    </a>
                </li>
                <br>
                <li>
                    <a class="d-flex align-items-center" href="{{ $whatsAppLink }}" target="_blank">
                        <i class="fa-brands fa-whatsapp fa-2xl" style="color: #00ad54;"></i>&nbsp;&nbsp;
                        <span class="ms-2 h4">WhatsApp</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Custom JavaScript -->
<script>
    // Modal elements
    const modal = document.getElementById('customModal');
    const shareButton = document.getElementById('shareButton');
    const closeButton = document.querySelector('.modal .close');

    // Open the modal when share button is clicked
    shareButton.addEventListener('click', function () {
        modal.style.display = 'block';
    });

    // Close the modal when the close button (×) is clicked
    closeButton.addEventListener('click', function () {
        modal.style.display = 'none';
    });

    // Close the modal if the user clicks outside of it
    window.addEventListener('click', function (event) {
        if (event.target == modal) {
            modal.style.display = 'none';
        }
    });

    // Toggle Heart Icon
    document.getElementById('heartButton').addEventListener('click', function () {
        const heartIcon = document.getElementById('heartIcon');
        if (heartIcon.classList.contains('fa-regular')) {
            heartIcon.classList.remove('fa-regular');
            heartIcon.classList.add('fa-solid');
        } else {
            heartIcon.classList.remove('fa-solid');
            heartIcon.classList.add('fa-regular');
        }
    });
</script>

<!-- Custom CSS -->
<style>
    /* Modal background */
    .modal {
        display: none; /* Hidden by default */
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4); /* Black background with opacity */
        padding-top: 60px;
    }

    /* Modal content */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        max-width: 500px;
        border-radius: 10px;
    }

    /* Modal header */
    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    /* Close button */
    .close {
        color: #aaa;
        font-size: 28px;
        font-weight: bold;
        text-align: right
        cursor: pointer;
        display: none;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    /* Body of the modal */
    .modal-body {
        padding: 10px 0;
    }
</style>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!----------------head end------------>
    <div class="row" style="margin-top:2%;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <center>
          <style>

          </style>
          </style>
          @if(isset($data->main_image))
          <div class="home-image-container" id="m">
            <img src="{{asset('uploads/automobiles/'.$data->main_image)}}" id="main_image" alt="Home Image"
              class="home-image">
          </div>

          @else
          <img src="{{asset('website/images/caravatar.png')}}" id="imagePreview" alt="Image" height="400px"
            width="600px" />
          @endif
        </center>
      </div>
      <!--2-->
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
        <style>
          /* styles.css */

          /* General reset and box-sizing border box */
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
          }

          /* Style for the image container (aside) */
          aside {
            display: inline-block;
            /* Keep the aside inline */
            padding: 10px;
            /* Add some padding around the image */
          }

          /* Style for the image */
          /*j1*/
          .highlight-image {
            display: block;
            max-width: 100%;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 1px solid black;
          }

          /* Hover effect */
          .highlight-image:hover {
            border: 2px solid red;
            /* Red border */
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
            /* Red shadow */
          }

          .view:hover {
            width: 100%;
            height: auto;
            padding: 10px;
            background-color: #dc3545;
            border: 1px solid #dc3545;
            border-raius: 5px;
            color: black
          }

          .slider-container {
            overflow: hidden;
          }

          .slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
          }

          .slide {
            /*flex: 0 0 33.33%;*/
            /* Adjust according to your need */
          }
/*changed the media query width from 600 to 700 px*/
          
        @media (min-width: 700px)  {
            .highlight-image
          {
              height:170px !important;
              width:170px !important;
          }
          #main_image
          {
              width: 100%;
             height:510px !important;  
          }
        }
        
        /*media query for mobile view added on 19/07/2024 */
        
       /* Media query for mobile view of the sub images */
@media (max-width: 700px) {
  .item-properties {
    border-radius: 25px;
  }
  

  .slides {
    display:flex;
    justify-content:space-evenly;
    
  }

  .highlight-image {
      height:100px !important;
    width:300px;
    object-fit: cover;
  }
}
        
 @media (max-width: 768px) {
    #midadd {
         margin-top:0%;
         display:flex;
        justify-content: center;
        text-align: center; 
    }

    .ad-image {
        max-width: 100%; 
    }
}

@media(min-width:1200px){
    .contactcmpny{
        margin-bottom:10px;
        padding-left:0px;
    }
}
        </style>
        <!--<div class="slider-container">-->
        <!--  <div class="slider">-->
        <!--    <div class="slides" style="">-->

        <!--      @foreach($prop_images as $ads)-->
        <!--      <div class="slide">-->
        <!--          <img src="{{asset('uploads/automobiles/'.$ads->image)}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="highlight-image">-->
        <!--      </div>-->
        <!--      @endforeach-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        
        <div class="slider-container">
            <div class="slider">
                 <div class="slides" style="">
                     @foreach($prop_images as $ads)
                <div class="slide">
                     <img src="{{asset('uploads/automobiles/'.$ads->image)}}" alt="Image 1" style="margin:auto" onclick="changeMainImage('uploads/automobiles/{{$ads->image}}')" class="highlight-image">
                </div>
                     @endforeach
                </div>
                 </div>
        </div>

        <script>
          function changeMainImage(src) {
            // alert(src);
            // src="public/"+src;
            document.getElementById('main_image').src = src;
          }
        </script>
        <script>
          var sliders = document.querySelectorAll(".slider");

          sliders.forEach(function (slider) {
            var slideIndex = 0;
            var slides = slider.querySelectorAll(".slide");
            var totalSlides = slides.length;

            showSlides();

            function showSlides() {
              for (var i = 0; i < totalSlides; i++) {
                slides[i].style.display = "none";
              }

              for (var i = slideIndex; i < slideIndex + 3; i++) {
                if (slides[i]) {
                  slides[i].style.display = "block";
                }
              }

              slideIndex++; // Move to the next slide

              if (slideIndex > totalSlides - 3) { // Reset slide index when it reaches the end
                slideIndex = 0;
              }

              setTimeout(showSlides, 2000); // Change slide every 2 seconds (adjust as needed)
            }
          });
        </script>
      </div>
      <!--3-->
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="form-container"  id="desk_enq_form">
          @if ($message = Session::get('success'))
          <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>

          </div>
          @endif
          <h2 class="text-center text-white mb-4"><b>Contact Advatisor</b></h2>
          <form action="{{url('enquiry_auto_submit')}}">
            <input type="hidden" name="id" value="{{$data->id}}">
            <input type="hidden" name="enquiry_flag" value="{{$data['enquiry_flag']}}">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"
                required></textarea>
            </div><br>
            <center>
              <button type="submit" style="font-size:13px" class="btn btn-dark btn-block contactbtn">Submit</button>
            </center>
          </form>
        </div>
      </div>
      <!---->
    </div>
    <!--....-------row 2--------------/-->
    <div class="row">
      <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12">

      </div>
    </div>


  </section>
  <!--=============section 2===================================-->
  <section id="basicinfor_price" style="margin-top:10px">

    <head>
      <div class="row">
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12" style="margin-left:10%">


   
          <h4 style="font-size:25px;paddig:10px">Details</h4>
         
         <?php
           
           $description=$data->description;
          ?>
            
         
          <ul>
              <li> <?=$description?></li>
              <li>
              Price - €&nbsp;{{$data->price}}
          </li>
            <li>
              Name - &nbsp;{{$data->brand}}
          </li>
          <li>
              Type - &nbsp;<?php if($data->type==1){ echo"New";}
              if($data->type==2){ echo"Used";}
              if($data->type==3){ echo"Hire";}
              ?>
          </li>
          <li>
              Version - &nbsp;{{$data->version}}
          </li>
          <li>
              Year - &nbsp;{{$data->year}}
          </li>
          <li>
              Body Type - &nbsp;{{$data->body_type}}
          </li>
          <li>
              Fuel type - &nbsp;{{$data->fuel_type}}
          </li>
          <!-- <li>
              Transmission - &nbsp;{{$data->transmission}}
          </li> -->
          @if($data->transmission == 1)
            <li>Transmission - &nbsp;Manual</li>
          @else
            <li>Transmission - &nbsp;Automatic</li>
          @endif
          <li>
              Engine size - &nbsp;{{$data->engine_size}}
          </li>
          <li>
              	Color - &nbsp;{{$data->color}}
          </li>
          <li>
              Doors - &nbsp;{{$data->doors}}
          </li>
          <li>
              Owners - &nbsp;{{$data->owners}}
          </li>
          <li>
              Milage - &nbsp;{{$data->milage}}
          </li>
          <li>
              Tax expiry - &nbsp;{{$data->tax_exp}}
          </li>
          <li>
              NCT expiry - &nbsp;{{$data->nct_exp}}
          </li>
          @if($data->eir_code)
                <li class="" id="eir_code">ERI code:{{$data->eir_code}}</li>
                @else
                <li>No EIR Code given</li>
                @endif
          </ul>
          <!--================LOCATION===================-->
          
          @if($data->location_disp_flag==0)
          <br>
          
           
             

                <h4><b>
                    <span ><i class="fa fa-map-marker"
                        aria-hidden="true"></i>
                    </span>
                    &nbsp;Address</b></h4>
             
            

           

              <ul class="no-bullets">
                <li>{{$data->county}}</li>
                <li>{{$data->city}}</li>
                <li>{{$data->town}}</li>
                <li>{{$data->street}}</li>
                <li>ERI code:{{$data->eir_code}}</li>
              </ul>
           
         
          @endif
          
          <!--===============LOCATION ENDS================-->
         
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contactcmpny" style="margin-left:0%">
            <!--<div id="googleMap" style="width:100%;height:400px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9771.735185299985!2d-7.0987388375991785!3d52.244586140271515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4842c6b787796c5f%3A0xeee7f076ec279cd3!2sFarranshoneen%2C%20Waterford%2C%20X91%20C9F3%2C%20Ireland!5e0!3m2!1sen!2sin!4v1734765374263!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>-->
            <div id="map" style="width: 100%; height: 400px;"></div>
          </div>

        </div>
        
        <!--commented the below section which is for displaying the contact section as per the client request on 20/08/2024-->
        
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 contactcmpny" style="margin-left:0%">
          <!--<div style="background-color:#fff;border:7px solid black;border-radius:5px">-->
            <!--<div style="padding:10px">-->
            <!--  <h3 style="color:#d3111a">Contact Details</h3>-->
            <!--  @if($data1['enquiry_flag']==1)-->
            <!--  <h6>{{$data1['admin']->name}}</h6>-->
            <!--  <h6><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;{{$data1['admin']->email}}</h6>-->
            <!--  <h6><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{$data1['admin']->phone}}</h6>-->
            <!--  <h6><i class="fa fa-whatsapp text-success" aria-hidden="true"></i>&nbsp;&nbsp;{{$data1['admin']->whatsapp}}-->
            <!--  </h6>-->

            <!--  @else-->
            <!--  <h6>{{$data->user->name}}</h6>-->
            <!--  <h6><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;{{$data->user->email}}</h6>-->
            <!--  <h6><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp;{{$data->user->code}}{{$data->user->phone}}</h6>-->
            <!--  @if(!empty($data->user->whatsapp))-->

            <!--  <h6><i class="fa fa-whatsapp text-success"-->
            <!--      aria-hidden="true"></i>&nbsp;&nbsp;{{$data->user->wcode}}{{$data->user->whatsapp}}</h6>-->
            <!--  @if($data->user->role=="agent")<br>-->

            <!--  <a href="{{url('filterautomobiles')}}?main_name=dealers&&user_id={{$data->user_id}}"> <button-->
            <!--      style="width:100%;height:auto;padding:10px;background-color:#dc3545;border:1px solid #dc3545;border-raius:5px;color:white"-->
            <!--      class="view">VIEW ALL &nbsp;</button></a>-->
            <!--  @endif-->
            <!--  @endif-->
            <!--  @endif-->
            <!--</div>-->
          <!--</div>-->
       
            
            <!--<a href="{{url('contact_us')}}"><button class="btn btn-danger enquirybtn">Enquiry To Home ireland</button></a>-->
        <!--<div class="form-container1">-->
        <!--  <h2 class="text-center text-white mb-4"><b>Contact HomeIreland</b></h2>-->
        <!--   @if ($message = Session::get('success2'))-->
        <!--  <div class="alert alert-success " role="alert">-->
        <!--    <strong>{{ $message }}</strong>-->

        <!--  </div>-->
        <!--  @endif-->
        <!--  <form action="{{url('enquiry_submit_admin')}}">-->
        <!--    <input type="hidden" name="id" value="">-->
        <!--    <input type="hidden" name="enquiry_flag" value="">-->
        <!--    <div class="form-group1">-->
        <!--      <label style="color:white;" for="name">Name</label>-->
        <!--      <input type="text" class="form-control" name="name" placeholder="Enter your name" required>-->
        <!--    </div>-->
        <!--    <div class="form-group1">-->
        <!--      <label style="color:white;" for="email">Email</label>-->
        <!--      <input type="email" class="form-control" name="email" placeholder="Enter your email" required>-->
        <!--    </div>-->
        <!--    <div class="form-group1">-->
        <!--      <label style="color:white;" for="phone">Phone</label>-->
        <!--      <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>-->
        <!--    </div>-->
        <!--    <div class="form-group1">-->
        <!--      <label style="color:white;" for="message">Message</label>-->
        <!--      <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"-->
        <!--        required></textarea>-->
        <!--    </div><br>-->
        <!--    <center>-->
        <!--      <button style="font-size:13px" type="submit" class="btn btn-dark btn-block contactbtn ">SUBMIT</button>-->
        <!--    </center>-->
        <!--  </form>-->
        <!--  </div>-->

          
         
          
          
          
          
          
          <br><br>
@if(count($middleads)>0)
<midadd id="midadd" style="">
      @foreach($middleads as $ads)
      @if($loop->iteration==1)
      @php
      $first_img=$ads->image;
      @endphp
      @endif
      <input type="hidden" value="{{count($middleads)}}" id="mid_add_count">
     <img src="{{asset('uploads/ads/'.$ads->image)}}" id="mid_add_{{$loop->iteration}}" class="img-responsive img-responsive1">
       @endforeach
</midadd>
 @endif
          <!------------location=-============-->                   
        </div>
      </div>
    </head>
  </section>
  <!--=============section 2 ends===================================-->

  <!--============================ row 3 ===========================================-->

  <!--============================ row 4 ===========================================/-->

  <!--============================ row 5 ===========================================/-->
 
  <!--============================ row 6 ===========================================/-->
  <section id="description" style="margin-top:10px">

    <head>
      <div class="row">

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left:0%">
          @if($data->Youtube_video_url!=""||$data->video_url!="")
          <center>
            <h3>Videos</h3>
            <ul>
              <?php
                   if($data->Youtube_video_url){
                   $src="https://www.youtube.com/embed/$data->Youtube_video_url";?>
              <iframe width="660" height="415" src="{{$src}}" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
              <?php  }
                   else
                   {
                       ?>
              <iframe width="560" height="315" src="{{asset('uploads/videos/'.$data->video_url)}}" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe
                <?php } ?>


          </center>
          @endif
        </div>


      </div>

    </head>
  </section>
  <section id="mob_enq_form">
      <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="form-container"  id="">
          @if ($message = Session::get('success'))
          <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>

          </div>
          @endif
          <h2 class="text-center text-white mb-4"><b>Contact Advatisor</b></h2>
          <form action="{{url('enquiry_auto_submit')}}">
            <input type="hidden" name="id" value="{{$data->id}}">
            <input type="hidden" name="enquiry_flag" value="{{$data['enquiry_flag']}}">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"
                required></textarea>
            </div><br>
            <center>
              <button type="submit" style="font-size:13px" class="btn btn-dark btn-block contactbtn">Submit</button>
            </center>
          </form>
        </div>
        </div>
      </div>
  </section>
</main>
<!--======================MAIN ENDS===================-->
<!--=========================BOTTOM ADD==============================-->
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

 <!--========================SIMILAR PROPERTIES==================-->
  
      <!--========================SIMILAR PROPERTIES ENDS==================-->  
    @endif 
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
    const eirCode = document.getElementById('eir_code').innerText;
    console.log("EIR Code: ", eirCode);

    const apiKey = 'a8e5314f766b447eba78fec07d47ffba'; // Replace with your OpenCage API key

    function fetchCoordinates(eirCode) {
        $.ajax({
            url: `https://api.opencagedata.com/geocode/v1/json`,
            method: 'GET',
            data: {
                key: apiKey,
                q: eirCode,
                language: 'en',
                no_annotations: 1
            },
            success: function(response) {
                console.log("API Response: ", response);

                if (response.results && response.results.length > 0) {
                    const coordinates = response.results[0].geometry;
                    const latitude = coordinates.lat;
                    const longitude = coordinates.lng;
                    console.log("Latitude: ", latitude);
                    console.log("Longitude: ", longitude);

                    initMap(latitude, longitude);
                } else {
                    console.error('No location found for this EIR Code.');
                    alert('Location not found for the given EIR code.');
                }
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error fetching coordinates:', textStatus, errorThrown);
                alert('Error fetching coordinates.');
            }
        });
    }

    function initMap(lat, lng) {
        const mapOptions = {
            center: { lat: lat, lng: lng },
            zoom: 15
        };

        const map = new google.maps.Map(document.getElementById('map'), mapOptions);

        new google.maps.Marker({
            position: { lat: lat, lng: lng },
            map: map
        });
    }

    fetchCoordinates(eirCode);

</script>
<!--=========================BOTTOM ADD ENDS==========================-->
@endsection