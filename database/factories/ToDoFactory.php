<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ToDo>
 */
class ToDoFactory extends Factory
{
    use HasFactory;



   public function definition(): array
{
    return [
        "content" => $this->faker->sentence(5),
        "completed" => $this->faker->boolean(),
        "priority" => $this->faker->randomElement(['low', 'medium', 'high']) // konkrētas 
    ];
}
}
