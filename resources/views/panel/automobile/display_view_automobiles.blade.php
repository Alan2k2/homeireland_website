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
<main>
    <section>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                <center>
                  <h4 style="font-size:25px;paddig:10px; color:#dc3545;font-weight:800;padding-bottom:20px">{{$property->aname}}</h4>
                </center>
            </div>
         </div>
        <div class="row">
            <!--removed the following from the div style="margin-left:10%"-->
             <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 row1" >


   
          <h4 style="font-size:25px;paddig:10px; color:red;">Details</h4>
         <ul>
              <li>
              Price - €&nbsp;{{$property->price}}
          </li>
            <li>
              Name - &nbsp;{{$property->aname}}
          </li>
          <li>
              Type - &nbsp;<?php if($property->type==1){ echo"New";}
              if($property->type==2){ echo"Used";}
              if($property->type==3){ echo"Hire";}
              ?>
          </li>
          <li>
              Version - &nbsp;{{$property->version}}
          </li>
          <li>
              Year - &nbsp;{{$property->year}}
          </li>
          <li>
              Body Type - &nbsp;{{$property->body_type}}
          </li>
          <li>
              Fuel type - &nbsp;{{$property->fuel_type}}
          </li>
          <li>
              Transmission - &nbsp;{{$property->transmission}}
          </li>
          <li>
              Engine size - &nbsp;{{$property->engine_size}}
          </li>
          <li>
              	Color - &nbsp;{{$property->color}}
          </li>
          <li>
              Doors - &nbsp;{{$property->doors}}
          </li>
          <li>
              Owners - &nbsp;{{$property->owners}}
          </li>
          <li>
              Milage - &nbsp;{{$property->milage}}
          </li>
          <li>
              Tax expiry - &nbsp;{{$property->tax_exp}}
          </li>
          <li>
              NCT expiry - &nbsp;{{$property->nct_exp}}
          </li>
          </ul>
          <!--================LOCATION===================-->
          
         
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
           
         
       
          
          <!--===============LOCATION ENDS================-->
        
         
          
              <!--                  <h4> <i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Extra Images</h4>-->
              <!--                   @foreach($prop_images as $ads)-->
              
              <!--    <img src="{{asset('uploads/automobiles/'.$ads->image)}}" alt="Image 1"  style="margin:auto" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="img-fluid">-->
             
              <!--@endforeach-->
                <div class="container">
                    <h4 class="text-center-sm">
                     <i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Extra Images
                    </h4>
                <div class="row">
                     @foreach($prop_images as $ads)
                        <div class="col-lg-3 col-md-4 col-sm-6 col-12 text-center mb-3">
                         <img  src="{{asset('uploads/automobiles/'.$ads->image)}}" alt="Image 1"  style="margin:auto;" onclick="changeMainImage('uploads/properties/{{$ads->image}}')" class="img-fluid extraimg" >
                </div>
                @endforeach
                </div>
            </div>

        </div>
             <div  class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-center-sm">
            <h4><i class="fa fa-file-image-o iclass" aria-hidden="true"></i>&nbsp;Cover Image</h4>
<?php if(!empty($property->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$property->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
        </div>
        </div>
    </section>
    <section>
        
    </section>
</main><br><br>
@endsection