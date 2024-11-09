<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\CancelOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class CancelOrderParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(CancelOrderParametersModel::getClassName());
        $model = CancelOrderParametersModel::fromArray($json);
        $this::assertSame(1, $model->getOrderId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(CancelOrderParametersModel::getClassName());
        $model = CancelOrderParametersModel::fromArray($json);
        $this::assertSame(1, $model->getOrderId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
