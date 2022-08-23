<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\RedirectedController;

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
    return view('content.auth.login');
});

Auth::routes();

Route::post('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



Route::get('/categories', [CategoriesController::class, 'category'])->name('category');
Route::post('/insertdata', [CategoriesController::class, 'insertdata']);

Route::get('/articles', ArticlesController::class, 'article')->name('article');
