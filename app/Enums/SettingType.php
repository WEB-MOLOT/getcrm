<?php


namespace App\Enums;


use JetBrains\PhpStorm\ArrayShape;

class SettingType extends AbstractEnum
{
    public const TEXT = 'text';
    public const NUMBER = 'number';
    public const TEXTAREA = 'textarea';

    #[ArrayShape([
        self::TEXT => "string",
        self::NUMBER => "string",
        self::TEXTAREA => "string"
    ])]
    public static function labels(): array
    {
        return [
            self::TEXT => 'Текстовое поле',
            self::NUMBER => 'Число',
            self::TEXTAREA => 'Текстовая область',
        ];
    }

    public static function values(): array
    {
        return [
            self::TEXT,
            self::NUMBER,
            self::TEXTAREA,
        ];
    }
}
