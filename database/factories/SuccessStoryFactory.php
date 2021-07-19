<?php

namespace Database\Factories;

use App\Models\SuccessStory;
use Illuminate\Database\Eloquent\Factories\Factory;

class SuccessStoryFactory extends Factory
{
    protected $model = SuccessStory::class;

    public function definition(): array
    {
        $imagePath = public_path('storage/stories/images');

        $logoPath = public_path('storage/stories/logos');

        return [
            'title' => trim($this->faker->sentence, '.'),
            'image' => config('dev.load_images') ? 'storage/stories/images/'
                . $this->faker->image(dir: $imagePath, width: 342, height: 165, fullPath: false)
                : 'storage/html/img/history.png',
            'logo' => config('dev.load_images') ? 'storage/stories/logos/'
                . $this->faker->image(dir: $logoPath, width: 160, height: 90, fullPath: false)
                : 'storage/html/img/airlines.png',
            'logo2' => config('dev.load_images') ? 'storage/stories/logos/'
                . $this->faker->image(dir: $logoPath, width: 160, height: 90, fullPath: false)
                : 'storage/html/img/airlines2.png',
        ];
    }
}
