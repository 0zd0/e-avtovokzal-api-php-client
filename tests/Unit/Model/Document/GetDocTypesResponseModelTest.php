<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Document;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Document\DocumentTypeModel;
use Onepix\EAvtovokzalApiClient\Model\Document\GetDocTypesResponseModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetDocTypesResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetDocTypesResponseModel::getClassName());
        $model = GetDocTypesResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetDocTypesResponseModel::getClassName());
        $model = GetDocTypesResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(DocumentTypeModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
