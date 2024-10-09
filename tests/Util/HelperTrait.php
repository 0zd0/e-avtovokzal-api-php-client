<?php

namespace Onepix\EAvtovokzalApiClient\Test\Util;

use Onepix\EAvtovokzalApiClient\Api;
use Onepix\EAvtovokzalApiClient\Constants;
use Onepix\EAvtovokzalApiClient\Factory\SoapClientFactory;
use Onepix\EAvtovokzalApiClient\Client;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\MockObject\MockObject;
use SoapClient;
use SoapFault;
use Yosymfony\Toml\Toml;

trait HelperTrait
{
    /**
     * Config from config.dev.toml
     *
     * @var array $devConfig
     */
    protected array $devConfig;

    protected Api $api;
    protected Api|MockObject $apiMock;
    protected SoapClient|MockObject $soapClientMock;
    protected SoapClientFactory|MockObject $soapClientFactoryMock;
    protected Client|MockObject $httpClientMock;

    /**
     * @throws Exception
     * @throws SoapFault
     */
    protected function setUpConfig(): void
    {
        $this->devConfig = Toml::ParseFile('config.dev.toml');

        $this->soapClientMock        = $this->createMock(SoapClient::class);
        $this->soapClientFactoryMock = $this->createMock(SoapClientFactory::class);
        $this->soapClientFactoryMock
            ->method('create')
            ->willReturn($this->soapClientMock);

        $this->httpClientMock = new Client(
            $this->devConfig['api']['login'],
            $this->devConfig['api']['password'],
            Constants::PROTOCOL . Constants::BASE_URL_API,
            $this->soapClientFactoryMock
        );

        $this->apiMock = $this->createMock(Api::class);
        $this->apiMock
            ->method('getClient')
            ->willReturn($this->httpClientMock);

        $this->api = new Api(
            $this->devConfig['api']['login'],
            $this->devConfig['api']['password'],
        );
    }
}
