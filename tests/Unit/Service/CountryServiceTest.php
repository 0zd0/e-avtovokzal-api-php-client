<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Country\CountryModel;
use Onepix\EAvtovokzalApiClient\Model\Country\GetCountriesResponseModel;
use SoapFault;

class CountryServiceTest extends AbstractServiceHelper
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
