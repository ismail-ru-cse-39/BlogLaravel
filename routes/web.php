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





Route::group(['middleware'=> ['web']], function(){

		//Authentication route
		//Route::get('auth/login', 'Auth\LoginController@showLoginForm');
		Route::get('auth/login', ['uses' => 'Auth\LoginController@showLoginForm', 'as' => 'auth.login' ]);
		Route::post('auth/login', 'Auth\LoginController@login');
		//Route::get('auth/logout', 'Auth\LoginController@logout');
		Route::get('auth/logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'auth.logout' ]);

		//Registration route
		Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm');
		Route::post('auth/register', 'Auth\RegisterController@register');
	


		Route::get('blog/{slug}', ['as' => 'blog.single', 'uses'=> 'BlogController@getSingle'])->where('slug', '[\w\d\-\_]+');

		Route::get('blog', ['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

		Route::get('contact','PagesController@getContact'
				);


		Route::get('about', 'PagesController@getAbout');


		Route::get('/', 'PagesController@getIndex');

		Route::resource('posts','PostController');

	}

);
