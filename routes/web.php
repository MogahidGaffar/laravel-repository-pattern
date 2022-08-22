<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/users',[UserController::class,'getAllpage'])->name('users.getAllpage');
Route::get('/users/create',[UserController::class,'getCreatepage'])->name('users.getCreatepage');
Route::get('/users/edit/{userId}',[UserController::class,'getEditpage'])->name('users.getEditpage');
Route::post('/users',[UserController::class,'createOne'])->name('users.createOne');
Route::post('/users/{userId}',[UserController::class,'UpdateOne'])->name('users.UpdateOne');
Route::delete('/users/{userId}',[UserController::class,'RemoveOne'])->name('users.RemoveOne');
