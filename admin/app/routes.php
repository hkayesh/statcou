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

Route::any('login', array(
    'as' => 'user/login',
    'uses' => 'UsersController@login'
));

Route::group(array('before' => 'auth'), function() {
    Route::get('logout', array(
        'as' => 'user/logout',
        'uses' => 'UsersController@logout'
    ));

    Route::any('/', array(
        'as' => 'dashboard',
        'uses' => 'HomeController@showDeshboard'
    ));

    Route::get('account', array(
        'as' => 'user/account',
        'uses' => 'UsersController@account'
    ));

    Route::any('saveAccount', array(
        'as' => 'user/saveAccount',
        'uses' => 'UsersController@saveAccount'
    ));

    Route::resource('notice', 'NoticesController');
    Route::resource('result', 'ResultsController');
    Route::resource('download', 'DownloadsController');
    Route::resource('news', 'NewsController');

});



