<?php

namespace Onepix\EAvtovokzalApiClient\Model;

class CompanyModel extends AbstractModel
{
    public const ID_KEY            = 'id';
    public const FULL_NAME_KEY     = 'fullName';
    public const INN_KEY           = 'inn';
    public const MARKUP_KEY        = 'markup';
    public const EXTRA_KEY         = 'extra';
    public const CURRENCY_CODE_KEY = 'currencyCode';

    protected ?int $id = null;
    protected ?string $fullName = null;
    protected ?string $inn = null;
    protected ?float $markup = null;
    protected ?float $extra = null;
    protected ?string $currencyCode = null;

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
     * @return float|null
     */
    public function getExtra(): ?float
    {
        return $this->extra;
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
    public function getInn(): ?string
    {
        return $this->inn;
    }

    /**
     * @return float|null
     */
    public function getMarkup(): ?float
    {
        return $this->markup;
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
     * @param float|null $extra
     *
     * @return self
     */
    public function setExtra(?float $extra): self
    {
        $this->extra = $extra;

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
     * @param string|null $inn
     *
     * @return self
     */
    public function setInn(?string $inn): self
    {
        $this->inn = $inn;

        return $this;
    }

    /**
     * @param float|null $markup
     *
     * @return self
     */
    public function setMarkup(?float $markup): self
    {
        $this->markup = $markup;

        return $this;
    }

    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setId($response[self::ID_KEY] ?? null)
            ->setFullName($response[self::FULL_NAME_KEY] ?? null)
            ->setInn($response[self::INN_KEY] ?? null)
            ->setMarkup($response[self::MARKUP_KEY] ?? null)
            ->setExtra($response[self::EXTRA_KEY] ?? null)
            ->setCurrencyCode($response[self::CURRENCY_CODE_KEY] ?? null);

        return $model;
    }

    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY            => $this->getId(),
            self::FULL_NAME_KEY     => $this->getFullName(),
            self::INN_KEY           => $this->getInn(),
            self::MARKUP_KEY        => $this->getMarkup(),
            self::EXTRA_KEY         => $this->getExtra(),
            self::CURRENCY_CODE_KEY => $this->getCurrencyCode(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
