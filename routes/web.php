<?php

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

Route::get('/dashboard','App\Http\Controllers\ViewController@index')->middleware(['auth'])->name('dashboard');
require __DIR__.'/auth.php';


Route::get('/form', function () {
    return view('form');
});
Route::get('/users','App\Http\Controllers\ViewController@users');

Route::get('/user-register', function () {
    return view('register');
});
Route::post('/user-register','App\Http\Controllers\ViewController@userregister');
Route::post('/store','App\Http\Controllers\ViewController@create');
Route::get('/show/{id}','App\Http\Controllers\ViewController@show');
Route::get('/edit/{id}','App\Http\Controllers\ViewController@edit');
Route::post('/update/{id}','App\Http\Controllers\ViewController@update')->name('update');
Route::get('/destroy/{id}','App\Http\Controllers\ViewController@destroy');
Route::get('/restore/{id}','App\Http\Controllers\ViewController@restore');
Route::get('/viewDeleted','App\Http\Controllers\ViewController@viewDeletes');
Route::get('/forceDelete/{id}','App\Http\Controllers\ViewController@forceDelete');

