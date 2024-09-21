<?php

namespace Onepix\EAvtovokzalApiClient\Model;

class SeatModel extends AbstractModel
{
    public const CODE_KEY = 'code';
    public const NAME_KEY = 'name';
    public const TYPE_KEY = 'type';

    protected ?string $code = null;
    protected ?string $name = null;
    protected ?string $type = null;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
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
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

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
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setCode($response[self::CODE_KEY ?? null])
            ->setName($response[self::NAME_KEY ?? null])
            ->setType($response[self::TYPE_KEY ?? null]);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::CODE_KEY => $this->getCode(),
            self::NAME_KEY => $this->getName(),
            self::TYPE_KEY => $this->getType(),
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
