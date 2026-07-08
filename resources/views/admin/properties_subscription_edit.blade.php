@extends('layouts.admin.main')
@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 
</div
@endif
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
        Edit {{$PropertySubscription->Name}}
        </div>
        <div class="card-body">
          <form action="{{url('admin/store_subscription')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$PropertySubscription->id}}">
            <!-- Text Field 1 -->
            <div class="form-group">
              <label for="text1">Name</label>
              <input type="text" class="form-control" id="text1" name="name" placeholder="Enter Text 1" value="{{$PropertySubscription->Name}}" readonly>
            </div>
            <!-- Text Field 2 -->
            <div class="form-group">
              <label for="text2">Price</label>
               <input type="text" class="form-control" id="text1" name="price" placeholder="Enter Text 1" value="{{$PropertySubscription->Price}}">
            </div>
            <div class="form-group">
              <label for="text2">Duration (in days)</label>
               <input type="number" class="form-control" id="text1" name="duration" placeholder="Enter duration" value="{{$PropertySubscription->duration}}">
            </div>
            <!-- Text Field 3 -->
         
          <div class="form-group mb-3">
              <label for="payment_mode">Status</label>
              <select name="payment_mode" id="payment_mode" class="form-control">
                <option value="1" {{ $PropertySubscription->payment_mode == 1 ? 'selected' : '' }}>Active</option>
                <option value="0" {{ $PropertySubscription->payment_mode == 0 ? 'selected' : '' }}>Inactive</option>
              </select>
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('admin/properties_Subscription') }}" class="btn btn-secondary">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection