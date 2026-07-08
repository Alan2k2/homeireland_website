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
.radiolabel{
    padding-right:0px; !important
}

 .input-Div{
        margin-top:5px;
    }
    
    /*removed the mt-4 from the input to make it move a little up */
    
/* Custom styles for Bootstrap buttons */
.custom-btn {
    background-color: red;
    color: #fff;
    border: 1px solid red;
    /* Adjust width on large screens */
    width: 300px;
}

.custom-btn:hover {
    background-color: black;
    color: #fff;
}

.button-section {
    display: flex;
    /*justify-content: center;*/
    align-items: center;
    /*height: 100vh; */
}

.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 800px; 
    padding: 0 20px; 
    margin:10px 2px;
}

.button-container .btn {
    
    margin: 0 10px;
    text-align: center;
}

.left-align {
    justify-content: flex-start;
}

.right-align {
    justify-content: flex-end;
}

/* Media query for smaller devices */
@media (max-width: 768px) {
    .button-container {
        justify-content: space-between;
    }
    .button-container .btn {
        margin: 0 5px;
    }
    .custom-btn {
        width: 200px; 
    }
   
       .nav-txt{
        height:100px;
    }

}

/* Media query for large devices */
@media (min-width: 1200px) {
    .custom-btn {
        width: 200px; 
    }
}

.custom-input {
    width: 100%;
    border: 1px solid var(--bs-border-color);;
    padding: 0.375rem 0.75rem; 
    border-radius: 0.25rem; 
    box-sizing: border-box;
    height: 34px; 
    background-color: white; 
}

@media (max-width: 767px) {
    .custom-input {
        width: 100%;
    }
}



</style>
<div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 rhs-post brtop-30 brbottom-30">
    <main>
    <h1 style="color:red">Automobiles/Details</h1>
    
    <form method="get" action="{{url('Auto_store')}}" >
                         
                         <input type="hidden" value="3" name="no" id="no">
 <!--=========================MAIN STARTS======================================-->
                      <main style="margin-top:4%">
                          <!------row1------>
                           <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Choose vehicle</label>
                                     <select class="form-select form-select-lg" name="name" required>
                                <option selected value="">--Select--</option>
                                <?php foreach($filter_arr[0] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->auto_name?>" <?php if($data->aname==$type->auto_name){echo"selected";}?>><?=$type->auto_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                                    </section>
                
                                
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Make</label>
                                      
                                    <select  name="brand" class="form-control" id="mySelect" required>
                                       <option selected value="">--Select--</option>
                                <?php foreach($filter_arr[2] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->brand_name?>" <?php if($data->brand==$type->id){echo"selected";}?>><?=$type->brand_name?></option>
                                    
                                    <?php
                                }
                                ?>
                                    </select>
                                 
                              </div>
                          </div>
                          <!-------row2------>
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div ">
                                  <section style="display:flex;flex-direction:column;" required>
                                      <label style="padding-bottom:5px;padding-left:1px;">Model</label>
                                     <select class="form-select form-select-lg" name="version" id="brand_model" required>
                                 <option selected value="">--Select Make--</option>
                                
                            </select>
                                    
                
                                
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                       <label style="padding-bottom:5px;padding-left:1px;">Year</label>
                                    <input class="form-control valid " min="0"  oninput="this.value = Math.abs(this.value)" type="number" value="{{isset($data)?$data->year:''}}" required data-gmap-addr-donator="0" id="street" 
                                     name="year" data-gtm-form-interact-field-id="0" placeholder="year"aria-invalid="false">
                                  </section>
                              </div>
                          </div>
                          <!--row 2-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Body Type</label>
                                      <select class="form-select form-select-lg" name="body_type" required>
                                <option selected value="">--Select--</option>
                                <?php foreach($filter_arr[5] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->body_name?>" <?php if($data->body_type==$type->body_name){echo"selected";}?>><?=$type->body_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Fuel type</label>
                                     <select class="form-select form-select-lg"  name="fuel_type" required>
                                 <option selected value="">--Select--</option>
                                <?php foreach($filter_arr[3] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->fuel_name?>" <?php if($data->fuel_type==$type->fuel_name){echo"selected";}?>><?=$type->fuel_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                                  </section>
                              </div>
                          </div>
                          <!--row 4-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                      <!--added label tag for color-->
                                      <label style="padding-bottom:5px;padding-left:1px;">Colour&nbsp;&nbsp;&nbsp;</label>
                                     <select class="form-select form-select-lg"  name="color" required>
                                 <option selected value="">--Select--</option>
                                <?php foreach($filter_arr[4] as $type)
                                {
                                    
                                    ?>
                                    <option value="<?=$type->color_name?>" <?php if($data->color==$type->color_name){echo"selected";}?>><?=$type->color_name?></option>
                                    <?php
                                }
                                ?>
                            </select>
                                  </section>
                              </div>
                               <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                 <section style="display:flex;flex-direction:column;">
                                     <label style="padding-bottom:5px;padding-left:1px;">Doors</label>
          <select class="form-select form-select-lg" name="doors" required>
                                <option selected value="">--Select--</option>
                                <?php for($i=2;$i<=9;$i++)
                                {
                                    
                                    ?>
                                    <option value="<?=$i?>" <?php if($data->doors==$i){echo"selected";}?>><?=$i?></option>
                                    <?php
                                }
                                ?>
                            </select>
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
                             
          <!--                <div class="row">-->
          <!--                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">-->
          <!--                        <section style="display:flex;flex-direction:column;">-->
          <!--                            <label style="padding-bottom:5px;padding-left:1px;">Tax Expiry&nbsp;&nbsp;&nbsp; </label>-->
          <!--                           <input class=" valid " type="date" value="{{isset($data)?$data->tax_exp:''}}" required data-gmap-addr-donator="0" id="tax_exp" name="tax_exp"placeholder=" Tax Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">-->
          <!--                        </section>-->
          <!--                    </div>-->
                              
                            <!--  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">-->
                            <!--    <section>-->
                            <!--        <label>Tax Expiry&nbsp;&nbsp;&nbsp;</label>-->
                            <!--        <input class="form-control " type="date" value="{{ isset($data) ? $data->tax_exp : '' }}"  name="tax_exp" >-->
                            <!--    </section>-->
                            <!--</div>-->

          <!--                     <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">-->
          <!--                        <section style="display:flex;flex-direction:column;">-->
          <!--                            <label style="padding-bottom:5px;padding-left:1px;">NCT Expiry</label>-->
          <!--<input class="form-control valid custom-input-height" type="date" value="{{isset($data)?$data->nct_exp:''}}" required data-gmap-addr-donator="0" id="nct_exp" name="nct_exp"placeholder="NCT Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">-->
          <!--                        </section>-->
          <!--                    </div>-->
          <!--                  </div>-->
          <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
        <section style="display:flex;flex-direction:column;">
            <label style="padding-bottom:5px;padding-left:1px;">Tax Expiry</label>
            <input class="custom-input" type="date" value="{{isset($data)?$data->tax_exp:''}}" required data-gmap-addr-donator="0" id="tax_exp" name="tax_exp" placeholder="Tax Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">
        </section>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
        <section style="display:flex;flex-direction:column;">
            <label style="padding-bottom:5px;padding-left:1px;">NCT Expiry</label>
            <input class="custom-input" type="date" value="{{isset($data)?$data->nct_exp:''}}" required data-gmap-addr-donator="0" id="nct_exp" name="nct_exp" placeholder="NCT Expiry" data-gtm-form-interact-field-id="0" aria-invalid="false">
        </section>
    </div>
</div>

                            
                            
                             <!--row 6-->
                          <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                     <label  style="padding-bottom:5px;padding-left:1px;">Transmission&nbsp;&nbsp;&nbsp;&nbsp;</label> 
                                     <select class="form-select form-select-lg" name="transmission" required>
                                         <?php
                                         $t1=$t2="";
                                         if(isset($data))
                                         {
                                             if($data->transmission==1)
                                             {
                                                 $t1="selected";
                                             }
                                             if($data->transmission==2)
                                             {
                                                 $t2="selected";
                                             }
                                         }
                                         
                                         ?>
                                <option selected value="">--Select--</option>
                                <option value="1"<?=$t1?>>Manual</option>
                                 <option value="2" <?=$t2?>>Automatic</option>
                            </select>
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
                                     <input class="form-control valid" type="number" min="0"  oninput="this.value = Math.abs(this.value)" value="{{isset($data)?$data->price:''}}" required data-gmap-addr-donator="0" id="owners" name="price"placeholder="Price" data-gtm-form-interact-field-id="0" aria-invalid="false">
                                  </section>
                              </div>
                               
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 input-Div">
                                  <section style="display:flex;flex-direction:column;">
                                      <label style="padding-bottom:5px;padding-left:1px;">Type</label>
                                      <?php $s1=$s2=$s3=$s4=$s5="";
                                      if(isset($data))
                                      {
                                      $search_key=$data->type;
              if($search_key==1)
              {
                  $s1="selected";
              }
              elseif($search_key==2)
              {
                  $s2="selected";
              }
              elseif($search_key==3)
              {
                  $s3="selected";
              }
              elseif($search_key==4)
              {
                  $s4="selected";
              }
              elseif($search_key==5)
              {
                  $s5="selected";
              }
                                      }
                                      ?>
                                    <select  name="type" class="form-control">
                                        <option value="1"<?=$s1?>>New</option>
                                        <option value="2"<?=$s2?>>Used</option>
                                        <option value="3"<?=$s3?>>Hire</option>
                                        <option value="4"<?=$s4?>>New - Needed</option>
                                        <option value="5"<?=$s5?>>Used - Needed</option>
                                    </select>
                                 
                              </div>
                              </div>
                              <div class="row">
                              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12  mt-4">
                                   <?php
                                      $a=$b=$c=$d="";
                                      if($data->duration=="Daily")
                                      {
                                        $a="checked";  
                                      }
                                      if($data->duration=="Monthly")
                                      {
                                         $b="checked";  
                                      }
                                      if($data->duration=="Weekly")
                                      {
                                        $c="checked";   
                                      }
                                      if($data->duration=="Yearly")
                                      {
                                        $d="checked";   
                                      }
                                      ?>
                                       <label style="margin-left:1px;padding-right:5px;margin-top:5px">none</label>
       &nbsp;&nbsp; <input  type="radio" value="" required  name="duration" checked>
                                  <label style="margin-left:1px;padding-right:5px;margin-top:5px;">Daily</label>
       &nbsp;&nbsp; <input  type="radio" value="Daily" required  name="duration" <?=$a?>>
        <label style="margin-left:1px;padding-right:5px;margin-top:5px; " >Monthly</label>
       &nbsp;&nbsp; <input type="radio" value="Monthly" required data-gmap-addr-donator="0" id="milage" name="duration"placeholder="duration" 
          data-gtm-form-interact-field-id="0" aria-invalid="false" <?=$b?>>
    <label style="margin-left:1px;padding-right:5px;margin-top:5px;" >Weekly</label>

          &nbsp;&nbsp;<input type="radio" value="Weekly" required data-gmap-addr-donator="0" id="milage" name="duration"placeholder="Milage" data-gtm-form-interact-field-id="0" aria-invalid="false"  <?=$c?>>
                                                <label style="margin-left:1px;padding-right:5px;margin-top:5px;" <?=$c?>>Yearly</label>

          &nbsp;&nbsp;<input  type="radio" value="Yearly" required data-gmap-addr-donator="0" id="milage" name="duration"placeholder="Milage" data-gtm-form-interact-field-id="0" aria-invalid="false" <?=$d?>>
                                  
                              </div>
                            </div> 
                            
                            
                            
                              <!--next button-->
                     <!--       <section>-->
                     <!--<div class="row mt-4">-->
                     <!--        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">-->
                     <!--            <a href="{{url('Auto_Location')}}?li=1&&edit_id={{$data->id}}" class="btn btn-large btn-block yellow-btn next font-roboto -->
                     <!--            light brbottom-30 icon-link icon-link-hover" ><b><i class="fa fa-arrow-left" -->
                     <!--                aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b></a>-->
                     <!--        </div>-->
         
                     <!--               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">-->
                     <!--               </div>-->
                     <!--               <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">-->
                     <!--               </div>-->
                     <!--             <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">-->
                     <!--                 <button type="submit"  class="btn btn-large btn-block yellow-btn next font-roboto -->
                     <!--        light brbottom-30 icon-link icon-link-hover" style="margin-left">-->
                     <!--        <b>NEXT-->
                     <!--&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>-->
                     <!--             </div>-->
                                  
                     <!--        </div>-->
                     <!--       </section>-->
                           <section class="button-section">
                        <div class="button-container">
                            <a href="{{url('Auto_Location')}}?li=1&&edit_id={{$data->id}}" class="btn btn-large custom-btn yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover left-align">
                                <b><i class="fa fa-arrow-left" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;PREV</b>
                            </a>
               
                 <button type="submit"  class="btn btn-large custom-btn btn-block yellow-btn next font-roboto 
                             light brbottom-30 icon-link icon-link-hover right-align" style="margin-left">
                             <b>NEXT
                     &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
     $('#mySelect').on('change', function() {
            // Your logic here
            var brand_name = $(this).val();
            // alert(type_id);
             var csrfToken = $('meta[name="csrf-token"]').attr('content');
           $.ajaxSetup({
            headers: {
           'X-CSRF-TOKEN': csrfToken
    }
});
               $.ajax({
        method:'POST',        
        url:"{{ url('/get_brand_model') }}",
        data:{brand_name:brand_name},
        success:function(data){
// alert(data)
$('#brand_model').html(data);
        }
     });
        });
</script>
  @endsection