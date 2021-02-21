<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

//Route::get('/', 'App\Http\Controllers\MainController@home');
Route::get('/', [MainController::class, 'home']);

//Route::get('/about','App\Http\Controllers\MainController@about');
Route::get('/about', [MainController::class, 'about']);

Route::get('/review', [MainController::class, 'review'])->name('review');

Route::post('/review/check', [MainController::class, 'review_check']);

Route::get('/test.php', function () {
    return view('test');
});

//Route::get('/user/{id}/{name}', function ($id, $name){
//    return 'ID: '.$id.' Name: '.$name;
//});
