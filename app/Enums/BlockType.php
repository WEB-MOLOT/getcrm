<?php


namespace App\Enums;


class BlockType extends AbstractEnum
{
    public const TEXT = 'text';
    public const TEXTAREA = 'textarea';
    public const EDITOR = 'editor';
    public const LIST = 'list';
    public const IMAGE = 'image';
    public const VIDEO = 'video';

    public static function labels(): array
    {
        return [
            self::TEXT => 'Текстовое поле',
            self::TEXTAREA => 'Текстовая область',
            self::EDITOR => 'Редактор',
            self::LIST => 'Список',
            self::IMAGE => 'Изображение',
            self::VIDEO => 'Видео',
        ];
    }

    public static function values(): array
    {
        return [
            self::TEXT,
            self::TEXTAREA,
            self::EDITOR,
            self::LIST,
            self::IMAGE,
            self::VIDEO,
        ];
    }
}
