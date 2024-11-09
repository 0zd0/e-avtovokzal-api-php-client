<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketTypeModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetTicketTypesResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetTicketTypesResponseModel::getClassName());
        $model = GetTicketTypesResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetTicketTypesResponseModel::getClassName());
        $model = GetTicketTypesResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(TicketTypeModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
