<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use SoapFault;

class HttpClientTest extends TestCase
{
    /**
     * @throws SoapFault
     */
    public function testCallSuccess(): void
    {
        $return = ['response' => 'value'];
        $this->soapClientMock
            ->expects($this->once())
            ->method('__soapCall')
            ->with(ClientMethodEnum::ECHO->value, [])
            ->willReturn($return);

        $result = $this->httpClientMock->call(ClientMethodEnum::ECHO, []);
        $this->assertSame($return, $result);
    }

    public function testCallThrowsSoapFault(): void
    {
        $this->soapClientMock
            ->expects($this->once())
            ->method('__soapCall')
            ->willThrowException(new SoapFault('Client', 'Error Message'));

        $this->expectException(SoapFault::class);
        $this->httpClientMock->call(ClientMethodEnum::ECHO, []);
    }
}
