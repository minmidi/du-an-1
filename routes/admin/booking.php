<?php
Route::group(['prefix' => 'booking'], function () {
    Route::get('','BookingController@index')->name('booking_room');

    Route::get('del/{id}','BookingController@delete')->name('booking_room_del');
});
