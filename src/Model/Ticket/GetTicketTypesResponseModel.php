<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetTicketTypesResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = TicketTypeModel::class;

    /**
     * @return TicketTypeModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
