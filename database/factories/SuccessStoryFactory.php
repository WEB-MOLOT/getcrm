<?php

namespace Database\Factories;

use App\Models\SuccessStory;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SuccessStoryFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = SuccessStory::class;

    /**
     * @return array
     */
    #[ArrayShape(['title' => "string", 'image' => "string", 'logo' => "string", 'short_about' => "array", 'tasks' => "array", 'solution' => "array"])] public function definition(): array
    {
        $imagePath = public_path('storage/stories/images');

        $logoPath = public_path('storage/stories/logos');

        return [
            'title' => trim($this->faker->sentence, '.'),
            'image' => 'storage/stories/images/' . $this->faker->image(dir: $imagePath, category: 'animals', fullPath: false),
            'logo' => 'storage/stories/logos/' . $this->faker->image(dir: $logoPath, category: 'animals', fullPath: false),
            'short_about' => [
                $this->faker->sentence(2),
                $this->faker->sentence(2),
                $this->faker->sentence(3),
                $this->faker->sentence(1),
            ],
            'tasks' => $this->faker->sentences(6),
            'solution' => $this->faker->sentences(6),
        ];
    }
}
