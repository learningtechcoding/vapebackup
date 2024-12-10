<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/gallery', function () {
    return view('gallery');
});



Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('send.message');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/login_custom', [ContactController::class, 'login_submit']);


Route::get('/data', [ContactController::class, 'data']);


Route::post('/logout', function () {
    Auth::logout();  // Logs out the authenticated user
    return redirect('/login');  // Redirect to the login page or any other page
})->name('logout');
