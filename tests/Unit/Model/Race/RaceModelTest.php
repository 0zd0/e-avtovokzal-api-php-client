<?php

namespace Onepix\EAvtovokzalApiClient\Test\Unit\Model\Race;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceClassModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceStatusModel;
use Onepix\EAvtovokzalApiClient\Model\Race\RaceTypeModel;
use Onepix\EAvtovokzalApiClient\Test\TestCase;
use Onepix\EAvtovokzalApiClient\Test\Util\StubTrait;

class RaceModelTest extends TestCase
{
    use StubTrait;

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithRequiredFields()
    {
        $json  = $this::getStubJsonModelWithRequiredFields(RaceModel::getClassName());
        $model = RaceModel::fromArray($json);
        $this::assertNull($model->getUid());
        $this::assertSame(12345, $model->getDepotId());
        $this::assertNull($model->getNum());
        $this::assertNull($model->getName());
        $this::assertNull($model->getDescription());
        $this::assertNull($model->getDispatchDate());
        $this::assertNull($model->getArrivalDate());
        $this::assertNull($model->getDispatchStationName());
        $this::assertNull($model->getArrivalStationName());
        $this::assertNull($model->getDispatchPointId());
        $this::assertNull($model->getArrivalPointId());
        $this::assertNull($model->getSupplierPrice());
        $this::assertNull($model->getPrice());
        $this::assertSame(50, $model->getFreeSeatCount());
        $this::assertNull($model->getFreeSeatEstimation());
        $this::assertNull($model->getBusInfo());
        $this::assertNull($model->getCarrier());
        $this::assertNull($model->getCarrierInn());
        $this::assertNull($model->getCarrierPhone());
        $this::assertNull($model->getPrincipal());
        $this::assertNull($model->getPrincipalInn());
        $this::assertSame(true, $model->getDataRequired());
        $this::assertInstanceOf(RaceTypeModel::class, $model->getType());
        $this::assertInstanceOf(RaceClassModel::class, $model->getClazz());
        $this::assertInstanceOf(RaceStatusModel::class, $model->getStatus());
        $this::assertSame(false, $model->getFromCache());

        $this::assertArraysAreEqual($json, $model->toArray());
    }

    /**
     * @throws Exception
     */
    public function testFromArrayMethodWithAllFields()
    {
        $json  = $this::getStubJsonModelWithAllFields(RaceModel::getClassName());
        $model = RaceModel::fromArray($json);
        $this::assertSame('uid', $model->getUid());
        $this::assertSame(12345, $model->getDepotId());
        $this::assertSame('num', $model->getNum());
        $this::assertSame('name', $model->getName());
        $this::assertSame('description', $model->getDescription());
        $this::assertEquals(new DateTime('2024-08-01T12:00:00+00:00'), $model->getDispatchDate());
        $this::assertEquals(new DateTime('2024-08-01T18:00:00+00:00'), $model->getArrivalDate());
        $this::assertSame('dispatchStationName', $model->getDispatchStationName());
        $this::assertSame('arrivalStationName', $model->getArrivalStationName());
        $this::assertSame(54321, $model->getDispatchPointId());
        $this::assertSame(67890, $model->getArrivalPointId());
        $this::assertSame(123.45, $model->getSupplierPrice());
        $this::assertSame(678.90, $model->getPrice());
        $this::assertSame(50, $model->getFreeSeatCount());
        $this::assertSame('freeSeatEstimation', $model->getFreeSeatEstimation());
        $this::assertSame('busInfo', $model->getBusInfo());
        $this::assertSame('carrier', $model->getCarrier());
        $this::assertSame('carrierInn', $model->getCarrierInn());
        $this::assertSame('carrierPhone', $model->getCarrierPhone());
        $this::assertSame('principal', $model->getPrincipal());
        $this::assertSame('principalInn', $model->getPrincipalInn());
        $this::assertSame(true, $model->getDataRequired());
        $this::assertInstanceOf(RaceTypeModel::class, $model->getType());
        $this::assertInstanceOf(RaceClassModel::class, $model->getClazz());
        $this::assertInstanceOf(RaceStatusModel::class, $model->getStatus());
        $this::assertSame(false, $model->getFromCache());

        $this::assertArraysAreEqual($json, $model->toArray());
    }
}
