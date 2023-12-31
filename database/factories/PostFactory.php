<?php

namespace Database\Factories;

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
      "title" => $this->faker->sentence(mt_rand(2, 5)),
      "category_id" => $this->faker->numberBetween(1, 3),
      "slug" => $this->faker->slug(),
      "excerpt" => $this->faker->paragraph(10),
      'body' => collect($this->faker->paragraphs(mt_rand(10, 25)))
        ->map(function ($p) {
          return "<p>$p</p>";
        })
        ->implode(''),
    ];
  }
}
