<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front/index');
});

Route::middleware(['auth', 'verified', 'role:super admin'])->prefix('/dashboard')->group(function () {
    
});
Route::middleware(['auth', 'verified', 'role:siswa'])->prefix('/dashboard')->group(function () {

});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa afirmasi'])->prefix('/dashboard')->group(function () {

});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa domisili'])->prefix('/dashboard')->group(function () {

});
Route::middleware(['auth', 'verified', 'role.sekolah:pemeriksa prestasi'])->prefix('/dashboard')->group(function () {

});

Route::middleware(['auth', 'verified', 'role.sekolah:admin afirmasi'])->prefix('/dashboard')->group(function () {

});
Route::middleware(['auth', 'verified', 'role.sekolah:admin domisili'])->prefix('/dashboard')->group(function () {

});
Route::middleware(['auth', 'verified', 'role.sekolah:admin prestasi'])->prefix('/dashboard')->group(function () {

});
require __DIR__ . '/auth.php';
