<?php

namespace Onepix\EAvtovokzalApiClient\Model\Race;

use Onepix\EAvtovokzalApiClient\Enum\RaceClassNameEnum;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class RaceClassModel extends AbstractModel
{
    public const ID_KEY   = 'id';
    public const NAME_KEY = 'name';

    protected int $id;
    protected ?RaceClassNameEnum $name = null;

    /**
     * @return RaceClassNameEnum|null
     */
    public function getName(): ?RaceClassNameEnum
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param RaceClassNameEnum|null $name
     *
     * @return self
     */
    public function setName(?RaceClassNameEnum $name): self
    {
        $this->name = $name;

        return $this;
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
     * @inheritDoc
     */
    public static function fromArray(array $response, ?string $modelClass): static
    {
        $model = new static();

        $model
            ->setId($response[self::ID_KEY]);

        if ($response[self::NAME_KEY]) {
            $model->setName(RaceClassNameEnum::fromId($response[self::ID_KEY]));
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
