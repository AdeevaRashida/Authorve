<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublishedController;
use App\Http\Controllers\FabricateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/published', [PublishedController::class, 'index'])->name('index');

// Route::get('/published/{id}', [PublishedController::class, 'show'])->name('show');

// Route::get('/published/data/create', [PublishedController::class, 'create'])->name('create');

// Route::post('/published', [PublishedController::class, 'store'])->name('store');

// Route::get('/published/{id}/edit', [PublishedController::class, 'edit'])->name('edit');

// Route::put('/published/{id}', [PublishedController::class, 'update'])->name('update');

// Route::delete('/published/{id}', [PublishedController::class, 'destroy'])->name('destroy');


Route::get('/', [PublishedController::class, 'index'])->name('index');

Route::get('/welcome', [HomeController::class, 'index'])->name('welcome');

Route::get('/create', [PublishedController::class, 'create'])->name('create');

Route::post('store/', [PublishedController::class, 'store'])->name('store');

// Route::get('show/{id}', [PublishedController::class, 'show'])->name('show');

Route::get('edit/{id}', [PublishedController::class, 'edit'])->name('edit');

Route::put('edit/{id}', [PublishedController::class, 'update'])->name('update');

Route::delete('/{id}', [PublishedController::class, 'destroy'])->name('destroy');



Route::get('/fabricate', [FabricateController::class, 'index'])->name('fabricate');

Route::get('/fabricate/create', [FabricateController::class, 'create'])->name('fcreate');

Route::get('/fabricate/{id}', [FabricateController::class, 'show'])->name('fshow');

Route::post('/fabricate', [FabricateController::class, 'store'])->name('fstore');

Route::get('/fabricate/{id}/edit', [FabricateController::class, 'edit'])->name('fedit');

Route::put('/fabricate/{id}', [FabricateController::class, 'update'])->name('fupdate');

Route::delete('/fabricate/{id}', [FabricateController::class, 'destroy'])->name('fdestroy');