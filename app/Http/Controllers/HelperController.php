<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public static function slugToNormal($slug)
    {
        // Replace dashes with spaces
        $string = str_replace('-', ' ', $slug);
    
        // Capitalize each word
        $string = ucwords($string);
    
        return $string;
    }
}
