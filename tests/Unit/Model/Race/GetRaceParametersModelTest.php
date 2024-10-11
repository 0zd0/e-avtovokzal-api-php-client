<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRaceParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRaceParametersModel::getClassName());
        $model = GetRaceParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRaceParametersModel::getClassName());
        $model = GetRaceParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
