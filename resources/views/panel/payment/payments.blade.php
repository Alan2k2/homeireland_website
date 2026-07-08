@extends('layouts.panel.main')
@section('content')
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
    /*.title*/
    /*{*/
    /*    color:red;*/
    /*    font-weight:500;*/
    /*    font-size:40px;*/
    /*}*/
    td
    {
        font-weight:500;
    }
    
   .title {
    color: red;
    font-weight: 500;
    font-size: 40px;
}

@media (max-width: 500px) {
    .title {
        font-size: 30px;
    }
}

@media (max-width: 400px) {
    .title {
        font-size: 20px;
    }
}

</style>
<main class="container">
    <center><p class="title"><b>PAYMENT HISTORY</b></p></center>
<!--<section class="card section search">-->
<!--         <div class="card-header">-->
<!--    SEARCH-->
<!--  </div>-->
<!--  <div class="card-body">-->
      
<!--    <table border="0" width="100%">-->
<!--        <form action="">-->
<!--        <tr>-->
<!--            <td width="20%">-->
<!--               &nbsp;<p>Select Purchased date</p>-->
<!--            </td>-->
<!--            <td  width="30%">-->
<!--               <input type="date" name="pdate" placeholder="Select Purchased Date">-->
<!--                </td> -->
<!--                <td width="5%">-->
<!--                 <input type="date" name="pdate" placeholder="Select Purchased Date">-->
<!--               </td>-->
                
<!--            <td >-->
<!--                <style>-->
<!--    .search-btn-->
<!--   {-->
<!--       width:200px;-->
<!--       height:auto;-->
<!--       padding:10px;-->
<!--       background-color:#dc3545;-->
<!--       border:1px solid #dc3545;-->
<!--      color:white;-->
<!--       margin-top:0%-->
<!--   }-->
<!--</style>-->
<!--               <button type="submit" name="search" class="search-btn" >Search</button>-->
<!--            </td>-->
<!--            </form>-->
<!--        </tr>-->
<!--    </table>-->
<!--  </div>-->
<!--</section><br><br>-->
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
  <!--added table-responsive  for bootstrap table for mobile view-->
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
      <th scope="col">Order Id</th>
       <th scope="col">Type</th>
       <th scope="col">Amount</th>
       <th scope="col">Purchased Date</th>
      <th scope="col">Expiring Date</th>
      <th scope="col">Satus</th>
      <th scope="col">Invoice</th>
    </tr>
  </thead>
  <tbody>
      @forelse($orders as $p)
      <?php
                $currenntdate = strtotime(date('Y-m-d')); 
                 $expire_date = strtotime($p->expire_date); 
?>
    <tr>
          <td>{{$orders->firstItem() + $loop->index }}</td>
          <td>{{$p->unique_id}}</td>
          <td>{{$p->category}}</td>
          <td>€&nbsp;{{$p->amount}}&nbsp;</td>
          <td>{{date('d-m-Y',strtotime($p->created_at))}}</td>
          <td>{{date('d-m-Y',strtotime($p->expire_date))}}</td>
          <th>
            
                      @if($currenntdate < $expire_date)
                             @forelse($ads->where('status',1)->where('id',$p->category_id)->values() as $p)
                                         <p class="text-success subscripe mt-0"><b>Active <b></p> 
                                         @empty
                                         <p class="text-success subscripe mt-0"><b>Pending Approvel <b></p>
                             @endforelse
                      @else
                                   @if($p->category=="property")
                                          <a href="{{url('pay_now'.$p->category_id)}}">
                                             <button type="button" class="btn btn-warning btn-sm  subscripe mt-4"><b>Renew <b></button> 
                                              </a>
                                   @elseif($p->category=="ads")
                                   <a href="{{url('pay_ad'.$p->category_id)}}">
                                             <button type="button" class="btn btn-warning btn-sm  subscripe mt-4"><b>Renew <b></button> 
                                          </a>
                                @elseif($p->category=="slot")
                                   <a href="{{url('myslots')}}">
                                             <button type="button" class="btn btn-warning btn-sm  subscripe mt-4"><b>Renew <b></button> 
                                          </a>
                                   @else
                                   <a href="{{url('pay_ad'.$p->category_id)}}">
                                             <button type="button" class="btn btn-warning btn-sm  subscripe mt-4"><b>Renew <b></button> 
                                          </a>
                                   @endif
                      @endif
            </th>
     
      
      <td>
          
<a href="{{asset('uploads/PDF/'.$p->invoice)}}" target="_blank"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;view</button></a>
   </td>
      
    </tr>
    @empty
    <tr><span style="color:red">NO DATA FOUND!</span></tr>
   @endforelse
  
  </tbody>
</table>
<center>
    <section style="padding:10px">
 {{ $orders->links() }}
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
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection