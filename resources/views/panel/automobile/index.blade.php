@extends('layouts.panel.main')
@section('content')
<!--search start-->
<style>
    .view:hover {
        color: blue !important;
        cursor: pointer;
    }

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
    
    /* Style delete link to look like a button */
    .action-buttons .delete-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background-color: #dc3545;
        color: white;
        padding: 8px 12px;
        border-radius: 4px;
        font-size: 14px;
        text-decoration: none;
        flex: 1;
    }
    
    .action-buttons .delete-link:hover {
        background-color: #c82333;
        color: white;
    }

    /*media query for medium devices*/
    @media (min-width: 769px) and (max-width: 1200px) {
        .view {
            text-align: center;
        }

        .view a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }
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
        
        .action-buttons .delete-link {
            padding: 6px 10px;
            font-size: 13px;
        }
    }

    /*added media query for medium and large device*/
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

    /*added media query for the button to make it smaller on mobile view*/
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
    <center>
        <p class="title"><b>My Automobiles</b></p>
    </center>
    <div class="mb-3">
        <a href="{{route('AddAutomobileNeeded')}}" class="btn btn-warning font-roboto regular add-prop">
            <span></span><span class="" style="font-size:14px;">+Add Needed </span></a>
        <a href="{{url('scheam_auto')}}" class="btn btn-warning font-roboto regular add-prop">
            <span></span><span class="" style="font-size:14px;">+Add Automobiles </span></a>
    </div>

    <section class="card section search">
        <div class="card-header">
            SEARCH
        </div>
        <div class="card-body">
            <form action="" class="search-form">
                <div class="form-group">
                    <?php
                    $s1 = $s2 = $s3 = $s4 = $s5 = "";
                    if ($search_key == 1) {
                        $s1 = "selected";
                    } elseif ($search_key == 2) {
                        $s2 = "selected";
                    } elseif ($search_key == 3) {
                        $s3 = "selected";
                    } elseif ($search_key == 4) {
                        $s4 = "selected";
                    } elseif ($search_key == 5) {
                        $s5 = "selected";
                    }
                    ?>
                    <select name="search_key" class="form-control" required>
                        <option value="">---Select category--</option>
                        <option value="all">All category</option>
                        <option value="1" <?= $s1 ?>>New</option>
                        <option value="2" <?= $s2 ?>>Used</option>
                        <option value="3" <?= $s3 ?>>Hire</option>
                        <option value="4" <?= $s4 ?>>New - Needed</option>
                        <option value="5" <?= $s5 ?>>Used - Needed</option>
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
        <div class="alert alert-success " role="alert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <h4>Automobiles</h4>
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
                            <th scope="col">Name</th>
                            <th scope="col">Type</th>
                            <th scope="col">Payment Status</th>
                            <th scope="col">Status</th>
                            <th scope="col">View</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                            <th scope="col" width="2%">View Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($Automobiles as $p)
                        <tr>
                            <td class="mt-4">{{$Automobiles->firstItem() + $loop->index }}</td>
                            @if(!empty($p->main_image))
                            <td> <img src="{{asset('uploads/automobiles/'.$p->main_image)}}" class="ad_img"></td>
                            @else
                            <td> <img src="{{asset('website/images/caravatar.png')}}" class="ad_img"></td>
                            @endif
                            <td class="mt-4">{{$p->brand}}</td>
                            <td class="mt-4">
                                <?php if ($p->type == 1) {
                                    echo "New";
                                } elseif ($p->type == 2) {
                                    echo "Used";
                                } elseif ($p->type == 3) {
                                    echo "Hire";
                                } elseif ($p->type == 4) {
                                    echo "New - Needed";
                                } elseif ($p->type == 5) {
                                    echo "Used - Needed";
                                }
                                ?>
                            </td>
                            <td>
                                @if($p->payment_status==1)
                                <p>Completed </p>
                                @elseif($p->expired_status==2)
                                <button class="btn btn-sm btn-warning "><b> <a href="{{url('pay_ad'.$p->id)}}" class="text-white"><span class="subscribe-ico"></span>Renew Now</a> <b></button>
                                @else
                                <button class="btn btn-sm btn-warning "><b> <a href="{{url('Auto_pay_now'.$p->id)}}" class="text-white"><span class="subscribe-ico"></span>Pay Now</a> <b></button>
                                @endif
                            </td>
                            <td>
                                @if($p->status==1)
                                <p class="text-success subscripe "><b>Approved <b></p>
                                @elseif($p->status==2)
                                <p class="text-danger subscripe"><b>Denied <b></p>
                                @else
                                <p class="text-primary subscripe"><b>Pending <b></p>
                                @endif
                            </td>
                            <td align="left" class="mt-4 text-success view">
                                <a href="{{url('view_automobile')}}?view_id={{$p->id}}"><i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View</a>
                            </td>
                            <td align="center" class="mt-4">
                                <a href="{{url('Auto_Location')}}?id=2&edit_id={{$p->id}}"> <button type="button" class="btn btn-success btn-sm">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit Now</button></a>
                            </td>
                            <td align="center" class="mt-4">
                                <a href="{{url('Auto_delete'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');"><i class="fa fa-trash-o" aria-hidden="true"
                                        style="color:red;font-size:15px;font-weight:800"></i></a>
                            </td>
                            <td>{{$p->view_count}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10" class="text-center" style="color:red">NO DATA FOUND!</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
                <center>
                    <section style="padding:10px">
                        {{ $Automobiles->links() }}
                    </section>
                </center>
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
                
                @forelse($Automobiles as $p)
                <div class="mobile-card">
                    <div class="card-header">
                        {{$p->brand}}
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            @if(!empty($p->main_image))
                            <img src="{{asset('uploads/automobiles/'.$p->main_image)}}" class="img-fluid" alt="Automobile Image">
                            @else
                            <img src="{{asset('website/images/caravatar.png')}}" class="img-fluid" alt="No Image">
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Type:</strong></p>
                            </div>
                            <div class="col-6">
                                <p>
                                    <?php if ($p->type == 1) {
                                        echo "New";
                                    } elseif ($p->type == 2) {
                                        echo "Used";
                                    } elseif ($p->type == 3) {
                                        echo "Hire";
                                    } elseif ($p->type == 4) {
                                        echo "New - Needed";
                                    } elseif ($p->type == 5) {
                                        echo "Used - Needed";
                                    }
                                    ?>
                                </p>
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
                                <p><strong>Payment:</strong></p>
                            </div>
                            <div class="col-6">
                                @if($p->payment_status==1)
                                <p class="text-success"><b>Completed</b></p>
                                @elseif($p->expired_status==2)
                                <button class="btn btn-sm btn-warning"><a href="{{url('pay_ad'.$p->id)}}" class="text-white">Renew Now</a></button>
                                @else
                                <button class="btn btn-sm btn-warning"><a href="{{url('Auto_pay_now'.$p->id)}}" class="text-white">Pay Now</a></button>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p><strong>Views:</strong></p>
                            </div>
                            <div class="col-6">
                                <p>{{$p->view_count}}</p>
                            </div>
                        </div>
                        <!-- Action buttons in one line -->
                        <div class="action-buttons mt-3">
                            <a href="{{url('view_automobile')}}?view_id={{$p->id}}" class="btn btn-info btn-sm">
                                <i class="fa fa-eye" aria-hidden="true"></i>&nbsp;View
                            </a>
                            <a href="{{url('Auto_Location')}}?id=2&edit_id={{$p->id}}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>&nbsp;Edit
                            </a>
                            <a href="{{url('Auto_delete'.$p->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="delete-link">
                                <i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Delete
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center text-danger p-4">
                    <p>NO DATA FOUND!</p>
                </div>
                @endforelse
                
                <!--Pagination -->
                <div class="text-center mt-4">
                    {{ $Automobiles->links() }}
                </div>
            </div>
        </div>
    </section>
</main><br>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('.blah')
                    .attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection