<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Appointment;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Breed;
use App\Models\Carousel;
use App\Models\Marquee;
use App\Models\PressNew;
use App\Models\Product;
use App\Models\SocialMedia;
use App\Models\Testimonial;
use App\Models\TvNew;
use App\Models\WelcomeOne;
use App\Models\WelcomeTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
        $params = $request->get('lang');
        App::setLocale($params ?? 'en');

        $locale = App::currentLocale();


        return view('home', [
            'carousel' => Carousel::all(),
            'welcomeone' => WelcomeOne::find(1),
            'welcometwo' => WelcomeTwo::find(1),
            'breeds' => Breed::all(),
            'testimonials' => Testimonial::all(),
            'marquee' => Marquee::find(1),
            
        ]);
    }

    public function breedsType(Request $request)
    {
        $params = $request->get('breedType');
        $breed = Breed::where('title', $params)->get()->first();
        return view('breeds', [
            'breed' => $breed,
            'breeds' => Breed::all()
        ]);

    }

    public function store_appointment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'visiting_datetime' => 'required',
        ]);

        $appointment = Appointment::create($validated);

        return redirect()->back()->with('appointment_success', 'Thank you for reaching out! Your message has been successfully received. Our team will get back to you shortly.');
    }

    public function aboutInfo()
    {
        return view('about-info', [
            'aboutInfo' => About::all()->first()
        ]);
    }
    public function pressNewsInfo()
    {
        return view('press-news-info', [
            'pressNews' => PressNew::all()
        ]);
    }
    public function tvNewsInfo()
    {
        return view('tv-news-info', [
            'tvNews' => TvNew::all()
        ]);
    }
    public function socialMediaInfo()
    {
        return view('social-media-info', [
            'socialMedias' => SocialMedia::all()
        ]);
    }

    public function awardsRewardsInfo()
    {
        return view('awards-rewards-info', [
            'awards' => Award::all()
        ]);
    }

    public function blogsInfo()
    {
        return view('blog', [
            'blogs' => Blog::all()
        ]);
    }

    public function photoGalleryInfo()
    {
        return view('photo-gallery');
    }

    public function videoGalleryInfo()
    {
        return view('video-gallery');
    }

    public function contactInfo()
    {
        return view('contact');
    }

    public function productsInfo()
    {
        return view('products-info', [
            'products' => Product::all()
        ]);
    }
}
