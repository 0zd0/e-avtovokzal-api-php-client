<?php

namespace Onepix\EAvtovokzalApiClient\Model\Region;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetRegionsResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = RegionModel::class;

    /**
     * @return RegionModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
