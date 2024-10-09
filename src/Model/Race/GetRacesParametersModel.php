<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use DateTime;
use DateTimeInterface;
use Exception;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\RequestModelTrait;

class GetRacesParametersModel extends AbstractModel
{
    use RequestModelTrait;

    public const DISPATCH_POINT_ID_KEY = 'dispatchPointId';
    public const ARRIVAL_POINT_ID_KEY  = 'arrivalPointId';
    public const DATE_KEY              = 'date';

    protected int $dispatchPointId;
    protected int $arrivalPointId;
    protected ?DateTime $date = null;

    public function __construct()
    {
        $this->mandatoryNullFieldsInRequest = [
            self::DATE_KEY
        ];
    }

    /**
     * @return int
     */
    public function getArrivalPointId(): int
    {
        return $this->arrivalPointId;
    }

    /**
     * @return DateTime|null
     */
    public function getDate(): ?DateTime
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getDispatchPointId(): int
    {
        return $this->dispatchPointId;
    }

    /**
     * @param int $arrivalPointId
     *
     * @return self
     */
    public function setArrivalPointId(int $arrivalPointId): self
    {
        $this->arrivalPointId = $arrivalPointId;

        return $this;
    }

    /**
     * @param DateTime|null $date
     *
     * @return self
     */
    public function setDate(?DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    /**
     * @param int $dispatchPointId
     *
     * @return self
     */
    public function setDispatchPointId(int $dispatchPointId): self
    {
        $this->dispatchPointId = $dispatchPointId;

        return $this;
    }

    /**
     * @throws Exception
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setDispatchPointId($response[self::DISPATCH_POINT_ID_KEY])
            ->setArrivalPointId($response[self::ARRIVAL_POINT_ID_KEY]);

        if (isset($response[self::DATE_KEY])) {
            $model->setDate(new DateTime($response[self::DATE_KEY]));
        }

        return $model;
    }

    public function toArray(): array
    {
        return array_filter([
            self::DISPATCH_POINT_ID_KEY => $this->getDispatchPointId(),
            self::ARRIVAL_POINT_ID_KEY  => $this->getArrivalPointId(),
            self::DATE_KEY              => $this->getDate()?->format(DateTimeInterface::ATOM),
        ], function ($key, $value) {
            return in_array($key, $this->mandatoryNullFieldsInRequest, true) || $value !== null;
        }, ARRAY_FILTER_USE_BOTH);
    }
}
