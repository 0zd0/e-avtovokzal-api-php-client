<?php

namespace Onepix\EAvtovokzalApiClient\Model\Order;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;
use Onepix\EAvtovokzalApiClient\Model\SaleModel;

class BookOrderParametersModel extends AbstractModel
{
    public const UID_KEY   = 'uid';
    public const SALES_KEY = 'sales';

    protected ?string $uid = null;

    /**
     * @var SaleModel[]|null
     */
    protected ?array $sales = null;

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
    }

    /**
     * @return array|null
     */
    public function getSales(): ?array
    {
        return $this->sales;
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
     * @param array|null $sales
     *
     * @return self
     */
    public function setSales(?array $sales): self
    {
        $this->sales = $sales;

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
            ->setSales(
                $response[self::SALES_KEY]
                    ? array_map(fn($item) => SaleModel::fromArray($item), $response[self::SALES_KEY])
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
            self::UID_KEY   => $this->getUid(),
            self::SALES_KEY =>
                $this->getSales() ? array_map(fn($ticket) => $ticket->toArray(), $this->getSales()) : null,
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
