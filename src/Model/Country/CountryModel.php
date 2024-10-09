<?php

namespace Onepix\EAvtovokzalApiClient\Model\Country;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class CountryModel extends AbstractModel
{
    public const ID_KEY        = 'id';
    public const NAME_KEY      = 'name';
    public const FULL_NAME_KEY = 'fullName';
    public const CODE_KEY      = 'code';

    protected ?int $id = null;
    protected ?string $name = null;
    protected ?string $fullName = null;
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
    public function getFullName(): ?string
    {
        return $this->fullName;
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
     * @param string|null $fullName
     *
     * @return self
     */
    public function setFullName(?string $fullName): self
    {
        $this->fullName = $fullName;

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
            ->setFullName($response[self::FULL_NAME_KEY] ?? null)
            ->setCode($response[self::CODE_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY        => $this->getId(),
            self::NAME_KEY      => $this->getName(),
            self::FULL_NAME_KEY => $this->getFullName(),
            self::CODE_KEY      => $this->getCode(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
