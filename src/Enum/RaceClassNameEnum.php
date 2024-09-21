<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum RaceClassNameEnum: string
{
    case CLASS_UNKNOWN = 'CLASS_UNKNOWN';
    case CLASS_REGULAR = 'CLASS_REGULAR';
    case CLASS_INVITED = 'CLASS_INVITED';

    public static function fromId(int $id): ?self
    {
        return match ($id) {
            0 => self::CLASS_UNKNOWN,
            1 => self::CLASS_REGULAR,
            2 => self::CLASS_INVITED,
            default => null,
        };
    }
}
