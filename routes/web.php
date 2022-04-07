<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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


Route::get("/" , [HomeController::class ,"index"]);
Route::get('/home' , [HomeController::class ,"redirect"]);

Route::get("/add_doctor_view" , [AdminController::class,"addView"]);

Route::post("/appointment" , [HomeController::class , "appointment"]);
Route::post("/doctor_add" ,  [AdminController::class,"upload"]);
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
