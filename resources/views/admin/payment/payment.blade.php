@extends('layouts.admin.main')
@section('content')
<!--search start-->
<style>
.PgId:hover
{
    cursor:pointer;
    color:orange !important;
}

.bttn{
    width:140px;
}
.iclass
{
    color:white;
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
        margin-top:10px;
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
    td
    {
        font-weight:500;
    }
    td .align-bottom{
        vertical-align:bottom;
    }
    
    @media(max-width:768px){
        .form-control{
            font-size:13px;
        }
    }
    
    .clearbtn{
    height:38px;!important
    color:white;!important
    background-color:#6c757d;!important
    padding:4px 8px;
    border-radius:15px;
    width:120px;
    margin-left:5px;
}

 .clearbtn a{
    text-decoration: none;
    color:white;
}
</style>


<main class="container">
   <?php
//   print_r($_GET);exit;
$type=isset($_GET['category'])?$_GET['category']:'';
$keyword=isset($_GET['keyword'])?$_GET['keyword']:'';
$orderId=isset($_GET['order_id'])?$_GET['order_id']:'';
$fdate=isset($_GET['fdate'])?$_GET['fdate']:'';
$tdate=isset($_GET['tdate'])?$_GET['tdate']:'';
?>

<section class="card section search">
    <div class="card-header">
        SEARCH
    </div>
    <div class="card-body">
        <form action="" class="row">
            <?php 
                $a = $b = $c = "";
                if ($type == "property") {
                    $a = "selected";
                } elseif ($type == "automobiles") {
                    $b = "selected";  
                } elseif ($type == "ads")
                {
                    $c = "selected";
                }
            ?>
            
            <div class="col-lg-4 col-md-6 mb-3">
                <select class="form-control" name="category">
                    <option value="">--Select Type--</option>
                    <option value="property" <?=$a?>>Property</option>
                    <option value="automobiles" <?=$b?>>Automobiles</option>
                    <option value="ads" <?=$c?>>Advertisements</option>
                </select>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-3">
                <input type="text" class="form-control" name="keyword" placeholder="search username/place/email/phone" value="<?=$keyword?>">
            </div> 
            
            <div class="col-lg-4 col-md-6 mb-3">
                <input type="text" class="form-control" name="order_id" placeholder="Search Order Id" value="<?=$orderId?>">
            </div>
            
            <div class="col-lg-4 col-md-6 mb-3">
                From Date
                <input type="date" class="form-control" name="fdate" placeholder="Select Purchased Date" value="<?=$fdate?>">
            </div> 
            
            <div class="col-lg-4 col-md-6 mb-3">
                &nbsp;&nbsp;To Date
                <input type="date" class="form-control" name="tdate" placeholder="Select Purchased Date" value="<?=$tdate?>">
            </div>
            <br><input type="hidden" name="a" class="form-control mt-2" required value="5">
                <input type="hidden" name="b" class="form-control mt-2" required value="1">
            <div class="col-lg-4 col-md-6 mb-3 d-flex align-items-end">
                <button type="submit" name="search" class="btn bttn btn-danger w-100" style:"margin-right:2px;">Search</button>
                 </form>
            
           
                   <!--<a href="{{url('admin/payments_history_admin')}}?a=5&&b=1"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
                    <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/payments_history_admin')}}?a=5&&b=1"> Clear </a></button>
                </div>
       
    </div>
</section>

<style>
    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        border-radius: 15px;
    }
    @media (max-width: 768px) {
        .btn-danger {
            width: 100%;
        }
    }
    
      @media (min-width: 992px) {
        .form-control {
            font-size: 0.875rem; /* Adjust the font size as needed */
        }
        .btn-danger {
            font-size: 0.875rem; /* Adjust the font size as needed */
        }
    }
</style>


<br><br>
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
  <!--added table-responsive for mobile response of table-->
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
      <th scope="col">Order Id / Pg ID</th>
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
      <td>{{$p->unique_id}}<br>
      <!--===========pg oid============-->
      
      <!-- Button trigger modal -->
<!-- Button trigger modal -->
<p class="text-primary PgId" data-toggle="modal" data-target="#exampleModal">
 view PgId
</p>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Revolute Payment gateway Order Id</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {{$p->order_id}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
       <!--===========pg oid ends============-->
      </td>
      <td>{{$p->category}}</td>
       <td>€&nbsp;{{$p->amount}}&nbsp;</td>
      <td>{{date('d-m-Y',strtotime($p->created_at))}}</td>
       <td>{{date('d-m-Y',strtotime($p->expire_date))}}</td>
        <th>
            
          @if($currenntdate < $expire_date)
         
                     <p class="text-success subscripe mt-4"><b>Active <b></p> 
                  
          @else
                      
                                <p class="text-danger subscripe mt-4"><b>Expired <b></p>
                    
          @endif
            </th>
     
      
      <td>
          
<a href="{{asset('uploads/PDF/'.$p->invoice)}}" target="_blank"><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}"><i class="fa fa-eye iclass" aria-hidden="true"></i>&nbsp;view</button></a>
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