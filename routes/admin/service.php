<?php
Route::group(['prefix' => 'services'], function () {
    // posts: route view index
    Route::get('/','ServiceController@index')->name('service');
    // posts-add: route get form add
    Route::get('add','ServiceController@add')->name('service_add');
    // posts-add: rote save add
    Route::post('add','ServiceController@save_add')->name('service_add');
    // posts-edit: route get form edit
    Route::get('edit/{id}','ServiceController@edit')->name('service_edit');
    // posts-edit: route save edit
    Route::post('edit/{id}','ServiceController@save_edit')->name('service_edit');
    //posts-del: route delete data
    Route::get('del/{id}','ServiceController@delete')->name('service_del');
});

