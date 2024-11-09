<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\GetOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\OrderModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetOrderResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetOrderResponseModel::getClassName());
        $model = GetOrderResponseModel::fromArray($json);
        $this::assertNull($model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetOrderResponseModel::getClassName());
        $model = GetOrderResponseModel::fromArray($json);
        $this::assertInstanceOf(OrderModel::class, $model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
