<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Enum\RaceTypeNameEnum;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class RaceTypeModel extends AbstractModel
{
    public const ID_KEY   = 'id';
    public const NAME_KEY = 'name';

    protected int $id;
    protected ?RaceTypeNameEnum $name = null;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return RaceTypeNameEnum|null
     */
    public function getName(): ?RaceTypeNameEnum
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
     * @param RaceTypeNameEnum|null $name
     *
     * @return self
     */
    public function setName(?RaceTypeNameEnum $name): self
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

        if ($response[self::NAME_KEY]) {
            $model->setName(RaceTypeNameEnum::fromId($response[self::ID_KEY]));
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
            self::NAME_KEY => $this->getName()->value,
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
