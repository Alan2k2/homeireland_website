@extends('layouts.admin.main')
@section('content')

<style>
    .btn-shift{
        background-color: red;
        color: #fff;
        widows: 300px;
        border: red;
    }
    .btn-shift:hover{
        background-color: black;
        color: #fff;
    }

    h4{
        font-size:15px;
        font-weight:500;
        color:black;
    }

    .search-btn{
        width:200px;
        padding:10px;
        background-color:#dc3545;
        border:1px solid #dc3545;
        color:white;
        margin-top:-10px
    }
    .search-btn:hover{
        background-color:black;
        border:1px solid #dc3545;
        color:white;
        cursor:pointer;
        margin-top:-10px
    }

    .spaceman{
        margin: 15px;
    }
    .spaceman .row .col-md-6,
    .spaceman .row .col-md-12{
        margin-top:10px;
    }
    .spaceman label{
        font-weight: 600;
    }
    .spaceman .block-heading{
        margin-top: 20px;
        margin-bottom: 10px;
        font-weight: 600;
        font-size: 22px;
        border-bottom: 1px solid black;
        padding-bottom:10px ;
    }

    section{
        border:1px solid grey;
        padding:20px;
    }
    aside{
        border:1px solid rgb(221, 221, 221);
        padding-left:15px;
        border-radius: 4px;
    }
    
    .checkbox-container {
      display: inline-block;
      cursor: pointer;
      padding: 10px 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: black;
    }
    
    /* Hide real checkbox */
    .checkbox-container input[type=checkbox] {
      display: none;
    }
    
    /* Custom button style */
    .checkbox-button {
      display: inline-block;
      background-color: red;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      width: 160px;
    }
    
    /* When checked */
    .checkbox-container input[type=checkbox]:checked + .checkbox-button {
      background-color: black;
    }

    
</style>

<div class="spacer"></div>

<div class="row">
    <div class="col-md-12">
        <div class="main-card card">
            <div class="card-header">Edit Properties</div>

            <div class="spaceman">

                <!--============= MAIN SECTION =============-->
                <section id="basic">

                    <form method="get" 
                          action="{{ url('admin/property_description') }}" 
                          id="uploadForm" 
                          enctype="multipart/form-data">

                        <input type="hidden" 
                               value="{{ isset($data) ? $data->id : '' }}" 
                               name="property_id" 
                               id="property_id">

                        <!--================ MAIN STARTS =================-->
                        <main style="border: 0px solid #ddd;padding:10px">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="text-danger">
                                        {{ $property->main_name }} / Property Details
                                    </h3>
                                </div>
                            </div>

                            <div class="row">
                                @if(Session::get('main_cat') == 16)
                                <div class="col-lg-12 mt-4">
                                    <h4>Furnishing</h4>

                                    @php
                                        $fc = $uf = $ev = "";
                                        if($property->furnishing=="Furnished") $fc="selected";
                                        if($property->furnishing=="Un Furnished") $uf="selected";
                                        if($property->furnishing=="Either Available") $ev="selected";
                                    @endphp

                                    <select class="form-control" 
                                            id="property_select" 
                                            name="Furnishing" 
                                            onchange="myFunction()" 
                                            required>

                                        <option value="">--- Select Furnishing Type ---</option>
                                        <option value="Furnished" {{ $fc }}>Furnished</option>
                                        <option value="Un Furnished" {{ $uf }}>Un Furnished</option>
                                        <option value="Either Available" {{ $ev }}>Either Available</option>

                                    </select>
                                </div>
                                @endif
                            </div>

                            <br><br>

                            <!--================== AMENITIES SECTION ==================-->
                            <div class="row">
                                <div class="col-md-12">
                                    <h4>Amenities & Facilities</h4>

                                    <div class="row">

                                        @php
                                            $selectedFacilities = isset($selectedFacilities) ? $selectedFacilities : [];
                                        @endphp

                                        @foreach($facilities as $facility)
                                            @php 
                                                $checked = in_array($facility->id, $selectedFacilities) ? "checked" : "";
                                            @endphp

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                            <label class="checkbox-container">
                                                <input type="checkbox"
                                                       name="fa[]"
                                                       value="{{ $facility->id }}"
                                                       id="fa_{{ $facility->id }}"
                                                       {{ $checked }}>
                                                <span class="checkbox-button">{{ $facility->name }}</span>
                                            </label>
                                        </div>

                                        @endforeach

                                    </div>
                                </div>
                            </div>

                            <br>

<section>
    <div class="d-flex justify-content-between mt-4">

        <!-- LEFT BUTTON -->
        <a href="{{ url('admin/properties_details') }}?a=2&b=4"
           class="btn w-25 text-center btn-shift">
            <i class="fa fa-arrow-left"></i> PREV
        </a>

        <!-- RIGHT BUTTON -->
        <button type="submit"
                class="btn w-25 text-center btn-shift">
            NEXT <i class="fa fa-arrow-right"></i>
        </button>

    </div>
</section>


                        </main>
                        <!--============== MAIN END ==============-->

                    </form>

                </section>
                <!--====== SECTION END ======-->

            </div>

        </div>
    </div>
</div>

@endsection
