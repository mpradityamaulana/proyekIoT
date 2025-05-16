<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/pages/home', function(){
    return view('pages.home');
})->name('pages.home');

Route::get('/pages/about', function(){
    return view('pages.about');
})->name('pages.about');

Route::get('/pages/login', function(){
    return view('pages.login');
})->name('pages.login');

Route::get('/pages/register', function(){
    return view('pages.register');
})->name('pages.register');

Route::get('/pages/feature', function(){
    return view('pages.feature');
})->name('pages.feature');

Route::get('/pages/datahistory', function(){
    return view('pages.datahistory');
})->name('pages.datahistory');

Route::get('/pages/dashboard', function () {
    return view('pages.dashboard');
})->middleware(['auth', 'verified'])->name('pages.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
