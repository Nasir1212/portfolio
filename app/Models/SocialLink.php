<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    protected $fillable = [
        'facebook',
        'whatsapp',
        'youtube',
        'linkedin',
        'instagram',
        'twitter',
        'email',
        'phone',
        'address',
    ];
}
