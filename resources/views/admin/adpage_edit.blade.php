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
        Edit {{$Advertisement->page_name}} - {{$Advertisement->position}}
        </div>
        <div class="card-body">
          <form action="{{url('admin/store_Advertisement')}}" method="POST">
              @csrf
              <input type="hidden" name="id" value="{{$Advertisement->id}}">
            <!-- Text Field 1 -->
            <div class="form-group">
              <label for="text1">Name</label>
              <input type="text" class="form-control" id="text1" name="page_name" placeholder="Enter Text 1" value="{{$Advertisement->page_name}}" readonly>
            </div>
             <!-- Text Field 2 -->
            
            <div class="form-group">
              <label for="text2">Position</label>
               <input type="text" class="form-control" id="text1" name="position" placeholder="Enter Text 1" value="{{$Advertisement->position}}" readonly>
            </div>
            <div class="form-group">
              <label for="text2">Duration <small>(In Days)</small></label>
               <input type="text" class="form-control" id="text1" name="duration" placeholder="Enter Text 1" value="{{$Advertisement->duration}}" >
            </div>
            <!-- Text Field 2 -->
            <div class="form-group">
              <label for="text2">Price  €</label>
               <input type="text" class="form-control" id="text1" name="price" placeholder="Enter Text 1" value="{{$Advertisement->price}}">
            </div>
            
             <!-- Text Field 2 -->
           <div class="form-group">
              <label for="text2">Status</label>
              <?php
              $a=$b="";
              if($Advertisement->status==1)
              {
              }
               if($Advertisement->status==0)
              {
                  $b="selected";
              }
              
              ?>
              <select name="status" class="form-control">
                  <option value="1"<?=$a?>>Active</option>
                  <option value="0" <?=$b?>>Inactive</option>
              </select>
          </div>
            <!-- Text Field 3 -->
          <div class="form-group">
              <label for="text2">Payment Status</label>
              <?php
              $a=$b="";
              if($Advertisement->payment_status==1)
              {
              }
               if($Advertisement->payment_status==0)
              {
                  $b="selected";
              }
              
              ?>
              <select name="payment_status" class="form-control">
                  <option value="1"<?=$a?>>Active</option>
                  <option value="0" <?=$b?>>Inactive</option>
              </select>
          </div>
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">UPDATE</button>
            <a href="{{url('admin/Advertisement_page')}}?a=1&&b=1" class="btn btn-secondary ml-2">Back</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection