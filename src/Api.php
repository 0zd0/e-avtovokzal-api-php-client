<?php

namespace Onepix\EAvtovokzalApiClient;

use Onepix\EAvtovokzalApiClient\Factory\SoapClientFactory;
use Onepix\EAvtovokzalApiClient\Service\CountryService;
use Onepix\EAvtovokzalApiClient\Service\DocumentService;
use Onepix\EAvtovokzalApiClient\Service\EchoService;
use Onepix\EAvtovokzalApiClient\Service\OrderService;
use Onepix\EAvtovokzalApiClient\Service\PointService;
use Onepix\EAvtovokzalApiClient\Service\RaceService;
use Onepix\EAvtovokzalApiClient\Service\RegionService;
use Onepix\EAvtovokzalApiClient\Service\TicketService;
use SoapFault;

class Api
{
    protected string $login;
    protected string $password;
    protected bool $test = false;
    private ?SoapClientFactory $clientFactory = null;

    public function __construct(
        string $login,
        string $password,
    ) {
        $this->login    = $login;
        $this->password = $password;
    }

    /**
     * @param bool $test
     *
     * @return self
     */
    public function setTest(bool $test): self
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @param SoapClientFactory|null $clientFactory
     *
     * @return self
     */
    public function setClientFactory(?SoapClientFactory $clientFactory): self
    {
        $this->clientFactory = $clientFactory;

        return $this;
    }

    /**
     * @throws SoapFault
     */
    public function getClient(): Client
    {
        return new Client(
            $this->login,
            $this->password,
            Constants::PROTOCOL . ($this->test ? Constants::BASE_URL_TEST_API : Constants::BASE_URL_API),
            $this->clientFactory
        );
    }

    /**
     * @return EchoService
     * @throws SoapFault
     */
    public function echo(): EchoService
    {
        return new EchoService($this->getClient());
    }

    /**
     * @return RaceService
     * @throws SoapFault
     */
    public function race(): RaceService
    {
        return new RaceService($this->getClient());
    }

    /**
     * @return TicketService
     * @throws SoapFault
     */
    public function ticket(): TicketService
    {
        return new TicketService($this->getClient());
    }

    /**
     * @return OrderService
     * @throws SoapFault
     */
    public function order(): OrderService
    {
        return new OrderService($this->getClient());
    }

    /**
     * @return CountryService
     * @throws SoapFault
     */
    public function country(): CountryService
    {
        return new CountryService($this->getClient());
    }

    /**
     * @return RegionService
     * @throws SoapFault
     */
    public function region(): RegionService
    {
        return new RegionService($this->getClient());
    }

    /**
     * @return PointService
     * @throws SoapFault
     */
    public function point(): PointService
    {
        return new PointService($this->getClient());
    }

    /**
     * @return DocumentService
     * @throws SoapFault
     */
    public function document(): DocumentService
    {
        return new DocumentService($this->getClient());
    }
}
