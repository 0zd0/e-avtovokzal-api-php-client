<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnCollectionModel;

class GetTicketTypesResponseModel extends AbstractReturnCollectionModel
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
