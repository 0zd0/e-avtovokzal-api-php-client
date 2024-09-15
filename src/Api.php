<?php

namespace Onepix\EAvtovokzalApiClient;

use GuzzleHttp\Client;

class Api
{
    protected HttpClient $client;
    protected string $apiKey;

    public function __construct(
        string $apiKey
    ) {
        $this->apiKey = $apiKey;
    }

    public function getClient(): HttpClient
    {
        return new HttpClient(
            $this->apiKey,
            new Client([
                'base_uri' => Constants::PROTOCOL . Constants::BASE_URL_API,
                'timeout' => 20
            ])
        );
    }
}
