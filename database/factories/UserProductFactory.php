<?php

namespace Database\Factories;

use App\Models\UserProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProductFactory extends Factory
{
    protected $model = UserProduct::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'name' => $this->faker->country,
            'finished_at' => $this->faker->dateTimeBetween('-1 month', '+3 months'),
            'created_at' => null,
            'code' => 'CIS ' . $this->faker->numberBetween(100000, 999999),
        ];
    }
}
