<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;

class EchoServiceTest extends TestCase
{
    public function testEchoString()
    {
        $request  = (new EchoSendParametersModel())->setMessage('bred');
        $response = $this->api->echo()->send($request);

        $this->assertSame($request->getMessage(), $response->getReturn());
    }
}
