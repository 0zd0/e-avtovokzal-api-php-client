<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnCollectionModel;
use Onepix\EAvtovokzalApiClient\Model\SeatModel;

class GetRaceSeatsResponseModel extends AbstractReturnCollectionModel
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
