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

Route::group(['middleware' => 'locale'], function () {
    Route::resource('contact', ContactController::class);

<<<<<<< HEAD
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')
        ->name('language.change-language');
=======
    Route::get('/contact/create', 'ContactController@create')->name('contact.create')->middleware('auth');
    Route::get('/contact/edit/{id}', 'ContactController@edit')->name('contact.edit')->middleware('auth');
    Route::delete('/contact/{id}', 'ContactController@destroy')->name('delete')->middleware('auth');
    //Route::auth();
    Route::get('change-language/{language}', 'LanguageController@changeLanguage')
        ->name('language.change-language');
    // Đăng ký thành viên
    Route::get('register', 'Auth\RegisterController@getRegister');
    Route::post('register', 'Auth\RegisterController@postRegister');

    // Đăng nhập và xử lý đăng nhập
    Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@getLogin']);
    Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@postLogin']);

    // Đăng xuất
    Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\LogoutController@getLogout']);

>>>>>>> 6d99061 (Authentication and Mail)
});
