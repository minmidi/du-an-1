<?php
Route::group(['prefix' => 'contacts'], function () {
    Route::get('','HomePageController@contact_client')->name('contacts');
    Route::post('','HomePageController@contact_client_save')->name('contacts');
});
