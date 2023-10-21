<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BreedFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(array ('Miniature', 'Punganur', 'Short Varieties')),
            'short_description' => $this->faker->text,
            'long_description' => $this->faker->text,
            'image' => $this->faker->randomElement(array ('1_1696768543.png', '1_1696768588.png')),
            'link' => $this->faker->randomElement(array ('https://minicows.co.in/miniature.html', 'https://minicows.co.in/miniature.html')),
        ];
    }
}
