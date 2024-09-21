<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class TicketTypeModel extends AbstractModel
{
    public const CODE_KEY         = 'code';
    public const NAME_KEY         = 'name';
    public const PRICE_KEY        = 'price';
    public const TICKET_CLASS_KEY = 'ticketClass';
    public const BENEFIT_CODE_KEY = 'benefitCode';

    protected ?string $code = null;
    protected ?string $name = null;
    protected ?float $price = null;
    protected ?string $ticketClass = null;
    protected ?string $benefitCode = null;

    /**
     * @return string|null
     */
    public function getTicketClass(): ?string
    {
        return $this->ticketClass;
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
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
    public function getBenefitCode(): ?string
    {
        return $this->benefitCode;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string|null $ticketClass
     *
     * @return self
     */
    public function setTicketClass(?string $ticketClass): self
    {
        $this->ticketClass = $ticketClass;

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
     * @param string|null $benefitCode
     *
     * @return self
     */
    public function setBenefitCode(?string $benefitCode): self
    {
        $this->benefitCode = $benefitCode;

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
            ->setCode($response[self::CODE_KEY] ?? null)
            ->setName($response[self::NAME_KEY] ?? null)
            ->setPrice($response[self::PRICE_KEY] ?? null)
            ->setTicketClass($response[self::TICKET_CLASS_KEY] ?? null)
            ->setBenefitCode($response[self::BENEFIT_CODE_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::CODE_KEY         => $this->getCode(),
            self::NAME_KEY         => $this->getName(),
            self::PRICE_KEY        => $this->getPrice(),
            self::TICKET_CLASS_KEY => $this->getTicketClass(),
            self::BENEFIT_CODE_KEY => $this->getBenefitCode(),
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
