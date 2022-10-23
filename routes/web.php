<?php

Route::group(['middleware' => 'auth'], function() {//ログインしないと見れないようになってる
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
    //↑↑任意のURLを設定→→Route::get('/folders/create',|↑↑→→FolderController.phpの12行目引火'FolderController@showCreateForm')
    Route::post('/folders/create', 'FolderController@create');
    Route::group(['middleware' => 'can:view,folder'], function() {
        Route::get('/folders/{folder}/tasks', 'TaskController@index')->name('tasks.index');

        Route::get('/folders/{folder}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
        Route::post('/folders/{folder}/tasks/create', 'TaskController@create');

        Route::get('/folders/{folder}/tasks/{task}/edit', 'TaskController@showEditForm')->name('tasks.edit');
        Route::post('/folders/{folder}/tasks/{task}/edit', 'TaskController@edit');
    });
});


Route::get('/companies', 'CompanyController@index')->name('companies.index');

Route::get('/company/edit/{abc}', 'CompanyController@edit')->name('company.edit');
Route::post('/company/edit/{abc}', 'CompanyController@update')->name('company.edit.form');
//POSTできた値を・・・
Route::get('/company/delete/{abc}', 'CompanyController@delete')->name('company.delete');

Route::post('/company/deletefin/{abc}', 'CompanyController@deletefin')->name('company.delete.d');


Auth::routes();
