<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Service\CountryService;
use Onepix\EAvtovokzalApiClient\Service\EchoService;
use Onepix\EAvtovokzalApiClient\Service\OrderService;
use Onepix\EAvtovokzalApiClient\Service\RaceService;
use Onepix\EAvtovokzalApiClient\Service\TicketService;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class AbstractServiceTest extends TestCase
{
    use StubTrait;

    protected EchoService $echo;
    protected OrderService $order;
    protected RaceService $race;
    protected TicketService $ticket;
    protected CountryService $country;

    protected function setUp(): void
    {
        parent::setUp();

        $this->api->setClientFactory($this->soapClientFactoryMock);
        $this->echo = $this->api->echo();
        $this->order = $this->api->order();
        $this->race = $this->api->race();
        $this->ticket = $this->api->ticket();
        $this->country = $this->api->country();
    }

    /**
     * @throws Exception
     */
    protected function setMockJsonModel(string $className, bool $allFields = false, bool $arrayModels = false): void
    {
        $json = $this::getStubJsonModelWithRequiredFields($className);
        if ($allFields) {
            $json = $this::getStubJsonModelWithAllFields($className);
        }
        if ($arrayModels) {
            $json = [$json, $json];
        }

        $this->soapClientMock
            ->method('__soapCall')
            ->willReturn($json);
    }
}
