<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\PointModel;
use SoapFault;

class PointService extends AbstractService
{
    /**
     * @param GetDispatchPointsParametersModel $data
     *
     * @return PointModel[]|null
     * @throws SoapFault
     */
    public function getDispatchPoints(
        GetDispatchPointsParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_DISPATCH_POINTS,
            $data->toArray()
        );
        $return   = GetDispatchPointsResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }

    /**
     * @param GetArrivalPointsParametersModel $data
     *
     * @return array|null
     * @throws SoapFault
     */
    public function getArrivalPoints(
        GetArrivalPointsParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_ARRIVAL_POINTS,
            $data->toArray()
        );
        $return   = GetArrivalPointsResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }
}
