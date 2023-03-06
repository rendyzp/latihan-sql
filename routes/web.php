<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, "index"]);
Route::get('/contact/{id}', [ContactController::class, "show"]);
Route::get('/post', [PostController::class, "index"]);
Route::get('/post/create', [PostController::class, "store"]);

Route::get('/siswa/create', [SiswaController::class, 'create']);
Route::post('/siswa/create', [SiswaController::class, 'store']);
Route::get('/siswa/index', [SiswaController::class, 'index']);

Route::get('siswa/{id}', [SiswaController::class, 'edit']);
Route::put('siswa/{id}', [SiswaController::class, 'update']);
