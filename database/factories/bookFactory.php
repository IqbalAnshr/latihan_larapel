<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;

// /**
//  * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
//  */
class bookFactory extends Factory
{

    protected $model = Book::class;

    public function definition(): array
    {
        return [
            'tittle' => $this->faker->sentence(),
            'writer' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000, 100000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
