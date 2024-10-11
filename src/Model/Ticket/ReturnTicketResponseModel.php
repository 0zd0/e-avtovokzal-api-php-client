<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class ReturnTicketResponseModel extends AbstractReturnModel
{
    public const ARRAY_MODELS = false;

    public const RETURN_MODEL = TicketModel::class;

    /**
     * @return TicketModel|null
     */
    public function getSingleReturn(): ?TicketModel
    {
        $return = parent::getSingleReturn();

        return $return instanceof TicketModel ? $return : null;
    }
}
