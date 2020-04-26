<?php
Route::group(['prefix' => 'sliders'], function () {
    // admin-user: route view index
    Route::get('','SliderController@index')->name('slider');
    // admin-user-add: route get form add
    Route::get('add','SliderController@add')->name('slider_add');
    // admin-user-add: rote save add
    Route::post('add','SliderController@save_add')->name('slider_add');
    // admin-user-edit: route get form edit
    Route::get('edit/{id}','SliderController@edit')->name('slider_edit');
    // admin-user-edit: route save edit
    Route::post('edit/{id}','SliderController@save_edit')->name('slider_edit');
    //admin-user-del: route delete data
    Route::get('del/{id}','SliderController@delete')->name('slider_del');
});
