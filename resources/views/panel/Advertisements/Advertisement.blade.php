@extends('layouts.panel.main')
@section('content')

<?php
    foreach($Advertisement1 as $p)
            {
             $a[$p->id]=$p->page_name;
             $a=array_unique($a);
            }
            ?>
<!--search start-->
<style>
img{
  max-width:180px;
}
input[type=file]{
padding:10px;
background:#2d2d2d;}
a {
    text-decoration: none;
    color: inherit;
}
    .search
    {
        margin-top:60px;
         font-size:13px !important; 
    }
    .table
    {
        
       font-size:13px !important; 

    }
    .title
    {
        color:red;
        font-weight:500;
        font-size:40px;
    }
    @media(max-width:768px){
        .title{
        font-size:30px;
            
        }
    }
</style>
<main class="container">
    <center><p class="title"><b>Advertisements</b></p></center>
<section class="card section search">
         <div class="card-header">
    SEARCH
  </div>
  <div class="card-body">
      
    <table border="0" width="100%">
        <form action="">
        <tr>
            <td width="5%">
               &nbsp;
            </td>
            <td  width="75%">
              
                <select name="page_name" class="form-control" required>
                     <option value="">--Select Page--</option>
                    <option value="all">All Pges</option>
                    <?php foreach($a as $id =>$page_name)
                    {
                        ?>
                        <option value="<?=$page_name?>"><?=$page_name?></option>
                   <?php }
                 ?>
                </select>
                </td> 
                <td width="5%">
                &nbsp;
               </td>
                
            <td >
                <style>
       .search-btn
   {
       width:150px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:0%;
   }
   .ad_img {
            width: 170px;
            height: 100px;
        }
        
        /*added media query for medium and large device*/
        @media(min-width:768px){
             .search-btn{
            width:120px;
            border-radius:15px;
            }
            .form-control{
                font-size:2rem;
                padding:0px 5px;
            }
        }
        
        /*added media query for the button to make it smaller on mobile view*/
        
        @media(max-width:768px){
            .search-btn{
            width:70px;
            border-radius:15px;
            }
            .form-control{
                font-size:1.5rem;
            }
        }
        
          @media (max-width: 576px) {
    .text-warning {
      font-size: 1.1rem; 
    }
  }
</style>
               <button type="submit" name="search" class="search-btn" >Search</button>
            </td>
            </form>
        </tr>
    </table>
  </div>
</section><br><br>
<!--==========search end===============-->
<section class="section">
   
<div class="card">
  <div class="card-header">
  <h4> @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 </div>
@endif </h>
  </div>
  <div class="card-body table-responsive d-none d-lg-block">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Page Name</th>
       <th scope="col">Position</th>
       <th scope="col">Duration</th>
      <th scope="col">Price</th>
      <th scope="col">Add Now</th>
    </tr>
  </thead>
  <tbody>
      @forelse($Advertisement as $p)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
      <th scope="row">{{$p->page_name}}</th>
      <th scope="row">{{$p->position}}</th>
      <th scope="row">{{$p->duration}}&nbsp;Days</th>
      <td>€&nbsp;{{$p->price}}&nbsp;</td>
      
      <td>
<button type="button" class="btn btn-warning btn-sm fs-5" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Add Now</button>
   <!--===============MOEDEL STARTS=================-->
<!--===============MOEDEL ENDS=================-->
   </td>
      
    </tr>
    @empty
    <tr><span style="color:red">NO DATA FOUND!</span></tr>
   @endforelse
  
  </tbody>
</table>
<center>
    <section style="padding:10px">
 {{ $Advertisement->links() }}
 </section>
 </center>
  </div>
  
  <div class="card-body d-block d-lg-none fs-4">
    <div class="row">

        @forelse($Advertisement as $p)
        <div class="col-6 col-md-4 mb-3">
            <div class="card shadow-sm h-100">
                <div class="card-body p-2">

                    <p><strong>#:</strong> {{$loop->iteration}}</p>
                    <p><strong>Page Name:</strong> {{$p->page_name}}</p>
                    <p><strong>Position:</strong> {{$p->position}}</p>
                    <p><strong>Duration:</strong> {{$p->duration}} Days</p>
                    <p><strong>Price:</strong> € {{$p->price}}</p>

                    <button type="button" 
                            class="btn btn-warning btn-sm w-100 fs-4"
                            data-toggle="modal" 
                            data-target="#adminproductsmodal{{$p->id}}">
                        <i class="fa fa-plus"></i> Add Now
                    </button>

                </div>
            </div>
        </div>
        
        @empty
        <div class="col-12 text-center text-danger">
            NO DATA FOUND!
        </div>
        @endforelse

    </div>
    
    

    <center>
        <section style="padding:10px">
            {{ $Advertisement->links() }}
        </section>
    </center>
</div>

</div>
@foreach($Advertisement as $p)
<div class="modal" id="adminproductsmodal{{$p->id}}" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header fs-4" style="background-color:#d3111a;">
        <h5 class="modal-title text-center">{{$p->page_name}} / {{$p->position}}</h5>
      </div>
      <div class="modal-body">

        <form method="POST" action="{{url('panel/addtheads')}}" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="ad_id" value="{{$p->id}}">
          <input type="hidden" name="duration" value="{{$p->duration}}">
          <input type="hidden" name="price" value="{{$p->price}}">

          <div class="form-group">
            <label>URL</label>
            <input type="text" class="form-control" name="url">
          </div>

          <div class="form-group text-center">
            <label>Image</label>
            <input type="file" onchange="readURL(this);" name="image" />
            <br><br>
            <img class="blah" src="http://placehold.it/300" width="200">
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary fs-5" data-dismiss="modal">Close</button>
            <button type="submit" class="btn text-light fs-5" style="background-color:#d3111a;">Add Ad</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endforeach

</section>
</main><br>
<script>
    function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection