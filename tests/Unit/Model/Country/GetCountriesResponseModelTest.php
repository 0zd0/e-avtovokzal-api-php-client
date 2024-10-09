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

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetCountriesResponseModel::getClassName());
        $model = GetCountriesResponseModel::fromArray($json);
        $this::assertContainsOnlyInstancesOf(CountryModel::class, $model->getMultipleReturns());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
