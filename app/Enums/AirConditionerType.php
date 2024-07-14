<?php

namespace App\Enums;

enum AirConditionerType: string
{
    case MANUEL = 'manuel';
    case automatic = 'automatic';
    case dualZone = 'dual zone';
    case multiZone = 'multi zone';
    case rearSeat = 'rear seat';
    case electric = 'electric';
    case hybrid = 'hybrid';
    case solarPowered = 'solar powered';

    public static function allValues(): array
    {
        return array_map(function($enum){
            return $enum->value;
        }, AirConditionerType::cases());
    }

}
