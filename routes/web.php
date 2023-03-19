<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ciudades", [CityController::class,"index"]);
Route::get("/ciudades/{id}", [CityController::class,"cityId"])->name('ciudadId');

Route::get("/paises", [CountryController::class,"index"]);
Route::get("/paises/{id}", [CountryController::class,"countryId"])->name('paisId');

// Rutas para register
Route::get('/register', [RegisterController::class,"show"])->name("register");
Route::post('/register', [RegisterController::class,"register"])->name("register");

// Rutas para login
Route::get('/login', [LoginController::class,"show"])->name("login");
Route::post('/login', [LoginController::class,"login"])->name("login");

Route::get('login/error', function () {
    return view('User/loginError');
});

// Rutas para logout
Route::get('/logout', [LogoutController::class, "logout"])->name("logout");