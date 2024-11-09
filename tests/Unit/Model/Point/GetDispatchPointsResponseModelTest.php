<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Point;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Point\PointModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetDispatchPointsResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetDispatchPointsResponseModel::getClassName());
        $model = GetDispatchPointsResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetDispatchPointsResponseModel::getClassName());
        $model = GetDispatchPointsResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(PointModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
