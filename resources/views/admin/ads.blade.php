@extends('layouts.admin.main')
@section('content')
<style>
    .search-btn
   {
       width:200px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
      color:white;
       margin-top:0%
       
   }
   a:hover
   {
       cursor:pointer;
   }
   img
   {
       height:80px;
       width:80px;
   }
   img:hover
   {
       height:100px;
       width:100px;
   }
   #big_img
   {
      height:500px;
       width:800px; 
   }
   
   /* Styles for small devices (up to 768px width) */
@media (max-width: 768px) {
    .card-body {
        width: 100%;
    }

    .search-btn {
        width: 80px;
        padding: 4px; 
        height:40px;
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
    
     #big_img
   {
      height:200px;
       width:300px; 
   }
    
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
    display:block;
}
   
</style>
<?php

            foreach($Advertisement1 as $p)
            {
             $a[$p->id]=$p->page_name;
             $a=array_unique($a);
            }
            ?>
<div class="spacer">
</div>
<br><br>
 @if ($message = Session::get('success'))
<div class="alert alert-success " role="alert">
  <strong>{{ $message }}</strong>
 
</div>
@endif
 @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
<!--search start-->
<section class="card">
         <div class="card-header">
    SEARCH ADD
  </div>
<!--Changed the table to div -->
<div class="card-body">
    
    <form action="{{url('admin/ads')}}" method="get">
            <input type="hidden" name="a" value="1">
            <input type="hidden" name="b" value="2">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12 mb-2">
                <select name="page_name" class="form-control" required>
                    <option value="">---Select Page---</option>
                    <?php foreach($a as $id => $page_name) { 
                        $select="";
                        if(isset($_GET['page_name']))
                        {
                            if($page_name==$_GET['page_name'])
                            {
                                $select="selected";
                            }
                        }
                    ?>
                        <option value="<?=$page_name?>" <?=$select?>><?=$page_name?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-2">
                <button type="submit" class="btn search-btn w-100" style="border-radius:15px;">Search</button>
            </div>
            <div class="col-lg-2 col-md-3 col-6 mb-2">
               <!--<a href="{{url('admin/ads')}}?a=1&&b=2"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
               <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn" onclick="document.querySelector('form').reset();"> <a href="{{url('admin/ads')}}?a=1&&b=2"> Clear </a></button>
            </div>
        </div>
    </form>
</div>



  
</section><br><br>
<!--search end-->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">ADDS
                                        <div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new Ad</button>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">SL No</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Page</th>
                                                <th class="text-center">Position</th>
                                                <th class="text-center">Url</th>
                                                 <th class="text-center">User</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">Actions</th>
                                                 
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($Advertisement as $ad)
                                            <tr class="datas">
                                             
                                                <td class="text-center text-muted">{{$loop->iteration}}/{{$ad->id}}</td>
                                                <td>
                                                     <div class="widget-content p-0 ">
                                                        <div class="widget-content-wrapper ">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    
                                                              <a data-toggle="modal" data-target=".bd-example-modal-lg_{{$ad->id}}"> 
                                                              <img src="{{ asset('uploads/ads/'.$ad->image) }}" alt="">
                                                            </a> 
                                                                </div>
                                                            </div>
                                                            
                                                                    
                                                                </div>
                                                                 
                                                            
                                                            </div>
                                                            <!--======model===-->
                                                            <!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade bd-example-modal-lg_{{$ad->id}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <img id="big_img" src="{{ asset('uploads/ads/'.$ad->image) }}" alt="">
    </div>
  </div>
</div>
                                                            <!--===modeel ends==-->
                                                        
                                                  
                                                </td>
                                                 <td class="text-center">{{$ad->page_name}}</td>
                                                 <td class="text-center">{{$ad->position}}</td>
                                                 <td class="text-center"><a href="{{$ad->url}}" target="_blank">{{$ad->url}}</a></td>
                                                  <td class="text-center">
                                                      <!--user-->
                                                      @foreach($users as $u)
                                                      @if($u->id==$ad->user_id)
                                                      {{$u->name}}<br>{{$u->email}}
                                                      @endif
                                                      @endforeach
                                                  </td>
                                                 <td class="text-center">
                                                        <label class="switch findprop">
                                                        <input type="hidden" class="findid" value="{{$ad->id}}">
                                                        <input type="checkbox" class="make_featured" {{$ad->status=='1'?'checked':''}}>
                                                        <span class="slider round"></span>
                                                        </label>
                                                 </td>
                                                
                                                <td class="text-center findads" nowrap>
                                                    <input type="hidden" class="findpage" value="{{$ad->page_name}}" name="">
                                                    <input type="hidden" class="findsection" value="{{$ad->position}}" name="">
                                                    <input type="hidden" class="findurl" value="{{$ad->url}}" name="">
                                                    <input type="hidden" class="findid" value="{{$ad->id}}" name="">
                                                    <input type="hidden" class="findmodal" value="ads" name="">
                                                   <button type="button" value="{{$ad->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm edits" data-toggle="modal" data-target="#adminproductseditmodal{{$ad->id}}" data-item-id="{{$ad->id}}">edit</button>
                                                   <!--===============ADS EDIT STARTS====-->
                                                  <div class="modal fade" id="adminproductseditmodal{{$ad->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Ad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
                                 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                 <?php 
if($ad->status==1)
{
$status="Approved";
$sclass="text-success";
 } 
 elseif($ad->status==2){
    $status="Sold Out";
    $sclass="text-warning";
 }
 else{
    $status="Approvel Pending";
    $sclass="text-danger";
 }
  if($ad->payment_status==1)
{
             $admin_pay_status="";
            if($ad->admin_pay==1)
            {
                $admin_pay_status="(Paid By Admin)";
            }
            $pstatus="Completed ".$admin_pay_status;
 } 
 elseif($ad->payment_status==2){
    $pstatus="Renew";
 }
 else{
    $pstatus="Not Paid";
 }
 ?>
                                 <h6 >Payment Status:<?=$pstatus?>
                                 </h6>
                                 <!--<h6 class="<?=$sclass?>">Property Status:<?=$status?>-->
                                 </h6>
                                 <?php if($ad->payment_status==1){ ?>
                                 <!--<h6 >Invoice Status:-->

                                 </h6>
                                 <!--<h6 >Expiry Date:-->

                                 </h6>
                                 <?php } if($ad->payment_status!=1)
                                 {
                                 ?>
                                 <button class="btn-sm btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">PAY BY ADMIN{{$ad->payment_status}}</button>
                                 <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="card">
        <div class="card-body" >
            <form action="" method="get" style="padding:20px">
             <input type="hidden" name="id" value="{{$ad->id}}">
                   <select class="form-control" name="admin_pay">
                        <option value="1">Enable Pay</option>
                        <option value="0">Disable Pay</option>
                   </select><br>
            
              <button class="bt-sm btn-danger" style="border-radius:6px">Submit</button>

            <form>
        </div>
       </div>
    </div>
  </div>
</div>
                                 <?php
                                 }
                                 ?>
                               </div>
                               </div>
        <form action="{{url('admin/editads')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Choose User</label>
            <select  name="user_id" class="form-control" id="productstore"  required>
                 <option selected disabled>Select User</option> 
                @foreach($users as $user)
             <option value="{{$user->id}}"
             <?php if($user->id==$ad->user_id)
             {
                 $userselect="selected";
             }
             else
             {
                 $userselect="";
             }
             ?>
             <?=$userselect?>>{{$user->name}}</option>   
            @endforeach
            </select>          
          </div>
            <input type="hidden" name="ads_id"value="{{$ad->id}}">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page1</label>
            <select  name="ad_id" class="form-control" required>
             <option  >Select Page</option>   
            <?php foreach($Advertisement1 as $val)
                    {
                        $select="";
                        if($val->id==$ad->ad_id)
                        {
                            $select="selected";
                        }
                        ?>
                        <option value="<?=$val->id?>" <?=$select?>><?=$val->page_name?> /<?=$val->position?></option>
                   <?php }
                 ?>           
            </select>          
          </div>
          <!--<div class="form-group">-->
          <!--  <label for="recipient-name" class="col-form-label">Section</label>            -->
          <!--  <select  name="display_section" class="form-control" id="appendsection"  required="">-->
          <!--   <option selected disabled>Select An Option</option>                   -->
          <!--   <option value="Top">Top</option>-->
          <!--   <option value="Middle">Middle</option>-->
          <!--   <option value="Bottom">Bottom</option>-->
          <!--  </select>             -->
          <!--</div>-->
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>            
            <input type="text" class="form-control" id="appendurl" name="url" value="{{$ad->url}}">            
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
                                                   
                                                   
                                                   
                                                   <!--=================ADS ADD ENDS====-->
                                                   <button type="button" value="{{$ad->id}}" id="PopoverCustomT-1" class="btn btn-danger btn-sm delete deletebtn" data-toggle="modal" data-target="#deletemodal" data-item-id="{{$ad->id}}" data-modal="Ads">delete</button>
                                                </td>                                                     
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center text-center card-footer">
                                        
                                        {{$Advertisement->links()}}
                                    </div>
                                </div>
                            </div>
                        </div>


<div class="modal" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            <label for="recipient-name" class="col-form-label">Choose User</label>
            <select  name="user_id" class="form-control" id="productstore"  required>
                 <option selected disabled>Select User</option> 
                @foreach($users as $user)
             <option value="{{$user->id}}">{{$user->name}}</option>   
            @endforeach
            </select>          
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Page2</label>
            <select name="ad_id" class="form-control" required>
                     <option value="">---Select Page--</option>
             
                    <?php foreach($Advertisement1 as $val)
                    {
                        ?>
                        <option value="<?=$val->id?>"><?=$val->page_name?> /<?=$val->position?></option>
                   <?php }
                 ?>
                </select>        
          </div>
          
          
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Url</label>            
            <input type="text" class="form-control" name="url">            
          </div>          
           <div class="form-group">
            <label for="fileInput" class="col-form-label">Image</label>
            <input type="file"  class="form-control" id="fileInput" name="image" required=""  accept="image/*" onchange="validateFileSize()"/>
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
        function validateFileSize() {
            var fileInput = document.getElementById('fileInput');
            var fileSizeError = document.getElementById('fileSizeError');
            
            if (fileInput.files.length > 0) {
                var fileSize = fileInput.files[0].size; // in bytes
                var maxSize = 1024 * 1024; // 1 MB

                if (fileSize > maxSize) {
                    fileSizeError.textContent = 'File size exceeds the maximum allowed limit (1 MB).';
                    fileInput.value = ''; // Clear the file input
                } else {
                    fileSizeError.textContent = '';
                }
            }
        }
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