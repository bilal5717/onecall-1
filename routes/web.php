<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SeoController;
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

// Home Page
Route::get('/', [PageController::class, 'home'])->name('home');

// Main Pages
Route::prefix('')->group(function () {
    Route::get('/about', [PageController::class, 'about'])->name('about');
    Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
    Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
    Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
    Route::get('/terms', [PageController::class, 'terms'])->name('terms');
    Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap.page');
});

// Services Routes
Route::prefix('services')->name('services.')->group(function () {
    Route::get('/', [ServiceController::class, 'index'])->name('index');
});

// Individual Service Pages
Route::prefix('')->group(function () {
    Route::get('/ac-ventilation', [ServiceController::class, 'acVentilation'])->name('services.ac-ventilation');
    Route::get('/aluminum-glass-work', [ServiceController::class, 'aluminumGlass'])->name('services.aluminum-glass-work');
    Route::get('/cctv-cameras', [ServiceController::class, 'cctvCameras'])->name('services.cctv-cameras');
    Route::get('/electric-work-in-dubai', [ServiceController::class, 'electrical'])->name('services.electric-work-in-dubai');
    Route::get('/gypsum-partition-ceiling-work-in-dubai', [ServiceController::class, 'partitionCeiling'])->name('services.gypsum-partition-ceiling-work-in-dubai');
    Route::get('/painting', [ServiceController::class, 'painting'])->name('services.painting');
    Route::get('/plumber-work-in-dubai', [ServiceController::class, 'plumber'])->name('services.plumber-work-in-dubai');
    Route::get('/tesla-charging', [ServiceController::class, 'teslaCharging'])->name('services.tesla-charging');
    Route::get('/tiling-in-dubai', [ServiceController::class, 'tiling'])->name('services.tiling-in-dubai');
});

// SEO Routes
Route::get('/robots.txt', [SeoController::class, 'robots'])->name('robots');
Route::get('/sitemap.xml', [SeoController::class, 'sitemap'])->name('sitemap');