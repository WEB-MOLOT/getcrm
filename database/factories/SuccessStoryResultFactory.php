<?php

namespace Database\Factories;

use App\Models\SuccessStoryResult;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SuccessStoryResultFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = SuccessStoryResult::class;

    /**
     * @return array
     */
    #[ArrayShape(['before' => "string", 'after' => "string", 'description' => "string", 'success_story_id' => "null"])]
    public function definition(): array
    {
        $beforePath = public_path('storage/stories/before');

        $afterPath = public_path('storage/stories/after');

        return [
            'before' => 'storage/stories/before/' . $this->faker->image(dir: $beforePath, category: 'animals', fullPath: false),
            'after' => 'storage/stories/after/' . $this->faker->image(dir: $afterPath, category: 'animals', fullPath: false),
            'description' => $this->faker->sentence(10),
            'success_story_id' => null,
        ];
    }
}
