<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;

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
Auth::routes();




Route::get('/mobil/add', function () {
    return view('mobil.formadd');
});


Route::get('/profile/{id}', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');


Route::resource('mobil', MobilController::class);

Route::resource('profile', HomeController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
