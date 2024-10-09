<?php

namespace Onepix\EAvtovokzalApiClient\Enum;

enum ClientMethodEnum: string
{
    case ECHO = 'echo';
    case GET_RACES = 'getRaces';
    case GET_RACE = 'getRace';
    case GET_RACE_SEATS = 'getRaceSeats';
    case GET_TICKET_TYPES = 'getTicketTypes';
    case RETURN_TICKET = 'returnTicket';
    case GET_ORDER = 'getOrder';
    case BOOK_ORDER = 'bookOrder';
    case CONFIRM_ORDER = 'confirmOrder';
    case CANCEL_ORDER = 'cancelOrder';
    case GET_COUNTRIES = 'getCountries';
}
