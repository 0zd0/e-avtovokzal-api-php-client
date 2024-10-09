<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Region\RegionModel;
use SoapFault;

class RegionService extends AbstractService
{
    /**
     * @return RegionModel[]|null
     * @throws SoapFault
     */
    public function get(
        GetRegionsParametersModel $data
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_REGIONS,
            $data->toArray()
        );
        $return = GetRegionsResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }
}
