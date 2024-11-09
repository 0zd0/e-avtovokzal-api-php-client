<?php

namespace Onepix\EAvtovokzalApiClient\Model\Echo;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class EchoSendResponseModel extends AbstractModel
{
    public const RETURN_KEY = 'return';

    protected ?string $return = null;

    /**
     * @return string|null
     */
    public function getReturn(): ?string
    {
        return $this->return;
    }

    /**
     * @param string|null $return
     *
     * @return self
     */
    public function setReturn(?string $return): self
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
            ->setReturn($response[self::RETURN_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        if (! is_null($this->getReturn())) {
            return [
                self::RETURN_KEY => $this->getReturn(),
            ];
        }

        return [];
    }
}
