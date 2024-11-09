<?php

namespace Onepix\EAvtovokzalApiClient\Model\Document;

use Exception;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class GetDocTypesParametersModel extends AbstractModel
{
    public const UID_KEY   = 'uid';
    protected ?string $uid = null;

    /**
     * @return string|null
     */
    public function getUid(): ?string
    {
        return $this->uid;
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
     * @inheritDoc
     * @throws Exception
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setUid($response[self::UID_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::UID_KEY   => $this->getUid(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
