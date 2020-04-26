<?php
Route::group(['prefix' => 'settings'], function () {
    // posts: route view index
    Route::get('/','SettingController@index')->name('setting');
    // posts-edit: route get form edit
    Route::get('edit/{id}','SettingController@edit')->name('setting_edit');
    // posts-edit: route save edit
    Route::post('edit/{id}','SettingController@save_edit')->name('setting_edit');
    //posts-del: route delete data
    Route::get('del/{id}','SettingController@delete')->name('setting_del');
});

