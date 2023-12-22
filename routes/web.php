<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewPostController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\NewLocationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('dashboard/index');
// });
Route::get('/', [NewPostController::class, 'home']);

Route::get('/event', function() {
    return view('dashboard/event');
});

Route::get('/event', [NewPostController::class, 'showevent']);

Route::get('/location', function() {
    return view('dashboard/location');
});

Route::get('/aboutus', function() {
    return view('dashboard/aboutus');
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/message', [ContactController::class, 'send']);
Route::post('/contact/job_application', [ContactController::class, 'apply']);


// ADMIN ROUTES
// Login
Route::get('/logadmin', [LoginController::class, 'index']);
Route::post('/logadmin', [LoginController::class, 'authenticate'])->name('login.authenticate');

// Logout
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Events
Route::resource('/admin/events', NewPostController::class)->middleware('auth');

// Job Application
Route::get('/admin/applications', [ContactController::class, 'adminappl'])->middleware('auth');

// Customer Message
Route::get('/admin/customers', [ContactController::class, 'admincust'])->middleware('auth');

// Link Storage
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
