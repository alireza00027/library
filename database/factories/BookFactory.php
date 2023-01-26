<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'user_id' => rand(1, 10),
            'category_id' => rand(1, 7),
            'title' => $this->faker->sentence(3),
            'writer' => $this->faker->name(),
            'img' => 'book-' . rand(1, 10) . '.png',
            'file' => 'file-' . rand(1, 5) . '.pdf',
            'release_date' => rand(1990, 2020)
        ];
    }
}
