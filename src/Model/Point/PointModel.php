<?php

namespace Onepix\EAvtovokzalApiClient\Model\Point;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class PointModel extends AbstractModel
{
    public const ADDRESS_KEY   = 'address';
    public const DETAILS_KEY   = 'details';
    public const ID_KEY        = 'id';
    public const LATITUDE_KEY  = 'latitude';
    public const LONGITUDE_KEY = 'longitude';
    public const NAME_KEY      = 'name';
    public const OKATO_KEY     = 'okato';
    public const PLACE_KEY     = 'place';
    public const REGION_KEY    = 'region';

    protected ?string $address = null;
    protected ?string $details = null;
    protected ?int $id = null;
    protected ?string $latitude = null;
    protected ?string $longitude = null;
    protected ?string $name = null;
    protected ?string $okato = null;
    protected ?bool $place = null;
    protected ?string $region = null;

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

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
    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    /**
     * @return string|null
     */
    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getOkato(): ?string
    {
        return $this->okato;
    }

    /**
     * @return bool|null
     */
    public function getPlace(): ?bool
    {
        return $this->place;
    }

    /**
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string|null $details
     *
     * @return self
     */
    public function setDetails(?string $details): self
    {
        $this->details = $details;

        return $this;
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
     * @param string|null $latitude
     *
     * @return self
     */
    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @param string|null $longitude
     *
     * @return self
     */
    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
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
     * @param string|null $okato
     *
     * @return self
     */
    public function setOkato(?string $okato): self
    {
        $this->okato = $okato;

        return $this;
    }

    /**
     * @param bool|null $place
     *
     * @return self
     */
    public function setPlace(?bool $place): self
    {
        $this->place = $place;

        return $this;
    }

    /**
     * @param string|null $region
     *
     * @return self
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setAddress($response[self::ADDRESS_KEY] ?? null)
            ->setDetails($response[self::DETAILS_KEY] ?? null)
            ->setId($response[self::ID_KEY] ?? null)
            ->setLatitude($response[self::LATITUDE_KEY] ?? null)
            ->setLongitude($response[self::LONGITUDE_KEY] ?? null)
            ->setName($response[self::NAME_KEY] ?? null)
            ->setOkato($response[self::OKATO_KEY] ?? null)
            ->setPlace($response[self::PLACE_KEY] ?? null)
            ->setRegion($response[self::REGION_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ADDRESS_KEY   => $this->getAddress(),
            self::DETAILS_KEY   => $this->getDetails(),
            self::ID_KEY        => $this->getId(),
            self::LATITUDE_KEY  => $this->getLatitude(),
            self::LONGITUDE_KEY => $this->getLongitude(),
            self::NAME_KEY      => $this->getName(),
            self::OKATO_KEY     => $this->getOkato(),
            self::PLACE_KEY     => $this->getPlace(),
            self::REGION_KEY    => $this->getRegion(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
