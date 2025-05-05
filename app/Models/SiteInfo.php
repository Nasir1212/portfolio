<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteInfo extends Model
{
    protected $fillable = [
        'name', 'slug', 'profile_img', 'description', 'logo', 'status',
    ];
}
