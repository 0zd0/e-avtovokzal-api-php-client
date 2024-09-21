<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;
use Onepix\EAvtovokzalApiClient\Model\SeatModel;

class GetRaceSeatsResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = SeatModel::class;

    /**
     * @return SeatModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
