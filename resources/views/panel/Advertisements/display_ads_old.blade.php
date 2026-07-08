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
      .search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:0%
   }
   .ad_img {
            width: 170px;
            height: 100px;
        }
    @media(max-width:768px){
        .title{
            font-size:20px;
        }
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

</style>
<main class="container">
    <center><p class="title"><b>My Ads</b></p></center>
    <div style="float:right"><a href="{{url('add_ad')}}" class="btn btn-warning font-roboto regular " type="button" >
                                    <span></span><span class="" style="font-size:14px;">+Add new add</span>
                                </a></div>
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
                     <option value="">---Select Page--</option>
                    <option value="all">All Pges</option>
                    <?php foreach($a as $id =>$page_name)
                    {
                        $sel="";
                        if(isset($_GET['page_name']))
                        {
                           if($_GET['page_name']==$page_name) 
                           {
                               $sel="selected";
                           }
                           else
                           {
                               $sel="";
                           }
                        }
                        ?>
                        <option value="<?=$page_name?>" <?=$sel?>><?=$page_name?></option>
                   <?php }
                 ?>
                </select>
                </td> 
                <td width="5%">
                &nbsp;
               </td>
                
            <td >
  
               <button type="submit" name="search" class="search-btn" >Search</button>
            </td>
            </form>
        </tr>
    </table>
  </div>
</section><br><br>
<!--==========search end===============-->
<section class="section">
    @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
<div class="card">
  <div class="card-header">
  <h4> @if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 </div>
@endif </h>
  </div>
   <!--added table-responsive from bootstrap for making the table mobile responsive-->
  <div class="card-body table-responsive">
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
      <th scope="col">SL No</th>
      <th scope="col">Image</th>
       <th scope="col">Page</th>
       <th scope="col">Position</th>
        <th scope="col">Url</th>
      <th scope="col">Price / Duration</th>
     
       <th scope="col">Status</th>
        <th scope="col">Display Status</th>
       <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @forelse($Advertisement as $p)
    <tr>
        <td  class="mt-4">{{$Advertisement->firstItem() + $loop->index }}</td>
         <td> <img src="{{asset('uploads/ads/'.$p->image)}}" class="ad_img"></td>
       <td   class="mt-4">{{$p->page_name}}</td>
       <td  class="mt-4">{{$p->position}}</td>
      <td class="mt-4"><a href="{{$p->url}}" target="_blank">{{$p->url}}</a></td>
       <td>€&nbsp;{{$p->price}}&nbsp;/&nbsp;{{$p->duration}}&nbsp;Days</td>
      
       <td>
            @if($p->status==1)
                        
                         <p class="text-success subscripe "><b>Approved <b></p> 
                        
                  @elseif($p->status==2)
                     <p class="text-danger subscripe"><b>Denied <b></p>
                     @else
                      <p class="text-primary subscripe"><b>Pending <b></p>
                 @endif
                 
     </td>
     <td>
            @if($p->payment_status==1)
                        
                         <p class="text-success subscripe "><b>Active <b></p> 
                        
                  @elseif($p->expired_status==2)
                      <button class="btn btn-sm btn-warning "><b> <a href="{{url('pay_ad'.$p->id)}}"><span class="subscribe-ico"></span>Renew Now</a> <b></button>
                     @else
                      <button class="btn btn-sm btn-warning "><b> <a href="{{url('pay_ad'.$p->id)}}"><span class="subscribe-ico"></span>Pay Now</a> <b></button>
                 @endif
                 
     </td>
       <td align="center"  class="mt-4">
<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Now</button>
  <td align="center"  class="mt-4">
<a href="{{url('delete_ad'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" aria-hidden="true"
style="color:red;font-size:15px;font-weight:800"></i></a>

   <!--===============MOEDEL STARTS=================-->
<model>
    
<div class="modal" id="adminproductsmodal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header"style="background-color:#d3111a;">
        <h5 class="modal-title text-center" id="exampleModalLabel">{{$p->page_name}} / {{$p->position}}</h5>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{url('panel/editAds')}}" enctype="multipart/form-data" id="addAdForm">
          @csrf
          <input type="hidden" name="ad_id" value="{{$p->ad_id}}">
           <input type="hidden" name="id" value="{{$p->id}}">
           <input type="hidden" name="duration" value="{{$p->duration}}">
           <input type="hidden" class="form-control" name="price" value="{{$p->price}}">
          <!--<div class="form-group">-->
          <!--  <label for="recipient-name" class="col-form-label">Button Text</label>-->
          <!--  <input type="text" class="form-control" name="url">-->
          <!--</div>-->
          <div class="form-group" style="display:none1">
            <label for="recipient-name" class="col-form-label">Url</label>
            <input type="text" class="form-control" name="url" value="{{$p->url}}">
          </div>
          
          <div class="form-group">
              <center>
            <label for="fileInput" >Current Image</label>&nbsp;
            <img  src="{{asset('uploads/ads/'.$p->image)}}"><br>
          <br><br>  <input type='file' onchange="readURL(this);" name="image"/>
             <br><br>
             <img class="blah" src="http://placehold.it/300" alt="your image" />
             
            <br><br>
            <!--<h5 class=" text-warning">(Image Size should be Maximum 3KB/allowed type:jpg,jpeg,png)</h5>-->
            </center>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn text-light" style="background-color:#d3111a;" id="submitButton">Add Ad</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</model>
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
</div>

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