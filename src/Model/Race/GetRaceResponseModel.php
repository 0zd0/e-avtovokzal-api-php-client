<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetRaceResponseModel extends AbstractReturnModel
{
    public const ARRAY_MODELS = false;
    public const RETURN_MODEL = RaceModel::class;

    /**
     * @return RaceModel|null
     */
    public function getSingleReturn(): ?RaceModel
    {
        $return = parent::getSingleReturn();

        return $return instanceof RaceModel ? $return : null;
    }
}
