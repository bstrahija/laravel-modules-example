<?php namespace App\Modules\Content\Models;

class Entry extends \Eloquent {

	protected $guarded = array('id');

	/**
	 * Find page
	 * @param  Query  $query
	 * @return Query
	 */
	public static function scopePage($query, $slug = null)
	{
		if ($slug) $query->where('slug', $slug);

		return $query->where('type', 'page');
	}

	/**
	 * Find article
	 * @param  Query  $query
	 * @return Query
	 */
	public static function scopeArticle($query, $slug = null)
	{
		if ($slug) $query->where('slug', $slug);

		return $query->where('type', 'article');
	}

	/**
	 * Find product
	 * @param  Query  $query
	 * @return Query
	 */
	public static function scopeProduct($query)
	{
		return $query->where('type', 'article');
	}

	/**
	 * Find entry by slug
	 * @param  Query  $query
	 * @param  string $slug
	 * @return Query
	 */
	public static function scopeBySlug($query, $slug = null)
	{
		return $query->where('slug', $slug);
	}

}
