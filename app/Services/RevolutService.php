<?php
namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException; 
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Exception\ClientException;

class RevolutService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        // $this->apiUrl = 'https://merchant.revolut.com/api';
        $this->apiKey = env('REVOLUT_API_SECRET'); 
        $this->apiUrl = 'https://sandbox-merchant.revolut.com/api';
        // $this->apiUrl = 'https://b2b.revolut.com/merchant/api';
    }
    public function retrieveAllCustomers(){
        $client = new Client();
        
        $response = $client->get($this->apiUrl . '/1.0/customers', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
  
    public function createCustomer($fullName,$businessName,$email,$phone,$user_id){
        
        $client = new Client();
        
        $response = $client->post($this->apiUrl . '/1.0/customers', [
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . $this->apiKey,
            ],
            'json' => [
                'full_name'=>$fullName,
                'business_name'=>$businessName,
                'email'=>$email,
                'phone'=>$phone,
                'customer_id'=>$user_id
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }




    public function createOrder($amount,$currency){
        
        $client = new Client();
        $amount=trim($amount*100);
        $amount=(int)$amount;
        $response = $client->post($this->apiUrl . '/orders', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01',
            ],
            'json' => [
                'amount' =>$amount,
                'currency' => 'EUR',
                // 'customer_id'=>1,
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    
    public function createOrderData($amount,$currency){
        
        $client = new Client();
        
        $response = $client->post($this->apiUrl . '/orders', [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01',
            ],
            'json' => [
                'amount' => 400,
                'currency' => 'EUR',
             
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    public function getOrderData($order_id){
        
        $client = new Client();
        
        $response = $client->get($this->apiUrl . '/orders/'.$order_id, [
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01',
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    public function createPayment($amount, $currency)
    {
        $client = new Client();

        $response = $client->post($this->apiUrl . '/foo/bar', [
            
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01'
            ],
            'json' => [
                'amount' => $amount,
                'currency' => $currency,
                // Add any other required parameters
            ],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    public function retrieveAllPaymentMethodsForSpecificCustomer($customer_id){
        $client = new Client();

        $response = $client->get($this->apiUrl .'/1.0/customers/'.$customer_id.'/payment-methods', [
            
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01'
            ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    
    public function createWebhook(){
        $client = new Client();

        $response = $client->post($this->apiUrl .'/1.0/webhooks/', [
            
            'headers' => [
                'Authorization' => 'Bearer ' . $this->apiKey,
                
                'Content-Type' => 'application/json',
                'Revolut-Api-Version'=> '2023-09-01'
            ],
            'json'=>[
                'url' => 'http://127.0.0.1:8000/panel/dashboard',
                'events' => [
                    'ORDER_COMPLETED',
                    'ORDER_AUTHORISED'
                ]
                ]
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    
}