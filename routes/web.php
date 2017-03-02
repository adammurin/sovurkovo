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
Route::group(['middleware' => ['web']], function() {

	Route::get('/', 'PagesController@homepage');

	Route::get('o-nas', 'PagesController@homepage');

	Route::get('redekoracia', 'PagesController@homepage');


	// Login Routes
	Route::get('prihlasenie', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('prihlasenie', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
    Route::post('odhlasenie', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

    // Registration Routes
    Route::get('registracia', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
    Route::post('registracia', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

	// Password Reset Routes
    Route::get('heslo/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
    Route::post('heslo/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
    Route::get('heslo/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
    Route::post('heslo/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);


	Auth::routes();

	Route::match( array( 'GET', 'POST' ), 'list', array(
			'as' => 'aimeos_shop_list',
			'uses' => '\Aimeos\Shop\Controller\CatalogController@listAction'
		));

	Route::get('list', array(
		'as' => 'aimeos_shop_list',
		'uses' => '\Aimeos\Shop\Controller\CatalogController@listAction'
	));

});