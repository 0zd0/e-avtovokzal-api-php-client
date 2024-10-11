<?php

namespace Onepix\EAvtovokzalApiClient\Model\Point;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class GetArrivalPointsParametersModel extends AbstractModel
{
    public const DISPATCH_POINT_ID_KEY = 'dispatchPointId';
    public const PATTERN_KEY           = 'pattern';

    protected ?int $dispatchPointId = null;
    protected ?string $pattern = null;

    /**
     * @return int|null
     */
    public function getDispatchPointId(): ?int
    {
        return $this->dispatchPointId;
    }

    /**
     * @return string|null
     */
    public function getPattern(): ?string
    {
        return $this->pattern;
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
     * @param string|null $pattern
     *
     * @return self
     */
    public function setPattern(?string $pattern): self
    {
        $this->pattern = $pattern;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setDispatchPointId($response[self::DISPATCH_POINT_ID_KEY] ?? null)
            ->setPattern($response[self::PATTERN_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::DISPATCH_POINT_ID_KEY => $this->getDispatchPointId(),
            self::PATTERN_KEY           => $this->getPattern(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
