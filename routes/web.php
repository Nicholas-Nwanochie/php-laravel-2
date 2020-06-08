<?php

use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/users/user/{id}', 'UserController@showuser');

Route::get('/users/create',  'UserController@createuser');

Route::post('/users/create',  'UserController@saveuser')->name('createuser');

Route::get('/users', 'UserController@showusers');

Route::get('/users/view/{id}', 'UserController@viewuser');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
