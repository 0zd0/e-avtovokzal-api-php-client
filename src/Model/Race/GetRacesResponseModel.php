<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetRacesResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = RaceModel::class;

    /**
     * @return RaceModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
