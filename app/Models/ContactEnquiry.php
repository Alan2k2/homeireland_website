<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEnquiry extends Model
{
    protected $table = 'ads_enquiries';
    protected $primaryKey = 'id';
    use HasFactory;
}
