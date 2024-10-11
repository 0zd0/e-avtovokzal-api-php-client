<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Point;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\GetArrivalPointsParametersModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class GetArrivalPointsParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(GetArrivalPointsParametersModel::getClassName());
        $model = GetArrivalPointsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getDispatchPointId());
        $this::assertNull($model->getPattern());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(GetArrivalPointsParametersModel::getClassName());
        $model = GetArrivalPointsParametersModel::fromArray($json);
        $this::assertSame(1, $model->getDispatchPointId());
        $this::assertSame('pattern', $model->getPattern());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
