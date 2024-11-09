<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Echo;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Echo\EchoSendParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class EchoSendParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(EchoSendParametersModel::getClassName());
        $model = EchoSendParametersModel::fromArray($json);
        $this::assertSame('test', $model->getMessage());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(EchoSendParametersModel::getClassName());
        $model = EchoSendParametersModel::fromArray($json);
        $this::assertSame('test', $model->getMessage());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
