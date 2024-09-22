<?php

namespace Onepix\EAvtovokzalApiClient\Model\Order;

use Onepix\EAvtovokzalApiClient\Model\AbstractReturnModel;
use Onepix\EAvtovokzalApiClient\Model\OrderModel;

class ConfirmOrderResponseModel extends AbstractReturnModel
{
    public const ARRAY_MODELS = false;

    public const RETURN_MODEL = OrderModel::class;

    /**
     * @return OrderModel|null
     */
    public function getSingleReturn(): ?OrderModel
    {
        $return = parent::getSingleReturn();

        return $return instanceof OrderModel ? $return : null;
    }
}
