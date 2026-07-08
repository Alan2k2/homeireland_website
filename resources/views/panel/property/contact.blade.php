
<?php
// echo"<pre>";print_r($user);exit;
?>
@extends('layouts.panel.main')
@section('content')    
<style>
    table
    {
        font-size:15px;
       margin-top:50px;
    }
    table tr,td
    {
        padding:10px;
    }
    .next{
                                    background-color: red;
                                    color: #fff;
                                    widows: 300px;
                                    border: red;
                                    font-size:15px;

                                }
                                .next:hover{
                                    background-color: black;
                                    color: #fff;font-size:15px;

                                }
        /*the below is the css for animating the checkout page*/
                                
                /* .animated-button {*/
                /*        position: relative;*/
                /*        transition: transform 1s ease-in-out;*/
                        /*transform: translateX(0); */
                /*        }*/

                
                        /*transform: translateX(100px); */
                /*    }*/
                
                .btn-container{
                    display:flex;
                    align-items:center;
                    justify-content:center;
                }
                #checkout{
                    width:30%;
                }
                
                @media(min-width:1200px){
                    .billing{
                        margin-top:10px;
                    }
                }
                
 @media (max-width: 767.98px) {
    #checkout {
      width: 55%; /* Adjust width for small devices */
    }
    #checkout b {
      margin-left: auto;
    }
    .billing{
        font-size:20px;
    }
  }

  @media (min-width: 768px) and (max-width: 991.98px) {
    #checkout {
      width: 60%; /* Adjust width for medium devices */
    }
    #checkout b {
      margin-left: auto;
    }
  }
</style>
<?php
$amount=Session::get('amount');
$vat=Session::get('vat');
?>
<main class="container">
    <div class="row">
         <center>
            <h1 class="billing" style="color:red">BILLING ADDRESS</h1>
        </center>
    </div>
         <br><br>
    <div class="row">
       
            <table width="100%" border="1">
                <tr >
                   <td align="right" width="20%">Name</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="text" value="{{isset($user)?$user->name:''}}" class="form-control"></td>
                     <td align="right" width="8%"></td>
                </tr>
                 <tr>
                    <td align="right" width="20%">Email</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="email" value="{{isset($user)?$user->email:''}}" class="form-control"></td>
                     <td align="right" width="3%"></td>
                </tr>
                 <tr>
                   <td align="right" width="20%">Phone</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="number" value="{{isset($user)?$user->phone:''}}"  class="form-control"></td>
                     <td align="right" width="3%"></td>
                </tr>
                 <tr>
                    <td align="right" width="20%">Address</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="text" value="{{isset($user)?$user->address:''}}" class="form-control"></td>
                     <td align="right" width="3%"></td>
                </tr>
                 <tr>
                    <td align="right" width="20%">Amount €</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="text" value="<?=$amount?>" class="form-control" readonly></td>
                     <td align="right" width="3%"></td>
                </tr>
                <tr>
                    <td align="right" width="20%">Vat %</td>
                    <td align="center" width="2%">-</td>
                    <td width="20%"  align="left"><input type="text" value="<?=$vat?>%" class="form-control" readonly></td>
                     <td align="right" width="3%"></td>
                </tr>
            </table>
        <!--next button-->
                           <section>
                    <div class="row">
                            
        <!---->
                                   <!--<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12  mt-4">-->
                                   <!--</div>-->
                                   <!--col-lg-3 col-md-3 col-sm-12 col-xs-12 removed the class and added btn-container instead-->
                                   <div class="btn-container  mt-4">
<!--                                   
<button type="submit" id="checkout" data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->
<!--    class="btn btn-large btn-block yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover" -->
<!--    style="display: flex; justify-content: center; align-items: center;">-->
<!--    <b>Proceed to checkout-->
<!--        &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true"></i>-->
<!--    </b> -->
<!--</button>-->

            <!--<button type="submit" id="checkout" data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->
            <!--    class="btn btn-large btn-block yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover  "-->
            <!--    style="display: flex; justify-content: center; align-items: center;">-->
            <!--         <b>Proceed to checkout-->
            <!--     &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true"></i>-->
            <!--        </b>-->
            <!--</button>-->
            
            <button type="submit" id="checkout" data-bs-toggle="modal" data-bs-target="#staticBackdrop" 
        class="btn btn-large btn-block yellow-btn next font-roboto light brbottom-30 icon-link icon-link-hover"
        style="display: flex; justify-content: center; align-items: center;">
    <b>Proceed to checkout
        &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true"></i>
    </b>
</button>



                                   </div>
                                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12  mt-4">
                    <!--                 <button type="submit"  class="btn btn-large btn-block yellow-btn save font-roboto -->
                    <!--        light brbottom-30 icon-link icon-link-hover" style="margin-left">-->
                    <!--        <b>NEXT-->
                    <!--&nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right mt-2" aria-hidden="true" style="float: right"></i></b> </button>-->
                                 </div>
                                 
                            </div>
                           </section>
                           <!--next button end-->
    </div>
</main>
<section>
     <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#d3111a;">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Your Payment</h1><br><br>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class=""><br><br>
          <center>
            <h4><b>Amount : <span><?=$amount?></span><span>&nbsp;€</span></b> </h4>
            <h4><b>Vat : <span><?=$vat?></span><span>&nbsp;%</span></b> </h4>
            <?php
                $vat_calc = ($amount * ($vat / 100));
                $total_amount = $amount + $vat_calc;
            ?>
            <h4><b>Total Amount : <span><?=$total_amount?></span><span>&nbsp;€</span></b> </h4>
            </center>
          </div><br><br>
          <div id="checkout-form"></div>
         <div id="paypal-button-container" class="mt-6"></div>
        </div>
<div id="checkout-form">
  <!-- PayPal Button Will Render Here -->
</div>
      </div>
    </div>
  </div>
</section>
<script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&currency=EUR"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
    paypal.Buttons({
        createOrder: function (data, actions) {
            return fetch("{{ route('paypal.create') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    amount: "{{ $total_amount ?? 15.00 }}"
                })
            })
            .then(res => res.json())
            .then(data => data.id);
        },

        onApprove: function (data, actions) {
            return fetch("{{ route('paypal.capture') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    paymentId: data.orderID
                })
            })
            .then(res => res.json())
            .then(details => {
                if (details.success) {
                    alert("✅ Payment completed successfully!");
                    window.location.href = "/success-payment";
                } else {
                    alert("⚠️ Payment not successful.");
                }
            })
            .catch(err => {
                console.error(err);
                alert("⚠️ Something went wrong during payment.");
            });
        },

        onError: function (err) {
            console.error("PayPal error:", err);
            alert("⚠️ Something went wrong during payment.");
        }
    }).render('#paypal-button-container');
});
</script>

@endsection
