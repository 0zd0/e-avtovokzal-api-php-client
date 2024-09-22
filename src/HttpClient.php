<?php

namespace Onepix\EAvtovokzalApiClient;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Factory\SoapClientFactory;
use SoapClient;
use SoapFault;

class HttpClient
{
    private string $baseUrl;
    private string $login;
    private string $password;
    private SoapClientFactory $clientFactory;
    private SoapClient $client;

    /**
     * @throws SoapFault
     */
    public function __construct(
        string $login,
        string $password,
        string $baseUrl,
        SoapClientFactory $clientFactory = null,
    ) {
        $this->login         = $login;
        $this->password      = $password;
        $this->baseUrl       = $baseUrl;
        $this->clientFactory = $clientFactory ?? new SoapClientFactory();
        $this->client        = $this->clientFactory->create($this->baseUrl, [
            'login'          => $this->login,
            'password'       => $this->password,
            'authentication' => SOAP_AUTHENTICATION_BASIC,
            'features'       => SOAP_SINGLE_ELEMENT_ARRAYS,
            'cache_wsdl'     => WSDL_CACHE_MEMORY,
            'trace'          => true,
        ]);
    }

    /**
     * Sends a request to a SOAP service.
     *
     * @param ClientMethodEnum $method SOAP method name
     * @param array $params Parameters for the method
     *
     * @return array Response from the service
     * @throws SoapFault
     */
    public function call(ClientMethodEnum $method, array $params): array
    {
        return (array)$this->client->__soapCall($method->value, count($params) > 1 ? [$params] : []);
    }
}
