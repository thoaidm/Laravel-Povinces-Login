<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProvincesController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/provinces', [ProvincesController::class, 'index'])->name('provinces.index');
Route::get('/provinces/edit/{province}', [ProvincesController::class, 'edit'])->name('provinces.edit');
Route::post('/provinces/store', [ProvincesController::class, 'store'])->name('provinces.store');
Route::put('/provinces/update/{province}', [ProvincesController::class, 'update'])->name('provinces.update');
Route::get('/provinces/delete/{province}', [ProvincesController::class, 'delete'])->name('provinces.delete');
Route::get('/provinces/deleted', [ProvincesController::class, 'showDeleted'])->name('provinces.showDeleted');
Route::get('/provinces/unlock/{province}', [ProvincesController::class, 'unlock'])->name('provinces.unlock');
Route::get('/provinces/destroy/{province}', [ProvincesController::class, 'destroy'])->name('provinces.destroy');
/*
Route::get('/create',[ProductsController::class, 'create'])->name('create');
Route::post('/create',[ProductsController::class, 'store'])->name('store');
Route::get('/show/{id}',[ProductsController::class, 'show'])->name('show');
Route::put('/update', [ProductsController::class, 'update'])->name('update');
*/
