<?php


namespace App\Enums;


use JetBrains\PhpStorm\ArrayShape;

class SettingSection extends AbstractEnum
{
    public const SMTP = 'smtp';
    public const SITE = 'site';

    #[ArrayShape([
        self::SMTP => "string",
        self::SITE => "string"
    ])]
    public static function labels(): array
    {
        return [
            self::SMTP => 'SMTP-настройки',
            self::SITE => 'Настройки сайта',
        ];
    }

    public static function values(): array
    {
        return [
            self::SMTP,
            self::SITE,
        ];
    }
}
