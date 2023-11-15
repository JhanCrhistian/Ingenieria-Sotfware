<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ResponsableController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\FechaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\AtraccionController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ResetPasswordController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/registro', [RegisterController::class, 'showRegistrationForm'])->name('registro');
Route::post('/registro', [RegisterController::class, 'register']);
Route::get('/inicio-sesion', [LoginController::class, 'showLoginForm'])->name('inicio-sesion');
Route::post('/inicio-sesion', [LoginController::class, 'login']);
Route::post('/cerrar-sesion', [LoginController::class, 'logout'])->name('cerrar-sesion');
Route::get('/restablecer-contrasena', [ResetPasswordController::class, 'showLinkRequestForm'])->name('restablecer-contrasena');
Route::post('/restablecer-contrasena', [ResetPasswordController::class, 'sendResetLinkEmail']);
Route::get('/restablecer-contrasena/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/restablecer-contrasena', [ResetPasswordController::class, 'reset']);


// Rutas para el controlador UsuarioController
Route::get('/usuarios', [UsuarioController::class, 'index']);
Route::get('/usuarios/registrar', [UsuarioController::class, 'registrar']);
Route::post('/usuarios/guardar', [UsuarioController::class, 'guardar']);
Route::get('/usuarios/login', [UsuarioController::class, 'login']);
Route::post('/usuarios/autenticar', [UsuarioController::class, 'autenticar']);

// Rutas para el controlador ResponsableController
Route::resource('responsables', ResponsableController::class);
Route::post('/responsables', [ResponsableController::class, 'store'])->name('responsables.store');

// Rutas para el controlador HotelController
Route::resource('hoteles', HotelController::class);

// Rutas para el controlador FechaController
Route::resource('fechas', FechaController::class);

// Rutas para el controlador CategoriaController
Route::resource('categorias', CategoriaController::class);

// Rutas para el controlador AtraccionController
Route::resource('atracciones', AtraccionController::class);
