<?php

// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\LocationSitemapController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;

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

Route::get('/', [HomeController::class, 'home'])->name('home');


Route::post('/email', [EmailController::class, 'sendEmail'])->name('email');

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap.index');
Route::get('/sitemap/pages.xml', function () {
    $content = view('sitemap.pages.index')->render();
    return response($content, Response::HTTP_OK)->header('Content-Type', 'text/xml');
})->name('sitemap.pages.index');
Route::get('/sitemap/locations.xml', [LocationSitemapController::class, 'index'])->name('sitemap.locations.index');

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
*/
Route::get('/{location}', [LocationController::class, 'show'])->name('location.show');
