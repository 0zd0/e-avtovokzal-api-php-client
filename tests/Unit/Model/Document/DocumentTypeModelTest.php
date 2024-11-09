<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Document;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\DocumentTypeEnum;
use Onepix\EAvtovokzalApiClient\Model\Document\DocumentTypeModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class DocumentTypeModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(DocumentTypeModel::getClassName());
        $model = DocumentTypeModel::fromArray($json);
        $this::assertNull($model->getBenefitCode());
        $this::assertNull($model->getCode());
        $this::assertNull($model->getName());
        $this::assertNull($model->getType());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(DocumentTypeModel::getClassName());
        $model = DocumentTypeModel::fromArray($json);
        $this::assertSame('1', $model->getBenefitCode());
        $this::assertSame('code', $model->getCode());
        $this::assertSame('name', $model->getName());
        $this::assertSame(DocumentTypeEnum::BIRTH_CERT, $model->getType());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
