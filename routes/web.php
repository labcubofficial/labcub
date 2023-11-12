<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'front\HomeController@index');
Route::get('blogs', 'front\BlogController@index');
Route::get('blog/{category}/{sub_category}/{slug}', 'front\BlogController@show');
// Route::fallback('front\ErrorController@error404');

Route::get('legal/privacy_policy', function(){ return view('front.legal.privacy_policy'); });
Route::get('legal/terms_and_condition', function(){ return view('front.legal.terms_and_condition'); });
Route::get('legal/about_us', function(){ return view('front.legal.about_us'); });
Route::get('send/mail', 'Mail\MailController@sendMail');

Route::resource('admin/login','admin\AdminLoginController');
// Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function(){
        Route::get('logout','admin\AdminLoginController@Logout');

        Route::resource('dashboard','admin\DashboardController');
        Route::resource('category','admin\CategoryController');
        Route::resource('subcategory','admin\SubCategoryController');
        Route::resource('blog','admin\BlogController');
        Route::get('blog/delete/{id}', 'admin\BlogController@destroy');
        Route::resource('subscription','admin\SubscriptionController');
    });
// });
