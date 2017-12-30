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

//site users
Route::get('/', array('as' => 'admin.users.list', 'uses' => 'UserController@getIndex'),true)->name('user_index');
Route::get('/create',  'UserController@getCreate',true)->name('user_create');
Route::post('/create', array('as' => 'admin.users.postCreate', 'uses' => 'UserController@postCreate'));
Route::get('/edit/{id}', 'UserController@getEdit',true)->name('user_edit');
Route::post('/edit/{id}', array('as' => 'admin.users.postEdit', 'uses' => 'UserController@postEdit'));
Route::post('/delete', array('as' => 'admin.users.delete', 'uses' => 'UserController@postDelete'));
Route::get('/show/{id}', array('as' => 'admin.users.show', 'uses' => 'UserController@getShow'),true)->name('user_show');
Route::get('/settings', array('as' => 'admin.users.settings', 'uses' => 'UserController@getSettings'),true)->name('user_settings');
Route::post('/settings', array('as' => 'admin.users.postSettings', 'uses' => 'UserController@postSettings'));
Route::get('/profile', 'UserController@getProfile');
Route::get('/registration', 'UserController@getRegistration');

Route::group(['prefix' => '/admins'], function () {
    Route::get('/', 'UserController@getAdmins',true)->name('user_admin_index');
    Route::get('/create', 'UserController@getCreateAdmin',true)->name('user_admin_create');
    Route::post('/create', 'UserController@postCreateAdmin');
    Route::get('/edit/{id}', 'UserController@getEditAdmin',true)->name('user_admin_edit');
    Route::post('/edit/{id}', 'UserController@postEditAdmin');
    Route::post('/delete', 'UserController@postDeleteAdmin');
});

//roles
Route::group(['prefix' => '/roles'], function () {
    Route::get('/', 'RolesController@getIndex',true)->name('user_roles_index');
    Route::get('/create', 'RolesController@getCreate',true)->name('user_roles_create');
    Route::post('/create', 'RolesController@postCreate');
    Route::get('/edit/{id}', 'RolesController@getEdit',true)->name('user_roles_edit');
    Route::get('/permissions/{slug}', 'RolesController@getPermissions',true)->name('user_roles_permissions');
    Route::post('/permissions/{slug}', 'RolesController@postPermissions');
    Route::post('/edit/{id}', 'RolesController@postEdit');
    Route::post('/delete', 'RolesController@postDelete');
    //statuses
    Route::group(['prefix' => '/statuses'], function () {
        Route::get('/', 'StatusController@getIndex',true)->name('user_roles_statuses_index');
        Route::get('/create', 'StatusController@getCreate',true)->name('user_roles_statuses_create');
        Route::post('/create', 'StatusController@postCreate');
        Route::get('/edit/{id}', 'StatusController@getEdit',true)->name('user_roles_statuses_edit');
        Route::post('/edit/{id}', 'StatusController@postEdit');
        Route::post('/delete', 'StatusController@postDelete');
    });
//conditions
    Route::group(['prefix' => '/conditions'], function () {
        Route::get('/', 'ConditionController@getIndex',true)->name('user_roles_conditions_index');
    });
});