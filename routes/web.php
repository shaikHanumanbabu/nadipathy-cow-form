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
use App\Http\Controllers\PhotoGalleryImageController;
use App\Http\Controllers\PressNewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TvNewController;
use App\Http\Controllers\VideoGalleryController;
use App\Http\Controllers\WelcomeOneController;
use App\Http\Controllers\WelcomeTwoController;
use App\Http\Controllers\WhatsappController;
use App\Mail\ForgotPasswordMail;
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
// Route::get('/{breed}', [HomeController::class, 'breedInfo'])->name('breed-info');
Route::get('/send-email', function() {
  $details = [
    'title' => 'Mail from ItSolutionStuff.com',
    'body' => 'This is for testing email using smtp'
];


Mail::to('hanumanbabu@yopmail.com')->send( new MyTestMail($details));

dd("Email is Sent.");
});


Route::get('/test-forgot-email-template', function() {
  
  $details = [
    'user' => 'Krishnam Raju',
    'company' => 'Nadipathy Goshala',
    'email' =>  Crypt::encrypt('nadipathygoshala@gmail.com'),
    'expireIn' =>  Crypt::encrypt(date('Y-m-d H:i:s', strtotime('+30 minute'))),
];

// dd($details);
// dd(Crypt::encrypt(json_encode($details)));


Mail::to('shaikhanumanbabu453@gmail.com')->send( new ForgotPasswordMail($details));

dd("Email is Sent.");
});

Route::get('/check-email', function() {
  $details = [
    'title' => 'Mail from ItSolutionStuff.com',
    'body' => 'This is for testing email using smtp'
];

return view('mail.test', ['details' => $details]);
});

Route::get('/cows/{breed_name}/{breed_category?}', [HomeController::class, 'breedsType']);
Route::get('/breed-info/{breed_name}', [HomeController::class, 'breedInfo'])->name('breed-info');
Route::get('/about-us', [HomeController::class, 'aboutInfo']);
Route::get('/press-news-info', [HomeController::class, 'pressNewsInfo']);
Route::get('/tv-news-info', [HomeController::class, 'tvNewsInfo']);
Route::get('/events', [HomeController::class, 'eventsInfo'])->name("events");
Route::get('/events-details', [HomeController::class, 'eventsDetails'])->name('events-details');
Route::get('/social-media-info', [HomeController::class, 'socialMediaInfo']);
Route::get('/awards-rewards', [HomeController::class, 'awardsRewardsInfo'])->name('awards-rewards');
Route::get('/photo-gallery', [HomeController::class, 'photoGalleryInfo']);
Route::get('/photo-gallery-info', [HomeController::class, 'photoGalleryDetailedInfo']);
Route::get('/video-gallery', [HomeController::class, 'videoGalleryInfo']);
Route::get('/blog', [HomeController::class, 'blogsInfo']);
Route::get('/contact', [HomeController::class, 'contactInfo']);
Route::post('/contact', [HomeController::class, 'contactInfo'])->name('contact.post');
Route::get('/products', [HomeController::class, 'productsInfo']);
Route::get('/subcategory', [HomeController::class, 'categoryInfo']);
Route::get('/cow-details', [HomeController::class, 'cowDetailsInfo'])->name('cow-details');
Route::get('/cow-at-home', [HomeController::class, 'cowAtHome'])->name('cow-at-home');
Route::get('/cow-details-demo', [HomeController::class, 'cowDetailsDemoInfo'])->name('cow-details');

Route::get('/cows-image-gallery/{cowGalleryImage}', [CowController::class, 'cowsGalleryImageDelete'])->name('cowimagedelete');

Route::post('/store-appointment', [HomeController::class, 'store_appointment'])->name('store-appointment');
Route::get('/admin-logout', [AdminController::class, 'logout'])->name('admin.logout');
Route::get('/forgot-password', [AdminController::class, 'forgotPassword'])->name('admin.forgotpassword');
Route::post('/forgot-password', [AdminController::class, 'forgotPassword'])->name('admin.forgotpassword');

Route::get('/update-password', [AdminController::class, 'updatePassword'])->name('admin.updatepassword');
Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('admin.updatepassword');


Route::prefix('/admin')->group(function() {
  
  Route::get('/', [AdminController::class, 'index']);
  Route::post('/', [AdminController::class, 'loginCheck'])->name('admin.logincheck');
  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
  Route::resource('/carousel', CarouselController::class);
  Route::resource('/testimonials', TestimonialController::class);
  Route::resource('/breeds', BreedController::class);
  Route::get('/breeds/get_subcategories/{breed}', [BreedController::class, 'getSubCategories'])->name('get-subcategories');
  Route::resource('/welcome_ones', WelcomeOneController::class);
  Route::resource('/cow-at-home', WelcomeTwoController::class);
  Route::resource('/marquees', MarqueeController::class);
  Route::resource('/appointments', AppointmentController::class);
  Route::resource('/subcategories', SubCategoriesController::class);
  Route::resource('/cows', CowController::class);
  Route::resource('/p-news', PressNewController::class);
  Route::resource('/tv-news', TvNewController::class);
  Route::resource('/social-media', SocialMediaController::class);
  Route::resource('/about', AboutController::class);
  Route::resource('/whatsapp', WhatsappController::class);
  Route::resource('/awards', AwardController::class);
  Route::resource('/blogs', BlogController::class);
  Route::resource('/products', ProductController::class);
  Route::resource('/videogalleries', VideoGalleryController::class);
  Route::resource('/photogalleries', PhotoGalleryController::class);
  Route::get('/photogalleriesImage/{photogalleriesImage}', [PhotoGalleryImageController::class, 'destroyImage'])->name('photogalleries-image-delete');
  Route::resource('/events', EventController::class);

});
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