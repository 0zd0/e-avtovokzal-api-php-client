<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use SoapFault;

class RaceServiceTest extends TestCase
{
    /**
     * @throws SoapFault
     */
    public function testGetRaces()
    {
        $request  = (new GetRacesParametersModel())
        ->setDispatchPointId();
        $response = $this->api->order()->bookOrder($request);

        $this->assertSame($request->getMessage(), $response->getReturn());
    }
}
