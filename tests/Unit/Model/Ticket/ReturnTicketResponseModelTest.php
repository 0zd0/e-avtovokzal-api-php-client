<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class ReturnTicketResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(ReturnTicketResponseModel::getClassName());
        $model = ReturnTicketResponseModel::fromArray($json);
        $this::assertNull($model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(ReturnTicketResponseModel::getClassName());
        $model = ReturnTicketResponseModel::fromArray($json);
        $this::assertInstanceOf(TicketModel::class, $model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
