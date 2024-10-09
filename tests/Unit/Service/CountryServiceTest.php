<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Country\CountryModel;
use Onepix\EAvtovokzalApiClient\Model\Country\GetCountriesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendResponseModel;
use SoapFault;

class CountryServiceTest extends AbstractServiceTest
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetAll()
    {
        $this->setMockJsonModel(GetCountriesResponseModel::getClassName(), true);

        $countries = $this->country->getAll();

        $this::assertContainsOnlyInstancesOf(CountryModel::class, $countries);
    }
}
