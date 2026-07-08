<?php
// echo"<pre>";print_r($data);exit;
?>
@extends('layouts.website.main') 
@section('content')
<style>
 .property-ad-img {
    height: 350px;
    width: 100%;
  }
  .bt
  {
      margin-top:-200px;
      margin-left:0px;
  }
  .main
  {
     margin-top:100px; 
      margin-left:0px;
  }
  .form-group input {
        font-size:13px;
    }
  
   @media(max-width:600px){
    #myForm{
      border-radius: 10px;
      margin: 0px 6px;
    }
    .searchbtn{
        margin-bottom:5px;
    }
    .form-group input {
        font-size:13px;
    }
  
  }
  
   .form-control.selectClass {
        font-size: 14px; /* Default font size */
    }

    /* Reduce font size on small devices */
    @media (max-width: 576px) {
        .form-control.selectClass {
            font-size: 12px; /* Reduced font size for small devices */
        }
    }
    
    @media(min-width:1200px){
         .img-responsive{
        margin-left:15%;
    }
    .img-responsive1{
        margin-left:0%!important;
    }
    }
  
  
  .submitbtn{
      width:150px;
      height:auto;
      padding:10px;
      background-color:#dc3545;
      border:1px solid #dc3545;
      border-radius:25px;
      color:white;
      margin-bottom:5px;
  }
  
  .clearbtn{
      border:1px solid #dc3545;
      border-radius:25px;
      color:white;
      padding:10px;
      background-color:#dc3545;
      width:200px;
      height:auto;
      font-size:14px;
      font-weight:bold;
  }
  
    .form-control1 {
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

/* Hover effect */
.form-control1:hover {
  border-color: #007bff; /* Blue border */
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.5); /* Glowing effect */
}

/* Optionally, add focus effect for when the input is clicked */
.form-control1:focus {
  border-color: #007bff;
  box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
}
  
  
  @media(max-width:677px){
      .clearbtn{
          width:280px;
      }
  }
  </style>
<?php
// echo"<pre>";print_r($properties);
?>

<style>
        .shake:hover {
            display: inline-block;
            animation: shake 1.5s infinite;
        }

        @keyframes shake {
            0%, 100% {
                transform: translateY(0);
            }
            25% {
                transform: translateY(-10px);
            }
            50% {
                transform: translateY(10px);
            }
            75% {
                transform: translateY(-10px);
            }
        }
    </style>
<main class="container">
  
    
    
    <section class="row main" >
    <!--=======================head======================-->
     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
       <breadscrup class="breadscrump">
           <p> <a href="{{url('/')}}" class='breadcrumps'>Home</a> / <span  style="color:red">
                               Needed
                          </span></p>
       </breadscrup>
     <form action="{{url('view_needed')}}"style="border:7px solid red" id="myForm">
         <input type="hidden" value="<?=$_GET['main_cat']?>" name="main_cat">
         <br>
         <center>
             <h4>CUSTOMIZED SEARCH </h4><BR>
         </center>
      
          <div class="container">
  <div class="row">
    <div class="col">
        
        
        
        
    <form>
    <div class="container">
        <!-- First Row: Input Fields -->
        <div class="row form-row">
            <div class="form-group col-lg-3 col-md-4 col-sm-6 mt-3">
                 <?php
                       $a=$b=$c=$d="";
                       if(isset($_GET['main_cat']))
                       {
                           if($_GET['main_cat']==9)
                           {
                               $a="selected";
                           }
                           if($_GET['main_cat']==10)
                           {
                            $b="selected";   
                           }
                           if($_GET['main_cat']==11)
                           {
                             $c="selected";  
                           }
                           if($_GET['main_cat']==12)
                           {
                              $d="selected"; 
                           }
                       }
                       
                       ?>
                <label>Select category</label>
                <select class="form-control selectClass form-control1" name="main_cat" id="cat-id">
                    <option value=""> Select Category </option>
                    <option value="9" <?=$a?>>Residencial properties - Needed</option>
                    <option value="10" <?=$b?>>Sharing (room) - Needed</option>
                    <option value="11" <?=$c?>>Commercial properties - Needed</option>
                    <option value="12" <?=$d?>>Parking - Needed</option>
                </select>
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6 mt-3">
                <label for="input1">Location</label>
                <input type="text" class="form-control form-control1" name="location" id="input1" placeholder="County/City/Town/Street/EIR Code" value="{{isset($data['location'])?$data['location']:""}}">
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6 mt-3">
                <label for="input2">Minimum Price</label>
                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="min_price" class="form-control form-control1" id="input2" placeholder="Minimum Price" value="{{isset($data['min_price'])?$data['min_price']:""}}">
            </div>

            <div class="form-group col-lg-3 col-md-4 col-sm-6 mt-3">
                <label for="input3">Maximum Price</label>
                <input type="number" min="0"  oninput="this.value = Math.abs(this.value)" name="max_price" class="form-control form-control1" id="input3" placeholder="Maximum Price" value="{{isset($data['max_price'])?$data['max_price']:""}}">
            </div>
        </div>

        <!-- Second Row: Submit Button -->
        <div class="row justify-content-center mt-4">
            <div class="col-lg-3 col-md-4 col-sm-6 mb-2">
                <button type="submit" class="searchbtn submitbtn w-100">Submit</button>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <button class="clearbtn" type="reset">
                <a href="{{url('view_needed')}}?main_cat=9" type="reset" class="  w-100" >Clear</a>
                </button>
            </div>
        </div>
    </div>
</form>

        
        
        
        
        
      
        
     
    
    </div>
  </div>
</div>

                      
            <br>
     
     </form>
     </div>
     <style>
    /* Remove default styles from a tags */
a {
    text-decoration: none !important;
    color: inherit !important;
}
</style>
    <!--=============================FORM ends===================================================================-->
   
  <!--=======================head======================-->
       <br><br> <head style="margin-top:20px" >
           
            <center>
                <h1 style="color:#dc3545"><b>{{strtoupper($title)}}</b></h1>
            </center>
           
        </head>
</section>
    <!--=============================FORM ENDS===================================================================-->
    </main>
<!--==================TOP ADD STRTS============================-->

 @if(count($topads)>0)
<topadd >
<div class="row">
    <div class="col-md-12">
       <div class="slider-container">
        <!-- <div class="arrow left-arrow" id="left-arrow">&#9664;</div> -->
        <div class="slider">
            <div class="slider-track">
                @foreach($topads as $ads)
                
                   <div class="slide slideads">
                       <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                    </div>
                
                @endforeach
            </div>
        </div>
        <!-- <div class="arrow right-arrow" id="right-arrow">&#9654;</div> -->
    </div>
  </div>
  </div>
</topadd>
@endif   
         <!--=====================TOP AD ENDS===================================-->
         
<!--===================MAIN STARTS============================-->
  <main>
         <!--======================NEEDED STARTS===========================================-->
         <section class="standard">
             
           @if((count($properties)>0))
             <div class="container">
   <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                     
                      @forelse($properties as $property)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000;" >
                                <a href="{{url('property'.$property->id) }}" class="img">
                                    <?php
                                    $rent_coll="";$price=$property->price;
                                    $bathroom="Bathroom - ";
                                    $bathroom.=isset($property->Bathrooms)?$property->Bathrooms:1;
                                    $sub_title="";
                                   
                                       if($property->main_cat==9)
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
                                       if($property->main_cat==10)
                                       { 
                                           $sub_title=" - Sharing";
                                           $price=$property->price;
                                           $rent_coll=" - ".$property->price_type;
                                          
                                       }
                                       if($property->main_cat==11)
                                       { 
                                           $sub_title="Rent";
                                            $price=$property->price;
                                            if($property->price_type=="Buy")
                                            {
                                                 $sub_title=" - Buy";
                                            }
                                          
                                       }
                                       if($property->main_cat==12)
                                       { 
                                           $a="Rent";
                                           if($property->price_type=="Buy")
                                            {
                                                 $a=" - Buy";
                                            }
                                           $sub_title="Parking - ".$a;
                                            $price=$property->price;
                                           
                                       }
                                       
                                       ?>
                                
                                    
                                    
                                  
                               <div class="propertyItems shake" style="margin-top:1px">    
                                <!--<img src="{{asset('uploads/properties/'.$property->main_image)}}" alt="Image" class="img-fluid" />-->
                        <div class="text-center">
                              <div class="property-content" style="margin-top:1px">
                                <div class="price mb-2"></div>
                                 <center><h5 style="color:#dc3545"><b>{{$property->property_type}} {{$sub_title}}</b></h5></center> 
                                <p><span>{{$property->city}},{{$property->town}}, {{$property->street}} ,{{$property->county}}</span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$price}}{{$rent_coll}}</h6>
                                <div>
                               <!--<span class="d-block mb-2 text-black-50 propaddr" style="height:35px;">{{$property->address}}</span>-->
                                  </div>
                                  <div class="specs d-flex mb-0">
                                      <center>
                                        <p style="font-size:13px">
                                            
                                             <?php $des= $property->feature;
                                           echo $small = substr($des, 0, 150);
                                             ?>....</p>  
                                          <p style="font-size:15px">
                                    <?php
                                      if($property->main_cat==9)
                                      {
                                            echo"Rooms - ".$property->total_rooms.", &nbsp;&nbsp;";
                                            echo "Bathrooms -".$property->Bathrooms.", &nbsp;&nbsp;";
                                            if($property->BER)
                                            {
                                            echo " BER - ".$property->BER;
                                            }
                                      }
                                      if($property->main_cat==10)
                                      {
                                            $newDate = date("d-m-Y", strtotime($property->Available_from));
                                            echo"No Tenants - ".$property->no_tenants.", &nbsp;";
                                            echo "Needed From -".$newDate.", &nbsp;&nbsp;";
                                      }
                                       if($property->main_cat==11)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Floor - ".$property->floor_area." ".$property->unit;
                                      }
                                      if($property->main_cat==12)
                                      {
                                       
                                       echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Space Available - ".$property->space." ".$property->unit;
                                      }
                                      if($property->main_cat==5)
                                      {
                                       
                                     
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
                                 <button class="item-properties mt-2" 
                         style="background-color:#d3111a;width:200px;height:30px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase;">
                             <span style="display:flex;margin:auto;">View More <br> </span></button></a>
                              </div></div>
                            </div>
                          @empty  
            @endforelse
            
            
                  </div><br><br>
<center>
                   {{ $properties->links() }}
                   </center>
  <!-- Repeat this row block for each row of cards -->
  
</div>
      @endif
     </section>
         <!--======================NEEDED ENS===========================================-->
         <!--=================PAGINATION STARTS=======================-->
      <center style="margin-top:20px;padding:10px;">
          
          
          
       
      </center>
<!--=================PAGINATION ENDS=======================-->
</main>   
<!--===============MAIN ENDS PROPERTY DISPLAY======================-->

        <!--==================MID ADD STRTS============================-->
@if(count($middleads)>0)
 <midadd >
     <div class="row">
    <div class="col-md-12">
       <div >
         <!--<div class="arrow left-arrow" id="left-arrow-mid">&#9664;</div>-->
          <div class="slider-mid">
            <div class="slider-track-mid">
                @foreach($middleads as $ads)
                <div class="slide-mid slideads">
                    <a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a>
                </div>
                @endforeach
            </div>
        </div>
        <!--<div class="arrow right-arrow" id="right-arrow-mid">&#9654;</div>-->
      </div>
    </div>
  </div>
  </div>
</midadd>
@endif   
<!--=====================MID AD ENDS===================================-->

 


  


@endsection