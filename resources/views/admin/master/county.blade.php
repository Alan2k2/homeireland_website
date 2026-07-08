@extends('layouts.admin.main')
@section('content')


<style>
  
    .clearbtn{
    height:38px;!important
    color:white;!important
    background-color:#6c757d;!important
    padding:4px 8px;
    border-radius:5px;
    width:120px;
    margin-left:5px;
}

 .clearbtn a{
    text-decoration: none;
    color:white;
}
</style>
<section>
    @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>

@endif
<?php
$keyword=isset($_GET['keyword'])?$_GET['keyword']:'';
?>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add County
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add County</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
           <input type="text" placeholder="Enter County Name" name="county"class="form-control" size="15" required><br>
            
      </div>
      <div class="modal-footer">
        <input  type="submit" class="btn btn-secondary"></button>
       </form>
        <button type="button" class="btn btn-primary">Close</button>
      </div>
    </div>
  </div>
</div>
</section><br><br>
<section class="card">
         <div class="card-header">
    SEARCH
  </div>
  
 <div class="card-body">
    <form action="">
        <div class="row">
            <!-- Empty Column for Spacing -->
            <div class="col-lg-1 col-md-1 col-12 mb-2">
                &nbsp;
            </div>
            
            <!-- Search Keyword Input -->
            <div class="col-lg-5 col-md-5 col-12 mb-2">
                <label for="keyword">Search Keyword</label>
                <input type="text" id="keyword" name="keyword" class="form-control mt-2" required value="<?=$keyword?>">
           
            </div>
            
            <!-- Empty Column for Spacing -->
            <div class="col-lg-1 col-md-1 col-12 mb-2">
                &nbsp;
            </div>
<input type="hidden" name="a" class="form-control mt-2" required value="11">
                <input type="hidden" name="b" class="form-control mt-2" required value="11">
            <!-- Buttons -->
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
                <button type="submit" class="search-btn btn btn-secondary btn-sm w-100">Search</button>
            </div> </form>
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
               <!--<a href="{{url('admin/property_enquiries')}}?a=51&&b=26"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
                <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/county')}}?a=51&&b=26"> Clear </a></button>
            </div>
        </div>
   
</div>

  
</section><br><br>

<!--search end-->
<div class="spacer">
                    </div>
                   <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">County
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
                                                <th class="text-center" width="2%">SL. No.</th>
                                             
                                                <th class="text-center">Name</th>
                                               
                                                <th class="text-center">Status</th>
                                             
                                            <th class="text-center">Delete</th>
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($counties as $tst)
                                            <tr class="datas">
                                             
                                                 <td class="text-center text-muted">{{ $counties->firstItem() + $loop->index }}</td>
                                                  
                                                 <td class="text-center">{{$tst->name}}</td>
                                                  
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                        <input type="hidden" class="findid" value="{{$tst->id}}">
                                                        <input type="checkbox" class="make_featured" {{$tst->status=='1'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                          <td align="center"><a href="delete_county/{{$tst->id}}"><button class="btn btn-sm btn-danger " onclick="return confirm('Are you sure you want to delete this item?');">Delete</button></a></td>                     
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$counties->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
      $(document).on('input','.make_featured',function()
       {
        var id=$(this).closest('.findprop').find('.findid').val();
        if ($(this).is(":checked")) 
         {
           var val = 1;
         }
        else 
         {
           var val = 0;
         }
         var modal="county";
         var csrfToken = $('meta[name="csrf-token"]').attr('content');
         $.ajaxSetup({
            headers: {
           'X-CSRF-TOKEN': csrfToken
    }
});
               $.ajax({
        method:'POST',        
        url:"{{ url('admin/change_general') }}",
        data:{val:val , id:id,modal:modal},
        success:function(data){

        }
     });
       });
</script>



@endsection