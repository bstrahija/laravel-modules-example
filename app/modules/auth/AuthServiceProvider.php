<?php namespace App\Modules\Auth;

class AuthServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function register()
	{
		\Log::debug("AuthServiceProvider registered");
	}

}
