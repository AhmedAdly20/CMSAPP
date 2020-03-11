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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','WebsiteUIController@index')->name('index');
Route::get('/contactUs','WebsiteUIController@contact')->name('contact');
Route::get('/posts/{id}','WebsiteUIController@singlePost')->name('singlePost');
Route::get('/category/{id}','WebsiteUIController@category')->name('category');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','middleware' => ['auth','admin']], function () {
    Route::get('/posts', 'PostsController@index')->name('post.index');
    Route::get('/posts/trashed', 'PostsController@trashed')->name('post.trashed');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post/store', 'PostsController@store')->name('post.store');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
    Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('post.hdelete');
    Route::get('/posts/restore/{id}', 'PostsController@restore')->name('post.restore');

    Route::get('/categories', 'CategoryController@index')->name('category.index');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/edit/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');

    Route::get('/tags', 'TagController@index')->name('tag.index');
    Route::get('/tag/create', 'TagController@create')->name('tag.create');
    Route::post('/tag/store', 'TagController@store')->name('tag.store');
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::post('/tag/edit/{id}', 'TagController@update')->name('tag.update');
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');

    Route::get('/users', 'UsersController@index')->name('user.index');
    Route::get('/user/create', 'UsersController@create')->name('user.create');
    Route::post('/user/store', 'UsersController@store')->name('user.store');
    Route::get('/user/{id}/admin', 'UsersController@admin')->name('user.admin');
    Route::get('/user/{id}/notadmin', 'UsersController@notadmin')->name('user.notadmin');

    Route::get('/settings','SettingsController@index')->name('settings.index');
    Route::post('/settings/update', 'SettingsController@update')->name('settings.update');

});
