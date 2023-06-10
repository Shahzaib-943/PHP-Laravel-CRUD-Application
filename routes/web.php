<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
use App\Http\Controllers\HttpController;

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
Route::get('apimenu',[HttpController::class,'apimenu']); 
Route::get('apidata1',[HttpController::class,'apidata1']); 
Route::get('apidata2',[HttpController::class,'apidata2']); 
// ->name('store');
//Route::get('/disp',[dataController::class,'show']);
Route::get('/display',[dataController::class,'show']);

Route::get('/login',[dataController::class,'login']);




Route::get('/delete/{id}',[datacontroller::class,'delete_data']);
Route::get('/update/{id}',[dataController::class,'edit_data']);
Route::post('/edit/{id}',[dataController::class,'edit']);
Route::get('apidatastore',[HttpController::class,'apidatastore']);
