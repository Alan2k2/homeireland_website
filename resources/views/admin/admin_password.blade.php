@extends('layouts.admin.main')
@section('content')


@if ($message = Session::get('fail'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
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
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
          <form action="{{url('admin/admin_password_update')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$admin->id}}">
            <!-- Text Field 1 -->
            
            <!-- Text Field 2 -->
            <div class="form-group">
              <label for="text2">Enter New Password</label>
               <input type="text" class="form-control" id="text1" name="new_password" placeholder="Enter New Password" value=""required>
            </div>
            <div class="form-group">
              <label for="text2">Confirm Password</label>
               <input type="text" class="form-control" id="text1" name="confirm_password" placeholder="Enter New Password again" value=""required>
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