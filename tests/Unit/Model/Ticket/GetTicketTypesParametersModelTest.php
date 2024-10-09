<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Ticket\GetTicketTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetTicketTypesParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetTicketTypesParametersModel::getClassName());
        $model = GetTicketTypesParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetTicketTypesParametersModel::getClassName());
        $model = GetTicketTypesParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
