<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [App\Http\Controllers\PagesController::class, 'dashboard'])->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('clients', ClientsController::class);
Route::resource('trackings', TrackingController::class);
Route::resource('packages', PackagesController::class);

Route::get('/admin/clients/search', [ClientsController::class, 'search'])->name('clients.search');