<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', function() {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.admin-login');
});


 Route::get('/maintenance', [PagesController::class, 'maintenance']);
 Route::get('/household', [PagesController::class, 'household']);
 Route::get('/amenities', [PagesController::class, 'amenities']);
 Route::get('/parking', [PagesController::class, 'parking']);
 Route::get('/complaints', [PagesController::class, 'complaints']);
// Route::get('/maintenance', function() {
//     return view('maintenance');
// });


// Route::get('/household', function() {
//     return view('pages.household');
// });

// Route::get('/amenities', function() {
//     return view('pages.amenities');
// });

// Route::get('/parking', function() {
//     return view('pages.parking');
// });

// Route::get('/complaints', function() {
//     return view('pages.complaints');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

