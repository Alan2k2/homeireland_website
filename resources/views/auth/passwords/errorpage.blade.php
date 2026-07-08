@extends('layouts.website.main')
@section('content')
   

<style>

form {
    border: 2px solid red; 
    border-radius: 10px;
    padding: 15px;
    transition: box-shadow 0.3s ease-in-out;
}

form:hover {
    box-shadow: 0 0 15px rgba(255, 0, 0, 0.7); 
}
    .form-container1 {
        max-width: 600px;
        margin: 0 auto;
        padding: 15px; 
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .contactbtn {
        background-color: #000;
        color: #fff;
        border: none;
        width: 100%;
        padding: 8px;
        border-radius: 15px;
    }

    .contactbtn:hover {
        background-color: red;
    }

    .form-group1 {
        margin-bottom: 10px; 
    }

  .form-control {
    border-radius: 10px;
    padding: 8px;
    width: 100%;
    transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.form-control:hover, .form-control:focus {
    border-color: #007BFF; 
    box-shadow: 0 0 8px rgba(0, 123, 255, 0.6); 
    outline: none;
}

    .form-container1 h2 {
        color: #333;
        margin-bottom: 20px;
    }

    .form-container1 label {
        color: #333;
    }
</style>

<br><br><br><br><br><br><br><br><br><br>

   <div class="section" style="margin-top: 60px;">
    <div class="container">
        <div class="row mb-5">
            @if(Session::has('confirm'))
                <span class="alert alert-success">
                    <p class="text-success">Enquiry Submitted</p>
                </span>
            @endif

            <div class="form-container1">
                    
                <P style="color:red" style="h3">RESET LINK HAS BEEN EXPIRED</P>
                <P style="text-black h4">CONTACT US FOR <strong>NEW PASSWORD</strong></P>
              <a href="/"><button class="btn-warning btn">GO HOME</button></a>
              <a href="https://homeireland.ie/contact_us" tagret="_blank"><button class="btn-warning btn">Contact Us</button></a>
            </div>
        </div>
    </div>
</div>
    
    <br><br><br><br><br><br><br><br><br><br>
    
    <!-- /.untree_co-section -->
    @endsection