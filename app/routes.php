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

Route::get('/', array('uses'=>'IndexController@get_index'));

Route::get('logout', array('uses'=>'IndexController@get_logout'));

Route::get('/users', function()
{
    return 'Users!';
});

Route::get('chums', array('uses'=>'ChumsController@get_index'));

Route::get('activity', array('uses'=>'ActivityController@get_index'));

Route::get('forum', array('uses'=>'ForumController@get_index'));

Route::get('my_chums', array('uses'=>'MyChumsController@get_index'));

Route::get('profile', array('uses'=>'ProfileController@get_index'));

Route::get('create', array('uses'=>'ProfileController@create'));

Route::get('groups', array('uses'=>'GroupsController@get_index'));

Route::get('signin', array('uses'=>'SigninController@get_index'));

Route::get('signup', array('uses'=>'SignupController@get_index'));

Route::post('signup/submit', array('uses'=>'SignupController@submit'));

Route::post('signin/submit', array('uses'=>'SigninController@submit'));
