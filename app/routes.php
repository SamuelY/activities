<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/'     , ['as' => 'home.index'  , 'uses' => 'HomeController@index']);
/*
Route:: get( '/' , function()
{
	
	$beside = new Beside;
	$beside->event_name = 'event3' ;
	$beside->organization = 'Merry Monarc' ;
//	$event->timestamps();
	$beside->save();
//	$event = Event::find( 1 );
	return $beside->id;
});
*/
Route::get('besides/{id}'     , ['as' => 'beside.show'   , 'uses' => 'BesidesController@show']);

Route::post('comments'      , ['as' => 'comments.store'  , 'uses' => 'CommentsController@store']);

Route::get('register'      , ['as' => 'register.index'  , 'uses' => 'RegisterController@index']);

Route::post('register/create'      , ['as' => 'register.create'  , 'uses' => 'RegisterController@create']);

Route::get('login'      , ['as' => 'login.index'  , 'uses' => 'LoginController@index']);

Route::post('login/auth'      , ['as' => 'login.auth'  , 'uses' => 'LoginController@auth']);

Route::get('logout'      , ['as' => 'logout'  , 'uses' => 'LoginController@logout']);