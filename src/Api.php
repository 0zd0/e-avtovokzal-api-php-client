<?php

namespace Onepix\EAvtovokzalApiClient;

use Onepix\EAvtovokzalApiClient\Service\EchoService;
use Onepix\EAvtovokzalApiClient\Service\RaceService;
use Onepix\EAvtovokzalApiClient\Service\TicketService;
use SoapFault;

class Api
{
    protected HttpClient $client;
    protected string $login;
    protected string $password;

    public function __construct(
        string $login,
        string $password,
    ) {
        $this->login = $login;
        $this->password = $password;
    }

    /**
     * @throws SoapFault
     */
    public function getClient(): HttpClient
    {
        return new HttpClient(
            $this->login,
            $this->password,
            Constants::PROTOCOL . Constants::BASE_URL_API
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
}
