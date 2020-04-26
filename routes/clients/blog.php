<?php
Route::group(['prefix' => 'blog'], function () {
    Route::get('/list','HomePageController@blog')->name('blog');
    Route::get('/{id}','HomePageController@blog_view')->name('blog_view');
});
