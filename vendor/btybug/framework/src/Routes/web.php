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
    Route::post('/savestyle', 'CssController@saveStyle')->name('save_style');
    Route::post('/editstyle', 'CssController@EditStyle')->name('edit_style');

    Route::get('/createtablecss', function(){
        \Btybug\Framework\Database\CreateTableCssTable::up();
    });
    Route::get('/changetablecss', function(){
        \Btybug\Framework\Database\ChangeFieldTableCssTable::up();
    });
});
Route::group(['prefix' => 'css-classes'], function () {
    Route::post('/createfolder', 'CssController@createFolder')->name('create_folder');
    Route::post('/createfile/{dirname}', 'CssController@createFile')->name('create_file');
    Route::post('/removedir', 'CssController@removeDir')->name('remove_dir');
    Route::post('/removefile', 'CssController@removeFile')->name('remove_file');
    Route::post('/removeclass', 'CssController@removeClass')->name('remove_class');
    Route::post('/renamefolder', 'CssController@renameGroup')->name('rename_group');
    Route::post('/reset', 'CssController@resetFile')->name('reset_file');
    Route::get('/savestyle', 'CssController@saveStyleWithHtml', true)->name('save_style_with_html');
    Route::get('/', 'CssController@getContent', true)->name('get_content');

});
Route::group(['prefix' => 'component'], function () {
    Route::get('/', 'CssController@getComponent', true)->name('get_content_component');
    Route::post('/createfolder', 'CssController@createFolderComponent')->name('create_folder_component');
    Route::post('/createfile/{dirname}', 'CssController@createFileComponent')->name('create_file_component');
    Route::post('/removedir', 'CssController@removeDirComponent')->name('remove_dir_component');
    Route::post('/removefile', 'CssController@removeFileComponent')->name('remove_file_component');
    Route::post('/removeclass', 'CssController@removeClassComponent')->name('remove_class_component');
    Route::post('/reset', 'CssController@resetFileComponent')->name('reset_file_component');
    Route::get('/savestyle', 'CssController@saveStyleWithHtmlComponent', true)->name('save_style_with_html_component');
    Route::post('/savestylecomponent', 'CssController@saveStyleComponent', true)->name('save_style_component');
    Route::post('/editstylecomponent', 'CssController@EditStyleComponent')->name('edit_style_component');
    Route::post('/renamefolder', 'CssController@renameGroupComponent')->name('rename_group_component');
});

