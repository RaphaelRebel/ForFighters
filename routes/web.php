<?php

use Illuminate\Support\Facades\Route;
/* Connectie naar controller */
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectsController;
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
/*Dashboard doorsturen naar Admin */
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->middleware(['auth'])->name('dashboard-profile');

/*Alle Admin paginas en functies*/

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

    Route::get('/overzicht', [AdminController::class, 'adminoverzicht'])->name('admin-overzicht');

    // Project toevoegen (in de admin)
    Route::get('/create', [AdminController::class, 'admincreate'])->name('admin-create');
    Route::post('/create', [ProjectsController::class, 'inputcreation'])->name('project-store');

    Route::get('/aanpassen/{id}', [AdminController::class, 'adminedit'])->name('admin-edit');
    Route::post('/admin/opslaan/{id}', [AdminController::class, 'adminupdate'])->name('admin-update');
    /*Laat de single page van admin zien*/
    /* Hou deze route onderaan, zodat er niks door de id word gepakt */
    Route::get('/{id}', [AdminController::class, 'adminsingle'])->name('admin-single');
});
Route::get('/projects/{id}', [AdminController::class, 'projectsingle'])->middleware(['auth'])->name('project-single');

Route::get('/about-us', [HomeController::class, 'aboutus'])->name('aboutus');

Route::get('/donate', [HomeController::class, 'donate'])->name('donate');

Route::get('/projecten', [HomeController::class, 'projecten'])->name('projecten');

Route::get('/vrijwilligers', [HomeController::class, 'vrijwilligers'])->name('vrijwilligers');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

require __DIR__.'/auth.php';
