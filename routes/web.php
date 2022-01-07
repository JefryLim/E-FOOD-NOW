<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProductController;
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
})->name('welcome')->middleware('auth');

Route::get('/register', [AuthController::class, 'getRegister'])->name('register')->middleware('guest');
Route::post('/register', [AuthController::class, 'postRegister'])->middleware('guest');

Route::get('/login', [AuthController::class, 'getLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'postLogin'])->middleware('guest');

Route::get('/welcome', function(){
    return view('welcome');
})->name('welcome')->middleware('auth');

Route::get('/welcome', [ProductController::class, 'index'])->name('welcome')->middleware('auth');
Route::get('/welcome/{product_id}', [DetailsController::class, 'detailShow']);

Route::get('/about',function(){
    return view('about');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/add', [ProductController::class, 'insert']);

Route::post('/update', [ProductController::class, 'update']);

Route::post('/delete', [ProductController::class, 'delete']);
