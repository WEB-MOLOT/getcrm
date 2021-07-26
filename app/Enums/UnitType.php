<?php


namespace App\Enums;


use JetBrains\PhpStorm\Pure;

class UnitType extends AbstractEnum
{
    public const DAYS = 1;
    public const MONTHS = 2;
    public const YEARS = 3;

    #[Pure]
    public function pluralization(): ?string
    {
        $options = static::pluralizationOptions();

        if (array_key_exists($this->item, $options)) {
            return $options[$this->item];
        }

        return null;
    }

    protected function pluralizationOptions(): array
    {
        return [
            self::DAYS => 'день|дня|дней',
            self::MONTHS => 'месяц|месяца|месяцев',
            self::YEARS => 'год|года|лет',
        ];
    }

    public static function labels(): array
    {
        return [
            self::DAYS => 'в днях',
            self::MONTHS => 'в месяцах',
            self::YEARS => 'в годах',
        ];
    }

    public static function values(): array
    {
        return [
            self::DAYS,
            self::MONTHS,
            self::YEARS,
        ];
    }
}
