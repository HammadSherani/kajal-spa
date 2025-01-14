<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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





Route::get('/', function () {
    return view('website.index');
});


Route::get('/blog', function () {
    return view('website.blog.index');
});


Route::get('/blog/{slug}', function () {
    return view('website.blog.detail');
});

Route::get('/service', function () {
    return view('website.services.index');
});

Route::get('/contact', function () {
    return view('website.contact.index');
});
Route::get('/about', function () {
    return view('website.about.index');
});


require __DIR__.'/auth.php';
