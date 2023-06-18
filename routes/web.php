<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ukmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\PengumumanController;

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

route::get('/',[BeritaController::class, 'index']);
route::get('/upload/berita',[BeritaController::class, 'upload']);
route::post('/upload/berita',[BeritaController::class, 'store']);
route::get('/berita/{id}',[BeritaController::class, 'show']);
route::post('/berita/{id}',[BeritaController::class, 'destroy']);

Route::get('/search/results', [App\Http\Controllers\SearchController::class, 'search'])->name('search.results');
Route::get('/ukm/results', [App\Http\Controllers\SearchController::class, 'searchukm'])->name('ukm.results');

route::get('/upload/ukm',[ukmController::class, 'upload']);
route::post('/upload/ukm',[ukmController::class, 'tambah']);

route::get('/upload/pengumuman',[pengumumanController::class, 'upload']);
route::post('/upload/pengumuman',[pengumumanController::class, 'store']);

Route::get('/daftar', [App\Http\Controllers\RegisterController::class, 'index']);
Route::post('/daftar', [App\Http\Controllers\RegisterController::class, 'store']);

route::get('/login',[LoginController::class, 'index'])->middleware('guest');
route::post('/login',[LoginController::class, 'authenticate']);
route::post('/logout',[LoginController::class, 'logout']);

route::get('/ukm',[UkmController::class, 'index']);
route::get('/ukm/{id}',[UkmController::class, 'show']);
route::post('/ukm/{id}',[UkmController::class, 'destroy']);
route::get('/ukm/daftar/{id}',[UkmController::class, 'create']);
route::post('/ukm',[UkmController::class, 'store']);

route::get('/pengumuman',[pengumumanController::class, 'index']);
route::get('/pengumuman/{id}',[pengumumanController::class, 'show']);
route::post('/pengumuman/{id}',[pengumumanController::class, 'destroy']);


route::get('/profile',[UserController::class, 'index']);
route::post('/profile',[UserController::class, 'update']);
route::get('/profile/edit',[UserController::class, 'edit'])->name('profile.edit');

Route::get('/tes', function () {
    return view('tes.index');
});