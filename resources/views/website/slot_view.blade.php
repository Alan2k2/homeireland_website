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
    #property-nav
    {
        display:none;
    }
    .card-pro
    {
        border:1px solid #00A79D;
        border-radius:10px;
        padding:16px;
    }
</style>
  <div
      class="hero page-inner overlay"
      style="background-image: url('uploads/slots/{{$property->banner_image}}');background-size: cover !important;background-position: center !important;"> 
      <div class="container">

        
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-9 text-center mt-5">
            <h1 class="heading" data-aos="fade-up">
              Parking Slot for {{$property->transaction_type}}
            </h1>

            <nav
              aria-label="breadcrumb"
              data-aos="fade-up"
              data-aos-delay="200">
              <ol class="breadcrumb text-center justify-content-center">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item">
                  <a href="{{url('/all-properties')}}">Properties</a>
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

    <div class="section" style="margin-top:70px;">
        
      <div class="container">
                            @if(Session::has('confirm'))
        <span class="alert alert-success">
          <p class="text-success">{{Session::get('confirm')}}</p>
        </span>
        @endif
          @if(count($topads) > 0)
  <div > 
             <div class="property-slider-wrap">
              <div class="property-slider">
             @foreach($topads as $ads)
                <div class="property-item">
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
                id="property-nav"
                class="controls"
                tabindex="0"
                aria-label="Carousel Navigation">
                <span
                  class="prev"
                  data-controls="prev"
                  aria-controls="property"
                  tabindex="-1"
                  >Prev</span>
                <span
                  class="next"
                  data-controls="next"
                  aria-controls="property"
                  tabindex="-1"
                  >Next</span>
              </div>
            </div>
    </div>

    @endif
       <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="main-image gallery-bg" style="background-image: url(uploads/slots/$property->image);">
             <img src="{{asset('uploads/slots/'.$property->image)}}">
            </div>
            <div class="thumbnail-container" id="thumbnailContainer">
              <!-- Small thumbnail images will be displayed here -->
              @if(isset($property->image))
              <input type="hidden" id="main_image_display" value="{{$property->image}}" name="">
              <img src="{{asset('uploads/slots/'.$property->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/properties/{{$property->image}}')">
              @endif

              @foreach($prop_images as $img)
              <img src="{{asset('uploads/test/'.$img->image)}}" alt="Thumbnail 1" onclick="changeImage('uploads/test/{{$img->image}}')" class="asdsad">
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
            <p class="meta">{{$property->full_address}}</p>
            <p class="text-black-50">
              {{$property->description}}
            </p>

            
 

            <div class="row mt-3 mx-0 meta">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 border"> <p><b>Slot ID </b><br><span class="utltydetails">{{$property->unique_id}}</span> </p> </div>
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
          </div>

              <br>
              </div>
<div class="container">
              <div class="row">
                     <div class="col-md-7">
 
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
                    <div class="col-md-5">
                        <div class="card-pro">

                            <h3>Quick Enquiry</h3>  
                            <input type="hidden" value="{{$property->unique_id}}" id="quick-uniq-id">
                            <input type="text" class="form-control" id="quick-name" placeholder="Name"> <br>
                            <input type="number" class="form-control" id="quick-phone" placeholder="Phone"> <br>
                            <input type="email" class="form-control" id="quick-email" placeholder="Email"> <br>
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
<button class="form-control" id="quick-btn">Send</button>
                                                        
                        </div>
                        
                    </div>
                    </div>

                                      <div class="col-md-12">
                                          <br><br>
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
 <br/>
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
   
                                <div class="col-md-12 pd_top">
                                      @if(auth::check())
                      <h3>Review</h3>
                        @endif 
<div class="container">
    @if(auth::check())
  <p class="review_btn">Write a review</p>
  <form method="POST" action="{{url('add-review')}}" >
    @csrf
  <input type="hidden" value="{{$property->id}}" name="property_id">
  <textarea rows="4" class="form-control" name="description"></textarea>
  <br>
  <button type="submit" class="btn btn-secondary">Submit</button>
</form>
  @endif 
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
                                                
                                  </div>

                    </div>              
      </div>
    </div>

<script>
$(document).ready(function()
{
   $('.asdsad').click(); 
});
$('#quick-btn').click(function()
{
    var propid=$('#quick-uniq-id').val();
    var name=$('#quick-name').val();
    var phone=$('#quick-phone').val();
    var email=$('#quick-email').val();
    var adults=$('#quick-adults').val();
    var pets=$('#quick-pets').val();
    var date=$('#quick-date').val();
    var message=$('#quick-message').val();
    
                       $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    }); 
     $(this).text('Sending..');
                      $.ajax({
                url: '/sub-prop-enq',
                method: 'POST',
                data:{propid:propid,name:name,phone:phone,email:email,adults:adults,pets:pets,date:date,message:message}, 
                success: function(data) {
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            }); 
        setTimeout(function () {
                    $('#quick-btn').text('Done');
                    $('#quick-name').val('');
                    $('#quick-phone').val('');
                    $('#quick-email').val('');
                    $('#quick-adults').val('');
                    $('#quick-pets').val('');
                    $('#quick-date').val('');
                    $('#quick-message').val('');
                    
                 }, 1000);
});
    
</script>
@endsection