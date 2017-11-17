<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::get('/', 'IndexController@getIndex');
Route::get('/profiles', 'IndexController@getProfiles');
Route::get('/js', 'IndexController@getJs');
Route::get('/css', 'IndexController@getCss');
Route::get('/fonts', 'IndexController@getFonts');

Route::post('/', 'IndexController@postUploadJs');
Route::post('/change-version', 'IndexController@postChangeVersion');
Route::post('/update-link', 'IndexController@postUpdateLink');
Route::post('/get-versions', 'IndexController@getVersions');
Route::post('/get-active-versions', 'IndexController@getActiveVersions');
Route::post('/upload-version', 'IndexController@postUploadVersion');
Route::post('/generate-main-js', 'IndexController@postGenerateMainJs');
Route::post('/make-active', 'IndexController@postMakeActive');
Route::post('/css', 'IndexController@postCss');
Route::post('/delete', 'IndexController@delete');

Route::group(['prefix' => 'settings'], function () {
    Route::get('/', 'SettingsController@getIndex');
    Route::post('/', 'SettingsController@postIndex');
    Route::get('/frontend', 'SettingsController@getFrontSettings');
    Route::post('/frontend', 'SettingsController@postFrontSettings');
});

Route::group(['prefix' => 'css'], function () {
    Route::get('/', 'CssController@getIndex');
});

