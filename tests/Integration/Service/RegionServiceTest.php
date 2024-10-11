<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class RegionServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @throws SoapFault
     */
    public function testGetRuRegions()
    {
        $response = $this->api->region()->get(
            (new GetRegionsParametersModel())
            ->setCountryId($this->devConfig['codes']['ru_id'])
        );

        $this->assertMatchesSnapshot(array_map(fn($item) => $item->toArray(), $response), new JsonDriverUnicode());
    }
}
