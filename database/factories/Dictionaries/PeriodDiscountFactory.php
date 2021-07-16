<?php

namespace Database\Factories\Dictionaries;

use App\Enums\UnitType;
use App\Models\Dictionaries\PeriodDiscount;
use Illuminate\Database\Eloquent\Factories\Factory;

class PeriodDiscountFactory extends Factory
{
    protected $model = PeriodDiscount::class;

    public function definition(): array
    {
        $fromPeriod = $this->faker->numberBetween(1, 12);

        return [
            'from_period' => $fromPeriod,
            'from_unit' => UnitType::MONTHS,
            'to_period' => $this->faker->numberBetween($fromPeriod, $fromPeriod + 3),
            'to_unit' => UnitType::MONTHS,
            'discount' => $this->faker->numberBetween(10, 50),
            'order' => 100,
        ];
    }
}
