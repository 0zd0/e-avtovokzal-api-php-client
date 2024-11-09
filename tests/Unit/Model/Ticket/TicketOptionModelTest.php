<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketOptionModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class TicketOptionModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(TicketOptionModel::getClassName());
        $model = TicketOptionModel::fromArray($json);
        $this::assertNull($model->getDue());
        $this::assertNull($model->getFare());
        $this::assertNull($model->getTicketCode());
        $this::assertNull($model->getTicketId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(TicketOptionModel::getClassName());
        $model = TicketOptionModel::fromArray($json);
        $this::assertSame(1.01, $model->getDue());
        $this::assertSame(2.01, $model->getFare());
        $this::assertSame('ticketCode', $model->getTicketCode());
        $this::assertSame(1, $model->getTicketId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
