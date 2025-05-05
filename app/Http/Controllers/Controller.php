<?php

namespace App\Http\Controllers;

abstract class Controller
{
    function deleteBlogImageIfExists($path) {
        $imagePath = str_replace('/storage/', '', $path);
        if ($path && \Storage::disk('public')->exists($imagePath)) {
            \Storage::disk('public')->delete($imagePath);
        }
    }
}
