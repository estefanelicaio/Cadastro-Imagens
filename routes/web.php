<?php

use App\Http\Controllers\ImagemController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::view('/', [ImagemController::class, 'index']);

Route::post('/pesquisar', [ImagemController::class, 'pesquisa']);

Route::get('/download', [ImagemController::class, 'download']);

Route::view('/upload', 'imagem.upload');

Route::post('/enviar', [ImagemController::class, 'store']);
