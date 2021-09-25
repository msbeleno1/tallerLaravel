<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'show']);

Route::get('/users/form/{id}', [UserController::class, 'form'])->name('user.form');

Route::post('/users/save', [UserController::class, 'save'])->name('user.save');

Route::get('/users/form', [UserController::class, 'error_url']);
