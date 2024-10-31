<?php

use App\Http\Controllers\PhoneController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/', [PhoneController::class, 'index']);
Route::get('/contact/{id}' , [PhoneController::class, 'show']);
Route::post('/', [PhoneController::class, 'store']);

Route::post('/phone', [PhoneController::class, 'store']);
