<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\LigneController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LocationbusController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\PlanningsController;
use App\Http\Controllers\VoyageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EnvoiController;
use App\Http\Controllers\TrajectController;


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
//Route::get('/', function () {
 //   return view('welcome');
//}); 
Route::get('/', [ReservationController::class, 'index'])->name('welcome.index');
Route::get('/envoi', [ReservationController::class, 'charo'])->name('envoi.index');
//Route::get('/', [ReservationController::class, 'search'])->name('welcome.search');

Route::get('/apropos', function () {
    return view('apropos');
});
Route::get('/loc', [LocationbusController::class, 'Bus'])->name('locations.bus');
//Route::get('/loc', [MessageController::class, 'create'])->name('locations.create');
Route::post('/loc', [LocationbusController::class, 'store'])->name('locations.store');
// Route::get('/envoi', function () {
//     return view('envoi');
// });


// Route::get('/infos', function () {
//     return view('infos');
// });
//Route::get('', [TrajectController::class, 'app'])->name('infos.app');
Route::get('/infos/{id}', [TrajectController::class, 'app'])->name('infos.app');
Route::get('/paiement/{id}', [TrajectController::class, 'add'])->name('paiement.add');
// Route::get('/paiement', function () {
//     return view('paiement');
// });



Route::get('/admin/edit', [UserController::class,'edit'])->name('user.edit');
Route::put('/admin/update', [UserController::class,'update'])->name('user.update');

Route::get('/locationbus', function () {
    return view('locationbus');
});

Route::get('/erreurligne', function () {
    return view('erreurligne');
});

Route::get('/voyages', [TrajectController::class, 'index'])->name('trajets.index');
Route::get('/voyages/{id}', [TrajectController::class, 'show'])->name('trajets.show')->middleware('auth');

Route::get('/nana', function () {
    return view('nana');
});

Route::get('/locations', [LocationbusController::class, 'index'])->name('locations.index');
Route::get('/detail-locations/{id}', [LocationbusController::class, 'show'])->name('locations.detail')->middleware('auth');


Route::get('/location', [LocationbusController::class, 'index'])->name('location.index');

//messages
Route::get('/admin/message', [MessageController::class, 'index'])->name('message.index');
Route::delete('/admin/message/{id}', [MessageController::class, 'destroy'])->name('message.destroy');
//contacte
Route::get('/contact', [MessageController::class, 'create'])->name('contact.create');
Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');
//
Route::get('admin/user/liste', [UserController::class, 'index'])->name('user.index');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/admin/user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/admin/edit/{id}', [UserController::class,'edit'])->name('user.edit');
Route::put('/admin/update/{id}', [UserController::class,'update'])->name('user.update');

Route::get('/admin/user/bloquer/{id}', [UserController::class, 'block'])->name('user.bloquer');
Route::get('/admin/user/debloquer/{id}', [UserController::class, 'unblock'])->name('user.debloquer');



Auth::routes();
//route chauffeur
Route::get('/chauffeur/index', [ChauffeurController::class, 'index'])->name('index')->middleware('chauffeur');
Route::get('/chauffeur/edit', [UserController::class,'edite'])->name('chauffeur.edit');
Route::put('/chauffeur/update', [UserController::class,'updated'])->name('user.updated');



//route admin
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('admin');

Route::get('/admin/bus/liste', [BusController::class,'index'])->name('bus.liste');
Route::get('/admin/bus/create', [BusController::class,'create'])->name('bus.create');
Route::post('/admin/bus/create', [BusController::class,'store'])->name('bus.store');
Route::get('/admin/bus/edit/{id}', [BusController::class,'edit'])->name('bus.edit');
Route::put('/admin/bus/update/{id}', [BusController::class,'update'])->name('bus.update');
Route::get('admin/bus/destroy/{id}', [BusController::class,'destroy'])->name('bus.destroy');

Route::get('/admin/ligne/liste', [LigneController::class,'index'])->name('ligne.liste');
Route::get('/admin/ligne/create', [LigneController::class,'create'])->name('ligne.create');
Route::post('/admin/ligne/store', [LigneController::class,'store'])->name('ligne.store');
Route::get('/admin/ligne/edit/{id}', [LigneController::class,'edit'])->name('ligne.edit');
Route::put('/admin/ligne/update/{id}', [LigneController::class,'update'])->name('ligne.update');
Route::get('/destroy/{id}', [LigneController::class,'destroy'])->name('ligne.destroy');

Route::get('/admin/reservation/liste', [VoyageController::class,'index'])->name('voyage.liste');

Route::get('/admin/envoi/liste', [EnvoiController::class,'index'])->name('envoi.liste');

Route::get('/admin/location/liste', [LocationController::class,'index'])->name('locations.liste');

Route::get('/admin/planning/liste', [PlanningsController::class,'index'])->name('planning.liste');
Route::get('/admin/planning/create', [PlanningsController::class,'create'])->name('planning.create');
Route::post('/admin/planning/store', [PlanningsController::class,'store'])->name('planning.store');
Route::get('admin/planning/edit/{id}', [PlanningsController::class,'edit'])->name('planning.edit');
Route::get('admin/planning/update/{id}', [PlanningsController::class,'update'])->name('planning.update');
Route::get('admin/planning/destroy/{id}', [PlanningsController::class,'destroy'])->name('planning.destroy');
