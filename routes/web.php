<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;

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



Route::controller(HomeController::class)->group(function() {
    Route::get('/','home');
    Route::get('/search_page','search_page');

});

Route::controller(EmployeeController::class)->group(function() {
    Route::get('/create','create');
    Route::post('/create','store');
    Route::get('/{id}','delete');
    Route::get('/edit/{id}','edit');
    Route::post('/edit/{id}','update');
});
