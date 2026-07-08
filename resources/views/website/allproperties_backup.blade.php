@extends('layouts.website.main') 
@section('content')
<style>
    .site-menu li a
    {
        color:black !important;
    }
        .site-menu li a:hover
    {
        color:#00A79D !important;
    }
    .site-nav
    {
        background:#D7DCDB;
    }
    .w-5{
        display:none !important;
    }
</style>
<!--<div-->
<!--      class="hero page-inner overlay"-->
<!--      style="background-image: url('website/images/hero_bg_1.jpg') ;"-->
<!--    >-->
<!--      <div class="container">-->
<!--        <div class="row justify-content-center align-items-center">-->
<!--          <div class="col-lg-9 text-center mt-5">-->
<!--            <h1 class="heading" data-aos="fade-up">Properties</h1>-->

<!--            <nav-->
<!--              aria-label="breadcrumb"-->
<!--              data-aos="fade-up"-->
<!--              data-aos-delay="200"-->
<!--            >-->
<!--              <ol class="breadcrumb text-center justify-content-center">-->
<!--                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>-->
<!--                <li-->
<!--                  class="breadcrumb-item active text-white-50"-->
<!--                  aria-current="page"-->
<!--                >-->
<!--                  Properties -->
<!--                </li>-->
<!--              </ol>-->
<!--            </nav>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

<div class="section">

 <div class="container">
     <br><br><br>
     <center>
         @if(isset($sub1) && isset($main1))
 @if($main1 == 'Commercial') 
    <h2 class="center-heading font-weight-bold text-primary heading" style="padding-top:13px;">
      @if($sub1 == 'Commercial Land' || $sub1 == 'Farm Land') 
      
      @else
      
  Commercial Properties 
      @endif
  {{$sub1}}
  
   </h2>
 @else
 
         
                 <h2 class="center-heading mt-4 font-weight-bold text-primary heading" style="padding-top:13px;">

                     @if($sub1 == 'dsafsa')
                     
                     ALL PROPERTIES
                     @else
                     {{ Str::upper($sub1) }}
                     @endif
                
         
                @if($main1 == 'Needed')
                @elseif($main1 == 'Share')
                @php
                
                $main1 = '';
                
                @endphp
                @else
                 @if($sub1 == 'House For Sale' || $sub1 == 'Apartment For Sale' || $sub1 == 'Site For Sale' || $sub1 == 'House To Rent' || $sub1 == 'Apartment To Rent' || $sub1 == 'Site To Rent')
                 @else
                  @if($main1 == 'Rent')
                  
                  TO
                  @else
                  FOR
                  @endif
                  
                 @endif
                
                @endif
                @php
                if($main1 == 'Buy')
                {
                $main1 = 'Buy';
                 if($sub1 == 'House For Sale' || $sub1 == 'Apartment For Sale' || $sub1 == 'Site For Sale')
                 {
                 $main1 = '';
                 }
                }
                if($main1 == 'Rent')
                {
                $main1 = 'Rent';
                 if($sub1 == 'House To Rent' || $sub1 == 'Apartment To Rent' || $sub1 == 'Site To Rent')
                 {
                 $main1 = '';
                 }
                }                
                @endphp
               {{ Str::upper($main1) }}
            </h2>
            @endif
          @endif
            </center>
<hr>
          @if(count($topads) > 0)
  <div > 
             <div class="adss-slider-wrap">
              <div class="adss-slider">
             @foreach($topads as $ads)
                <div class="adss-item">
                  <a href="{{url($ads->url)}}" class="img">
                      <div class="text-center">
                    <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>
                      </div>
                  </a>
                </div>
@endforeach
                 .item 
              </div>

              <div
                id="adss-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="adss"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="adss"
                  tabindex="-1"
                  >Next</span>
              </div>
            </div>
    </div>

    @endif
<br>
            <form method="GET" action="{{url('filter-properties')}}">
     @csrf   
     <div class="row">
      <div class="col-md-3">
        <label>Location</label>
<input type="hidden" value={{isset($prop_sub_cat)?$prop_sub_cat:''}} name="prop_sub_cat">
<input type="hidden"  value={{isset($sub1)?$sub1:''}} name="prop_sub_cat_org_name">
<input type="text" id="addressInput" name="city" value="{{isset($string)?$string:''}}" class="form-control">

            <div class="scrollable-div" style=" min-height: min-content !important;overflow:auto !important;">
                <ul id="suggestionsList" style="list-style-type: none;">
                    
                </ul> 
            </div>
        @if(isset($req_province))
        <input type="hidden" value="{{$req_province}}" id="province_main">
        @endif
      </div>
   
      <div class="col-md-2">
        <label>Price</label>
        <select class="form-control" name="price">
          <option selected disabled>Select An Option</option>
           @if(isset($req_price))
          <option value="100-200" {{$req_price=='100-200'?'selected':''}}>100-200</option>
          <option value="200-300" {{$req_price=='200-300'?'selected':''}}>200-300</option>
          <option value="300-400" {{$req_price=='300-400'?'selected':''}}>300-400</option>
          <option value="400-500" {{$req_price=='400-500'?'selected':''}}>400-500</option>
          <option value="500-600" {{$req_price=='500-600'?'selected':''}}>500-600</option>
          <option value="600-700" {{$req_price=='600-700'?'selected':''}}>600-700</option>
          <option value="700-800" {{$req_price=='700-800'?'selected':''}}>700-800</option>
          <option value="800-900" {{$req_price=='800-900'?'selected':''}}>800-900</option> 
          @else

          <option value="100-200">100-200</option>
          <option value="200-300">200-300</option>
          <option value="300-400">300-400</option>
          <option value="400-500">400-500</option>
          <option value="500-600">500-600</option>
          <option value="600-700">600-700</option>
          <option value="700-800">700-800</option>
          <option value="800-900">800-900</option>                   
          @endif

        </select>
      </div>
      <div class="col-md-2">
        <label>Rooms</label>
        <select class="form-control" name="rooms">
          <option selected disabled>Select An Option</option>     
          @if(isset($req_rooms))
          <option value="1" {{$req_rooms=='1'?'selected':''}}>1</option>
          <option value="2" {{$req_rooms=='2'?'selected':''}}>2</option>
          <option value="3" {{$req_rooms=='3'?'selected':''}}>3</option>
          <option value="4" {{$req_rooms=='4'?'selected':''}}>4</option>
          <option value="5" {{$req_rooms=='5'?'selected':''}}>5</option>
          <option value="6" {{$req_rooms=='6'?'selected':''}}>6</option>
          <option value="7" {{$req_rooms=='7'?'selected':''}}>7</option>
          <option value="8" {{$req_rooms=='8'?'selected':''}}>8</option>
          <option value="9" {{$req_rooms=='9'?'selected':''}}>9</option>
          <option value="10" {{$req_rooms=='10'?'selected':''}}>10</option>
          <option value="11" {{$req_rooms=='11'?'selected':''}}>11</option>
          <option value="12" {{$req_rooms=='12'?'selected':''}}>12</option>
          @else
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
          <option value="12">12</option>         
          @endif
        </select>  
        </div> 
      <div class="col-md-2">
        <label>Type</label>
        <select class="form-control" name="type">
          <option selected disabled>Select An Option</option>     
          @if(isset($type))
          <option value="Sell" {{$type=='Sell'?'selected':''}}>Sell</option>
          <option value="Rent" {{$type=='Rent'?'selected':''}}>Rent</option>
          <option value="Share" {{$type=='Share'?'selected':''}}>Share</option>
          @else
          <option value="Sell">Sell</option>
          <option value="Rent">Rent</option>
          <option value="Share">Share</option>
          @endif
        </select>  
        </div> 
      <div class="col-md-3">
       <button type="submit" class="form-control" style="margin-top:21px;">Search</button>
      </div>
     </div>
    </form>
    <br>

            <h4 class="font-weight-bold text-primary heading text-center" style="padding-top:15px;padding-bottom:15px;">
              FEATURED PROPERTIES
            </h4>
        @if(count($featuredproperties) > 0)
        <div class="row" >
          <div class="col-12" >
            <div class="property-slider-wrap">
              <div class="property-slider" >
             @foreach($featuredproperties as $property)
                <div class="property-item"  style="height:500px;">
                  <a href="{{url('property'.$property->id)}}" class="img text-center">
                     <div class="text-center">

                                        @if(isset($property->image))
                    <img src="{{url('uploads/fetchpropertiimage'.$property->image)}}" alt="Image" class="img-fluid" style="height:250px;" />
                    @else
                    <img src="{{asset('website/images/no-image (1).jpg')}}" alt="Image" class="img-fluid" style="height:250px;" />
                    @endif
                    </div>
                  </a>

                  <div class="property-content" >
                    <div class="price mb-2"><span>{{$property->property_type}}</span></div>
                    Price:{{$property->price}}
                    <div>
                   <span class="d-block mb-2 text-black-50">{{$property->address}}</span>
                      <span class="city d-block mb-3">{{$property->district}},{{$property->state}},{{$property->country}}</span>
                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">{{$property->bedrooms}} beds</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">{{$property->bathrooms}} baths</span>
                        </span>
                      </div>

                      <a
                        href="{{url('property'.$property->id)}}"
                        class="btn btn-danger py-2 px-3"
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
      @if(count($featuredproperties) > 0)  
      @if(count($middleads) > 0)
        <div> 
         <div class="middleads-slider-wrap">
          <div class="middleads-slider">
            @foreach($middleads as $ads)
                <div class="middleads-item">
                  <a href="{{url($ads->url)}}" class="img">
                      <div class="text-center">
                    <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>
                      </div>
                  </a>
                </div>
            @endforeach
                <!-- .item -->
                <div
                id="middleads-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="middleads"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="middleads"
                  tabindex="-1"
                  >Next</span>
              </div>
              </div>

              
            </div>
    </div>

    @endif
    @endif
      </div>
    </div>
        <div class="container">
            <h4 class="font-weight-bold text-primary heading text-center">
              ALL PROPERTIES
            </h4>
        </div>
   @if(count($allproperties) > 0)
    <div class="section section-properties" >
      <div class="container">
        <div class="row" >
          @foreach($allproperties as $property)
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" >             
                <div class="property-item mt-2" >
                  <a href="{{url('property'.$property->id)}}" class="img">
                      <div class="text-center">
                    @if(isset($property->image))
                    <img src="{{url('uploads/fetchpropertiimage'.$property->image)}}" alt="Image" class="img-fluid" style="height:250px;" />
                    @else
                    <img src="{{asset('website/images/no-image (1).jpg')}}" alt="Image" class="img-fluid" style="height:250px;" />
                    @endif
                    
                    </div>
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>{{$property->property_type}}</span></div>
                    Price:{{$property->price}}
                    <div>
                   <span class="d-block mb-2 text-black-50">{{$property->address}}</span>
                      <span class="city d-block mb-3">{{$property->district}},{{$property->state}},{{$property->country}}</span>
                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">{{$property->bedrooms}} beds</span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">{{$property->bathrooms}} baths</span>
                        </span>
                      </div>

                      <a
                        href="{{url('property'.$property->id)}}"
                        class="btn btn-danger py-2 px-3"
                        >DETAILS</a
                      >
                    </div>
                  </div>
                </div>
              </div>
           @endforeach  
           <div class="col-md-12">
              <center>{{$allproperties->links()}}</center> 
           </div>
           
        </div>
        <div class="row align-items-center py-5">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 text-center  ">
            <div class="custom-pagination ">
              <!-- <a href="#">1</a>
              <a href="#" class="active">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <a href="#">5</a> -->
            </div>
          </div>
        </div>
        <div class="row  ">
          @if(count($bottomads) > 0)
  <div> 
             <div class="bottomads-slider-wrap">
              <div class="bottomads-slider ">
             @foreach($bottomads as $ads)
                <div class="bottomads-item">
                  <a href="{{url($ads->url)}}" class="img">
                      <div class="text-center">
                    <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>
                      </div>
                  </a>
                </div>
@endforeach
                <!-- .item -->
              </div>

              <div
                id="bottomads-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="bottomads"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="bottomads"
                  tabindex="-1"
                  >Next</span>
              </div>
            </div>
    </div>

    @endif
  </div> 
      </div>
    </div>
    @else
    <div class="container ">
        <br>
     <p>No Items To Show</p>
     </div>
     {{Session::forget('cat_session')}}
@endif
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function()
{
$('.hidethree').hide();
var currentval = $('#province_main').val();
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
  $('.filter-search').change(function()
  {
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
</script>
<script>
$(document).ready(function() {
const apiKey = 'a84cc6f1fd5246cd8d480e1af84939c0';



$('#addressInput').on('input', function() {
    const inputText = $(this).val();
    const suggestionsList = $('#suggestionsList');
    $('.scrollable-div').css('height','250px');

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

     $('body').on('click', '#suggestionsList li', function() {
     var val = $(this).text();
     $('.scrollable-div').css('height','0px');
     $('#addressInput').val(val);
     $('#addressonmainInput').val(val);
     $('#suggestionsList').empty();
   
  });
</script>
@endsection