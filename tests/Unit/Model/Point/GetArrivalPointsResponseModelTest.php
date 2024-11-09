<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Point;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\PointModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetArrivalPointsResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetArrivalPointsResponseModel::getClassName());
        $model = GetArrivalPointsResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetArrivalPointsResponseModel::getClassName());
        $model = GetArrivalPointsResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(PointModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
