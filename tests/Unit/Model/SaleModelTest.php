<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\BenefitModel;
use Onepix\EAvtovokzalApiClient\Model\SaleModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class SaleModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(SaleModel::getClassName());
        $model = SaleModel::fromArray($json);
        $this::assertNull($model->getLastName());
        $this::assertNull($model->getFirstName());
        $this::assertNull($model->getMiddleName());
        $this::assertNull($model->getDocSeries());
        $this::assertNull($model->getDocNum());
        $this::assertNull($model->getGender());
        $this::assertNull($model->getCitizenship());
        $this::assertNull($model->getBirthday());
        $this::assertNull($model->getPhone());
        $this::assertNull($model->getEmail());
        $this::assertNull($model->getSeatCode());
        $this::assertNull($model->getTicketTypeCode());
        $this::assertNull($model->getBenefit());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(SaleModel::getClassName());
        $model = SaleModel::fromArray($json);
        $this::assertSame('lastName', $model->getLastName());
        $this::assertSame('firstName', $model->getFirstName());
        $this::assertSame('middleName', $model->getMiddleName());
        $this::assertSame('docSeries', $model->getDocSeries());
        $this::assertSame('docNum', $model->getDocNum());
        $this::assertSame('gender', $model->getGender());
        $this::assertSame('citizenship', $model->getCitizenship());
        $this::assertEquals(new DateTime('2024-08-01T00:00:00+00:00'), $model->getBirthday());
        $this::assertSame('phone', $model->getPhone());
        $this::assertSame('email', $model->getEmail());
        $this::assertSame('seatCode', $model->getSeatCode());
        $this::assertSame('ticketTypeCode', $model->getTicketTypeCode());
        $this::assertInstanceOf(BenefitModel::class, $model->getBenefit());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
