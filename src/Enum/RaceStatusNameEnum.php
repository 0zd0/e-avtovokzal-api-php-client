<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum RaceStatusNameEnum: string
{
    case STATUS_UNKNOWN = 'STATUS_UNKNOWN';
    case STATUS_ON_SALE = 'STATUS_ON_SALE';
    case STATUS_CANCELED = 'STATUS_CANCELED';
    case STATUS_DISPATCHED = 'STATUS_DISPATCHED';
    case STATUS_CLOSED = 'STATUS_CLOSED';
    case STATUS_BOARDING = 'STATUS_BOARDING';
    case STATUS_SUSPENDED = 'STATUS_SUSPENDED';

    public static function fromId(int $id): ?self
    {
        return match ($id) {
            0 => self::STATUS_UNKNOWN,
            1 => self::STATUS_ON_SALE,
            2 => self::STATUS_CANCELED,
            4 => self::STATUS_DISPATCHED,
            5 => self::STATUS_CLOSED,
            9 => self::STATUS_BOARDING,
            11 => self::STATUS_SUSPENDED,
            default => null,
        };
    }
}
