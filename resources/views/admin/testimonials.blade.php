@extends('layouts.admin.main')
@section('content')

<div class="spacer">
                    </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Testimonials
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
                                                <th class="text-center">SL. No.</th>
                                                <th class="text-center">User</th>
                                                <th class="text-center">Property Id</th>
                                                <th class="text-center">Automobile Id</th>
                                                <th class="text-center">Review</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($testimonials as $tst)
                                            <tr class="datas">
                                             
                                                 <td class="text-center text-muted">{{ $testimonials->firstItem() + $loop->index }}</td>
                                                 <td class="text-center">{{$tst->User->name}}</td>
                                                 <td class="text-center">{{$tst->Property->unique_id}}</td>
                                                 <td class="text-center">{{$tst->automobile_id}}</td>
                                                 <td class="text-center">{{$tst->description}}</td>                        
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                        <input type="hidden" class="findid" value="{{$tst->id}}">
                                                        <input type="hidden" class="modal" value="Testimonial">
                                                        <input type="checkbox" class="change_status" {{$tst->status=='on'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                
                                                <td class="text-center findads">
                                                    <input type="hidden" class="findpage" value="{{$tst->page}}" name="">
                                                    <input type="hidden" class="findsection" value="{{$tst->display_section}}" name="">
                                                    <input type="hidden" class="findurl" value="{{$tst->url}}" name="">
                                                    <input type="hidden" class="findid" value="{{$tst->id}}" name="">
                                                    <input type="hidden" class="findmodal" value="Testimonial" name="">
                                                  
                                                   <button type="button" value="{{$tst->id}}" id="PopoverCustomT-1" 
                                                    class="btn btn-danger btn-sm delete deletebtn" data-toggle="modal" 
                                                    data-target="#deletemodal" data-item-id="{{$tst->id}}" data-modal="Testimonial">
                                                       delete
                                                   </button>
                                                </td>                                                     
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$testimonials->links()}}
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
        <form action="{{url('admin/addads')}}" method="post" enctype="multipart/form-data" >
        	@csrf
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
            <select  name="page" class="form-control" id="productstore"  required="">
             <option selected disabled>Select An Option</option>   
             <option value="Home">Home Page</option>
             <option value="Products List">Products List Page</option>
             <option value="Automobile List">Automobile List Page</option>
             <option value="Property View">Property View Page</option>
             <option value="Automobile View">Automobile View Page</option>
            </select>          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Section</label>            
            <select  name="display_section" class="form-control" id="productstore"  required="">
             <option selected disabled>Select An Option</option>                   
             <option value="Top">Top</option>
             <option value="Middle">Middle</option>
             <option value="Bottom">Bottom</option>
            </select>             
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>            
            <input type="text" class="form-control" name="url">            
          </div>          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="productprice" name="image" required="" />
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Ad</button>
      </div>
        </form>
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
        <form action="{{url('admin/editads')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <input type="hidden" id="appendtheid" name="id">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
            <select  name="page" class="form-control" id="appendpage"  required="">
             <option selected disabled>Select An Option</option>   
             <option value="Home">Home Page</option>
             <option value="Products List">Products List Page</option>
             <option value="Automobile List">Automobile List Page</option>
             <option value="Property View">Property View Page</option>
             <option value="Automobile View">Automobile View Page</option>
            </select>          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Section</label>            
            <select  name="display_section" class="form-control" id="appendsection"  required="">
             <option selected disabled>Select An Option</option>                   
             <option value="Top">Top</option>
             <option value="Middle">Middle</option>
             <option value="Bottom">Bottom</option>
            </select>             
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>            
            <input type="text" class="form-control" id="appendurl" name="url">            
          </div>          
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="ad_image" name="image"/>
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </div>
        </form>
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
      $(document).on('input','.make_featured',function()
       {
        var prop_id=$(this).closest('.findprop').find('.findid').val();
        if ($(this).is(":checked")) 
         {
           var val = 'on';
         }
        else 
         {
           var val = 'off';
         }
         var csrfToken = $('meta[name="csrf-token"]').attr('content');

         $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': csrfToken
    }
});
               $.ajax({
        method:'POST',        
        url:"{{ url('admin/change-ad-status') }}",
        data:{val:val , prop_id:prop_id},
        success:function(data){

        }
     });
       });
</script>
@endsection