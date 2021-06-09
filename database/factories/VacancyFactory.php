<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class VacancyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    #[ArrayShape(['title' => "string", 'content' => "array|string", 'hh' => "string", 'params' => "string[]"])]
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraphs(3, true),
            'hh' => 'https://hh.ru/vacancy/' . $this->faker->numberBetween(45000000, 45212758),
            'params' => [
                'salary' => $this->faker->randomElement(['от', 'до']) . ' ' . $this->faker->numberBetween(70000, 240000),
                'experience' => $this->faker->numberBetween(5, 9) . ' лет',
                'employment' => $this->faker->randomElement(['Полная занятость', 'Удаленная работа']) . ', полный день',
            ],
        ];
    }
}
