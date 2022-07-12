<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanLiHSController;
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

Route::prefix('quanli')->name('quanli.')->group(function(){
    Route::get('index', [QuanLiHSController::class, 'index'])->name('index');

    Route::get('create', [QuanLiHSController::class, 'create'])->name('create');
    Route::post('store', [QuanLiHSController::class, 'store'])->name('store');

    Route::get('edit/{id}', [QuanLiHSController::class, 'edit'])->name('edit')->where('id','[0-9]+');
    Route::post('update/{id}', [QuanLiHSController::class, 'update'])->name('update')->where('id','[0-9]+');


    Route::get('delete/{id}', [QuanLiHSController::class, 'delete'])->name('delete')->where('id','[0-9]+');
});`