<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $imagePath = public_path('storage/services/images');

        return [
            'title' => trim($this->faker->sentence(3), '.'),
            'subtitle' => $this->faker->sentence,
            'image' => 'storage/services/images/' . $this->faker->image(dir: $imagePath, width: 1180, height: 500, fullPath: false),
            'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/JhrTwuRg5Q4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            'description' => $this->faker->paragraph(5),
        ];
    }
}
