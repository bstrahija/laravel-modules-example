<?php namespace App\Modules\Content;

class AnotherServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function register()
	{
		\Log::debug("AnotherServiceProvider registered");
	}

}
