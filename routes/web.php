<?php

use App\Http\Controllers\AlatController;
use App\Http\Controllers\BahanController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/alat', [AlatController::class, 'index'])->name('alat');
Route::post('/simpan-alat', [AlatController::class, 'store'])->name('input-alat');
Route::get('/edit-alat/{id}', [AlatController::class, 'edit'])->name('edit-alat');
Route::post('/update-alat/{id}', [AlatController::class, 'update'])->name('update-alat');
Route::get('/delete-alat/{id}', [AlatController::class, 'destroy'])->name('delete-alat');

Route::get('/bahan', [BahanController::class, 'index'])->name('bahan');
Route::post('/simpan-bahan', [BahanController::class, 'store'])->name('input-bahan');
Route::get('/edit-bahan/{id}', [BahanController::class, 'edit'])->name('edit-bahan');
Route::post('/update-bahan/{id}', [BahanController::class, 'update'])->name('update-bahan');
Route::get('/delete-bahan/{id}', [BahanController::class, 'destroy'])->name('delete-bahan');
