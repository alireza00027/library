<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
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



Auth::routes();

Route::get('/', [MainController::class, 'index'])->name('main');
Route::get('/books-list', [MainController::class, 'books'])->name('books');

/**
 * userpanel
 */
Route::group(['prefix' => 'user', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.panel');
    Route::post('/{user}/update', [UserController::class, 'update'])->name('user.update');
});

/**
 * books routes
 */
Route::prefix('books')->group(function () {
    Route::get('/{category}', [BookController::class, 'list'])->name('books.list');
    Route::get('/{book}/reserve', [BookController::class, 'reserve'])->name('books.reserve');
    Route::get('books/{book}/show', [BookController::class, 'show'])->name('books.show');

    Route::post('/store', [BookController::class, 'store'])->name('books.store')->middleware(['web', 'auth']);
    Route::get('/{book}/edit', [BookController::class, 'edit'])->name('books.edit')->middleware(['web', 'auth']);
    Route::post('/{book}/update', [BookController::class, 'update'])->name('books.update')->middleware(['web', 'auth']);
    Route::get('/{book}/download', [BookController::class, 'download'])->name('books.download');
});
Route::get('book/add', [BookController::class, 'create'])->middleware(['web', 'auth'])->name('books.add');
