<?php

namespace Database\Seeders;

use App\Enums\BlockType;
use App\Models\Page;
use App\Models\Pages\AboutPage;
use App\Models\Pages\ContactsPage;
use App\Models\Pages\CustomExperiencePage;
use App\Models\Pages\LandingPage;
use App\Models\Pages\PrivacyPage;
use App\Models\SeoData;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Artisan::call('test:spreadsheet');

        $file = storage_path('app/content.xlsx');

        $spreadsheet = IOFactory::load($file);

        foreach ($this->pages as $slug => $params) {
            /** @var Page $page */
            $page = Page::factory()
                ->create([
                    'slug' => $slug,
                    'name' => $params['name'],
                ]);

            if (array_key_exists('blocks', $params)) {
                if ($params['blocks'] === 'xlsx') {
                    $this->loadFromSpreadsheet($page, $spreadsheet);
                } else {
                    $page->blocks()->createMany($params['blocks']);
                }
            }

            if (array_key_exists('model', $params)) {

                /** @var Page $pageModel */
                $pageModel = (new $params['model']);
                $pageModel = $pageModel->find($page->id);
                $pageModel->seo()->save(SeoData::factory()->makeOne());
            }

        }
    }

    protected function loadFromSpreadsheet(Page $page, Spreadsheet $spreadsheet)
    {
        // открыть нужный лист
        $sheet = $spreadsheet->getSheetByName($page->slug);

        if ($sheet) {
            $data = $sheet->toArray();
            foreach ($data as $line) {
                $page->blocks()->create([
                    'slug' => $line[0],
                    'label' => $line[1],
                    'type' => constant(BlockType::class . '::' . $line[2]),
                    'content' => $line[3],
                ]);
            }
        }
    }

    protected array $pages = [
        // Контентные страницы
        'about' => [
            'name' => 'О компании',
            'model' => AboutPage::class,
            'blocks' => 'xlsx',
        ],
        'contacts' => [
            'name' => 'Контакты',
            'model' => ContactsPage::class,
            'blocks' => 'xlsx',
        ],
        'customer' => [
            'name' => 'Что такое Customer Experience (CX)?',
            'model' => CustomExperiencePage::class,
            'blocks' => 'xlsx',
        ],
        'form' => [
            'name' => 'Отдел продаж',
            'blocks' => 'xlsx',
        ],
        'index' => [
            'name' => 'Главная',
            'blocks' => 'xlsx',
        ],
        'dimarke' => [
            'name' => 'ДиМарКЭ - Платформа цифрового маркетинга',
            'model' => LandingPage::class,
        ],
        'price' => [
            'name' => 'Расчет цены',
            'blocks' => 'xlsx',
        ],
        'privacy' => [
            'name' => 'Политика конфиденциальности',
            'model' => PrivacyPage::class,
            'blocks' => 'xlsx',
        ],

        // Страницы списков
        'news' => [
            'name' => 'Новости',
        ],
        'job' => [
            'name' => 'Вакансии',
        ],
        'success_stories' => [
            'name' => 'Истории успеха',
        ],
    ];
}
