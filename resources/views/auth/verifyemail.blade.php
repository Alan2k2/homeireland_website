@extends('layouts.website.main')

@section('content')
<style>
@media(max-width:600px){
    .card{
        margin: 100px 0px;
}
}
   
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <p class="text-danger fw-bold text-center my-2 fs-5 ">A verification code is sent to your registered email , Please complete the registration proccess</p>
                <div class="card-body">
                     @if ($message = Session::get('status'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
                    <form method="POST" action="/verify_code">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Verification Code') }}</label>
                            <input type="hidden" class="user-email" value="{{ Auth::user()->email }}">
                            <div class="col-md-6">
                                <input id="inputelement" type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required autocomplete="code" autofocus>

                                @error('code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4 login-footer">
                                <button type="submit" class="btn btn-danger" id="subbtn">
                                    {{ __('Submit') }}
                                </button>
                                <a class="btn btn-link not-received" href="{{ route('login') }}">
                                    {{ __('Back to Login') }}
                                </a>
                            </div>
                        </div>
                    </form>
                      <center><br>
                        <a href="/contact_us"><h6 class="btn btn-sm btn-warning">TROUBLE TO LOGIN</h6></a>
                      </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>

<script>
$(document).ready(function() {
    // Enable or disable submit button based on input value
    var inputelement = document.getElementById('inputelement');
    var button = document.getElementById('subbtn');
    button.disabled = true;

    inputelement.addEventListener("input", function(event) {
        var otpvalue = inputelement.value.trim();
        button.disabled = otpvalue.length === 0;
    });

    // Handle "Not Received" link
    $('.not-received').click(function(event) {
        event.preventDefault();
        // Redirect to login page
        window.location.href = $(this).attr('href');
    });

    // Detect back button press
    window.onpopstate = function(event) {
        // Redirect to login page
        window.location.href = "{{ route('login') }}";
    };
});
</script>
@endsection
