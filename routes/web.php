<?php

use App\Http\Controllers\MapelController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mata_pelajaran', [App\Http\Controllers\MapelController::class, 'allMapel'])->name('index');
Route::get('/soal/{id}', [App\Http\Controllers\MapelController::class, 'detailMapel'])->name('index');
Route::get('/detail_soal/{id}', [App\Http\Controllers\MapelController::class, 'detailSoal']);
Route::post('/tambahOpsi/{id}', [App\Http\Controllers\MapelController::class, 'tambahOpsi']);
Route::post('/tambahSoal/{id}', [App\Http\Controllers\MapelController::class, 'tambahSoal']);
Route::get('/siswa_asigment/{id}', [App\Http\Controllers\MapelController::class, 'asignSiswa']);
Route::post('/tambahAssesment/{id}', [App\Http\Controllers\MapelController::class, 'asignSiswaPost']);
// Route::get('/detail_soal', [App\Http\Controllers\MapelController::class, 'soal']);
Route::post('/insert_opsi', [MapelController::class, 'InsertOpsi']);
// siswa
Route::get('/siswa-mapel/', [App\Http\Controllers\SiswaController::class, 'siswaMapel']);
Route::post('/jawabanStartUjian/{id}', [App\Http\Controllers\SiswaController::class, 'jawabanStartUjian']);
Route::post('/formExam/{id}', [App\Http\Controllers\SiswaController::class, 'formExam']);
