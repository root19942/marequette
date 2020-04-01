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

use App\User;
use App\Requete;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/user_detail','user_detail@index')->name('user_detail')->middleware('auth');
Route::get('/accueil', 'HomeController@accueil')->name('accueil')->middleware('auth');
Route::get('/requete','requettes@view')->name('requete')->middleware('auth');
Route::post('/requete', 'requettes@getrequette')->name('accueil');
Route::get('/historique','historique@index')->name('historique')->middleware('auth');
Route::post('/add_requete','requettes@postrequete')->name('add_requete')->middleware('auth');
Route::post('/update_user','user_detail@update')->name('update_user')->middleware('auth');
Route::get('connect-admin', 'LoginAdminController@showLoginForm')->name('login-admin');
Route::post('connect-admin', 'LoginAdminController@login')->name('login-admin');
Route::post('register-admin', 'LoginAdminController@store')->name('register-admin');
Route::get('register-admin', 'LoginAdminController@create')->name('register-admin');
//Route::get('logout-admin', 'LoginAdminController@logout')->name('logout-admin');
Route::post('connectout-admin', 'LoginAdminController@logout')->name('logout-admin');
