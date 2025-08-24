<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandingPageController;
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
Route::get('/', [LandingPageController::class, 'index']);
Route::get('/about-us', [LandingPageController::class, 'aboutUs']);
Route::get('/service', [LandingPageController::class, 'service']);
Route::get('/portofolio', [LandingPageController::class, 'portofolio']);
Route::get('/contact', [LandingPageController::class, 'contact']);
Route::get('/our-products', [LandingPageController::class, 'ourProducts']);

Route::prefix('cms')->name('cms.')->group(function () {
    // Dashboard
    Route::get('/', [HomeController::class, 'login'])->name('login');
    Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    Route::get('/portofolio', [HomeController::class, 'portofolio'])->name('portofolio');
    Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

  

    
});
