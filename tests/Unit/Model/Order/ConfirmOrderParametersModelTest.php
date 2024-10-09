<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\ConfirmOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketOptionModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class ConfirmOrderParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(ConfirmOrderParametersModel::getClassName());
        $model = ConfirmOrderParametersModel::fromArray($json);
        $this::assertSame(1, $model->getOrderId());
        $this::assertNull($model->getPaymentMethod());
        $this::assertNull($model->getOptions());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(ConfirmOrderParametersModel::getClassName());
        $model = ConfirmOrderParametersModel::fromArray($json);
        $this::assertSame(1, $model->getOrderId());
        $this::assertSame('paymentMethod', $model->getPaymentMethod());
        $this::assertContainsOnlyInstancesOf(TicketOptionModel::class, $model->getOptions());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
