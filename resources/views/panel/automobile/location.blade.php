@extends('layouts.panel.automobile.main')
@section('content')
<style>
label{
    padding:20px;
}
aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
 
}
.form-control{
    margin-top:15px;
}

.input-Div{
        margin-top:15px;
    }
    
    /*added media query for the form */

@media (max-width: 600px) {
    .form-control {
        width: 100%;
        margin-top:5px;
    }

    section {
        flex-direction: column;
    }
    input{
        margin-top:5px;
    }

    label {
        margin-bottom: 0.5rem;
        padding-bottom:5px;
        padding-left:0px;
    }
    .input-Div{
        margin-top:5px;
    }
    
    .location-section {
        flex-direction: row !important;
        align-items: center;
    }

    .location-section input {
        margin-right: 0.5rem;
    }

    .location-section span {
        flex-grow: 1;
    }
}
/*style for the next button*/
.custom-button {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    padding-right: 20px; /* Adjust padding as needed */
    
}

/*added media query for next button for small and medium devices*/
@media (max-width: 1200px) and (min-width: 768px) {
    .custom-button {
        width: 90%; /* Adjust width for medium devices */
        float: right; /* Align to the right */
    }
}

@media (min-width: 400px)and (max-width: 768px) {
    .custom-button {
        width: 45%; /* Adjust width for small devices */
        float: right; /* Align to the right */
    }
  
}

@media (max-width: 400px) {
    .custom-button {
        width: 40%; /* Adjust width for very small devices */
        float: right; /* Align to the right */
    }
}
</style>
<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
    <main>
    <h1 style="color:red">Automobiles/Location</h1>
    
    <form method="get" action="{{url('Auto_store')}}" id="uploadForm" enctype="multipart/form-data">
                         
                         <input type="hidden" value="2" name="no" id="no">
 <!--=========================MAIN STARTS======================================-->
                      <main style="margin-top:4%">
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                  <section >
                                      <span>County&nbsp;<span style="color:red">*</span></span>
              
                      <select class="form-control searchbar filter-search-county county-ulster mt-4 " name="county" data-gmap-addr-donator="5" id="counties" required>
                          <?php foreach($county as $c) 
                                                 { 
                                                     $county_select="";
                                                     if(!empty($data))
                                                     {
                                                       if($c->name==$data->county)
                                                       {
                                                           $county_select="selected";
                                                       }
                                                       else
                                                       {
                                                           $county_select="";
                                                       }
                                                     }
                                                 ?>
                                                 <option value="<?=$c->name?>" <?=$county_select?>><?=$c->name?></option>
                                                <?php
                                                } 
                          ?>
                       </select>
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section>
                                      <span>City <span style="color:red">*</span></span></span>
                                     <input class="form-control valid " type="text" value="{{!empty($data)?$data->city:''}}" required data-gmap-addr-donator="0" id="street" 
                                     name="city" data-gtm-form-interact-field-id="0" placeholder="City"aria-invalid="false">
                                  </section>
                              </div>
                          </div>
                          <!--row 2-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section>
                                      <span>Town</span>&nbsp;&nbsp;
                                       <input class="form-control valid " type="text" value="{{!empty($data)?$data->town:''}}"  data-gmap-addr-donator="0" id="town" placeholder="Town"name="town" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section>
                                      <span>Street</span>
                                     <input class="form-control valid " type="text" value="{{!empty($data)?$data->street:''}}"  data-gmap-addr-donator="0" id="street" name="street"placeholder="Street" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                          </div>
                          <!--row 3-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12   input-Div">
                                  <section>
                                      <span>EIR Code</span>&nbsp;&nbsp;&nbsp;
                                     <input class="form-control valid" type="text" value="{{!empty($data)?$data->eir_code:''}}"  data-gmap-addr-donator="0" id="eir_code" name="eir_code"placeholder="EIR Code" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                  <section class="location-section"  style="display:flex">
               <?php                      
            $disp_check="";
            ?>
          @if(!empty($data))
                 @php
                    $disp=$data->location_disp_flag;
                 @endphp
         
              @if($disp==1)
                   @php
                    $disp_check="checked";
                   @endphp
              @endif      
            @endif
            
        <!-- <input type="checkbox" name="location_show" value="1" <?=$disp_check?>> -->
        <input type="checkbox" name="location_show" value="1" <?= $disp_check ? 'checked' : '' ?>>&nbsp;
        <span style="font-size:12px">I don't want to display the exact address</span> 
                                  </section>
                              </div>
                            </div>  
                           
                           
                            <section>
                     <div class="row mt-4">
                             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                 <!--<a href="{{url('basic')}}?id=2" class="btn btn-large btn-block yellow-btn next font-roboto -->
                                 <!--light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" -->
                                 <!--    aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>-->
                             </div>
         
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                    </div>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                      <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto 
                             light brbottom-30 icon-link icon-link-hover custom-button" style="margin-left">
                             <b>NEXT
                     &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                                  </div>
                                  
                             </div>
                            </section>
                            
                            
                            <!--next button end-->
                          </div>
                      </main>
 <!--=========================MAIN ENDS======================================-->                                       
                     </div>
                     <script type="text/html" id="tmpl-price">
                         <label class="text-uppercase brbottom-20 el-required" for="totalPrice">Price - <%= record.label %>
                         </label><br>
                         <div class="form-group field-wrap">
                             <select class="form-control border-radius-3 field-total-price" id="totalPrice" name="totalPrice">
                                 <option value="">-- Select --</option>
                                 <% _.each(record.items, function(label, key) { %>
                                     <option value="<%= key %>"><%= label %></option>
                                 <% }) %>
                             </select>
                         </div>
                     </script>
                 </div>
             </div>
             <!--price div starts event============= 8-->
             <!--price div end event================= 8-->
         </section>
 
    </main>
</div>
  @endsection