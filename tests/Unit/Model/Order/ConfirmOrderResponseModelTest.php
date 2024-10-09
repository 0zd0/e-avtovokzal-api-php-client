<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Order\OrderModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class ConfirmOrderResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(ConfirmOrderResponseModel::getClassName());
        $model = ConfirmOrderResponseModel::fromArray($json);
        $this::assertNull($model->getSingleReturn());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(ConfirmOrderResponseModel::getClassName());
        $model = ConfirmOrderResponseModel::fromArray($json);
        $this::assertInstanceOf(OrderModel::class, $model->getSingleReturn());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
