<?php

use App\Http\Controllers\RecordsController;
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

Route::get('/', [RecordsController::class, 'create'])
    ->name('records.create');
Route::post('/', [RecordsController::class, 'store'])
    ->name('records.store');
Route::get('/{hash}', [RecordsController::class, 'redirect'])
    ->name('records.redirect');
