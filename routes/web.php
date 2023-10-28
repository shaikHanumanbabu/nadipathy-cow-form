<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BreedController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarqueeController;
use App\Http\Controllers\SubCategoriesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WelcomeOneController;
use App\Http\Controllers\WelcomeTwoController;
use App\Mail\MyTestMail;
use App\Models\Appointment;
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