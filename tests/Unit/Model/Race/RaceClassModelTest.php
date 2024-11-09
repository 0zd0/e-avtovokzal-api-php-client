<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\RaceClassNameEnum;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceClassModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class RaceClassModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(RaceClassModel::getClassName());
        $model = RaceClassModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertNull($model->getName());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(RaceClassModel::getClassName());
        $model = RaceClassModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame(RaceClassNameEnum::CLASS_REGULAR, $model->getName());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
