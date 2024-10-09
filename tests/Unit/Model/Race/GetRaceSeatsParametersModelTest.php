<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\GetRaceSeatsParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetRaceSeatsParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetRaceSeatsParametersModel::getClassName());
        $model = GetRaceSeatsParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetRaceSeatsParametersModel::getClassName());
        $model = GetRaceSeatsParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
