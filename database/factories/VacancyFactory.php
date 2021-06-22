<?php

namespace Database\Factories;

use App\Models\Vacancy;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class VacancyFactory extends Factory
{
    /**
     * @var string
     */
    protected $model = Vacancy::class;

    /**
     * @return array
     */
    #[ArrayShape([
        'title' => "string",
        'content' => "array|string",
        'hh' => "string",
        'params' => "string[]"
    ])]
    public function definition(): array
    {
        return [
            'title' => trim($this->faker->sentence, '.'),
            'content' => '<p>' . implode('</p><p>', $this->faker->paragraphs(3)) . '</p>',
            'hh' => 'https://hh.ru/vacancy/' . $this->faker->numberBetween(45000000, 45212758),
            'params' => [
                'salary' => $this->faker->randomElement([
                        'от',
                        'до'
                    ]) . ' '
                    . number_format(num: $this->faker->numberBetween(70000, 240000), thousands_separator: ' ')
                    . ' руб.',
                'experience' => $this->faker->randomElement([
                        'от',
                        'до'
                    ]) . ' '
                    . $this->faker->numberBetween(5, 9) . ' лет',
                'employment' => $this->faker->randomElement([
                        'Полная занятость',
                        'Удаленная работа'
                    ]) . ', полный день',
            ],
        ];
    }
}
