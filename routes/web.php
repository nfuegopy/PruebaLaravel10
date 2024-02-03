<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

DB::listen(function ($query) {
    dump($query->sql, $query->bindings);
});

Route::view('/','Welcome')->name('welcome');



Route::middleware('auth')->group(function () {
Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
Route::get('chirps', [ChirpController::class, 'index'])
->name('chirps.index');
Route::post('chirps',[ChirpController::class, 'store'])->name('chirps.store');
}); //Ruta creada manualmente para insertar en la BD

require __DIR__.'/auth.php';
