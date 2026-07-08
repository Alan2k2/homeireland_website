@extends('layouts.panel.main')
@section('content')

    <section class="green-strip-wrapper mb-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 page-title">
                <h1 class="font-nunito regular">My Property Listings</h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 page-breadcumb hidden-sm hidden-xs">
                <ul class="font-roboto regular">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="my-4">
    <div class="">
        <div class="">
           
            <div class="">
                <form id="subscribe-form" action="{{ route('payments') }}" method="post">
                   @csrf
                   <input type="text" name="cardholder_name">
                   <div id="card-field"></div>
                    <button id="button-submit" type="button">Submit</button>
                </form>
            </div>
        </div>
        
     
        
    </div>
</section>


<!-- Include Revolut Checkout library -->
<script>!function(e,o,t){var n={sandbox:"https://sandbox-merchant.revolut.com/embed.js",prod:"https://merchant.revolut.com/embed.js",dev:"https://merchant.revolut.codes/embed.js"},r={sandbox:"https://sandbox-merchant.revolut.com/upsell/embed.js",prod:"https://merchant.revolut.com/upsell/embed.js",dev:"https://merchant.revolut.codes/upsell/embed.js"},l=function(e){var n=function(e){var t=o.createElement("script");return t.id="revolut-checkout",t.src=e,t.async=!0,o.head.appendChild(t),t}(e);return new Promise((function(e,r){n.onload=function(){return e()},n.onerror=function(){o.head.removeChild(n),r(new Error(t+" failed to load"))}}))},u=function(){if(window.RevolutCheckout===i||!window.RevolutCheckout)throw new Error(t+" failed to load")},c={},d={},i=function o(r,d){return c[d=d||"prod"]?Promise.resolve(c[d](r)):l(n[d]).then((function(){return u(),c[d]=window.RevolutCheckout,e[t]=o,c[d](r)}))};i.payments=function(o){var r=o.mode||"prod",d={locale:o.locale||"auto",publicToken:o.publicToken||null};return c[r]?Promise.resolve(c[r].payments(d)):l(n[r]).then((function(){return u(),c[r]=window.RevolutCheckout,e[t]=i,c[r].payments(d)}))},i.upsell=function(e){var o=e.mode||"prod",n={locale:e.locale||"auto",publicToken:e.publicToken||null};return d[o]?Promise.resolve(d[o](n)):l(r[o]).then((function(){if(!window.RevolutUpsell)throw new Error(t+" failed to load");return d[o]=window.RevolutUpsell,delete window.RevolutUpsell,d[o](n)}))},e[t]=i}(window,document,"RevolutCheckout");
</script>
<script>
document.addEventListener('DOMContentLoaded', async function() {
    const orderToken = "{{$order['token']}}";
    const { createCardField } = await RevolutCheckout(orderToken);
    const cardField = createCardField({
      target: document.getElementById("card-field"),
      onSuccess() {
        // Do something to handle successful payments
        window.alert("Thank you!")
      },
      onError(error) {
        // Do something to handle payment errors
        window.alert(`Something went wrong. ${error}`)
      }
    })
    
    document.getElementById("button-submit").addEventListener("click", function () {
      cardField.submit({
            name: "Customer Name",
            email: "{{$customer['email']}}",
            phone: "{{$customer['phone']}}",
            savePaymentMethodFor: "customer"
      })
    })
});
// document.addEventListener('DOMContentLoaded', async function() {
//     const orderToken = "{{$order['token']}}";
//     try {
//         const instance = await RevolutCheckout(orderToken, "sandbox");
//         const cardField = instance.createCardField({
//             target: document.getElementById("card-field"),
//             onSuccess() {
//                 window.alert("Thank you for your payment!");
//             },
//             onError(error) {
//                 window.alert(`Something went wrong. ${error}`);
//             }
//         });

//         document.getElementById("button-submit").addEventListener("click", function() {
//             var meta = {
//                 name: "Customer Name",
//                 email: "{{$customer['email']}}",
//                 phone: "{{$customer['phone']}}",
//                 savePaymentMethodFor: "customer"
//             };
//             cardField.submit(meta);
//         });
//     } catch (error) {
//         console.error('Error initializing RevolutCheckout:', error);
//     }
// });

</script>


@endsection()