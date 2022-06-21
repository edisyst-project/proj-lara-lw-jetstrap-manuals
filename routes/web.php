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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/adminlte', function () {
        return view('adminlte');
    })->name('adminlte');
    Route::get('/manuals', function () {
        return view('manuals.index');
    })->name('manuals.index');

    Route::resource('/posts', \App\Http\Controllers\PostController::class);
//    ->only(['index, show']);

    Route::resource('products', \App\Http\Controllers\ProductController::class);
//    ->only(['index, create, edit']);

    Route::view('users', 'users.index')->name('users.index');

    // Livewire Todo Application Routes
    Route::get('todos', function(){
        return view('todos.index', []);
    })->name('todos.index');

});
