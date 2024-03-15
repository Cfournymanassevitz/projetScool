<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MeowsController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/', [MeowsController::class, 'index']);
    Route::get('/meows', [MeowsController::class, 'index'])->name('meows.index');
    Route::get('/meows/{id}', [MeowsController::class, 'show'])->name('meows.show');
    Route::get('/meows/{id}/edit', [MeowsController::class, 'edit'])->name('meows.edit');
    Route::post('/meows/{id}', [MeowsController::class, 'update'])->name('meows.update');
    Route::get('/meows/{id}/delete', [MeowsController::class, 'delete'])->name('meows.delete');

    Route::get('/meows/create', [MeowsController::class, 'create'])->name('meows.create');

});


require __DIR__ . '/auth.php';
