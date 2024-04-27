<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1, // Asocia la imagen con un usuario falso
            'title' => $this->faker->sentence,
            'src' => 'default.png' // Ruta de la imagen
        ];
    }
}
