<?php

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


// ユーザ
Route::group(['middleware' => ['auth:user']], function() {
  Route::resource('user', 'User\UsersController');
});

Route::get('signup', 'User\Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'User\Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('user.login');
Route::post('login', 'User\Auth\LoginController@login')->name('user.login.post');
Route::get('logout', 'User\Auth\LoginController@logout')->name('user.logout.get');

// 管理者

Route::get('admin/login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
Route::get('admin/logout', 'Admin\Auth\LoginController@logout')->name('admin.logout.get');

Route::group(['middleware' => ['auth:admin']], function() {
  Route::resource('admin', 'Admin\HomeController');
});