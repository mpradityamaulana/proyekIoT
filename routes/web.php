<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileUpdateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KontrolController;
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

Route::get('/pages/register', function(){
    return view('pages.register');
})->name('pages.register');

Route::get('/pages/feature', function(){
    return view('pages.feature');
})->name('pages.feature');

Route::get('/pages/datahistory', function(){
    return view('pages.datahistory');
})->middleware(['auth', 'verified'])->name('pages.datahistory');

Route::get('/pages/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('pages.dashboard');

Route::get('/pages/control', function () {
    return view('pages.control');
})->middleware(['auth', 'verified'])->name('pages.control');


Route::middleware(['auth'])->group(function () {
    Route::get('/pages/editprofile', [ProfileUpdateController::class, 'editProfile'])->name('pages.editprofile');
    Route::post('/pages/updateprofile', [ProfileUpdateController::class, 'updateProfile'])->name('pages.updateprofile');
});

Route::get('/api/dashboard-data', function() {
    $data = \App\Models\SensorData::latest()->first();
    return response()->json($data);
});


Route::get('/pages/teskontrol', [KontrolController::class, 'index']);
Route::post('/api/control',[KontrolController::class, 'update']);


require __DIR__.'/auth.php';
