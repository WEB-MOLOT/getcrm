<?php

namespace Database\Factories;

use App\Models\Solution;
use Illuminate\Database\Eloquent\Factories\Factory;

class SolutionFactory extends Factory
{
    protected $model = Solution::class;

    public function definition(): array
    {
        $imagePath = public_path('storage/solutions/images');

        $pdfPath = public_path('storage/solutions/booklets');

        return [
            'subtitle' => $this->faker->sentence,
            'image' => 'storage/solutions/images/' . $this->faker->image(dir: $imagePath, width: 1180, height: 500, fullPath: false),
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/JhrTwuRg5Q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'description' => $this->faker->paragraph(5),
            'booklet' => 'storage/solutions/booklets/demo.pdf',
        ];
    }
}
