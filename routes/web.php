<?php

use App\Http\Controllers\MainController;
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

Route::get('/',[MainController::class,'index'])
    ->name('index');

// route ricerca
Route::get('/santo/show/{id}', [MainController::class, 'santoShow'])
    ->name('santo.show');

// route cancellazione
Route::get('/santo/delete/{id}', [MainController::class, 'santoDelete'])
    ->name('santo.delete');

// route creazionhe
Route::get('/santo/create', [MainController::class,'santoCreate'])
    ->name('santo.create');
    
Route::post('/santo/add', [MainController::class , 'santoAdd'])
    ->name('santo.add');
