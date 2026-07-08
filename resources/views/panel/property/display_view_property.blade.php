@extends('layouts.panel.main')
@section('content')
<style>
    .iclass
    {
        color:red;
    }
    .img-fluid
    {
        height:200px;
        width:240px;
    }
    h4
    {
        font-weight:800;
        font-size:22px;
        padding:10px;
    }
    .row1{
     margin-left:10%;   
    }
    
    @media(max-width:768px){
        .row1{
           margin-left:0%;
        }
           .text-center-sm {
            text-align: center;
        }
        .extraimg{
            /*padding-left:20px;*/
        }
         .text-center {
            text-align: center;
        }
    }
</style>

<?php
// dd(session('property'));
?>
<main>
    <section>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <center>
                    <?php $main_cat_lab="";if($property->main_cat>9){ $main_cat_lab=" - Needed";}?>
                  <h4 style="font-size:25px;paddig:10px; color:#dc3545;font-weight:800;padding-bottom:20px">{{$property->main_name}}{{$main_cat_lab}}</h4>
                </center>
            </div>
         </div>
        <div class="row">
            
             <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 row1">


   
          <h4 style="font-size:25px;paddig:10px; color:red;">Details</h4>
         
          <ul  style="font-size:15px;paddig:10px">
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
            <li>Additonal One person - &nbsp;Yes</li>+
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
          
           
             

                <h4><b>
                    <span class="iclass"><i class="fa fa-map-marker "
                        aria-hidden="true"></i>
                    </span>
                    &nbsp;Address</b></h4>
             
            

           

              <ul class="no-bullets" style="font-size:15px;paddig:10px">
                <li>{{$property->county}}</li>
                <li>{{$property->city}}</li>
                <li>{{$property->town}}</li>
                <li>{{$property->street}}</li>
                <li>ERI code:{{$property->eir_code}}</li>
              </ul>
           
         
          @endif
          
          <!--===============LOCATION ENDS================-->
          <h4><i class="fa fa-grav iclass" aria-hidden="true"></i>&nbsp;Facilities</h4>
          <ul style="font-size:15px;paddig:10px">
            <?php
           if(isset($property->facilities)){
           $facilities=$property->facilities;
           for($i=0;$i<count($facilities);$i++)
           {
           ?>
            <li class="no-bullets">
              <span style="color:#94F742;font-size:20px">
                <i class="fa fa-check iclass" aria-hidden="true" style="color:#94F742"></i></span> &nbsp;
              <?=$facilities[$i]?>
            </li>
            <?php
           }
           }?>
          </ul><br>
          
              <!--                  <h4 class="text-center-sm"> <i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Extra Images</h4>-->
              <!--                   @foreach($prop_images as $ads)-->
              
              <!--    <img src="{{asset('uploads/properties/'.$ads->image)}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="img-fluid extraimg ">-->
             
              <!--@endforeach-->
              <div class="container">
                    <h4 class="text-center-sm">
                     <i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Extra Images
                    </h4>
                <div class="row">
                     @foreach($prop_images as $ads)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-3">
                         <img src="{{asset('uploads/properties/'.$ads->image)}}" alt="Image 1" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="img-fluid extraimg" style="margin:auto">
                </div>
                @endforeach
                </div>
            </div>

        </div>
<!--             <div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12">-->
<!--            <h4><i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Cover Image</h4>-->
<!--<?php if(!empty($property->main_image)){ ?>-->
<!--                                <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />-->
<!--                                <?php } else { ?>-->
<!--                                 <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />-->
<!--                                <?php } ?>-->
<!--        </div>-->
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center-sm">
                    <h4><i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Cover Image</h4>
                         <?php if(!empty($property->main_image)){ ?>
                                 <img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                            <?php } else { ?>
                                <img src="{{asset('website/images/no-image.jpg')}}" alt="Image" class="img-fluid" />
                            <?php } ?>
                </div>
        </div>
    </section>
    <section>
        
    </section>
</main><br><br>
@endsection