<?php

namespace Onepix\EAvtovokzalApiClient\Test\Util;

use Onepix\EAvtovokzalApiClient\Api;
use Yosymfony\Toml\Toml;

trait HelperTrait
{
    /**
     * Config from config.dev.toml
     *
     * @var array $devConfig
     */
    protected array $devConfig;

    protected Api $client;

    protected function setUpConfig()
    {
        $this->devConfig = Toml::ParseFile('config.dev.toml');

        $this->client = new Api(
            $this->devConfig['api']['login'],
            $this->devConfig['api']['password'],
        );
    }
}
