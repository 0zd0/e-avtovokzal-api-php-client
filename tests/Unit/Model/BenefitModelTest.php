<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\BenefitModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class BenefitModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(BenefitModel::getClassName());
        $model = BenefitModel::fromArray($json);
        $this::assertNull($model->getAddress());
        $this::assertNull($model->getDocNum());
        $this::assertNull($model->getDocSeries());
        $this::assertNull($model->getSchool());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(BenefitModel::getClassName());
        $model = BenefitModel::fromArray($json);
        $this::assertSame('address', $model->getAddress());
        $this::assertSame('docNum', $model->getDocNum());
        $this::assertSame('docSeries', $model->getDocSeries());
        $this::assertSame('school', $model->getSchool());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
