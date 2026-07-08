@extends('layouts.website.main')

@section('content')
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

                    <form method="GET" action="/reset_password">
                      

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class=" " style="background-color:#d3111a;color:#fff;border:0;height:40px;">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
