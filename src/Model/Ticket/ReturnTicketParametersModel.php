<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\RequestModelTrait;

class ReturnTicketParametersModel extends AbstractModel
{
    use RequestModelTrait;

    public const TICKET_ID_KEY = 'ticketId';

    protected int|string $ticketId;

    /**
     * @return int|string
     */
    public function getTicketId(): int|string
    {
        return $this->ticketId;
    }

    /**
     * @param int|string $ticketId
     *
     * @return self
     */
    public function setTicketId(int|string $ticketId): self
    {
        $this->ticketId = $ticketId;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model->setTicketId($response[self::TICKET_ID_KEY]);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            self::TICKET_ID_KEY => $this->getTicketId()
        ];
    }
}
