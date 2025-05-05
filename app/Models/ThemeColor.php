<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ThemeColor extends Model
{
    protected $fillable = ['name', 'primary', 'secondary', 'base', 'accent', 'status'];

}
