<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TasksController;
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

Route::get('/',[TasksController::class,'tasks']);
Route::get('detail/{task:slug}',[TasksController::class,'task']);

Route::get('register',[RegisterController::class,'index'])->middleware('guest');
Route::post('register',[RegisterController::class,'store']);

Route::get('login',[LoginController::class,'index'])->middleware('guest');
Route::post('login',[LoginController::class,'authenticate']);
Route::post('logout',[LoginController::class,'logout']);