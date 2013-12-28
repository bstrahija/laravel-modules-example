<?php namespace App\Modules\Content\Models;

class Entry {

	protected $entries = array(
		array(
			'title' => 'About',
			'slug'  => 'about',
			'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos, ex, blanditiis esse sapiente rem dolor sint tempore eligendi cumque voluptatem sit et necessitatibus repellendus minima quo temporibus magni est.',
		),
		array(
			'title' => 'Contact',
			'slug'  => 'contact',
			'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos, ex, blanditiis esse sapiente rem dolor sint tempore eligendi cumque voluptatem sit et necessitatibus repellendus minima quo temporibus magni est.',
		),
		array(
			'title' => 'First article',
			'slug'  => 'first-article',
			'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos, ex, blanditiis esse sapiente rem dolor sint tempore eligendi cumque voluptatem sit et necessitatibus repellendus minima quo temporibus magni est.',
		),
		array(
			'title' => 'Second article',
			'slug'  => 'second-article',
			'body'  => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus, dignissimos, ex, blanditiis esse sapiente rem dolor sint tempore eligendi cumque voluptatem sit et necessitatibus repellendus minima quo temporibus magni est.',
		),
	);

	public function all()
	{
		return $this->entries;
	}

	public function find($id)
	{
		foreach ($this->entries as $key => $entry)
		{
			if ($id == $key) return $entry;
		}
	}

	public function findBySlug($slug)
	{
		foreach ($this->entries as $entry)
		{
			if ($entry['slug'] == $slug) return $entry;
		}
	}

}
