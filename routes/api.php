<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/motor-control', function(Request $request){
    $direction = $request->query('dir');
    return response()->json(['status'=>'Motor bergerak ke $direction']);
});

Route::get('imu-data', function(){
    return response()->json([
        'accel_x' => rand(-10,10),
        'accel_y' => rand(-10,10),
        'accel_z' => rand(-10,10),
        'gyro_x' => rand(-100,100),
        'gyro_y' => rand(-100,100),
        'gyro_z' => rand(-100,100),
    ]);
});
