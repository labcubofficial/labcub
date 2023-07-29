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
Route::get('blog/{id}', 'front\HomeController@show');
// Route::fallback('front\ErrorController@error404');

Route::prefix('admin')->group(function(){
    Route::resource('login','admin\AdminLoginController');
    Route::get('logout','admin\AdminLoginController@Logout');

    Route::resource('dashboard','admin\DashboardController');
    Route::resource('category','admin\CategoryController');
    Route::resource('subcategory','admin\SubCategoryController');
    Route::resource('blog','admin\BlogController');
    
    Route::prefix('settings')->group(function(){
        Route::resource('blog','admin\BlogController');
    });
    
});
