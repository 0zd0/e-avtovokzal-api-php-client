<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRacesParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRacesParametersModel::getClassName());
        $model = GetRacesParametersModel::fromArray($json);
        $this::assertSame(12345, $model->getDispatchPointId());
        $this::assertSame(67890, $model->getArrivalPointId());
        $this::assertNull($model->getDate());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRacesParametersModel::getClassName());
        $model = GetRacesParametersModel::fromArray($json);
        $this::assertSame(12345, $model->getDispatchPointId());
        $this::assertSame(67890, $model->getArrivalPointId());
        $this::assertEquals(new DateTime('2024-08-01T12:00:00+00:00'), $model->getDate());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
