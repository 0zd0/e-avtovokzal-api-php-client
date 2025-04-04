<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\OrderModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class BookOrderResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(BookOrderResponseModel::getClassName());
        $model = BookOrderResponseModel::fromArray($json);
        $this::assertNull($model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(BookOrderResponseModel::getClassName());
        $model = BookOrderResponseModel::fromArray($json);
        $this::assertInstanceOf(OrderModel::class, $model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
