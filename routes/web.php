<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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


Route::get('/', [ContactController::class, 'index']);
Route::post('/',[ContactController::class, 'index']);

Route::get('/search', [ContactController::class, 'getContact']);
//Route::get('/find', [ContactController::class, 'find']);
Route::post('/search', [ContactController::class, 'search']);

Route::post('/delete', [ContactController::class, 'remove']);
