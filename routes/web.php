<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController as ComicsController;
use App\Http\Controllers\DetailsController as DetailsController;

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

Route::get('/', [ComicsController::class, 'index'])->name('dc_comics');

Route::get('/comics/{param}', [DetailsController::class, 'index'])->name('dettagli');