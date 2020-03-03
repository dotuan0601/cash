<?php

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

Route::get('/', ['as' => 'home', 'uses' => 'FrontController@index']);
Route::get('/news', ['as' => 'news', 'uses' => 'FrontController@news']);
Route::get('/news_detail/{post_slug}', ['as' => 'news_detail', 'uses' => 'FrontController@news_detail']);
Route::get('/promotion', ['as' => 'promotion', 'uses' => 'FrontController@promotion']);
Route::get('/promotion_detail/{post_slug?}', ['as' => 'promotion_detail', 'uses' => 'FrontController@promotion_detail']);
Route::get('/booking', ['as' => 'booking', 'uses' => 'FrontController@booking']);
Route::get('/service', ['as' => 'service', 'uses' => 'FrontController@service']);
Route::post('/booking/store', ['as' => 'booking.store', 'uses' => 'BookingController@store']);
Route::get('/timeline/{strDate?}/{salon_id?}', ['as' => 'timeline', 'uses' => 'FrontController@timeline']);
Route::get('/maintenance', ['as' => 'maintenance', 'uses' => 'FrontController@maintenance']);


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::group(['middleware' => 'auth'], function () {
        Route::resource('user', 'UserController', ['except' => ['show', 'destroy']]);
        Route::resource('category', 'CategoryController', ['except' => ['show']]);
        Route::resource('post', 'PostController', ['except' => ['show']]);
        Route::resource('product', 'ProductController', ['except' => ['show']]);
        Route::resource('video', 'VideoController', ['except' => ['show']]);
        Route::resource('tv', 'TVController', ['except' => ['show']]);

        Route::resource('promotion', 'PromotionController', ['except' => ['show']]);
        Route::resource('banner', 'BannerController', ['except' => ['show']]);
        Route::resource('salon', 'SalonController', ['except' => ['show']]);
        Route::resource('service', 'ServiceController', ['except' => ['show']]);
        Route::resource('customer', 'CustomerController', ['except' => ['show']]);
        Route::resource('booking', 'BookingController', ['except' => ['show','store','create','edit','update']]);
        Route::get('booking/changeStatus/{id?}',['as'=>'booking.changeStatus','uses'=>'BookingController@changeStatus']);
        Route::get('district/searchByProvince/{id?}',['as'=>'district.searchByProvince','uses'=>'DistrictController@searchByProvince']);
        // dashboard home
        Route::get('/', ['as' => 'dashboard', function () {
            return view('home');
        }]);
    });
});

Auth::routes();
