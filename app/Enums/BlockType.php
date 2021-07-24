<?php


namespace App\Enums;


class BlockType extends AbstractEnum
{
    public const TEXT = 'text';
    public const TEXTAREA = 'textarea';
    public const EDITOR = 'editor';
    public const LIST = 'list';
    public const LIST_WITH_ICON = 'list_with_icon';
    public const IMAGE = 'image';
    public const VIDEO = 'video';
    public const HEADER = 'header';

    public static function labels(): array
    {
        return [
            self::TEXT => 'Текстовое поле',
            self::TEXTAREA => 'Текстовая область',
            self::EDITOR => 'Редактор',
            self::LIST => 'Список',
            self::LIST_WITH_ICON => 'Список с иконками',
            self::IMAGE => 'Изображение',
            self::VIDEO => 'Видео',
            self::HEADER => 'Заголовок блока',
        ];
    }

    public static function values(): array
    {
        return [
            self::TEXT,
            self::TEXTAREA,
            self::EDITOR,
            self::LIST,
            self::LIST_WITH_ICON,
            self::IMAGE,
            self::VIDEO,
            self::HEADER,
        ];
    }
}
