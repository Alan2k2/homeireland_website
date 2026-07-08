<!doctype html>
<script>
    setTimeout(function() {
        $('.alert').fadeOut('slow');
    }, 3000);

</script>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>HomeIreland admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



    <link href="{{asset('dashboard/main.css')}}" rel="stylesheet">

<style type="text/css">
.modal{
    margin-top: 50px !important;
}
.modal-backdrop {
    position: relative !important;
}
.switch {
    position: relative;
    display: inline-block;
    width: 44px;
    height: 22px;
    margin-bottom: 0;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
    position: absolute;
    content: "";
    height: 16px;
    width: 16px;
    left: 4px;
    bottom: 3px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(20px);
  -ms-transform: translateX(20px);
  transform: translateX(20px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.aditem
{
    margin: 25px;
}

.hidden{
       display:none !important;
   }

 .scrollable-list {
            height: 200px; /* Set the desired height */
            overflow-y: auto; /* Add vertical scrollbar */
            border: 1px solid #ccc; /* Optional: Add a border */
            padding: 10px; /* Optional: Add padding */
            list-style-type: none; /* Remove default list styling */
        }
        .scrollable-list li {
            margin-bottom: 5px; /* Optional: Add space between items */
        }

</style>
<style>
   
</style>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo"  style="background-color:#d3111a;">
                <div class=""><img src="{{asset('website/images/homeireland log06.svg')}}" width="130px;" height="45px;"> </div>
                <div class="header__pane ml-auto">
                    <!-- <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar " style="background-color:#d3111a;">
                       <span class="hamburger-box">
                           <span class="hamburger-inner "></span>
                       </span>
                    </button>
                    </div> -->
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                           
                        </div>
                        <button class="close"></button>
                    </div>
                     </div>
                <div class="app-header-right">
                    <div>
                     
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <span>Logout<i class="fa fa-sign-out" style="color: #6d7379;"></i></span>
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa-solid fa-gear opacity-8" style="color: #6d7379;"></i>
                                            <i class="fa fa-angle-down  opacity-8" style="color: #6d7379;"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                           
                                            <button type="button" tabindex="0" class="dropdown-item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                               Logout
                                            </button>
                                        </div>
 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                            </form>
                                    </div>
                                </div>
                                <!-- <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        {{Auth::user()->name}}
                                    </div>
                                    <div class="widget-subheading">
                                       {{Auth::user()->role}}
                                    </div>
                                </div> -->
                                <div class="widget-content-right header-user-info ml-3">
                                    
                                </div>
                            </div>
                        </div>
                    </div>        </div>
            </div>
        </div>        <div class="ui-theme-settings">
            
           
        </div>        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic is-active" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollable-list" style="width:300px;height:650px">
                        
                        <div class="app-sidebar__inner sidebar">
                            <!--===============NEW TOGGLING UL==================-->
    <style>
    .custom-button {
    /* background-color: white;
    border: 2px solid white;
    color: black;
    padding: 46x 6px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 0px; */
    background-color: #d3111a;
    border: 2px solid white;
    color: white;
    padding: 46x 6px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 8px;
    width: 200px;
    text-align: left;
    height: 40px;
}
i
{
    color: white;
}

.custom-button:hover {
    background-color: black;
    border:1px solid white;
    color:white;
}

li
{
    padding:10px;
}
li
{
     text-decoration: none;
}
a {
    text-decoration: none;
    color: inherit;
}
 .pagination li {
    padding: 0px;
 }
 .search-btn
   {
       width:150px;
       height:auto;
       padding:10px;
       background-color:#dc3545;
       border:1px solid #dc3545;
       color:white;
 
   }
@media(max-width:768px){
    .setadli{
        padding:0px 10px;
    }
    .menu_sub
    {
        margin-left:-30px
    }
}
</style>
<a href="{{url('admin')}}"><button  class="custom-button">
       <b> <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;Dashboard</b></button><br></a>
       
       <!--========users=========-->
         <button  class="custom-button"onclick="toggleList('list6')">
       <b> <i class="fa fa-user-circle" aria-hidden="true"></i> &nbsp;Users</b></button><br>

    <ul id="list6" style="display: none;">
      <li class="li_1"><a href="{{url('admin/agents')}}?a=6&&b=1&&u=1"><span class="menu_sub">Personal Users</span>
                                    </a></li>
       <li class="li_2"><a href="{{url('admin/agents')}}?a=6&&b=2">
                                       
                                   <span class="menu_sub">  Agents</span>
                                    </a></li>
    </ul>
       
       <!--====users==================-->
    <button  class="custom-button"onclick="toggleList('list1')">
       <b> <i class="fas fa-ad" aria-hidden="true"></i> &nbsp;Advertisement</b></button><br>

    <ul id="list1" style="display: none;">
      <li class="li_1 "><a class="setadli" href="{{url('admin/Advertisement_page')}}?a=1&&b=1" >
                                       
                                     <span class="menu_sub"> Advertisement</span>
                                    </a></li>
        <li class="li_2"><a href="{{url('admin/ads')}}?a=1&&b=2">
                                       
                                    <span class="menu_sub">User Ads</span>
                                    </a></li>
                                    <!--<li class="li_13"><a href="{{url('admin/ads_enquiry')}}?a=1&&b=13">-->
                                    <!--<span class="menu_sub"> Ads Enquery</span></a></li>-->
                                       
                                      
                                    <!--</a></li>-->
     
    </ul>
     <button  class="custom-button"onclick="toggleList('list11')">
       <b> <i class="fa fa-book" aria-hidden="true"></i> &nbsp;Master Entries</b></button><br>

    <ul id="list11" style="display: none;">
      <li class="li_11 "><a class="setadli" href="{{url('admin/county')}}?a=11&&b=11" >
                                       
                                     <span class="menu_sub"> County</span>
                                    </a></li>
        <li class="li_12"><a href="{{url('admin/vehicle')}}?a=11&&b=12">
                                       
                                    <span class="menu_sub">Vehicle</span>
                                    </a></li>
                                    <li class="li_13"><a href="{{url('admin/brand')}}?a=11&&b=13">
                                    <span class="menu_sub"> Brand</span></a></li>
                                       
                                      
                                    </a></li>
                                    <li class="li_13"><a href="{{url('admin/modal')}}?a=11&&b=14">
                                    <span class="menu_sub"> Modal</span></a></li>
                                       
                                      
                                    </a></li>
                                    <li class="li_13"><a href="{{url('admin/color')}}?a=11&&b=15">
                                    <span class="menu_sub"> Color</span></a></li>
                                      
                                    </a></li>
                                    <li class="li_13"><a href="{{url('admin/fuel')}}?a=11&&b=16">
                                    <span class="menu_sub"> Fuel</span></a></li>
                                       
                                      <li class="li_13"><a href="{{url('admin/body_type')}}?a=11&&b=17">
                                    <span class="menu_sub"> Body Type</span></a></li>

                                    <!--<li class="li_13"><a href="{{url('admin/facility-management')}}?">-->
                                    <!--<span class="menu_sub"> Facilities</span></a></li>-->
                                    <!--</a></li>-->
                                    
                                    <li class="li_13"><a href="{{url('admin/vat')}}?a=11&&b=17">
                                    <span class="menu_sub"> VAT</span></a></li>
                                    </a></li>
                                    
     
    </ul>
<button  class="custom-button"onclick="toggleList('list2')">
       <b> <i class="fa fa-home" aria-hidden="true"></i> &nbsp;Properties</b></button><br>
    <ul id="list2" style="display: none;">
        <li class="li_4"><a href="{{url('admin/properties')}}?a=2&&b=4">
                                       
                                       <span class="menu_sub">Properties</span>
                                    </a></li>                         
    </ul>
    
<button  class="custom-button"onclick="toggleList('list3')">
       <b> <i class="fa fa-car" aria-hidden="true"></i>&nbsp;Automobiles</b></button><br>
    <ul id="list3" style="display: none;">
        <li class="li_7"><a href="{{url('admin/automobiles')}}?a=3&&b=7">
                                       
                                      <span class="menu_sub">Automobiles</span>
                                    </a></li>
    </ul>
    
    <button  class="custom-button"onclick="toggleList('list5')">
       <b><i class="fa fa-info" aria-hidden="true"></i>&nbsp;&nbsp;Payment History</b></button><br>
    <ul id="list5" style="display: none;">
         <li class="li_1"><a href="{{url('admin/payments_history_admin')}}?a=5&&b=1">
                                       
                                     <span class="menu_sub"> Payment History</span>
                                    </a></li>
         
    </ul>
   
     <button  class="custom-button"onclick="toggleList('list51')">
       <b><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;&nbsp;Enquiries</b></button><br>
    <ul id="list51" style="display: none;">
          <li class="li_26"><a href="{{url('admin/property_enquiries')}}?a=51&&b=26">      
                                     <span class="menu_sub"> Enquiries</span>
                                    </a></li>
    </ul>
    
<button  class="custom-button" onclick="toggleList('list4')">
       <b><i class="fa fa-cog" aria-hidden="true"></i> &nbsp;Settings</b></button><br>
    <ul id="list4" style="display: none;">
         <li class="li_1"><a href="{{url('admin/banners')}}?a=4&&b=1">
                                       
                                     <span class="menu_sub"> Banners</span>
                                    </a></li>
         <li class="li_10"><a href="{{url('admin/properties_Subscription')}}?a=4&&b=10">
                                       
                                      <span class="menu_sub">Payment Settings</span>
                                    </a></li>
       
                                     
      
                                    <li class="li_42"><a href="{{url('admin/Enquiry_setting')}}?a=4&&b=42">
                                       
                                     <span class="menu_sub">Enquiry setting</span>
                                    </a></li>
                                     <li class="li_43"><a href="{{url('admin/admin_update')}}?a=4&&b=43">
                                       
                                      <span class="menu_sub">Profile Update</span>
                                    </a></li>
                                     <li class="li_45"><a href="{{url('admin/admin_password')}}?a=4&&b=45">
                                       
                                      <span class="menu_sub">Change Password</span>
                                    </a></li>
                                    
    </ul>
   
    <a href="{{url('admin/chats')}}"><button  class="custom-button">
    <b> <i class="fa fa-comments" aria-hidden="true"></i> &nbsp;Chats</b></button><br></a>
    <a href="{{url('admin/cookie')}}"><button  class="custom-button">
    <b> <i class="fa fa-globe" aria-hidden="true"></i> &nbsp;Cookies policy</b></button><br></a>
    
    <a href="{{url('admin/report')}}"><button  class="custom-button">
    <b> <i class="fa fa-file" aria-hidden="true"></i> &nbsp;Reports</b></button><br></a>
  @if(auth()->user() && auth()->user()->role == 'admin')
    <a href="{{ url('admin/facility-management') }}">
        <button class="custom-button">
            <b><i class="fa fa-building" aria-hidden="true"></i> &nbsp;Facility</b>
        </button>
    </a>
@endif


    <!-- <a href="{{url('admin/chats')}}">&nbsp;&nbsp;
       <b>  <i class="fa fa-comments" aria-hidden="true"></i>&nbsp;Chats</b></a>
       <br>
       <a href="{{url('admin/cookie')}}">&nbsp;&nbsp;
       <b><i class="fa fa-info" aria-hidden="true"></i>&nbsp;Cookies policy</b></a> -->
    <?php
    $a=$b=0;
    if(isset($_GET['a']))
    {   $a=$_GET['a'];
        $b=$_GET['b'];
       
    }
    ?>
    <input type="hidden" id="a" value="{{$a}}">
    <input type="hidden" id="b" value="{{$b}}">
    
<script>

function toggleList(listId) {
    var list = document.getElementById(listId);
    if (list.style.display === "none") {
        list.style.display = "block";
    } else {
        list.style.display = "none";
    }
}
</script>
<!--===============NEW TOGGLING UL==================-->
                           
                        </div>
                    </div>
                </div>   

                 <div class="app-main__outer">
                    <div class="app-main__inner">
                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                    </div>
                                    <div>
                                        @if(!empty($title))
                                        {{$title}}
                                        @else
                                        
                                        Admin
                                        @endif
                                    </div>
                                </div>
                                <div class="page-title-actions">
                                    
                                    <div class="d-inline-block dropdown">
                                        
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            
                                        </div>
                                    </div>
                                </div>    </div>
                        </div> 
          @yield('content')                                         
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                               
                                <div class="app-footer-right">
                                    <ul class="nav">
                                       
                                        <li class="nav-item">
                                            <a href="https://nubicus.com" class="nav-link">
                                               
                                                Nubicus
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>    </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>

<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
         <form action="{{url('admin/delete_item')}}" method="post" enctype="multipart/form-data" >
          @csrf 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sure to delete  <span name="somethingg" id="spamm"></span> ?</h5>
        <input type="hidden" name="id" id="appendadid">
        <input type="hidden" name="modal" id="appendmodalname">
        
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
<div class="modal fade" id="ver_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Verify Item ..?<span name="somethingg" id="spamm"></span></h5>
        <input type="hidden" name="id" id="ver_id">
        <input type="hidden" name="modal" id="ver_modal_val">
        
      </div>
      <div class="modal-body">
<!--        <select class="form-control" name="ver_value">
        <option value="active">Active</option>
        <option value="inactive">InActive</option>
        <option value="soldout">Sold Out</option>  
       </select>  -->     
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary ver_btn" data-dismiss="modal">Yes</button>
       </div>
      </div> 

    </div>
  </div>
</div>
<div class="modal fade" id="status_change_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Status<span name="somethingg" id="spamm"></span> </h5>
        <input type="hidden" name="id" id="stat_id">
        <input type="hidden" name="modal" id="stat_modal_val">
        
      </div>
      <div class="modal-body">
       <select class="form-control stat_value" name="stat_value">
         <option value="1">Active</option>
         <option value="0">InActive</option>
         <option value="3">Sold Out</option>  
       </select>       
       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary stat_btn" data-dismiss="modal">Yes</button>
       </div>
      </div> 

    </div>
  </div>
</div>
<script type="text/javascript" src="{{asset('dashboard/assets/scripts/main.js')}}"></script></body>
<script type="text/javascript">
    $(document).ready(function()
{
    var csrfToken = $('meta[name="csrf-token"]').attr('content');
         $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': csrfToken
      }
     }); 
});
        $('.admin_verify').click(function()
  {
    var id=$(this).attr('data-id');
    var modal=$(this).attr('data-modal');

     $('#ver_id').val(id);
     $('#ver_modal_val').val(modal);
  });

     $('.status_changer').click(function()
  {
    var id=$(this).attr('data-id');
    var modal=$(this).attr('data-modal');

     $('#stat_id').val(id);
     $('#stat_modal_val').val(modal);
  });
        
            $('.ver_btn').click(function()
        {  
            var ver_id = $('#ver_id').val();
            var ver_modal = $('#ver_modal_val').val();
                 $.ajax({
        method:'POST',        
        url:"{{ url('admin/verify_item') }}",
        data:{ver_id:ver_id , ver_modal:ver_modal},
        success:function(data){
         $('#change_sign'+ver_id).html('<span style="font-size:28px;">&#10004;</span>');
        }
     });
    });
              $('.deletebtn').click(function()
  {

    var id=$(this).attr('data-item-id');
    var modal=$(this).attr('data-modal');

     $('#appendadid').val(id);
     $('#appendmodalname').val(modal);
  });
</script>
<script type="text/javascript">


        $('.stat_btn').click(function()
        {  
         
            var stat_id = $('#stat_id').val();
            var stat_modal_val = $('#stat_modal_val').val();
            var stat_value = $('.stat_value').val();
                 $.ajax({
        method:'POST',        
        url:"{{ url('admin/change_status') }}",
        data:{findid:stat_id , modal:stat_modal_val , val:stat_value},
        success:function(data){
            if (stat_value == '1')
            {
                
              $('#change_stat_sign'+stat_id).html('<div class="badge badge-success status_changer"  data-id="'+stat_id+'" data-modal="Property" data-toggle="modal" data-target="#status_change_modal">Active</div>');  
            }   
                        if (stat_value == '0')
            {
              
              $('#change_stat_sign'+stat_id).html('<div class="badge badge-danger status_changer"  data-id="'+stat_id+'" data-modal="Property" data-toggle="modal" data-target="#status_change_modal">Inactive</div>');  
            } 
                        if (stat_value == '3')
            {
                
              $('#change_stat_sign'+stat_id).html('<div class="badge badge-warning status_warning"  data-id="'+stat_id+'" data-modal="Property" data-toggle="modal" data-target="#status_change_modal">SoldOut</div>');  
            }      
        }
     });
    });

        $(document).on('input','.change_status',function()
       {
        var findid=$(this).closest('.findprop').find('.findid').val();       
        var modal=$(this).closest('.findprop').find('.modal').val();
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
        url:"{{ url('admin/change_status') }}",
        data:{val:val , findid:findid ,modal:modal},
        success:function(data){

        }
     });
       });
       
    // ==========
   
</script>
<script>
    $(document).ready(function(){
        // alert("ll");
    var a = $("#a").val();
    var b = $("#b").val();
    // alert(a)
    $("#list"+a).show();
     $(".li_"+b).css("color", "red");
    
});
</script>
</html>
