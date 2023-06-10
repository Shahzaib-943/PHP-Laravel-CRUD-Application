<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('showdata',[ApiController ::class, 'show' ]);
Route::post('storedata',[ApiController ::class, 'store' ]);
Route::get('deletedata/{id}',[APiController::class,'delete']);
Route::post('updatedata/{id}',[APiController::class,'update']);
