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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('seller')->group(function() {
  Route::get('/login', 'Auth\SellerLoginController@showLoginForm')->name('seller.login');
  Route::post('/login', 'Auth\SellerLoginController@login')->name('seller.login.submit');
  Route::get('/dashboard', 'SellerDashboardController@index')->name('seller.dashboard');
  Route::get('/logout', 'Auth\SellerLoginController@logout')->name('seller.logout');

    // Password reset routes
    Route::post('/password/email', 'Auth\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
    Route::get('/password/reset', 'Auth\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');
    Route::post('/password/reset', 'Auth\SellerResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\SellerResetPasswordController@showResetForm')->name('seller.password.reset');
    Route::resource('category', 'CategoryController', ['except' => ['destroy']]);
    Route::resource('sub_category', 'SubCategoryController', ['except' => ['destroy']]);
    Route::resource('product', 'ProductController');
    Route::post('product_picture', 'ProductPictureController@store')->name('product.picture.upload');
  });
Route::resource('seller', 'SellerController');
