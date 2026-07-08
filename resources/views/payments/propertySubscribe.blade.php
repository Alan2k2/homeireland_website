@extends('layouts.panel.main')
@section('content')
@php
foreach ($PropertySubscription as $Subscription) {
  $futured_price[]= $Subscription->Price; // Assuming 'name' is a column in the 'users' table
}
// print_r($futured_price);exit;
@endphp
<section class="flex container mb-5" >
   <div class="container-fluid" style="margin:auto;justify-content:center;align-items:center;">
    <div class="row">
        <div class="card">
            <div class="card-body">
             <CENTER><h1 style="color:red;font-weight:900">SUBSCRIBE</h1><CENTER>
            </div>
          </div>
    </div><br><br>
       <div class="row">
        {{-- 1st --}}
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
           <div class="card">
             <div class="card-body">
                 <h1>FUTURED</h1>
                    HERE WE WILL WRITE FUTURED ADVANATAGES
                   <img src="{{asset('uploads/paymentlogo/f.svg')}}" alt="logo" height="90px" width="100px">
          
                    <h3>Total Price : <span><?=$futured_price[0]?></span><span>€</span></h3>
            
                     <button type="button" class="btn btn-danger btn-lg btn-block" style="background-color:#d3111a;" 
                              data-bs-toggle="modal" data-bs-target="#staticBackdrop">  CHECK OUT NOW </button>
          
              </div>
          </div>
       </div>
    {{-- 2 --}}
    <!--<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">-->
    <!--    <div class="card">-->
    <!--      <div class="card-body">-->
    <!--          <h1>Agent</h1>-->
    <!--             HERE WE WILL WRITE FUTURED ADVANATAGES-->
    <!--            <img src="{{url('uploads/paymentlogo/p.svg')}}" alt="logo" height="100px" width="120px">-->
       
    <!--             <h3>Total Price : <span><?=$futured_price[1]?></span><span>€</span></h3>-->
         
    <!--              <button type="button" class="btn btn-danger btn-lg btn-block" style="background-color:#d3111a;" -->
    <!--                       data-bs-toggle="modal" data-bs-target="#staticBackdrop2">  CHECK OUT NOW </button>-->
       
    <!--       </div>-->
    <!--   </div>-->
    <!--</div>-->
{{-- 2 end --}}
      </div>
       
   </div>
   

<!-- Modal -->
<div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#d3111a;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Your Payment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="">
            <h4>Order Amount : <span><?=$futured_price[0]?></span><span>€</span></h4>
          </div>
         
        <form   action="{{ route('payments') }}" method="post">
            @csrf
            <input type="hidden" name="price" value="55">
            <input type="hidden" name="currency" value="EUR">
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color:#d3111a;">Proceed To Checkout</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
{{-- model 2 --}}
<div class="modal" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#d3111a;">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Your Payment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="">
            <h4>Order Amount2 : <span><?=$futured_price[1]?></span><span>€</span></h4>
          </div>
         
        <form   action="{{ route('payments') }}" method="post">
            @csrf
            <input type="hidden" name="price" value="55">
            <input type="hidden" name="currency" value="EUR">
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn text-light" style="background-color:#d3111a;">Proceed To Checkout</button>
            </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
{{-- model end --}}
</section>
<script>
 document.addEventListener('DOMContentLoaded', function() {
const orderToken = "<token>"

const { payWithPopup } = await RevolutCheckout(orderToken)

const payButton = document.getElementById("pay-button")

// On click open payment pop-up
payButton.addEventListener("click", function () {
  const popUp = payWithPopup({
    onSuccess() {
      // Do something to handle successful payments
      window.alert("Thank you!")
    },
    onError(error) {
      // Do something to handle successful payments
      window.alert(`Something went wrong. ${error}`)
    }
  })
})
});
</script>
@endsection