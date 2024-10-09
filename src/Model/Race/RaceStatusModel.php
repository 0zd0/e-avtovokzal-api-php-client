<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Enum\RaceStatusNameEnum;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class RaceStatusModel extends AbstractModel
{
    public const ID_KEY   = 'id';
    public const NAME_KEY = 'name';

    protected int $id;
    protected ?RaceStatusNameEnum $name = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return RaceStatusNameEnum|null
     */
    public function getName(): ?RaceStatusNameEnum
    {
        return $this->name;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param RaceStatusNameEnum|null $name
     *
     * @return self
     */
    public function setName(?RaceStatusNameEnum $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setId($response[self::ID_KEY]);

        if (isset($response[self::NAME_KEY])) {
            $model->setName(RaceStatusNameEnum::fromId($response[self::ID_KEY]));
        }

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY   => $this->getId(),
            self::NAME_KEY => $this->getName()?->value,
        ], function ($value) {
            return $value !== null;
        });
    }
}
