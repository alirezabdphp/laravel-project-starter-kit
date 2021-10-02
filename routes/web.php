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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth','active.user')->group(function () {
    Route::prefix('settings')->group(function () {
        Route::prefix('user')->group(function (){
            Route::get('profile', 'Auth\AccountSettingsController@profile')->name('profile');
            Route::post('update-profile', 'Auth\AccountSettingsController@updateProfile')->name('admin.profile.update');
            Route::get('change-password', 'Auth\AccountSettingsController@password')->name('change-password');
            Route::post('update-password}', 'Auth\AccountSettingsController@updatePassword')->name('update-password');

            Route::get('change-email', 'Auth\AccountSettingsController@changeEmail')->name('change-email');
            Route::post('update-user-email', 'Auth\AccountSettingsController@updateEmail')->name('update-user-email');
        });
    });
});
