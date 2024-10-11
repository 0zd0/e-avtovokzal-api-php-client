<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum RaceTypeNameEnum: string
{
    case TYPE_UNKNOWN = 'TYPE_UNKNOWN';
    case TYPE_INTERURBAN = 'TYPE_INTERURBAN';
    case TYPE_INTERREGIONAL = 'TYPE_INTERREGIONAL';
    case TYPE_INTERNATIONAL = 'TYPE_INTERNATIONAL';
    case TYPE_SUBURBAN = 'TYPE_SUBURBAN';

    public static function fromId(int $id): ?self
    {
        return match ($id) {
            0 => self::TYPE_UNKNOWN,
            1 => self::TYPE_INTERURBAN,
            2 => self::TYPE_INTERREGIONAL,
            3 => self::TYPE_INTERNATIONAL,
            4 => self::TYPE_SUBURBAN,
            default => null,
        };
    }
}
