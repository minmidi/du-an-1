<?php
Route::group(['prefix' => 'abouts'], function () {
    // posts: route view index
    Route::get('/','AboutController@index')->name('abouts');
    // posts-edit: route get form edit
    Route::get('edit/{id}','AboutController@edit')->name('abouts_edit');
    // posts-edit: route save edit
    Route::post('edit/{id}','AboutController@save_edit')->name('abouts_edit');
    //posts-del: route delete data
    Route::get('del/{id}','AboutController@delete')->name('abouts_del');
});

