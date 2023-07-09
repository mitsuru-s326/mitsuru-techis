<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => 'active',
            'title' => $this->faker->country(),
            'genre' => $this->faker->city(),
            'time' => $this->faker->time(),
            'introduction' => $this->faker->realText(),
            'material' => $this->faker->realText(80),
            'image' => $this->faker->imageUrl(480, 300),
            'price' => $this->faker->randomNumber(6, true),
            'recipe' => $this->faker->url(),
            

        ];
    }
}
