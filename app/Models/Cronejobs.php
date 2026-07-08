<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cronejobs extends Model
{
    use HasFactory;
    protected $table = 'cronejobs';
    protected $primaryKey = 'id';
}
