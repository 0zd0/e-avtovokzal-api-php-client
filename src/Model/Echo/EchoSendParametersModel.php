<?php

namespace Onepix\EAvtovokzalApiClient\Model\Echo;

use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class EchoSendParametersModel extends AbstractModel
{
    public const MESSAGE_KEY = 'message';

    protected string $message;

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setMessage($response[self::MESSAGE_KEY]);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            self::MESSAGE_KEY => $this->getMessage(),
        ];
    }
}
