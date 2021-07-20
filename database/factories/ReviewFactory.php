<?php

namespace Database\Factories;

use App\Models\Review;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    protected $model = Review::class;

    /**
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'user_id' => null,
            'reviewable_type' => null,
            'reviewable_id' => null,
            'text' => $this->faker->sentences(random_int(2, 8), true),
            'score' => $this->faker->randomFloat(1, 3, 5),
            'score_development' => $this->faker->numberBetween(3, 5),
            'score_usability' => $this->faker->numberBetween(3, 5),
            'score_team' => $this->faker->numberBetween(3, 5),
            'score_budget' => $this->faker->numberBetween(3, 5),
            'score_deadlines' => $this->faker->numberBetween(3, 5),
            'is_moderated' => $this->faker->boolean,
        ];
    }
}
