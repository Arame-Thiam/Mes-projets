<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\MessageController;


 
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
//route client
Route::get('/', function () {
    return view('welcome');
});


//contacte

Route::get('/contact', [MessageController::class, 'create'])->name('contact.create');
Route::get('/contact', [MessageController::class, 'store'])->name('contact.store');
//
Route::get('/admin/user', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::delete('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/admin/edit/{id}', [UserController::class,'edit'])->name('user.edit');
Route::put('/admin/update/{id}', [UserController::class,'update'])->name('user.update');


Auth::routes();
//route chauffeur
Route::get('/chauffeur/index', [App\Http\Controllers\ChauffeurController::class, 'index'])->name('chauffeur.index');






//route admin
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/bus/liste', [BusController::class,'index'])->name('bus.liste');
Route::get('/admin/bus/create', [BusController::class,'create'])->name('bus.create');
Route::post('/admin/bus/create', [BusController::class,'store'])->name('bus.store');
Route::get('/admin/bus/edit/{id}', [BusController::class,'edit'])->name('bus.edit');
Route::put('/admin/bus/update/{id}', [BusController::class,'update'])->name('bus.update');
Route::get('/destroy/{id}', [BusController::class,'destroy'])->name('bus.destroy');

Route::get('/admin/ligne/liste', [LigneController::class,'index'])->name('ligne.liste');
Route::get('/admin/ligne/create', [LigneController::class,'create'])->name('ligne.create');
Route::post('/admin/ligne/store', [LigneController::class,'store'])->name('ligne.store');
Route::get('/admin/ligne/edit/{id}', [LigneController::class,'edit'])->name('ligne.edit');
Route::put('/admin/ligne/update/{id}', [LigneController::class,'update'])->name('ligne.update');
Route::get('/destroy/{id}', [LigneController::class,'destroy'])->name('ligne.destroy');
