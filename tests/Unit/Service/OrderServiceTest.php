<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Service;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\CancelOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\CancelOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\OrderModel;
use SoapFault;

class OrderServiceTest extends AbstractServiceHelper
{
    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testGetOrder()
    {
        $this->setMockJsonModel(GetOrderResponseModel::getClassName(), true);

        $id = 1;

        $order = $this->order->getOrder(
            (new GetOrderParametersModel())
                ->setOrderId($id)
        );

        $this::assertInstanceOf(OrderModel::class, $order);
        $this::assertSame($id, $order->getId());
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testBookOrder()
    {
        $this->setMockJsonModel(BookOrderResponseModel::getClassName(), true);

        $uid = 'uid';

        $order = $this->order->bookOrder(
            (new BookOrderParametersModel())
            ->setUid($uid)
        );

        $this::assertInstanceOf(OrderModel::class, $order);
        $this::assertSame($uid, $order->getUid());
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testConfirmOrder()
    {
        $this->setMockJsonModel(ConfirmOrderResponseModel::getClassName(), true);

        $id = 1;

        $order = $this->order->confirmOrder(
            (new ConfirmOrderParametersModel())
                ->setOrderId($id)
        );

        $this::assertInstanceOf(OrderModel::class, $order);
        $this::assertSame($id, $order->getId());
    }

    /**
     * @throws SoapFault
     * @throws Exception
     */
    public function testCancelOrder()
    {
        $this->setMockJsonModel(CancelOrderResponseModel::getClassName(), true);

        $id = 1;

        $order = $this->order->cancelOrder(
            (new CancelOrderParametersModel())
                ->setOrderId($id)
        );

        $this::assertInstanceOf(OrderModel::class, $order);
        $this::assertSame($id, $order->getId());
    }
}
