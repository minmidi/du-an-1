<?php
Route::group(['prefix' => 'room'], function () {
    Route::get('/list','HomePageController@room_list')->name('room_list');
    Route::get('/{id}','HomePageController@room')->name('room_view');
});
