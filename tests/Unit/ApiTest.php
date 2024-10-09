<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit;

use Onepix\EAvtovokzalApiClient\Client;
use Onepix\EAvtovokzalApiClient\Service\EchoService;
use Onepix\EAvtovokzalApiClient\Service\OrderService;
use Onepix\EAvtovokzalApiClient\Service\RaceService;
use Onepix\EAvtovokzalApiClient\Service\TicketService;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\HelperTrait;
use SoapFault;

class ApiTest extends TestCase
{
    use HelperTrait;

    public function setUp(): void
    {
        parent::setUp();

        $this->api->setClientFactory($this->soapClientFactoryMock);
    }

    /**
     * @throws SoapFault
     */
    public function testGetClient()
    {
        $this::assertInstanceOf(Client::class, $this->api->getClient());
    }

    /**
     * @throws SoapFault
     */
    public function testEcho()
    {
        $this::assertInstanceOf(EchoService::class, $this->api->echo());
    }

    /**
     * @throws SoapFault
     */
    public function testRace()
    {
        $this::assertInstanceOf(RaceService::class, $this->api->race());
    }

    /**
     * @throws SoapFault
     */
    public function testTicket()
    {
        $this::assertInstanceOf(TicketService::class, $this->api->ticket());
    }

    /**
     * @throws SoapFault
     */
    public function testOrder()
    {
        $this::assertInstanceOf(OrderService::class, $this->api->order());
    }
}
