<?php

use Illuminate\Database\Seeder;
use EloquentORM\Book;
use Faker\Factory as Faker;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i = 0; $i < 20; $i++){
            Book::create([
                'title' => $faker->name,
                'description' => $faker->text(),
            ]);
        }
    }
}
