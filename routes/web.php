<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserModelController;

Route::get('/user/create', [UserModelController::class, 'create'])->name('user.create');
Route::post('/user', [UserModelController::class, 'store'])->name('user.store');
Route::get('/user/{id}', [UserModelController::class, 'show'])->name('user.show');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
