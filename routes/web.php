<?php

use Illuminate\Support\Facades\Route;
/* Connectie naar controller */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AboutusController;
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

Route::get('/', [HomeController::class, 'homepage'])->name('homepage');

/* Dashboard routes */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware(['auth'])->name('dashboard-profile');

/*Alle Todos paginas en functies*/

Route::get('/dashboard/todo', [TodoController::class, 'todooverzicht'])->middleware(['auth'])->name('dashboard-todo-overzicht');
Route::get('/dashboard/todo/create', [TodoController::class, 'todocreate'])->middleware(['auth'])->name('dashboard-todo-create');

Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/donate', [HomeController::class, 'donate'])->name('donate');

Route::get('/projecten', [HomeController::class, 'projecten'])->name('projecten');

Route::get('/vrijwilligers', [HomeController::class, 'vrijwilligers'])->name('vrijwilligers');
require __DIR__.'/auth.php';
