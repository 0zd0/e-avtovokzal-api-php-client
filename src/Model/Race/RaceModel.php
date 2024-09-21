<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use DateTime;
use DateTimeInterface;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class RaceModel extends AbstractModel
{
    public const UID_KEY                   = 'uid';
    public const DEPOT_ID_KEY              = 'depotId';
    public const NUM_KEY                   = 'num';
    public const NAME_KEY                  = 'name';
    public const DESCRIPTION_KEY           = 'description';
    public const DISPATCH_DATE_KEY         = 'dispatchDate';
    public const ARRIVAL_DATE_KEY          = 'arrivalDate';
    public const DISPATCH_STATION_NAME_KEY = 'dispatchStationName';
    public const ARRIVAL_STATION_NAME_KEY  = 'arrivalStationName';
    public const DISPATCH_POINT_ID_KEY     = 'dispatchPointId';
    public const ARRIVAL_POINT_ID_KEY      = 'arrivalPointId';
    public const SUPPLIER_PRICE_KEY        = 'supplierPrice';
    public const PRICE_KEY                 = 'price';
    public const FREE_SEAT_COUNT_KEY       = 'freeSeatCount';
    public const FREE_SEAT_ESTIMATION_KEY  = 'freeSeatEstimation';
    public const BUS_INFO_KEY              = 'busInfo';
    public const CARRIER_KEY               = 'carrier';
    public const CARRIER_INN_KEY           = 'carrierInn';
    public const CARRIER_PHONE_KEY         = 'carrierPhone';
    public const PRINCIPAL_KEY             = 'principal';
    public const PRINCIPAL_INN_KEY         = 'principalInn';
    public const DATA_REQUIRED_KEY         = 'dataRequired';
    public const TYPE_KEY                  = 'type';
    public const CLAZZ_KEY                 = 'clazz';
    public const STATUS_KEY                = 'status';
    public const FROM_CACHE_KEY            = 'fromCache';

    protected ?string $uid = null;

    protected int $depotId;

    protected ?string $num = null;
    protected ?string $name = null;
    protected ?string $description = null;
    protected ?DateTime $dispatchDate = null;
    protected ?DateTime $arrivalDate = null;
    protected ?string $dispatchStationName = null;
    protected ?string $arrivalStationName = null;
    protected ?int $dispatchPointId = null;
    protected ?int $arrivalPointId = null;
    protected ?float $supplierPrice = null;
    protected ?float $price = null;
    protected int $freeSeatCount;
    protected ?string $freeSeatEstimation = null;
    protected ?string $busInfo = null;
    protected ?string $carrier = null;
    protected ?string $carrierInn = null;
    protected ?string $carrierPhone = null;
    protected ?string $principal = null;
    protected ?string $principalInn = null;
    protected bool $dataRequired;
    protected ?RaceTypeModel $type = null;
    protected ?RaceClassModel $clazz = null;
    protected ?RaceStatusModel $status = null;
    protected bool $fromCache;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return int|null
     */
    public function getDispatchPointId(): ?int
    {
        return $this->dispatchPointId;
    }

    /**
     * @return int|null
     */
    public function getArrivalPointId(): ?int
    {
        return $this->arrivalPointId;
    }

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return float|null
     */
    public function getSupplierPrice(): ?float
    {
        return $this->supplierPrice;
    }

    /**
     * @return RaceStatusModel|null
     */
    public function getStatus(): ?RaceStatusModel
    {
        return $this->status;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return DateTime|null
     */
    public function getDispatchDate(): ?DateTime
    {
        return $this->dispatchDate;
    }

    /**
     * @return string|null
     */
    public function getCarrierPhone(): ?string
    {
        return $this->carrierPhone;
    }

    /**
     * @return string|null
     */
    public function getCarrierInn(): ?string
    {
        return $this->carrierInn;
    }


    /**
     * @return string|null
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * @return string|null
     */
    public function getBusInfo(): ?string
    {
        return $this->busInfo;
    }

    /**
     * @return DateTime|null
     */
    public function getArrivalDate(): ?DateTime
    {
        return $this->arrivalDate;
    }

    /**
     * @return RaceTypeModel|null
     */
    public function getType(): ?RaceTypeModel
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string|null
     */
    public function getArrivalStationName(): ?string
    {
        return $this->arrivalStationName;
    }

    /**
     * @return RaceClassModel|null
     */
    public function getClazz(): ?RaceClassModel
    {
        return $this->clazz;
    }

    /**
     * @return int
     */
    public function getDepotId(): int
    {
        return $this->depotId;
    }

    /**
     * @return string|null
     */
    public function getDispatchStationName(): ?string
    {
        return $this->dispatchStationName;
    }

    /**
     * @return int
     */
    public function getFreeSeatCount(): int
    {
        return $this->freeSeatCount;
    }

    /**
     * @return string|null
     */
    public function getFreeSeatEstimation(): ?string
    {
        return $this->freeSeatEstimation;
    }

    /**
     * @return bool|null
     */
    public function getFromCache(): ?bool
    {
        return $this->fromCache;
    }

    /**
     * @return bool|null
     */
    public function getDataRequired(): ?bool
    {
        return $this->dataRequired;
    }

    /**
     * @return string|null
     */
    public function getNum(): ?string
    {
        return $this->num;
    }

    /**
     * @return string|null
     */
    public function getPrincipal(): ?string
    {
        return $this->principal;
    }

    /**
     * @return string|null
     */
    public function getPrincipalInn(): ?string
    {
        return $this->principalInn;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param int|null $arrivalPointId
     *
     * @return self
     */
    public function setArrivalPointId(?int $arrivalPointId): self
    {
        $this->arrivalPointId = $arrivalPointId;

        return $this;
    }

    /**
     * @param string|null $uid
     *
     * @return self
     */
    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param float|null $supplierPrice
     *
     * @return self
     */
    public function setSupplierPrice(?float $supplierPrice): self
    {
        $this->supplierPrice = $supplierPrice;

        return $this;
    }

    /**
     * @param RaceStatusModel|null $status
     *
     * @return self
     */
    public function setStatus(?RaceStatusModel $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param float|null $price
     *
     * @return self
     */
    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param string|null $arrivalStationName
     *
     * @return self
     */
    public function setArrivalStationName(?string $arrivalStationName): self
    {
        $this->arrivalStationName = $arrivalStationName;

        return $this;
    }

    /**
     * @param DateTime|null $dispatchDate
     *
     * @return self
     */
    public function setDispatchDate(?DateTime $dispatchDate): self
    {
        $this->dispatchDate = $dispatchDate;

        return $this;
    }

    /**
     * @param string|null $carrierPhone
     *
     * @return self
     */
    public function setCarrierPhone(?string $carrierPhone): self
    {
        $this->carrierPhone = $carrierPhone;

        return $this;
    }

    /**
     * @param string|null $carrierInn
     *
     * @return self
     */
    public function setCarrierInn(?string $carrierInn): self
    {
        $this->carrierInn = $carrierInn;

        return $this;
    }

    /**
     * @param string|null $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @param string|null $busInfo
     *
     * @return self
     */
    public function setBusInfo(?string $busInfo): self
    {
        $this->busInfo = $busInfo;

        return $this;
    }

    /**
     * @param DateTime|null $arrivalDate
     *
     * @return self
     */
    public function setArrivalDate(?DateTime $arrivalDate): self
    {
        $this->arrivalDate = $arrivalDate;

        return $this;
    }

    /**
     * @param RaceTypeModel|null $type
     *
     * @return self
     */
    public function setType(?RaceTypeModel $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string|null $description
     *
     * @return self
     */
    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param RaceClassModel|null $clazz
     *
     * @return self
     */
    public function setClazz(?RaceClassModel $clazz): self
    {
        $this->clazz = $clazz;

        return $this;
    }

    /**
     * @param bool $dataRequired
     *
     * @return self
     */
    public function setDataRequired(bool $dataRequired): self
    {
        $this->dataRequired = $dataRequired;

        return $this;
    }

    /**
     * @param int $depotId
     *
     * @return self
     */
    public function setDepotId(int $depotId): self
    {
        $this->depotId = $depotId;

        return $this;
    }

    /**
     * @param int|null $dispatchPointId
     *
     * @return self
     */
    public function setDispatchPointId(?int $dispatchPointId): self
    {
        $this->dispatchPointId = $dispatchPointId;

        return $this;
    }

    /**
     * @param string|null $dispatchStationName
     *
     * @return self
     */
    public function setDispatchStationName(?string $dispatchStationName): self
    {
        $this->dispatchStationName = $dispatchStationName;

        return $this;
    }

    /**
     * @param int $freeSeatCount
     *
     * @return self
     */
    public function setFreeSeatCount(int $freeSeatCount): self
    {
        $this->freeSeatCount = $freeSeatCount;

        return $this;
    }

    /**
     * @param string|null $freeSeatEstimation
     *
     * @return self
     */
    public function setFreeSeatEstimation(?string $freeSeatEstimation): self
    {
        $this->freeSeatEstimation = $freeSeatEstimation;

        return $this;
    }

    /**
     * @param bool $fromCache
     *
     * @return self
     */
    public function setFromCache(bool $fromCache): self
    {
        $this->fromCache = $fromCache;

        return $this;
    }

    /**
     * @param string|null $num
     *
     * @return self
     */
    public function setNum(?string $num): self
    {
        $this->num = $num;

        return $this;
    }

    /**
     * @param string|null $principal
     *
     * @return self
     */
    public function setPrincipal(?string $principal): self
    {
        $this->principal = $principal;

        return $this;
    }

    /**
     * @param string|null $principalInn
     *
     * @return self
     */
    public function setPrincipalInn(?string $principalInn): self
    {
        $this->principalInn = $principalInn;

        return $this;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setUid($response[self::UID_KEY] ?? null)
            ->setDepotId($response[self::DEPOT_ID_KEY])
            ->setNum($response[self::NUM_KEY] ?? null)
            ->setName($response[self::NAME_KEY] ?? null)
            ->setDescription($response[self::DESCRIPTION_KEY] ?? null)
            ->setDispatchDate(
                isset($response[self::DISPATCH_DATE_KEY]) ? new DateTime($response[self::DISPATCH_DATE_KEY]) : null
            )
            ->setArrivalDate(
                isset($response[self::ARRIVAL_DATE_KEY]) ? new DateTime($response[self::ARRIVAL_DATE_KEY]) : null
            )
            ->setDispatchStationName($response[self::DISPATCH_STATION_NAME_KEY] ?? null)
            ->setArrivalStationName($response[self::ARRIVAL_STATION_NAME_KEY] ?? null)
            ->setDispatchPointId($response[self::DISPATCH_POINT_ID_KEY] ?? null)
            ->setArrivalPointId($response[self::ARRIVAL_POINT_ID_KEY] ?? null)
            ->setSupplierPrice($response[self::SUPPLIER_PRICE_KEY] ?? null)
            ->setPrice($response[self::PRICE_KEY] ?? null)
            ->setFreeSeatCount($response[self::FREE_SEAT_COUNT_KEY])
            ->setFreeSeatEstimation($response[self::FREE_SEAT_ESTIMATION_KEY] ?? null)
            ->setBusInfo($response[self::BUS_INFO_KEY] ?? null)
            ->setCarrier($response[self::CARRIER_KEY] ?? null)
            ->setCarrierInn($response[self::CARRIER_INN_KEY] ?? null)
            ->setCarrierPhone($response[self::CARRIER_PHONE_KEY] ?? null)
            ->setPrincipal($response[self::PRINCIPAL_KEY] ?? null)
            ->setPrincipalInn($response[self::PRINCIPAL_INN_KEY] ?? null)
            ->setDataRequired($response[self::DATA_REQUIRED_KEY])
            ->setType(isset($response[self::TYPE_KEY]) ? RaceTypeModel::fromArray($response[self::TYPE_KEY]) : null)
            ->setClazz(isset($response[self::CLAZZ_KEY]) ? RaceClassModel::fromArray($response[self::CLAZZ_KEY]) : null)
            ->setStatus(
                isset($response[self::STATUS_KEY]) ? RaceStatusModel::fromArray($response[self::STATUS_KEY]) : null
            )
            ->setFromCache($response[self::FROM_CACHE_KEY]);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::UID_KEY                  => $this->getUid(),
            self::DEPOT_ID_KEY             => $this->getDepotId(),
            self::NUM_KEY                  => $this->getNum(),
            self::NAME_KEY                 => $this->getName(),
            self::DESCRIPTION_KEY          => $this->getDescription(),
            self::DISPATCH_DATE_KEY        => $this->getDispatchDate()?->format(DateTimeInterface::ATOM),
            self::ARRIVAL_DATE_KEY         => $this->getArrivalDate()?->format(DateTimeInterface::ATOM),
            self::DISPATCH_POINT_ID_KEY    => $this->getDispatchPointId(),
            self::ARRIVAL_POINT_ID_KEY     => $this->getArrivalPointId(),
            self::SUPPLIER_PRICE_KEY       => $this->getSupplierPrice(),
            self::PRICE_KEY                => $this->getPrice(),
            self::FREE_SEAT_COUNT_KEY      => $this->getFreeSeatCount(),
            self::FREE_SEAT_ESTIMATION_KEY => $this->getFreeSeatEstimation(),
            self::BUS_INFO_KEY             => $this->getBusInfo(),
            self::CARRIER_KEY              => $this->getCarrier(),
            self::CARRIER_INN_KEY          => $this->getCarrierInn(),
            self::CARRIER_PHONE_KEY        => $this->getCarrierPhone(),
            self::PRINCIPAL_KEY            => $this->getPrincipal(),
            self::PRINCIPAL_INN_KEY        => $this->getPrincipalInn(),
            self::DATA_REQUIRED_KEY        => $this->getDataRequired(),
            self::TYPE_KEY                 => $this->getType()?->toArray(),
            self::CLAZZ_KEY                => $this->getClazz()?->toArray(),
            self::STATUS_KEY               => $this->getStatus()?->toArray(),
            self::FROM_CACHE_KEY           => $this->getFromCache(),
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
