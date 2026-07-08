<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Chat;
use App\Models\Ads;
use App\Models\Property;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
        'code',
        'codew',
        'whatsapp',
        'verify_tocken'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin()
    {
    return $this->is_admin; // Assuming there is an 'is_admin' column in your users table
    }

    public function Chat()
    {
        return $this->hasOne(Chat::class);
    }
        public function Ads()
    {
        return $this->hasOne(Ads::class);
    }

        public function testimonial()
    {
        return $this->hasOne(Testimonial::class);
    }
    
        public function Property()
    {
        return $this->hasOne(Property::class);
    }
            public function Automobiles()
    {
        return $this->hasOne(Automobiles::class);
    }
}
