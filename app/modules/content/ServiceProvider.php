<?php namespace App\Modules\Content;

class ServiceProvider extends \Illuminate\Support\ServiceProvider {

	public function register()
	{
		// Register facades
		$this->app->booting(function()
		{
			$loader = \Illuminate\Foundation\AliasLoader::getInstance();
			$loader->alias('Entry', 'App\Modules\Content\Facades\EntryFacade');
		});
	}

}
