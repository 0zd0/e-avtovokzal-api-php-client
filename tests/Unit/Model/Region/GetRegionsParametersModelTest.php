<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Region;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Region\GetRegionsParametersModel;
use Onepix\EAvtovokzalApiClient\Model\Region\RegionModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRegionsParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRegionsParametersModel::getClassName());
        $model = GetRegionsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getCountryId());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRegionsParametersModel::getClassName());
        $model = GetRegionsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getCountryId());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
