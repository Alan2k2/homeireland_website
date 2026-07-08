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
</style>
<div class="spacer">
  </div>
  <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">Contact Enquiries
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
                          <th class="text-center">Subject</th>
                          <th class="text-center">Message</th>
                  
                           
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($enquiries as $tst)
                      <tr class="datas">
                       
                           <td class="text-center text-muted ">{{ $enquiries->firstItem() + $loop->index }}</td>
                           <td class="">{{$tst->name}}</td>
                           <td class="">{{$tst->email}}</td>
                           <td class="">{{$tst->subject}}</td>
                          <td class="expandable" style="max-width:400px;">
                            {{ Str::limit($tst->message, 100)}}
                          </td>
                      
                                                         
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>
              <div class="d-flex justify-content-center text-center card-footer">
                  
                  {{$enquiries->links()}}
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