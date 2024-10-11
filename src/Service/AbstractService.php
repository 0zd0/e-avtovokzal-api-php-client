<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Client;

abstract class AbstractService
{
    protected Client $client;

    public function __construct(
        Client $client
    ) {
        $this->client = $client;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }
}
