<?php

namespace Database\Seeders;

use App\Enums\SettingSection;
use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    public function run(): void
    {
        foreach ($this->smtpSettings as $name => $setting) {
            Setting::factory()->create([
                'section' => SettingSection::SMTP,
                'type' => $setting['type'],
                'value' => $setting['value'],
                'title' => $setting['title'],
                'name' => $name,
            ]);
        }

        foreach ($this->siteSettings as $name => $setting) {
            Setting::factory()->create([
                'section' => SettingSection::SITE,
                'type' => $setting['type'],
                'value' => $setting['value'],
                'title' => $setting['title'],
                'name' => $name,
            ]);
        }
    }

    protected array $siteSettings = [
        'site.title' => [
            'type' => 'text',
            'value' => 'GETCRM.RU',
            'title' => 'Название сайта <title>',
        ],
        'site.description' => [
            'type' => 'text',
            'value' => 'getcrm description',
            'title' => 'Краткое описание сайта <description>',
        ],
        'site.keywords' => [
            'type' => 'text',
            'value' => 'getcrm, business',
            'title' => 'Ключевые слова <keywords>',
        ],
        'site.phone' => [
            'type' => 'text',
            'value' => '+ 7 (495) <span>725-43-76</span>',
            'title' => 'Номер телефона для вывода на сайте',
        ],
        'site.email.admin' => [
            'type' => 'text',
            'value' => 'admin@getcrm.ru',
            'title' => 'Административный адрес email',
        ],
        'site.email.subscribe' => [
            'type' => 'text',
            'value' => 'subscribe@getcrm.ru',
            'title' => 'Адрес email для подписок',
        ],
        'site.email.sale' => [
            'type' => 'text',
            'value' => 'b2b@getcrm.ru',
            'title' => 'Адрес email для вывода на сайте',
        ],
        'site.hh_profile' => [
            'type' => 'text',
            'value' => 'https://hh.ru/employer/2118926',
            'title' => 'Профиль компании на hh.ru',
        ],
        'site.noindex' => [
            'type' => 'checkbox',
            'value' => '1',
            'title' => 'Закрыть сайт от индексирования',
        ],
        'site.code.head' => [
            'type' => 'textarea',
            'value' => "<script>console.log('head')</script>",
            'title' => 'HTML, JS, CSS-код добавляемый перед тегом </head>',
        ],
        'site.code.footer' => [
            'type' => 'textarea',
            'value' => "<script>console.log('footer')</script>",
            'title' => 'HTML, JS, CSS-код добавляемый перед тегом </body>',
        ],
    ];

    protected array $smtpSettings = [
        'mail.mailers.smtp.host' => [
            'type' => 'text',
            'value' => 'smtp.localhost',
            'title' => 'Хост',
        ],
        'mail.mailers.smtp.port' => [
            'type' => 'number',
            'value' => '587',
            'title' => 'Порт',
        ],
        'mail.mailers.smtp.encryption' => [
            'type' => 'text',
            'value' => 'tls',
            'title' => 'Тип шифрование',
        ],
        'mail.mailers.smtp.username' => [
            'type' => 'text',
            'value' => 'user',
            'title' => 'Имя пользователя',
        ],
        'mail.mailers.smtp.password' => [
            'type' => 'text',
            'value' => 'password',
            'title' => 'Пароль',
        ],
    ];
}
