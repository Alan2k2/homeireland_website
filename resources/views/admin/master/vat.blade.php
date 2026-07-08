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

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add VAT
</button>
<br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add VAT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
           <input type="number" placeholder="Enter VAT percentage" name="vat"class="form-control" size="15" required><br>
            
      </div>
      <div class="modal-footer">
        <input  type="submit" class="btn btn-secondary"></button>
       </form>
        <button type="button" class="btn btn-primary">Close</button>
      </div>
    </div>
  </div>
</div>
</section>
<!--search end-->
<div class="spacer">
                    </div>
                   <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">VAT
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center" width="2%">SL. No.</th>
                                             
                                                <th class="text-center">VAT</th>
                                               
                                                <th class="text-center">Status</th>
                                             
                                            <th class="text-center">Delete</th>
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($vat as $tst)
                                            <tr class="datas">
                                             
                                                 <td class="text-center text-muted">{{ $vat->firstItem() + $loop->index }}</td>
                                                  
                                                 <td class="text-center">{{$tst->vat}}</td>
                                                  
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                        <input type="hidden" class="findid" value="{{$tst->id}}">
                                                        <input type="checkbox" class="make_featured" {{$tst->status=='1'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                          <td align="center"><a href="delete_vat/{{$tst->id}}"><button class="btn btn-sm btn-danger " onclick="return confirm('Are you sure you want to delete this item?');">Delete</button></a></td>                     
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$vat->links()}}
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
         var modal="vat";
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