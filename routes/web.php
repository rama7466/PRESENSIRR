<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AbsenController;
use App\Http\Controllers\PulangController;
use Laravel\Jetstream\Role;

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
Route::get('home', function () {
    return view('layout.main');
});
Route::get('home', function () {
    return view('layout.master');
});
Route::get('home', function () {
    return view('layout.links');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



route::get('redirects', 'App\Http\Controllers\HomeController@index');
Route::resource('rayon', RayonController::class)->middleware('auth');
Route::resource('rombel', RombelController::class)->middleware('auth');
Route::resource('students', StudentController::class)->middleware('auth');
Route::resource('absen', AbsenController::class)->middleware('auth');
Route::resource('pulang', PulangController::class)->middleware('auth');
