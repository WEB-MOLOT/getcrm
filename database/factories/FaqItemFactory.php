<?php

namespace Database\Factories;

use App\Models\FaqItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class FaqItemFactory extends Factory
{
    protected $model = FaqItem::class;

    public function definition()
    {
        return [
            'question' => $this->faker->sentence,
            'answer' => $this->faker->sentences(3, true),
        ];
    }
}
