<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRacesResponseModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRacesResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRacesResponseModel::getClassName());
        $model = GetRacesResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRacesResponseModel::getClassName());
        $model = GetRacesResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(RaceModel::class, $model->getMultipleReturns());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
