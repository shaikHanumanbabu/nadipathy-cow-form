<?php

namespace Database\Seeders;

use Faker\Factory;
use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselSeeder extends Seeder
{
    // public Factory $faker;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = app(Generator::class);

        DB::table('carousels')->insert([
            'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'image' => $faker->randomElement(array ('http://127.0.0.1:8000/img/carousel-4.jpg', 'http://127.0.0.1:8000/img/carousel-3.jpg')),
            'link' => $faker->randomElement(array ('http://127.0.0.1:8000/punganur.html', 'http://127.0.0.1:8000/miniature.html')),
            'created_at' => $faker->dateTime('now'),
            'updated_at' => $faker->dateTime('now'),
        ]);
    }
}
