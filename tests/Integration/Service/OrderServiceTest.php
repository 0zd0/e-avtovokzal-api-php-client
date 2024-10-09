<?php

namespace Onepix\EAvtovokzalApiClient\Test\Integration\Service;

use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use SoapFault;

class OrderServiceTest extends TestCase
{
    /**
     * @throws SoapFault
     */
    public function testBookOrder()
    {
        $request  = (new BookOrderParametersModel());
        $response = $this->api->order()->bookOrder($request);

        $this->assertSame($request->getMessage(), $response->getReturn());
    }

    /**
     * @throws SoapFault
     */
    public function testGetOrder()
    {
        $request  = (new EchoSendParametersModel())->setMessage('bred');
        $response = $this->api->echo()->send($request);

        $this->assertSame($request->getMessage(), $response->getReturn());
    }
}
