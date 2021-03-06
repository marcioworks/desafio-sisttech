<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PostController::class, 'index'])->name('home');
Route::get('post/create', [App\Http\Controllers\PostController::class, 'create'])->name('create');
Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('post/{post}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('editar');
Route::get('post/{post}', [App\Http\Controllers\PostController::class, 'show'])->name('show');
Route::put('post/{post}', [App\Http\Controllers\PostController::class, 'update'])->name('atualizar');
Route::delete('post/{post}', [App\Http\Controllers\PostController::class, 'destroy'])->name('deletar');
