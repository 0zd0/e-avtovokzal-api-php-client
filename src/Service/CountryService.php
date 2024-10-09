<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Country\CountryModel;
use Onepix\EAvtovokzalApiClient\Model\Country\GetCountriesResponseModel;
use SoapFault;

class CountryService extends AbstractService
{
    /**
     * @return CountryModel[]|null
     * @throws SoapFault
     */
    public function getAll(
    ): ?array {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_COUNTRIES,
        );
        $return = GetCountriesResponseModel::fromArray($response);

        return $return->getMultipleReturns();
    }
}
