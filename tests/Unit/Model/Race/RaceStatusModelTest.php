<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\RaceStatusNameEnum;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceStatusModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class RaceStatusModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(RaceStatusModel::getClassName());
        $model = RaceStatusModel::fromArray($json);
        $this::assertSame(2, $model->getId());
        $this::assertNull($model->getName());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(RaceStatusModel::getClassName());
        $model = RaceStatusModel::fromArray($json);
        $this::assertSame(2, $model->getId());
        $this::assertSame(RaceStatusNameEnum::STATUS_CANCELED, $model->getName());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
