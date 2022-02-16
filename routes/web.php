<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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

Route::get('/users',[userController::class, 'showUser'] )->name('user.show');
Route::get('/users/add' , [userController::class, 'addUser'])->name('user.add');
Route::get('/users/update/{id}' , [userController::class, 'updateUser'])->name('user.update');
Route::get('/users/delete/{id}' , [userController::class, 'deleteUser'])->name('user.delete');

