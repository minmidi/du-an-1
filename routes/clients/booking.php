<?php
Route::group(['prefix' => 'booking'], function () {
    Route::get('','HomePageController@booking')->name('booking');
    Route::post('','HomePageController@save_booking')->name('booking');
});
