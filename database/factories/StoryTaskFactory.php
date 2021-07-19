<?php

namespace Database\Factories;

use App\Models\StoryTask;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;

class StoryTaskFactory extends Factory
{
    protected $model = StoryTask::class;

    /**
     * @throws Exception
     */
    public function definition(): array
    {
        return [
            'success_story_id' => null,
            'line' => $this->faker->sentences(random_int(1, 2), true),
        ];
    }
}
