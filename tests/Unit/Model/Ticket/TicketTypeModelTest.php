<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketTypeModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class TicketTypeModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(TicketTypeModel::getClassName());
        $model = TicketTypeModel::fromArray($json);
        $this::assertNull($model->getCode());
        $this::assertNull($model->getName());
        $this::assertNull($model->getPrice());
        $this::assertNull($model->getTicketClass());
        $this::assertNull($model->getBenefitCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(TicketTypeModel::getClassName());
        $model = TicketTypeModel::fromArray($json);
        $this::assertSame('code', $model->getCode());
        $this::assertSame('name', $model->getName());
        $this::assertSame(1.01, $model->getPrice());
        $this::assertSame('ticketClass', $model->getTicketClass());
        $this::assertSame('benefitCode', $model->getBenefitCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
