<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Country;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Country\CountryModel;
use Onepix\EAvtovokzalApiClient\Model\Country\GetCountriesResponseModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class CountryModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(CountryModel::getClassName());
        $model = CountryModel::fromArray($json);
        $this::assertNull($model->getId());
        $this::assertNull($model->getName());
        $this::assertNull($model->getFullName());
        $this::assertNull($model->getCode());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(CountryModel::getClassName());
        $model = CountryModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame('name', $model->getName());
        $this::assertSame('fullName', $model->getFullName());
        $this::assertSame('code', $model->getCode());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
