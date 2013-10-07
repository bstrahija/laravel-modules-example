<?php namespace App\Modules\Content\Controllers;

use View;

/**
 * Content controller
 * @author Boris Strahija <bstrahija@gmail.com>
 */
class ContentController extends \BaseController {

	public function getHome()
	{
		return View::make('content::index');
	}

	public function getPage($slug)
	{
		return View::make('content::page');
	}

	public function getArticle($slug)
	{
		return View::make('content::article');
	}

	public function getProduct($id)
	{
		return View::make('content::product');
	}

}
