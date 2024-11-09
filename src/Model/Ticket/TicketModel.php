<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use DateTime;
use DateTimeInterface;
use Exception;
use Onepix\EAvtovokzalApiClient\Enum\TicketClassEnum;
use Onepix\EAvtovokzalApiClient\Enum\TicketStatusEnum;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\BenefitModel;

class TicketModel extends AbstractModel
{
    public const ID_KEY                     = 'id';
    public const UID_KEY                    = 'uid';
    public const TICKET_CODE_KEY            = 'ticketCode';
    public const TICKET_NUM_KEY             = 'ticketNum';
    public const TICKET_SERIES_KEY          = 'ticketSeries';
    public const TICKET_CLASS_KEY           = 'ticketClass';
    public const TICKET_TYPE_CODE_KEY       = 'ticketTypeCode';
    public const TICKET_TYPE_KEY            = 'ticketType';
    public const RACE_UID_KEY               = 'raceUid';
    public const RACE_NUM_KEY               = 'raceNum';
    public const RACE_NAME_KEY              = 'raceName';
    public const RACE_CLASS_ID_KEY          = 'raceClassId';
    public const DISPATCH_DATE_KEY          = 'dispatchDate';
    public const DISPATCH_STATION_KEY       = 'dispatchStation';
    public const DISPATCH_ADDRESS_KEY       = 'dispatchAddress';
    public const ARRIVAL_DATE_KEY           = 'arrivalDate';
    public const ARRIVAL_STATION_KEY        = 'arrivalStation';
    public const ARRIVAL_ADDRESS_KEY        = 'arrivalAddress';
    public const SEAT_KEY                   = 'seat';
    public const SEAT_CODE_KEY              = 'seatCode';
    public const PLATFORM_KEY               = 'platform';
    public const LAST_NAME_KEY              = 'lastName';
    public const FIRST_NAME_KEY             = 'firstName';
    public const MIDDLE_NAME_KEY            = 'middleName';
    public const DOC_TYPE_CODE_KEY          = 'docTypeCode';
    public const DOC_TYPE_KEY               = 'docType';
    public const DOC_SERIES_KEY             = 'docSeries';
    public const DOC_NUM_KEY                = 'docNum';
    public const CITIZENSHIP_KEY            = 'citizenship';
    public const GENDER_KEY                 = 'gender';
    public const BIRTHDAY_KEY               = 'birthday';
    public const PHONE_KEY                  = 'phone';
    public const EMAIL_KEY                  = 'email';
    public const SUPPLIER_CURRENCY_CODE_KEY = 'supplierCurrencyCode';
    public const SUPPLIER_FARE_KEY          = 'supplierFare';
    public const SUPPLIER_DUES_KEY          = 'supplierDues';
    public const SUPPLIER_PRICE_KEY         = 'supplierPrice';
    public const SUPPLIER_REPAYMENT_KEY     = 'supplierRepayment';
    public const CURRENCY_CODE_KEY          = 'currencyCode';
    public const DUES_KEY                   = 'dues';
    public const PRICE_KEY                  = 'price';
    public const VAT_KEY                    = 'vat';
    public const REPAYMENT_KEY              = 'repayment';
    public const BUS_INFO_KEY               = 'busInfo';
    public const CARRIER_KEY                = 'carrier';
    public const CARRIER_INN_KEY            = 'carrierInn';
    public const CARRIER_PHONE_KEY          = 'carrierPhone';
    public const BARCODE_KEY                = 'barcode';
    public const STATUS_KEY                 = 'status';
    public const RETURNED_KEY               = 'returned';
    public const BENEFIT_KEY                = 'benefit';
    public const HASH_KEY                   = 'hash';

    protected ?int $id = null;
    protected ?string $uid = null;
    protected ?string $ticketCode = null;
    protected ?string $ticketNum = null;
    protected ?string $ticketSeries = null;
    protected ?TicketClassEnum $ticketClass = null;
    protected ?string $ticketTypeCode = null;
    protected ?string $ticketType = null;
    protected ?string $raceUid = null;
    protected ?string $raceNum = null;
    protected ?string $raceName = null;
    protected ?int $raceClassId = null;
    protected ?DateTime $dispatchDate = null;
    protected ?string $dispatchStation = null;
    protected ?string $dispatchAddress = null;
    protected ?DateTime $arrivalDate = null;
    protected ?string $arrivalStation = null;
    protected ?string $arrivalAddress = null;
    protected ?string $seat = null;
    protected ?string $seatCode = null;
    protected ?string $platform = null;
    protected ?string $lastName = null;
    protected ?string $firstName = null;
    protected ?string $middleName = null;
    protected ?string $docTypeCode = null;
    protected ?string $docType = null;
    protected ?string $docSeries = null;
    protected ?string $docNum = null;
    protected ?string $citizenship = null;
    protected ?string $gender = null;
    protected ?DateTime $birthday = null;
    protected ?string $phone = null;
    protected ?string $email = null;
    protected ?string $supplierCurrencyCode = null;
    protected ?float $supplierFare = null;
    protected ?float $supplierDues = null;
    protected ?float $supplierPrice = null;
    protected ?float $supplierRepayment = null;
    protected ?string $currencyCode = null;
    protected ?float $dues = null;
    protected ?float $price = null;
    protected ?float $vat = null;
    protected ?float $repayment = null;
    protected ?string $busInfo = null;
    protected ?string $carrier = null;
    protected ?string $carrierInn = null;
    protected ?string $carrierPhone = null;
    protected ?string $barcode = null;
    protected ?TicketStatusEnum $status = null;
    protected ?DateTime $returned = null;
    protected ?BenefitModel $benefit = null;
    protected ?string $hash = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * @return DateTime|null
     */
    public function getArrivalDate(): ?DateTime
    {
        return $this->arrivalDate;
    }

    /**
     * @return string|null
     */
    public function getBusInfo(): ?string
    {
        return $this->busInfo;
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
    public function getCarrierInn(): ?string
    {
        return $this->carrierInn;
    }

    /**
     * @return string|null
     */
    public function getCarrierPhone(): ?string
    {
        return $this->carrierPhone;
    }

    /**
     * @return DateTime|null
     */
    public function getDispatchDate(): ?DateTime
    {
        return $this->dispatchDate;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return TicketStatusEnum|null
     */
    public function getStatus(): ?TicketStatusEnum
    {
        return $this->status;
    }

    /**
     * @return float|null
     */
    public function getSupplierPrice(): ?float
    {
        return $this->supplierPrice;
    }

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return string|null
     */
    public function getTicketType(): ?string
    {
        return $this->ticketType;
    }

    /**
     * @return string|null
     */
    public function getTicketSeries(): ?string
    {
        return $this->ticketSeries;
    }

    /**
     * @return string|null
     */
    public function getTicketNum(): ?string
    {
        return $this->ticketNum;
    }

    /**
     * @return string|null
     */
    public function getTicketCode(): ?string
    {
        return $this->ticketCode;
    }

    /**
     * @return TicketClassEnum|null
     */
    public function getTicketClass(): ?TicketClassEnum
    {
        return $this->ticketClass;
    }

    /**
     * @return float|null
     */
    public function getSupplierRepayment(): ?float
    {
        return $this->supplierRepayment;
    }

    /**
     * @return float|null
     */
    public function getSupplierFare(): ?float
    {
        return $this->supplierFare;
    }

    /**
     * @return float|null
     */
    public function getSupplierDues(): ?float
    {
        return $this->supplierDues;
    }

    /**
     * @return string|null
     */
    public function getSupplierCurrencyCode(): ?string
    {
        return $this->supplierCurrencyCode;
    }

    /**
     * @return string|null
     */
    public function getSeat(): ?string
    {
        return $this->seat;
    }

    /**
     * @return DateTime|null
     */
    public function getReturned(): ?DateTime
    {
        return $this->returned;
    }

    /**
     * @return float|null
     */
    public function getRepayment(): ?float
    {
        return $this->repayment;
    }

    /**
     * @return string|null
     */
    public function getRaceUid(): ?string
    {
        return $this->raceUid;
    }

    /**
     * @return string|null
     */
    public function getRaceNum(): ?string
    {
        return $this->raceNum;
    }

    /**
     * @return string|null
     */
    public function getRaceName(): ?string
    {
        return $this->raceName;
    }

    /**
     * @return int|null
     */
    public function getRaceClassId(): ?int
    {
        return $this->raceClassId;
    }

    /**
     * @return string|null
     */
    public function getPlatform(): ?string
    {
        return $this->platform;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->hash;
    }

    /**
     * @return string|null
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return float|null
     */
    public function getDues(): ?float
    {
        return $this->dues;
    }

    /**
     * @return string|null
     */
    public function getDocType(): ?string
    {
        return $this->docType;
    }

    /**
     * @return string|null
     */
    public function getDocSeries(): ?string
    {
        return $this->docSeries;
    }

    /**
     * @return string|null
     */
    public function getDocNum(): ?string
    {
        return $this->docNum;
    }

    /**
     * @return string|null
     */
    public function getDispatchStation(): ?string
    {
        return $this->dispatchStation;
    }

    /**
     * @return string|null
     */
    public function getDispatchAddress(): ?string
    {
        return $this->dispatchAddress;
    }

    /**
     * @return string|null
     */
    public function getCitizenship(): ?string
    {
        return $this->citizenship;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    /**
     * @return string|null
     */
    public function getBarcode(): ?string
    {
        return $this->barcode;
    }

    /**
     * @return string|null
     */
    public function getArrivalAddress(): ?string
    {
        return $this->arrivalAddress;
    }

    /**
     * @return float|null
     */
    public function getVat(): ?float
    {
        return $this->vat;
    }

    /**
     * @return string|null
     */
    public function getArrivalStation(): ?string
    {
        return $this->arrivalStation;
    }

    /**
     * @return BenefitModel|null
     */
    public function getBenefit(): ?BenefitModel
    {
        return $this->benefit;
    }

    /**
     * @return string|null
     */
    public function getDocTypeCode(): ?string
    {
        return $this->docTypeCode;
    }

    /**
     * @return string|null
     */
    public function getSeatCode(): ?string
    {
        return $this->seatCode;
    }

    /**
     * @return string|null
     */
    public function getTicketTypeCode(): ?string
    {
        return $this->ticketTypeCode;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

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
     * @param TicketStatusEnum|null $status
     *
     * @return self
     */
    public function setStatus(?TicketStatusEnum $status): self
    {
        $this->status = $status;

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
     * @param string|null $ticketType
     *
     * @return self
     */
    public function setTicketType(?string $ticketType): self
    {
        $this->ticketType = $ticketType;

        return $this;
    }

    /**
     * @param string|null $ticketSeries
     *
     * @return self
     */
    public function setTicketSeries(?string $ticketSeries): self
    {
        $this->ticketSeries = $ticketSeries;

        return $this;
    }

    /**
     * @param string|null $ticketNum
     *
     * @return self
     */
    public function setTicketNum(?string $ticketNum): self
    {
        $this->ticketNum = $ticketNum;

        return $this;
    }

    /**
     * @param string|null $ticketCode
     *
     * @return self
     */
    public function setTicketCode(?string $ticketCode): self
    {
        $this->ticketCode = $ticketCode;

        return $this;
    }

    /**
     * @param TicketClassEnum|null $ticketClass
     *
     * @return self
     */
    public function setTicketClass(?TicketClassEnum $ticketClass): self
    {
        $this->ticketClass = $ticketClass;

        return $this;
    }

    /**
     * @param float|null $supplierRepayment
     *
     * @return self
     */
    public function setSupplierRepayment(?float $supplierRepayment): self
    {
        $this->supplierRepayment = $supplierRepayment;

        return $this;
    }

    /**
     * @param float|null $supplierFare
     *
     * @return self
     */
    public function setSupplierFare(?float $supplierFare): self
    {
        $this->supplierFare = $supplierFare;

        return $this;
    }

    /**
     * @param float|null $supplierDues
     *
     * @return self
     */
    public function setSupplierDues(?float $supplierDues): self
    {
        $this->supplierDues = $supplierDues;

        return $this;
    }

    /**
     * @param string|null $supplierCurrencyCode
     *
     * @return self
     */
    public function setSupplierCurrencyCode(?string $supplierCurrencyCode): self
    {
        $this->supplierCurrencyCode = $supplierCurrencyCode;

        return $this;
    }

    /**
     * @param string|null $seat
     *
     * @return self
     */
    public function setSeat(?string $seat): self
    {
        $this->seat = $seat;

        return $this;
    }

    /**
     * @param DateTime|null $returned
     *
     * @return self
     */
    public function setReturned(?DateTime $returned): self
    {
        $this->returned = $returned;

        return $this;
    }

    /**
     * @param float|null $repayment
     *
     * @return self
     */
    public function setRepayment(?float $repayment): self
    {
        $this->repayment = $repayment;

        return $this;
    }

    /**
     * @param string|null $raceUid
     *
     * @return self
     */
    public function setRaceUid(?string $raceUid): self
    {
        $this->raceUid = $raceUid;

        return $this;
    }

    /**
     * @param string|null $raceNum
     *
     * @return self
     */
    public function setRaceNum(?string $raceNum): self
    {
        $this->raceNum = $raceNum;

        return $this;
    }

    /**
     * @param string|null $raceName
     *
     * @return self
     */
    public function setRaceName(?string $raceName): self
    {
        $this->raceName = $raceName;

        return $this;
    }

    /**
     * @param int|null $raceClassId
     *
     * @return self
     */
    public function setRaceClassId(?int $raceClassId): self
    {
        $this->raceClassId = $raceClassId;

        return $this;
    }

    /**
     * @param string|null $platform
     *
     * @return self
     */
    public function setPlatform(?string $platform): self
    {
        $this->platform = $platform;

        return $this;
    }

    /**
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * @param string|null $middleName
     *
     * @return self
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string|null $hash
     *
     * @return self
     */
    public function setHash(?string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    /**
     * @param string|null $gender
     *
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param float|null $dues
     *
     * @return self
     */
    public function setDues(?float $dues): self
    {
        $this->dues = $dues;

        return $this;
    }

    /**
     * @param string|null $docType
     *
     * @return self
     */
    public function setDocType(?string $docType): self
    {
        $this->docType = $docType;

        return $this;
    }

    /**
     * @param string|null $docSeries
     *
     * @return self
     */
    public function setDocSeries(?string $docSeries): self
    {
        $this->docSeries = $docSeries;

        return $this;
    }

    /**
     * @param string|null $docNum
     *
     * @return self
     */
    public function setDocNum(?string $docNum): self
    {
        $this->docNum = $docNum;

        return $this;
    }

    /**
     * @param string|null $dispatchStation
     *
     * @return self
     */
    public function setDispatchStation(?string $dispatchStation): self
    {
        $this->dispatchStation = $dispatchStation;

        return $this;
    }

    /**
     * @param string|null $dispatchAddress
     *
     * @return self
     */
    public function setDispatchAddress(?string $dispatchAddress): self
    {
        $this->dispatchAddress = $dispatchAddress;

        return $this;
    }

    /**
     * @param string|null $citizenship
     *
     * @return self
     */
    public function setCitizenship(?string $citizenship): self
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * @param DateTime|null $birthday
     *
     * @return self
     */
    public function setBirthday(?DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @param string|null $barcode
     *
     * @return self
     */
    public function setBarcode(?string $barcode): self
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * @param string|null $arrivalAddress
     *
     * @return self
     */
    public function setArrivalAddress(?string $arrivalAddress): self
    {
        $this->arrivalAddress = $arrivalAddress;

        return $this;
    }

    /**
     * @param float|null $vat
     *
     * @return self
     */
    public function setVat(?float $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * @param string|null $arrivalStation
     *
     * @return self
     */
    public function setArrivalStation(?string $arrivalStation): self
    {
        $this->arrivalStation = $arrivalStation;

        return $this;
    }

    /**
     * @param BenefitModel|null $benefit
     *
     * @return self
     */
    public function setBenefit(?BenefitModel $benefit): self
    {
        $this->benefit = $benefit;

        return $this;
    }

    /**
     * @param string|null $docTypeCode
     *
     * @return self
     */
    public function setDocTypeCode(?string $docTypeCode): self
    {
        $this->docTypeCode = $docTypeCode;

        return $this;
    }

    /**
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string|null $seatCode
     *
     * @return self
     */
    public function setSeatCode(?string $seatCode): self
    {
        $this->seatCode = $seatCode;

        return $this;
    }

    /**
     * @param string|null $ticketTypeCode
     *
     * @return self
     */
    public function setTicketTypeCode(?string $ticketTypeCode): self
    {
        $this->ticketTypeCode = $ticketTypeCode;

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
            ->setId($response[self::ID_KEY] ?? null)
            ->setUid($response[self::UID_KEY] ?? null)
            ->setTicketCode($response[self::TICKET_CODE_KEY] ?? null)
            ->setTicketNum($response[self::TICKET_NUM_KEY] ?? null)
            ->setTicketSeries($response[self::TICKET_SERIES_KEY] ?? null)
            ->setTicketClass(TicketClassEnum::tryFrom($response[self::TICKET_CLASS_KEY] ?? ''))
            ->setTicketTypeCode($response[self::TICKET_TYPE_CODE_KEY] ?? null)
            ->setTicketType($response[self::TICKET_TYPE_KEY] ?? null)
            ->setRaceUid($response[self::RACE_UID_KEY] ?? null)
            ->setRaceNum($response[self::RACE_NUM_KEY] ?? null)
            ->setRaceName($response[self::RACE_NAME_KEY] ?? null)
            ->setRaceClassId($response[self::RACE_CLASS_ID_KEY] ?? null)
            ->setDispatchDate(
                isset($response[self::DISPATCH_DATE_KEY]) ? new DateTime($response[self::DISPATCH_DATE_KEY]) : null
            )
            ->setDispatchStation($response[self::DISPATCH_STATION_KEY] ?? null)
            ->setDispatchAddress($response[self::DISPATCH_ADDRESS_KEY] ?? null)
            ->setArrivalDate(
                isset($response[self::ARRIVAL_DATE_KEY]) ? new DateTime($response[self::ARRIVAL_DATE_KEY]) : null
            )
            ->setArrivalStation($response[self::ARRIVAL_STATION_KEY] ?? null)
            ->setArrivalAddress($response[self::ARRIVAL_ADDRESS_KEY] ?? null)
            ->setSeat($response[self::SEAT_KEY] ?? null)
            ->setSeatCode($response[self::SEAT_CODE_KEY] ?? null)
            ->setPlatform($response[self::PLATFORM_KEY] ?? null)
            ->setLastName($response[self::LAST_NAME_KEY] ?? null)
            ->setFirstName($response[self::FIRST_NAME_KEY] ?? null)
            ->setMiddleName($response[self::MIDDLE_NAME_KEY] ?? null)
            ->setDocTypeCode($response[self::DOC_TYPE_CODE_KEY] ?? null)
            ->setDocType($response[self::DOC_TYPE_KEY] ?? null)
            ->setDocSeries($response[self::DOC_SERIES_KEY] ?? null)
            ->setDocNum($response[self::DOC_NUM_KEY] ?? null)
            ->setCitizenship($response[self::CITIZENSHIP_KEY] ?? null)
            ->setGender($response[self::GENDER_KEY] ?? null)
            ->setBirthday(isset($response[self::BIRTHDAY_KEY]) ? new DateTime($response[self::BIRTHDAY_KEY]) : null)
            ->setPhone($response[self::PHONE_KEY] ?? null)
            ->setEmail($response[self::EMAIL_KEY] ?? null)
            ->setSupplierCurrencyCode($response[self::SUPPLIER_CURRENCY_CODE_KEY] ?? null)
            ->setSupplierFare($response[self::SUPPLIER_FARE_KEY] ?? null)
            ->setSupplierDues($response[self::SUPPLIER_DUES_KEY] ?? null)
            ->setSupplierPrice($response[self::SUPPLIER_PRICE_KEY] ?? null)
            ->setSupplierRepayment($response[self::SUPPLIER_REPAYMENT_KEY] ?? null)
            ->setCurrencyCode($response[self::CURRENCY_CODE_KEY] ?? null)
            ->setDues($response[self::DUES_KEY] ?? null)
            ->setPrice($response[self::PRICE_KEY] ?? null)
            ->setVat($response[self::VAT_KEY] ?? null)
            ->setRepayment($response[self::REPAYMENT_KEY] ?? null)
            ->setBusInfo($response[self::BUS_INFO_KEY] ?? null)
            ->setCarrier($response[self::CARRIER_KEY] ?? null)
            ->setCarrierInn($response[self::CARRIER_INN_KEY] ?? null)
            ->setCarrierPhone($response[self::CARRIER_PHONE_KEY] ?? null)
            ->setBarcode($response[self::BARCODE_KEY] ?? null)
            ->setStatus(TicketStatusEnum::tryFrom($response[self::STATUS_KEY] ?? ''))
            ->setReturned(isset($response[self::RETURNED_KEY]) ? new DateTime($response[self::RETURNED_KEY]) : null)
            ->setBenefit(
                isset($response[self::BENEFIT_KEY]) ? BenefitModel::fromArray($response[self::BENEFIT_KEY]) : null
            )
            ->setHash($response[self::HASH_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY                     => $this->getId(),
            self::UID_KEY                    => $this->getUid(),
            self::TICKET_CODE_KEY            => $this->getTicketCode(),
            self::TICKET_NUM_KEY             => $this->getTicketNum(),
            self::TICKET_SERIES_KEY          => $this->getTicketSeries(),
            self::TICKET_CLASS_KEY           => $this->getTicketClass()?->value,
            self::TICKET_TYPE_CODE_KEY       => $this->getTicketTypeCode(),
            self::TICKET_TYPE_KEY            => $this->getTicketType(),
            self::RACE_UID_KEY               => $this->getRaceUid(),
            self::RACE_NUM_KEY               => $this->getRaceNum(),
            self::RACE_NAME_KEY              => $this->getRaceName(),
            self::RACE_CLASS_ID_KEY          => $this->getRaceClassId(),
            self::DISPATCH_DATE_KEY          => $this->getDispatchDate()?->format(DateTimeInterface::ATOM),
            self::DISPATCH_STATION_KEY       => $this->getDispatchStation(),
            self::DISPATCH_ADDRESS_KEY       => $this->getDispatchAddress(),
            self::ARRIVAL_DATE_KEY           => $this->getArrivalDate()?->format(DateTimeInterface::ATOM),
            self::ARRIVAL_STATION_KEY        => $this->getArrivalStation(),
            self::ARRIVAL_ADDRESS_KEY        => $this->getArrivalAddress(),
            self::SEAT_KEY                   => $this->getSeat(),
            self::SEAT_CODE_KEY              => $this->getSeatCode(),
            self::PLATFORM_KEY               => $this->getPlatform(),
            self::LAST_NAME_KEY              => $this->getLastName(),
            self::FIRST_NAME_KEY             => $this->getFirstName(),
            self::MIDDLE_NAME_KEY            => $this->getMiddleName(),
            self::DOC_TYPE_CODE_KEY          => $this->getDocTypeCode(),
            self::DOC_TYPE_KEY               => $this->getDocType(),
            self::DOC_SERIES_KEY             => $this->getDocSeries(),
            self::DOC_NUM_KEY                => $this->getDocNum(),
            self::CITIZENSHIP_KEY            => $this->getCitizenship(),
            self::GENDER_KEY                 => $this->getGender(),
            self::BIRTHDAY_KEY               => $this->getBirthday()?->format(DateTimeInterface::ATOM),
            self::PHONE_KEY                  => $this->getPhone(),
            self::EMAIL_KEY                  => $this->getEmail(),
            self::SUPPLIER_CURRENCY_CODE_KEY => $this->getSupplierCurrencyCode(),
            self::SUPPLIER_FARE_KEY          => $this->getSupplierFare(),
            self::SUPPLIER_DUES_KEY          => $this->getSupplierDues(),
            self::SUPPLIER_PRICE_KEY         => $this->getSupplierPrice(),
            self::SUPPLIER_REPAYMENT_KEY     => $this->getSupplierRepayment(),
            self::CURRENCY_CODE_KEY          => $this->getCurrencyCode(),
            self::DUES_KEY                   => $this->getDues(),
            self::PRICE_KEY                  => $this->getPrice(),
            self::VAT_KEY                    => $this->getVat(),
            self::REPAYMENT_KEY              => $this->getRepayment(),
            self::BUS_INFO_KEY               => $this->getBusInfo(),
            self::CARRIER_KEY                => $this->getCarrier(),
            self::CARRIER_INN_KEY            => $this->getCarrierInn(),
            self::CARRIER_PHONE_KEY          => $this->getCarrierPhone(),
            self::BARCODE_KEY                => $this->getBarcode(),
            self::STATUS_KEY                 => $this->getStatus()?->value,
            self::RETURNED_KEY               =>
                $this->getReturned()?->format(DateTimeInterface::ATOM),
            self::BENEFIT_KEY                => $this->getBenefit()?->toArray(),
            self::HASH_KEY                   => $this->getHash(),

        ], function ($value) {
            return $value !== null;
        });
    }
}
