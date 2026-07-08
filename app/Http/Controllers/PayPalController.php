<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PayPalController extends Controller
{
    private $baseUrl;
    private $clientId;
    private $secret;

    public function __construct()
    {
        $this->baseUrl = config('app.paypal_mode') === 'live'
            ? 'https://api-m.paypal.com'
            : 'https://api-m.sandbox.paypal.com';

        $this->clientId = env('PAYPAL_CLIENT_ID');
        $this->secret = env('PAYPAL_SECRET');
    }

    private function getAccessToken()
    {
        $response = Http::withoutVerifying()->asForm()->withBasicAuth($this->clientId, $this->secret)
            ->post("{$this->baseUrl}/v1/oauth2/token", [
                'grant_type' => 'client_credentials'
            ]);

        return $response->json()['access_token'] ?? null;
    }

    public function createOrder(Request $request)
    {
        $accessToken = $this->getAccessToken();

        $response = Http::withoutVerifying()->withToken($accessToken)
            ->post("{$this->baseUrl}/v2/checkout/orders", [
                'intent' => 'CAPTURE',
                'purchase_units' => [[
                    'amount' => [
                        'currency_code' => 'EUR',
                        'value' => $request->amount ?? '10.00'
                    ]
                ]]
            ]);

        return response()->json($response->json());
    }

    public function captureOrder(Request $request)
    
    {
        $accessToken = $this->getAccessToken();

        $orderId = $request->paymentId;

        $response = Http::withoutVerifying()->withToken($accessToken)
            ->post("{$this->baseUrl}/v2/checkout/orders/{$orderId}/capture");

        return response()->json(['success' => $response->successful(), 'data' => $response->json()]);
    }
}
