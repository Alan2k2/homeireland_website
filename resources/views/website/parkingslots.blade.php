@extends('layouts.website.main') 
@section('content')

<!--<div class="hero page-inner overlay"-->
<!--      style="background-image: url('website/images/hero_bg_1.jpg')">-->
<!--      <div class="container">-->
<!--        <div class="row justify-content-center align-items-center">-->
<!--          <div class="col-lg-9 text-center mt-5">-->
<!--            <h1 class="heading" data-aos="fade-up">Parking Slots</h1>-->

<!--            <nav-->
<!--              aria-label="breadcrumb"-->
<!--              data-aos="fade-up"-->
<!--              data-aos-delay="200">-->
<!--              <ol class="breadcrumb text-center justify-content-center">-->
<!--                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>-->
<!--                <li-->
<!--                  class="breadcrumb-item active text-white-50"-->
<!--                  aria-current="page"-->
<!--                >-->
<!--                  Parking Slots -->
<!--                </li>-->
<!--              </ol>-->
<!--            </nav>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->

    <div class="section">
      <div class="container">
          <br><br>
          
           <center>
            <h2 class="center-heading font-weight-bold text-primary heading">  
            Parking Slots
          @if(isset($parking_cat))
          For 
            @if($parking_cat == 'Rent')
                  Rent &nbsp; 
             @elseif($parking_cat == 'Sell')
            Sale &nbsp; 
             @elseif($parking_cat == 'Share')
             Share &nbsp; 
            @endif
          @endif
          </h2> 
            </center>  
            <form method="GET" action="{{url('filter-slots')}}">
     @csrf  
     
     <div class="row">
      <div class="col-md-3">

      </div>
      <div class="col-md-3">
          <br>
<input type="hidden"  value={{isset($sub1)?$sub1:''}} name="prop_sub_cat_org_name">
<input type="text" id="addressInput" name="city" value="{{isset($string)?$string:''}}" class="form-control" placeholder="Enter CIty or Counties">

            <div class="scrollable-div">
                <ul id="suggestionsList" style="list-style-type: none;">
                    
                </ul> 
            </div>
      </div>
      <div class="col-md-3">
          
        <button type="submit" class="form-control" style="margin-top:21px;">Search</button>
        </div>  
      <div class="col-md-3">

      </div>
     </div>
    </form>
    <br>
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 text-center mx-auto">
            <h4 class="font-weight-bold text-primary heading">
              Featured Slots
            </h4>
          </div>
        </div>

        @if($featuredslotscount > 0)
                
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
             @foreach($featuredslots as $property)
                <div class="property-item">
                    <div class="text-center">
                  <a href="{{url('slot'.$property->id)}}" class="img">
                    <img src="{{asset('uploads/slots/'.$property->image)}}" alt="Image" class="img-fluid" />
                  </a>
                  </div>

                  <div class="property-content">
                    <div class="price mb-2"><span>{{$property->price}}</span></div>
                    <div>
                   <span class="d-block mb-2 text-black-50">{{$property->address}}</span>
                      <span class="city d-block mb-3">{{$property->district}},{{$property->state}},{{$property->country}}</span>
                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="icon-bed me-2"></span>
                          <span class="caption">{{$property->bedrooms}} </span>
                        </span>
                        <span class="d-block d-flex align-items-center">
                          <span class="icon-bath me-2"></span>
                          <span class="caption">{{$property->bathrooms}}</span>
                        </span>
                      </div>

                      <a
                        href="{{url('slot'.$property->id)}}"
                        class="btn btn-primary py-2 px-3"
                        >See details</a
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
    
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6 text-center mx-auto">
            <h4 class="font-weight-bold text-primary heading">
              All Slots
            </h4>
          </div>
        </div>
   @if($parkingslotscount > 0)
    <div class="section section-properties">
      <div class="container">
        <div class="row">
          @foreach($parkingslots as $property)
          <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">             
                <div class="property-item">
                    <div class="text-center">
                  <a href="{{url('slot'.$property->id)}}" class="img">
                    <img src="{{asset('uploads/slots/'.$property->image)}}" alt="Image" class="img-fluid" />
                  </a>
                  </div>
                  <div class="property-content">
                    <div class="price mb-2"><span>For {{$property->transaction_type}}</span></div>
                    <div>
                        <p>Price: {{$property->price}}</p>
                   <span class="d-block mb-2 text-black-50">{{$property->full_address}}</span>
                      <span class="city d-block mb-3">{{$property->district}},{{$property->state}},{{$property->country}}</span>
                      <!--<div class="specs d-flex mb-4">-->
                      <!--  <span class="d-block d-flex align-items-center me-3">-->
                      <!--    <span class="icon-bed me-2"></span>-->
                      <!--    <span class="caption">{{$property->bedrooms}}</span>-->
                      <!--  </span>-->
                      <!--  <span class="d-block d-flex align-items-center">-->
                      <!--    <span class="icon-bath me-2"></span>-->
                      <!--    <span class="caption">{{$property->bathrooms}}</span>-->
                      <!--  </span>-->
                      <!--</div>-->

                      <a
                        href="{{url('slot'.$property->id)}}"
                        class="btn btn-primary py-2 px-3"
                        >See details</a
                      >
                    </div>
                  </div>
                </div>
              </div>
           @endforeach  
           
        </div>
        <div class="row align-items-center py-5">
          <div class="col-lg-3"></div>
          <div class="col-lg-6 text-center">
            <div class="custom-pagination">

            </div>
          </div>
        </div>
      </div>
    </div>
    {{Session::forget('city_session')}}
@endif
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

     $('body').on('click', '#suggestionsList li', function() {
     var val = $(this).text();
     $('#addressInput').val(val);
     $('#addressonmainInput').val(val);
     $('#suggestionsList').empty();
   
  });
</script>
@endsection