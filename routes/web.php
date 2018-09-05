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

// Route::get('/', function () {
//     return view('homepage');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', ['as' => 'page.index', 'uses' => 'PageController@index']);
// Route::get('contacts', ['as' => 'page.contacts', 'uses' => 'PageController@contacts']);
// Route::get('commodity/{id}', ['as' => 'commodity_page', 'uses' => 'PagesController@commodity']);

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin/', 'prefix'=>'admin'], function () {
	Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
	Route::get('home/edit', ['as' => 'home.edit', 'uses' => 'HomeController@edit']);
	Route::match(['put', 'patch'], 'home/store', ['as' => 'home.store', 'uses' => 'HomeController@store']);
	Route::delete('/category/removeBlogItemFromCategory/{itemId}', ['as' => 'category.removeBlogItemFromCategory', 'uses' => 'CategoryController@removeBlogItemFromCategory']);
	Route::resource('blog', 'BlogController');
	Route::resource('feedback', 'FeedbackController');
	Route::resource('category', 'CategoryController')->except(['create', 'show']);
});
