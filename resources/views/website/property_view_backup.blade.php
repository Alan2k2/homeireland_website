@extends('layouts.website.main')
@section('content')
<style type="text/css">
  .pd_top
  {
    margin-top: 17px;
  }
  .review_btn
  {
    cursor: pointer;
  }
</style>
  <div
      class="hero page-inner overlay"
      style="background-image: url('uploads/properties/{{$property->banner_image}}');background-size: cover !important;background-position: center !important;"> 
      <div class="container">

        
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              {{$property->property_type}} for {{$property->transaction_type}}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="{{url('/properties')}}">Properties</a>
                </li>
                <li
                  class="breadcrumb-item active text-white-50"
                  aria-current="page">
                  {{$property->address}}
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
                  @if(Session::has('confirm'))
        <span class="alert alert-success">
          <p class="text-success">{{Session::get('confirm')}}</p>
        </span>
        @endif
        {{Session::forget('confirm')}}
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
                <!-- .item -->
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
      <br><br>
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="main-image gallery-bg" id="mainImage">
              <!-- Large image will be displayed here -->
            </div>
            <div class="thumbnail-container" id="thumbnailContainer">
              <!-- Small thumbnail images will be displayed here -->
              @if(isset($property->image))
              <input type="hidden" id="main_image_display" value="{{$property->image}}" name="">
              <img src="{{asset('uploads/properties/'.$property->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/properties/{{$property->image}}')">
              @endif

              @foreach($prop_images as $img)
              <img src="{{asset('uploads/test/'.$img->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/test/{{$img->image}}')">
              @endforeach

              <!-- Add more thumbnails as needed -->
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 parentme">
            <input type="hidden" class="findme" value="{{$property->id}}" name="">
            <p class="badge font-nunito semi-bold text-uppercase"></p>
            
            @if($chk == true)
            <span style="" class="save_property">
              <img src="{{asset('panel/images/save.png')}}" style="display:none;" class="save_image" height="50px" width="50px" /> 
              <img src="{{asset('panel/images/saved.png')}}"  class="saved_image" height="50px" width="50px"/> 
            </span>
            @else
            <span style="" class="save_property">
              <img src="{{asset('panel/images/save.png')}}" class="save_image" height="50px" width="50px" /> 
              <img src="{{asset('panel/images/saved.png')}}" style="display:none;" class="saved_image" height="50px" width="50px"/> 
            </span>            
            @endif
            <h2 class="heading text-primary">{{$property->address}}</h2>
            <p><b>Price: </b>{{$property->price}}</p>
            <p class="meta">{{$property->street}}, {{$property->area}}, {{$property->province}}</p>
            <p class="text-black-50">
              {{$property->description}}
            </p>

            
            <div class="mt-4"><span class="meta"><i class="fa fa-bed"></i>&nbsp;&nbsp;{{$property->bedrooms}} Bedroom(s) </span> <span class="meta px-3"><i class="fa fa-shower"></i>&nbsp;&nbsp;{{$property->bathrooms}} Bathroom(s) </span> </div>

            <div class="row mt-3 mx-0 meta">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p><b>Property ID </b><br><span class="utltydetails">{{$property->unique_id}}</span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p><b>Posted On</b> <br><span class="utltydetails">{{$property->created_at->format('Y-m-d');}}</span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> <p><b>Built up Area</b> <br><span class="utltydetails">{{$property->built_area}} {{$property->built_area_unit}} </span> </p> </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p><b>Views</b> <br><span class="utltydetails">{{$property->view_count}}</span> </p> </div>
            </div>
            <div class="row mt-3 meta d-flex align-items-center">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12"><a class="btn btn-dark py-2 px-3 view_contact">View Contact Details</a></div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 align-items-center pt-2">
                  <span class="meta"><i class="fa fa-envelope fa-lg"></i>&nbsp;&nbsp;</span> 
                  
                  <span class="meta px-3 chat-icon"><i class="fa fa-comment fa-lg"></i></span> 

                </div>
                
            </div>
            <div class="row mt-3 mx-0 meta hidecontactdet" style="display:none;">
              @php
              use App\Models\User;
              $user=User::where('id',$property->user_id)->first();

              $propusername=$user->name;
              $propuserphone=$user->phone;
              $propusergmail=$user->email;
              @endphp
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> 
                  <p>User Name <br><span class="utltydetails">{{$propusername}}</span> </p> 
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3  border"> 
                  <p>Phone <br><span class="utltydetails">{{$property->phone}}</span> </p> 
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6  border"> 
                  <p>Gmail<br><span class="utltydetails">{{$property->gmail}}</span> </p> 
                </div>            
            </div>
            <div class="open-chat">
              <input type="hidden" id="prop-id-main" value="{{$property->id}}" name="">
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
          <br>
            @if($amenitiescount > 0)
                    <div class="col-md-12" style="padding:20px;">
                      <h3>Amenities</h3>
                      <div class="row">
                        @foreach($amenities as $dat)
                        <div class="col-md-3">
                           <p>->{{$dat->amenity_name}}</p>
                        </div>
                        @endforeach
                        
                      </div>
                    </div>
            @endif
            <br>
                     <div class="col-md-12" style="padding:20px;">
                      <h3>Distance From</h3>
                      <div class="row">
                       <div class="col-md-4">
                         <p>School</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_school}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_school_name}}</p>  
                       </div>                       
                        
                      </div>
                       <div class="row">
                       <div class="col-md-4">
                         <p>Hospital</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_hospital}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_hospital_name}}</p>  
                       </div>                       
                        
                      </div>
                      <div class="row">
                       <div class="col-md-4">
                         <p>Busstop</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_busstop}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_busstop_name}}</p>  
                       </div>                       
                        
                      </div>
                      <div class="row">
                       <div class="col-md-4">
                         <p>Railway Station</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_railwaystation}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_railwaystation_name}}</p>  
                       </div>                       
                        
                      </div>
                      <div class="row">
                       <div class="col-md-4">
                         <p>SuperMarket</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_supermarket}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_supermarket_name}}</p>  
                       </div>                       
                        
                      </div> 
                       <div class="row">
                       <div class="col-md-4">
                         <p>Shopping</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_shopping}}</p>  
                       </div>
                       <div class="col-md-4">
                         <p>{{$property->distance_to_shopping_name}}</p>  
                       </div>                       
                        
                      </div>                      
                    </div>   
                    <br>
                                <div class="col-md-12">
                                  <div class="row">
                                    <div class="col-md-6">
                                                            <h3>Location</h3>
<iframe 
  width="400" 
  height="250" 
  frameborder="0" 
  scrolling="no" 
  marginheight="0" 
  marginwidth="0" 
  src="https://maps.google.com/maps?q={{$property->latitude}},{{$property->longitude}}&hl=es&z=14&amp;output=embed">
 </iframe>
 <br />
 <small>
   <!--<a -->
   <!-- href="https://maps.google.com/maps?q={{$property->latitude}},{{$property->longitude}}&hl=es;z=14&amp;output=embed" -->
   <!-- style="color:#0000FF;text-align:left" -->
   <!-- target="_blank">-->
   <!--  See map bigger-->
   <!--</a>-->
 </small>
                                    </div>
                                    <div class="col-md-6">
          @if(count($middleads) > 0)
  <div> 
             <div class="middletwoads-slider-wrap">
              <div class="middletwoads-slider">
             @foreach($middleads as $ads)
                <div class="middletwoads-item">
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
                id="middletwoads-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="middletwoads"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="middletwoads"
                  tabindex="-1"
                  >Next</span>
              </div>
            </div>
    </div>

    @endif
                                    </div>
                                  </div>

                    </div>
@if(auth::check())
                                <div class="col-md-12 pd_top">
                      <h3>Review</h3>
<div class="container">
  <p class="review_btn">Write a review</p>
  <form method="POST" action="{{url('add-review')}}" >
    @csrf
  <input type="hidden" value="{{$property->id}}" name="property_id">
  <textarea rows="4" class="form-control" name="description"></textarea>
  <br>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
<br>
                                            <div class="row">
          @if(count($bottomads) > 0)
  <div> 
             <div class="bottomads-slider-wrap">
              <div class="bottomads-slider">
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
                    @endif
        </div>
      </div>
    </div>
 @endsection

   