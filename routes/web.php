<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VisitorController;

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

 Route::get('visitors', [VisitorController::class, 'visitors']);
 
 Route::post('visitors',[VisitorController::class, 'addData']);
 Route::get('visitor_list',[VisitorController::class, 'show']);   



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::view('/visitors/vistor_list');

