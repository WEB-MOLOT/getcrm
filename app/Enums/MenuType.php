<?php


namespace App\Enums;


class MenuType extends AbstractEnum
{
    public const TOP = 1;
    public const FOOTER = 2;
    public const BURGER = 3;

    public static function labels(): array
    {
        return [
            self::TOP => 'Верхнее',
            self::FOOTER => 'Нижнее',
            self::BURGER => 'Бургер',
        ];
    }

    public static function values(): array
    {
        return [
            self::TOP,
            self::FOOTER,
            self::BURGER,
        ];
    }
}
