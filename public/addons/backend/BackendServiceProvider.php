<?php namespace App\Addons\Backend;

class BackendServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function register()
	{
		\Log::debug("BackendServiceProvider registered");
	}

}
