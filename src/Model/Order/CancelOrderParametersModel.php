<?php

namespace Onepix\EAvtovokzalApiClient\Model\Order;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class CancelOrderParametersModel extends AbstractModel
{
    public const ORDER_ID_KEY = 'orderId';
    
    protected int $orderId;
    
    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
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
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();
        
        $model
            ->setOrderId($response[self::ORDER_ID_KEY]);
        
        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            self::ORDER_ID_KEY => $this->getOrderId(),
        ];
    }
}
