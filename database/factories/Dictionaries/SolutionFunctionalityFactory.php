<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\SolutionFunctionality;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionFunctionalityFactory extends Factory
{
    protected $model = SolutionFunctionality::class;

    public function definition(): array
    {
        return [
            'solution_id' => null,
            'name' => $this->faker->sentence,
        ];
    }
}
