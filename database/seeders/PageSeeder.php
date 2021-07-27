<?php

namespace Database\Seeders;

use App\Enums\BlockType;
use App\Models\Page;
use App\Models\PageBlock;
use App\Models\Pages\AboutPage;
use App\Models\Pages\ContactsPage;
use App\Models\Pages\CustomExperiencePage;
use App\Models\Pages\HomePage;
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
            } else {
                $page->seo()->save(SeoData::factory()->makeOne());
            }

        }
    }

    protected function loadFromSpreadsheet(Page $page, Spreadsheet $spreadsheet)
    {
        // открыть нужный лист
        $sheet = $spreadsheet->getSheetByName($page->slug);

        if ($sheet) {
            $data = $sheet->toArray();
            foreach ($data as $key => $line) {
                if (empty($line[0])) {
                    break;
                }

                $attributes = [
                    'slug' => $line[0],
                    'label' => $line[1],
                    'type' => constant(BlockType::class . '::' . $line[2]),
                    'content' => $this->getValue($line[2], $line),
                    'order' => $key,
                ];
                $page->blocks()->create($attributes);
            }
        }
    }

    protected function getValue(string $type, array $line)
    {
        $startIndex = 3;

        $elements = [];

        $content = $line[$startIndex];

        if (strtolower($type) === BlockType::LIST) {

            while (array_key_exists($startIndex, $line)) {
                $elements[] = json_encode(['name' => $line[$startIndex++]]);
            }

            $content = implode(PageBlock::SEPARATOR, $elements);
        }

        if (strtolower($type) === BlockType::LIST_WITH_ICON) {

            while (array_key_exists($startIndex, $line)) {
                $parts = explode('|||', $line[$startIndex++]);
                $elements[] = json_encode([
                    'name' => $parts[1],
                    'icon' => $parts[0],
                ]);
            }

            $content = '[' . implode(',', $elements) . ']';
        }

        $content = trim($content, " \t\n\r\0\x0B\"");

        return $content;
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
            'model' => HomePage::class,
            'blocks' => 'xlsx',
        ],
        'dimarke' => [
            'name' => 'ДИМАРКЭ - ПЛАТФОРМА ЦИФРОВОГО МАРКЕТИНГА',
            'model' => LandingPage::class,
            'blocks' => 'xlsx',
        ],
        'privacy' => [
            'name' => 'Политика конфиденциальности',
            'model' => PrivacyPage::class,
            'blocks' => 'xlsx',
        ],

        // Страницы списков и модульные страницы
        'price' => [
            'name' => 'Расчет цены',
        ],
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
