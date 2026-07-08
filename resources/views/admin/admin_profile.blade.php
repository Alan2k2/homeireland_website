@extends('layouts.admin.main')
@section('content')



@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header">
        Edit 
        </div>
        <div class="card-body">
          <form action="{{url('admin/admin_update_store')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$admin->id}}">
            <!-- Text Field 1 -->
            <div class="form-group">
              <label for="text1">Name</label>
              <input type="text" class="form-control" id="text1" name="name" placeholder="Enter name" value="{{$admin->name}}" >
            </div>
            <!-- Text Field 2 -->
            <div class="form-group">
              <label for="text2">Email</label>
               <input type="email" class="form-control" id="text1" name="email" placeholder="Enter email" value="{{$admin->email}}">
            </div>
            <div class="form-group">
              <label for="text2">Phone</label>
               <input type="number" class="form-control" id="text1" name="phone" placeholder="Enter phone" value="{{$admin->phone}}">
            </div>
            <div class="form-group">
              <label for="text2">Whats app Number</label>
               <input type="number" class="form-control" id="text1" name="whatsapp" placeholder="Enter whatsapp Number" value="{{$admin->whatsapp}}">
            </div>
            <!-- Text Field 3 -->
          <div class="form-group">
              <label for="text2">Address</label>
               <input type="text" class="form-control" id="text1" name="address" placeholder="Enter address" value="{{$admin->address}}">
            </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection