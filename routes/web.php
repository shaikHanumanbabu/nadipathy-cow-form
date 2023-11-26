<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\CowController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueeController;
use App\Http\Controllers\PhotoGalleryController;
use App\Http\Controllers\PressNewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TvNewController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\WelcomeOneController;
use App\Http\Controllers\WelcomeTwoController;
use App\Mail\MyTestMail;
use App\Models\Appointment;
use App\Models\VideoGallery;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::get('/', [HomeController::class, 'index']);
Route::get('/send-email', function() {
  $details = [
    'title' => 'Mail from ItSolutionStuff.com',
    'body' => 'This is for testing email using smtp'
];

Mail::to('hanumanbabu@yopmail.com')->send( new MyTestMail($details));

dd("Email is Sent.");
});

Route::get('/check-email', function() {
  $details = [
    'title' => 'Mail from ItSolutionStuff.com',
    'body' => 'This is for testing email using smtp'
];

return view('mail.test', ['details' => $details]);
});

Route::get('/breed', [HomeController::class, 'breedsType']);
Route::get('/breedInfo', [HomeController::class, 'breedInfo'])->name('breed-info');
Route::get('/about-info', [HomeController::class, 'aboutInfo']);
Route::get('/press-news-info', [HomeController::class, 'pressNewsInfo']);
Route::get('/tv-news-info', [HomeController::class, 'tvNewsInfo']);
Route::get('/events-info', [HomeController::class, 'eventsInfo'])->name("events-info");
Route::get('/events-details', [HomeController::class, 'eventsDetails'])->name('events-details');
Route::get('/social-media-info', [HomeController::class, 'socialMediaInfo']);
Route::get('/awards-rewards', [HomeController::class, 'awardsRewardsInfo']);
Route::get('/photo-gallery', [HomeController::class, 'photoGalleryInfo']);
Route::get('/photo-gallery-info', [HomeController::class, 'photoGalleryDetailedInfo']);
Route::get('/video-gallery', [HomeController::class, 'videoGalleryInfo']);
Route::get('/blog', [HomeController::class, 'blogsInfo']);
Route::get('/contact', [HomeController::class, 'contactInfo']);
Route::post('/contact', [HomeController::class, 'contactInfo'])->name('contact.post');
Route::get('/products-info', [HomeController::class, 'productsInfo']);
Route::get('/subcategory', [HomeController::class, 'categoryInfo']);
Route::get('/cow-details', [HomeController::class, 'cowDetailsInfo']);

Route::post('/store-appointment', [HomeController::class, 'store_appointment'])->name('store-appointment');
Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin', [AdminController::class, 'loginCheck'])->name('admin.logincheck');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::resource('/carousel', CarouselController::class);
Route::resource('/testimonials', TestimonialController::class);
Route::resource('/breeds', BreedController::class);
Route::resource('/welcome_ones', WelcomeOneController::class);
Route::resource('/welcome_twos', WelcomeTwoController::class);
Route::resource('/marquees', MarqueeController::class);
Route::resource('/appointments', AppointmentController::class);
Route::resource('/subcategories', SubCategoriesController::class);
Route::resource('/cows', CowController::class);
Route::resource('/p-news', PressNewController::class);
Route::resource('/tv-news', TvNewController::class);
Route::resource('/social-media', SocialMediaController::class);
Route::resource('/about', AboutController::class);
Route::resource('/awards', AwardController::class);
Route::resource('/blogs', BlogController::class);
Route::resource('/products', ProductController::class);
Route::resource('/videogalleries', VideoGalleryController::class);
Route::resource('/photogalleries', PhotoGalleryController::class);
Route::resource('/events', EventController::class);
/*
Route::get('/tasks', function () use($tasks) {
    return view('index', [
        'tasks' => $tasks
    ]);
})->name('tasks.index');

Route::get('tasks/{id}', function ($id) use($tasks)  {
  $task = collect($tasks)->firstOrFail('id', $id);

  if(!$task) {
    return abort(Response::HTTP_NOT_FOUND);
  }

  return view('show', ['task' => $task]);
})->name('tasks.show');

// Route::get('/hello', function () {
//     echo "hello welcome";
// })->name('hello');


// Route::get('/hallo', function() {
//     return redirect()->name()
// });
*/