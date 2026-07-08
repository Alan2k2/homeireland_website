@extends('layouts.panel.main')
@section('content') 
<style>
   .next{
                                    background-color: red;
                                    color: #fff;
                                    widows: 300px;
                                    border: red;

                                }
                                .next:hover{
                                    background-color: black;
                                    color: #fff;

                                }
                                section.postWrapper .container .imgMain
{
  height:450px !important;
   width:550px !important;
}
          
                                 
 
  img
@media(max-width:768px){
     .nav-txt{
        height:100px;
          
    }
}
                                
                                
  </style>
  </style>
  <div class="preloader">
        <div class="spinner"></div>
    </div>
<section class="postWrapper clearfix">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                  <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                    <div class="clearfix lhs-post-links border-radius-3">
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-txt">
                         
                                                            <p class="font-roboto light clearfix brtop-10"><span class="progress-info-ico"></span><span class="progress-info">Please Complete your profile for more response</span>
                                                            </p>
                                                    </div>
                        <div class="expand text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <a href="#" class="font-roboto regular "> Navigation</a>
                        </div>
                        <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row ">
                                <!-- Assume $i=1 -->
                                @php
                                $id=1;
                                @endphp

                                 <ul class="font-roboto light tab fs-5">
                                        
                                                                    <li class="tablinks"   
                                                                    id="eu1">
                                            <a >
                                                <span class="post-link-ico"></span>
                                                Location                                                                                            </a>
                                        </li>
                                             <li class="tablinks "   
                                                                    id="eu1">
                                            <a >
                                                <span class="post-link-ico"></span>
                                                          
                                               Details</a>
                                        </li>
                                       <li class="tablinks "   
                                                                    id="eu1">
                                            <a >
                                                <span class="post-link-ico"></span>
                                                          
                                                 Description</a>
                                        </li>
                                        
                                         
                                            
                                            <li class="tablinks active" id="eu6" >
                                                 <a >
                                                <span class="post-link-ico"></span>
                                              <b style="color:white"> Media</b> 
                                                <span class="completed-tick"></span>
                                            </a>
                                             
                                        </li>  
                                        <li class="tablinks" id="eu6" >
                                             <a>
                                                <span class="post-link-ico"></span>
                                               Plan                                             <span class="completed-tick"></span>                                            </a>
                                        </li>  
                                         <li class="tablinks" id="eu6" >
                                             <a >
                                                <span class="post-link-ico"></span>
                                               Contact                                             <span class="completed-tick"></span>                                            </a>
                                        </li>
                                                                    </ul>
                            </div>

                   
                        </div>
                    </div>
                                                        </div>
                    <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                        
                                    @if ($message = Session::get('success'))  
                                    <div class="alert alert-success alert-block">  
                                        <button type="button" class="close" data-dismiss="alert"></button>   
                                            <strong>{{ $message }}</strong>  
                                    </div>  
                                    @endif  
  
@if ($message = Session::get('error'))  
<div class="alert alert-danger alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
        <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('warning'))  
<div class="alert alert-warning alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($message = Session::get('info'))  
<div class="alert alert-info alert-block">  
    <button type="button" class="close" data-dismiss="alert">?</button>   
    <strong>{{ $message }}</strong>  
</div>  
@endif  
  
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif   
                                       
                                    
   <!-- ===================part1==============-->
    
                        <form method="POST" action="{{url('Auto_media_store')}}" id="uploadForm" enctype="multipart/form-data">
                           
                         @csrf
                        <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">

                    
                       
                                                                    {{-- property type end --}}
                                
                                
                    <div class="row">
                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                     <h1 style="color:red">Automobile \ Add media</h1>
                     </div>
                </div>
                                
                                    <div class="row">                          
                               
                                      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                                        COVER PHOTO<br><h6 class=" text-danger">Image Size should be Maximum 1KB</h6>
                                        <input type="file" name="list_image" id="fileInput"  accept="image/*"><br>
                                                        
                                    <!--</div>-->
                                    <!--    <div class="col-md-6">-->
                                                             
                                    @if(isset($data->main_image))
                                   
                                    <img src="{{asset('uploads/automobiles/'.$data->main_image)}}" id="imagePreview" class="imgMain" alt="Image"  
                                    width="520px" height="440px" style="max-width: 520px";/>
                                    @else
                                    <img src="{{asset('website/images/caravatar.png')}}" class="imgMain" id="imagePreview" 
                                    alt="Image"    width="320" height="240" />    
                                    @endif                             
                                   
                                         
                                        </div> 
 </div> 
 
   <?php
                                        if($data->subcription_type==1)
                                        {
                                           $scheme=12; 
                                        }
                                        elseif($data->subcription_type==1)
                                        {
                                             $scheme=6; 
                                        }
                                        else
                                        {
                                             $scheme=12; 
                                        }
                                       
                                        ?>
                                       
                                        
                                        <input class="make_featured"type="hidden" name="scheam" value="<?=$scheme?>" id="scheam">
                                        <?php if($data->subcription_type==2){ ?>
                                        <br><br><br><br><br><br>
                                <div id="upgrade">
                                     <h3 class="make_featured">Upgrade to Feaured to Upload Videos And More photos &nbsp;<p class="btn btn-danger " width="200px">UPGRADE NOW</p></h3></a> 
                                </div>
                                <div id="newupgrade">
                                     <!--<h3 ><p class="btn btn-success " width="200px">UPGRADED SUCCESSFULLY </p></h3></a> -->
                                </div>
                                        <?php } ?>

<?php if($data->subcription_type==1){ ?>
<br>
  <div class="row"> 
                               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20 field-wrap " >
                                   <h5> VIDEO</h5>
                                   <div class="form-group">
            <label for="video">Choose Video</label>
            
            <input type="file" class="form-control-file" id="video" name="video" accept="video/*" onchange="previewVideo(event)">
            <video width="320" height="240" controls id="uploadedVideo">
            <source src="{{asset('uploads/videos/'.$data->video_url)}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </div>
        <div class="form-group">
            <video id="videoPreview" width="320" height="240" controls style="display:none;">
                <source id="videoSource">
                Your browser does not support the video tag.
            </video>
        </div>
                                  <script>
function previewVideo(event) {
    var uploadedVideo = document.getElementById('uploadedVideo');
    if (uploadedVideo) {
        uploadedVideo.style.display = 'none';
    }
    var video = document.getElementById('videoPreview');
    var source = document.getElementById('videoSource');
    video.style.display = 'block';
    source.src = URL.createObjectURL(event.target.files[0]);
    video.load();
}
</script>
                                   <div style="margin-top:10px;font-size:15px">
                                   <label>Upload Youtube Video id here</label>
                                   <input type="text" name="Youtube_video_url" class="form-control" placeholder ="eg:https://www.youtube.com/watch?v=zwWt1zall34" value="{{isset($data)?$data->Youtube_video_url:''}}">
                                </div> 
                                </div>
                                <?php } ?>
                                <!----------row2-------------->
                                <div class="row">
                                  
                                </div>
                       
                      
                                   
                   <br><br>               
   <!-- ===================part1 endss================- -->

   <!-- ===============PAERT 2 GALLERY STARTS============ -->
    
   <style>
section.postWrapper .container1 img
{
  height:100px !important;
}
.titlebar
{
height:auto;
width:100%;
color:#fff;
background-color:green;
font-size:20px;
font-weight:800;
padding:10px;
border-radius:5px;
}
.addnew
{
  /* height:auto;
  width:200px;
  background-color:red; */
   /* color:#fff; */
  font-size:15px ;
  float:right;
}
.close-circle{
color:red;
font-size:18px;
font-weight:800;
float:center;
padding-top:-1px;
}
.img_box
{
  border:1px solid black;
  padding:5px
}
.file-upload-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.upload-button {
    border: 2px solid #4CAF50;
    color: white;
    background-color: #4CAF50;
    padding: 2px 2px;
    /* border-radius: 8px; */
    width:140px;
    font-size: 12px;
    cursor: pointer;
}

.file-input {
    font-size: 8px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

/* Custom styles for Bootstrap buttons */
.custom-btn {
    background-color: red;
    color: #fff;
    border: 1px solid red;
    /* Adjust width on large screens */
    width: 300px;
}

.custom-btn:hover {
    background-color: black;
    color: #fff;
}

.button-section {
    display: flex;
    /*justify-content: center;*/
    align-items: center;
    /*height: 100vh; */
}

.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 800px; 
    padding: 0 20px; 
    margin:10px 2px;
}

.button-container .btn {
    
    margin: 0 10px;
    text-align: center;
}

.left-align {
    justify-content: flex-start;
}

.right-align {
    justify-content: flex-end;
}

/* Media query for smaller devices */
@media (max-width: 768px) {
    .button-container {
        justify-content: space-between;
    }
    .button-container .btn {
        margin: 0 5px;
    }
    .custom-btn {
        width: 200px; 
    }
   
       .nav-txt{
        height:100px;
    }
     .img_box
    {
        display:flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        
    }
    .close-circle{
        padding-left:100px;
    }
    .aditionalImg{
        width:200px;
}

}

/* Media query for large devices */
@media (min-width: 1200px) {
    .custom-btn {
        width: 200px; 
    }
}
   </style>
   <div class="titlebar">Extra Images<button onclick="return false;"class="btn btn-warning addnew" >Add New +</button></div>
<br>
<?php $count=count($property_arr);
if($count<1)
{
    $icount=3;
}
else{
    $icount=$count;
}
?>
   <section class="container1">
<div class="row" id="parent-div">
   <?php for($i=0;$i<$icount;$i++) { 
   if($count>0){
        $img=$property_arr[$i];
   }
   else
   {
       $img=$i;
   }
      
   ?>
  <div id="img_<?=$img?>" class="col-md-2 ">
    <div class="img_box">
    <span  onclick="remove('<?=$img?>')">
      <span class="close-circle" >
      <i class="fa fa-times-circle" aria-hidden="true"></i>
   </span>
    </span><br>
    <?php if($count>0){
        $img=$property_arr[$i];
        ?>
      <img src="{{asset('uploads/automobiles/'.$img)}}" id="<?=$i?>" alt="your image" width="150" height="100" />
      <?php  } 
      else{
      ?>
      <img src="{{ asset('website/images/caravatar.png') }}" id="<?=$i?>" alt="your image" width="150" height="100" />
      <?php } ?>
      <br>
      <div class="file-upload-wrapper">
      <?php if($count<1){ ?>
  <button class="upload-button" onclick="return false;">Upload File</button>
  <?php } ?>
  <input type="file" id="file-input" name="extra_img[]"class="file-input" onchange="document.getElementById(<?=$i?>).src = window.URL.createObjectURL(this.files[0])" accept="image/*">
</div>
</div>
    </div>
<br>
        <?php
        }
        ?>
</div>
<br><br><br>
{{-- next6 and prev --}}


    <!-- <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >-->
    <!--    <a href="{{url('Auto_store')}}?no=3" class="btn btn-large btn-block yellow-btn next font-roboto -->
    <!--                            light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" -->
    <!--                                aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>-->
    <!--</div>-->
    <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >-->
        
    <!--</div>-->
    <!--<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" >-->
           
    <!--</div>-->
    <!--<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">-->
    <!--                                 <button id="next" class="btn btn-large btn-block yellow-btn next font-roboto -->
    <!--                        light brbottom-30 icon-link icon-link-hover" style="margin-left">-->
    <!--                        <b>NEXT-->
    <!--                &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>-->
    <!--                             </div>-->
                                 
                 <section class="button-section">
                        <div class="button-container">
                           
                <a href="{{url('Auto_store')}}?no=3" class="btn btn-large custom-btn  btn-block yellow-btn next font-roboto 
                                light brbottom-30 icon-link icon-link-hover left-align" ><b><i class="fa fa-arrow-left" 
                                    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                
                            <button type="submit" class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover right-align">
                                <b>NEXT &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b>
                            </button>
                        </div>
                </section>
                                 
            
    {{--  next and prev end--}} 
      </section>
      </from>
      </div>
      </div>
<script>
  let noteBank = document.querySelector(".note_bank");
var i=3;
let addNew = document.querySelector(".addnew");
addNew.addEventListener('click', () => {
  
   let scheam = document.querySelector("#scheam").value;
//   alert(scheam);
  if(i==scheam)
  {
    alert("limit is over. Maximum "+scheam+" Photos Allowed.");
return false;
  }
  i++
  let newNote = document.createElement("div");
  newNote.classList.add("new_note");
  document.getElementById("parent-div")
                .innerHTML +=
                `  <div id="img_`+i+`" class="col-md-2 ">
    <div class="img_box">
    <span  onclick="remove(`+i+`)">
      <span class="close-circle" >
      <i class="fa fa-times-circle" aria-hidden="true"></i>
   </span>
    </span><br>
      <img src="{{ asset('website/images/caravatar.png') }}" id="`+i+`" alt="your image" width="150" height="100" />
      <br>
      <div class="file-upload-wrapper">
     
  <button class="upload-button"onclick="return false;">Upload File</button>
  <input type="file" name="extra_img[]" id="file-input" class="file-input" onchange="document.getElementById(`+i+`).src = window.URL.createObjectURL(this.files[0])">
</div>`;
});

function remove(el) {
//   alert(el);
  var element = el;
  i--;
  document.getElementById("img_"+el).remove();
  $.ajax({
      url:"{{ url('removefetchedimage_auto') }}",
      data:{id : el},
      success:function(data){
      }
    })
}
  </script>
  <script>
        const fileInput = document.getElementById("fileInput");
        const imagePreview = document.getElementById("imagePreview");

        fileInput.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = "block";
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.src = "";
                imagePreview.style.display = "none";
            }
        });
        
        const fileInputbanner = document.getElementById("fileInputbanner");
        const imagePreviewbanner = document.getElementById("imagePreviewbanner");

        fileInputbanner.addEventListener("change", function() {
            const file = this.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    imagePreviewbanner.src = e.target.result;
                    imagePreviewbanner.style.display = "block";
                };

                reader.readAsDataURL(file);
            } else {
                imagePreviewbanner.src = "";
                imagePreviewbanner.style.display = "none";
            }
        });
         document.addEventListener('DOMContentLoaded', function() {
   
});


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
 $("#newupgrade").hide();

     $('.make_featured').click(function(){
  
    //   alert("hi");
              $.ajax({
        method:'GET',        
        url:"{{ url('/upgrade_featured_auto') }}",
        data:{},
        success:function(data){
        //   $("#upgrade").hide();
        //   $("#newupgrade").show();
        alert("UPGRADED SUCCESSFULLY");
        location.reload();
        }
     });
    });
       });
</script>
</div>
@endsection