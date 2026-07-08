@extends('layouts.admin.main')
@section('content')
@php
use Illuminate\Support;
@endphp
<style>
  /* Hide overflow and limit height for the collapsed state */
.expandable {
    overflow: hidden;
    max-height: 2em; /* Adjust as needed */
    transition: max-height 0.3s ease;
}

/* Expand the height when the 'expanded' class is added */
.expandable.expanded {
    max-height: none;
}
/*moved the style for search btn to top and added the media query for the search part here*/
  .search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:0%;
       border-radius:15px;
       
   }
     .align-bottom {
       display:flex;
       align-items:flex-end;
       justify-content:center;
    }
   
/* Styles for small devices (up to 768px width) */
@media (max-width: 768px) {
    .card-body {
        width: 100%;
    }

    .search-btn {
        width: 80px; 
        padding: 4px; 
        font-weight: bold; 
        margin-top: 0;
        height:40px;
    }

    .form-control {
        width: 100%;
        font-size: 15px; 
        font-weight: bold; 
    }

    td[width="40%"] {
        width: 100%; 
    }

    td[width="5%"] {
        display: none; 
    }

    td.align-bottom {
        vertical-align: bottom; 
    }
}
</style>
<!--search start-->
<section class="card">
         <div class="card-header">
    SEARCH
  </div>
<div class="card-body">
    <form action="" method="get">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-5 col-12 mb-2">
                <input type="text" class="form-control" placeholder="Keyword" style="height: 40px;">
            </div>
            <div class="col-lg-4 col-md-7 col-12 mb-2">
                <button type="submit" name="search" class="btn search-btn w-100" style="height: 40px; border-radius: 15px;">Search</button>
            </div>
            <div class="col-lg-4 col-md-12 col-12 mb-2">
                <button type="reset" class="btn btn-secondary w-100" style="height: 40px; border-radius: 15px;">Clear</button>
            </div>
        </div>
    </form>
</div>

  
</section><br><br>
<div class="spacer">
  </div>
  <div class="row">
       @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif

      <div class="col-md-12">
          <div class="main-card mb-3 card">
              
              <div class="card-header">Ads Enquiries
                <!--   <div class="btn-actions-pane-right">
                      <div role="group" class="btn-group-sm btn-group">
                          <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new Ad</button>
                         
                      </div>
                  </div> -->
              </div>
              <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center" nowrap>SL. No.</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Phone</th>
                          <th class="text-center">Message</th>
                           <th class="text-center">Delete</th>
                  
                           
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($ads_enquiries as $tst)
                      <tr class="datas">
                       
                           <td class="text-center text-muted ">{{ $ads_enquiries->firstItem() + $loop->index }}</td>
                           <td class="" align="center">{{$tst->name}}</td>
                           <td class="" align="center">{{$tst->email}}</td>
                           <td class="" align="center">{{$tst->phone}}</td>
                          <td class="expandable" style="max-width:400px;" align="center">
                            {{ Str::limit($tst->message, 100)}}
                          </td>
                      <td align="center"><a href="{{url('admin/ads_enquiry_delete')}}/{{$tst->id}}?a=4&b=1" onclick="if (!confirm('Are you sure?')) return false;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                         
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="d-flex justify-content-center text-center card-footer">
                  
                  {{$ads_enquiries->links()}}
              </div>
          </div>
      </div>
  </div>


<div class="modal fade" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Ad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
     
    </div>
  </div>
</div>
<div class="modal fade" id="adminproductseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Ad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
     
      </div>
     
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on('click','.edits',function(){
        
     var ad_page=$(this).closest('.findads').find('.findpage').val();
     var ad_section=$(this).closest('.findads').find('.findsection').val();
     var ad_url=$(this).closest('.findads').find('.findurl').val();
     var ad_id=$(this).closest('.findads').find('.findid').val();
     $('#appendpage').val(ad_page);
     $('#appendsection').val(ad_section);
     $('#appendurl').val(ad_url);
     $('#appendtheid').val(ad_id);

    });
</script>
 <script>
     $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','.edits',function(){
     //var itemvalue = $(this).val();
     var idvalue = $(this).closest('.datas').find('.prodid').val();
     
    var namevalue = $(this).closest('.datas').find('.prodname').val();
    var pricevalue = $(this).closest('.datas').find('.prodprice').val();
    var categoryvalue = $(this).closest('.datas').find('.prodstore').val();

    $("#editproductid").val(idvalue);
     $("#editproductname").val(namevalue);
       $("#editproductprice").val(pricevalue);
         $("#editproductstore").val(categoryvalue);


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
alert(itemvalue);
$('#productname').val(_this.find('.prodname').text());
$('#productprice').val(_this.find('.prodprice').text());
     ;
     })
      $(document).on('click','.delete',function(){
     //var itemvalue = $(this).val();
   
    var id= $(this).closest('.datas').find('.prodid').val();

    var name= $(this).closest('.datas').find('.prodname').val();
    


     $("#spamm").text(name);
      $("#inp").val(id);
     


  //var itemvalue = $(this).closest('.datas').find('.prodname').val();
alert(itemvalue);
$('#productname').val(_this.find('.prodname').text());
$('#productprice').val(_this.find('.prodprice').text());
     ;
     })
 </script>

<script type="text/javascript">
     // Add a click event listener to all elements with the class 'expandable'
 
</script>
@endsection