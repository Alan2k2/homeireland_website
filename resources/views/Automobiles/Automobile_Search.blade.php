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
     margin:10px !important;a
 }
 .tns-nav{
     display:none;
 }
 .scrollable-div {
    height: 300px ;
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
     margin-top:100px;
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
 
 /*added a media query property for propert-content to make it center*/
 .property-content{
     display:flex;
     flex-direction:column;
     justify-content:center;
     align-items:center;
 }
 }
 
 /*.mainbanner {*/
 /*       background-size: cover;*/
 /*       background-position: center;*/
 /*       width: 100%;*/
        height: 100%; /* Adjust height as needed */
 /*   }*/
    
 /*    @media (max-width: 600px) {*/
 /*       .mainbanner {*/
 /*           background-size: contain;*/
 /*           background-position: center;*/
 /*       }*/
 /*   }*/
 
 .form-group {
     width:200px;
 }
 
 @media(min-width:1200px){
     .img-responsive1{
         margin-left:3.5%;
     }
     .custombtn{
         margin-bottom:10px;
         border-radius:15px;
     }
 }
</style>
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
 <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section class="container" style="margin-top:-200px">
         <!--==============BREAD CRUMPS STARTS===================-->
        
        <section style="float:left;">
             <table width="100%">
                 <tr>
                     <?php
                     $var1="";$var2="";
                     if(!empty($_GET['user_id']))
                  {
                      $var2=$user->name;
                  }
                     if(isset($_GET['main_name']))
                     {
                            if($_GET['main_name']=="2")
                         {
                           $var1="/New";
                         }
                          if($_GET['main_name']=="1")
                         {
                           $var1="/Used";
                         }
                          if($_GET['main_name']=="3")
                         {
                           $var1="/Hire";
                         }
                     }
                     
                     ?>
                     <td>
                         <breadscrup class="breadscrump">
                            <a href="{{url('/')}}" class='breadcrumps'>Home</a>
                            <a href="{{url('filterautomobiles')}}?search_type=all" class='breadcrumps'>/ Search All</a>
                            <a href="{{url('filterautomobiles')}}?search_type=a" class='breadcrumps'></a>  
                            <span  style="color:red">
                                <?php 
                                if($var1!="")
                                {
                            echo $var1;
                                }
                                if($var2!="")
                                {
                            echo " / ".$var2;
                                }
                            ?>
                            </span>
                          </breadscrup>
                     </td>
                 </tr>
             </table>
         </section>
         <br>
    <!--===================BREAD CRUMBS ENDS============-->
    <!--=======================head======================-->
    
     <form action="{{url('filterautomobiles')}}"style="border:7px solid red; border-radius:10px;" id="myForm" class="myform">
         <br>
         
          <input type="hidden" name="user_id" id="user_id" value="">
          <center>
                <h4 style="color:#d3111a"><b>
                  <?php
                  if(!empty($_GET['user_id']))
                  {
                      echo$user->name;
                  }
                   else
                  {
                     
                    echo$search_title;
                  }
                  ?>
                    
                    </b></h4>
            </center>
           
                 <div class="row" style="padding:10px">
                      <div class="col-lg-2 col-2 mt-2">
                          </div>
                    <div class="col-lg-8 col-8 mt-8">
                        <center>
                       <div class="form-group">
                       <?php
                       $a=$b=$c=$d=$e=$f=$g="";
                       if(isset($_GET['main_name']))
                       {
                           if($_GET['main_name']=="all")
                           {
                               $a="selected";
                           }
                           if($_GET['main_name']=="1")
                           {
                               $b="selected";
                           }
                           if($_GET['main_name']=="2")
                           {
                               $c="selected";
                           }
                           if($_GET['main_name']=="3")
                           {
                               $d="selected";
                           }
                            if($_GET['main_name']=="4")
                           {
                               $e="selected";
                           }
                            if($_GET['main_name']=="5")
                           {
                               $f="selected";
                           }
                            if($_GET['main_name']=="dealers")
                           {
                               $g="selected";
                           }
                           
                       }
                       
                       ?>
                      <select class="form-control" name="main_name" id="cat-id" >
                              <option value=""> Select Category </option>
                              <option value="all"<?=$a?>> All Category </option>
                               <option value="1"<?=$b?> >New  - For Sale</option>
                              <option value="2" <?=$c?>>Used - For Sale</option>
                              <option value="3" <?=$d?>>Hire</option>
                              <option value="4" <?=$e?>>New - Needed</option>
                              <option value="5" <?=$f?>>Used - Needed</option>
                              <option value="dealers" <?=$g?>>Dealers</option>
                        </select>
                     </div> 
                     </center>
                    </div>
                 </div>
         
                         
            <div class="row " style="padding:10px;display:flex;justify-content:center;">
                
                          <!--<div class="col-lg-3 col-3 mt-3">-->
                          <!--    </div>-->
                             
                          
                    <div class="col-lg-4 col-sm-12 mt-3">
                       <div class="form-group">
                        <label for="exampleFormControlInput1"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;Location</label>
                <input type="text" name="location"class="form-control" id="exampleFormControlInput1" placeholder="County/City/Town/Street/EIR Code" value="{{isset($_GET['location'])?$_GET['location']:""}}">
                     </div>
                    </div>
                    <div class="col-lg-3 col-sm-2 mt-3">
                       <div class="form-group">
                            <label for="exampleFormControlInput1">Minimum Price</label>
                        <input type="number"  name="min_price" class="form-control" id="exampleFormControlInput1" placeholder="Minimum Price"value="{{isset($_GET['min_price'])?$_GET['min_price']:""}}">
                       </div>
                    </div>
                    <div class="col-lg-3 col-sm-2 mt-3">
                        <div class="form-group">
                        <label for="exampleFormControlInput1">Maximum Price</label>
                        <input type="number"  name="max_price" class="form-control" id="exampleFormControlInput1" placeholder="Maximum Price" value="{{isset($_GET['max_price'])?$_GET['max_price']:""}}">
                      </div>
                   </div>
                   
                 
            </div>
            
            <!----------------row 2------------------------->
           
            
            
            
            </center>
            
          
            <div class="row">
                <center><br><br>
                   <button id="search_btn" class="custombtn" style="width:200px;height:auto;padding:10px;background-color:#dc3545;border:1px solid #dc3545;border-raius:5px;color:white;border-radius:15px;">SEARCH &nbsp;<i class="fa fa-search" aria-hidden="true"></i></button>
                     </form>
                     
                 <a href="{{url('filter-properties')}}?search_type=&&user_id=4" > <button  class="custombtn"
                 style="width:200px;height:auto;padding:10px;background-color:#dc3545;border:1px solid #dc3545;border-raius:5px;color:white;border-radius:15px;" >Clear All &nbsp;<i class="fa fa-eraser" aria-hidden="true"></i></button></a>
                </center>
            </div></div><br>
</section>
    <!--=============================FORM Ends===================================================================-->

    <!--==================TOP ADD STRTS============================-->

 @if(count($topads)>0)
<topadd >
<div class="row">
    <div class="col-md-12">
       <div class="slider-container">
        
        <div class="slider">
            <div class="slider-track">
                @foreach($topads as $ads)
                
                   <div class="slide"><a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a></div>
                
                @endforeach
            </div>
        </div>
   
    </div>
  </div>
  </div>
</topadd>
@endif   
         <!--=====================TOP AD ENDS===================================-->

<main>
     
      
     <!--======================FEUTURED STARTS===========================================-->
        <section class="feutured">
    @if(count($data)==0)
    <div style="height:400px">
      <center>
          <p style="color:red ;margin-top:200px"> No Data!  </p>
      </center>
      </div>
      @endif
           @if((count($data)>0))
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <a href="{{url('filterautomobiles')}}?search_type=1">
                        <button class="item-properties mt-2" 
                        onmouseover="this.style.backgroundColor='black';"
                        onmouseout="this.style.backgroundColor='#d3111a';"
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                             <span style="display:flex;margin:auto;">View All <br> Featured Listings</span></button></a>
                    
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->where('subcription_type',1)->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000; border-radius:15px;" onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                     
                                   <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems border-radius:15px; shake"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span> </span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€  
                                {{$d->price}}
                                @if(!empty($d->duration))
                               
                                @endif</h6>
                                <div>
                               {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                  </div>
                                   <center>
                                 
                                     
                                          <p style="font-size:15px">
                                   
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                    
                                     
                                   
                                  
                              </center>
                                 
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
     </section>
         <!--======================FEUTURED ENS===========================================-->
         
          <!--======================AGENT STARTS===========================================-->
        <section class="feutured">
           @if((count($data)>0))
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <a href="{{url('filterautomobiles')}}?search_type=3">
                        <button class="item-properties mt-2" 
                        onmouseover="this.style.backgroundColor='black';"
                        onmouseout="this.style.backgroundColor='#d3111a';"
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                             <span style="display:flex;margin:auto;">View All <br> Dealers Listings</span></button></a>
                    
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->whereIn('subcription_type',[3,4,5])->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000; border-radius:15px;" onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                  <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems border-radius:15px; shake"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span></span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€  {{$d->price}}
                                @if(!empty($d->duration))
                               
                            
                                @endif</h6>
                                <div>
                               {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                  </div>
                                   <center>
                                 
                                     
                                          <p style="font-size:15px">
                                   
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                    
                                     
                                   
                                  
                              </center>
                                 
                                 
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
     </section>
         <!--======================STANDARD ENDS===========================================-->
          <!--======================AGENT STARTS===========================================-->
          <!--==================MID ADD STRTS============================-->
@if(count($middleads)>0)
 <midadd >
     <div class="row">
    <div class="col-md-12">
      <div >
       <div class="slider-container-mid">
    
        <div class="slider-mid">
            <div class="slider-track-mid">
                @foreach($middleads as $ads)
                <div class="slide-mid"><a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a></div>
                @endforeach
            </div>
        </div>
       
    </div>
    </div>
  </div>
  </div>
</midadd>
@endif   
<!--=====================MID AD ENDS===================================-->
        <section class="standard">
           @if((count($data)>0))
              <section class="aboutDiv">
               <div class="container mt-5 ">
                <div class="container-fluid text-center">
                    <a href="{{url('filterautomobiles')}}?search_type=2">
                        <button class="item-properties mt-2" 
                        onmouseover="this.style.backgroundColor='black';"
                        onmouseout="this.style.backgroundColor='#d3111a';"
                         style="background-color:#d3111a;width:200px;height:50px;display:flex;margin:auto; color:white;border:0;font-weight:bold;text-transform:uppercase; border-radius: 50px;">
                             <span style="display:flex;margin:auto;">View All <br> Standard Listings</span></button></a>
                    
                </div></section>

                 <!--col-xs-12 col-sm-6 col-md-6 col-lg-4-->
                    <div class="row boxes  ms-3 " style="display:flex; margin:auto; justify-content:center;">
                    

                      @forelse($data->where('subcription_type',2)->values()  as  $d)
                            <div class="col-xl-3  col-xxl-3 col-lg-3 property-item "style="border:1px solid #000; border-radius:15px;" onclick="highlightProperty(this)" >
                                <a href="{{url('view_automobiles')}}?no={{$d->id}}" class="img">
                                   
                                     
                                     
                                  <?php
                                   if($d->type==1)
                                   {
                                        $type="New - For Sale";
                                   }
                                   elseif($d->type==2)
                                   {
                                      $type="Used - For Sale"; 
                                   }
                                   elseif($d->type==3)
                                   {
                                     
                                      $type="For Hire";
                                   }
                                   elseif($d->type==4)
                                   {
                                      $type="New - Needed"; 
                                   }
                                   elseif($d->type==5)
                                   {
                                     $type="Used - Needed"; 
                                   }
                                   else
                                   {
                                       $type="All"; 
                                   }
                                   ?>
                                
                                    
                                    
                                   <center><h5 style="color:#dc3545"><b> {{$type}}</b></h5></center> 
                               <div class="propertyItems border-radius:15px; shake"> 
                               <?php if(!empty($d->main_image)){ ?>
                                <img src="{{asset('uploads/automobiles/'.$d->main_image)}}" alt="Image" class="img-fluid" />
                                <?php } else { ?>
                                 <img src="{{asset('website/images/caravatar.png')}}" alt="Image" class="img-fluid" />
                                <?php } ?>
                        <div class="text-center">
                              <div class="property-content">
                                <div class="price mb-2"></div>
                                <p><span></span></p>
                                
                                <h6 style="font-weight:bold;color:#dc3545">€ {{$d->price}}
                                @if(!empty($d->duration))
                             
                                @endif
                                </h6>
                                <div>
                               {{$d->county}} -{{$d->street}}-{{$d->city}}-{{$d->town}}
                                  </div>
                                   <center>
                                <p style="font-size:15px">
                                   {{$d->aname}} -{{$d->version}}-{{$d->year}}
                                </center>
                                </div>
                                 <h6 style="font-weight:bold;"><i class="fa fa-address-book-o" aria-hidden="true"></i>&nbsp; 
                                 @if(!empty($d->user->name))
                                 {{$d->user->name}}
                                 @endif
                                 </h6>
                              </div></div></a>
                            </div>
                          @empty  
            @endforelse
             
            
                  </div>
      @endif
      <section>
        
         <center>
              <div class="row">
                  <div class="col-md-12">
         {{$data->links()}}
          </div>
          </div>
         </center>
    
     </section>
     </section>
     
         <!--======================AGENT ENDS===========================================-->
          <!--==================BOTTOM ADD STRTS============================-->
         
    @if(count($bottomads)>0)
 <bottomadd >
     <div class="row">
    <div class="col-md-12">
      <div >
       <div class="slider-container-bottom">
     
        <div class="slider-bottom">
            <div class="slider-track-bottom">
                @foreach($bottomads as $ads)
                <div class="slide-bottom"><a href="{{$ads->url}}" target=_blank><img src="{{asset('uploads/ads/'.$ads->image)}}" alt="Image 1" class="img-responsive img-responsive1"></a></div>
                @endforeach
            </div>
        </div>
       
    </div>
    </div>
  </div>
  </div>
</bottomadd>
@endif   
         <!--=====================BOTTOM AD ENDS===================================-->



</main> 
 @endsection