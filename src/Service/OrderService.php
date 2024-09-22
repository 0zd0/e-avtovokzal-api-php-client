<?php

namespace Onepix\EAvtovokzalApiClient\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\ClientMethodEnum;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderResponseModel;
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
    public function getOrder(
        GetOrderParametersModel $data
    ): ?OrderModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::GET_ORDER,
            $data->toArray()
        );
        $return   = GetOrderResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }

    /**
     * @param BookOrderParametersModel $data
     *
     * @return OrderModel|null
     * @throws SoapFault
     * @throws Exception
     */
    public function bookOrder(
        BookOrderParametersModel $data
    ): ?OrderModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::BOOK_ORDER,
            $data->toArray()
        );
        $return   = BookOrderResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }

    /**
     * @param ConfirmOrderParametersModel $data
     *
     * @return OrderModel|null
     * @throws SoapFault
     * @throws Exception
     */
    public function confirmOrder(
        ConfirmOrderParametersModel $data
    ): ?OrderModel {
        $response = $this->getClient()->call(
            ClientMethodEnum::CONFIRM_ORDER,
            $data->toArray()
        );
        $return   = ConfirmOrderResponseModel::fromArray($response);

        return $return->getSingleReturn();
    }
}
