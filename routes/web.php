<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('/', function () { return view('home'); });
// Route::get('/about', function () { return view('about'); });
// Route::get('/services', function () { return view('services'); });
// Route::get('/contact', function () { return view('contact'); });
// Route::get('/enquiry', [App\Http\Controllers\EnquiryController::class, 'showForm']);
// Route::post('/enquiry', [App\Http\Controllers\EnquiryController::class, 'submitForm']);
