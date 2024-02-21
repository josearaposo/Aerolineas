<?php

use App\Http\Controllers\AeropuertoController;
use App\Http\Controllers\CompanyaController;
use App\Http\Controllers\VueloController;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::resource('companyas', CompanyaController::class);
Route::resource('aeropuertos', AeropuertoController::class);
Route::resource('vuelos', VueloController::class);

require __DIR__.'/auth.php';
