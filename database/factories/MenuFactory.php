<?php

namespace Database\Factories;

use App\Enums\MenuType;
use App\Models\Menu;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    protected $model = Menu::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->randomElement(MenuType::values()),
            'page_id' => null,
            'name' => $this->faker->name,
            'order' => 100,
        ];
    }
}
