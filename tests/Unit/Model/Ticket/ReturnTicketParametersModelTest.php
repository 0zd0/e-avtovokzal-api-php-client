<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\ReturnTicketParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class ReturnTicketParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(ReturnTicketParametersModel::getClassName());
        $model = ReturnTicketParametersModel::fromArray($json);
        $this::assertSame(1, $model->getTicketId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(ReturnTicketParametersModel::getClassName());
        $model = ReturnTicketParametersModel::fromArray($json);
        $this::assertSame(1, $model->getTicketId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
