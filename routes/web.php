<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/client', 'Auth\LoginController@showClientLoginForm');
Route::get('/login/serviceprovider', 'Auth\LoginController@showServiceproviderLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/client', 'Auth\RegisterController@showClientRegisterForm');
Route::get('/register/serviceprovider', 'Auth\RegisterController@showServiceproviderRegisterForm');


Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/client', 'Auth\LoginController@ClientLogin');
Route::post('/login/serviceprovider', 'Auth\LoginController@ServiceproviderLogin');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/client', 'Auth\RegisterController@createClient');
Route::post('/register/serviceprovider', 'Auth\RegisterController@createServiceprovider');

Route::view('/home', 'home')->middleware('auth');

Route::view('/admin', 'admin');
Route::view('/client', 'client');
Route::view('/Serviceprovider', 'Serviceprovider');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
