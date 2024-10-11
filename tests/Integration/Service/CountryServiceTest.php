<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\JsonDriverUnicode;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class CountryServiceTest extends TestCase
{
    use MatchesSnapshots;

    /**
     * @throws SoapFault
     */
    public function testGetCountries()
    {
        $response = $this->api->country()->getAll();

        $this->assertMatchesSnapshot(array_map(fn($item) => $item->toArray(), $response), new JsonDriverUnicode());
    }
}
