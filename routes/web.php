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
Route::get('blog/{id}', ['as' => 'page.blog.item', 'uses' => 'PageController@blog_item']);
Route::get('contacts', ['as' => 'page.contacts', 'uses' => 'PageController@contacts']);

Auth::routes();

Route::group(['namespace' => 'Admin', 'middleware' => 'auth', 'as' => 'admin/', 'prefix'=>'admin'], function () {
	Route::get('home', ['as' => 'home.index', 'uses' => 'HomeController@index']);
	Route::get('home/edit', ['as' => 'home.edit', 'uses' => 'HomeController@edit']);
	Route::match(['put', 'patch'], 'home/store', ['as' => 'home.store', 'uses' => 'HomeController@store']);
	Route::delete('/category/removeItemFromCategory/{itemId}', ['as' => 'category.removeItemFromCategory', 'uses' => 'CategoryController@removeItemFromCategory']);
	Route::resource('blog', 'BlogController');
	Route::resource('article', 'ArticleController');
	Route::resource('feedback', 'FeedbackController');
	Route::resource('category', 'CategoryController')->except(['create', 'show']);

	// Route::post('upload-image', ['as' => 'upload-image', 'uses' => 'FileUploadController@uploadImage']);

	Route::post('upload-image', function(
	    \Illuminate\Http\Request $request,
	    Illuminate\Contracts\Validation\Factory $validator
	) {
	    $v = $validator->make($request->all(), [
	        'upload' => 'required|image',
	    ]);

	    $funcNum = $request->input('CKEditorFuncNum');

	    if ($v->fails()) {
	        return response(
	            "<script>
	                window.parent.CKEDITOR.tools.callFunction({$funcNum}, '', '{$v->errors()->first()}');
	            </script>"
	        );
	    }

	    $image = $request->file('upload');
	    $image->store('img/uploads');
	    $url = asset('img/uploads/'.$image->hashName());

	    return response(
	        "<script>
	            window.parent.CKEDITOR.tools.callFunction({$funcNum}, '{$url}', 'Изображение успешно загружено');
	        </script>"
	    );
	});
});
