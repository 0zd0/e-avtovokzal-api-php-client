<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use SoapFault;
use Spatie\Snapshots\MatchesSnapshots;

class EchoServiceTest extends TestCase
{
    use MatchesSnapshots;
    /**
     * @throws SoapFault
     */
    public function testEchoString()
    {
        $request  = (new EchoSendParametersModel())->setMessage('bred');
        $response = $this->api->echo()->send($request);

        $this->assertMatchesJsonSnapshot(json_encode($response->toArray()));
    }
}
