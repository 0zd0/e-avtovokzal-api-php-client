<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Document;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetDocTypesParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetDocTypesParametersModel::getClassName());
        $model = GetDocTypesParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetDocTypesParametersModel::getClassName());
        $model = GetDocTypesParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
