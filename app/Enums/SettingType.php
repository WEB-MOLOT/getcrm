<?php


namespace App\Enums;


class SettingType extends AbstractEnum
{
    public const TEXT = 'text';
    public const NUMBER = 'number';
    public const TEXTAREA = 'textarea';
    public const CHECKBOX = 'checkbox';

    public static function labels(): array
    {
        return [
            self::TEXT => 'Текстовое поле',
            self::NUMBER => 'Число',
            self::TEXTAREA => 'Текстовая область',
            self::CHECKBOX => 'Чекбокс',
        ];
    }

    public static function values(): array
    {
        return [
            self::TEXT,
            self::NUMBER,
            self::TEXTAREA,
            self::TEXTAREA,
        ];
    }
}
