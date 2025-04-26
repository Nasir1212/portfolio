<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name', 'phone', 'email', 'service', 'price', 'essential_file', 'details'
    ];
}
