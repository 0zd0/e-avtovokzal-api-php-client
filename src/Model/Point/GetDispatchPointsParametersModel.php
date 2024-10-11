<?php

namespace Onepix\EAvtovokzalApiClient\Model\Point;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class GetDispatchPointsParametersModel extends AbstractModel
{
    public const REGION_ID_KEY = 'regionId';

    protected ?int $regionId = null;

    /**
     * @return int|null
     */
    public function getRegionId(): ?int
    {
        return $this->regionId;
    }

    /**
     * @param int|null $regionId
     *
     * @return self
     */
    public function setRegionId(?int $regionId): self
    {
        $this->regionId = $regionId;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model->setRegionId($response[self::REGION_ID_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::REGION_ID_KEY => $this->getRegionId(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
