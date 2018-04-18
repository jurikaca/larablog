<?php

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

View::share('c', App\Category::latest()->get()); // c stands for category
View::share('user', App\User::all());
View::share('blog', App\Blog::all());
View::share('user', App\User::all());

Route::patch('/blog/{id}', 'BlogController@publish');

Route::get('/', ['as' => '/', 'uses' => 'BlogController@index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/blog/bin', 'BlogController@bin');
Route::get('/blog/bin/{id}/restore', 'BlogController@restore');
Route::delete('/blog/bin/{id}/destroyblog', 'BlogController@destroyBlog');

Route::get('/home', 'HomeController@index');
Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/store', 'BlogController@store');
Route::get('/blog/{slug}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');

// Route::patch('/blog/{id}', 'BlogController@publish');

Route::patch('/blog/{id}', 'BlogController@update');
Route::delete('/blog/{id}', 'BlogController@destroy');

Route::get('admin', 'AdminController@index');

Route::resource('categories', 'CategoryController');
// do not use photo as your route because we already have photo folder in public. just to avoid conflict
Route::resource('media', 'PhotosController');

Route::get('userslist', 'UserController@userslist');
Route::get('/test', 'UserController@test');
Route::resource('users', 'UserController');

Route::get('contact', 'MailController@contact');
Route::post('contact/send', 'MailController@send');

Route::get('/{username?}', array('as' => 'show', 'uses' => 'UserController@show'));








 