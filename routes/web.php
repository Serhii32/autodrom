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

Route::get('/', ['as' => 'page.index', 'uses' => 'PageController@index']);
Route::get('blog', ['as' => 'page.blog', 'uses' => 'PageController@blog']);
Route::get('service', ['as' => 'page.service', 'uses' => 'PageController@service']);
Route::get('article', ['as' => 'page.article', 'uses' => 'PageController@article']);
Route::get('feedback', ['as' => 'page.feedback', 'uses' => 'PageController@feedback']);
Route::get('blog/{id}', ['as' => 'page.blog.item', 'uses' => 'PageController@blog_item']);
Route::get('service/{id}', ['as' => 'page.service.item', 'uses' => 'PageController@service_item']);
Route::get('article/{id}', ['as' => 'page.article.item', 'uses' => 'PageController@article_item']);
Route::get('feedback/{id}', ['as' => 'page.feedback.item', 'uses' => 'PageController@feedback_item']);
Route::get('category/{id}', ['as' => 'page.category.item', 'uses' => 'PageController@category_item']);
Route::get('contacts', ['as' => 'page.contacts', 'uses' => 'PageController@contacts']);
Route::post('mail/send', ['as' => 'mail.send', 'uses' => 'MailController@send']);

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin/', 'prefix'=>'admin'], function () {
	Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
	Route::get('home/edit', ['as' => 'home.edit', 'uses' => 'HomeController@edit']);
	Route::match(['put', 'patch'], 'home/store', ['as' => 'home.store', 'uses' => 'HomeController@store']);
	Route::delete('/category/removeItemFromCategory/{itemId}', ['as' => 'category.removeItemFromCategory', 'uses' => 'CategoryController@removeItemFromCategory']);
	Route::post('upload-image', ['as' => 'upload-image', 'uses' => 'UploadedImagesController@uploadImage']);
	Route::get('uploaded-images', ['as' => 'uploaded-images.index', 'uses' => 'UploadedImagesController@index']);
	Route::delete('uploaded-images/{imageName}', ['as' => 'uploaded-images.destroy', 'uses' => 'UploadedImagesController@destroy']);
	Route::delete('/category/removeItemFromCategory/{itemId}/{type}', ['as' => 'category.removeItemFromCategory', 'uses' => 'CategoryController@removeItemFromCategory']);
	Route::resource('blog', 'BlogController');
	Route::resource('article', 'ArticleController');
	Route::resource('feedback', 'FeedbackController');
	Route::resource('category', 'CategoryController')->except(['create', 'show']);
	Route::resource('service', 'ServiceController');
});
