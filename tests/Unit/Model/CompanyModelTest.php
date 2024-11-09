<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\CompanyModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class CompanyModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(CompanyModel::getClassName());
        $model = CompanyModel::fromArray($json);
        $this::assertNull($model->getId());
        $this::assertNull($model->getFullName());
        $this::assertNull($model->getInn());
        $this::assertNull($model->getMarkup());
        $this::assertNull($model->getExtra());
        $this::assertNull($model->getCurrencyCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(CompanyModel::getClassName());
        $model = CompanyModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame('fullName', $model->getFullName());
        $this::assertSame('inn', $model->getInn());
        $this::assertSame(2.01, $model->getMarkup());
        $this::assertSame(3.01, $model->getExtra());
        $this::assertSame('currencyCode', $model->getCurrencyCode());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
