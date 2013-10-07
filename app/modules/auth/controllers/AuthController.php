<?php namespace App\Modules\Auth\Controllers;

use Auth, Input, Redirect, View;

/**
 * Authentication controller
 * @author Boris Strahija <bstrahija@gmail.com>
 */
class AuthController extends \BaseController {

	/**
	 * Display login screen
	 * @return View
	 */
	public function getLogin()
	{
		return View::make('auth::login');
	}

	/**
	 * Attempt to login
	 * @return Redirect
	 */
	public function postLogin()
	{
		$credentials = array(
			'username' => Input::get('username'),
			'password' => Input::get('password'),
		);

		if (Auth::attempt($credentials))
		{
		    return Redirect::intended('dashboard');
		}

		return Redirect::route('login')->with('errors', 'Login failed!');
	}

	/**
	 * Log a user out
	 * @return Redirect
	 */
	public function getLogout()
	{
		return Redirect::route('login');
	}

}
