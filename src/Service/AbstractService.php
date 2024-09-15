<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Constants;
use Onepix\EAvtovokzalApiClient\Enum\RouteEnum;
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

    public static function buildRoute(
        RouteEnum $route,
        string $version = Constants::VERSION_API
    ): string {
        return '/v' . $version . '/' . $route->value;
    }
}
