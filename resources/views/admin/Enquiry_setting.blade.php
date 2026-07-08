@extends('layouts.admin.main')
@section('content')

<div class="spacer">
                    </div>
                   <br><br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Enquiries Setting&nbsp;&nbsp;&nbsp;
                                    <small>(If you enable admin in property View / Automobile View page it will show admin contact number and details else seller.)</small>
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
                                                <th class="text-center">Name</th>
                                                
                                                <th class="text-center">Status</th>
                                             
                                        
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                           
                                            <tr class="datas">
                                             
                                                 <td class="text-center text-muted">1</td>
                                                 <td class="text-center">Admin</td>
                                                  
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                       
                                                        <input type="checkbox" class="enquiry" {{$enquiries->status=='1'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                                               
                                            </tr>
                                          
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
      $(document).on('input','.enquiry',function()
       {
       
        if ($(this).is(":checked")) 
         {
           var val = '1';
         }
        else 
         {
           var val = '0';
         }
        
         $.ajaxSetup({
    
});
               $.ajax({
        method:'GET',        
        url:"{{ url('admin/Enquiry_setting') }}",
        data:{status:val},
        success:function(data){

        }
     });
       });
</script>



@endsection