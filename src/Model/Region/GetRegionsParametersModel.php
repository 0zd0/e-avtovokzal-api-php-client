<?php

namespace Onepix\EAvtovokzalApiClient\Model\Region;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class GetRegionsParametersModel extends AbstractModel
{
    public const COUNTRY_ID_KEY = 'countryId';

    protected int $countryId;

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->countryId;
    }

    /**
     * @param int $countryId
     *
     * @return self
     */
    public function setCountryId(int $countryId): self
    {
        $this->countryId = $countryId;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model->setCountryId($response[self::COUNTRY_ID_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::COUNTRY_ID_KEY => $this->getCountryId(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
