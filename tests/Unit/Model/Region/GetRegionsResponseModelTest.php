<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Region;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Region\RegionModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRegionsResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRegionsResponseModel::getClassName());
        $model = GetRegionsResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRegionsResponseModel::getClassName());
        $model = GetRegionsResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(RegionModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
