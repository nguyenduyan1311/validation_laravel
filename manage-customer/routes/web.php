<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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
    return view('home');
});

//tao group route customers
Route::group(['prefix' => 'customers'], function () {
    Route::get('/',[\App\Http\Controllers\CustomerController::class,'index'])->name('customers.index');
    Route::get('/create',[\App\Http\Controllers\CustomerController::class,'create'])->name('customers.create');
    Route::post('/create',[\App\Http\Controllers\CustomerController::class,'store'])->name('customers.store');
    Route::get('/{id}/edit',[\App\Http\Controllers\CustomerController::class,'edit'])->name('customers.edit');
    Route::post('/{id}/edit',[\App\Http\Controllers\CustomerController::class,'update'])->name('customers.update');
    Route::get('/{id}/destroy',[\App\Http\Controllers\CustomerController::class,'destroy'])->name('customers.destroy');
});
