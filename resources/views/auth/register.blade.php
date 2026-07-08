@extends('layouts.website.main')
@section('content')
<style> 
.register{
        border: 1px solid lightgray;
        border-radius: 10px;
}
.page_title{
        padding:20px 0 20px 0;
        background-color:#d3111a;
        text-align: center; 
        border-radius: 10px 10px 0 0;  
    }
    .page_title h4{
        color: #FFF;
    }
     .card-body {
        padding: 10px 10px !important;
    }
    .radio input[type="radio"] {
            margin-left: 15px;
    }

    @media (max-width: 500px) {
    .register {
        width: 90%; 
        padding: 10px 15px; 
        margin: 20px auto; 
    }
    .page_title {
        padding: 15px 0; 
    }
    .form-group label, .form-check-label, .btn-link {
        font-size: 2rem; 
    }
    .form-control {
        font-size: 2rem; 
        padding: 10px; 
    }
    .form-control[type="submit"], .form-control[type="button"] {
        font-size: 2rem; 
        padding: 10px;
    }
}

.password-container {
    position: relative;
    display: inline-block;
}

#password {
    padding-right: 0px; /* Space for the eye icon */
    width: 100%;
    box-sizing: border-box;
}

.toggle-password {
    position: absolute;
    right: 10px;
    top: 45px;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 14px; 
}

.toggle-passwordtwo{
    position: absolute;
    right: 10px;
    top: 70%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 14px;
}

.label-size{
    font-size: larger;
}

</style>
    <div class="row justify-content-center mt-5 mb-5">
        <div class="col-md-5 mt-5">
            <div class="mt-5 register">
                <div class="page_title">
                    <h4>{{ __('Register') }}</h4>
                </div>
                <div class="card-body mx-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mt-3">
                            <label class="label-size">Name<span style="color:red">*</span></label>
                            <input placeholder="Enter Your Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        <div class="form-group mt-3">
                             <label class="label-size">Email<span style="color:red">*</span></label>
                            <input placeholder="Enter Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label class="label-size">Phone Number<span style="color:red">*</span></label>
                            <div style="display:flex">
                            <input type="tel" id="phoneNumberInput" placeholder="+353" size="2" name="code" style="border: 1px solid rgb(221, 221, 221);" 
                            value="+353" required>
                                <input placeholder="Enter Your Number" id="phone" type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" 
                                value="{{ old('phone') }}" required autocomplete="email">
 </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                            <label class="label-size">Whats app Number</label>
                            <div style="display:flex">
                            <input type="tel" id="phoneNumberInput" placeholder="+353" size="2" 
                            name="codew" style="border: 1px solid rgb(221, 221, 221);" value="+353" >
                                <input placeholder="Enter Your Number" id="whatsapp" type="tel" class="form-control @error('phone') is-invalid @enderror" name="whatsapp" 
                                value="{{ old('whatsapp') }}"  autocomplete="whatsapp">
 </div>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       <div class="form-group mt-3">
                                <label class="label-size">Address<span style="color:red">*</span></label>
                           
                                <textarea class="form-control noResize" rows="4" id="address" name="address" required>{{ old('address') }}</textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div> 
                         <div class="form-group mt-3 radio">
                             <?php $acheck=$ascheck=$pcheck=""?>
                             @if(old('role')=="agent")
                             @php
                             $acheck="checked";
                             @endphp
                             @endif
                             
                             @if(old('role')=="pseller")
                             @php
                             $pcheck="checked";
                             @endphp
                             @endif
                             
                             @if(old('role')=="Aseller")
                             @php
                             $ascheck="checked";
                             @endphp
                             @endif
                                            <label class="form-label d-block mb-2 fw-medium">Choose Type <span class="text-danger">*</span></label>
    
    <div class="d-flex flex-wrap gap-3">
        <div class="form-check d-flex align-items-center gap-2">
            <input class="form-check-input m-0" type="radio" id="agent" name="role" value="agent" <?= $acheck ?> required>
            <label class="form-check-label" for="agent">Agent / Dealer</label>
        </div>
        
        <div class="form-check d-flex align-items-center gap-2">
            <input class="form-check-input m-0" type="radio" id="property" name="role" value="pseller" <?= $ascheck ?> required>
            <label class="form-check-label" for="property">User</label>
        </div>
    </div>
</div>
          
                           
                        </div>

                        <div class="form-group mt-3 password-container"  >
                                <label class="label-size">Password<span style="color:red">*</span></label>
                                <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror password" name="password" required autocomplete="new-password" size="100"required > <i class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>️</i>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                           <div class="form-group mt-3  password-container">
                                <label class="label-size">Confirm Password<span style="color:red">*</span></label>
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" size="100" required><i class="toggle-passwordtwo" onclick="togglePasswordtwo()" ><i class="fas fa-eye"></i></span>️</i>
                        </div>
                       
                            <div>   


                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="form-control" style="font-size:large; background-color:#d3111a;border:0; color:#fff;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                           <div class="my-4 text-center label-size">
                                <span>Already Registered?  
                                    <a href="{{url('/login')}}" style="color:blue; font-size:large; text-decoration: underline;" >Login</a>
                                </span>
                           </div>
                           
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var icon = document.querySelector(".toggle-password");
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon if needed
    } else {
        passwordInput.type = "password";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon back to original
    }
}
function togglePasswordtwo() {
    var passwordInput = document.getElementById("password-confirm");
    var icon = document.querySelector(".toggle-passwordtwo");
    
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon if needed
    } else {
        passwordInput.type = "password";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon back to original
    }
}

</script>
@endsection
