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

Route::get('/view', function () {
    return view('posts.view');
});

Route::get('/', 'pagesControler@index');


Route::get('/about', 'pagesControler@about');

Route::get('/services', 'pagesControler@services');

Route::resource('posts', 'postController');

Route::post('/comment/store', 'CommentController@store')->name('comment.add');

Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
