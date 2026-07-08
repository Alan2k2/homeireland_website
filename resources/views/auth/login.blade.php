@extends('layouts.website.main')

@section('content')

<style>
    .login_page {
        height: 48rem;
        width: 40rem;
        margin-top: 100px;
        margin-bottom: 100px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        border-radius: 10px;
    }

    .page_title {
        padding: 10px;
        background-color: #d3111a;
        text-align: center;
        border-radius: 10px 10px 0 0;
    }

    .page_title h4,
    .page_title h6 {
        color: #FFF;
    }

    .card-body {
        padding: 30px 10px !important;
    }

    @media (max-width: 767px) {
        .login_page {
            width: 35rem;
            padding: 5px 15px;
        }
    }

    @media (max-width: 380px) {
        .login_page {
            width: 28rem; 
            padding: 5px 10px;
            height: 38rem;
            margin-top: 50px;
            margin-bottom: 50px;
        }
        .card-body {
            padding: 10px 5px !important; 
        }
        .form-group label {
            font-size: 1.5rem; 
        }
        .form-control {
            font-size: 1.5rem; 
            padding: 5px; 
        }
        .form-check-label {
            font-size: 10px; 
        }
        .form-control[type="submit"], .form-control[type="button"] {
            font-size: 1.5rem;
            padding: 5px; 
        }
        .btn-link {
            font-size: 1rem; 
            margin-top: 1;
        }
        .container-fluid{
            margin-bottom: 3px;
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
    top: 80%;
    transform: translateY(-50%);
    cursor: pointer;
    font-size: 14px; /* Adjust the size of the eye icon */
}

</style>
     
<div class="mt-5 py-2">
    <div class="d-flex align-items-center justify-content-center" style="height:120%;border:1px solid red;">
  
        <div class="login_page">
            <div class="page_title">
                <h4> Welcome Back!</h4>
                <h6>Agent /Dealer And Personal Login Only </h6>
                  @if ($message = Session::get('changepassword'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 <div class="card">
        <div class="card-body">
            @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
@if ($message = Session::get('fail'))
<div class="alert alert-danger " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
</div>
@endif
            </div>

            <div class="card-body ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="container mb-3 position-relative">
                        <div class="container-fluid">
                            <div class="form-group">
                                <label class="">Email</label>
                                <input placeholder="example@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} " required autocomplete="email" autofocus>
                            </div>
                            <div class="form-group mt-3 password-container">
                                <label>Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password" size="100"><i class="toggle-password" onclick="togglePassword()"><i class="fas fa-eye"></i></span>️</i>
                            </div>

                            <div class="form-check d-flex justify-content-between align-items-center mt-3">
                                <div>
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember')?'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                <a class="fs-sm-2" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" class="form-control" style="background-color:#d3111a;border:0; color:#fff;">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            @endif
                            <div class="mt-4 text-center ">
                                <span>Register New Account?
                                    <a href="{{url('/register')}}" style="color:blue; text-decoration: underline;">Sign Up</a>
                                </span>
                            </div>
                            <div class="mt-4 text-center "><span>Can't Login?
                                    <a href="{{url('/contact_us')}}" style="color:blue; text-decoration: underline;">Contact Us</a>
                            </div>
                        </div>
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <!--</div>-->
                        @error('password')-->
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                </form>
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
</script>
@endsection