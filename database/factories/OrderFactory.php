<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween($min = 1500, $max = 6000),
            'quantity' => $this->faker->numberBetween($min = 1, $max = 5),
            'product_name' => ucfirst($this->faker->words(3, true)),
            // 'product_name' => $this->faker->text(10),
            'user_id' => User::factory()
        ];
    }
}
