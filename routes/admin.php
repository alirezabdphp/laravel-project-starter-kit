<?php

/*
|--------------------------------------------------------------------------
| Super Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider . Now create something great!
|
*/
Route::prefix('settings')->group(function () {
    Route::get('general', 'ApplicationSettingsController@appSetting')->name('app.settings');
    Route::post('update-application-setting', 'ApplicationSettingsController@updateApplicationSetting')->name('update.app.setting');

    Route::get('email', 'ApplicationSettingsController@emailSetting')->name('email.settings');
    Route::post('email', 'ApplicationSettingsController@updateEmailSetting')->name('update.email.setting');
});
