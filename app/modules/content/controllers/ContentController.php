<?php namespace App\Modules\Content\Controllers;

use App, Entry, View;

/**
 * Content controller
 * @author Boris Strahija <bstrahija@gmail.com>
 */
class ContentController extends \BaseController {

	public function getHome()
	{
		$entries = Entry::all();

		return View::make('content::index', array('entries' => $entries));
	}

	public function getPage($slug)
	{
		$entry = Entry::bySlug($slug)->first();

		if ($entry) return View::make('content::page', compact($entry));
		else        return App::abort(404, 'Page not found');
	}

	public function getArticle($slug)
	{
		$entry = Entry::bySlug($slug)->first();

		if ($entry) return View::make('content::article', compact($entry));
		else        return App::abort(404, 'Article not found');
	}

	public function getProduct($id)
	{
		$entry = Entry::find($id);

		if ($entry) return View::make('content::product', compact($entry));
		else        return App::abort(404, 'Product not found');
	}

}
