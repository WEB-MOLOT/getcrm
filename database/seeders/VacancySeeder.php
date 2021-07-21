<?php

namespace Database\Seeders;

use App\Models\Vacancy;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class VacancySeeder extends Seeder
{
    /**
     * @throws FileNotFoundException
     */
    public function run(): void
    {
        foreach ($this->vacancies as $vacancy) {
            $vacancy['content'] = Storage::disk('storage')->get($vacancy['content']);
            Vacancy::factory()->create($vacancy);
        }
    }

    protected array $vacancies = [
        [
            'title' => 'Бизнес-консультант ИТ-проектов',
            'content' => 'data/vacancies/1.txt',
            'hh' => 'https://hh.ru/vacancy/45232010',
            'params' => [
                'salary' => '150 000 - 200 000 на руки',
                'experience' => '3-6 лет',
                'employment' => 'Полная занятость, полный день',
            ],
        ],
    ];
}
