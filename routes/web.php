<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BookController;
use App\Http\Middleware\IsAdminMiddleware;
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
Route::group(['middleware' => IsAdminMiddleware::class], function(){});

    Route::get('/create', [BookController::class, 'getCreatePage'])->name('getCreatePage');

    Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

    Route::get('/update-book/{id}', [BookController::class, 'getBookById'])->name('getBookById');

    Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

    Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('delete');

Route::get('/', [LoginController::class, 'logout'])->name('logout');

Route::get('/s', [BookController::class, 'searchBook'])->name('search1');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');

Route::get('/get-my-books', [BookController::class, 'ViewMyBooks'])->name('ViewMyBooks');

Auth::routes();
