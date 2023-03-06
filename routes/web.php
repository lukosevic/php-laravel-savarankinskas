<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MasterController;

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

Route::get('/', [ServiceController::class,'index']);
Route::get('/add-service', [ServiceController::class,'addService']);
Route::post('/storeService', [ServiceController::class, 'store']);

Route::get('/', [MasterController::class,'index']);
Route::get('/add-master', [MasterController::class,'addMaster']);
Route::post('/storeMaster', [MasterController::class, 'store']);
Route::get('/master/delete/{master}', [MasterController::class, 'delete']);
