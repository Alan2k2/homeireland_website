@extends('layouts.admin.main')
@section('content')

<div class="spacer"></div>
  <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">Banners
                  <div class="btn-actions-pane-right">
                      <div role="group" class="btn-group-sm btn-group">
                          <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new Banner</button>
                         
                      </div>
                  </div> 
              </div>
              <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th class="text-center">Image</th>
                          <th class="text-center">Page</th>
                          <th class="text-center">Sort Order</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">Delete</th>
                      </tr>
                      </thead>
                      <tbody>
                      @foreach($banners as $banner)
                      <tr class="datas">
                       
                          <td class="text-center text-muted">{{$banner->id}}</td>
                          <td>
                               <div class="widget-content p-0 ">
                                  <div class="widget-content-wrapper ">
                                      <div class="widget-content-left mr-3">
                                          <div class="widget-content-left">
                                              
                                              <img width="100"  src="{{ asset('/uploads/banner/'.$banner->image) }}" alt="" alt="">
                                      
                                          </div>
                                      </div>
                                      <div class="widget-content-left flex2"> 
                                         <input type="hidden" value="{{$banner->id}}" class="prodid" name="">
                                        <input type="hidden" value="{{$banner->name}}" class="prodname" name="">
                                          <input type="hidden" value="{{$banner->price}}" class="prodprice" name="">
                                            <input type="hidden" value="{{$banner->category}}" class="prodcategory" name="">
                                             <input type="hidden" value="{{$banner->store}}" class="prodstore" name="">
                                          <div id="prodname" value="{{$banner->name}}" class="widget-heading "></div>
                                           <div id="prodstore" value="{{$banner->store}}" class="widget-heading "></div>
                                          <div id="prodprice" class="widget-subheading opacity-7 prodprice"></div>
                                      </div>
                                  </div>
                              </div>
                            
                          </td>
                           
                            <td class="text-center" >{{$banner->page}}</td>
                            <td class="text-center findmain" >
                              <input type="hidden" class="modal" value="Banner">
                              <input type="hidden" class="findid" value="{{$banner->id}}">
                              <input type="number" class="change_sort" value="{{$banner->sort_order}}"  name="">
                          </td>
                          <td class="text-center">
                               <label class="switch findmain">
                                  <input type="hidden" class="findid" value="{{$banner->id}}">
                                  <input type="hidden" class="modal" value="Banner">
                                  <input type="checkbox" class="change_status" {{$banner->status=='active'?'checked':''}}>
                                  <span class="slider round"></span>
                              </label>
                          </td>
                               
                          <td class="text-center fin_parent">
                              <input type="hidden" class="fin_btn_url" value="{{$banner->url}}">
                              <input type="hidden" class="fin_btn_text" value="{{$banner->button_text}}">
                              <input type="hidden" class="fin_sort_order" value="{{$banner->sort_order}}">
                              <input type="hidden" class="fin_page" value="{{$banner->page}}">
                              <input type="hidden" class="fin_id" value="{{$banner->id}}">
                         
                             <button type="button" value="{{$banner->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#adminproductseditmodal" data-item-id="{{$banner->id}}">edit</button>          
                             <button type="button" value="{{$banner->id}}" id="PopoverCustomT-1" class="btn btn-danger btn-sm deletebtn" data-toggle="modal" data-target="#deletemodal" data-item-id="{{$banner->id}}" data-modal="Banner">delete</button>
                          </td>                                                     
                      </tr>
                      @endforeach
                      </tbody>
                  </table>
              </div>

              <div class="d-flex justify-content-between card-footer">
               {{$banners->links()}}
              </div>
          </div>
      </div>
  </div>


<div class="modal fade" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('admin/addbanners')}}" method="post" enctype="multipart/form-data" >
        	@csrf

                    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
           <select class="form-control" name="page">
             <option value="property">Property</option>
             <option value="automobile">Automobile</option>
           </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sort Order</label>
            <input type="number" name="sort_order" class="form-control" id="exprice">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Button Text</label>
            <input type="text" name="button_text" class="form-control" id="exprice">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Button Url</label>
            <input type="text" name="button_url" class="form-control" id="exprice">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="productprice" name="image" required="" />
          </div>
         <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add New</button>
      </div>
        </form>
      </div>
     
    </div>
  </div>
</div>
<div class="modal fade" id="adminproductsdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form action="{{url('deleteitem')}}" method="post" enctype="multipart/form-data" >
          @csrf 
          <input type="hidden" name="modal" value="Banner">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">sure to delete  <span name="somethingg" id="spamm"></span> ?</h5>
        <input type="hidden" name="something" id="inp">
        
      </div>
      <div class="modal-body">      
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary">Yes</button>
       </div>
      </div> 
        </form>
      
     
    </div>
  </div>
</div>

<div class="modal fade" id="adminproductseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Banner</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{url('admin/addbanners')}}" method="post" enctype="multipart/form-data" >
        	@csrf
<input type="hidden" id="ap_id" name="id">
                    <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page</label>
           <select class="form-control" name="page" id="ap_page">
             <option value="property">Property</option>
             <option value="automobile">Automobile</option>
           </select>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Sort Order</label>
            <input type="number" name="sort_order" class="form-control" id="ap_sort_order">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Button Text</label>
            <input type="text" name="button_text" class="form-control" id="ap_btn_txt">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Button Url</label>
            <input type="text" name="button_url" class="form-control" id="ap_btn_url">
          </div>
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="productprice" name="image" />
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
 <script>
     $(function () {
  $('[data-toggle="popover"]').popover()
})

     $(document).on('click','.edits',function(){
     //var itemvalue = $(this).val();     
    var fin_page = $(this).closest('.fin_parent').find('.fin_page').val();
    var fin_id = $(this).closest('.fin_parent').find('.fin_id').val();
    var fin_btn_text = $(this).closest('.fin_parent').find('.fin_btn_text').val();
    var fin_btn_url = $(this).closest('.fin_parent').find('.fin_btn_url').val();
    var fin_sort_order = $(this).closest('.fin_parent').find('.fin_sort_order').val();

    $("#ap_id").val(fin_id);
    $("#ap_page").val(fin_page);
    $("#ap_btn_url").val(fin_btn_url);
    $("#ap_btn_txt").val(fin_btn_text);
    $("#ap_sort_order").val(fin_sort_order);

     ;
     })

      $(document).on('change','.change_status',function(){
          var modal= $(this).closest('.findmain').find('.modal').val();
          var findid= $(this).closest('.findmain').find('.findid').val();
        if ($(this).is(":checked")) 
         {
           var val = 'active';
         }
        else 
         {
           var val = 'inactive';
         }
         var csrfToken = $('meta[name="csrf-token"]').attr('content');

         $.ajaxSetup({
      headers: {
         'X-CSRF-TOKEN': csrfToken
      }
     });
               $.ajax({
        method:'POST',        
        url:"{{ url('admin/change_status') }}",
        data:{modal:modal , findid:findid , val:val},
        success:function(data){

        }
       });
       });

            $(document).on('input','.change_sort',function(){
          var val = $(this).val();
          var modal= $(this).closest('.findmain').find('.modal').val();
          var findid= $(this).closest('.findmain').find('.findid').val();
                   var csrfToken = $('meta[name="csrf-token"]').attr('content');

         $.ajaxSetup({
      headers: {
         'X-CSRF-TOKEN': csrfToken
      }
     });
               $.ajax({
        method:'POST',        
        url:"{{ url('admin/change_order') }}",
        data:{modal:modal , findid:findid , val:val},
        success:function(data){

        }
       });
         });


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

 $(document).ready(function() {
    // This WILL work because we are listening on the 'document', 
    // for a click on an element with an ID of #test-element
    $(document).on("click",".edits",function() {
        alert("click bound to document listening for #test-element");
    });   
$(document).on('click','.edits',function()
{
  alert('hh');
var _this=$(this).parents('tr');

$('#productname').val(_this.find('.productname').text());
$('#productprice').val(_this.find('.productprice').text());
});
</script>
@endsection