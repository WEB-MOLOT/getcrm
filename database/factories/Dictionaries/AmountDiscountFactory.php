<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\AmountDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;

class AmountDiscountFactory extends Factory
{
    protected $model = AmountDiscount::class;

    public function definition(): array
    {
        $from = $this->faker->numberBetween(100, 10000);

        return [
            'from_amount' => $from,
            'to_amount' => $this->faker->numberBetween($from + 1000, $from + 2500),
            'discount' => $this->faker->numberBetween(10, 50),
            'order' => 100,
        ];
    }
}
