<?php

namespace Database\Factories;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsItemFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = NewsItem::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        $imagePath = public_path('storage/news');

        return [
            'published_at' => $this->faker->optional()->dateTimeBetween('-2 weeks', '+1 week'),
            'slug' => $this->faker->unique()->slug,
            'title' => trim($this->faker->sentence, '.'),
            'description' => $this->faker->sentence(14, true),
            'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(12)) . '</p>',
            'image' => config('dev.load_images') ? 'storage/news/'
                . $this->faker->image(dir: $imagePath, width: 464, height: 150, fullPath: false)
                : 'storage/html/img/news.jpg',
        ];
    }
}
