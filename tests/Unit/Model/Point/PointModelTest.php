<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Point;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Point\PointModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class PointModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(PointModel::getClassName());
        $model = PointModel::fromArray($json);
        $this::assertNull($model->getAddress());
        $this::assertNull($model->getDetails());
        $this::assertSame(1, $model->getId());
        $this::assertNull($model->getLatitude());
        $this::assertNull($model->getLongitude());
        $this::assertNull($model->getName());
        $this::assertNull($model->getOkato());
        $this::assertNull($model->getRegion());
        $this::assertSame(true, $model->getPlace());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(PointModel::getClassName());
        $model = PointModel::fromArray($json);
        $this::assertSame('address', $model->getAddress());
        $this::assertSame('details', $model->getDetails());
        $this::assertSame(1, $model->getId());
        $this::assertSame('latitude', $model->getLatitude());
        $this::assertSame('longitude', $model->getLongitude());
        $this::assertSame('name', $model->getName());
        $this::assertSame('okato', $model->getOkato());
        $this::assertSame(true, $model->getPlace());
        $this::assertSame('region', $model->getRegion());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
