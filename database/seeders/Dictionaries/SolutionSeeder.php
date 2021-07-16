<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Solution;
use App\Models\Dictionaries\SolutionFunctionality;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->solutions as $solution) {
            /** @var Solution $solution */
            $solution = Solution::factory()->create([
                'name' => $solution['name'],
            ]);

            $solution->functionalities()->saveMany(SolutionFunctionality::factory(10)->make());
        }
    }

    protected array $solutions = [
        [
            'name' => 'Система кросс-канальных коммуникаций',
        ],
        [
            'name' => 'Система персонализации контента сайта',
        ],
        [
            'name' => 'Система анализа поведения клиентов в цифровых ресурсах',
        ],
        [
            'name' => 'Программа Лояльности',
        ],
        [
            'name' => 'Система автоматизации контакт-центра и управления сервисными обращениями',
        ],
        [
            'name' => 'Профиль клиента и продажи',
        ],
    ];
}
