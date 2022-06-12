<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'photo' => $this->faker->imageUrl(320,160),
            'text' => $this->faker->text(),
            'user_id' => User::all()->random()->id,
            //
        ];
    }
}
