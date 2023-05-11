<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;

    protected $table = 'merchants';

    protected $fillable = [
        'name',
        'username',
        'last_name',
        'phone',
        'city',
        'state',
        'mailing_address',
        'dob',
        'image',
        'email',
        'post_code',
        'password',
        'company_name',
        'status',
        'role',
    ];
}


