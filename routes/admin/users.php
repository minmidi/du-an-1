<?php
Route::group(['prefix' => 'users'], function () {
    // admin-user: route view index
    Route::get('','AdminUserController@index')->name('user');
    // admin-user-add: route get form add
    Route::get('add','AdminUserController@add')->name('user_add');
    // admin-user-add: rote save add
    Route::post('add','AdminUserController@save_add')->name('user_add');
    // admin-user-edit: route get form edit
    Route::get('edit/{id}','AdminUserController@edit')->name('user_edit');
    // admin-user-edit: route save edit
    Route::post('edit/{id}','AdminUserController@save_edit')->name('user_edit');
    //admin-user-del: route delete data
    Route::get('del/{id}','AdminUserController@delete')->name('user_del');
});
