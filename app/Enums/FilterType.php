<?php


namespace App\Enums;


use JetBrains\PhpStorm\ArrayShape;

class FilterType extends AbstractEnum
{
    public const ROUTE = 10;
    public const CHANNELS = 20;
    public const EXPECTATIONS = 30;

    #[ArrayShape([
        self::ROUTE => "int",
        self::CHANNELS => "int",
        self::EXPECTATIONS => "int",
    ])]
    public static function labels(): array
    {
        return [
            self::ROUTE => 'Путешествие клиента ',
            self::CHANNELS => 'Каналы',
            self::EXPECTATIONS => 'Ожидания',
        ];
    }

    public static function values(): array
    {
        return [
            self::ROUTE,
            self::CHANNELS,
            self::EXPECTATIONS,
        ];
    }
}
