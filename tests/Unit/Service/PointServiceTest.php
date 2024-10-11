<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\PointModel;
use SoapFault;

class PointServiceTest extends AbstractServiceTest
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetDispatchPoints()
    {
        $this->setMockJsonModel(GetDispatchPointsResponseModel::getClassName(), true);

        $points = $this->point->getDispatchPoints(
            (new GetDispatchPointsParametersModel())
                ->setRegionId(1)
        );

        $this::assertContainsOnlyInstancesOf(PointModel::class, $points);
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetArrivalPoints()
    {
        $this->setMockJsonModel(GetArrivalPointsResponseModel::getClassName(), true);

        $points = $this->point->getArrivalPoints(
            (new GetArrivalPointsParametersModel())
                ->setDispatchPointId(1)
        );

        $this::assertContainsOnlyInstancesOf(PointModel::class, $points);
    }
}
