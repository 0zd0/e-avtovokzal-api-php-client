<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Ticket;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Enum\TicketClassEnum;
use Onepix\EAvtovokzalApiClient\Enum\TicketStatusEnum;
use Onepix\EAvtovokzalApiClient\Model\BenefitModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class TicketModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(TicketModel::getClassName());
        $model = TicketModel::fromArray($json);
        $this::assertNull($model->getId());
        $this::assertNull($model->getUid());
        $this::assertNull($model->getTicketCode());
        $this::assertNull($model->getTicketNum());
        $this::assertNull($model->getTicketSeries());
        $this::assertNull($model->getTicketClass());
        $this::assertNull($model->getTicketTypeCode());
        $this::assertNull($model->getTicketType());
        $this::assertNull($model->getRaceUid());
        $this::assertNull($model->getRaceNum());
        $this::assertNull($model->getRaceName());
        $this::assertNull($model->getRaceClassId());
        $this::assertNull($model->getDispatchDate());
        $this::assertNull($model->getDispatchStation());
        $this::assertNull($model->getDispatchAddress());
        $this::assertNull($model->getArrivalDate());
        $this::assertNull($model->getArrivalStation());
        $this::assertNull($model->getArrivalAddress());
        $this::assertNull($model->getSeat());
        $this::assertNull($model->getSeatCode());
        $this::assertNull($model->getPlatform());
        $this::assertNull($model->getLastName());
        $this::assertNull($model->getFirstName());
        $this::assertNull($model->getMiddleName());
        $this::assertNull($model->getDocTypeCode());
        $this::assertNull($model->getDocType());
        $this::assertNull($model->getDocSeries());
        $this::assertNull($model->getDocNum());
        $this::assertNull($model->getCitizenship());
        $this::assertNull($model->getGender());
        $this::assertNull($model->getBirthday());
        $this::assertNull($model->getPhone());
        $this::assertNull($model->getEmail());
        $this::assertNull($model->getSupplierCurrencyCode());
        $this::assertNull($model->getSupplierFare());
        $this::assertNull($model->getSupplierDues());
        $this::assertNull($model->getSupplierPrice());
        $this::assertNull($model->getSupplierRepayment());
        $this::assertNull($model->getCurrencyCode());
        $this::assertNull($model->getDues());
        $this::assertNull($model->getPrice());
        $this::assertNull($model->getVat());
        $this::assertNull($model->getRepayment());
        $this::assertNull($model->getBusInfo());
        $this::assertNull($model->getCarrier());
        $this::assertNull($model->getCarrierInn());
        $this::assertNull($model->getCarrierPhone());
        $this::assertNull($model->getBarcode());
        $this::assertNull($model->getStatus());
        $this::assertNull($model->getReturned());
        $this::assertNull($model->getBenefit());
        $this::assertNull($model->getHash());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(TicketModel::getClassName());
        $model = TicketModel::fromArray($json);
        $this::assertSame(1, $model->getId());
        $this::assertSame('uid', $model->getUid());
        $this::assertSame('ticketCode', $model->getTicketCode());
        $this::assertSame('ticketNum', $model->getTicketNum());
        $this::assertSame('ticketSeries', $model->getTicketSeries());
        $this::assertSame(TicketClassEnum::CLASS_BAGGAGE, $model->getTicketClass());
        $this::assertSame('ticketTypeCode', $model->getTicketTypeCode());
        $this::assertSame('ticketType', $model->getTicketType());
        $this::assertSame('raceUid', $model->getRaceUid());
        $this::assertSame('raceNum', $model->getRaceNum());
        $this::assertSame('raceName', $model->getRaceName());
        $this::assertSame(2, $model->getRaceClassId());
        $this::assertEquals(new DateTime('2024-08-01T00:00:00+00:00'), $model->getDispatchDate());
        $this::assertSame('dispatchStation', $model->getDispatchStation());
        $this::assertSame('dispatchAddress', $model->getDispatchAddress());
        $this::assertEquals(new DateTime('2024-08-01T01:00:00+00:00'), $model->getArrivalDate());
        $this::assertSame('arrivalStation', $model->getArrivalStation());
        $this::assertSame('arrivalAddress', $model->getArrivalAddress());
        $this::assertSame('seat', $model->getSeat());
        $this::assertSame('seatCode', $model->getSeatCode());
        $this::assertSame('platform', $model->getPlatform());
        $this::assertSame('lastName', $model->getLastName());
        $this::assertSame('firstName', $model->getFirstName());
        $this::assertSame('middleName', $model->getMiddleName());
        $this::assertSame('docTypeCode', $model->getDocTypeCode());
        $this::assertSame('docType', $model->getDocType());
        $this::assertSame('docSeries', $model->getDocSeries());
        $this::assertSame('docNum', $model->getDocNum());
        $this::assertSame('citizenship', $model->getCitizenship());
        $this::assertSame('gender', $model->getGender());
        $this::assertEquals(new DateTime('2024-08-02T00:00:00+00:00'), $model->getBirthday());
        $this::assertSame('phone', $model->getPhone());
        $this::assertSame('email', $model->getEmail());
        $this::assertSame('supplierCurrencyCode', $model->getSupplierCurrencyCode());
        $this::assertSame(6.01, $model->getSupplierFare());
        $this::assertSame(7.01, $model->getSupplierDues());
        $this::assertSame(8.01, $model->getSupplierPrice());
        $this::assertSame(9.01, $model->getSupplierRepayment());
        $this::assertSame('RUB', $model->getCurrencyCode());
        $this::assertSame(10.01, $model->getDues());
        $this::assertSame(11.01, $model->getPrice());
        $this::assertSame(12.01, $model->getVat());
        $this::assertSame(13.01, $model->getRepayment());
        $this::assertSame('busInfo', $model->getBusInfo());
        $this::assertSame('carrier', $model->getCarrier());
        $this::assertSame('carrierInn', $model->getCarrierInn());
        $this::assertSame('carrierPhone', $model->getCarrierPhone());
        $this::assertSame('barcode', $model->getBarcode());
        $this::assertSame(TicketStatusEnum::STATUS_BOOKED, $model->getStatus());
        $this::assertEquals(new DateTime('2024-08-03T00:00:00+00:00'), $model->getReturned());
        $this::assertInstanceOf(BenefitModel::class, $model->getBenefit());
        $this::assertSame('hash', $model->getHash());

        $toApi = $model->toArray();
        $this::assertEqualsCanonicalizing(sort($toApi), sort($json));
    }
}
