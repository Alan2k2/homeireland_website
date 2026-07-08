@extends('layouts.admin.main')
@section('content')
  
<style>

 a {
        text-decoration: none;
    }

form
{
    font-size:15px;
    font-weight:500px;
}
 input.larger {
        width: 20px;
        height: 20px;
      }

   .main-heading{
/* font-weight: 800; */
/* font-size: 15px; */
/* color:red; */
   }
                                /* j1 */
                                .next{
                                    background-color: red;
                                    color: #fff;
                                    widows: 300px;
                                    border: red;

                                }
                                .next:hover{
                                    background-color: black;
                                    color: #fff;

                                }
                                 /* j1 */
                                 .save{
                                    background-color: green;
                                    color: #fff;
                                    widows: 300px;

                                }
                                .save:hover{
                                    background-color: black;
                                    color: #fff;

                                }
                               

    .switch-container {
      display: inline-block;
      position: relative;
    }

    /* Styling for the switch input */
    .switch-input {
      display: none; /* Hide the actual checkbox input */
    }

    /* Styling for the switch track */
    .switch-track {
      width: 50px;
      height: 25px;
      background-color: #ccc;
      border-radius: 25px;
      position: relative;
      cursor: pointer;
      display: inline-block;
    }

    /* Styling for the switch thumb (the moving part) */
    .switch-thumb {
      width: 25px;
      height: 25px;
      background-color: #fff;
      border-radius: 50%;
      position: absolute;
      top: 0;
      left: 0;
      transition: transform 0.3s ease-in-out;
    }

    /* Styling for the switch when it's checked */
    .switch-input:checked + .switch-track .switch-thumb {
      transform: translateX(100%);
    }
      .switch-input:checked + .switch-track {
      background-color: #3498db; /* Change the background color to blue */
    }
    input[type='radio'] {
    transform: scale(2);
   
}
label{
    padding:20px;
}
aside
{
    border:1px solid rgb(221, 221, 221);;
    padding-left:15px;
    border-radius: 4px;
   
 
}
</style>
<?php
$vselect=isset($_GET['vehicle'])?$_GET['vehicle']:"";
$tselect=isset($_GET['main_name'])?$_GET['main_name']:"";
$cselect=isset($_GET['county'])?$_GET['county']:"";
$pselect=isset($_GET['user_type'])?$_GET['user_type']:"";

$bselect=isset($_GET['brand'])?$_GET['brand']:"";
$mselect=isset($_GET['modal'])?$_GET['modal']:"";
$coselect=isset($_GET['color'])?$_GET['color']:"";
$fselect=isset($_GET['fuel'])?$_GET['fuel']:"";

$trselect=isset($_GET['transmission'])?$_GET['transmission']:"";
$drselect=isset($_GET['doors'])?$_GET['doors']:"";
$boselect=isset($_GET['body_type'])?$_GET['body_type']:"";

?>
<div class="postWrapper clearfix">
           <div class="row">
    <div class="col-md-12">

        <div class="main-card card">
            <div class="card-header">Edit Automobiles
            </div>
			<div class="spaceman">
			    <section id="location">
<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
    <main>
        
    <h3>Automobiles/Details</h3>

    <form method="get" action="{{url('admin/automobile_details')}}" >
                         <input type="hidden" value="3" name="a" id="no">
                          <input type="hidden" value="7" name="b" id="no">
                        <input type="hidden" value="3" name="no" id="no">
 <!--=========================MAIN STARTS======================================-->
                      <main style="margin-top:4%">
                          <!------row1------>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Name</label>
                                      <select name="name" class="form-control" id="name">
                                            <option value="">--ANY--</option>
                                            <?php foreach ($filter_arr[2] as $type) {
                                            
                                            ?>
                                            <option value="<?= $type->brand_name ?>"><?= $type->brand_name ?></option>
                                            <?php } ?>
                                    </select>

                                     <!-- <input class="form-control valid " type="text" value="{{isset($data)?$data->aname:''}}"name="name" data-gtm-form-interact-field-id="0" placeholder="name"aria-invalid="false" required> -->
                                    </section>
                
                                
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Type</label>
                                      <?php $tselect=$hselect="";
                                      if($data->type==2){
                                      $tselect="selected";
                                      }
                                       if($data->type==3){
                                      $hselect="selected";
                                      }
                                      ?>
                                    <select  name="type" class="form-control">
                                        <option value="1">New</option>
                                        <option value="2"<?=$tselect?>>Used</option>
                                        <option value="3"<?=$hselect?>>Hire</option>
                                    </select>
                                  </section>
                              </div>
                          </div>
                          <!-------row2------>
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div ">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Version</label>
                                     <!-- <input class="form-control valid " type="text" value="{{isset($data)?$data->version:''}}" required data-gmap-addr-donator="0" id="street" 
                                     name="version" data-gtm-form-interact-field-id="0" placeholder="version"aria-invalid="false"> -->
                                     <select class="form-control valid" name="version" id="street">
                                 <option value="" name="version" >--Select--</option>
                                
                            </select>
                
                                
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                       <label style="padding-bottom:5px;padding-left:1px;">Year</label>
                                    <input class="form-control valid  " type="text" value="{{isset($data)?$data->year:''}}" required data-gmap-addr-donator="0" id="street" 
                                     name="year" data-gtm-form-interact-field-id="0" placeholder="year"aria-invalid="false">
                                  </section>
                              </div>
                          </div>
                          <!--row 2-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Body Type</label>
                                      <select class="form-control valid" name="body_type" id="town">
                                 <option value="" name="body_type" >--Select--</option>
                                <?php 
                                foreach($filter_arr[5] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->body_name?>" name="body_type"><?=$type->body_name?></option>
                                    <?php
                                }

                                ?>
                            </select>
                                       <!-- <input class="form-control valid " type="text" value="{{isset($data)?$data->body_type:''}}" required data-gmap-addr-donator="0" id="town" placeholder="body type"name="body_type" data-gtm-form-interact-field-id="0" aria-invalid="false"> -->
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Fuel type</label>
                                      <select class="form-control valid" id="street" name="fuel_type">
                                 <option value="" name="fuel_type">--Select--</option>
                                <?php 
                                foreach($filter_arr[3] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->fuel_name?>" name="fuel_type"><?=$type->fuel_name?></option>
                                    <?php
                                }

                                ?>
                            </select>
                                     <!-- <input class="form-control valid " type="text" value="{{isset($data)?$data->fuel_type:''}}" required data-gmap-addr-donator="0" id="street" name="fuel_type"placeholder="fuel type" data-gtm-form-interact-field-id="0" aria-invalid="false"> -->
                                  </section>
                              </div>
                          </div>
                          <!--row 4-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <!--added label tag for color-->
                                      <label style="padding-bottom:5px;padding-left:1px;">Color&nbsp;&nbsp;&nbsp;</label>
                                      <select class="form-control valid" id="transmission" name="color">
                                 <option value="" name="color">--Select--</option>
                                <?php 
                                
                                foreach($filter_arr[4] as $type)
                                {
                                    ?>
                                    <option value="<?=$type->color_name?>" name="color"><?=$type->color_name?></option>
                                    
                                    <?php
                                }

                                ?>
                            </select>
                                     <!-- <input class="form-control valid" type="text" value="{{isset($data)?$data->color:''}}" required data-gmap-addr-donator="0" id="transmission" name="color"placeholder="Color" data-gtm-form-interact-field-id="0" aria-invalid="false"> -->
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                     <label style="padding-bottom:5px;padding-left:1px;">Doors</label>
          <input class="form-control valid" type="text" value="{{isset($data)?$data->doors:''}}" required data-gmap-addr-donator="0" id="transmission" name="doors"placeholder="Doors" data-gtm-form-interact-field-id="0" size="16"aria-invalid="false">
                                  </section>
                              </div>
                            </div>  
                             <!--row 3-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Owners&nbsp;&nbsp;&nbsp;</label>
                                     <input class="form-control valid" type="text" value="{{isset($data)?$data->owners:''}}" required data-gmap-addr-donator="0" id="owners" name="owners"placeholder="Owners" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                     <label style="padding-bottom:5px;padding-left:1px;">Milage</label>
          <input class="form-control valid" type="text" value="{{isset($data)?$data->milage:''}}" required data-gmap-addr-donator="0" id="milage" name="milage"placeholder="Milage" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                            </div> 
                             <!--row 5-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Tax Expiry&nbsp;&nbsp;&nbsp; </label>
                                     <input class="form-control valid" type="date" value="{{isset($data)?$data->tax_exp:''}}" required data-gmap-addr-donator="0" id="tax_exp" name="tax_exp"placeholder=" Tax Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">NCT Expiry</label>
          <input class="form-control valid" type="date" value="{{isset($data)?$data->nct_exp:''}}" required data-gmap-addr-donator="0" id="nct_exp" name="nct_exp"placeholder="NCT Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                            </div> 
                             <!--row 6-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                     <label  style="padding-bottom:5px;padding-left:1px;">Transmission&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                                     <input class="form-control valid" type="text" value="{{isset($data)?$data->eir_code:''}}" required data-gmap-addr-donator="0" id="transmission" name="transmission"placeholder="Transmission" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                     <label  style="padding-bottom:5px;padding-left:1px;">Engine size</label> 
          <input class="form-control valid" type="text" value="{{isset($data)?$data->engine_size:''}}" required data-gmap-addr-donator="0" id="transmission" name="engine_size"placeholder="Engine size" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                            </div> 
                            <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column">
                                      <label style="padding-bottom:5px;padding-left:1px;">Price/Rent&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                     <input class="form-control valid" type="text" value="{{isset($data)?$data->price:''}}" required data-gmap-addr-donator="0" id="owners" name="price"placeholder="Price" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                              
                             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
    <section class="d-flex flex-wrap">
        <?php
        $a = $b = $c = $d = "";
        if($data->duration == "Daily") { $a = "checked"; }
        if($data->duration == "Monthly") { $b = "checked"; }
        if($data->duration == "Weekly") { $c = "checked"; }
        if($data->duration == "Yearly") { $d = "checked"; }
        ?>
        <div class="col-6 d-flex align-items-center ">
            <label class="me-2" style="padding-right:35px;">Daily</label>
            <input type="radio" value="Daily" required name="duration" <?=$a?>>
        </div>
        <div class="col-6 d-flex align-items-center">
            <label class="me-2">Monthly</label>
            <input type="radio" value="Monthly" required name="duration" <?=$b?>>
        </div>
        <div class="col-6 d-flex align-items-center mb-2">
            <label class="me-2">Weekly</label>
            <input type="radio" value="Weekly" required name="duration" <?=$c?>>
        </div>
        <div class="col-6 d-flex align-items-center mb-2">
            <label class="me-2" style="padding-right:35px;">Yearly</label>
            <input type="radio" value="Yearly" required name="duration" <?=$d?>>
        </div>
    </section>
</div>

                              
                            </div> 
                              <!--next button-->
                            <section>
                     <div class="row mt-4">
                             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                 <a href="{{url('admin/edit-automobiles/')}}/{{$data->id}}?no=2&&a=3&&b=7" class="btn btn-large btn-block yellow-btn next font-roboto 
                                 light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" 
                                     aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>
                             </div>
         
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                    </div>
                                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                                      <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto 
                             light brbottom-30 icon-link icon-link-hover" style="margin-left">
                             <b>NEXT
                     &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
                                  </div>
                                  
                             </div>
                            </section>
                            <!--next button end-->
                          </div>
     </section><br>               
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
</div>
<script>
    const selectedValue = "{{ $data->name }}";
    document.querySelector('#name').value = selectedValue;
</script>
<script>
    $(document).ready(function(){
        let id = $(this).val();
        $(#street).empty().append(<option value="">--Select</option>)
        if(id){
            $.ajax({
                url: '/models'
            })
        }
    })
@endsection