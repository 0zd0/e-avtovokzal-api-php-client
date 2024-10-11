<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class PointServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @throws SoapFault
     */
    public function testGetDispatchPointsMoscow()
    {
        $response = $this->api->point()->getDispatchPoints(
            (new GetDispatchPointsParametersModel())
                ->setRegionId($this->devConfig['codes']['moscow_id'])
        );

        $this->assertMatchesSnapshot(array_map(fn($item) => $item->toArray(), $response), new JsonDriverUnicode());
    }

    /**
     * @throws SoapFault
     */
    public function testGetArrivalPointsMoscow()
    {
        $response = $this->api->point()->getArrivalPoints(
            (new GetArrivalPointsParametersModel())
                ->setDispatchPointId($this->devConfig['codes']['moscow_dispatch_id'])
                ->setPattern($this->devConfig['filter']['arrival_pattern'])
        );

        $this->assertMatchesSnapshot(array_map(fn($item) => $item->toArray(), $response), new JsonDriverUnicode());
    }
}
