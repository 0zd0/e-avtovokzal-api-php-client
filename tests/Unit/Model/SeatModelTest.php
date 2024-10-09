<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\SeatModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class SeatModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(SeatModel::getClassName());
        $model = SeatModel::fromArray($json);
        $this::assertNull($model->getCode());
        $this::assertNull($model->getName());
        $this::assertNull($model->getType());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(SeatModel::getClassName());
        $model = SeatModel::fromArray($json);
        $this::assertSame('code', $model->getCode());
        $this::assertSame('name', $model->getName());
        $this::assertSame('type', $model->getType());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
