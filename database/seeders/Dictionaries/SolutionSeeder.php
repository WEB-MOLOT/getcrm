<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Filter;
use App\Models\Dictionaries\Solution;
use App\Models\Dictionaries\SolutionFunctionality;
use Illuminate\Database\Seeder;

class SolutionSeeder extends Seeder
{
    public function run(): void
    {
        $filters = Filter::query()->oldest('order')->with('values')->get();

        foreach ($this->solutions as $solution) {
            /** @var Solution $solution */
            $solution = Solution::factory()->create([
                'name' => $solution['name'],
            ]);

            $solution->functionalities()->saveMany(SolutionFunctionality::factory(10)->make());

            for ($i = 1; $i <= 3; $i++) {
                $params = collect();

                foreach ($filters as $filter) {
                    $params->put($filter->id, (string)$filter->values->random()->id);
                }

                $solution->filters()->create([
                    'params' => $params->toArray(),
                ]);
            }
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
