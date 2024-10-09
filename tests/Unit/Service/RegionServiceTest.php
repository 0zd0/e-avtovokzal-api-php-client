<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Region\RegionModel;
use SoapFault;

class RegionServiceTest extends AbstractServiceTest
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGet()
    {
        $this->setMockJsonModel(GetRegionsResponseModel::getClassName(), true);

        $countryId = 1;

        $regions = $this->region->get(
            (new GetRegionsParametersModel())
            ->setCountryId($countryId)
        );

        $this::assertContainsOnlyInstancesOf(RegionModel::class, $regions);
    }
}
