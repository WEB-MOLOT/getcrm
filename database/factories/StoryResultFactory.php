<?php

namespace Database\Factories;

use App\Models\StoryResult;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class StoryResultFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = StoryResult::class;

    /**
     * @return array
     */
    #[ArrayShape([
        'before' => "string",
        'after' => "string",
        'description' => "string",
        'success_story_id' => "null"
    ])]
    public function definition(): array
    {
        $beforePath = public_path('storage/stories/before');

        $afterPath = public_path('storage/stories/after');

        return [
            'before' => config('dev.load_images') ? 'storage/stories/before/'
                . $this->faker->image(dir: $beforePath, width: 328, height: 627, category: 'animals', fullPath: false) : null,
            'after' => config('dev.load_images') ? 'storage/stories/after/'
                . $this->faker->image(dir: $afterPath, width: 328, height: 627, category: 'animals', fullPath: false) : null,
            'description' => $this->faker->sentence(10),
            'success_story_id' => null,
        ];
    }
}
