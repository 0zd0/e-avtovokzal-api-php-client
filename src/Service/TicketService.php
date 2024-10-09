<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketTypeModel;
use SoapFault;

class TicketService extends AbstractService
{
    /**
     * @param GetTicketTypesParametersModel $data
     *
     * @return TicketTypeModel[]|null
     * @throws SoapFault
     * @throws Exception
     */
    public function getTicketTypes(
        GetTicketTypesParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_TICKET_TYPES,
            $data->toArray()
        );
        $return   = GetTicketTypesResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }

    /**
     * @param ReturnTicketParametersModel $data
     *
     * @return TicketModel|null
     * @throws SoapFault
     * @throws Exception
     */
    public function returnTicket(
        ReturnTicketParametersModel $data
    ): ?TicketModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::RETURN_TICKET,
            $data->toArray()
        );
        $return   = ReturnTicketResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }
}
