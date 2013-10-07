<?php

Route::get('login',  array('as' => 'login',      'uses' => 'App\Modules\Auth\Controllers\AuthController@getLogin'));
Route::post('login', array('as' => 'login.post', 'uses' => 'App\Modules\Auth\Controllers\AuthController@postLogin'));
Route::get('logout', array('as' => 'logout',     'uses' => 'App\Modules\Auth\Controllers\AuthController@getLogout'));
