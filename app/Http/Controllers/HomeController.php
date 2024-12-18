<?php

namespace App\Http\Controllers;

use App\Mail\MyTestMail;
use App\Models\About;
use App\Models\Appointment;
use App\Models\Award;
use App\Models\Blog;
use App\Models\Breed;
use App\Models\Carousel;
use App\Models\Cow;
use App\Models\Event;
use App\Models\Marquee;
use App\Models\photoGallery;
use App\Models\PressNew;
use App\Models\Product;
use App\Models\SocialMedia;
use App\Models\SubCategories;
use App\Models\Testimonial;
use App\Models\TvNew;
use App\Models\VideoGallery;
use App\Models\WelcomeOne;
use App\Models\WelcomeTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    
    //
    public function index(Request $request)
    {
        $params = $request->get('lang');
        App::setLocale($params ?? 'en');

        $locale = App::currentLocale();

        $cows = Cow::where('show_in_explore', '=', 1)->get()->slice(0, 4);
        $cow_at_home = WelcomeTwo::find(1);

        // Split the text by <p> and </p> tags
        $paragraphs = preg_split('/<\/?p>/', $cow_at_home->description, -1, PREG_SPLIT_NO_EMPTY);

        // Get the first two paragraphs
        $firstTwoParagraphs = array_slice($paragraphs, 0, 2);

        // Join the paragraphs back with <p> tags
        $cow_at_home_desc =  '<p>' . implode('</p><p>', $firstTwoParagraphs) . '</p>';

        
        

        return view('home', [
            'carousel' => Carousel::orderBy('priority', 'asc')->get(),
            'welcomeone' => WelcomeOne::find(1),
            'cow_at_home' => WelcomeTwo::find(1),
            'cow_at_home_desc' => $cow_at_home_desc,
            'breeds' => Breed::orderBy('sort_value', 'asc')->get(),
            'testimonials' => Testimonial::all(),
            'marquee' => Marquee::find(1),
            'explore_cows' => $cows,
            
        ]);
    }

    public function breedsType(Request $request, $breed_name, $breed_category = '')
    {

        if($breed_category) {

            $sub_category = SubCategories::where('slug', $breed_category)->orderBy('updated_at', 'desc')->first();

            if(!$sub_category){
                return abort(404);
            }
            return view('category-info', [
                'sub_category' => $sub_category,
                
            ]);
        }


        $breed = Breed::with(['categories' => function($query) {
            return $query->where('status', 1)->orderBy('updated_at', 'desc');
        }])->where('slug', $breed_name)
            ->orderBy('updated_at', 'desc') 
            ->get()->first();

        if(!$breed){
            return abort(404);
        }
        return view('breeds', [
            'breed' => $breed,
        ]);

    } // 


    public function breedInfo(Request $request, $breed_name)
    {

        $breed = Breed::where('slug', '=',  $breed_name)->get()->first();

        //dd($breed);
        // resources/views/breed-info.blade.php
        return view('breed-info', [
            'breed' => $breed,
        ]);

    } // eventsInfo

    public function eventsInfo(Request $request)
    {

        // resources/views/breed-info.blade.php
        return view('events-info', [
            'events' => Event::orderBy('id', 'desc')->get(),
        ]);

    } // eventsInfo

    public function eventsDetails(Request $request)
    {

        $params = $request->get('eventId');

        $event = Event::where('id', '=',  $params)->get()->first();

        
        // resources/views/breed-info.blade.php
        return view('events-details', [
            'event' => $event,
        ]);

    }

    public function store_appointment(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'phone_number' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'min:10', 'max:15'],
            'email' => 'required',
            'address' => 'required',
            'visiting_datetime' => 'required',
        ]);

        $validated['from'] = 'appointment';
        Mail::to("nadipathygoshala@gmail")->send( new MyTestMail($validated));

        $appointment = Appointment::create($validated);

        return redirect()->back()->with('appointment_success', 'Thank you for reaching out! Your message has been successfully received. Our team will get back to you shortly.');
    }

    public function aboutInfo()
    {
        return view('about-info', [
            'aboutInfo' => About::all()->first()
        ]);
    }

    public function cowAtHome(Request $request)
    {
        // $cow = Cow::where('id', '=', $request->get('cowid'))->get()->first();
        
        // dd($cow->sub_category);
        
        
        
        return view('need-cow-at-home', [
            'cow_at_home' => WelcomeTwo::all()->first(),
        ]);
    }
    public function pressNewsInfo()
    {
        return view('press-news-info', [
            'pressNews' => PressNew::orderBy('id', 'desc')->get()
        ]);
    }
    public function tvNewsInfo()
    {
        return view('tv-news-info', [
            'tvNews' => TvNew::orderBy('id', 'desc')->get()
        ]);
    }
    public function socialMediaInfo()
    {
        return view('social-media-info', [
            'socialMedias' => SocialMedia::orderBy('id', 'desc')->get()
        ]);
    }

    public function awardsRewardsInfo()
    {
        return view('awards-rewards-info', [
            'awards' => Award::orderBy('id', 'desc')->get()
        ]);
    }

    public function blogsInfo()
    {
        return view('blog', [
            'blogs' => Blog::orderBy('id', 'desc')->get()
        ]);
    }

    public function photoGalleryInfo()
    {
        return view('photo-gallery', [
            'photoGalleries' => photoGallery::with('galleryimage')->orderBy('id', 'desc')->get()
        ]);
    }

    public function photoGalleryDetailedInfo(Request $request)
    {
        $photoGalleryInfo = photoGallery::with('galleryimage')->where('title', '=', $request->get('title'))->orderBy('id', 'desc')->get()->first();
        if(!$request->get('title') || empty($photoGalleryInfo)) {
            abort(404, 'Page Not Found');
        }
        return view('photo-gallery-info', [
            'photoGalleryInfo' => $photoGalleryInfo
        ]);
    }

    public function videoGalleryInfo()
    {
        return view('video-gallery', [
            'videoGalleries' => VideoGallery::orderBy('id', 'desc')->get()
        ]);
    }

    public function contactInfo(Request $request)
    {
        if($request->isMethod('post')) {
            $validated = $request->validate([
                'name' => 'required',
                'phone_number' => 'required',
                'email' => 'required',
                'address' => 'required',
            ]);
            $validated['from'] = 'contact';

            Appointment::create($validated);
            Mail::to("nadipathygoshala@gmail")->send( new MyTestMail($validated));
            return redirect()->back()->with('contact_success', 'Thank you for reaching out! Your message has been successfully received. Our team will get back to you shortly.');
        }
        return view('contact');
    }

    public function productsInfo()
    {
        return view('products-info', [
            'products' => Product::orderBy('id', 'desc')->get()
        ]);
    }
    

    public function categoryInfo(Request $request)
    {
        
        
        
    }

    public function cowDetailsInfo(Request $request)
    {
        $cow = Cow::where('id', '=', $request->get('cowid'))->orderBy('id', 'desc')->get()->first();
        
        // dd($cow->sub_category);
        
        
        
        return view('cow-details', [
            'cow' => $cow,
            'sub_category' => $cow->sub_category,
            'breed' => $cow->breed,
        ]);
    }

    

    public function cowDetailsDemoInfo(Request $request)
    {
        $cow = Cow::where('id', '=', $request->get('cowid'))->get()->first();
        
        
        
        
        return view('cow-details-demo', [
            'cow' => $cow,
            'sub_category' => $cow->sub_category,
            'breed' => $cow->breed,
        ]);
    }
}
