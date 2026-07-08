@extends('layouts.website.main')
@section('content')

<style>

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
 .scrollable-div {
    height: 100px ;
overflow:hidden; 
overflow-y:scroll;    
 }
 @media (min-width: 600px) {
 .banner-in-container
 {
     margin-top:-50px;
 }
 }
  @media (max-width: 600px) {
 .banner-in-container
 {
     margin-top:10px;
 }
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
 }
</style>

  <div class="hero">
      <div class="hero-slide">
        @foreach($banners as $banner)
       <div 
          class="img overlay mainbanner"
          style="background-image: url('{{asset('uploads/banner/'.$banner->image)}}">            
       </div>
        @endforeach
      </div>

    <div class="container banner-in-container mt-4 " >
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9" >
           <h1 class="heading" data-aos="fade-up"><b>
              NEW AND USED CARS FOR SALE</b>
            </h1>
            <p class="hdescription">
              Find your Dream Car or Sell your Used One with Ease.
            </p>
            <!--<a href="{{url('/automobiles')}}" class="btn bg-primary mb-4 text-light" >Browse all cars</a>-->

          <div class="col-lg-12 text-center tcutomized bg-light bg-opacity-75 " style:="height:50px;">
            <div id="tabs" >

              <div class="tab-content ">
                <div id="tab-1" class="col-lg-12 tab-pane active">
                <form method="post" action="{{url('filter-automobiles')}}"> 
                  @csrf
                  
 
                      <div class="pt-2  row ">
                          
   
                          <div class="col-lg-2 mt-2" style=";">
                              <select class="form-control" name="category">
                                <option value="any">Any Brand</option>
                         
                                @foreach ($all_auto as $aut => $posts) 
                                <option value="{{$aut}}" {{$param2 == $aut?'selected':''}}>{{$aut}}</option>

                                @endforeach
                              </select>
                            
                          </div>
                                <div class="col-lg-2 mt-2 col-xs-6" style=;">
                              <select class="form-control" name="name">
                                <option value="any">Any </option>
                               @foreach ($all_auto_name as $aut => $posts) 
                                <option value="{{$aut}}" {{$param1 == $aut?'selected':''}}>{{$aut}}</option>
                                @endforeach
                                <!-- Add more options as needed -->
                              </select>

                          </div>
                          
                    
                                          <div class="col-lg-4 mt-2 " style="width;">
          <input type="text" class="form-control" id="addressInput" placeholder="Enter City,County" name="city" data-bs-toggle="collapse" href="#collapseExample">
     <div class="scrollable-div  collapse " id="collapseExample" style="height:200px; ">
                <ul id="suggestionsList"  style="list-style-type: none;"  class="appendthetext" >
                    
                </ul> 
            </div>
            
                          </div>
                          <div class="col-lg-4 mt-1" ">                       
                                <button type="submit" class=" btn btn-danger text-light border-0 " >
                                  <i class="fas fa-search"></i>&nbsp; Search
                                </button>                                              
                          </div>
                      </div>
                                        
     <!--                 <div style="display: flex;" class="pt-2">-->
                    
     <!--                                     <div class="col-lg-12" style="width:100%;">-->
     <!--     <input type="text" class="form-control" id="addressInput" placeholder="Enter City,County" name="city" data-bs-toggle="collapse" href="#collapseExample">-->
     <!--<div class="scrollable-div  collapse position-absoute" id="collapseExample" style="height:200px; ">-->
     <!--           <ul id="suggestionsList"  style="list-style-type: none;"  class="appendthetext" >-->
                    
     <!--           </ul> -->
     <!--       </div>-->
     <!--                     </div>-->
     <!--                 </div>-->
                      <div style="" class="pt-2 position-relative mt-5">
                          <!--<div class="col-lg-6 " style="width:50%;">                       -->
                          <!--      <button type="submit" class=" btn btn-danger text-light border-0 position-absolute top-0 start-50 translate-middle " ">-->
                          <!--        <i class="fas fa-search"></i>&nbsp;Quick Search-->
                          <!--      </button>                                              -->
                          <!--</div>-->
                          
                      </div>
                      
              </div>   
                </form>               
                </div>

              </div>
            </div>
          </div>
        </div>
        <!--<div class="col-lg-3 carBox" style="background-image: url('{{asset('website/images/black-mini-coupe-road.jpg')}}')">-->
        <!--  <a class="car-box-head" href="#">-->
        <!--    <h3 class="heading2" data-aos="fade-up">-->
        <!--      New and Used Cars for sale-->
        <!--    </h3>-->
        <!--  </a>-->
        <!--  <a href="{{url('/automobiles')}}" class="btn btn-primary py-2 px-4"> Buy Now</a>-->
        <!--</div>-->
      </div>
    </div>
  </div>

  <div class="section">
    <div class="container">
        @if(count($topads) > 0)
        <div style="border:1px solid black;padding:5px;">
      <div class="row aditems">
        @foreach($topads as $ad)
  <div class="col-md-6 aditem text-center">
      <div class="aditemin">
    <a href="{{$ad->url}}" target="_blank">
    <img src="{{asset('uploads/ads/'.$ad->image)}}" style="width:600px; height:360px;" class="responsive responsive_ad">
    </a>
    </div>
  </div>
  @endforeach 
  </div>
  </div>
  @endif
  @if(Request::segment(1) == 'filter-automobiles')
  @else
          <div class="row mb-5 align-items-left">
          <div class="col-lg-6 text-left mx-auto">
            <h2 class="font-weight-bold text-primary text-center heading">
              TOP CATEGORIES
            </h2>
          </div>
        </div>
            <form method="post" action="filter-automobiles" id="filter-auto-form">
        @csrf
        <input type="hidden" id="append-hide-auto" name="type">
     </form>
<div class="container-auto" style="z-index:1 !important;">
  
  <div class="item-auto">
      <img src="{{asset('website/icons/Offroad_Vehicle.jpg')}}" >
      <h6>New Cars</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/vintage_car.png')}}" >
      <h6>Vintage Cars</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/truck.png')}}" >      
  <h6>Commercial</h6>
  </div>
    <div class="item-auto">
      <img src="{{asset('website/icons/car_mod.png')}}">
      <h6>Modified Cars</h6>
  </div>

</div>
<div class="container-auto">
  <div class="item-auto">
      <img src="{{asset('website/icons/machinery.png')}}" >
      <h6>Plant<br> Machinery</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/motor-sports.png')}}" >
      <h6>Motor Bikes</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/breaks.png')}}" >      
  <h6>Breaking & <br>Repairables</h6>
  </div>
    <div class="item-auto">
      <img src="{{asset('website/icons/motorcycle.png')}}" >
      <h6>Scooters</h6>
  </div>

</div>
<div class="container-auto">
  <div class="item-auto">
      <img src="{{asset('website/icons/cruise.png')}}">
      <h6>Boats & <br>Jet Skies</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/caravan.png')}}">
      <h6>Caravans</h6>
  </div>
  <div class="item-auto">
      <img src="{{asset('website/icons/brake.png')}}">      
  <h6>Car Parts</h6>
  </div>
    <div class="item-auto">
      <img src="{{asset('website/icons/retro.png')}}">      
  <h6>Vintage Bikes</h6>
  </div>
</div>
@endif
  <br>
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
         
        </div>
        <div class="col-lg-6 text-lg-end">
      
        </div>
      </div>
                <div class="row mb-5 align-items-left">
          <div class="col-lg-6 text-left mx-auto">
            <h2 class="font-weight-bold text-center text-primary heading">
              FEATURED
            </h2>
          </div>
        </div>
          @if(count($data) > 0)

        <div class="row" >
          <div class="col-12" >
            <div class="property-slider-wrap">
              <div class="property-slider">
             @foreach($data as $dat)
                <div class="property-item" style="height:600px;">
                  <a href="{{url('automobile/'.$dat->id)}}" class="img">
                      <div class="text-center">
                          
                    <img src="{{url('uploads/fetchautoimage'.$dat->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>
                      </div>
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>{{$dat->category}} {{$dat->name}}</span></div>
                    Price:{{$dat->price}}
                    <div>
                   <span class="d-block mb-2 text-black-50 propaddr">{{$dat->description}}</span>
                      <span class="city d-block mb-3">{{$dat->full_address}}</span>
                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="me-2"><img src="{{asset('website/images/calendar.png')}}" height="15px" width="15px"></span>
                          <span class="caption">{{isset($dat->year_manufactured)?'Manufactured In '.$dat->year_manufactured:''}}</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="me-2"><img src="{{asset('website/images/distance.png')}}" height="15px" width="15px"></span>
                          <span class="caption">{{isset($dat->kilometer_driven)?$dat->kilometer_driven.' Km Driven':''}} </span>
                        </span>
                      </div>

                      <a
                        href="{{url('automobile/'.$dat->id)}}"
                        class="btn btn-primary py-2 px-3"
                        >DETAILS</a
                      >
                    </div>
                  </div>
                </div>
@endforeach
                <!-- .item -->
              </div>

              <div
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
          </div>
        </div>    
        @else
        <p>No Items To Show</p>
        @endif
    </div>
  </div>
<!--<div class="section">-->
<!--<div class="container">  -->
<!--@if(count($middleads) > 0)-->
<!-- <div style="border:1px solid black;">     -->
<!-- <div class="row">-->
<!--  @foreach($middleads as $ad)-->
<!--  <div class="col-md-4 aditem text-center">-->
<!--      <div class="aditemin">-->
<!--    <a href="{{$ad->url}}" target="_blank">-->
<!--    <img src="{{asset('uploads/ads/'.$ad->image)}}" style="width:380px; height:240px;" class="responsive responsive_ad">-->
<!--    </a>-->
<!--    </div>-->
<!--  </div>-->
<!--  @endforeach -->
<!--    </div>-->
<!--    </div>-->
<!--    @endif-->
<!--</div>-->
<!--</div>-->
        <div class="row  align-items-center" id="propspot">
 
          <div class="col-lg-6 text-center mx-auto">
            <h2 class="font-weight-bold text-primary heading">
             ALL AUTOMOBILES
            </h2>
          </div>
        </div>
        @if(count($allautos) > 0)

    <div class="section section-properties">
      <div class="container">
        <div class="row">
          @foreach($allautos as $auto)
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding:10px;"">             
                <div class="property-item" style="height:600px;">
                  <a href="{{url('automobile/'.$auto->id)}}" class="img">
                      <div class="text-center">
                    <img src="{{url('uploads/fetchautoimage'.$auto->image)}}" alt="Image" class="img-fluid" style="height:250px;" />
                    </div>
                  </a>

                  <div class="property-content">
                      <div class="price mb-2"><span>{{$auto->category}} {{$auto->name}}</span></div>
                    <div class="price mb-2"><span>{{$auto->property_type}}</span></div>
                    Price:{{$auto->price}}
                    <div>
                    <span class="d-block mb-2 text-black-50 propaddr">{{$auto->description}}</span>
                      <span class="city d-block mb-3">{{$auto->full_address}}</span>
                         <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="me-2"><img src="{{asset('website/images/calendar.png')}}" height="15px" width="15px"></span>
                          <span class="caption">{{isset($auto->year_manufactured)?'Manufactured In '.$auto->year_manufactured:''}}</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="me-2"><img src="{{asset('website/images/distance.png')}}" height="15px" width="15px"></span>
                          <span class="caption">{{isset($auto->kilometer_driven)?$auto->kilometer_driven.' Km Driven':''}} </span>
                        </span>
                      </div>

                      <a
                        href="{{url('automobile/'.$auto->id)}}"
                        class="btn btn-danger py-2 px-3"
                        >DETAILS</a
                      >
                    </div>
                  </div>
                </div>
              </div>
           @endforeach         
        </div>
        <!--<div class="row align-items-center py-5">-->
        <!--  <div class="col-lg-3"></div>-->
        <!--  <div class="col-lg-6 text-center">-->
        <!--    <div class="custom-pagination">-->
              <!-- <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a> -->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="row">
                @foreach($bottomads as $ad)
  <div class="col-md-4 aditem">
    <a href="{{$ad->url}}" target="_blank">
    <img src="{{asset('uploads/ads/'.$ad->image)}}" width="300px" height="200px">
    </a>
  </div>
  @endforeach
  </div> 
      </div>
    </div>
            @else
            <div class="container">
             <p>No Items To Show</p>
            </div>
        @endif

  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            LET'S FIND VEHICLE THAT'S PERFECT FOR YOU
          </h2>
          <p class="text-black-50">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
            enim pariatur similique debitis vel nisi qui reprehenderit.
          </p>
        </div>
      </div>
      <div class="row justify-content-between mb-5 align-items-center">
        <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
          <div class="img-about dots">
            <img src="{{url('website/images/home_bottom.jpeg')}}" alt="Image" class="img-fluid" />
          </div>
        </div>
        <div class="col-lg-4 resp_hide_div">
          <div class="d-flex feature-h align-items-center">
            <span class="wrap-icon me-3">
              <span class="icon-home2"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">2M Automobiles</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
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
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>

          <div class="d-flex feature-h align-items-center">
            <span class="wrap-icon me-3">
              <span class="icon-security"></span>
            </span>
            <div class="feature-text">
              <h3 class="heading">LEGIT Automobiles</h3>
              <p class="text-black-50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Nostrum iste.
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row section-counter mt-5 resp_hide_div">
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">{{1}}</span></span>
            <span class="caption text-black-50"># of Buy Automobiles</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">{{1}}</span></span>
            <span class="caption text-black-50"># of Sell Automobiles</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">{{1}}</span></span>
            <span class="caption text-black-50"># of All Automobiles</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">4</span></span>
            <span class="caption text-black-50"># of Agents</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="features-1">
    <div class="container">
      <div class="row">
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
            <a href="{{url('/all-properties')}}">
          <div class="box-feature">
            <span class="flaticon-house"></span>
            <h3 class="mb-3">AUTOMOBILES FOR SALE</h3>
      
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="{{url('/all-properties')}}">
          <div class="box-feature">
            <span class="flaticon-building"></span>
            <h3 class="mb-3">AUTOMOBILES FOR RENT</h3>
          
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
         <a href="{{url('/all-properties')}}">
          <div class="box-feature">
            <span class="flaticon-house-3"></span>
            <h3 class="mb-3">REAL ESTATE AGENT</h3>
           
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
            <a href="{{url('/automobiles')}}">
          <div class="box-feature">
            <span class="flaticon-house-1"></span>
            <h3 class="mb-3">AUTOMOBILES FOR SALE</h3>
            
          </div>
          </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--<div class="hero page-inner overlay" style="background-image: url('website/images/cars_bnr.jpg')">-->
  <!--  <div class="container">-->
  <!--    <div class="row justify-content-center align-items-center">-->
  <!--      <div class="col-lg-8 text-center mt-5">-->
  <!--        <h2 class="heading_h2" data-aos="fade-up">-->
  <!--          Discover the Best Deals on Automobiles-->
  <!--        </h2>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">

      $('body').on('click', '#suggestionsList li', function() {
        $.ajaxSetup({
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
     var text = $(this).text();
     $(".appendthetext").val(text);
     $("#suggestionsList").empty();
     
      });
      

  $(document).ready(function(){
    $('.catsubdiv').hide();
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
   $('#filter-properties').submit();
  });
  
  $('.subs').click(function()
  {
      $.ajaxSetup({
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
   });     
      var subcat=$(this).text();
      var match =  subcat.split(' ')[0];
  $('#prop_sub_cat').val(match);
  });
  $('.item-auto').click(function()
  {
      var thisval=$(this).text();
      $('#append-hide-auto').val(thisval);
      setTimeout(function () {
                 $('#filter-auto-form').submit();
                 }, 500);

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
@endsection