<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Enum\OrderStatusEnum;
use Onepix\EAvtovokzalApiClient\Model\CompanyModel;
use Onepix\EAvtovokzalApiClient\Model\Order\OrderModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketModel;
use Onepix\EAvtovokzalApiClient\Model\UserModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class OrderModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(OrderModel::getClassName());
        $model = OrderModel::fromArray($json);
        $this::assertNull($model->getUid());
        $this::assertNull($model->getId());
        $this::assertNull($model->getUser());
        $this::assertNull($model->getAgent());
        $this::assertNull($model->getReserveCode());
        $this::assertNull($model->getTotal());
        $this::assertNull($model->getPaymentMethod());
        $this::assertNull($model->getRepayment());
        $this::assertNull($model->getStatus());
        $this::assertNull($model->getCreated());
        $this::assertNull($model->getExpired());
        $this::assertNull($model->getFinished());
        $this::assertNull($model->getTickets());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(OrderModel::getClassName());
        $model = OrderModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());
        $this::assertSame(1, $model->getId());
        $this::assertInstanceOf(UserModel::class, $model->getUser());
        $this::assertInstanceOf(CompanyModel::class, $model->getAgent());
        $this::assertSame('reserveCode', $model->getReserveCode());
        $this::assertSame(1.01, $model->getTotal());
        $this::assertSame('paymentMethod', $model->getPaymentMethod());
        $this::assertSame(2.01, $model->getRepayment());
        $this::assertSame(OrderStatusEnum::STATUS_BOOKED, $model->getStatus());
        $this::assertEquals(new DateTime('2024-08-01T00:00:00+00:00'), $model->getCreated());
        $this::assertEquals(new DateTime('2024-08-02T00:00:00+00:00'), $model->getExpired());
        $this::assertEquals(new DateTime('2024-08-03T00:00:00+00:00'), $model->getFinished());
        $this::assertContainsOnlyInstancesOf(TicketModel::class, $model->getTickets());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
