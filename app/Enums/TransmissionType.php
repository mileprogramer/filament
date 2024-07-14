<?php

namespace App\Enums;

enum TransmissionType: string
{
    case MANUEL = 'manuel';
    case AUTOMATIC = 'automatic';
    case SEMIAUTOMATIC = 'semi-automatic';

    public static function allValues(): array
    {
        return array_map(function ($enum){
            return $enum->value;
        }, TransmissionType::cases());
    }
}
