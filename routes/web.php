<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\PublisherController;
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
Route::get('/', [BookController::class, 'index']);
Route::get('/index', [BookController::class, 'index']);

Route::get('/contact', function (){
    return view('contact');
});
Route::get('/category/{id}', [categoryController::class, 'showCategory']);

Route::get('/bookdetail/{id}', [BookController::class, 'showBookDetails']);

Route::get('/publisher/{id}', [PublisherController::class, 'showPublisher']);
