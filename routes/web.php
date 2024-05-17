<?php

use App\Http\Controllers\MoviesController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MoviesController::class, 'index'])->name('index');
Route::get('movie-list', [MoviesController::class, 'movieList'])->name('movie-list');
Route::get('detail',[MoviesController::class, 'show'])->name('detail');
Route::get('movie-ticket-plan',[MoviesController::class, 'ticket'])->name('ticket');
Route::get('movie-seat-plan',[MoviesController::class, 'seat'])->name('seat');
Route::get('popcorn',[MoviesController::class, 'popcorn'])->name('popcorn');
Route::get('movie-checkout',[MoviesController::class, 'checkout'])->name('checkout');
Route::get('form-sign-up',[MoviesController::class, 'FormSignUp'])->name('FormSignUp');
Route::get('form-sign-in',[MoviesController::class, 'FormSignIn'])->name('FormSignIn');
