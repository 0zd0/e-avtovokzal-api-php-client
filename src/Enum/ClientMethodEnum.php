<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum ClientMethodEnum: string
{
    case ECHO = 'echo';
    case GET_RACES = 'getRaces';
    case GET_RACE = 'getRace';
    case GET_TICKET_TYPES = 'getTicketTypes';
}
