<?php

namespace Database\Factories;

use App\Models\Product;
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
    public function definition(): array
    {
        $product = Product::inRandomOrder()->first();
        $orderTime = now()->subMinutes(rand(10, 100000));
        return [
            'user_id' => User::inRandomOrder()->value('id'),
            'product_id' => $product->id,
            'price' => $product->price,
            'created_at' => $orderTime,
            'updated_at' => $orderTime,
        ];
    }
}
