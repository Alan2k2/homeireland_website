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
                <input type="text" id="keyword" name="keyword" class="form-control mt-2" required value="">
           
            </div>
            
            <!-- Empty Column for Spacing -->
            <div class="col-lg-1 col-md-1 col-12 mb-2">
                &nbsp;
            </div>
<input type="hidden" name="a" class="form-control mt-2" required value="51">
                <input type="hidden" name="b" class="form-control mt-2" required value="26">
            <!-- Buttons -->
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
                <button type="submit" class="search-btn btn btn-secondary btn-sm w-100">Search</button>
            </div> </form>
            <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
               <!--<a href="{{url('admin/property_enquiries')}}?a=51&&b=26"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
                <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/property_enquiries')}}?a=51&&b=26"> Clear </a></button>
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
                                    <div class="card-header">Property Enquiries
                                      <!--   <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new Ad</button>
                                               
                                            </div>
                                        </div> -->
                                    </div>
                                    <div class="table-responsive">
                                        <form method="POST" action="{{ route('enquiries.bulkDelete') }}" id="deleteForm">
                                                @csrf
                                                 @method('DELETE')
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center" width="2%">
                    <input type="checkbox" id="selectAll">
                </th>
                                                <th class="text-center" width="2%">SL. No.</th>
                                                <!--<th class="text-center" width="2%">Category id</th>-->
                                                 <th class="text-center">Category Type</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Email</th>
                                                  <th class="text-center">Contact No</th>
                                                      <th class="text-center">Message</th>
                                                <th class="text-center">Visible To Seller</th>
                                             
                                        
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                                
                                            @foreach($enquiries as $tst)
                                            <tr class="datas">
                                             <td class="text-center">
                        <input type="checkbox" name="ids[]" value="{{ $tst->id }}" class="selectBox">
                    </td>
                                                 <td class="text-center text-muted">{{ $enquiries->firstItem() + $loop->index }}</td>
                                                  
                                                 <td class="text-center">
                                                     <?php 
                                                     if($tst->type==1)
                                                     {
                                                         $type="Homeireland";
                                                     }
                                                     if($tst->type==2)
                                                     {
                                                         $type="Property";
                                                     }
                                                     if($tst->type==3)
                                                     {
                                                         $type="Automobiles";
                                                     }
                                                     if($tst->type==4)
                                                     {
                                                         $type="Homeireland";
                                                     }
                                                     ?>
                                                     {{$type}}</td>
                                                 <td class="text-center">{{$tst->name}}</td>
                                                 <td class="text-center">{{$tst->email}}</td>
                                                 <td class="text-center">{{$tst->phone}}</td>
                                                 
                                                 <td class="text-center">{{$tst->message}}</td>  
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                        <input type="hidden" class="findid" value="{{$tst->id}}">
                                                        <input type="checkbox" class="make_featured" {{$tst->show_to_seller=='1'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                                               
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                            <div class="d-flex p-3">
        <i class="fa-solid fa-trash-arrow-up"></i><button type="submit" class="btn btn-danger">Delete Selected</button>
    </div>
</form>

                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$enquiries->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
      $(document).on('input','.make_featured',function()
       {
        var enq_id=$(this).closest('.findprop').find('.findid').val();
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
        url:"{{ url('admin/change-property-enquiry-status') }}",
        data:{val:val , enq_id:enq_id},
        success:function(data){

        }
     });
       });
</script>

<script>
    document.getElementById('selectAll').addEventListener('change', function() {
        const checkboxes = document.querySelectorAll('.selectBox');
        checkboxes.forEach(chk => chk.checked = this.checked);
    });
</script>


@endsection