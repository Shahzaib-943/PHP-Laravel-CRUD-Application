<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;

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

Route::get('/',[dataController::class,'index']);
Route::get('/form',[dataController::class,'form_store']);
Route ::post('/register',[dataController::class ,'store']); 
// ->name('store');
//Route::get('/disp',[dataController::class,'show']);
Route::get('/display',[dataController::class,'update']);
Route::get('/delete/{id}',[datacontroller::class,'delete_data']);
Route::get('/update/{id}',[dataController::class,'edit_data']);
Route::post('/edit/{id}',[dataController::class,'edit']);
