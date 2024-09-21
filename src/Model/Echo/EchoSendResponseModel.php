<?php

namespace Onepix\EAvtovokzalApiClient\Model\Echo;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class EchoSendResponseModel extends AbstractModel
{
    public const RETURN_KEY = 'return';

    protected string $return;

    /**
     * @return string
     */
    public function getReturn(): string
    {
        return $this->return;
    }

    /**
     * @param string $return
     *
     * @return self
     */
    public function setReturn(string $return): self
    {
        $this->return = $return;

        return $this;
    }
    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setReturn($response[self::RETURN_KEY]);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            self::RETURN_KEY => $this->getReturn(),
        ];
    }
}
