<?php
namespace App\Http\Controllers;
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



Route::get('/', [AuthController::class,'home']);

Route::group(['middleware'=>'guest','controller'=>AuthController::class],function(){
    Route::post('/login', 'postLogin')->name('login');
    Route::get('/login', 'getLogin')->name('login');
});

Route::get('/logout',[AuthController::class,'logout'])->middleware('auth');

// Registration and User Profile
Route::resource('user', UserController::class)->except(['index', 'show', 'destroy']);

// Todo Resources
Route::resource('todo', TodoController::class);
