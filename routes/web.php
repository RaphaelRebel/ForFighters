<?php

use Illuminate\Support\Facades\Route;
/* Connectie naar controller */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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


Route::get('/groet/{name}', function ($name) {
    return view('welcome', ['name' => $name]);
});

Route::get('/', [HomeController::class, 'homepage']);

/* Dashboard routes */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware(['auth'])->name('dashboard-profile');



require __DIR__.'/auth.php';
