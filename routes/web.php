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


// Route::get('/login', 'Admin\LoginController@showLogin')->name('login');
// Route::post('/login', 'Admin\LoginController@loginCheck');
// Route::get('/register', 'MainController@showRegister')->name('register');
// Route::get('/home', 'MainController@index')->name('home');


Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/add-roles', 'HomeController@viewRoles')->name('viewroles');
Route::post('/add-roles', 'HomeController@addRoles');
Route::post('/update-roles', 'HomeController@addRoles');
Route::post('/delete-roles', 'HomeController@addRoles');

Route::get('/add-permissions', 'HomeController@viewPermissions')->name('viewpermissions');
Route::post('/add-permissions', 'HomeController@addPermissions');
Route::post('/update-permissions', 'HomeController@addPermissions');
Route::post('/delete-permissions', 'HomeController@addPermissions');

Route::get('/add-user', 'HomeController@viewUser')->name('viewuser');
Route::get('/add-user-details', 'HomeController@viewUserDetails')->name('adduserdetails');
Route::post('/add-user-details', 'HomeController@addUserDetails');



