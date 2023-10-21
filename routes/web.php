<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AverageController;
use App\Http\Controllers\UserController;


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
});

//average
Route::get('/dashboard',                   [AverageController::class, 'index'])->name('dashboard');
Route::get('/create',                      [AverageController::class, 'create'])->name('average.create');
Route::post('/insert',                     [AverageController::class, 'insert'])->name('average.insert');
Route::get('/{id}/edit',                   [AverageController::class, 'edit'])->name('average.edit');
Route::put('/{id}/update',                 [AverageController::class, 'update'])->name('average.update');
Route::delete('/{id}/delete',              [AverageController::class, 'delete'])->name('average.delete');

//contact
Route::get('/contact',                   [UserController::class, 'create'])->name('contact.create');
Route::post('/contact_insert',            [UserController::class, 'contact_insert'])->name('contact.contact_insert');


require __DIR__.'/auth.php';
