@extends('layouts.website.main')
@section('content')
<style>

.btn-dark 
{
    width:200px !important;
    border-radius:10px;
}
.login-btn
{
    color:#fff;
    background-color:red;
    width:300px;
    height:60px;
    padding:1px
    border-radius:5px;
    border:1px solid red;
    font-weight:800;
    font-size:25px;
}
.login-btn:hover
{
    color:#fff;
    background-color:black;
    width:300px;
    height:60px;
    padding:1px
    border-radius:5px;
    border:1px solid red;
    font-weight:800;
    font-size:25px;
}
.login-btn_box
{
    padding:10%;
}
.mid_ad
{
    height:230px;
    width:310px;
}
.agent
{
    margin-top:50px;
}
.mid_add_gap
{
    margin-top:45px;
}
   li
   {
       text-align:left;
   }
    #bottom-content
    {
        padding-top:300px;
        padding:20px;
    }
    .img-responsive
    {
      height:200px !important;  
      width:350px !important;
    }
    .form-container {
    background-color: #d3111a;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* float: left; */
    display: none;
    
}
.form-container-bottom{
    background-color: #d3111a;
    padding: 10px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* float: left; */
}
.bottom-container{
  height: 90vh;
}
.ad-login{
    /*width: 200px;*/
    /*justify-content: center;*/
    text-align: center;
    
  }
@media (min-width: 1024px) {
    #icon {
        display: none;
    }
    #step
    {
        margin-top:10%;
    }
    
}

/*added padding for carosel*/
@media(max-width:600px){
  .carousel{
    padding: 0px 5px;
  }
   .form-container{
    margin: 5px 5px;
    border-radius: 10px;
    display: none;
  }
  .form-container-bottom{
    /* margin: 5px 5px; */
    border-radius: 1px;
  }
  .bottom-container{
  height: 60vh;
  }
   .img-responsive{
    height:100px !important;  
    width:100px !important;
  }
   .box_slot{
    margin-bottom: 4px;
  }
  .mid_ad{
      width:330px;
  }
  .ad-login{
    /*width: 200px;*/
    justify-content: center;
    text-align: center;
    height: 45px;
  }
  .ad-txt{
    justify-content: left;
  }
}

.box_slot
{
 border:2px solid black;
 border-radius:10px;
 padding:6%;
}

.title_properties
{font-size:20px;font-weight:800;color:#D61E0F}
</style>
 <!--============================BANNER STARTS=================================-->
<banner>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
<div class="">
  <h2>Carousel Example</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="{{asset('uploads/AD_BANNER/a.jpg')}}" alt="Los Angeles" style="width:100%;height:50%">
        <div class="carousel-caption">
          <!--<h3>Los Angeles</h3>-->
          <!--<p>LA is always so much fun!</p>-->
        </div>
      </div>

      <div class="item">
        <img src="{{asset('uploads/AD_BANNER/b.jpg')}}" alt="Chicago" style="width:100%;height:50%">
        <div class="carousel-caption">
          <!--<h3>Chicago</h3>-->
          <!--<p>Thank you, Chicago!</p>-->
        </div>
      </div>
    
      <div class="item">
        <img src="{{asset('uploads/AD_BANNER/c.jpg')}}" alt="New York" style="width:100%;height:50%">
        <div class="carousel-caption">
          <!--<h3>New York</h3>-->
          <!--<p>We love the Big Apple!</p>-->
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <div id="icon">
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    </div>
  </div>
</div>

</body>
</banner>
<!--============================BANNER ENDS=================================-->
<!--============================STEP START=================================-->
<Section id="step">
    <div class="row">
        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
            <center>
            
    <style>
        .image-container {
            position: relative;
            display: inline-block;
        }
        .image-container img {
            display: block;
             height: 500px;
             width: 650px;
        }
        .login-link {
            position: absolute;
           
            /* background-color: rgba(255, 255, 255, 0.5);  */
            /* padding: 100px; Optional: to expand the clickable area */
            top: 33%;
            left: 74%;
            transform: translate(-50%, -50%);
            /* padding-top: 5px; */
            padding-left: 150px;
            padding-right: 70px;
            padding-bottom: 62px;
            /* background-color: red; */
            border-radius: 25px;
        }
        .login-link:hover
        {
            background-color: rgba(255, 255, 255, 0.5); 
        }

        .login-form1{
          position: absolute;
           
            /* background-color: rgba(255, 255, 255, 0.5);  */
            /* padding: 100px; Optional: to expand the clickable area */
           

            top: 51%;
            left: 77%;
            transform: translate(-50%, -50%);
            /* padding-top: 5px; */
            padding-left: 150px;
            padding-right: 70px;
            padding-bottom: 62px;
            /* background-color: red; */
            border-radius: 25px;
        }
        .login-form1:hover{
          background-color: rgba(255, 255, 255, 0.5); 
        }


        .login-form2{
          position: absolute;
           
             /* background-color: rgba(255, 255, 255, 0.5);   */
            /* padding: 100px; Optional: to expand the clickable area */
           

            top: 69%;
            left: 74%;
            transform: translate(-50%, -50%);
            /* padding-top: 5px; */
            padding-left: 150px;
            padding-right: 70px;
            padding-bottom: 62px;
            /* background-color: red; */
            border-radius: 25px;
        }
        .login-form2:hover{
          background-color: rgba(255, 255, 255, 0.5); 
        }


        .login-form3{
          position: absolute;
           
             /* background-color: rgba(255, 255, 255, 0.5);   */
            /* padding: 100px; Optional: to expand the clickable area */
           

            top: 88%;
            left: 63%;
            transform: translate(-50%, -50%);
            /* padding-top: 5px; */
            padding-left: 150px;
            padding-right: 70px;
            padding-bottom: 62px;
            /* background-color: red; */
            border-radius: 25px;
        }
        .login-form3:hover{
          background-color: rgba(255, 255, 255, 0.5); 
        }
        
        .signup-link {
            position: absolute;
           
            /* background-color: rgba(255, 255, 255, 0.5);  */
            /* padding: 100px; Optional: to expand the clickable area */
           

            top: 14%;
            left: 63%;
            transform: translate(-50%, -50%);
            /* padding-top: 5px; */
            padding-left: 150px;
            padding-right: 82px;
            padding-bottom: 62px;
            /* background-color: red; */
            border-radius: 25px;
        }
        .signup-link:hover
        {
 background-color: rgba(255, 255, 255, 0.5); 
        }
        
        /* added media query for the image after the carousel */
        @media(max-width:600px){
          .image-container img {
            display: inline-block;
            height: 300px;
            width: 360px;
        }
        }
        
        @media(max-width:768px){
            .mainhead{
                font-size:20px;
            }
        }
    </style>

    <div class="image-container">
    <a  href="{{ url('/register') }}" class="signup-link" target="_blank"></a>
        <img src="{{asset('uploads/AD_BANNER/flow.svg')}}" alt="Image with Login" class="bannerImg">
        <a href="{{ url('/login') }}" class="login-link" target="_blank"></a>
        <a href="{{ url('/login') }}" class="login-form1" target="_blank"></a>
        <a href="{{ url('/login') }}" class="login-form2" target="_blank"></a>
        <a href="{{ url('/login') }}" class="login-form3" target="_blank"></a>
    </div>
    </center>
        </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="form-container">
          @if ($message = Session::get('success'))
          <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>

          </div>
          @endif
          <h2 class="text-center text-white mb-4"><b> ENQUIRY TO HOMEIRELAND</b></h2>
          <form action="{{url('contact-enquiry')}}" method="post">
              @csrf
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
              <button type="submit" class="btn btn-dark btn-block">Submit</button>
            </center>
          </form>
        </div>
      </div>
    </div>
</Section><br>
<!--============================STEP ENDS=================================-->
<section style="display:none">
    <div class="row login-btn_box">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <center>
                <button class="login-btn">SIGN UP NOW</button>&nbsp;
                <button class="login-btn">LOGIN NOW</button>
            </center>
        </div>
    </div>
</section>
 <!--==================TOP ADD STRTS============================-->

       @if(count($topads)>0)
 <topadd>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
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
                @if($loop->iteration!=1)
           <div class="item ">
            <div class="col-xs-4"><a href="{{$url}}" target="_blank"><img src="{{asset('uploads/ads/'.$ads->image)}}" class="img-responsive" ></a></div>
          </div>
          @ENDIF
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
         <!--============================PROPERTIES   START=================================-->
<section class="container-fluid">
    <center>
        
        <h1 style="color:red" class="mainhead" ><b>OUR   SCHEMES</u></b></h1>
    <br><br>
<div class="row" >
    
     
       @foreach($PropertySubscription->where('id',1)->values() as $a)
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="box_slot"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
              <li>{{$a->duration}} days </li>
              <li>Personal Sellers Only </li>
              <li>Will be listed in top of pages</li>
             
          </ul>
              </div>
          </div>
          @endforeach
          <!-------------2------------->
          @foreach($PropertySubscription->where('id',2)->values() as $a)
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="box_slot"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
              <li>{{$a->duration}} days </li>
              <li>Personal Sellers Only </li>
              <li>Will be listed below Agent Listings</li>
          </ul>
              </div>
          </div>
            @endforeach
          <!------------3=------------>
           @foreach($PropertySubscription->where('id',6)->values() as $a)
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="box_slot"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
              <li>{{$a->duration}} days </li>
              <li>Personal Sellers Only </li>
              <li>Will be listed in Holiday homes page</li>
          </ul>
              </div>
          </div>
          @endforeach
          <!------------4------------->
           @foreach($PropertySubscription->where('id',7)->values() as $a)
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <div class="box_slot"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
              <li>{{$a->duration}} days </li>
              <li>Personal Sellers Only </li>
              <li>Will be listed in neeeded page</li>
          </ul>
              </div>
          </div>
          @endforeach
     </div>
  </center>
</section>
<!--============================PROPERTIES   ENDS=================================-->
 <!--============================PROPERTIES   START=================================-->

<!--============================PROPERTIES   ENDS=================================-->
<!--============================AGENT   STARTS=================================-->
<section class="container-fluid">
    <center>
        
        <h1 style="color:red;padding-top:15px" class="mt-4 mainhead"><b>OUR  AGENTS / DEALERS SCHEMES</u></b></h1>

<div class="row" >
    
    
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
              <!--=========MID AD==========-->
              @if(count($middleads)>0)
<midadd id="midadd" class="agent">
      @foreach($middleads as $ads)
      @if($loop->iteration==1)
      @php
      $first_img=$ads->image;
      @endphp
      @endif
      <input type="hidden" value="{{count($middleads)}}" id="mid_add_count">
     <img src="{{asset('uploads/ads/'.$ads->image)}}" id="mid_add_{{$loop->iteration}}" class="mid_ad mid_add_gap">
       @endforeach
</midadd>
 @endif
              <!--============MID AD ENS=========-->
          </div>
          <!-------------2------------->
          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               @foreach($PropertySubscription->where('id',3)->values() as $a)
              <div class="box_slot agent"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
             <li>{{$a->duration}} days </li>
               <li>Agents Only </li>
                <li>You can add 5 different Ads under this slot Only </li>
              <li>Will be listed below Featured listing</li>
              <li>Separate listing For ALl Agent/dealers Properties</li>
          </ul>
              </div>
              @endforeach
          </div>
          <!------------3=------------>
           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               @foreach($PropertySubscription->where('id',4)->values() as $a)
              <div class="box_slot agent"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
             <li>{{$a->duration}} days </li>
               <li>Agents Only </li>
                <li>You can add 5 different Ads under this slot Only </li>
              <li>Will be listed below Featured listing</li>
              <li>Separate listing For ALl Agent/dealers Properties</li>
          </ul>
              </div>
              @endforeach
          </div>
          <!------------4------------->
           <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
               @foreach($PropertySubscription->where('id',5)->values() as $a)
              <div class="box_slot agent"><p class="title_properties">{{$a->Name}}<span style="float:right">€{{$a->Price}}</span></p>
          <ul>
             <li>{{$a->duration}} days </li>
               <li>Agents Only </li>
                <li>You can add 5 different Ads under this slot Only </li>
              <li>Will be listed below Featured listing</li>
              <li>Separate listing For ALl Agent/dealers Properties</li>
          </ul>
              </div>
              @endforeach
          </div>
     </div>
  </center>
</section>
<!--============================AGENT   ENDS=================================-->
<!--============================PREMIUM  ADS START=================================-->
<section class="container">
    <center>
         <img src="{{asset('uploads/paymentlogo/p.svg')}}" alt="Los Angeles" style="width:100px;height:110px">
        <h1 style="color:red" class="mainhead"><b>OUR PREMIUM ADVERTISEMNTS</u></b></h1>
    <br><br>
<table class="table">
    <thead>
      <tr>
        <th>SL No</th>
        <th>Page Name</th>
        <th>Position</th>
        <th>Duration</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
     @foreach($Advertisement as $a)
      <tr>
       <td>{{$loop->iteration}}</td>
        <td><a href="{{ url('/login') }}" target="_blank">{{$a->page_name}}</a></td>
        <td>{{$a->position}}</td>
        <td>{{$a->duration}} days</td>
        <td>{{$a->price}} €</td>
      </tr>
      @endforeach
      <tr>
          <td></td>
          <td></td>
          <td>
          
          </td>
          <td>
          <br>{{$Advertisement->links()}} <br>
          </td>
      </tr>
    </tbody>
  </table>
  </center>
</section>
<!--==================BOTTOM ADD STRTS============================-->
<div class="mt-4 ad-login">
    <p class="h4">Register New Account?
        <a href="{{url('/register')}}" class="ad-txt h4"><strong>Sign Up</strong></a>
    </p>
</div>  
                            
       @if(count($bottomads)>0)
 <bottomadd>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <div class="row">
    <div class="col-md-12">
      <div class="carousel slide multi-item-carousel" id="theCarousel">
        <div class="carousel-inner">
            
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
                    <div class="item active">
            <div class="col-xs-4"><a href="{{$url}}"target="_blank"><img src="{{asset('uploads/ads/'.$first_img)}}" class="img-responsive"></a></div>
          </div>
               @endif
                @if($loop->iteration!=1)
           <div class="item ">
            <div class="col-xs-4"><a href="{{$url}}" target="_blank"><img src="{{asset('uploads/ads/'.$ads->image)}}" class="img-responsive" ></a></div>
          </div>
          @ENDIF
        @empty
        @endforelse
        </div>
        <!--<a class="left carousel-control a" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>-->
        <!--<a class="right carousel-control a" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>-->
      </div>
    </div>
  </div>
</bottomadd>

       <br>
    @endif   
</div>
<style>
  .form-container1 {
    background-color: #d3111a;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    /* float: left; */
}
@media(max-width: 425px){
    .form-container1 {
    background-color: #d3111a;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
@media(max-width: 320px){
    .form-container1 {
    background-color: #d3111a;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
</style>
<div class="d-flex justify-content-center align-items-center">
<div class="p-4 border rounded shadow form-container1" style="">
  <div class="">
    @if ($message = Session::get('success'))
    <div>
      <strong>{{ $message }}</strong>
    </div>
    @endif
  </div>
  <h2 class="text-center"> ENQUIRY TO HOMEIRELAND <h2>
  <form action="{{url('contact-enquiry')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="name" class="h4">Name</label>
      <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
    </div>
    <div class="form-group">
      <label for="email" class="h4">Email</label>
      <input type="email" class="form-control" name="email" palcehoder="Enter your email" required>
    </div>
    <div class="form-group">
      <label for="phone" class="h4">Phone</label>
      <input type="text" class="form-control" name="phone" placeholder="Enter your phone number" required>
    </div>
    <div class="form-group">
      <label for="message" class="h4">Message</label>
      <textarea class="form-control" name="message" rows="3" placeholder="Enter your message here" required></textarea>
    </div>
    <center>
      <button  type="submit" class="btn btn-dark">Send</button>
    </center>
  </form>
</div>
</div>

         <!--=====================TOP AD ENDS===================================-->

         
<!--============================PREMIUM  ADS ENDS=================================-->
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
@endsection