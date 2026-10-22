<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-koneksi', function () {
    try {
        DB::connection()->getPdo();
        return "DB berhasil connect";
    } catch (\Exception $e){
        return "DB gagal connect: " .  $e->getMessage();
    }

})->withoutMiddleware('web');

Route::get('/daftar-biodata', [BiodataController::class, 'daftar'])->name('biodata.daftar');
Route::get('/', [BiodataController::class, 'index'])->name('home');
Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');
Route::get('/biodata/{biodata}/edit', [BiodataController::class, 'edit'])->name('biodata.edit');
Route::put('/biodata/{biodata}', [BiodataController::class, 'update'])->name('biodata.update');
Route::delete('/biodata/{biodata}', [BiodataController::class, 'destroy'])->name('biodata.destroy');
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');