<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'customer_name' => $this->faker->name,
            'profession' => $this->faker->jobTitle,
            'description' => $this->faker->text,
            'image' => $this->faker->randomElement(array ('1_1696768543.png', '1_1696768588.png')),
            'updated_at' => $this->faker->dateTime('now'),
        ];
    }
}
