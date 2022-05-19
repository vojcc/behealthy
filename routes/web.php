<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MassController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WaterController;
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


Auth::routes();

Route::get('/', function() {
    return view('home');
});

Route::get('/mass', function() {
    return view('mass');
});

Route::get('/training', function() {
    return view('training');
});

Route::get('/water', function() {
    return view('water');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/', [UserController::class, 'store'])->name('userStore');



Route::get('/mass', [MassController::class, 'index'])->name('massGet');

Route::post('/mass', [MassController::class, 'massStore'])->name('massStore');


Route::get('/training', [TrainingController::class, 'index', ])->name('trainingGet');

Route::post('/training', [TrainingController::class, 'trainingStore'])->name('trainingStore');



Route::get('/water', [WaterController::class, 'index'])->name('waterGet');

Route::post('/water', [WaterController::class, 'waterStore'])->name('waterStore');
