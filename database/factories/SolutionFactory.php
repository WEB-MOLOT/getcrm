<?php

namespace Database\Factories;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SolutionFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Solution::class;

    /**
     * @return array
     */
    #[ArrayShape([
        'title' => "string",
        'subtitle' => "string",
        'image' => "string",
        'video' => "string",
        'description' => "string"
    ])]
    public function definition(): array
    {
        $imagePath = public_path('storage/solutions/images');

        return [
            'title' => trim($this->faker->sentence(3), '.'),
            'subtitle' => $this->faker->sentence,
            'image' => 'storage/solutions/images/' . $this->faker->image(dir: $imagePath, width: 1180, height: 500, fullPath: false),
            'video' => 'https://www.youtube.com/watch?v=tWRZSD8i8Vk',
            'description' => $this->faker->paragraph(5),
        ];
    }
}
