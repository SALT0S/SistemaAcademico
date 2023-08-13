<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('profile', 'UserProfileController');
Route::resource('usuarios', 'UserController');
Route::resource('materias', 'MateriasController');
Route::resource('modulos', 'ModulosController');
Route::resource('configuracion', 'ConfiguracionController');
Route::resource('docentes', 'DocentesController');
Route::resource('estudiantes', 'EstudiantesController');

Route::get('getusers', 'UserController@getusers')->name('getusers');


