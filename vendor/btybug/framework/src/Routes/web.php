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

    Route::group(['prefix' => 'file'], function () {
        Route::post('/createfolder', 'CssController@createFolder')->name('create_folder');
        Route::post('/createfile/{dirname}', 'CssController@createFile')->name('create_file');
        Route::post('/removedir', 'CssController@removeDir')->name('remove_dir');
        Route::post('/removefile', 'CssController@removeFile')->name('remove_file');
        Route::get('/savestyle', 'CssController@saveStyleWithHtml', true)->name('save_style_with_html');
        Route::get('/', 'CssController@getContent', true)->name('get_content');

        Route::group(['prefix' => 'new'], function () {
            Route::get('/', 'CssController@newPage', true)->name('new_page');
        });
    });
    Route::get('/createtablecss', function(){
        \Btybug\Framework\Database\CreateTableCssTable::up();
    });
});

