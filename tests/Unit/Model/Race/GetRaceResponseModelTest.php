<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRaceResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRaceResponseModel::getClassName());
        $model = GetRaceResponseModel::fromArray($json);
        $this::assertNull($model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRaceResponseModel::getClassName());
        $model = GetRaceResponseModel::fromArray($json);
        $this::assertInstanceOf(RaceModel::class, $model->getSingleReturn());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
