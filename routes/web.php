<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\trackPackageController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');
Route::get('/about', [App\Http\Controllers\PagesController::class, 'aboutUs'])->name('about-us');
Route::get('/track', [App\Http\Controllers\PagesController::class, 'trackPackage'])->name('track-package');
Route::get('/contact-us', [App\Http\Controllers\PagesController::class, 'contactUs'])->name('contact-us');


Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', ClientsController::class);
Route::resource('trackings', TrackingController::class);
Route::resource('packages', PackagesController::class);

Route::get('/admin/clients/search', [ClientsController::class, 'search'])->name('clients.search');

Route::post('/track-package', [trackPackageController::class, 'trackPackage'])
    ->name('user.tracking.search');