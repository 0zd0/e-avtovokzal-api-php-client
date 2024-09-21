<?php

namespace Onepix\EAvtovokzalApiClient\Model;

use DateTime;
use Exception;
use Onepix\EAvtovokzalApiClient\Enum\StatusEnum;

class OrderModel extends AbstractModel
{
    public const UID_KEY            = 'uid';
    public const ID_KEY             = 'id';
    public const USER_KEY           = 'user';
    public const AGENT_KEY          = 'agent';
    public const RESERVE_CODE_KEY   = 'reserveCode';
    public const TOTAL_KEY          = 'total';
    public const PAYMENT_METHOD_KEY = 'paymentMethod';
    public const REPAYMENT_KEY      = 'repayment';
    public const STATUS_KEY         = 'status';
    public const CREATED_KEY        = 'created';
    public const EXPIRED_KEY        = 'expired';
    public const FINISHED_KEY       = 'finished';
    public const TICKETS_KEY        = 'tickets';

    protected ?string $uid = null;
    protected ?int $id = null;
    protected ?UserModel $user = null;
    protected ?CompanyModel $agent = null;
    protected ?string $reserveCode = null;
    protected ?float $total = null;
    protected ?string $paymentMethod = null;
    protected ?float $repayment = null;
    protected ?StatusEnum $status = null;
    protected ?DateTime $created = null;
    protected ?DateTime $expired = null;
    protected ?DateTime $finished = null;

    /**
     * @var TicketModel[]|null $tickets
     */
    protected ?array $tickets = null;

    /**
     * @return float|null
     */
    public function getRepayment(): ?float
    {
        return $this->repayment;
    }

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return StatusEnum|null
     */
    public function getStatus(): ?StatusEnum
    {
        return $this->status;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return DateTime|null
     */
    public function getCreated(): ?DateTime
    {
        return $this->created;
    }

    /**
     * @return CompanyModel|null
     */
    public function getAgent(): ?CompanyModel
    {
        return $this->agent;
    }

    /**
     * @return DateTime|null
     */
    public function getExpired(): ?DateTime
    {
        return $this->expired;
    }

    /**
     * @return DateTime|null
     */
    public function getFinished(): ?DateTime
    {
        return $this->finished;
    }

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @return string|null
     */
    public function getReserveCode(): ?string
    {
        return $this->reserveCode;
    }

    /**
     * @return array|null
     */
    public function getTickets(): ?array
    {
        return $this->tickets;
    }

    /**
     * @return float|null
     */
    public function getTotal(): ?float
    {
        return $this->total;
    }

    /**
     * @return UserModel|null
     */
    public function getUser(): ?UserModel
    {
        return $this->user;
    }

    /**
     * @param float|null $repayment
     *
     * @return self
     */
    public function setRepayment(?float $repayment): self
    {
        $this->repayment = $repayment;

        return $this;
    }

    /**
     * @param string|null $uid
     *
     * @return self
     */
    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }

    /**
     * @param StatusEnum|null $status
     *
     * @return self
     */
    public function setStatus(?StatusEnum $status): self
    {
        $this->status = $status;

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
     * @param DateTime|null $created
     *
     * @return self
     */
    public function setCreated(?DateTime $created): self
    {
        $this->created = $created;

        return $this;
    }

    /**
     * @param CompanyModel|null $agent
     *
     * @return self
     */
    public function setAgent(?CompanyModel $agent): self
    {
        $this->agent = $agent;

        return $this;
    }

    /**
     * @param DateTime|null $expired
     *
     * @return self
     */
    public function setExpired(?DateTime $expired): self
    {
        $this->expired = $expired;

        return $this;
    }

    /**
     * @param DateTime|null $finished
     *
     * @return self
     */
    public function setFinished(?DateTime $finished): self
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * @param string|null $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * @param string|null $reserveCode
     *
     * @return self
     */
    public function setReserveCode(?string $reserveCode): self
    {
        $this->reserveCode = $reserveCode;

        return $this;
    }

    /**
     * @param array|null $tickets
     *
     * @return self
     */
    public function setTickets(?array $tickets): self
    {
        $this->tickets = $tickets;

        return $this;
    }

    /**
     * @param float|null $total
     *
     * @return self
     */
    public function setTotal(?float $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param UserModel|null $user
     *
     * @return self
     */
    public function setUser(?UserModel $user): self
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @inheritDoc
     * @throws Exception
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setUid($response[self::UID_KEY])
            ->setId($response[self::ID_KEY])
            ->setUser($response[self::USER_KEY] ? UserModel::fromArray($response[self::USER_KEY]) : null)
            ->setAgent($response[self::AGENT_KEY] ? CompanyModel::fromArray($response[self::AGENT_KEY]) : null)
            ->setReserveCode($response[self::RESERVE_CODE_KEY])
            ->setTotal($response[self::TOTAL_KEY])
            ->setPaymentMethod($response[self::PAYMENT_METHOD_KEY])
            ->setRepayment($response[self::REPAYMENT_KEY])
            ->setStatus($response[self::STATUS_KEY])
            ->setCreated($response[self::CREATED_KEY] ? new DateTime($response[self::CREATED_KEY]) : null)
            ->setExpired($response[self::EXPIRED_KEY] ? new DateTime($response[self::EXPIRED_KEY]) : null)
            ->setFinished($response[self::FINISHED_KEY] ? new DateTime($response[self::FINISHED_KEY]) : null);

        if (isset($response[self::TICKETS_KEY])) {
            $tickets = array_map([TicketModel::class, 'fromArray'], $response[self::TICKETS_KEY]);
            $model->setTickets($tickets);
        }

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::UID_KEY            => $this->getUid(),
            self::ID_KEY             => $this->getId(),
            self::USER_KEY           => $this->getUser()?->toArray(),
            self::AGENT_KEY          => $this->getAgent()?->toArray(),
            self::RESERVE_CODE_KEY   => $this->getReserveCode(),
            self::TOTAL_KEY          => $this->getTotal(),
            self::PAYMENT_METHOD_KEY => $this->getPaymentMethod(),
            self::REPAYMENT_KEY      => $this->getRepayment(),
            self::STATUS_KEY         => $this->getStatus(),
            self::CREATED_KEY        => $this->getCreated()?->format(\DateTimeInterface::ATOM),
            self::EXPIRED_KEY        => $this->getExpired()?->format(\DateTimeInterface::ATOM),
            self::FINISHED_KEY       => $this->getFinished()?->format(\DateTimeInterface::ATOM),
            self::TICKETS_KEY        => $this->getTickets() ? array_map(fn($ticket) => $ticket->toArray(), $this->getTickets()) : null
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
