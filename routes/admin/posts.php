<?php
    Route::group(['prefix' => 'posts'], function () {
        // posts: route view index
        Route::get('/','PostController@index')->name('post');
        // posts-add: route get form add
        Route::get('add','PostController@add')->name('post_add');
        // posts-add: rote save add
        Route::post('add','PostController@save_add')->name('post_add');
        // posts-edit: route get form edit
        Route::get('edit/{id}','PostController@edit')->name('post_edit');
        // posts-edit: route save edit
        Route::post('edit/{id}','PostController@save_edit')->name('post_edit');
        //posts-del: route delete data
        Route::get('del/{id}','PostController@delete')->name('post_del');
   });

