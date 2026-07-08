@extends('layouts.admin.main')
@section('content')


  <style>
    /* Existing styles for the search button */
    .search-btn {
      width: 190px;
      height: auto;
      padding: 10px;
      background-color: #dc3545;
      border: 1px solid #dc3545;
      color: white;
      margin-top: -10px;
      border-radius: 15px;
    }

    /* Styles for small devices (up to 768px width) */
    @media (max-width: 768px) {
      .card-body {
        width: 100%;
      }

      .search-btn {
        width: 80px;
        padding: 4px;
        height: 41px;
      }

      .form-control {
        width: 100%;
        font-size: 11px;
        padding: 6px 2px;
        font-weight: bold;
      }

      td[width="40%"] {
        width: 45%;
      }


      .form-control {
        width: 100%;
      }
    }

    .clearbtn {
      height: 40px;
      !important color: white;
      !important background-color: #6c757d;
      !important padding: 4px 8px;
      border-radius: 15px;
      width: 120px;
    }

    .clearbtn a {
      text-decoration: none;
      color: white;
    }
  </style>

  <div class="spacer">
  </div>
  <div class="row">
    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">
      <a href="{{url('admin/add_automobiles')}}"> <button class="btn btn-sm btn-dark text-white mb-4">Add New
          Automobiles</button></a>
    </div>
    <div class="col-md-6 col-xs-12 col-sm-12 col-lg-6">

    </div>
  </div>
  <!--search start-->
  <section class="card">
    <div class="card-header">
      SEARCH
    </div>
    <div class="card-body">
      <form action="" class="row">
        <input type="hidden" name="a" value="3">
        <input type="hidden" name="b" value="7">

        <?php
  $a = $b = $c = $d = $e = "";
  if (isset($_GET['search_type'])) {
    if ($_GET['search_type'] == 1) {
      $a = "selected";
    }
    if ($_GET['search_type'] == 2) {
      $b = "selected";
    }
    if ($_GET['search_type'] == 3) {
      $c = "selected";
    }
    if ($_GET['search_type'] == 4) {
      $d = "selected";
    }
    if ($_GET['search_type'] == 5) {
      $e = "selected";
    }
  }
                ?>

        <div class="col-lg-3 col-md-6 mb-3">
          <select name="search_type" class="form-control">
            <option value="">--Select Type--</option>
            <option value="2" <?=$b?>>Standard</option>
            <option value="1" <?=$a?>>Featured</option>
            <option value="3" <?=$c?>>Slot 5</option>
            <option value="4" <?=$d?>>Slot 10</option>
            <option value="5" <?=$e?>>Slot 15</option>
          </select>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
          <select name="main_name" class="form-control">
            <?php
  $a = $b = $c = $d = "";
  if (isset($_GET['main_name'])) {
    if ($_GET['main_name'] == "1") {
      $a = "selected";
    }
    if ($_GET['main_name'] == "2") {
      $b = "selected";
    }
    if ($_GET['main_name'] == "3") {
      $c = "selected";
    }
    if ($_GET['main_name'] == "dealers") {
      $d = "selected";
    }
  }
                        ?>
            <option value="">--Select Type--</option>
            <option value="2" <?=$a?>>Used</option>
            <option value="1" <?=$b?>>New</option>
            <option value="3" <?=$c?>>Hire</option>
            <option value="dealers" <?=$d?>>Dealers</option>
          </select>
        </div>

        <div class="col-lg-3 col-md-6 mb-3">
          <?php
  $a = $b = $c = "";
  if (isset($_GET['status'])) {
    if ($_GET['status'] == 1) {
      $a = "selected";
    }
    if ($_GET['status'] == 0) {
      $b = "selected";
    }
    if ($_GET['status'] == 3) {
      $c = "selected";
    }
  }
                    ?>
          <select name="status" class="form-control">
            <option value="">--Select Status--</option>
            <option value="1" <?=$a?>>Active</option>
            <option value="0" <?=$b?>>Inactive</option>
            <option value="3" <?=$c?>>Sold out</option>
          </select>
        </div>

        <!-- Search Button -->
        <div class="col-12 d-flex justify-content-end mt-2">
          <div class="col-lg-2 col-md-3 col-6 mt-2">
            <button type="submit" class="btn search-btn w-100" style="border-radius: 15px;">Search</button>
          </div>
          <div class="col-lg-2 col-md-3 col-6 mb-2">
            <!--<a href="{{url('admin/automobiles')}}?a=3&&b=7"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
            <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn"
              onclick="document.querySelector('form').reset();"> <a href="{{url('admin/automobiles')}}?a=3&&b=7"> Clear
              </a></button>
          </div>
        </div>
      </form>
    </div>
  </section>

  <style>
    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
      border-radius: 15px;
    }

    @media (max-width: 768px) {
      .btn-danger {
        /*width: 100%;*/
      }
    }

    @media (min-width: 992px) {
      .form-control {
        font-size: 0.875rem;
        /* Adjust the font size as needed */
      }

      .btn-danger {
        font-size: 0.875rem;
        /* Adjust the font size as needed */
      }
    }
  </style>


  <br><br>
  <!--search end-->
  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">Automobiles
          <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
              <!-- <button class="active btn btn-focus" type="button" data-toggle="modal" data-target="#adminproductsmodal">Create new product</button> -->

            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center">SL. No.</th>
                <th class="text-center">Image</th>
                <th class="text-center">Type</th>
                <th class="text-center">Address</th>
                <th class="text-center">Price</th>
                <th class="text-center">User</th>
                <th class="text-center">Payment Type</th>
                <th class="text-center">Status</th>
                <th class="text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach($automobiles as $automobile)
                          <tr class="datas">

                            <td class="text-center text-muted">{{$automobiles->firstItem() + $loop->index }}</td>
                            <td class="text-center text-muted">

                              <div class="widget-content p-0">
                                <div class="widget-content-wrapper ">
                                  <div class="widget-content-left mr-3">
                                    <div class="widget-content-left">

                                      <img width="100" src="{{ asset('/uploads/automobiles/' . $automobile->main_image) }}" alt="">

                                    </div>
                                  </div>
                                  <div class="widget-content-left flex2">
                                    <input type="hidden" value="{{$automobile->id}}" class="prodid" name="">
                                    <input type="hidden" value="{{$automobile->aname}}" class="prodname" name="">
                                    <input type="hidden" value="{{$automobile->price}}" class="prodprice" name="">
                                    <input type="hidden" value="{{$automobile->category}}" class="prodcategory" name="">
                                    <input type="hidden" value="{{$automobile->store}}" class="prodstore" name="">
                                    <div id="prodname" value="{{$automobile->name}}" class="widget-heading "></div>
                                    <div id="prodstore" value="{{$automobile->store}}" class="widget-heading "></div>
                                    <div id="prodprice" class="widget-subheading opacity-7 prodprice"></div>
                                  </div>
                                </div>
                              </div>

                            </td>
                            <td class="text-center">
                              <?php

                if ($automobile->type == 1) {
                  $type = "New";
                }
                if ($automobile->type == 2) {
                  $type = "Used";
                }
                if ($automobile->type == 3) {
                  $type = "Hire";
                }

                                                                                 ?>
                              {{$type}}
                            </td>

                            <td class="text-center">
                              {{$automobile->county}}
                              {{$automobile->street}}<br>
                              {{$automobile->city}}
                              {{$automobile->town}}
                              {{$automobile->eir_code}}
                            </td>

                            <td class="text-center">€&nbsp;{{$automobile->price}}</td>
                            <td class="text-center">

                              {{$automobile->User->name}}

                            </td>
                            <td class="text-center">
                              <?php
                $pstatsu = "NOT UPDATED";
                if ($automobile->subcription_type == 1) {
                  $pstatsu = "Featured";
                } elseif ($automobile->subcription_type == 2) {
                  $pstatsu = "Standard";
                } elseif ($automobile->subcription_type == 3) {
                  $pstatsu = "Slot 5";
                } elseif ($automobile->subcription_type == 4) {
                  $pstatsu = "Slot 10";
                } elseif ($automobile->subcription_type == 5) {
                  $pstatsu = "Slot 15";
                }

                                                                                ?>
                              <div class="badge badge-success status_changer"><?=$pstatsu?>
                              </div>
                            </td>
                            <td class="text-center" id="change_stat_sign{{$automobile->id}}">
                              @if($automobile->status == '1')
                                <div class="badge badge-success status_changer" data-id="{{$automobile->id}}" data-modal="Automobiles"
                                  data-toggle="modal" data-target="#status_change_modal"><?php    echo "Active"?>
                                </div>
                              @elseif($automobile->status == '0')
                                <div class="badge badge-danger status_changer" data-toggle="modal" data-target="#status_change_modal"
                                  data-id="{{$automobile->id}}" data-modal="Automobiles"><?php    echo "Inactive"?>
                                </div>
                              @elseif($automobile->status == '3')
                                <div class="badge badge-warning status_changer" data-toggle="modal" data-target="#status_change_modal"
                                  data-id="{{$automobile->id}}" data-modal="Automobiles"><?php    echo "Sold Out"?>
                                </div>
                              @else
                                <div class="badge badge-warning status_changer" data-toggle="modal" data-target="#status_change_modal"
                                  data-id="{{$automobile->id}}" data-modal="Automobiles">Change Status</div>
                              @endif
                            </td>

                            <td class="text-center" nowrap>
                              <a href="{{url('admin/edit-automobiles/' . $automobile->id)}}">
                                <button type="button" value="{{$automobile->id}}" id="PopoverCustomT-1"
                                  class="btn btn-primary btn-sm edits">
                                  edit
                                </button>
                              </a>
                              <button type="button" value="{{$automobile->id}}" id="PopoverCustomT-1"
                                class="btn btn-danger btn-sm delete deletebtn" data-toggle="modal" data-target="#deletemodal"
                                data-item-id="{{$automobile->id}}" data-modal="Automobiles">
                                delete
                              </button>
                            </td>

                          </tr>

              @endforeach

            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-center text-center card-footer">

          {{$automobiles->links()}}
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="adminproductsmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('addproduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" name="productname" class="form-control" id="productname" required="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Price</label>
              <input type="number" name="productprice" class="form-control" id="productprice" required="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Exp_Price</label>
              <input type="number" name="expanded_price" class="form-control" id="exprice" required="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Store</label>

              <select name="productstore" class="form-control" id="productstore" required="">
                <option></option>
              </select>


            </div>

            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Image</label>
              <input type="file" class="form-control" id="productprice" name="productfile" required="" />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Add product</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <div class="modal fade" id="adminproductsdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <form action="{{url('deleteproduct')}}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">sure to delete <span name="somethingg" id="spamm"></span> ?
            </h5>
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

  <div class="modal fade" id="adminproductseditmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('editproduct')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" name="productname" id="editproductname" class="form-control" required="">
            </div>
            <input type="hidden" id="editproductid" name="productid">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Price</label>
              <input type="text" name="productprice" class="form-control" id="editproductprice" required="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Exp_Price</label>
              <input type="text" name="expanded_price" class="form-control" id="expproductprice" required="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Store</label>
              <select name="productstore" class="form-control" required="">
                <option selected value="" id="editproductstore"></option>
                <option></option>
              </select>

            </div>
            <!--   <div class="form-group">
                <label for="recipient-name" class="col-form-label">Category</label>
             <select class="custom-select my-1 mr-sm-2" name="productcategory" id="inlineFormCustomSelectPref">
        <option id ="editproductcategory" selected>Choose...</option>
        <option value="1">Fruits</option>
        <option value="2">Vegetables</option>
        <option value="3">Grocery</option>
      </select>

              </div>
            -->
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Image</label>
              <input type="file" class="form-control" id="productprice" name="productfile" />
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">edit product</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).on('input', '.make_featured', function () {
      var prop_id = $(this).closest('.findprop').find('.findid').val();
      var prop_modal = $(this).closest('.findprop').find('.findmodal').val();
      if ($(this).is(":checked")) {
        var val = 'on';
      }
      else {
        var val = 'off';
      }
      var csrfToken = $('meta[name="csrf-token"]').attr('content');

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken
        }
      });
      $.ajax({
        method: 'POST',
        url: "{{ url('admin/make_featured') }}",
        data: { val: val, prop_id: prop_id, prop_modal: prop_modal },
        success: function (data) {

        }
      });
    });
  </script>

  <script>
    $(function () {
      $('[data-toggle="popover"]').popover()
    })

    $(document).on('click', '.edits', function () {
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
    $(document).on('click', '.delete', function () {
      //var itemvalue = $(this).val();

      var id = $(this).closest('.datas').find('.prodid').val();

      var name = $(this).closest('.datas').find('.prodname').val();



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

    $(document).ready(function () {
      // This WILL work because we are listening on the 'document', 
      // for a click on an element with an ID of #test-element
      $(document).on("click", ".edits", function () {
        alert("click bound to document listening for #test-element");
      });
      $(document).on('click', '.edits', function () {
        alert('hh');
        var _this = $(this).parents('tr');

        $('#productname').val(_this.find('.productname').text());
        $('#productprice').val(_this.find('.productprice').text());
      });


  </script>
@endsection