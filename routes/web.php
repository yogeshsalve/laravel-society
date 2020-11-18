<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\contactusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\HomeController;
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

// Route::get('/admin', function() {
//     return view('admin.admin-login');
// });

Route::get('admin-dashboard', function() {
    return view('admin-dashboard');
});

Route::get('admin', [AdminController::class, 'admins']);

Route::post('admin-dashboard', [AdminController::class, 'addAdmin']);



// Route::get('/contactus', function() {
//     return view('contactus');
// });

// Route::view('contactus', 'contactus');



 Route::get('/maintenance', [PagesController::class, 'maintenance']);
 Route::get('/household', [PagesController::class, 'household']);
 Route::get('/amenities', [PagesController::class, 'amenities']);
 Route::get('/parking', [PagesController::class, 'parking']);
 Route::get('/complaints', [PagesController::class, 'complaints']);
 Route::get('/contactus', [contactusController::class, 'contactus']);

 Route::get('visitors', [VisitorController::class, 'visitors']); 
 Route::post('visitors',[VisitorController::class, 'addData']); 
 Route::get('visitor_list',[VisitorController::class, 'show']); 

// route to display visitors on homepage
Route::get('/home',[HomeController::class, 'todaysvisitors'])->name('visitor.list'); 

 
 Route::post('contactus', [contactusController::class, 'addContact']);

 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');









