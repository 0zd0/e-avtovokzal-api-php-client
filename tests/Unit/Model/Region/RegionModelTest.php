<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Region;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Region\RegionModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class RegionModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(RegionModel::getClassName());
        $model = RegionModel::fromArray($json);
        $this::assertNull($model->getId());
        $this::assertNull($model->getName());
        $this::assertNull($model->getType());
        $this::assertNull($model->getCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(RegionModel::getClassName());
        $model = RegionModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame('name', $model->getName());
        $this::assertSame('type', $model->getType());
        $this::assertSame('code', $model->getCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
