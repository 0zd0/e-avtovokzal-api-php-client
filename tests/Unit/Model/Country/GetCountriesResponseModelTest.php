<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Country;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Country\CountryModel;
use Onepix\EAvtovokzalApiClient\Model\Country\GetCountriesResponseModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetCountriesResponseModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetCountriesResponseModel::getClassName());
        $model = GetCountriesResponseModel::fromArray($json);
        $this::assertNull($model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetCountriesResponseModel::getClassName());
        $model = GetCountriesResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(CountryModel::class, $model->getMultipleReturns());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
