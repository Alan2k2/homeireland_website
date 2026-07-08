@extends('layouts.admin.main')
@section('content')
@if ($message = Session::get('success'))

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
<?php

            foreach($Advertisement1 as $p)
            {
             $a[$p->id]=$p->page_name;
             $a=array_unique($a);
            }
            ?>
            
<style>

/* moved the styles to top from bottom added style for the search part */
   /* .search-btn*/
   /*{*/
   /*    width:200px;*/
   /*    height:auto;*/
   /*    padding:10px;*/
   /*    background-color:#dc3545;*/
   /*    border:1px solid #dc3545;*/
   /*   color:white;*/
   /*    margin-top:0%*/
   /*}*/
   
/* Existing styles for the search button */
.search-btn {
    width: 190px;
    height: auto;
    padding: 10px;
    background-color: #dc3545;
    border: 1px solid #dc3545;
    color: white;
    margin-top: 0%;
    border-radius:15px;
}

/* Styles for small devices (up to 768px width) */
@media (max-width: 768px) {
    .card-body {
        width: 100%;
    }

    .search-btn {
        width: 80px;
        padding: 4px; 
    }

    .form-control {
        width: 100%; 
        font-size: 11px; 
        padding:6px 2px;
        font-weight:bold;
    }

    td[width="40%"] {
        width: 45%; 
    }

   
    .form-control {
        width: 100%;
    }
    /*.clearbtn{*/
    /*    width:80px;*/
    /*}*/
}
   .clearbtn{
    height:40px;!important
    color:white;!important
    background-color:#6c757d;!important
    padding:4px 8px;
    border-radius:15px;
    width:120px;
}
   .clearbtn a{
    text-decoration: none;
    color:white;
}
   
   
</style>

<!--search start-->
<section class="card">
         <div class="card-header">
    SEARCH
  </div>
  <!--changed the table tag  to  div -->
<div class="card-body">
    <form action="">
                    <input type="hidden" name="a" value="1">
                    <input type="hidden" name="b" value="1">
        <div class="row">
            <!-- Page Name Select -->
            <div class="col-lg-5 col-md-5 col-12 mb-2">
                <select name="page_name" class="form-control" required>
                    <option value="">--Select Page--</option>
                    <option value="all">All Pages</option>
                    <?php 
                    $select="";
                    foreach($a as $id => $page_name) { 
                        
                    if(isset($_GET['page_name']))
                    {
                        if($_GET['page_name']==$page_name)
                        {
                            $select="selected";
                        }
                        else
                        {
                            $select=""; 
                        }
                    }
                    
                    ?>
                        <option value="<?=$page_name?>"<?=$select?>><?=$page_name?></option>
                    <?php } ?>
                </select>
            </div>

            <!-- Status Select -->
            <div class="col-lg-5 col-md-5 col-12 mb-2">
                <select name="status" class="form-control" >
                    <?php 
                    $select1="";
                   $select2="";
                   $select3="";
                    if(isset($_GET['status']))
                    {
                        if($_GET['status']==1)
                        {
                            $select1="selected";
                        }
                         if($_GET['status']==0)
                        {
                            $select2="selected";
                        }
                        if($_GET['status']==2)
                        {
                            $select3="selected";
                        }
                        else
                        {
                            $select=""; 
                        }
                    }
                    
                    ?>
                    <option value="">--Select Status--</option>
                    <option value="1"<?=$select1?>>Active</option>
                    <option value="0"<?=$select2?>>Inactive</option>
                    <option value="2"<?=$select3?>>Both</option>
                </select>
            </div>

            <!-- Placeholder for layout alignment on large screens -->
            <div class="col-lg-2 col-md-2 col-12 mb-2 d-none d-lg-block d-md-block">
                &nbsp;
            </div>
        </div>

        <div class="row">
            <!-- Placeholder for layout alignment on large screens -->
            <div class="col-lg-10 col-md-10 col-12 mb-2 d-none d-lg-block d-md-block">
                &nbsp;
            </div>

            <!-- Buttons -->
            <div class="col-lg-2 col-md-2 col-12 mb-2 d-flex justify-content-end">
                <button type="submit" name="search" class="btn search-btn  mr-2">Search</button>
                <!--<a href="{{url('admin/Advertisement_page')}}?a=1&&b=1"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
                 <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/Advertisement_page')}}?a=1&&b=1"> Clear </a></button>
            </div>
        </div>
    </form>
</div>



</section>
<br><br>

<!--==========search end===============-->
<div class="card">
  <div class="card-header">
  <h4> Set Your Price</h>
  </div>
  <!--added table-responsive to make the table responsive in mobile view-->
  <div class="card-body table-responsive">
   
   <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Page Name</th>
       <th scope="col">Position</th>
       <th scope="col">Duration</th>
      <th scope="col">Price</th>
      <th scope="col">Status</th>
       <th scope="col">Payment</th>
       <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
      @forelse($Advertisement as $p)
    <tr>
        <th scope="row">{{$Advertisement->firstItem() + $loop->index }}</th>
      <th scope="row">{{$p->page_name}}</th>
      <th scope="row">{{$p->position}}</th>
      <th scope="row">{{$p->duration}}&nbsp;Days</th>
      <td>{{$p->price}}</td>
      <td>
          
          @if($p->status==1)
              
              <?php    echo"<p class='text-success'>Active</p>";?>
              
               @else
                  <?php   echo"<p class='text-danger'>Inactive</p>";?>
              @endif
              
      </td>
      <td>
          
          @if($p->payment_status==1)
              
              <?php    echo"<p class='text-success'>Active</p>";?>
              
               @else
                  <?php   echo"<p class='text-danger'>Inactive</p>";?>
              @endif
              
      </td>
      <td>
        <a href="{{url('admin/Advertisement_edit')}}/{{$p->id}}?a=4&b=1"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
      </td>
    </tr>
    @empty
    <tr><span style="color:red">NO DATA FOUND!</span></tr>
   @endforelse
  
  </tbody>
</table>

 {{ $Advertisement->links() }}
  </div>
</div>

@endsection