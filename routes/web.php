<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('website.app');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::resource('blogs', BlogController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





Route::get('/', [WebController::class, 'index']);
Route::get('/blog', [WebController::class, 'blog']);
Route::get('/blog/{slug}', [WebController::class, 'show']);
Route::get('/service', [WebController::class, 'service']);
Route::get('/contact', [WebController::class, 'contact']);
Route::get('/about', [WebController::class, 'about']);












require __DIR__.'/auth.php';
