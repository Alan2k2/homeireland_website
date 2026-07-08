@extends('layouts.website.main')
@section('content')
<div class="container" style="height:500px;margin-top:150px;">
    <h1></h1>
   <form method="post" action="upload-city">
    @csrf
<input type="text" class="form-control" name="name">
<select name="county" class="form-control">
    @foreach($counties as $county)

    <option value="{{$county->name}}" {{$county->name=='Cavan'?'selected':''}}>{{$county->name}}</option>
    @endforeach
    
</select>
<button type="submit">Submit</button>
</form> 
</div>
<img src="{{ url('stamp-image') }}" alt="Stamped Image" width="600" height="350">
@endsection
