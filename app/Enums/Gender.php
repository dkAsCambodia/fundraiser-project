<?php

namespace App\Enums;

enum Gender: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case BOTH = 'no_preference';

    public static function values(): array
    {
        return array_column(self::cases(), 'name', 'value');
    }
}
