@extends('layouts.panel.main')
@section('content')
<!--<section class="green-strip-wrapper mb-4">-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 page-title">-->
<!--            <h1 class="font-nunito regular">My Property Listings</h1>-->
<!--        </div>-->
<!--        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 page-breadcumb hidden-sm hidden-xs">-->
<!--            <ul class="font-roboto regular">-->
<!--                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>-->
<!--                <li class="breadcrumb-item active">Dashboard</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--</section>-->
<section class="flex container mb-5">
  <div class="container-fluid" style="margin:auto;justify-content:center;align-items:center;">
    <h1>Subscribe Now</h1>
    <img src="{{asset('uploads/ads/'.$ad->image)}}" alt="" class="" style="width:500px;height:200px;">
  </div>
  <div class="">
    <h3>Total Price : <span>{{$ad->price}}</span><span>€</span></h3>
    <button type="button" id="checkout" class="btn text-light" style="background-color:#d3111a;" data-bs-toggle="modal"
      data-bs-target="#staticBackdrop"> Check Out </button>
  </div>

  <!-- Modal -->
  <div class="modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:#d3111a;">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Confirm Your Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="">
            <h4>Order Amount : <span>{{$ad->price}}</span><span>€</span></h4>
          </div>
          <div id="checkout-form"></div>
          <!-- <form action="{{ route('payments') }}" method="post" id="checkout-form">
            @csrf
            <input type="hidden" name="price" value="{{$ad->price}}">
            <input type="hidden" name="currency" value="USD">

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" id="Proceed" class="btn text-light" style="background-color:#d3111a;">Proceed To
                Checkout</button>
            </div>
          </form> -->
        </div>

      </div>
    </div>
  </div>
</section>
<script> !function (e, o, t) { var n = { sandbox: "https://sandbox-merchant.revolut.com/embed.js", prod: "https://merchant.revolut.com/embed.js" }, r = { sandbox: "https://sandbox-merchant.revolut.com/upsell/embed.js", prod: "https://merchant.revolut.com/upsell/embed.js" }, l = function (e) { var n = function (e) { var t = o.createElement("script"); return t.id = "revolut-checkout", t.src = e, t.async = !0, o.head.appendChild(t), t }(e); return new Promise((function (e, r) { n.onload = function () { return e() }, n.onerror = function () { o.head.removeChild(n), r(new Error(t + " failed to load")) } })) }, u = function () { if (window.RevolutCheckout === i || !window.RevolutCheckout) throw new Error(t + " failed to load") }, c = {}, d = {}, i = function o(r, d) { return c[d = d || "prod"] ? Promise.resolve(c[d](r)) : l(n[d]).then((function () { return u(), c[d] = window.RevolutCheckout, e[t] = o, c[d](r) })) }; i.payments = function (o) { var r = o.mode || "prod", d = { locale: o.locale || "auto", publicToken: o.publicToken || null }; return c[r] ? Promise.resolve(c[r].payments(d)) : l(n[r]).then((function () { return u(), c[r] = window.RevolutCheckout, e[t] = i, c[r].payments(d) })) }, i.upsell = function (e) { var o = e.mode || "prod", n = { locale: e.locale || "auto", publicToken: e.publicToken || null }; return d[o] ? Promise.resolve(d[o](n)) : l(r[o]).then((function () { if (!window.RevolutUpsell) throw new Error(t + " failed to load"); return d[o] = window.RevolutUpsell, delete window.RevolutUpsell, d[o](n) })) }, e[t] = i }(window, document, "RevolutCheckout"); </script>

<script>


  // var form = document.getElementById('checkout-form');
  // form.addEventListener('submit', async function (event) {
  //   event.preventDefault();
  // $.ajax({
  //     url: "{{ url('checkout') }}",
  //     data: $("#checkout-form").serialize(),
  //     type: 'POST',
  //     dataType: 'json',
  //     success: async function(result) {
  //         const { customerId, token } = result;
  //         try {
  //             const { payWithPopup } = await RevolutCheckout(token, 'sandbox');
  //             const popUp = payWithPopup({

  //                 onSuccess: async function(data) {
  //                     try {
  //                         const customer = await getCustomer(customerId);
  //                         console.log(customer);
  //                         window.alert("Thank you!");
  //                     } catch (error) {
  //                         console.error('Error getting customer:', error);
  //                         window.alert('Error retrieving customer information.');
  //                     }
  //                 },
  //                 onError: function(error) {
  //                     window.alert(`Something went wrong. ${error}`);
  //                 }
  //             });
  //             console.log(popUp);
  //         } catch (error) {
  //             console.error('Error in RevolutCheckout:', error);
  //             window.alert('Error during checkout process.');
  //         }
  //     },
  //     error: function(jqXHR, textStatus, errorThrown) {
  //         console.error('Error in AJAX request:', textStatus, errorThrown);
  //         window.alert('Error submitting checkout form.');
  //     }
  // });


  var checkout = document.getElementById('checkout');
  checkout.addEventListener('click', async function (event) {
    event.preventDefault();
    const { revolutPay } = await RevolutCheckout.payments({
     // locale: 'en', // Optional, defaults to 'auto'
      mode: 'sandbox', // Optional, defaults to 'prod'
      publicToken: "pk_M8f7zm9jedGwsTdcAAkIZLVymkq05MtfJNza8q5SQV5uO8Oe", // Merchant public API key 
    })
    const paymentOptions = {
      currency: 'EUR', // 3-letter currency code
      totalAmount: "{{($ad->price)}}", // In lowest denomination e.g., cents

      // If you wish to implement Revolut Pay with redirect URLs (skip this option if you listen to events):
      redirectUrls: {
        success: 'http://127.0.0.1:8000/success-payment',
        failure: 'http://127.0.0.1:8000/failed-payment',
        cancel: 'http://127.0.0.1:8000/cancel-payment'
      },

      createOrder: async () => {
        // Call your backend here to create an order
        // For more information, see: https://developer.revolut.com/docs/merchant/create-order
        const order = await createOrderData()
        return { publicId: order.token }
      },

      // You can put other optional parameters here
    }
    revolutPay.mount(document.getElementById('checkout-form'), paymentOptions)
    // Call this method if you wish to implement Revolut Pay with event listening (skip this option if you use redirect URLs):
    revolutPay.on('payment', (event) => {
      switch (event.type) {
        case 'cancel': {
          if (event.dropOffState === 'payment_summary') {
            log('what a shame, please complete your payment')
          }
          break
        }
        case 'success':
          onSuccess()
          break
        case 'error':
          onError(event.error)
          break
      }
    })
  });

  async function createOrderData() {
    return new Promise((resolve, reject) => {
      $.ajax({
        url: "{{ url('confirm-payment') }}",
        data: { price: "{{$ad->price}}", currency: 'EUR' },
        type: 'POST',
        dataType: 'json',
        success: function (result) {
        console.log(result);
          resolve(result);
        },
        error: function (jqXHR, textStatus, errorThrown) {
          reject('Error in AJAX request: ' + textStatus + ' ' + errorThrown);
        }
      });
    });
  }
</script>
@endsection