<?php

namespace Database\Factories;

use App\Enums\SettingSection;
use App\Enums\SettingType;
use App\Models\Setting;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class SettingFactory extends Factory
{
    protected $model = Setting::class;

    #[ArrayShape([
        'title' => "string",
        'section' => "string",
        'name' => "string",
        'type' => "string",
        'value' => "int|string"
    ])]
    public function definition(): array
    {
        $type = $this->faker->randomElement(SettingType::values());

        $value = match ($type) {
            SettingType::TEXT, SettingType::TEXTAREA => $this->faker->sentence,
            SettingType::NUMBER => $this->faker->numberBetween(100, 9999),
            default => null,
        };

        return [
            'title' => $this->faker->sentence,
            'section' => $this->faker->randomElement(SettingSection::values()),
            'name' => $this->faker->unique()->lexify('???????'),
            'type' => $type,
            'value' => $value,
        ];
    }
}
