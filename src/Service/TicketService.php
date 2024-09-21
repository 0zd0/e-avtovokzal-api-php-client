<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketTypeModel;
use SoapFault;

class TicketService extends AbstractService
{
    /**
     * @param GetTicketTypesParametersModel $data
     *
     * @return TicketTypeModel[]
     * @throws SoapFault
     * @throws Exception
     */
    public function getTicketTypes(
        GetTicketTypesParametersModel $data
    ): array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_TICKET_TYPES,
            $data->toArray()
        );
        $return   = GetTicketTypesResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }
}
