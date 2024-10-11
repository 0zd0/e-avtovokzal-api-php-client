<?php

namespace Onepix\EAvtovokzalApiClient\Factory;

use SoapClient;
use SoapFault;

class SoapClientFactory
{
    /**
     * @throws SoapFault
     */
    public function create(string $wsdl, array $options): SoapClient
    {
        return new SoapClient($wsdl, $options);
    }
}
