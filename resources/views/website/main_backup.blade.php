@extends('layouts.website.main')
@section('content')

<style>
.subs
{
    font-size:18px;
}
 .mainbanner {
    position: relative;
    display: inline-block;
}

.bannerbutton {
    position: absolute;
    top:250px;
    bottom: 10px; /* Adjust this value to change vertical position */
    right: 100px; /* Adjust this value to change horizontal position */
    padding: 10px 20px;
    background-color: #3498db;
    color: white;
    height:45px;
    text-decoration: none;
    border-radius: 5px;
}
 #suggestionsList li {
    padding: 8px 15px;
    margin-bottom: 5px;
    text-align: left !important; 
    cursor:pointer;
 }
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
 .main_sub_button 
 {
     margin-top:5px;
 }
 .scrollable-div {
    height: 150px !important;
    overflow: auto; 
 }
 .rounded-div
 {
     border: 2px solid #000;
 }

 }
</style>

  <div class="hero">
      <div class="hero-slide">
        @foreach($banners as $banner)
       <div 
          class="img overlay mainbanner lazy-bg"
          data-src="{{asset('uploads/banner/'.$banner->image)}}">   
         
           <a href="{{$banner->url}}" class="btn btn-primary bannerbutton" style="z-index: 9999 !important;" target="_blank"
>{{$banner->button_text}}</a>
       
       </div>
        @endforeach
      </div>

    <div class="container banner-in-container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-9">
          <h1 class="heading" data-aos="fade-up">
              <b>
            THE HOME OF YOUR DREAMS AWAITS</b>
          </h1>
          <p class="hdescription">
            Map-based search. 100% verified listings. Real property pictures.
          </p>


          <div class="col-lg-12 text-center tcutomized"  data-aos="fade-left">
            <div id="tabs">
              <ul class="nav nav-tabs justify-content-center">
                <li class="nav-item active search-cat" tabindex="0" ><p class="side_cat_red"><b>BUY</b></p></li>
                <li class="nav-item search-cat" tabindex="0"><p class="side_cat_red"><b>RENT</b></p></li>
                <li class="nav-item search-cat" tabindex="0"><p class="side_cat_red"><b>SHARE</b></p></li>
                <li class="nav-item search-cat" tabindex="0"><p class="side_cat_red"><b>NEEDED</b></p></li>
                <li class="nav-item search-cat" tabindex="0"><p class="side_cat_red"><b>COMMERCIAL</b></p></li>
                <li class="nav-item search-cat" tabindex="0"><p class="side_cat_red"><b>PARKING</b></p></li>
              </ul>

              <div class="tab-content">
                <div id="tab-1" class="col-lg-12 tab-pane active">
                  <form method="POST" action="{{url('/filter-properties')}}" id="filter-properties">
                    @csrf
                    <input type="hidden" id="prop_sub_cat" name="prop_sub_cat">
                    <input type="hidden" id="prop_sub_cat_org_name" name="prop_sub_cat_org_name" value="dsafsa">
                    <input type="hidden" class="appendthetext" name="text">
                    <input type="hidden" class="appendthetext" name="city">
                    <input type="hidden" class="appendthetext" name="county">
                    <div class="row buydiv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                      <div class="col-md-4">
                        <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs rounded-div"><b>All Properties</b></span></a>
                      </div>              
                      <div class="col-md-4">
                          <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>House For Sale</b></span>
                        </a>
                      </div>        
                      <div class="col-md-4">
                          <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Apartment For Sale</b></span>
                        </a>
                      </div>
                      <div class="col-md-4">
                          <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>New Homes</b></span>
                        </a>
                      </div>
                      <div class="col-md-4">
                          <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Site For Sale</b></span>
                        </a>
                      </div>
                    </div>
                     <div class="row rentdiv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                      <div class="col-md-4">
                        <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>All Properties</b></span></a>
                      </div>              
                      <div class="col-md-4">
                           <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>House To Rent</b></span></a>
                      </div>        
                      <div class="col-md-4">
                           <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Apartment To Rent</b></span></a>
                      </div>
                      <div class="col-md-4">
                           <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Students Accommodation</b></span></a>
                      </div>
                      <div class="col-md-4">
                           <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Holiday Homes</b></span></a>
                      </div>
                      <div class="col-md-4">
                           <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div">
                        <span class="subs"><b>Site To Rent</b></span></a>
                      </div>
                    </div>  
                    <div class="row commercialdiv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                      <div class="col-md-4">
                          
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>For Sale</b></span></a>
                      </div>              
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>To Rent</b></span></a>
                      </div>        
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Farm Land</b></span></a>
                      </div>
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Commercial Land</b></span></a>
                      </div>
                    </div> 
                    <div class="row sharediv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Shared Accommodation</b></span></a>
                      </div>              
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Students Accommodation</b></span></a>
                      </div>  
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Commercial Share</b></span></a>
                      </div> 
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Short Term Accomodation</b></span></a>
                      </div>                      
                     
                    </div>
                    <div class="row parkingdiv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                                   
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>For Sale</b></span></a>
                      </div>        
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>To Rent</b></span></a>
                      </div>
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>To Share</b></span></a>
                      </div>
                  
                    </div>
                        <div class="row neededdiv catsubdiv" style="margin-bottom:15px;border:1px solid #ced4da;padding:11px;">
                                   
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>All Property</b></span></a>
                      </div>        
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>House</b></span></a>
                      </div>
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Apartment</b></span></a>
                      </div>
                       <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Students Accomodation</b></span></a>
                      </div>
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Holiday Homes</b></span></a>
                      </div>
                      <div class="col-md-4">
                         <a style="cursor: pointer; border:1px solid #7F7D82;padding:4px;margin:4px;border-radius:9px;" class="rounded-div"><span class="subs"><b>Short Term</b></span></a>
                      </div>
                      
                  
                    </div>
                    <div class="row">
             <input type="text" class="form-control" id="addressInput" placeholder="Enter City,County">
            <div class="scrollable-div">
                <ul id="suggestionsList" style="list-style-type: none;">
                    
                </ul> 
            </div>
                    </div>


                  <!-- <input class="searchbar" type="search" placeholder="Country, City, Town or Area.." />      -->
                  </form>                 
                </div>

                <div id="tab-2" class="tab-pane">
                  <input type="search" placeholder="Country, City, Town or Area.." />
                </div>

                <div id="tab-3" class="tab-pane">
                  <input type="search" placeholder="Country, City, Town or Area.." />
                </div>

                <div id="tab-3" class="tab-pane">
                  <input type="search" placeholder="Country, City, Town or Area.." />
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
    <div class="row">
          @if(count($topads) > 0)
            <div style="border:1px solid grey;padding:5px;"> 
   <div class="row">
                <div class="maintopads-slider-wrap">
              <div class="maintopads-slider">
             @foreach($topads as $ads)
                <div class="maintopads-item">
                  <a href="{{url($ads->url)}}" class="img">
                      <div class="text-center">
                    <img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image" class="img-fluid" style="width:600px; height:360px;" class="responsive responsive_ad"/>
                      </div>
                  </a>
                </div>
             @endforeach
                <!-- .item -->
              </div>

              <div
                id="maintopads-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="maintopads"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="maintopads"
                  tabindex="-1"
                  >Next</span>
              </div>
            </div>
    </div>
    </div>
    @endif 
    </div>     
  <br>
      <div class="row mb-5 align-items-center">
        <div class="col-lg-6">
          <h2 class="font-weight-bold text-primary heading">
            <!--PROPERTIES-->
          </h2>
        </div>
        <div class="col-lg-6 text-lg-end">
          <p>
            <a href="{{url('/all-properties')}}" class="btn btn-primary text-white py-3 px-4" id="viewBtn">VIEW ALL PROPERTIES
            </a>
          </p>
        </div>
      </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
             @foreach($properties as $property)
                <div class="property-item">
                  <a href="{{url('property'.$property->id)}}" class="img">
                      <div class="text-center">
                    <img src="{{url('uploads/fetchpropertiimage'.$property->image)}}" alt="Image" class="img-fluid" style="height:250px;"/>
                      </div>
                  </a>

                  <div class="property-content">
                    <div class="price mb-2"><span>{{$property->property_type}}</span></div>
                    Price:{{$property->price}}
                    <div>
                   <span class="d-block mb-2 text-black-50 propaddr">{{$property->address}}</span>
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

    </div>
  </div>
<div class="section">
<div class="container">  
 <div class="row">
          @if(count($middleads) > 0)
            <div style="border:1px solid grey;padding:5px;"> 
   <div class="row">
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
              </div>

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
    </div>
</div>
</div>
  <div class="section section-4 bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-5">
          <h2 class="font-weight-bold heading text-primary mb-4">
            LET'S FIND HOME THAT'S PERFECT FOR YOU
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
              <h3 class="heading">2M PROPERTIES</h3>
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
              <h3 class="heading">LEGIT PROPERTIES</h3>
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
            <span class="number"><span class="countup text-primary">{{$propertirentcount}}</span></span>
            <span class="caption text-black-50"># of Buy Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">{{$propertisellcount}}</span></span>
            <span class="caption text-black-50"># of Sell Properties</span>
          </div>
        </div>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <div class="counter-wrap mb-5 mb-lg-0 d-flex flex-column align-items-center">
            <span class="number"><span class="countup text-primary">{{$propertiescount}}</span></span>
            <span class="caption text-black-50"># of All Properties</span>
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
            <h3 class="mb-3">PROPERTY FOR SALE</h3>
      
          </div>
          </a>
        </div>
        <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
            <a href="{{url('/all-properties')}}">
          <div class="box-feature"> 
            <span class="flaticon-building"></span>
            <h3 class="mb-3">PROPERTY FOR RENT</h3>
          
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

  <div class="section section-properties">
    <div class="container">
        
      <div class="row">
                  <div class="col-lg-6 text-lg-end">
          <p>
       
          </p>
        </div>
                <div class="col-lg-6 text-lg-end">
          <p>
            <a href="{{url('/automobiles')}}" class="btn btn-primary text-white py-3 px-4">VIEW ALL PROPERTIES            </a>
          </p>
        </div>
  @foreach($automobiles as $automobile)
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="property-item mb-30">
            <a href="{{url('/automobile/'.$automobile->id)}}" class="img" style="text-align:center;">
              <img src="{{url('uploads/fetchautoimage'.$automobile->image)}}" alt="Image" class="img-fluid" style="height:225px;" />
            </a>

            <div class="car-content">
              <div class="price mb-2" style="display: flex">
                <div class="col-lg-10 col-10 col-md-10">
                  <span class="d-block mb-2">
                    <h5>{{$automobile->year_manufactured}} {{$automobile->category}} {{$automobile->name}}</h5>
                  </span>
                </div>
                <div class="col-lg-2 col-2 col-md-2">
                  <i class="fa-regular fa-heart fa-xl"></i>
                  <i class="fa-solid fa-heart fa-lg" style="display: none"></i>
                </div>
              </div>

              <div class="col-lg-12 col-12 col-md-12 price m-0" style="display: flex">
                <div class="col-lg-6 col-6 col-md-6">
                  <span class="d-block mb-2 carprice">{{$automobile->price}}</span>
                </div>
                <div class="col-lg-6 col-6 col-md-6">
                  <a href="{{url('/automobile/'.$automobile->id)}}" class="btn btn-primary py-2 px-4">SEE DETAILS</a>
                </div>
              </div>
            </div>
          </div>
        </div>
    @endforeach
      </div>
    
 <div class="row">
          @if(count($bottomads) > 0)
            <div style="border:1px solid grey;padding:5px;"> 
   <div class="row">
                <div class="bottomads-slider-wrap">
              <div class="bottomads-slider">
             @foreach($bottomads as $ads)
                <div class="adss-item">
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
                aria-label="Carousel Navigation"
              >
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="bottomads"
                  tabindex="-1"
                  >Prev</span
                >
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="bottomads"
                  tabindex="-1"
                  >Next</span
                >
              </div>
            </div>
    </div>
    </div>
    @endif 
    </div>

    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').carousel();
    $('.catsubdiv').hide();
    $('.hidethree').hide();

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
      $('body').on('click', '#suggestionsList li', function() {
        $.ajaxSetup({
     headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
    });
  var text = $(this).text();
   $(".appendthetext").val(text);
         setTimeout(function() {
            $('#filter-properties').submit();
        }, 1000);  
      });
      
    $('.main_sub_button').click(function()
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

      var subcat=$(this).text();
      var match =  subcat.split(' ')[0];
  $('#prop_sub_cat').val(match);
  $('#prop_sub_cat_org_name').val(subcat);
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
    var lazyBackgrounds = [].slice.call(document.querySelectorAll('.lazy-bg'));

    if ('IntersectionObserver' in window) {
        let lazyBackgroundObserver = new IntersectionObserver(function (entries, observer) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    let lazyBackground = entry.target;
                    lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset.src + ')';
                    lazyBackgroundObserver.unobserve(lazyBackground);
                }
            });
        });

        lazyBackgrounds.forEach(function (lazyBackground) {
            lazyBackgroundObserver.observe(lazyBackground);
        });
    } else {
        // For browsers that don't support Intersection Observer
        lazyBackgrounds.forEach(function (lazyBackground) {
            lazyBackground.style.backgroundImage = 'url(' + lazyBackground.dataset.src + ')';
        });
    }
});
</script>
@endsection