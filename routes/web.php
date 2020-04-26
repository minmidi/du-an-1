<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// prefix là tiền tố chỉ đường dẫn bắt đầu từ admin
// nếu sử dụng chung namespace thì trong Controller thì gọi namesapace
// Thuộc tính middleware sử dụng chức năng đăng nhặp khi sử dụng phải có route login để redirect về login đó
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {

//Route::group(['prefix' => 'admin', 'namespace' => 'Admin','middleware' => 'auth'],function () {
    // admin dashboard
    Route::get('','AdminController@index') -> name('admin');
    // Logout admin
    Route::get('/logout','AdminController@logout') -> name('logout');

    // include admin-user
    include('admin/users.php');

    // include posts route
    include('admin/posts.php');

    // include setting general route
    include('admin/setting.php');

    // include about general route
    include ('admin/about.php');

    // include slider general route
    include ('admin/slider.php');

    // include slider service route
    include ('admin/service.php');

    // include room type route
    include ('admin/room-type.php');

    // include room service route
    include ('admin/room-service.php');

    //include booking
    include ('admin/booking.php');

    //include contact
    include ('admin/contact.php');
}) ;

// Route login:
// admin/login -> có tiền tố là admin
// Admin\AdminController@login -> có namespace là Admin

//Send mail test
Route::get('order/create', 'Customer\OrderController@create')->name('order.create');
Route::post('order', 'Customer\OrderCOntroller@store')->name('order.store');

// AUTH User
Route::group(['prefix' => 'admin'], function () {
    Auth::routes();
});


Route::prefix('/')
    ->namespace('Customer')
    ->group(function () {
        // Route homepages
        include ('clients/homepages.php');

        // Route room pages
        include ('clients/room.php');

        // Route blog pages
        include ('clients/blog.php');

        // Route about pages
        include('clients/about.php');

        // Route contact pages
        include('clients/contact.php');

        // Route booking pages
        include('clients/booking.php');

        // Route contact pages
        include('clients/contact_client.php');
}) ;



