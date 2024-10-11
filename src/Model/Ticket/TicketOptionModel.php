<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class TicketOptionModel extends AbstractModel
{
    public const DUE_KEY         = 'due';
    public const FARE_KEY        = 'fare';
    public const TICKET_CODE_KEY = 'ticketCode';
    public const TICKET_ID_KEY   = 'ticketId';

    protected ?float $due = null;
    protected ?float $fare = null;
    protected ?string $ticketCode = null;
    protected ?int $ticketId = null;

    /**
     * @return int|null
     */
    public function getTicketId(): ?int
    {
        return $this->ticketId;
    }

    /**
     * @return string|null
     */
    public function getTicketCode(): ?string
    {
        return $this->ticketCode;
    }

    /**
     * @return float|null
     */
    public function getDue(): ?float
    {
        return $this->due;
    }

    /**
     * @return float|null
     */
    public function getFare(): ?float
    {
        return $this->fare;
    }

    /**
     * @param int|null $ticketId
     *
     * @return self
     */
    public function setTicketId(?int $ticketId): self
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * @param string|null $ticketCode
     *
     * @return self
     */
    public function setTicketCode(?string $ticketCode): self
    {
        $this->ticketCode = $ticketCode;

        return $this;
    }

    /**
     * @param float|null $due
     *
     * @return self
     */
    public function setDue(?float $due): self
    {
        $this->due = $due;

        return $this;
    }

    /**
     * @param float|null $fare
     *
     * @return self
     */
    public function setFare(?float $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setDue($response[self::DUE_KEY] ?? null)
            ->setFare($response[self::FARE_KEY] ?? null)
            ->setTicketCode($response[self::TICKET_CODE_KEY] ?? null)
            ->setTicketId($response[self::TICKET_ID_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::DUE_KEY => $this->getDue(),
            self::FARE_KEY => $this->getFare(),
            self::TICKET_CODE_KEY => $this->getTicketCode(),
            self::TICKET_ID_KEY => $this->getTicketId(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
