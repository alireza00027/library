<?php

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

/**
 * userpanel
 */
Route::group(['prefix' => 'user', 'middleware' => ['web', 'auth']], function () {
    Route::get('/', [UserController::class, 'index'])->name('user.panel');
});
