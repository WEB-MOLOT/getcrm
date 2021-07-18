<?php

namespace Database\Factories;

use App\Models\SeoData;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeoDataFactory extends Factory
{
    protected $model = SeoData::class;

    public function definition(): array
    {
        return [
            'seoable_id' => null,
            'seoable_type' => null,
            'title' => $this->faker->optional()->sentence,
            'keywords' => implode(', ', $this->faker->optional()->words() ?: []),
            'description' => $this->faker->optional()->sentence(2, true),
            'disable_index' => $this->faker->boolean(),
        ];
    }
}
