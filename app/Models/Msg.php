<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Msg extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];
}
