@extends('layouts.admin.main')
@section('content')
  <style>
    .form-group {
      margin-bottom: 0rem;
    }

    /*changed the style applied to the search btn  and added media for the btn on small devices*/
    .searchbtn {
      margin-top: 8%;
    }

    @media(max-width:768px) {
      .searchbtn {
        margin-top: 28%;
      }
    }

    /* Styles for small devices (up to 768px width) */
    @media (max-width: 768px) {
      .card-body {
        width: 100%;
      }

      .search-btn {
        width: 80px;
        padding: 4px;
        font-weight: bold;
        margin-top: 0;
        height: 40px;
      }

      .form-control {
        width: 100%;
        font-size: 12px;
        font-weight: normal;
      }

      td[width="40%"] {
        width: 100%;
      }

      td[width="5%"] {
        display: none;
      }

      td.align-bottom {
        vertical-align: bottom;
      }
    }

    .clearbtn {
      height: 40px;
      !important color: white;
      !important background-color: #6c757d;
      !important padding: 4px 8px;
      border-radius: 5px;
      width: 120px;
    }

    .clearbtn a {
      text-decoration: none;
      color: white;
      display: block;
    }

    .password-container {
      position: relative;
      display: inline-block;
    }

    #password {
      padding-right: 0px;
      /* Space for the eye icon */
      width: 100%;
      box-sizing: border-box;
    }

    .toggle-password {
      position: absolute;
      right: 10px;
      top: 80%;
      transform: translateY(-50%);
      cursor: pointer;
      font-size: 14px;
      /* Adjust the size of the eye icon */
    }

    .a-dlt-btn-t:hover i {
      color: white !important;
    }

    #eyeIcon {
      color: black;
    }
  </style>
  <script src="https://kit.fontawesome.com/29d1847fa7.js" crossorigin="anonymous"></script>
  <!--search start-->
  <?php if (!empty($_GET['u'])) {
    $title = "Personal Users";
    $b = 5;
    $u = 1;
  } else {
    $title = "Agents";
    $b = 6;
    $u = "";
  }
     ?>
  <section class="card">
    <div class="card-header">
      &nbsp;
      <button class="btn-sm btn-dark" data-toggle="modal" data-target="#exampleModalLong">Add New+</button>
      <!-- Button trigger modal -->
      @error('password')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
      @enderror
      <!-- Modal -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add New</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" action="/admin/admin_register">
                @csrf
                <div class="form-group mt-3">
                  <label>Name<span style="color:red">*</span></label>
                  <input placeholder="Enter Your Name" id="name" type="text"
                    class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
                    required autocomplete="name" autofocus>
                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label>Email<span style="color:red">*</span></label>
                  <input placeholder="Enter Email Address" id="email" type="email"
                    class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                    required autocomplete="email">
                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label>Phone Number<span style="color:red">*</span></label>
                  <div style="display:flex">
                    <input type="tel" id="phoneNumberInput" placeholder="+353" size="2" name="code"
                      style="border: 1px solid rgb(221, 221, 221);" value="+353" required>
                    <input placeholder="Enter Your Number" id="phone" type="tel"
                      class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}"
                      required autocomplete="email">
                  </div>
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label>Whats app Number</label>
                  <div style="display:flex">
                    <input type="tel" id="phoneNumberInput" placeholder="+353" size="2" name="codew"
                      style="border: 1px solid rgb(221, 221, 221);" value="+353">
                    <input placeholder="Enter Your Number" id="whatsapp" type="tel"
                      class="form-control @error('phone') is-invalid @enderror" name="whatsapp"
                      value="{{ old('whatsapp') }}" autocomplete="whatsapp">
                  </div>
                  @error('phone')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <label>Address<span style="color:red">*</span></label>
                  <textarea class="form-control noResize" rows="4" id="address" name="address"
                    required>{{ old('address') }}</textarea>
                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
                <div class="form-group mt-3 radio">
                  <?php $acheck = $ascheck = $pcheck = ""?>
                  @if(old('role') == "agent")
                    @php
                      $acheck = "checked";
                    @endphp
                  @endif
                  @if(old('role') == "pseller")
                    @php
                      $pcheck = "checked";
                    @endphp
                  @endif
                  @if(old('role') == "Aseller")
                    @php
                      $ascheck = "checked";
                    @endphp
                  @endif
                  <label>Choose Type <span style="color:red">*</span></label>
                  <input type="radio" id="agent" name="role" value="agent" <?=$acheck?> required>
                  &nbsp; &nbsp; <label for="agent">Agent / Dealer</label>
                  <input type="radio" id="property" name="role" value="pseller" <?=$ascheck?> required>
                  &nbsp; &nbsp; <label for="property">User</label>
                </div>
                <div class="form-group mt-3 password-container">
                  <label>Password<span style="color:red">*</span></label>
                  <input placeholder="Enter Password" id="password" type="password"
                    class="form-control @error('password') is-invalid @enderror password" name="password" required
                    autocomplete="new-password" size="100"> <i class="toggle-password"
                    onclick="togglePassword()"><i class="fas fa-eye"></i></i>
                </div>
                <div class="form-group mt-3  password-container">
                  <label>Confirm Password<span style="color:red">*</span></label>
                  <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control"
                    name="password_confirmation" required autocomplete="new-password" size="100"><i
                    class="toggle-password toggle-passwordtwo" onclick="togglePasswordtwo()"><i
                      class="fas fa-eye"></i></i>
                </div>
                <div>
                </div>
                <div class="form-group mt-3">
                  <button type="submit" class="form-control" style="background-color:#d3111a;border:0; color:#fff;">
                    {{ __('Register') }}
                  </button>
                </div>
                <br><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card-body">
      <form action="" method="GET">
        @csrf
        <div class="row">
          <!-- Empty Column for Spacing -->
          <div class="col-lg-1 col-md-1 col-12 mb-2">
            &nbsp;
          </div>
          <!-- <span>{{session('error')}}</span> -->
          <!-- Search Keyword Input -->
          <div class="col-lg-5 col-md-5 col-12 mb-2">
            <label for="keyword">Search Keyword</label>
            <?php
  $KEYWORD = "";
  $a = 6;
  $b = 2;
  $error_message = "";
  if (isset($_GET['keyword'])) {
    $KEYWORD = $_GET['keyword'];
  }
  if (isset($_GET['u'])) {
    $a = 6;
    $b = 1;
  }
  // if(empty($KEYWORD)){
  //   $error_message = "There is no data";
  // }         

                    ?>
            <input type="text" id="keyword" name="keyword" class="form-control mt-2" required value="<?=$KEYWORD?>">
            <input type="hidden" name="a" class="form-control mt-2" value="<?=$a?>">
            <input type="hidden" name="b" class="form-control mt-2" value="<?=$b?>">
            <input type="hidden" name="u" class="form-control mt-2" value="<?=$u?>">
          </div>
          <!-- <span class="text-danger">{{session('error')}}</span> -->
          <!-- Empty Column for Spacing -->
          <div class="col-lg-2 col-md-1 col-12 mb-1">
            <span class="text-danger">{{session('error')}}</span>
          </div>
          <!-- Buttons -->
          <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
            <button type="submit" class="search-btn btn btn-secondary btn-sm w-100">Search</button>
          </div>
          <div class="col-lg-2 col-md-2 col-6 mb-2 d-flex align-items-end">
            <br>
            <!--<a href="{{url('admin/agents')}}?a={{$a}}&&b={{$b}}"><button type="button" class="clear-btn btn btn-secondary btn-sm w-100" onclick="document.querySelector('form').reset();">Clear</button></a>-->
            <button type="button" style=" background-color:#6c757d;color:white;" class="clearbtn"
              onclick="document.querySelector('form').reset();"> <a href="{{url('admin/agents')}}?a={{$a}}&&b={{$b}}">
                Clear </a></button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <br><br>
  @if ($message = Session::get('success'))
    <div class="alert alert-success " role="alert">
      <strong>{{ $message }}</strong>
    </div>
  @endif
  <span>{{$error_message}}</span>
  <!--search end-->
  <div class="spacer"></div>
  <div class="row">
    <div class="col-md-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
          {{$title}}
          <div class="btn-actions-pane-right">
            <div role="group" class="btn-group-sm btn-group">
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="align-middle mb-0 table table-borderless table-striped table-hover">
            <thead>
              <tr>
                <th class="text-center" width="1%">SL. No.</th>
                <th class="text-center" width="15%">Image</th>
                <th class="text-center" width="10%">Name</th>
                <th class="text-center" width="5%">Email</th>
                <th class="text-center" width="5%">Phone</th>
                <th class="text-center" width="10%">Address</th>
                <th class="text-center" width="2%">Listings</th>
                <th class="text-center" width="2%">Verify Email</th>
                <th class="text-center">Edit</th>
                <th class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @php
                use App\Models\Property;
                use App\Models\Automobiles;
              @endphp
              @foreach($agents as $agent)
                <tr class="datas">
                  <td class="text-center text-muted">{{ $agents->firstItem() + $loop->index }}</td>
                  <td>
                    <div class="widget-content p-0 ">
                      <div class="widget-content-wrapper ">
                        <div class="widget-content-left mr-3">
                          <div class="widget-content-left">
                            <img width="100" src="{{ asset('/uploads/Agent/' . $agent->image) }}" alt="" alt="">
                          </div>
                        </div>
                        <div class="widget-content-left flex2">
                          <input type="hidden" value="{{$agent->id}}" class="prodid" name="">
                          <input type="hidden" value="{{$agent->name}}" class="prodname" name="">
                          <input type="hidden" value="{{$agent->email}}" class="prodemail" name="">
                          <input type="hidden" value="{{$agent->phone}}" class="prodphone" name="">
                          <input type="hidden" value="{{$agent->address}}" class="prodaddress" name="">
                          <div id="prodname" value="{{$agent->name}}" class="widget-heading "></div>
                          <div id="prodprice" class="widget-subheading opacity-7 prodprice"></div>
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="text-center">{{$agent->name}}</td>
                  <td class="text-center">{{$agent->email}}</td>
                  <td class="text-center">{{$agent->phone}}</td>
                  <td class="text-center">{{$agent->address}}</td>
                  @php
                    $p_count = Property::where('user_id', $agent->id)->count();
                    $a_count = Automobiles::where('user_id', $agent->id)->count();
                    $l_count = $p_count + $a_count;  
                   @endphp
                  <td class="text-center">{{$l_count}}</td>
                  <td class="text-center">
                    <label class="switch findprop">
                      <input type="hidden" class="findid" value="{{$agent->id}}">
                      <input type="checkbox" class="make_featured" {{$agent->verified == '1' ? 'checked' : ''}}>
                      <span class="slider round"></span>
                    </label>
                  </td>
                  <td class="text-center" width="20%">
                    <button type="button" value="{{$agent->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm edits"
                      data-toggle="modal" data-target="#adminproductseditmodal" data-item-id="{{$agent->id}}">edit</button>
                    <button type="button" value="{{$agent->id}}" id="PopoverCustomT-1" class="btn btn-primary btn-sm edits"
                      data-toggle="modal" data-target="#adminproductseditmodalPassword{{$agent->id}}"
                      data-item-id="{{$agent->id}}">Change Password</button>
                    <div class="modal fade" id="adminproductseditmodalPassword{{$agent->id}}" tabindex="-1" role="dialog"
                      aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="{{url('admin/edit_password_change')}}" method="post"
                              onsubmit="return myFunction();">
                              @csrf
                              <div class="form-group mt-3 password-container">
                                <label>Password<span style="color:red">*</span></label>
                                <input placeholder="Enter Password" id="password_c" type="text"
                                  class="form-control @error('password') is-invalid @enderror password" name="password_c"
                                  required autocomplete="new-password" size="100" required>
                                <input type="hidden" name="user_id" value="{{$agent->id}}">
                                @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                              </div>
                              <div class="form-group mt-3  password-container">
                                <label>Confirm Password<span style="color:red">*</span></label>
                                <input placeholder="Confirm Password" id="password_cc" type="text" class="form-control"
                                  name="password_confirmation" required autocomplete="new-password" size="100" required>
                              </div>
                              <div class="modal-footer">
                                <!--<button type="button" class="btn btn-secondary" id="btn-password">Change Password</button>-->
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
                    <!--<button type="button" value="{{$agent->id}}" id="PopoverCustomT-1" class="btn btn-danger btn-sm delete" data-toggle="modal" data-target="#adminproductsdeletemodal" data-item-id="{{$agent->id}}">delete</button>-->
                  </td>
                  <!-- <td class="text-center"><button class="btn btn-outline-danger a-dlt-btn-t delete-btn"><i class="fa-solid fa-trash" style="color: #ff0000;"></i></button></td> -->
                  <td class="text-center">
                    <button type="button" class="btn btn-outline-danger a-dlt-btn-t" data-bs-toggle="modal"
                      data-bs-target="#deleteModal" data-user-id="{{ $agent->id }}">
                      <i class="fa-solid fa-trash" style="color: #ff0000;"></i>
                    </button>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="d-flex justify-content-center text-right card-footer" style="">
          <div>
            {{$agents->links()}}
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Delete Confirmation Modal -->
  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Confirm Deletion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-x"
              style="color: #000000;"></i></button>
        </div>
        <div class="modal-body">
          Are you sure you want to delete this user?
          <form id="deleteForm" method="POST" action="{{ route('admin.deleteUser') }}">
            @csrf
            @method('DELETE')
            <input type="hidden" name="user_id" id="deleteUserId">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="submit" form="deleteForm" class="btn btn-danger">Delete</button>
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
          <h5 class="modal-title" id="exampleModalLabel">Edit Agent</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{url('admin/edituser')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Name</label>
              <input type="text" name="name" id="editagentname" class="form-control" required="">
            </div>
            <input type="hidden" id="editproductid" name="id">
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Email</label>
              <input type="text" name="email" class="form-control" id="editagentemail" required="" readonly="">
            </div>
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">Phone</label>
              <div class="input-group">
                <div class="input-group-prepand">
                  <input type="text" class="form-control text-center" id="country-code" placeholder="+1"
                    style="max-width: 70px;" value="+353">
                </div>
                <input type="text" name="phone" class="form-control" id="editagentphone" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="Address" class="col-form-label">Address</label>
              <textarea name="address" class="form-control" id="editagentaddress"></textarea>
            </div>
            <div class="modal-footer">
              <!--<button type="button" class="btn btn-secondary" id="btn-password">Change Password</button>-->
            </div>
            <div class="form-group" id="show-password">
              <label for="recipient-name" class="col-form-label">Password</label>
              <div class="input-group">
                <input type="password" name="password" class="form-control edit-pass" id="editagentpassword"
                  placeholder="Enter your password">
                <div class="input-group-append">
                  <span class="input-group-text" id="toggleEditPassword">
                    <i class="fa fa-eye" id="eyeIcon"></i>
                  </span>
                </div>
              </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('toggleEditPassword').addEventListener('click', function () {
      const passwordInput = document.querySelector('.edit-pass');
      const eyeIcon = document.getElementById('eyeIcon');
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
      } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
      }
    });
    document.addEventListener("DOMContentLoaded", function () {
      // Select the delete button
      document.querySelectorAll(".a-dlt-btn-t").forEach(button => {
        button.addEventListener("click", function () {
          // Show the Bootstrap modal
          var deleteModal = new bootstrap.Modal(document.getElementById("deleteModal"));
          deleteModal.show();
        });
      });
    });

  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelectorAll(".a-dlt-btn-t").forEach(button => {
        button.addEventListener("click", function () {
          let userId = this.getAttribute("data-user-id");
          document.getElementById("deleteUserId").value = userId;
        });
      });
    });
  </script>
  <script type="text/javascript">
    $(document).on('input', '.make_featured', function () {
      var prop_id = $(this).closest('.findprop').find('.findid').val();
      if ($(this).is(":checked")) {
        var val = '1';
      }
      else {
        var val = '0';
      }
      var csrfToken = $('meta[name="csrf-token"]').attr('content');

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': csrfToken
        }
      });
      $.ajax({
        method: 'POST',
        url: "{{ url('admin/make_agent_verified') }}",
        data: { val: val, prop_id: prop_id },
        success: function (data) {

        }
      });
    });
  </script>
  <script>
    $(document).ready(function () {
      $('#show-password').hide();
    });
    $(function () {
      $('[data-toggle="popover"]').popover()
    })

    $(document).on('click', '.edits', function () {

      var idvalue = $(this).closest('.datas').find('.prodid').val();
      var namevalue = $(this).closest('.datas').find('.prodname').val();
      var emailvalue = $(this).closest('.datas').find('.prodemail').val();
      var phonevalue = $(this).closest('.datas').find('.prodphone').val();
      var addressvalue = $(this).closest('.datas').find('.prodaddress').val();

      $("#editproductid").val(idvalue);
      $("#editagentname").val(namevalue);
      $("#editagentemail").val(emailvalue);
      $("#editagentphone").val(phonevalue);
      $("#editagentaddress").val(addressvalue);

    });

    $('#btn-password').click(function () {

      $('#show-password').show();

    });
  </script>
  <script>
    function togglePassword() {
      var passwordInput = document.getElementById("password");
      var icon = document.querySelector(".toggle-password");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon if needed
      } else {
        passwordInput.type = "password";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon back to original
      }
    }
    function togglePasswordtwo() {
      var passwordInput = document.getElementById("password-confirm");
      var icon = document.querySelector(".toggle-passwordtwo");

      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon if needed
      } else {
        passwordInput.type = "password";
        // icon.textContent = `<i class="fas fa-eye"></i></span>️</i`; // Change icon back to original
      }
    }
    function myFunction() {
      var passwordInput = document.getElementById("password_c").value;
      var passwordInputc = document.getElementById("password_cc").value;
      //   alert(passwordInputc)
      if (passwordInput === passwordInputc) {
        // alert("match")

      } else {
        alert("Password Mismatch");
        return false;
      }
    }
  </script>
@endsection