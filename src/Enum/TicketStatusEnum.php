<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum TicketStatusEnum: string
{
    case STATUS_BOOKED = 'STATUS_BOOKED';
    case STATUS_CANCELLED = 'STATUS_CANCELLED';
    case STATUS_RETURNED = 'STATUS_RETURNED';
    case STATUS_SOLD = 'STATUS_SOLD';
}
