@extends('layouts.website.main')

@section('content')
@if(session('status'))
    <script>
        // Redirect to login page after 5 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/login') }}";
        }, 1000);
    </script>
@endif

<div class="container">
    <div class="container col-lg-8 col-md-12  col-sm-12 col-xs-12"  >
            <div class="" style=" margin-top:100px; margin-bottom:100px;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;"  >
                <div class="card-header  " style="background-color:#d3111a;">Reset Password</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="/change_password_store1" id="passwordForm">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('  Enter New Password') }}</label>

                            <div class="col-md-6">
                            <input  type="text" class="form-control @error('email') is-invalid @enderror" name="password" 
                            id="password" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                         <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('  Re-enter  Password') }}</label>

                            <div class="col-md-6">
                                <input  id="confirmPassword" type="text" class="form-control @error('email') is-invalid @enderror" name="cpassword" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div><br>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <center>
                                <input  type="submit" value="Submit"style="background-color:#d3111a;color:#fff;border:0;height:40px;width:200px">
                                   </center>
                               <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
     <script>
        document.getElementById('passwordForm').addEventListener('submit', function(event) {
            // alert("hi")
            var password = document.getElementById('password').value;
            // alert(password)
            var confirmPassword = document.getElementById('confirmPassword').value;
            //  alert(confirmPassword)
            var message = '';
            
            if (password !== confirmPassword) {
                message.textContent = "Passwords do not match!";
                 alert("Passwords do not match!")
                //  return false;
                event.preventDefault(); // Prevent form submission
               
            } else {
                message.textContent = ""; // Clear any previous message
            }
        });

       
    </script>
    
    
@endsection
