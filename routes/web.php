<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KateringController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route index
Route::get('/',[App\Http\Controllers\KateringController::class,'index'])->name('index');

Route::get('/index',[App\Http\Controllers\KateringController::class,'index'])->name('index');
Route::get('/about',[App\Http\Controllers\KateringController::class,'about'])->name('about');
Route::get('/menu',[App\Http\Controllers\KateringController::class,'menu'])->name('menu');
Route::get('/contact',[App\Http\Controllers\KateringController::class,'contact'])->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');