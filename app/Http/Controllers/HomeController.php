<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Carousel;
use App\Models\Testimonial;
use App\Models\WelcomeOne;
use App\Models\WelcomeTwo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('index', [
            'carousel' => Carousel::all(),
            'welcomeone' => WelcomeOne::find(1),
            'welcometwo' => WelcomeTwo::find(1),
            'breeds' => Breed::all(),
            'testimonials' => Testimonial::all(),
            
        ]);
    }
}
