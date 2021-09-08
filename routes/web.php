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

Route::get('/', 'User\UsersController@index');
Route::get('/animals', 'AnimalsController@index')->name('animals.index');

// ユーザ
Route::get('signup', 'User\Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'User\Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'User\Auth\LoginController@showLoginForm')->name('user.login');
Route::post('login', 'User\Auth\LoginController@login')->name('user.login.post');
Route::get('logout', 'User\Auth\LoginController@logout')->name('user.logout.get');

Route::group(['middleware' => ['auth:user']], function() {
  Route::group(['prefix'=>'animals/{id}'], function() {
    Route::post('favorite', 'FavoritesController@store')->name('favorites.favorite');
    Route::delete('unfavorite', 'FavoritesController@destroy')->name('favorites.unfavorite');
  });
  Route::resource('user', 'User\UsersController');
  Route::get('/user/{id}/animals', 'AnimalsController@show')->name('user.animals.show');
  // Route::resource('user/center', 'Center\HomeController', ['only' => ['show']])->name('user.center.show');
  Route::get('/user/center/{id}', 'Center\HomeController@show')->name('user.center.show');
});


// 管理者
Route::prefix('admin')->group(function() {
  Route::get('login', 'Admin\Auth\LoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Admin\Auth\LoginController@login')->name('admin.login.post');
  Route::get('logout', 'Admin\Auth\LoginController@logout')->name('admin.logout.get');
});

Route::get('admin', function() {
  return view('admin.adminlte');
});

// Route::group(['middleware' => ['auth:admin']], function() {
//   Route::resource('admin', 'Admin\HomeController');
// });

//センター
Route::group(['prefix' => 'center'], function () {
  Route::get('signup', 'Center\Auth\RegisterController@showRegistrationForm')->name('center.signup.get');
  Route::post('signup', 'Center\Auth\RegisterController@register')->name('center.signup.post');

  Route::get('login', 'Center\Auth\LoginController@showLoginForm')->name('center.login');
  Route::post('login', 'Center\Auth\LoginController@login')->name('center.login.post');
  Route::get('logout', 'Center\Auth\LoginController@logout')->name('center.logout.get');
});

Route::group(['middleware' => ['auth:center']], function() {
  Route::resource('center', 'Center\HomeController', ['only' => ['edit', 'update', 'show']]);
  Route::group(['prefix' => 'center'], function () {
    Route::resource('animals', 'AnimalsController', ['only' => ['create', 'store', 'destroy', 'edit', 'update', 'show']]);
    Route::resource('informations', 'InformationsController', ['only' => ['store', 'destroy']]);
  });
});
