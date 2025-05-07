<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
      "name",
"phone",
"email",
"service",
"price",
"payment_type",
"address",
"essential_file",
"product_id",
"order_id",
"order_by",
"payment_info",
"status",
"details",
    ];
    



}
