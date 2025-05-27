<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\SensorData;

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

Route::post('/send-data', function(Request $request){
    $data = SensorData::create([
        'status_sistem' => $request->status_sistem,
        'posisi_sumbu' => $request->posisi_sumbu,
        'kecepatan' => $request->kecepatan,
        'beban' => $request->beban,
        'kemiringan' => $request->kemiringan,
    ]);

    return response()->json(['message' => 'Data received', 'data' => $data], 201);
});
