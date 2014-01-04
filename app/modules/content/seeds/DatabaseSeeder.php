<?php namespace App\Modules\Content\Seeds;

use Eloquent, Str;
use App\Modules\Content\Models\Entry;

class DatabaseSeeder extends \Seeder {

	/**
	 * Run the database seeds.
	 * @return void
	 */
	public function run()
	{
		$faker = \Faker\Factory::create();
		Eloquent::unguard();

		// Default pages
		Entry::create(array(
			'title' => 'About',
			'slug'  => 'about',
			'body'  => $faker->text(500),
		));
		Entry::create(array(
			'title' => 'Contact',
			'slug'  => 'contact',
			'body'  => $faker->text(500),
		));

		// More entries
		foreach (range(1, 20) as $index)
		{
			$title = $faker->sentence(5);
			$slug  = Str::slug($title);

			Entry::create(array(
				'title' => $title,
				'slug'  => $slug,
				'body'  => $faker->text(500),
				'type'  => 'article',
			));
		}
	}

}
