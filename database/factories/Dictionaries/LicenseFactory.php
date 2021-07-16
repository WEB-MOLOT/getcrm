<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\License;
use Illuminate\Database\Eloquent\Factories\Factory;

class LicenseFactory extends Factory
{
    protected $model = License::class;

    public function definition(): array
    {
        return [
            'service_id' => null,
            'pre_id' => null,
            'recommendation_id' => null,
            'name' => $this->faker->unique()->countryISOAlpha3,
            'metric' => $this->faker->word,
            'metric_value' => $this->faker->numberBetween(50, 100),
            'metric_period' => $this->faker->numberBetween(1, 12),
            'price' => $this->faker->numberBetween(10000, 120000),
            'quantity' => $this->faker->numberBetween(1, 10),
            'support' => $this->faker->words(2, true),
            'line' => $this->faker->words(2, true),
        ];
    }
}
