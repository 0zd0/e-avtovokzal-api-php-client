<?php

namespace Onepix\EAvtovokzalApiClient\Model\Ticket;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\RequestModelTrait;

class ReturnTicketParametersModel extends AbstractModel
{
    use RequestModelTrait;

    public const TICKET_ID_KEY = 'ticketId';

    protected int $ticketId;

    /**
     * @return int
     */
    public function getTicketId(): int
    {
        return $this->ticketId;
    }

    /**
     * @param int $ticketId
     *
     * @return self
     */
    public function setTicketId(int $ticketId): self
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
