<?php
Route::group(['prefix' => 'contact'], function () {
    Route::get('','ContactController@index')->name('contact_client');

    Route::get('del/{id}','ContactController@delete')->name('contact_del');
});
