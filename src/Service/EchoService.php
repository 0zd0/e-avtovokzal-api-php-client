<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendResponseModel;
use SoapFault;

class EchoService extends AbstractService
{
    /**
     * @throws SoapFault
     */
    public function send(
        EchoSendParametersModel $data
    ): EchoSendResponseModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::ECHO,
            $data->toArray()
        );

        return EchoSendResponseModel::fromArray($response);
    }
}
