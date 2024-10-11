<?php

namespace Onepix\EAvtovokzalApiClient\Model\Order;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\Ticket\TicketOptionModel;

class ConfirmOrderParametersModel extends AbstractModel
{
    public const ORDER_ID_KEY       = 'orderId';
    public const PAYMENT_METHOD_KEY = 'paymentMethod';
    public const OPTIONS_KEY        = 'options';

    protected int $orderId;
    protected ?string $paymentMethod = null;

    /**
     * @var TicketOptionModel[]|null $options
     */
    protected ?array $options = null;

    /**
     * @return string|null
     */
    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @return array|null
     */
    public function getOptions(): ?array
    {
        return $this->options;
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
     * @param int $orderId
     *
     * @return self
     */
    public function setOrderId(int $orderId): self
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * @param array|null $options
     *
     * @return self
     */
    public function setOptions(?array $options): self
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setOrderId($response[self::ORDER_ID_KEY])
            ->setPaymentMethod($response[self::PAYMENT_METHOD_KEY] ?? null)
            ->setOptions(
                isset($response[self::OPTIONS_KEY])
                    ? array_map([TicketOptionModel::class, 'fromArray'], $response[self::OPTIONS_KEY])
                    : null
            );

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ORDER_ID_KEY       => $this->getOrderId(),
            self::PAYMENT_METHOD_KEY => $this->getPaymentMethod(),
            self::OPTIONS_KEY        =>
                $this->getOptions() ? array_map(fn($ticket) => $ticket->toArray(), $this->getOptions()) : null,
        ], function ($value) {
            return $value !== null;
        });
    }
}
