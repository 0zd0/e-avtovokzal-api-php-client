<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\OrderModel;
use SoapFault;

class OrderService extends AbstractService
{
    /**
     * @param GetOrderParametersModel $data
     *
     * @return OrderModel|null
     * @throws SoapFault
     * @throws Exception
     */
    public function getRace(
        GetOrderParametersModel $data
    ): ?OrderModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_ORDER,
            $data->toArray()
        );
        $return   = GetOrderResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }
}
