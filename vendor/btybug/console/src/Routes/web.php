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

Route::get('/', function () {
    return view('console::index');
},true);

Route::get('/optimisation', function () {
    Artisan::call('plugin:optimaze');
    return redirect()->back()->with(['flash' => ['message' => 'modules optimisation successfully!!!']]);
});

Route::group(['prefix' => 'structure'], function () {
    Route::get('/', 'StructureController@getIndex',true)->name('index');
    Route::group(['prefix' => 'pages'], function () {
        Route::get('/', 'StructureController@getPages',true)->name('pages_index');
        Route::get('/settings/{id}', 'StructureController@getPageSettings',true)->name('pages_settings');
        Route::post('/settings/{id}', 'StructureController@postPageSettings');
        Route::post('/', 'StructureController@postEdit');
        Route::post('/get-data', 'StructureController@postPageData');
    });

    Route::get('/urls', 'StructureController@getUrls',true)->name('urls');
    Route::get('/classify', 'StructureController@getClassify',true)->name('classify');
//    Route::get('/settings', 'StructureController@getSettings');
    Route::get('/tables', 'StructureController@getTables',true)->name('tables');

    Route::group(['prefix' => 'fields'], function () {
        Route::get('/', 'StructureController@getFields');
        Route::get('/create', 'StructureController@getCreateField');
        Route::get('/create-new', 'StructureController@getCreateFieldNew');
        Route::get('/edit/{id}', 'StructureController@getEditField');
        Route::post('/edit/{id}', 'StructureController@postEditField');
        Route::post('/new', 'StructureController@postCreateField');
        Route::post('/change-status', 'StructureController@postChangeFieldStatus');
    });

    Route::get('/edit-forms', 'StructureController@getEditForms');
    Route::get('/get-default-html', 'StructureController@getDefaultHtml');
    Route::post('/get-custom-html', 'StructureController@getCustomHtml');
    Route::post('/get-saved-html-type', 'StructureController@getSavedHtmlType');

    Route::group(['prefix' => 'forms'], function () {
        Route::get('/', 'StructureController@getForms');
        Route::get('/edit/{id}', 'StructureController@getFormEdit');
        Route::get('/entries/{id}', 'StructureController@getFormEntries');
        Route::get('/view-entries/{id}', 'StructureController@getViewEntries');
        Route::post('/get-entries-data', 'StructureController@postGetEntryData');
        Route::get('/settings/{id}', 'StructureController@getFormSettings');
        Route::post('/settings/{id}', 'StructureController@postFormSettings');
        Route::post('/get-available-fields-settings', 'StructureController@postAvailableFields');
        Route::post('/edit/{id}', 'StructureController@postFormEdit');
        Route::get('/create', 'StructureController@getCreateForm');
        Route::get('/edit-custom/{id}', 'StructureController@getEditForm');
        Route::post('/save', 'StructureController@postSaveForm');
        Route::get('/create-advanced', 'StructureController@getCreateAdvanced');
        Route::post('/get-unit-settings', 'StructureController@getUnitSettingsPage');
        Route::get('/get-add-field-modal', 'StructureController@getUnitFieldModal');
        Route::get('/add-field-modal', 'StructureController@getAddFieldModal');
        Route::get('/get-unit-render', 'StructureController@getUnitRender');
        Route::post('/get-edit-field-modal', 'StructureController@getUnitEditFieldModal');
        Route::post('/get-available-fields', 'StructureController@getAvailableFieldsModal');
        Route::post('/get-unit-variations', 'StructureController@getUnitVariations');
        Route::post('/get-unit-variation-data', 'StructureController@getUnitVariationField');
        Route::post('/get-unit-variations-settings', 'StructureController@getUnitVariationSettings');
        Route::post('/get-component-settings', 'StructureController@getComponentSettings');
        Route::post('/get-builder-render', 'StructureController@postBuilder');
    });

    Route::group(['prefix' => 'settings'], function () {
        Route::get('/', 'GeneralController@getIndex',true)->name('settings_index');
        Route::post('/', 'GeneralController@postSettings');
    });

    Route::group(['prefix' => 'menus'], function () {
        Route::get('/', 'MenusController@getIndex',true)->name('menus_index');
        Route::get('/edit/{menu}/{role}', 'MenusController@getEdit',true)->name('console_menu_edit');
        Route::get('/view/{menu}/{role}', 'MenusController@getView',true)->name('console_menu_view');
        Route::post('/edit/{menu}/{role}', 'MenusController@postEdit');
        Route::post('/create', 'MenusController@postCreate');
        Route::post('/delete', 'MenusController@postDelete');
    });

    Route::group(['prefix' => 'tables'], function () {
        Route::get('/', 'Developers\StructureController@getIndex');
        Route::get('/edit/{table}', 'Developers\StructureController@getEditTable');
        Route::post('/get-column', 'Developers\StructureController@postGetTableColumn');
        Route::get('/add-column/{table}', 'Developers\StructureController@getAddColumn');
        Route::post('/add-column/{table}', 'Developers\StructureController@postAddColumn');
        Route::get('/edit-column/{table}/{column}', 'Developers\StructureController@getEditTableColumn');
        Route::post('/edit-column/{table}/{column}', 'Developers\FormsController@postFields');
        Route::get('/delete-column/{table}/{column}', 'Developers\StructureController@postDeleteColumn');
        Route::post('/edit-column-field/{table}/{column}', 'Developers\StructureController@postEditColumnField');
        Route::get('/render-column-field/{table}/{column}', 'Developers\StructureController@postLiveColumnField');
        Route::get('/column-field-iframe/{table}/{column}', 'Developers\StructureController@getIframe');
        Route::get('/column-field-search-iframe/{table}/{column}', 'Developers\StructureController@getSearchIframe');
        Route::post('/field-live-save/{table}/{column}', 'Developers\StructureController@saveFieldData');
        Route::post('/search-field-live-save/{table}/{column}', 'Developers\StructureController@saveSearchFieldData');
        Route::post('/field-live-preview', 'Developers\StructureController@postFieldLivePreview');
        Route::post('/search-field-live-preview', 'Developers\StructureController@postSearchFieldLivePreview');
        Route::get('/table-names', 'Developers\StructureController@postTableNames');
        Route::post('/get-table-columns', 'Developers\StructureController@postTableColumns');
        Route::get('/optimize', function () {
            Artisan::call('forms:optimize');
            return redirect('admin');
        });
        Route::get('/create', 'Developers\StructureController@getCreate');
        Route::post('/create', 'Developers\StructureController@postCreate');
        Route::get('/fields/{table}/{column}', 'Developers\FormsController@getFields');
//    Route::post('/fields/{table}/{column}', 'Developers\FormsController@postFields');
        Route::group(['prefix' => 'field'], function () {
            Route::get('/add-new-field/{count}', 'Developers\FormsController@addNewField');
            Route::post('/delete', 'Developers\FormsController@deleteField');
            Route::get('/render-column-fields/{table}/{column}', 'Developers\FormsController@renderColumnFields');
        });
    });
});


Route::group(['prefix' => 'settings'], function () {
    Route::get('/', 'BackendController@getIndex',true)->name('backend_settings_index');
    Route::get('/general', 'BackendController@settings',true)->name('general');
    Route::post('/general', 'BackendController@postSaveSettings');
    Route::post('/site-settings', 'BackendController@postSiteSettings')->name('site_settings_console');
    Route::get('/css-js', 'BackendController@getCssJs',true)->name('css-js');
    Route::post('/css-js', 'BackendController@postCssJs');
});


Route::group(['prefix' => 'general'], function () {
    Route::get('/', function () {
        return view('console::structure.general.index');
    },true);
    Route::get('/validations', 'GeneralController@getValidations',true)->name('validations');
    Route::get('/trigger-events', 'GeneralController@getTriggerEvents',true)->name('trigger_events');
});

Route::group(['prefix' => 'config'], function () {
    Route::get('/page-preview/{page_id}', 'StructureController@getPagePreview');
    Route::post('/page-preview/{page_id}', 'StructureController@postSavePageSettings');
});