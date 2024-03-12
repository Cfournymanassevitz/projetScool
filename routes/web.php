<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
use App\Http\Controllers\MeowController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/meows', [MeowController::class, 'index'])
->name('meows.index');
Route::get('/meows/{id}', [MeowController::class, 'show']);



