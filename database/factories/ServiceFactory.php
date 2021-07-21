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
            'video' => 'https://www.youtube.com/watch?v=tWRZSD8i8Vk',
            'description' => $this->faker->paragraph(5),
        ];
    }
}
