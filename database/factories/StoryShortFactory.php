<?php

namespace Database\Factories;

use App\Models\StoryShort;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoryShortFactory extends Factory
{
    protected $model = StoryShort::class;

    public function definition(): array
    {
        return [
            'success_story_id' => null,
            'line' => $this->faker->words(3, true),
        ];
    }
}
