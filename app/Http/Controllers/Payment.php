<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Services\RevolutService;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Vat;
use App\Models\Customer;
use App\Models\Ads;
use App\Models\PropertySubscription;
use Illuminate\Support\Facades\Storage;
use Auth;
use Session;
use DB;
use PDF;
use App\Models\Automobiles;
use App\Models\Property;
class Payment extends Controller{
    protected $revolutService;
    public function __construct(RevolutService $revolutService)
    {
        $this->revolutService = $revolutService;
    }
    public function confirmPayment(Request $request){
        $amount = (int)trim($request['price']);
        $duration = (int)trim(Session::get('duration'));
        $currency ='EUR';
        $fullName=auth()->user()->name;
        $email=auth()->user()->email;
        $phone=(string) auth()->user()->phone;
        $user_id=auth()->user()->id;
        $address=auth()->user()->address;
        $order = $this->revolutService->createOrder($amount,$currency);
        $currentDateTime = date('ymdHis');
        $randomNumber = rand(1000, 9999);
        $unique_id="HI".$currentDateTime.$randomNumber;
        // $duration=3;
        $days="+".$duration." days";
        $next_due_date = date('Y-m-d', strtotime($days));
        $next_due_date;

        $expiry_date=$next_due_date;
         $newOrder = Order::create([
                'order_id'=>$order['id'],
                'category'=>Session::get('category'),
                'category_id'=>Session::get('category_id'),
                'amount'=>$amount,
                'unique_id'=>$unique_id,
                'currency'=>$order['currency'],
                'token'=>$order['token'],
                'type'=>$order['type'],
                'created_at'=>$order['created_at'],
                'updated_at'=>$order['updated_at'],
                'outstanding_amount'=>$order['outstanding_amount'],
                'capture_mode'=>$order['capture_mode'],
                'checkout_url'=>$order['checkout_url'],
                'enforce_challenge'=>$order['enforce_challenge'],
                'state'=>$order['state'],
                'customer_id'=>auth()->user()->id,
                'expire_date'=>$expiry_date
                 ]);
                 $id=$newOrder->id;
                  Session::put('oid',$id);
                  
                 $customer = Customer::create([
                'order_id'=>$id,
                'full_name'=>$fullName,
                'phone'=>$phone,
                'email'=>$email,
                'user_id'=>$user_id,
                'address'=>$address,
                'payment_status'=>0,
                'created_at'=>$order['created_at'],
                'updated_at'=>$order['updated_at'],
                 ]);
        // Store order details in the session
        session(['order' => $order]);
       
        
        return response()->json($order,200);
    }
    //  public function paymentSuccess(){
    //      $status=1;
    //       if (Session::has('oid'))
    //     {
    //      if($status==1)
    //      {
    //         //  print_r(Session::get('oid'));exit;
    //         $order_id=Session::get('oid');
    //         $vat=Vat::where('status',1)->orderBy('created_at', 'desc')->first();
    //         $order=Order::find($order_id);
    //         // echo"<pre>";print_r($order);exit;
    //         $order->state="ORDER_COMPLETED";
    //         $order->payment_status=1;
    //         $save= $order->save();
    //         if($save)
    //         {
    //           $customer=Customer::where('order_id',$order_id)->first(); 
    //           $customer->payment_status=1;
    //           $save=$customer->save();
    //           if($save)
    //           {
    //               $property=0;$ads=0;$automobiles=0;$slot=0;
    //               $category=$order->category;
    //               $category_id=$order->category_id;
    //               if($category=="property")
    //               {
    //             //   echo"prop";exit;   
    //                   $table="properties";
    //                   $property=Property::find($category_id);
    //               }
    //               elseif($category=="ads")
    //               {
    //                 //   echo"ads";exit;
    //                   $ads=Ads::find($category_id);
    //                   $table="ads";
    //               }
    //               elseif($category=="automobiles")
    //               {
    //                 //  echo"auto";exit;
    //                   $table="automobiles";
    //                   $automobiles=Automobiles::find($category_id);
    //               }
    //               elseif($category=="slot")
    //               {
    //                 //   echo"slot";exit;
    //                   $table="purchased_slot";
    //                   if($category_id==3){$slot=5;}
    //                   elseif($category_id==4){$slot=10;}
    //                   elseif($category_id==5){$slot=15;}
                      
    //               }
                 
    //              if(1)
    //              {
    //                     if(1)
    //                      {
    //                          $category_id=$category_id;
    //                             // Data to be passed to the view
    //                                    $data = [
    //                                     'customer'=>$customer,
    //                                     'order'=>$order,
    //                                     'property'=>$property,
    //                                     'ads'=>$ads,
    //                                     'automobiles'=>$automobiles,
    //                                     'slot'=>$slot,
    //                                     'vat' => $vat,
    //                                     'title' => 'Welcome to ItSolutionStuff.com',
    //                                     'date' => date('m/d/Y')];
    //                         // echo"<pre>";print_r($data);exit;
    //                                     // Load the view and generate PDF
    //                                     // return $data;
    //                             $pdf = PDF::loadView('pdf/invoice', $data);
                            
    //                             // Define PDF file name and path
    //                             $number = rand(100,100000);
    //                             $pdfName = time() . $number.'.pdf';
    //                             // $pdfPath = storage_path('app/public/pdfs/' . $pdfName);
    //                         $filePath = 'uploads/PDF/' . $pdfName;
    //                             // Save the PDF to the specified path
    //                             $pdf->save(public_path($filePath));
    //                             // Storage::put('public/pdfs/' . $pdfName, $pdf->output());
    //                         $order->invoice=$pdfName;
    //                         $save= $order->save();
    //                         if($category=="slot")
    //                         {
    //                             if($category_id==3){$slot=5;}
    //                             if($category_id==4){$slot=10;}
    //                             if($category_id==5){$slot=15;}
    //                                 $user_id=auth::user()->id;
    //                                 $save=DB::table($table)->insert(['user_id' => 
    //                                 $user_id,'payment_status' => 1,
    //                                 'invoice'=>$pdfName,
    //                                 'expire_date'=>$order->expire_date,
    //                                 'slot_number'=>$slot,
    //                                 'subscription_id'=>$category_id,
    //                                 'created_at'=>date('Y-m-d')
    //                                 ]);
                             
    //                         }
    //                         else
    //                         {
    //                              $save=DB::table($table)->where('id',$category_id)->update(['payment_status' => 1,'invoice'=>$pdfName,'expire_date'=>$order->expire_date]);  
                                
    //                         }

    //                        }
    //                           Session::forget('main_cat');
    //                           Session::forget('a_id');
    //                           Session::forget('property_id');
    //                           Session::forget('category');
    //                           Session::forget('category_id');
    //                           Session::forget('amount');
    //                           Session::forget('duration');
    //                           Session::forget('oid');
    //                return view('payments.status',compact('status','pdfName'));  
    //              }
    //              else
    //              {
    //                  echo"something went wrong";
    //              }
    //           }
              
    //         }
    //      }
        
    // }
    // else
    // {
    //     return redirect()->route('home');
    // }
    //     return view('payments.status',compact('status'));
    // }
    public function paymentSuccess()
{
    $status = 1;
    if (Session::has('oid')) {
        if ($status == 1) {
            $order_id = Session::get('oid');
            $order = Order::find($order_id);
            $order->state = "ORDER_COMPLETED";
            $order->payment_status = 1;
            $save = $order->save();

            if ($save) {
                $customer = Customer::where('order_id', $order_id)->first();
                $customer->payment_status = 1;
                $save = $customer->save();

                if ($save) {
                    // Get the latest VAT rate
                    $vatRate = Vat::where('status', 1)->orderBy('created_at', 'desc')->first();
                    $vatValue = $vatRate->vat;
                    $vatAmount = $order->amount * ($vatRate->rate / 100);

                    $property = 0;
                    $ads = 0;
                    $automobiles = 0;
                    $slot = 0;
                    $category = $order->category;
                    $category_id = $order->category_id;

                    // Handle category logic (property, ads, automobiles, or slot)
                    if ($category == "property") {
                        $table = "properties";
                        $property = Property::find($category_id);
                    } elseif ($category == "ads") {
                        $ads = Ads::find($category_id);
                        $table = "ads";
                    } elseif ($category == "automobiles") {
                        $table = "automobiles";
                        $automobiles = Automobiles::find($category_id);
                    } elseif ($category == "slot") {
                        $table = "purchased_slot";
                        if ($category_id == 3) {
                            $slot = 5;
                        } elseif ($category_id == 4) {
                            $slot = 10;
                        } elseif ($category_id == 5) {
                            $slot = 15;
                        }
                    }
                    $imagePath = public_path('watermark/NEW-LOGO.png'); // Adjust the path to where your logo is stored
                    $image = file_get_contents($imagePath);
                    $base64Image = base64_encode($image);
                    // Prepare data for PDF generation
                    $data = [
                        'customer' => $customer,
                        'order' => $order,
                        'property' => $property,
                        'ads' => $ads,
                        'automobiles' => $automobiles,
                        'slot' => $slot,
                        'title' => 'Invoice for Order ' . $order->unique_id,
                        'date' => date('m/d/Y'),
                        'base64Image' => $base64Image,
                        'vatValue' => $vatValue,
                        'vatAmount' => $vatAmount, // Add VAT amount to data
                    ];

                    // Load the view and generate the PDF
                    $pdf = PDF::loadView('pdf/invoice', $data);

                    // Set options for DomPDF
                    $pdf->setOptions([
                        'isHtml5ParserEnabled' => true,
                        'isPhpEnabled' => true,
                        'fontDir' => public_path('fonts'),
                        'defaultFont' => 'Roboto'
                    ]);

                    // Define the PDF file name and path
                    $number = rand(100, 100000);
                    $pdfName = time() . $number . '.pdf';
                    $filePath = 'uploads/PDF/' . $pdfName;

                    // Ensure the directory exists and is writable
                    $pdf->save(public_path($filePath));

                    // Save the PDF name in the database
                    $order->invoice = $pdfName;
                    $save = $order->save();

                    if ($category == "slot") {
                        $user_id = auth::user()->id;
                        $save = DB::table($table)->insert([
                            'user_id' => $user_id,
                            'payment_status' => 1,
                            'invoice' => $pdfName,
                            'expire_date' => $order->expire_date,
                            'slot_number' => $slot,
                            'subscription_id' => $category_id,
                            'created_at' => date('Y-m-d')
                        ]);
                    } else {
                        $save = DB::table($table)->where('id', $category_id)->update([
                            'payment_status' => 1,
                            'invoice' => $pdfName,
                            'expire_date' => $order->expire_date
                        ]);
                    }

                    // Clear session data
                    Session::forget('main_cat');
                    Session::forget('a_id');
                    Session::forget('property_id');
                    Session::forget('category');
                    Session::forget('category_id');
                    Session::forget('amount');
                    Session::forget('duration');
                    Session::forget('oid');

                    // Return a view with the status and PDF name
                    return view('payments.status', compact('status', 'pdfName'));
                }
            }
        }
    } else {
        return redirect()->route('home');
    }

    return view('payments.status', compact('status'));
}

     public function paymentFailed(){
         $status=2;
        //  echo Session::get('oid');exit;
        return view('payments.status',compact('status'));
     }
    public function paymentCalcel(){
        $status=3;
        return view('payments.status',compact('status'));
    }
    public function paymentWebhook(Request $request){
        $data = (array)json_decode($request->getContent());
        $order=array();
        if($data['event']=='ORDER_COMPLETED'){
         $order=$this->revolutService->getOrderData($data['order_id']);
    }
    $filename = 'test.txt';
    // Append the data to the file
    Storage::append($filename, json_encode($order));
    return response()->json($data, 200);
}
    
}