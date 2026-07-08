@extends('layouts.panel.main')
@section('content')

<!-- CSS Styles -->
<style>
.sidebar{
    font-size: small;
}
.next {
    background-color: red;
    color: #fff;
    width: 300px;
    border: red;
}

.next:hover {
    background-color: black;
    color: #fff;
}

/* Styles for the cropping section */
.crop-section {
    margin-top: 20px;
}

.crop-section .btn {
    margin: 5px;
}

.crop-section img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 10px 0;
}

.cropped-image-container {
    margin-top: 20px;
    text-align: center;
    display: none;
    /* Initially hidden */
}

.cropped-image-container img {
    max-width: 50%;
    height: 200px;
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 5px;
    background-color: #fff;
}

#croppedImage {
    width: 50%;
}

/* Hide the dummy image when a file is selected */
.dummy-image {
    display: block;
}

.dummy-image.hidden {
    display: none;
}

/* Style for the file input */
.file-input-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
}

.file-input-wrapper input[type=file] {
    font-size: 100px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

.file-input-wrapper .upload-button {
    background-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
}

.file-input-wrapper .upload-button:hover {
    background-color: #0056b3;
}

/* Existing styles from the original code */
section.postWrapper .container .img {
    height: 450px !important;
}

@media (max-width: 768px) {
    .nav-txt {
        height: 100px;
    }
}

section.postWrapper .container1 img {
    height: 100px !important;
}

.titlebar {
    height: auto;
    width: 100%;
    color: #fff;
    background-color: green;
    font-size: 20px;
    font-weight: 800;
    padding: 10px;
    border-radius: 5px;
}

.addnew {
    font-size: 15px;
    float: right;
}

.close-circle {
    color: red;
    font-size: 18px;
    font-weight: 800;
    float: center;
    padding-top: -1px;
}

.img_box {
    border: 1px solid black;
    padding: 5px;
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
    width: 140px;
    font-size: 12px;
    cursor: pointer;
}

@media (min-width: 768px) and (max-width: 1200px) {
    .upload-button {
        width: 133px;
    }
}

.file-input {
    font-size: 8px;
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
    cursor: pointer;
}

.custom-btn {
    background-color: red;
    color: #fff;
    border: 1px solid red;
    width: 200px;
}

.custom-btn:hover {
    background-color: black;
    color: #fff;
}

.button-section {
    display: flex;
    align-items: center;
}

.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 800px;
    padding: 0 20px;
    margin: 10px 2px;
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

    .img_box {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .close-circle {
        padding-left: 100px;
    }

    .aditionalImg {
        width: 200px;
    }
}

@media (min-width: 1200px) {
    .custom-btn {
        width: 200px;
    }
}
</style>

<!-- External CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css">

<!-- HTML Content -->
<div class="preloader">
    <div class="spinner"></div>
</div>

<section class="postWrapper clearfix">
    <div class="container">
        <div class="row"></div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 brtop-30 brbottom-30">
                <div class="clearfix lhs-post-links border-radius-3">
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12 nav-txt">
                        <p class="font-roboto light clearfix brtop-10">
                            <span class="progress-info-ico"></span>
                            <span class="progress-info">Please Complete your profile for more response</span>
                        </p>
                    </div>
                    <div class="expand text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <a href="#" class="font-roboto regular"> Navigation</a>
                    </div>
                    <div class="clearfix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                            @php $id = 1; @endphp
                            <ul class="font-roboto light tab sidebar">
                                <li class="tablinks" onclick="openCity(event,'event1',0)" id="eu0">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Basic
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Location
                                    </a>
                                </li>
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Price
                                    </a>
                                </li>
                                <li class="tablinks" id="eu1">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Property Details
                                    </a>
                                </li>
                                @if(Session::get('main_cat') != 3 && Session::get('main_cat') != 4 &&
                                Session::get('main_cat') != 6 && Session::get('main_cat') != 7)
                                <li class="tablinks" id="eu4">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Facilities
                                    </a>
                                </li>
                                @endif

                                <li class="tablinks" id="eu5">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Description
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks active" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        <b style="color:white"> Media</b>
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Plan
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                                <li class="tablinks" id="eu6">
                                    <a>
                                        <span class="post-link-ico"></span>
                                        Contact
                                        <span class="completed-tick"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
                <!-- Flash Messages -->
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

                <!-- Main Form -->
                <form method="POST" action="{{ url('media_store') }}" id="uploadForm" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="{{ isset($data) ? $data->id : '' }}" name="property_id" id="property_id">
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                            <h1 style="color:red">{{ Session::get('title') }} \ Add media</h1>
                        </div>
                    </div>
                    
                    <!-- Cover Photo Section -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 brtop-20 field-wrap mt-4">
                            <h4>COVER PHOTO</h4>
                            <div class="crop-section mb-2">
                                <div class="file-input-wrapper">
                                    <button class="upload-button">Choose Image</button>
                                    <input type="file" name="list_image" id="fileInput" accept="image/*">
                                </div>
                                <div class="mt-3" id="cropControls" style="display: none;">
                                    <button class="btn btn-danger" type="button" onclick="refreshPage()">DELETE</button>
                                    <button class="btn btn-primary" type="button" id="cropBtn">CROP</button>
                                </div>
                                <img id="image" style="max-width: 50%; display: none; margin-top: 10px;">
                                <canvas id="canvas" style="display: none;"></canvas>
                            </div>

                            <!-- Cropped Image Display Section -->
                            <div class="cropped-image-container" id="croppedImageContainer">
                                <h5>Cropped Image:</h5>
                                <div id="croppedImage"></div>
                            </div>

                            <!-- Preview Original Image -->
                            @if(isset($data->main_image))
                            <img src="{{ asset('uploads/properties/' . $data->main_image) }}" id="imagePreview"
                                alt="Image" class="img dummy-image" width="520px" height="440px"
                                style="max-width: 520px;">
                            @else
                            <img src="{{ asset('website/images/no-image.jpg') }}" class="img dummy-image"
                                id="imagePreview" alt="Image" width="620" height="600">
                            @endif
                        </div>
                        
                            @php
                            if ($data->subcription_type == 1 ) {
                                $scheme = 12;
                            }elseif($data->subcription_type == 12){
                             $scheme = 12;
                            }elseif($data->subcription_type == 14){
                             $scheme = 12;
                            }elseif($data->subcription_type == 16){
                             $scheme = 12;
                            }elseif($data->subcription_type == 18){
                             $scheme = 12;
                            }elseif (in_array($data->subcription_type, [2, 11, 13, 15, 17])) {
                             $scheme = 6;
                             echo '<div class="text-right">';
                             echo '<input class=" btn btn-warning make_featured" type="button" name="scheam" value=" Currently you can Add '.$scheme.' Images. Upgrade to Featured">';
                             echo '</div>';
                            }
                            else {
                                $scheme = 12;
                            }
                            @endphp
                            
                            <input class=" btn btn-warning make_featured" type="hidden" name="scheam" value="{{$scheme}}" id="scheam">             
                            @if($data->subcription_type == 1 || $data->subcription_type == 4 || $data->subcription_type == 18 || $data->subcription_type == 12 || $data->subcription_type == 14 || $data->subcription_type == 16)
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div style="margin-top:10px;font-size:15px">
                                            <label>Upload Youtube Video URL here</label>
                                            <input type="text" name="Youtube_video_url" class="form-control"
                                                placeholder="eg:https://www.youtube.com/watch?v=zwWt1zall34"
                                                value="{{ isset($data) ? $data->Youtube_video_url : '' }}">
                                        </div>
                                    </div>
                                </div>
                            @endif
                                                    
                        <!-- Video Upload Section -->
                        @if($data->subcription_type == 1 || $data->subcription_type == 4 || $data->subcription_type == 18 || $data->subcription_type == 12 || $data->subcription_type == 14 || $data->subcription_type == 16)
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 brtop-20 field-wrap">
                            <h5>VIDEO</h5>
                            <div class="form-group">
                                <label for="video">Choose Video</label>
                                <input type="file" class="form-control-file" id="video" name="video" accept="video/*" onchange="previewVideo(event)">
                                <video class="videoMain" height="240" controls id="uploadedVideo">
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
                        </div>
                        </div>
                        
                        <!--<div class="row">-->
                            <!-- YouTube Video URL -->
                        <!--    <div style="margin-top:10px;font-size:15px">-->
                        <!--        <label>Upload Youtube Video id here</label>-->
                        <!--        <input type="text" name="Youtube_video_url" class="form-control"-->
                        <!--            placeholder="eg:https://www.youtube.com/watch?v=zwWt1zall34"-->
                        <!--            value="{{ isset($data) ? $data->Youtube_video_url : '' }}">-->
                        <!--    </div>-->
                        <!--</div>-->
                        @endif
                    </div>
                    
                    <br><br>
                    
                    <!-- Extra Images Section -->
                    <div class="titlebar">Extra Images<button onclick="return false;" class="btn btn-warning addnew">Add New +</button></div>
                    <br>
                    
                    @php
                    $count = count($property_arr);
                    if ($count < 1) { 
                        $icount = 3; 
                    } else { 
                        $icount = $count; 
                    } 
                    @endphp
                    
                    <section class="container1">
                        <div class="row" id="parent-div">
                            @for($i = 0; $i < $icount; $i++)
                                @php 
                                    if ($count > 0) {
                                        $img = $property_arr[$i];
                                    } else {
                                        $img = $i;
                                    }
                                @endphp
                                <div id="img_{{ $img }}" class="col-md-4 col-lg-2">
                                    <div class="img_box">
                                        <span onclick="remove('{{ $img }}')">
                                            <span class="close-circle">
                                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                                            </span>
                                        </span><br>
                                        @if($count > 0)
                                        <img src="{{ asset('uploads/properties/' . $img) }}" id="{{ $i }}" alt="your image" width="150" height="100">
                                        @else
                                        <img src="{{ asset('website/images/no-image.jpg') }}" id="{{ $i }}" alt="your image" width="150" height="100">
                                        @endif
                                        <br>
                                        <div class="file-upload-wrapper">
                                            @if($count < 1)
                                            <button class="upload-button" onclick="return false;">Upload File</button>
                                            @endif
                                            <input type="file" id="file-input" name="extra_img[]" class="file-input"
                                                onchange="document.getElementById({{ $i }}).src = window.URL.createObjectURL(this.files[0])"
                                                accept="image/*">
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        
                        <br><br><br>
                        
                        <!-- Navigation Buttons -->
                        <section class="button-section">
                            <div class="button-container">
                                <a href="{{ url('description') }}?id=2"
                                    class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover left-align">
                                    <b><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b>
                                </a>
                                <button type="submit"
                                    class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover right-align">
                                    <b>NEXT &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true"
                                            style="float: right"></i></b>
                                </button>
                            </div>
                        </section>
                    </section>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- External JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Internal JavaScript -->
<script>
// Image Cropping Functionality
const fileInput = document.getElementById("fileInput");
const image = document.getElementById("image");
const cropBtn = document.getElementById("cropBtn");
const canvas = document.getElementById("canvas");
const croppedImageContainer = document.getElementById("croppedImageContainer");
const croppedImage = document.getElementById("croppedImage");
const dummyImage = document.getElementById("imagePreview");
const cropControls = document.getElementById("cropControls");
let cropper;

// When user selects a file
fileInput.addEventListener("change", function(event) {
    const file = event.target.files[0];
    if (!file) return;

    const reader = new FileReader();
    reader.onload = function(e) {
        image.src = e.target.result;
        image.style.display = "block"; // Show image
        cropControls.style.display = "block"; // Show crop controls

        // Hide the dummy image
        dummyImage.classList.add("hidden");

        // Destroy previous cropper instance
        if (cropper) cropper.destroy();

        // Initialize Cropper.js
        cropper = new Cropper(image, {
            aspectRatio: 1, // Square crop
            viewMode: 1,
        });
    };
    reader.readAsDataURL(file);
});

// When user clicks "Crop" button
cropBtn.addEventListener("click", function() {
    const croppedCanvas = cropper.getCroppedCanvas();
    canvas.width = croppedCanvas.width;
    canvas.height = croppedCanvas.height;
    const ctx = canvas.getContext("2d");
    ctx.drawImage(croppedCanvas, 0, 0);

    // Convert canvas to image and display it below
    const croppedImg = new Image();
    croppedImg.src = canvas.toDataURL(); // Convert canvas to image URL
    croppedImg.style.maxWidth = "100%"; // Set max width for the cropped image
    croppedImg.style.marginTop = "10px"; // Add some margin

    // Clear previous cropped image and append the new one
    croppedImage.innerHTML = ""; // Clear container
    croppedImage.appendChild(croppedImg); // Append new cropped image

    // Show the cropped image container
    croppedImageContainer.style.display = "block";
});

// Refresh page function
function refreshPage() {
    location.reload();
}

// Video Preview Function
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

// Extra Images Management
let noteBank = document.querySelector(".note_bank");
var i = 3;
let addNew = document.querySelector(".addnew");

addNew.addEventListener('click', () => {
    let scheam = document.querySelector("#scheam").value;
    if (i == scheam) {
        alert("limit is over. Maximum " + scheam + " Photos Allowed.");
        return false;
    }
    i++;
    document.getElementById("parent-div").innerHTML +=
        `<div id="img_${i}" class="col-md-2">
            <div class="img_box">
                <span onclick="remove(${i})">
                    <span class="close-circle">
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </span>
                </span><br>
                <img src="{{ asset('website/images/no-image.jpg') }}" id="${i}" alt="your image" width="150" height="100">
                <br>
                <div class="file-upload-wrapper">
                    <button class="upload-button" onclick="return false;">Upload File</button>
                    <input type="file" name="extra_img[]" id="file-input" class="file-input" onchange="document.getElementById(${i}).src = window.URL.createObjectURL(this.files[0])"accept="image/*">
                </div>
            </div>
        </div>`;
});

function remove(el) {
    i--;
    document.getElementById("img_" + el).remove();
    $.ajax({
        url: "{{ url('removefetchedimage') }}",
        data: {
            id: el
        },
        success: function(data) {}
    });
}

// Image Preview Functions
const fileInputbanner = document.getElementById("fileInputbanner");
const imagePreviewbanner = document.getElementById("imagePreviewbanner");

if (fileInputbanner) {
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
}

// Document Ready Functions
 $(document).ready(function() {
    $('.make_featured').click(function() {
        $.ajax({
            method: 'GET',
            url: "{{ url('/upgrade_featured') }}",
            data: {},
            success: function(data) {
                alert("UPGRADED SUCCESSFULLY");
                location.reload();
            }
        });
    });
});

// Image Validation Function
function validateImage(input) {
    const file = input.files[0];

    if (file && !file.type.startsWith("image/")) {
        alert("Only image files are allowed!");
        input.value = ""; // Reset input
        return false;
    }

    return true; // allow preview
}

document.addEventListener('DOMContentLoaded', function() {
    // Any DOM ready functions can be added here
});
</script>

@endsection