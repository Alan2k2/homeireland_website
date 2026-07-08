<?php
// echo"<pre>";print_r($property);exit;
?>
@extends('layouts.website.main')
@section('content')


<div class="preloader">
  <div class="spinner">
  </div>
</div>
<style>


/*added*/
#midadd {
     /*margin-top:20%;*/
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.ad-image {
    margin: 0 auto; /* Center the image horizontally */
    max-width: 100%; /* Ensure the image does not overflow the container */
    height: auto; /* Maintain the aspect ratio */
}

/*#midadd*/
/*{*/
   
/*}*/
#mob_enq_form
    {
        display:none
    }
@media (max-width: 768px) {
    #desk_enq_form
    {
        display:none;
        
    }
    #mob_enq_form
    {
        display:block
    }
    #midadd {
         margin-top:0%;
        justify-content: center; /* Center the container content */
        text-align: center; /* Center align text within the container */
    }

    .ad-image {
        max-width: 100%; /* Ensure the image scales down on small devices */
    }
}




  i {
    color: red;
  }

  .no-bullets {
    list-style-type: none;
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
  .property-name{
      color:#d3111a;
      font-size:45px;
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
  .property-name{
      font-size:25px;
  }
  
  
  @media(min-width:1200px){
    .contactcmpny{
        margin-bottom:10px;
        padding-left:0px;
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
    ..form-container1{
         margin-left:50px!important;
    }
    .img-responsive{
        margin-left:13%;
    }
    .img-responsive1{
         margin-left:0%!important;
    }
    
    .enquirybtn{
        margin-left:25%;
    }
}
  .enquirybtn{
        margin-left:25%;
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
  
  .slide1{
    min-width: 25%;
    box-sizing: border-box;
    padding: 0px;
    width: 110px;
  }
</style>
<script src="https://kit.fontawesome.com/29d1847fa7.js" crossorigin="anonymous"></script>
<!--======================MAIN STARTS===================-->
<main style="">
  
<section id="images_enquiry">
    <div class="container">
        <div class="row">
            <h1 class="text-center text-danger">
                <strong>
                    <i class="fa-solid fa-house fa-lg"></i>&nbsp;Home
                </strong>
            </h1>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container mt-5">
                    <div class="row">
                        <!-- Left Side: Property Details -->
                        <div class="col-md-10 pr-2">
                            <p class="text-start h3">
                                @if($property->property_type == NULL)
                                <span class="text-primary">Property: N/A&nbsp;(</span>
                                @else
                                <span class="text-primary">Property: {{ $property->property_type }}&nbsp;(</span>
                                @endif
                                <!--<span class="text-primary">Property: {{ $property->property_type->name ?? 'N/A' }}</span>-->
                                
                                 <span class="text-primary">Property Id: {{ $property->id }}</span>
                                <!--&nbsp;&nbsp;-->
                                <span class="text-primary">)</span>
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



<script>
    document.addEventListener('scroll', function () {
        const dropdownMenu = document.querySelector('.dropdown-menu');
        if (dropdownMenu && dropdownMenu.classList.contains('show')) {
            const dropdown = bootstrap.Dropdown.getInstance(document.getElementById('shareButton'));
            if (dropdown) {
                dropdown.hide(); 
            }
        }
    });
</script>

    </div>
          <center>
           <!-- <h3 class="property-name" style=""><b>
              @if($property->main_cat ==4 || $property->main_cat==7|| $property->main_cat==12)
              <span style="color:#d3111a;font-size:45px;margin-left:5%;margin-top:10%">
                <i class="fa fa-car" aria-hidden="true"></i>
              </span>
              Parking
              @if($property->main_cat==12)
              - Needed
              @endif
            </b></h3><br><br> -->

          @elseif($property->main_cat ==9||$property->main_cat ==10||$property->main_cat ==11 )
          <span style="color:#d3111a;font-size:45px;margin-left:5%;margin-top:10%">
            <i class="fa fa-home" aria-hidden="true"></i>
          </span>
          {{$property->property_type}} - Needed</b></h3><br><br>
          @elseif($property->main_cat ==8)
          <span style="color:#d3111a;font-size:45px;margin-left:5%;margin-top:10%">
            <i class="fa fa-home" aria-hidden="true"></i>
          </span>
          {{$property->property_type}} - Holiday Home</b></h3><br><br>
          @else
          <span style="color:#d3111a;font-size:45px;margin-left:5%;margin-top:10%">
            <i class="fa fa-home" aria-hidden="true"></i>
          </span>
          {{$property->property_type}}</b></h3><br><br>
          @endif
          </center>
        </div>
      </div>
    </head>
      <!--==================TOP ADD STRTS============================-->

       @if(count($topads)>0)
 <topadd>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide1 multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
            
           @forelse($topads as $ads)
           @if(!empty($ads->url))
           @php
                    $url=$ads->url;
                     @endphp
                    @else
                     @php
                    $url="#";
                     @endphp
                    @endif
           @if($loop->iteration==1)
                    
                    
                    @php
                    $first_img=$ads->image;
                    @endphp
                    <div class="item active">
            <div class="col-xs-4"><a href="{{$url}}"target="_blank"><img src="{{asset('uploads/ads/'.$first_img)}}" class="img-responsive"></a></div>
          </div>
               @endif
           <div class="item ">
            <div class="col-xs-4"><a href="{{$url}}" target="_blank"><img src="{{asset('uploads/ads/'.$ads->image)}}" class="img-responsive" width="350px" height="200px"></a></div>
          </div>
        @empty
        @endforelse
        </div>
        <!--<a class="left carousel-control a" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>-->
        <!--<a class="right carousel-control a" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
      </div>
    </div>
  </div>
</topadd>
 
       
    @endif   
         <!--=====================TOP AD ENDS===================================-->
    <!----------------head end------------>
    <div class="row" style="margin-top:2%;">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        
        <center>
          <style>

          </style>
          </style>
          @if(isset($property->main_image))
          <div class="home-image-container" id="m">
            <img src="{{asset('uploads/properties/'.$property->main_image)}}" id="main_image" alt="Home Image"
              class="home-image">
          </div>

          @else
          <img src="{{asset('website/images/no-image.jpg')}}" id="imagePreview" alt="Image" height="400px"
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
            /* flex: 0 0 33.33%; */
            /* Adjust according to your need */
          }
          
          
         
  
        
 /*@media (max-width: 768px) {*/
 /*   #midadd {*/
 /*        margin-top:0%;*/
 /*        display:flex;*/
 /*       justify-content: center;*/
 /*       text-align: center; */
 /*   }*/
          
          
          
          
          
          

          
 /*       @media (min-width: 768px)  {*/
 /*           .highlight-image*/
 /*         {*/
 /*             height:170px !important;*/
 /*         }*/
 /*         #main_image*/
 /*         {*/
 /*             width: 100%;*/
 /*            height:510px !important;  */
 /*         }*/
          
 /*       }*/
        
        /*media query for mobile view added on 19/07/2024 */
        
         @media(max-width:600px){
          .item-properties{
            border-radius: 25px;
          }
          .midadd{
              display:flex;
              justify-content:center;
              align-item:center;
          }
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
             margin-left:40px;
          }
          .formcontainer-container{
              margin-left:25px;
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
/*changed the height and widht from 100% to the below to make evry image in same height and width*/
  .highlight-image {
     height:120px !important;
     width:300px !important;
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

.video-frame {
        width: 660px;
        height: 415px;
    }

    @media (max-width: 768px) {
        .video-frame {
            width: 100%;
            height: auto; /* This will automatically adjust the height to maintain aspect ratio */
        }
        .videoul{
            padding-left:0px;
        }
    }

    @media (max-width: 576px) {
        .video-frame {
            width: 300px;
            height: 200px;
        }
           .videoul{
            padding-left:0px;
        }
    }
        
        </style>
        
        <div class="slider-container">
          <div class="slider">
            <div class="slides" style="">

              <!--@foreach($prop_images as $ads)-->
              <!--<div class="slide">-->
              <!--    <img src="{{asset('uploads/properties/'.$ads->image)}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="highlight-image">-->
              <!--</div>-->
              <!--@endforeach-->
              @if(isset($ads->image) && $ads->image !== null)
              @foreach($prop_images as $ads)
              <div class="slide">
                  <img src="{{asset('uploads/properties/'.$ads->image)}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="highlight-image">
              </div>
              @endforeach
              @else
              <!-- <div class="slide">
                  <img src="{{asset('website/images/no-image.jpg')}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('website/images/no-image.jpg')" class="highlight-image">
              </div>
              <div class="slide">
                  <img src="{{asset('website/images/no-image.jpg')}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('website/images/no-image.jpg')" class="highlight-image">
              </div>
              <div class="slide">
                  <img src="{{asset('website/images/no-image.jpg')}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('website/images/no-image.jpg')" class="highlight-image">
              </div> -->
              @for($i = 0; $i < 3; $i++)
              <div class="slide">
                  <img src="{{asset('website/images/no-image.jpg')}}" alt="Image 1"  style="margin:auto" class="highlight-image">
              </div>
              @endfor
              @endif
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
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 formcontainer-container">
        <div class="form-container" id="desk_enq_form">
          @if ($message = Session::get('success'))
          <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>

          </div>
          @endif
          <h2 class="text-center text-white mb-4"><b>Contact Advertiser</b></h2>
          <form action="{{url('enquiry_submit')}}">
            <input type="hidden" name="id" value="{{$property->id}}">
            <input type="hidden" name="enquiry_flag" value="{{$data['enquiry_flag']}}">
            <div class="form-group1">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group1">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group1">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group1">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"
                required></textarea>
            </div><br>
            <center>
              <button style="font-size:13px" type="submit" class="btn btn-dark btn-block contactbtn">Submit</button>
            </center>
          </form>
        </div><br>
         @if(count($middleads)>0)
<midadd id="midadd" style="midadd">
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
 <br><br>
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
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="text-align:left;">
            <h4 style="font-size:25px;paddig:10px">Details</h4>
            <?php  $description=$property->description; ?>
            <ul>
              <li> Description:&nbsp;<?=$description?></li>
              <li>Property ID:&nbsp;<strong>{{ $property->id }}</strong></li>
              <li>
                @if($property->main_cat==10||$property->main_cat==11)
                  Expected Price - €&nbsp;{{$property->price}}
                @else
                  Price - €&nbsp;{{$property->price}}
                @endif
                @if(!empty($property->price_type))
                  -{{$property->price_type}}
                @endif
              </li>
              @if(!empty($property->selling_type))
              <li>
                Selling Type - {{$property->selling_type}}</li>
              @endif
              @if(!empty($property->Available_from))
              <li>
                @if($property->main_cat==10 || $property->main_cat==11)
                  Needed from - {{date('d-m-Y',strtotime($property->Available_from))}}
                @else
                  Available from - {{date('d-m-Y',strtotime($property->Available_from))}}
                @endif
              </li>
              @endif
              @if($property->auction)
                <li>Auction - Yes</li>
                <li>Auction-date - {{$property->auction_date}}</li>
                <li>Auction-auction_location - {{$property->auction_location}}</li>
              @endif
              @if(!empty($property->floor_area))
                <li>Floor_area - {{$property->floor_area}}</li>
              @endif
              @if(!empty($property->unit))
                <li>Unit - {{$property->unit}}</li>
              @endif
              @if(!empty($property->price_sale))
                <li>Price Sale- €&nbsp;{{$property->price_sale}}</li>
              @endif

              @if(!empty($property->tax))
                <li>Tax - &nbsp;{{$property->tax}}</li>
              @endif
              @if(!empty($property->space))
                <li>Space - &nbsp;{{$property->space}}</li>
              @endif
              @if(!empty($property->av_for))
                <li>
                  @if($property->main_cat==10||$property->main_cat==11)
                    Needed For - &nbsp;{{$property->av_for}}
                  @else
                    Available For - &nbsp;{{$property->av_for}}</li>
                  @endif
              @endif
              @if($property->no_tenants)
                <li>No of Tenants - &nbsp;{{$property->no_tenants}}</li>
              @endif
              @if($property->Owner_occupied)
                <li>Owner occupied - &nbsp;Yes
                </li>
              @endif
              @if($property->one_person)
                <li>Additonal One person - &nbsp;Yes</li>
              @endif
              @if($property->Preference)
                <li>Preference - &nbsp;{{$property->Preference}}</li>
              @endif
              @if($property->Single_Bedrooms)
                <li>Single Bedrooms - &nbsp;{{$property->Single_Bedrooms}}</li>
              @endif
              @if($property->Double_Bedrooms)
                <li>Double Bedrooms - &nbsp;{{$property->Double_Bedrooms}}</li>
              @endif
              @if($property->Twin_Bedrooms)
                <li>Twin Bedrooms - &nbsp;{{$property->Twin_Bedrooms}}</li>
              @endif
              @if($property->Bathrooms)
                <li>Bathrooms- &nbsp;{{$property->Bathrooms}}</li>
              @endif
              @if($property->ber_no_avl)
                <li>BER - &nbsp;{{$property->BER}}/{{$property->BER_NO}}</li>
              @endif
              @if($property->Minimum_lease)
                <li>Minimum_lease - &nbsp;{{$property->Minimum_lease}}</li>
              @endif
              @if($property->furnishing)
                <li>Furnishing - &nbsp;{{$property->furnishing}}</li>
              @endif
              @if($property->feature)
                <li>Features - &nbsp;{{$property->feature}}</li>
              @endif
            </ul>
            <!--================LOCATION===================-->
            @if($property->location_disp_flag==0)
              <br>
              <h4><b><span ><i class="fa fa-map-marker" aria-hidden="true"></i></span>&nbsp;Address</b></h4>
              <ul class="no-bullets">
                <li>{{$property->county}}</li>
                <li>{{$property->city}}</li>
                <li>{{$property->town}}</li>
                <li>{{$property->street}}</li>
                @if($property->eir_code)
                <li class="" id="eir_code" >ERI code:{{$property->eir_code}}</li>
                @else
                <li>No EIR Code given</li>
                @endif
                <!--<input type="hidden" id="eir_code" value="{{$property->eir_code}}"/>-->
              </ul>
            @endif
            <!--===============LOCATION ENDS================-->
            <h4><i class="fa fa-grav" aria-hidden="true"></i>&nbsp;Facilities</h4>
            <ul>
              <?php
              if(isset($property->facilities)){
                $facilities=$property->facilities;
                for($i=0;$i<count($facilities);$i++){
                  ?>
                  <li class="no-bullets">
                    <span style="color:#94F742;font-size:20px">
                      <i class="fa fa-check " aria-hidden="true" style="color:#94F742"></i></span> &nbsp;
                    <?=$facilities[$i]?>
                  </li>
                  <?php
                }
              }
              ?>
            </ul>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 contactcmpny" style="margin-left:0%">
            <!--<div id="googleMap" style="width:100%;height:400px;"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9771.735185299985!2d-7.0987388375991785!3d52.244586140271515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4842c6b787796c5f%3A0xeee7f076ec279cd3!2sFarranshoneen%2C%20Waterford%2C%20X91%20C9F3%2C%20Ireland!5e0!3m2!1sen!2sin!4v1734765374263!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>-->
            <div id="map" style="width: 100%; height: 400px;"></div>
          </div>
        </div>
      </div>
    </head>
  </section>
  <!--=============section 2 ends===================================-->

  <!--============================row 3===========================================-->

  <!--============================row 4===========================================/-->

  <!--============================row 5===========================================/-->
  
  <!--============================row 6===========================================/-->
  <section id="description" style="margin-top:10px">

    <head>
        
   <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
        @if($property->Youtube_video_url!=""||$property->video_url!="")
        <h3>Videos</h3>
        <ul class="videoul">
            <?php
            if($property->Youtube_video_url){
               $url=$property->Youtube_video_url;
            //   $url="https://www.youtube.com/embed/pevYZnxhwDg";
            //   $url = "https://www.youtube.com/watch?v=Yupy6iXnXjQ";
            //   https://www.youtube.com/embed/watch?v=Yupy6iXnXjQ
               // Split the URL into two parts
$parts = explode("watch?v=", $url);

// The first part includes ".com/"
$firstPart = $parts[0] . "watch?v=";

// The second part is the rest of the URL
$secondPart = trim($parts[1]);
                $src="https://www.youtube.com/embed/$secondPart";?>
                <iframe class="video-frame" src="{{$src}}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            <?php  }
            else {
                ?>
                <iframe class="video-frame" src="{{asset('uploads/videos/'.$property->video_url)}}" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <?php } ?>
        @endif
    </div>
</div>

    </head>
  </section>
  
  <section id="mob_enq_form">
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 formcontainer-container">
        <div class="form-container" id="">
          @if ($message = Session::get('success'))
          <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>

          </div>
          @endif
          <h2 class="text-center text-white mb-4"><b>Contact Advatisor</b></h2>
          <form action="{{url('enquiry_submit')}}">
            <input type="hidden" name="id" value="{{$property->id}}">
            <input type="hidden" name="enquiry_flag" value="{{$data['enquiry_flag']}}">
            <div class="form-group1">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group1">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
            </div>
            <div class="form-group1">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
            </div>
            <div class="form-group1">
              <label for="message">Message</label>
              <textarea class="form-control" name="message" rows="3" placeholder="Enter your message"
                required></textarea>
            </div><br>
            <center>
              <button style="font-size:13px" type="submit" class="btn btn-dark btn-block contactbtn">Submit</button>
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
 <bottomadd>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <div class="row">
    <div class="col-md-12">
       <div class="slider-container">
        <!-- <div class="arrow left-arrow" id="left-arrow">&#9664;</div> -->
        <div class="slider">
            <div class="slider-track">
            
           @forelse($bottomads as $ads)
           @if(!empty($ads->url))
           @php
                    $url=$ads->url;
                     @endphp
                    @else
                     @php
                    $url="#";
                     @endphp
                    @endif
           @if($loop->iteration==1)
                    
                    
                    @php
                    $first_img=$ads->image;
                    @endphp
                    <div class="slide slideads">
                       <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                    </div>
          
               @endif
               <div class="slide slideads">
                       <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                    </div>
        @empty
        
        @endforelse
        </div>
        <!--<a class="left carousel-control a" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>-->
        <!--<a class="right carousel-control a" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
      </div>
    </div>
  </div>
</bottomadd>
 <!--========================SIMILAR PROPERTIES==================-->
  <section class="feutured">
           @if((count($properties[1])>0) )
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <h4>Similar Properties</h4>
                    
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties[1] as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;" >
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
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}{{$rent_coll}}</h6>
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
            <?php
            $main_cat=$property->main_cat;
            ?>            
             <a href="{{url('filter-properties')}}?search_type=all&main_cat={{$main_cat}}" style="padding-bottom:5px"><button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;">
                             <span style="display:flex;margin:auto;">View All</span></button></a>
                             
                  <br><br></div>
      @endif
     </section><br>
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5EyDf2McFFDr1JNdvOM23mY0kPvyzEN0&callback=initMap" async defer></script>

<!--=========================BOTTOM ADD ENDS==========================-->
@endsection