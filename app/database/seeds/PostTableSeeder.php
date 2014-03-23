<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Post::create([
				'title' => $faker->sentence,
				'body' => implode("", $faker->paragraphs),
				'slug' => str_replace(' ', '-', $faker->sentence),
				'excerpt' => $faker->paragraph,
				'published_at' => $faker->unixTime,
			]);
		}
	}

}
