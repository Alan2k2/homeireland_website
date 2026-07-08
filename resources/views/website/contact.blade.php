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


   <div class="section" style="margin-top: 60px;">
    <div class="container">
        <div class="row mb-5">
            @if(Session::has('confirm'))
                <span class="alert alert-success">
                    <p class="text-success">Enquiry Submitted</p>
                </span>
            @endif

            <div class="form-container1">
                    <h2 class="text-center mb-4"><b>ENQUIRY TO HOMEIRELAND</b></h2> 

               <form action="{{url('/contact-enquiry')}}" method="POST">
                   @csrf
    <input type="hidden" name="id" value="">
    <input type="hidden" name="enquiry_flag" value="">

    <div class="form-group1">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
    </div>

    <div class="form-group1">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
    </div>

    <div class="form-group1">
        <label for="phone">Phone</label>
        <input type="tel" class="form-control" name="phone" placeholder="Enter your phone number" required>
    </div>

    <div class="form-group1">
        <label for="category">Category</label>
        <select class="form-control" name="category" required>
            <option value="">Select a category</option>
            <option value="rent">Rent</option>
            <option value="parking">Parking</option>
            <option value="payment">Payment</option>
            <option value="refund">Refund</option>
            <option value="tl">Trouble Login</option>
        </select>
    </div>

    <div class="form-group1">
        <label for="message">Message</label>
        <textarea class="form-control" name="message" rows="3" placeholder="Enter your message" required></textarea>
    </div>

    <br>

    <center>
        <button style="font-size: 13px" type="submit" class="contactbtn">SUBMIT</button>
    </center>
</form>

            </div>
        </div>
    </div>
</div>
    
    
    
    <!-- /.untree_co-section -->
    @endsection