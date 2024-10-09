<?php

namespace Onepix\EAvtovokzalApiClient\Model\Region;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class RegionModel extends AbstractModel
{
    public const ID_KEY   = 'id';
    public const NAME_KEY = 'name';
    public const TYPE_KEY = 'type';
    public const CODE_KEY = 'code';

    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $type = null;
    protected ?string $code = null;

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
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
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
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setId($response[self::ID_KEY] ?? null)
            ->setName($response[self::NAME_KEY] ?? null)
            ->setType($response[self::TYPE_KEY] ?? null)
            ->setCode($response[self::CODE_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY   => $this->getId(),
            self::NAME_KEY => $this->getName(),
            self::TYPE_KEY => $this->getType(),
            self::CODE_KEY => $this->getCode(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
