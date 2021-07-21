<?php

namespace Database\Factories;

use App\Models\SolutionEffect;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionEffectFactory extends Factory
{
    protected $model = SolutionEffect::class;

    /**
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'solution_id' => null,
            'line1' => $this->faker->numberBetween(5, 50) . '%',
            'line2' => $this->faker->words(random_int(2, 3), true),
            'fire' => $this->faker->randomElement([
                -1,
                0,
                1
            ]),
        ];
    }
}
