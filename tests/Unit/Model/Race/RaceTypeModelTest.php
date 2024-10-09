<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use Exception;
use Onepix\EAvtovokzalApiClient\Enum\RaceTypeNameEnum;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceTypeModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class RaceTypeModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(RaceTypeModel::getClassName());
        $model = RaceTypeModel::fromArray($json);
        $this::assertNull($model->getName());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(RaceTypeModel::getClassName());
        $model = RaceTypeModel::fromArray($json);
        $this::assertSame(0, $model->getId());
        $this::assertSame(RaceTypeNameEnum::TYPE_UNKNOWN, $model->getName());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
