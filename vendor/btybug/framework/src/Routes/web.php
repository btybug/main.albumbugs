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
Route::get('/', 'IndexController@getIndex',true);

Route::group(['prefix' => 'css'], function () {
    Route::get('/', 'CssController@getIndex',true)->name('css');
    Route::get('/savestyle', 'CssController@saveStyle',true)->name('save_style');
    Route::get('/createfolder', 'CssController@createFolder',true)->name('create_folder');
    Route::get('/createfile/{dirname}', 'CssController@createFile',true)->name('create_file');
});

