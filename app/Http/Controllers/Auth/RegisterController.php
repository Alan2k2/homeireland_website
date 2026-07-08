<?php

namespace App\Http\Controllers\Auth;
use PHPMailer\PHPMailer\PHPMailer;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Auth;
use Session;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => [ 'string', 'min:7'],
            // 'address' => ['string', 'min:10'],
            'role'=>['required','string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
{
    $fourdigitrandom = rand(1000, 9999);  

    // Create user first
    $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'address' => $data['address'] ?? null,
        'password' => Hash::make($data['password']),
        'role' => $data['role'],
        'code' => $data['code'] ?? null,
        'codew' => $data['codew'] ?? null,
        'whatsapp' => $data['whatsapp'] ?? null,
        'verify_tocken' => $fourdigitrandom,
    ]);

    // Send verification email
    Mail::raw("Your verification code is: $fourdigitrandom", function ($message) use ($data) {
        $message->to($data['email'])
                ->subject('Verification Code')
                ->from('info@homeireland.ie', 'Home Ireland');
    });

    Session::put('changeemail', $data['email']);

    return $user;
}

    
    

}
