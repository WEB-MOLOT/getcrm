<?php

namespace Database\Seeders\Dictionaries;

use App\Models\Dictionaries\Filter;
use App\Models\Dictionaries\Solution;
use App\Models\Dictionaries\SolutionFunctionality;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class SolutionSeeder extends Seeder
{
    /**
     * @throws \Exception
     */
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

            // по одному значению
            foreach ($filters as $filter) {
                /** @var Collection $tmp */
                $tmp = $filter->values;
                for ($i = 1; $i <= 1; $i++) {
                    $params = collect();
                    //$random = random_int(0, $tmp->count() - 1);
                    //dump('filter=' . $filter->id, 'count=' . $tmp->count(), 'rnd=' . $random);
                    $item = $tmp->random();
                    $params->put($filter->id, (string)$item->id);
                    $solution->filters()->create([
                        'params' => $params->toArray(),
                    ]);
                }
            }

            for ($i = 1; $i <= 2; $i++) {
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
