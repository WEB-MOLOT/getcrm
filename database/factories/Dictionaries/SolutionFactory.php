<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SolutionFactory extends Factory
{
    protected $model = Solution::class;

    #[ArrayShape([
        'name' => "string",
        'description' => "string"
    ])]
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'description' => $this->faker->sentences(3, true),
        ];
    }
}
