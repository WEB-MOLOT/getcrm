<?php

namespace Database\Factories;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class NewsItemFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = NewsItem::class;

    /**
     * @return array
     */
    #[ArrayShape(['title' => "string", 'description' => "string", 'content' => "array|string", 'image' => "string"])]
    public function definition(): array
    {
        $imagePath = public_path('storage/news');

        return [
            'title' => trim($this->faker->sentence, '.'),
            'description' => $this->faker->sentence(14, true),
            'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(12)) . '</p>',
            'image' => 'storage/news/' . $this->faker->image(dir: $imagePath, category: 'animals', fullPath: false),
        ];
    }
}
