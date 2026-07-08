@extends('layouts.panel.main')
@section('content')

<?php
    foreach($Advertisement1 as $p)
    {
        $a[$p->id]=$p->page_name;
        $a=array_unique($a);
    }
?>
<!--search start-->
<style>
    img {
        max-width: 180px;
    }
    input[type=file] {
        padding: 10px;
        background: #2d2d2d;
    }
    a {
        text-decoration: none;
        color: inherit;
    }
    .search {
        margin-top: 60px;
        font-size: 13px !important; 
    }
    .table {
        font-size: 13px !important; 
    }
    .title {
        color: red;
        font-weight: 500;
        font-size: 40px;
    }
    .search-btn {
        width: 200px;
        height: auto;
        padding: 10px;
        background-color: #dc3545;
        border: 1px solid #dc3545;
        color: white;
        margin-top: 0%
    }
    .ad_img {
        width: 170px;
        height: 100px;
    }
    
    /* Mobile improvements */
    .mobile-card {
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        border-radius: 8px;
    }
    
    .mobile-card .card-header {
        background-color: #f8f9fa;
        font-weight: bold;
    }
    
    .mobile-card .card-body {
        padding: 15px;
    }
    
    .mobile-card img {
        max-width: 100%;
        height: auto;
        margin-bottom: 10px;
    }
    
    .mobile-card .action-buttons {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
        gap: 10px;
    }
    
    .mobile-card .action-buttons .btn {
        flex: 1;
        padding: 8px 12px;
        font-size: 14px;
    }
    
    /* Modal improvements for mobile */
    .modal-dialog {
        margin: 10px;
        max-width: calc(100% - 20px);
    }
    
    @media(max-width:768px) {
        .title {
            font-size: 24px;
        }
        
        .search-form {
            display: flex;
            flex-direction: column;
        }
        
        .search-form select {
            margin-bottom: 10px;
        }
        
        .search-btn {
            width: 100%;
        }
        
        /* Keep action buttons horizontal on mobile */
        .action-buttons {
            flex-direction: row !important;
            justify-content: space-between;
        }
        
        .action-buttons .btn {
            margin-bottom: 0;
            padding: 6px 10px;
            font-size: 13px;
        }
        
        /* Style delete link to look like a button */
        .action-buttons .delete-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #dc3545;
            color: white;
            padding: 6px 10px;
            border-radius: 4px;
            font-size: 13px;
            text-decoration: none;
            flex: 1;
        }
        
        .action-buttons .delete-link:hover {
            background-color: #c82333;
            color: white;
        }
    }
    
    /* Media query for medium and large device */
    @media(min-width:768px) {
        .search-btn {
            width: 120px;
            border-radius: 15px;
        }
        .form-control {
            font-size: 2rem;
            padding: 0px 5px;
        }
    }
    
    /* Media query for the button to make it smaller on mobile view */
    @media(max-width:768px) {
        .search-btn {
            width: 100%;
            border-radius: 15px;
        }
        .form-control {
            font-size: 1.5rem;
        }
    }
</style>
<main class="container">
    <center><p class="title"><b>My Ads</b></p></center>
    <div class="mb-3">
        <a href="{{url('add_ad')}}" class="btn btn-warning font-roboto regular" type="button">
            <span></span><span class="" style="font-size:14px;">+Add new add</span>
        </a>
    </div>
    
    <section class="card section search">
        <div class="card-header">
            SEARCH
        </div>
        <div class="card-body">
            <form action="" class="search-form">
                <div class="form-group">
                    <select name="page_name" class="form-control" required>
                        <option value="">---Select Page--</option>
                        <option value="all">All Pages</option>
                        <?php foreach($a as $id =>$page_name)
                        {
                            $sel="";
                            if(isset($_GET['page_name']))
                            {
                                if($_GET['page_name']==$page_name) 
                                {
                                    $sel="selected";
                                }
                                else
                                {
                                    $sel="";
                                }
                            }
                            ?>
                            <option value="<?=$page_name?>" <?=$sel?>><?=$page_name?></option>
                        <?php }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="search" class="search-btn">Search</button>
                </div>
            </form>
        </div>
    </section><br><br>
    <!--==========search end===============-->
    <section class="section">
        @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <h4> @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                </div>
                @endif </h4>
            </div>
            
            <!-- Desktop Table View -->
            <div class="card-body table-responsive d-none d-md-block">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">SL No</th>
                            <th scope="col">Image</th>
                            <th scope="col">Page</th>
                            <th scope="col">Position</th>
                            <th scope="col">Url</th>
                            <th scope="col">Price / Duration</th>
                            <th scope="col">Status</th>
                            <th scope="col">Display Status</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Advertisement as $p)
                        <tr>
                            <td class="mt-4">{{$Advertisement->firstItem() + $loop->index }}</td>
                            <td> <img src="{{asset('uploads/ads/'.$p->image)}}" class="ad_img"></td>
                            <td class="mt-4">{{$p->page_name}}</td>
                            <td class="mt-4">{{$p->position}}</td>
                            <td class="mt-4"><a href="{{$p->url}}" target="_blank">{{$p->url}}</a></td>
                            <td>€&nbsp;{{$p->price}}&nbsp;/&nbsp;{{$p->duration}}&nbsp;Days</td>
                            <td>
                                @if($p->status==1)
                                <p class="text-success subscripe"><b>Approved</b></p> 
                                @elseif($p->status==2)
                                <p class="text-danger subscripe"><b>Denied</b></p>
                                @else
                                <p class="text-primary subscripe"><b>Pending</b></p>
                                @endif
                            </td>
                            <td>
                                @if($p->payment_status==1)
                                <p class="text-success subscripe"><b>Active</b></p> 
                                @elseif($p->expired_status==2)
                                <button class="btn btn-sm btn-warning"><b> <a href="{{url('pay_ad'.$p->id)}}" class="text-white"><span class="subscribe-ico"></span>Renew Now</a></b></button>
                                @else
                                <button class="btn btn-sm btn-warning"><b> <a href="{{url('pay_ad'.$p->id)}}" class="text-white"><span class="subscribe-ico"></span>Pay Now</a></b></button>
                                @endif
                            </td>
                            <td align="center" class="mt-4">
                                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Now
                                </button>
                            </td>
                            <td align="center" class="mt-4">
                                <a href="{{url('delete_ad'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">
                                    <i class="fa fa-trash-o" aria-hidden="true" style="color:red;font-size:15px;font-weight:800"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center" style="color:red">NO DATA FOUND!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            
            <!-- Mobile Card View -->
            <div class="card-body d-block d-md-none">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                
                @forelse($Advertisement as $p)
                <div class="mobile-card">
                    <div class="card-header">
                        {{$p->page_name}} / {{$p->position}}
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{asset('uploads/ads/'.$p->image)}}" class="img-fluid" alt="Ad Image">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>URL:</strong></p>
                            </div>
                            <div class="col-6">
                                <p><a href="{{$p->url}}" target="_blank">{{$p->url}}</a></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Price:</strong></p>
                            </div>
                            <div class="col-6">
                                <p>€{{$p->price}} / {{$p->duration}} Days</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Status:</strong></p>
                            </div>
                            <div class="col-6">
                                @if($p->status==1)
                                <p class="text-success"><b>Approved</b></p>
                                @elseif($p->status==2)
                                <p class="text-danger"><b>Denied</b></p>
                                @else
                                <p class="text-primary"><b>Pending</b></p>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Display:</strong></p>
                            </div>
                            <div class="col-6">
                                @if($p->payment_status==1)
                                <p class="text-success"><b>Active</b></p>
                                @elseif($p->expired_status==2)
                                <button class="btn btn-sm btn-warning"><a href="{{url('pay_ad'.$p->id)}}" class="text-white">Renew Now</a></button>
                                @else
                                <button class="btn btn-sm btn-warning"><a href="{{url('pay_ad'.$p->id)}}" class="text-white">Pay Now</a></button>
                                @endif
                            </div>
                        </div>
                        <!-- Action buttons in one line - PRESERVING ORIGINAL FUNCTIONALITY -->
                        <div class="action-buttons mt-3">
                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#adminproductsmodal{{$p->id}}">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Now
                            </button>
                            <a href="{{url('delete_ad'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="delete-link">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Modal for each ad - PRESERVING ORIGINAL MODAL STRUCTURE -->
                <model>
                    <div class="modal" id="adminproductsmodal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color:#d3111a;">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">{{$p->page_name}} / {{$p->position}}</h5>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{url('panel/editAds')}}" enctype="multipart/form-data" id="addAdForm">
                                        @csrf
                                        <input type="hidden" name="ad_id" value="{{$p->ad_id}}">
                                        <input type="hidden" name="id" value="{{$p->id}}">
                                        <input type="hidden" name="duration" value="{{$p->duration}}">
                                        <input type="hidden" class="form-control" name="price" value="{{$p->price}}">
                                        
                                        <div class="form-group" style="display:none1">
                                            <label for="recipient-name" class="col-form-label">Url</label>
                                            <input type="text" class="form-control" name="url" value="{{$p->url}}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <center>
                                                <label for="fileInput">Current Image</label>&nbsp;
                                                <img src="{{asset('uploads/ads/'.$p->image)}}"><br>
                                                <br><br>
                                                <input type='file' onchange="readURL(this);" name="image"/>
                                                <br><br>
                                                <img class="blah" src="http://placehold.it/300" alt="your image" />
                                                <br><br>
                                            </center>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn text-light" style="background-color:#d3111a;" id="submitButton">Add Ad</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </model>
                @empty
                <div class="text-center text-danger p-4">
                    <p>NO DATA FOUND!</p>
                </div>
                @endforelse
            </div>
        </div>
        
        <!--Pagination -->
        <div class="text-center mt-4">
            {{ $Advertisement->links() }}
        </div>
    </section>
</main><br>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection