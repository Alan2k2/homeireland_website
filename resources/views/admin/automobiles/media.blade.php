@extends('layouts.admin.main')
@section('content')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

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
    h4
    {
        font-size:15px;
        font-weight:500;
        color:black;
    }
.search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px
   }
   .search-btn:hover
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:black;
       border:1px solid #dc3545;
      color:white;
       margin-top:-10px;
       cursor:pointer;
   }
	.spaceman{
		margin: 15px;
	}
	.spaceman .row .col-md-6,.spaceman .row .col-md-12{
		margin-top:10px;

	}
	.spaceman label{
		font-weight: 600;
	}
	.spaceman .block-heading{
		margin-top: 20px;
		margin-bottom: 10px;
		font-weight: 600;
		font-size: 22px;
		border-bottom: 1px solid black;
		padding-bottom:10px ;
	}
	
	.mainImg{
	    width:320px;!important
	    height:240px;!important
	}
	.videoMain{
	    width:320px;!important
	    
	}
	
	@media(max-width:767px){
	    .mainImg{
	         width:250px;!important
	         height:240px;!important
	    }
	    .videoMain{
	        width:260px;!important
	    }
	    .custombtn{
	        padding-bottom:5px;
	    }
	}
	
</style>
<style>
    section
    {
        border:1px solid grey;
        padding:20px;
    }aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
 
}

</style>
<div class="spacer">
</div>
<div class="row">
    <div class="col-md-12">

        <div class="main-card card">
            <div class="card-header">Edit Properties
            </div>
			<div class="spaceman">
<!--===============MAIN STARTS===============================================-->

<!--===============section 1=====================================================-->
<section id="basic">
    @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h3 class="text-danger">{{$data->aname}} / Media</h3>
    </div>
</div>

<form method="POST" action="{{url('admin/automobile_media_store')}}" id="uploadForm" enctype="multipart/form-data">
                           
                           @csrf
                          <input type="hidden" value="{{isset($data)?$data->id:''}}" name="property_id" id="property_id">
  
                      
                         
                                                                      {{-- property type end --}}
                                  
                                  
                      
                                  
                                      <div class="row">                          
                                 
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                                          COVER PHOTO<br>
                                          <input type="file" name="list_image" id="fileInput"  accept="image/*"><br>
                                                          
                                      <!--</div>-->
                                      <!--    <div class="col-md-6">-->
                                                               
                                      @if(isset($data->main_image))
                                     
                                      <img src="{{asset('uploads/automobiles/'.$data->main_image)}}" id="imagePreview" class="mainImg" alt="Image"   />
                                      @else
                                      <img src="{{asset('website/images/caravatar.png')}}" class="mainImg" id="imagePreview" 
                                      alt="Image"    width="320" height="240" />    
                                      @endif                             
                                     
                                           
                                          </div> 
  
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap " >
                                     <h5> VIDEO</h5>
                                     <div class="form-group">
              <label for="video">Choose Video</label>
              
              <input type="file" class="form-control-file" id="video" name="video" accept="video/*" onchange="previewVideo(event)">
              <video class="videoMain"  height="240" controls id="uploadedVideo">
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
                                  </div>  
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
        <img src="{{asset('uploads/automobiles/'.$img)}}" id="<?=$i?>" alt="your image" width="140" height="100" />
        <?php  } 
        else{
        ?>
        <img src="{{ asset('website/images/caravatar.png') }}" id="<?=$i?>" alt="your image" width="140" height="100" />
        <?php } ?>
        <br>
        <div class="file-upload-wrapper">
        <?php if($count<1){ ?>
    <button class="upload-button" onclick="return false;">Upload File</button>
    <?php } ?>
    <input type="file" id="file-input" name="extra_img[]"class="file-input" onchange="document.getElementById(<?=$i?>).src = window.URL.createObjectURL(this.files[0])">
  </div>
  </div>
      </div>
  <br>
          <?php
          }
          ?>
  </div>
        </section>
  <section>
  {{-- next6 and prev --}}
  <div class="row">
       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 custombtn"  >
          <a href="{{url('admin/automobile_details')}}?a=3&&b=7&&no=3" class="btn btn-large btn-block yellow-btn next font-roboto 
                                  light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                                      aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12" >
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  custombtn">
                                       <button id="next" class="btn btn-large btn-block yellow-btn next font-roboto 
                              light brbottom-30 icon-link icon-link-hover" style="margin-left">
                              <b>NEXT
                      &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
        </div>
    </div>
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
    
    if(i==10)
    {
      // alert(ji);
  // return false;
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
        <img src="{{ asset('website/images/caravatar.png') }}" id="`+i+`" alt="your image" width="140" height="100" />
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
  </div>
  @endsection