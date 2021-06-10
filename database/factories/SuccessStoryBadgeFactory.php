<?php

namespace Database\Factories;

use App\Models\SuccessStoryBadge;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SuccessStoryBadgeFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = SuccessStoryBadge::class;

    /**
     * @return array
     */
    #[ArrayShape(['title' => "string", 'value' => "int", 'success_story_id' => "null"])]
    public function definition(): array
    {
        return [
            'title' => trim($this->faker->sentence, '.'),
            'value' => $this->faker->optional()->numberBetween(1, 30),
            'success_story_id' => null,
        ];
    }
}
