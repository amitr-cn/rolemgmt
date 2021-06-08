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


Route::get('/login', 'Admin\LoginController@showLogin')->name('login');
Route::post('/login', 'Admin\LoginController@loginCheck');
Route::get('/register', 'MainController@showRegister')->name('register');
Route::get('/home', 'MainController@index')->name('home');
