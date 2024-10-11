<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\Order\BookOrderParametersModel;
use Onepix\EAvtovokzalApiClient\Model\SaleModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class BookOrderParametersModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(BookOrderParametersModel::getClassName());
        $model = BookOrderParametersModel::fromArray($json);
        $this::assertNull($model->getUid());
        $this::assertNull($model->getSales());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(BookOrderParametersModel::getClassName());
        $model = BookOrderParametersModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());
        $this::assertContainsOnlyInstancesOf(SaleModel::class, $model->getSales());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
