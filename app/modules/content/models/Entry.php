<?php namespace App\Modules\Content\Models;

class Entry extends \Eloquent {

	protected $guarded = array('id');

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
