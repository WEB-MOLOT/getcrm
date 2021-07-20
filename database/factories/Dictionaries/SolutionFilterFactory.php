<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\SolutionFilter;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionFilterFactory extends Factory
{
    protected $model = SolutionFilter::class;

    public function definition(): array
    {
        return [
            'solution_id' => null,
            'params' => [],
        ];
    }
}
