<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDo>
 */
class DiaryFactory extends Factory
{
    use HasFactory;



   public function definition(): array
{
    return [
        'title' => $this->faker->sentence(3),
        'body' => $this->faker->paragraph(3),
        'date' => $this->faker->date() // konkrētas 
    ];
}
}
