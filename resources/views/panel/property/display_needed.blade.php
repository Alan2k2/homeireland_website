@extends('layouts.panel.main')
@section('content')
<!--search start-->
<style>
    .view:hover
    {
color:blue !important;
/* font-size:15px; */
cursor: pointer;

    }
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
    <center><p class="title"><b>My Needed property</b></p></center>
    <div style="float:left"><a href="{{url('display_property')}}" class="btn btn-warning font-roboto regular " type="button" >
                                    <span></span><span class="" style="font-size:14px;"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View All Property</span>
                                </a>
                                <a href="{{url('needed')}}" class="btn btn-warning font-roboto regular add-prop">
                                <span></span><span class="" style="font-size:14px;">+Add Needed  </span></a>
                            </div>

                               
                            </div>
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
             <!--changed the width to 45% in addition to the media added to the search button-->
            <td  width="75%">
              
                <select name="main_name" class="form-control" required>
                     <option value="">---Select category--</option>
                    <option value="all">All category</option>
                    @foreach($main_Cat as $m)
                    <option value="{{$m->id}}">{{$m->main_name}}</option>
                    @endforeach
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
       <th scope="col">Titles</th>
       <th scope="col">Category</th>
       <th scope="col">Property Type</th>
       <th scope="col">Payment Mode</th>
       <th scope="col">Payment Status</th>
       <th scope="col">Status</th>
       <th scope="col">View</th>
       <th scope="col">Edit</th>
       <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
      @forelse($property as $p)
    <tr>
       <td  class="mt-4">{{$loop->iteration}}</td>
       <td> {{$p->feature}}</td>
       <td   class="mt-4">{{$p->main_name}}</td>
       <td  class="mt-4">{{$p->property_type}}</td>
       <td  class="mt-4"><p>{{$p->Name}}</p></td>
       <td>
            @if($p->payment_status==1)
                        
            <p>Completed </p> 
                        
                  @elseif($p->expired_status==2)
                      <button class="btn btn-sm btn-warning "><b> <a href="{{url('pay_ad'.$p->id)}}"><span class="subscribe-ico"></span>Renew Now</a> <b></button>
                     @else
                      <button class="btn btn-sm btn-warning "><b> <a href="{{url('pay_ad'.$p->id)}}"><span class="subscribe-ico"></span>Pay Now</a> <b></button>
                 @endif            
     </td>
     <td>
            @if($p->status==1)
                        
                         <p class="text-success subscripe "><b>Approved <b></p> 
                        
                  @elseif($p->status==2)
                     <p class="text-danger subscripe"><b>Denied <b></p>
                     @else
                      <p class="text-primary subscripe"><b>Pending <b></p>
                 @endif
                 
     </td>
   <td align="left"  class="mt-4 text-success view">
    <a href="{{url('view_property')}}?view_id={{$p->id}}&&needed=1"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</a>
    </td>
    <td align="center"  class="mt-4">
      <a href="{{url('location')}}?id=2&edit_id={{$p->id}}"> <button type="button" class="btn btn-success btn-sm" >
        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Now</button></a>
    </td>
  <td align="center"  class="mt-4">
<a href="{{url('delete_ad'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" aria-hidden="true"
style="color:red;font-size:15px;font-weight:800"></i></a>
   </td>
      
    </tr>
    @empty
    <tr><span style="color:red">NO DATA FOUND!</span></tr>
   @endforelse
  
  </tbody>
</table>
<center>
    <section style="padding:10px">
 {{ $property->links() }}
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