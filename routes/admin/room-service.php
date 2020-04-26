<?php
Route::group(['prefix' => 'room_services'], function () {
    // posts: route view index
    Route::get('/','RoomServiceController@index')->name('room_service');
    // posts-add: route get form add
    Route::get('add','RoomServiceController@add')->name('room_service_add');
    // posts-add: rote save add
    Route::post('add','RoomServiceController@save_add')->name('room_service_add');
    // posts-edit: route get form edit
    Route::get('edit/{id}','RoomServiceController@edit')->name('room_service_edit');
    // posts-edit: route save edit
    Route::post('edit/{id}','RoomServiceController@save_edit')->name('room_service_edit');
    //posts-del: route delete data
    Route::get('del/{id}','RoomServiceController@delete')->name('room_service_del');
});
