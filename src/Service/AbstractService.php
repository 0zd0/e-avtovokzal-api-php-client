<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\HttpClient;

abstract class AbstractService
{
    protected HttpClient $client;

    public function __construct(
        HttpClient $client
    ) {
        $this->client = $client;
    }

    /**
     * @return HttpClient
     */
    public function getClient(): HttpClient
    {
        return $this->client;
    }
}
