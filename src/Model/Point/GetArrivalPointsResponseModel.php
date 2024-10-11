<?php

namespace Onepix\EAvtovokzalApiClient\Model\Point;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;

class GetArrivalPointsResponseModel extends AbstractReturnModel
{
    public const RETURN_MODEL = PointModel::class;

    /**
     * @return PointModel[]|null
     */
    public function getMultipleReturns(): ?array
    {
        return parent::getMultipleReturns();
    }
}
