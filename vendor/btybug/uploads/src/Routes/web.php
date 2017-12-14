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

Route::get('/', 'ModulesController@getChilds',true);

//Route::get('/optimisation', function () {
//    Artisan::call('plugin:optimaze');
//    return redirect()->back()->with(['flash' => ['message' => 'modules optimisation successfully!!!']]);
//});

Route::group(['prefix' => 'modules'], function () {

    Route::get('/', 'ModulesController@getIndex',true)->name('modules_index');
    Route::get('/core-packages', 'ModulesController@getCoreModules',true)->name('core_packages');
    Route::get('/update-cms', 'ModulesController@getUpdateCms',true)->name('update_cms');
    Route::get('/{repository}/{package}/explore', 'ModulesController@getExplore',true);

    Route::group(['prefix' => 'extra-packages'], function () {
        Route::get('/', 'PluginsController@getIndex',true)->name('plugins_index');
        Route::get('/{repository}/{package}/explore', 'PluginsController@getExplore',true);
    });
});

Route::group(['prefix' => 'apps'], function ($router) {
    Route::get('/', 'AppsController@getIndex',true)->name('app_plugins');
    Route::get('/core-apps', 'AppsController@getCoreApps',true)->name('core_apps');
    Route::get('/{repository}/{package}/explore', 'AppsController@getExplore',true);

    Route::group(['prefix' => 'extra-apps'], function () {
        Route::get('/', 'AppsController@getExtra',true)->name('app_extra');
        Route::get('/{repository}/{package}/explore', 'AppsController@getExplore',true);
    });
});

Route::group(['prefix' => 'gears'], function () {
    Route::get('/', function () {
        return view("uploads::gears.units.list");
    },true)->name('uploads_gears_index');
    Route::get('/back-end', 'UnitsController@getIndex',true)->name('uploads_back_end');
    Route::get('/front-end', 'UnitsController@getFrontend',true)->name('uploads_front_end');
    Route::post('/upload', 'UnitsController@postUploadUnit');
    Route::get('/delete-variation/{slug}', 'UnitsController@postDeleteVariation');
    Route::get('/units-variations/{slug}', 'UnitsController@getUnitVariations',true)->name('uploads_units_variations');
    Route::post('/units-variations/{slug}', 'UnitsController@postUnitVariations');
    Route::get('/live-settings/{slug}', 'UnitsController@unitPreview',true)->name('uploads_live_settings');
    Route::get('/settings/{slug?}', 'UnitsController@getSettings',true)->name('uploads_settings');
    Route::get('/settings-iframe/{slug}/{settings?}', 'UnitsController@unitPreviewIframe',true)->name('uploads_settings_iframe');
    Route::post('/settings/{id}/{save?}', 'UnitsController@postSettings');
    Route::post('/delete', 'UnitsController@postDelete');
});

Route::group(['prefix' => 'gears-new'], function () {
    Route::get('/', function () {
        return view("uploads::gears-new.units.list");
    },true)->name('uploads_gears_index_new');
    Route::get('/back-end', 'UnitsNewController@getIndex',true)->name('uploads_back_end_new');
    Route::get('/front-end', 'UnitsNewController@getFrontend',true)->name('uploads_front_end_new');
    Route::post('/upload', 'UnitsNewController@postUploadUnit');
    Route::get('/delete-variation/{slug}', 'UnitsNewController@postDeleteVariation');
    Route::get('/units-variations/{slug}', 'UnitsNewController@getUnitVariations',true)->name('uploads_units_variations_new');
    Route::post('/units-variations/{slug}', 'UnitsNewController@postUnitVariations');
    Route::get('/live-settings/{slug}', 'UnitsNewController@unitPreview',true)->name('uploads_live_settings_new');
    Route::get('/settings/{slug?}', 'UnitsNewController@getSettings',true)->name('uploads_settings_new');
    Route::get('/settings-iframe/{slug}/{settings?}', 'UnitsNewController@unitPreviewIframe',true)->name('uploads_settings_iframe_new');
    Route::post('/settings/{id}/{save?}', 'UnitsNewController@postSettings');
    Route::post('/delete', 'UnitsNewController@postDelete');
});


Route::group(['prefix' => 'layouts'], function () {
    Route::get('/', function () {
        return view("uploads::gears.page_sections.list");
    },true)->name('uploads_layout_index');
    Route::get('/back-end', 'PageSectionsController@getIndex',true)->name('uploads_layouts_back_end');
    Route::get('/front-end', 'PageSectionsController@getFrontend',true)->name('uploads_layouts_front_end');
    Route::get('/settings/{slug}', 'PageSectionsController@getSettings',true)->name('uploads_layouts_settings');
    Route::get('/variations/{slug}', 'PageSectionsController@getVariations',true)->name('uploads_layouts_variations');
    Route::post('/settings/{slug}/{save?}', 'PageSectionsController@postSettings');
    Route::post('/console', 'PageSectionsController@getConsole');
    Route::post('/make-active', 'PageSectionsController@postMakeActive');
    Route::post('/upload', 'PageSectionsController@postUpload');
    Route::get('/delete-variation/{slug}', 'PageSectionsController@postDeleteVariation');
    Route::post('/delete', 'PageSectionsController@postDelete');
});

Route::group(['prefix' => 'assets'], function () {
    Route::get('/', 'AssetsController@getIndex',true)->name('uploads_assets_index');
    Route::get('/js', 'AssetsController@getJs',true)->name('uploads_assets_js');
    Route::get('/css', 'AssetsController@getCss',true)->name('uploads_assets_css');
    Route::get('/fonts', 'AssetsController@getFonts',true)->name('uploads_assets_fonts');

    Route::post('/', 'AssetsController@postUploadJs');
    Route::post('/change-version', 'AssetsController@postChangeVersion');
    Route::post('/update-link', 'AssetsController@postUpdateLink');
    Route::post('/get-versions', 'AssetsController@getVersions');
    Route::post('/get-active-versions', 'AssetsController@getActiveVersions');
    Route::post('/upload-version', 'AssetsController@postUploadVersion');
    Route::post('/generate-main-js', 'AssetsController@postGenerateMainJs');
    Route::post('/make-active', 'AssetsController@postMakeActive');
    Route::post('/css', 'AssetsController@postCss');
    Route::post('/delete', 'AssetsController@delete');
});

Route::group(['prefix' => 'market'], function ($router) {
    Route::get('/', 'MarketController@getIndex',true)->name('market_index');
    Route::get('/packages', 'MarketController@getPackages',true)->name('composer_market');
    Route::group(['prefix' => 'composer'], function ($router) {
        Route::get('/', 'ComposerController@getIndex',true)->name('composer_index');
        Route::post('/main', 'ComposerController@getMain')->name('composer_main');
        Route::post('plugin-on-off', 'ComposerController@getOnOff')->name('on_off');
    });
});
