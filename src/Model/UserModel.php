<?php

namespace Onepix\EAvtovokzalApiClient\Model;

class UserModel extends AbstractModel
{
    public const ID_KEY       = 'id';
    public const USERNAME_KEY = 'username';

    protected ?int $id = null;
    protected ?string $username = null;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string|null $username
     *
     * @return self
     */
    public function setUsername(?string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setId($response[self::ID_KEY] ?? null)
            ->setUsername($response[self::USERNAME_KEY] ?? null);

        return $model;
    }

    public function toArray(): array
    {
        return array_filter([
            self::ID_KEY => $this->getId(),
            self::USERNAME_KEY => $this->getUsername(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
