@extends('layouts.website.main')
@section('content')

<div class="container mt-4">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 mt-5">
            <div class="mt-5 border">
                <div class="card-header bg-danger bg-opacity-75">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="container mb-3 position-relative">
                           

                            <div class="container-fluid">
                                 <span>Name*</span>
                                <input placeholder="Enter Your Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="container mb-3 position-relative">
                                                            


                            <div class="container-fluid">
                                 <span>Email*</span>
                                <input placeholder="Enter Email Address" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="container mb-3 position-relative">
                            
                            <div class="container-fluid">
                                <span>Phone Number*</span>
                                <input placeholder="Enter Your Number" id="phone" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="email">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                         <div class="container mb-3 position-relative">
                           
                            <div class="container-fluid">
                                <span>Address*</span>
                           
                                <textarea class="form-control noResize" rows="6" id="address" name="address"></textarea>
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>                       
                        <div class="container mb-3 position-relative">
                            
                            <div class="container-fluid">
                                <span>Password*</span>
                                <input placeholder="Enter Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="container mb-3 position-relative">
                            

                            <div class="container-fluid">
                                <span>Confirm Password*</span>
                                <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0 ">
                            <div class="mt-5 login-footer position-relative">
                                <button type="submit" class="btn btn-primary position-absolute top-0 start-50 translate-middle ">
                                    {{ __('Register') }}
                                </button>
                            </div>
                            <span class="underline">Already Registered? Please <a class="" href="{{url('/login')}}" >LogIn</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
