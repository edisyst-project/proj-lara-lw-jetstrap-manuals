<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class TodoFactory extends Factory
{
    public function definition()
    {
        $values = ['pending', 'accomplished'];

        return [
            'title' => $this->faker->colorName,
            'desc' => $this->faker->text(50),
            'status' => Arr::random( $values)
        ];
    }
}
