<?php

use App\Http\Controllers\PostControllers;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/home', [PostControllers::class, 'home'])->name('home');
Route::post('/store', [PostControllers::class, 'store'])->name('store');

Route::get('/mypost', [PostControllers::class, 'mypost'])->name('mypost');

Route::get('/create', [PostControllers::class, 'create'])->name('create');

Route::get('/show/{id}', [PostControllers::class, 'show'])->name('show');

Route::delete('/{id}',[PostControllers::class, 'destroy'])->name('delete');

Route::get('/{post}',[PostsController::class, 'edit'])->name('edit');
Route::put('/{id}',[PostsController::class, 'update'])->name('update');
