<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\FilterValue;
use Illuminate\Database\Eloquent\Factories\Factory;

class FilterValueFactory extends Factory
{
    protected $model = FilterValue::class;

    public function definition(): array
    {
        return [
            'filter_id' => null,
            'name' => $this->faker->unique()->city,
            'order' => 100,
        ];
    }
}
