<?php

namespace Database\Factories\Dictionaries;

use App\Models\Dictionaries\Platform;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PlatformFactory extends Factory
{
    protected $model = Platform::class;

    #[ArrayShape([
        'name' => "string",
        'description' => "string"
    ])]
    public function definition(): array
    {
        return [
            'name' => ucwords($this->faker->unique()->words(2, true)),
            'description' => $this->faker->sentences(3, true),
        ];
    }
}
