@extends('layouts.website.main')

@section('content')
<div class="container mb-0 mt-5">
    <div class="row justify-content-center ">
        <div class="col-md-6">
            <div class="border" style="height:400px; margin-top:100px; margin-bottom:100px;" >
                <div class="card-header bg-danger bg-opacity-75">{{ __('Login') }}</div>

                <div class="card-body ">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="container mb-3 position-relative">
                            <div class="container-fluid">
                                <span>Email*</span>
                                <input placeholder="max@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} "  required autocomplete="email" autofocus>
                                <span>Password*</span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                                <div class="form-check d-flex justify-content-between">
                                   <div> <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label></div>
                                     @if (Route::has('password.request'))
                                    <a class=" btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                     
                                </div class="">
                                <div class="mt-2"> <button type="submit" class="btn btn-danger">
                                    {{ __('Login') }}
                                </button>
                                @endif
                                 <a class="btn btn-primary " href="{{ route('register') }}">
                                        {{ __('Register?') }}
                                    </a></div>
                                
                            </div>
                            <!--<div class="col-md-6 position-absolute top-0 start-50 translate-middle">-->
                            
                            <!--    <input placeholder="max@gmail.com" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }} "  required autocomplete="email" autofocus>-->

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
                                @enderror-
                        </div>

                        <div class="container mb-3  position-relative">
                            <div class="conteiner-fluid ">
                                
                                
                        <!--    </div>-->
                            <!--<label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

                            <!--<div class="col-md-6">-->
                            <!--    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

                            <!--    @error('password')-->
                            <!--        <span class="invalid-feedback" role="alert">-->
                            <!--            <strong>{{ $message }}</strong>-->
                            <!--        </span>-->
                            <!--    @enderror-->
                            <!--</div>-->
                        <!--</div>-->

                        <!--<div class="row mb-3">-->
                        <!--    <div class="col-md-6 offset-md-4">-->
                                <!--<div class="form-check">-->
                                <!--    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

                                <!--    <label class="form-check-label" for="remember">-->
                                <!--        {{ __('Remember Me') }}-->
                                <!--    </label>-->
                                <!--</div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="row mb-0">-->
                        <!--    <div class="col-md-8 offset-md-4 login-footer">-->
                        <!--        <button type="submit" class="btn btn-primary">-->
                        <!--            {{ __('Login') }}-->
                        <!--        </button>-->

                                <!--@if (Route::has('password.request'))-->
                                <!--    <a class="btn btn-link" href="{{ route('password.request') }}">-->
                                <!--        {{ __('Forgot Your Password?') }}-->
                                <!--    </a>-->
                                <!--@endif-->
                                <!-- <a class="btn btn-link" href="{{ route('register') }}">-->
                                <!--        {{ __('Register?') }}-->
                                <!--    </a>-->
                        <!--    </div>-->
                        <!--</div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
