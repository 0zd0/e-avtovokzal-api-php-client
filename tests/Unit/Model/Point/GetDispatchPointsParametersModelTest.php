<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Point;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\GetDispatchPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetDispatchPointsParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetDispatchPointsParametersModel::getClassName());
        $model = GetDispatchPointsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getRegionId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetDispatchPointsParametersModel::getClassName());
        $model = GetDispatchPointsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getRegionId());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
