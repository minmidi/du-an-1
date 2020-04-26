<?php
Route::group(['prefix' => 'room_types'], function () {
    // posts: route view index
    Route::get('/','RoomTypeController@index')->name('room_type');
    // posts-add: route get form add
    Route::get('add','RoomTypeController@add')->name('room_type_add');
    // posts-add: rote save add
    Route::post('add','RoomTypeController@save_add')->name('room_type_add');
    // posts-edit: route get form edit
    Route::get('edit/{id}','RoomTypeController@edit')->name('room_type_edit');
    // posts-edit: route save edit
    Route::post('edit/{id}','RoomTypeController@save_edit')->name('room_type_edit');
    //posts-del: route delete data
    Route::get('del/{id}','RoomTypeController@delete')->name('room_type_del');
});
