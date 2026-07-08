<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\RevolutService;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Customer;
use App\Models\Ads;
use App\Models\PropertySubscription;
class CheckoutController extends Controller{

    protected $revolutService;
    private $secretKey = 'sk_ttlckF0I1TzotCC-QbWIesYUjqpvbimULIFL84RKPcRu46HXRtJH25aOmRUiNkCB';
    
    public function __construct(RevolutService $revolutService)
    {
        $this->revolutService = $revolutService;
    }
    public function checkout($ad){
      $ad = Ads::find($ad);
      
      return view('payments.checkout',compact('ad'));
    
    }
// public function paymentForm($ad){
//     $ad = Ads::find($ad);
 
//     $customer = null;
//     $amount = $ad->price;
//     $currency = 'EUR';
//     //Retrieving list of all customers from Revolut API
//     $allCustomers = $this->revolutService->retrieveAllCustomers();
//      foreach($allCustomers as $individualCustomer){
//         if($individualCustomer['email'] === auth()->user()->email){
//             $customer = $individualCustomer;
//             break;
//         }
        
//     }

//     if($customer === null){
        
//         $fullName=auth()->user()->name;
//         $businessName = auth()->user()->name;
//         $email=auth()->user()->email;
//         $phone=(string) auth()->user()->phone;
//         // $customer = $this->revolutService->createCustomer($fullName,$businessName,$email,$phone);
//     }
//     $customerId = $customer['id'];
//     $order = $this->revolutService->createOrder($amount,$currency,1);
//     //dd($order);

//      $newOrder = Order::create([
//         'order_id'=>$order['id'],
//         'amount'=>$order['amount'],
//         'currency'=>$order['currency'],
//         'token'=>$order['token'],
//         'type'=>$order['type'],
//         'created_at'=>$order['created_at'],
//         'updated_at'=>$order['updated_at'],
//         'outstanding_amount'=>$order['outstanding_amount'],
//         'capture_mode'=>$order['capture_mode'],
//         'checkout_url'=>$order['checkout_url'],
//         'enforce_challenge'=>$order['enforce_challenge'],
//         'state'=>$order['state'],
//         'customer_id'=>auth()->user()->id,
//         'add_id'=>$ad->id,
        
//         ]);
//         // Store order details in the session
//         session(['order' => $order,'customer'=>$customer]);
//         return view('payments.payment',compact('ad','order','customer'));
// }
//     public function createOrder($selectedPlan){
//         $customer = null;
//     $amount = 1;
//     $currency = 'EUR';
    
//     //Retrieving list of all customers from Revolut API
//     $allCustomers = $this->revolutService->retrieveAllCustomers();
//     //dd($allCustomers);
//     foreach($allCustomers as $individualCustomer){
//         if($individualCustomer['email'] === auth()->user()->email){
//             $customer = $individualCustomer;
//             break;
//         }
        
//     }
//     if($customer === null){
        
//         $fullName=auth()->user()->name;
//         $businessName = auth()->user()->name;
//         $email=auth()->user()->email;
//         $phone=(string) auth()->user()->phone;
//         $customer = $this->revolutService->createCustomer($fullName,$businessName,$email,$phone);
//     }
    
    
    
  
//     // $customer =Customer::create([
//     //     'customer_id'=>auth()->user()->id,
//     //     'full_name'=>$customer['full_name'],
//     //     'business_name'=>$customer['business_name'],
//     //     'email'=>$customer['email'],
//     //     'phone'=>$customer['phone'],
//     // ]);
//     // dd($customer);
    
//     $customerId = $customer['id'];
//     $order = $this->revolutService->createOrder($amount,$currency,$customerId);
//   //dd($order);

//     $newOrder = Order::create([
//         'order_id'=>$order['id'],
//         'amount'=>$order['amount'],
//         'currency'=>$order['currency'],
//         'token'=>$order['token'],
//         'type'=>$order['type'],
//         'created_at'=>$order['created_at'],
//         'updated_at'=>$order['updated_at'],
//         'outstanding_amount'=>$order['outstanding_amount'],
//         'capture_mode'=>$order['capture_mode'],
//         'checkout_url'=>$order['checkout_url'],
//         'enforce_challenge'=>$order['enforce_challenge'],
//         'state'=>$order['state'],
//         'customer_id'=>auth()->user()->id,
//         'add_id'=>$ad->id,
        
//         ]);
//         // Store order details in the session
//         session(['order' => $order,'customer'=>$customer]);
//         //dd($order);
//     return view('payments.payment',compact('order','customer'));
//     }


public function payments(Request $request){
   
 
    $customer = null;
    $amount = $request['price'];
    $currency = $request['currency'];
    //Retrieving list of all customers from Revolut API
    $allCustomers = $this->revolutService->retrieveAllCustomers();
     foreach($allCustomers as $individualCustomer){
        if($individualCustomer['email'] === auth()->user()->email){
            $customer = $individualCustomer;
            break;
        }
        
    }
    
    if($customer === null){
        
        $fullName=auth()->user()->name;
        $businessName = auth()->user()->name;
        $email=auth()->user()->email;
        $phone=(string) auth()->user()->phone;
        $customer = $this->revolutService->createCustomer($fullName,$businessName,$email,$phone);
        
    }
    $customerId = $customer['id'];
    $order = $this->revolutService->createOrder($amount,$currency,$customerId);
    // $this->revolutService->createWebhook();
    // $this->revolutService->createWebhook_subscribe();
    $this->revolutService->createOrder(1,2,3);
    //  $newOrder = Order::create([
    //     'order_id'=>$order['id'],
    //     'amount'=>$order['amount'],
    //     'currency'=>$order['currency'],
    //     'token'=>$order['token'],
    //     'type'=>$order['type'],
    //     'created_at'=>$order['created_at'],
    //     'updated_at'=>$order['updated_at'],
    //     'outstanding_amount'=>$order['outstanding_amount'],
    //     'capture_mode'=>$order['capture_mode'],
    //     'checkout_url'=>$order['checkout_url'],
    //     'enforce_challenge'=>$order['enforce_challenge'],
    //     'state'=>$order['state'],
    //     'customer_id'=>auth()->user()->id,
        
    //     ]);
        // Store order details in the session
        session(['order' => $order,'customer'=>$customer]);
        // Redirect to the checkout URL
        
        return redirect()->to($order['checkout_url']);
        
        
 
  
}
public function propertysubscribe($propertyid)
{
    $PropertySubscription=PropertySubscription::all();
    return view('payments.propertySubscribe',compact('PropertySubscription'));
   
}

public function success(){
    echo"return url";exit;
     return view('payments.success');
}
public function handleWebhook(Request $request)
    {
        $signature = $request->header('X-Signature');
        $payload = $request->getContent();

        if ($this->verifySignature($payload, $signature, $this->secretKey)) {
            $event = json_decode($payload, true);

            if (isset($event['type']) && $event['type'] === 'payment.completed') {
                // Payment was successful, process the payment and update your database here
                Log::info('Payment completed: ', $event);

                // Redirect the user to the success page
                return redirect()->route('payment.success');
            } else {
                return response('Event type not handled', 400);
            }
        } else {
            return response('Invalid signature', 400);
        }
    }
    public function paymentSuccess()
    {
        echo"success kkk";
        // return view('payment.success');
    }
    private function verifySignature($data, $signature, $secretKey)
    {
        $computedSignature = hash_hmac('sha256', $data, $secretKey);
        return hash_equals($computedSignature, $signature);
    }
    
    
    
}