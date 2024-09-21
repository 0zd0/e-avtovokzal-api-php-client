<?php

namespace Onepix\EAvtovokzalApiClient\Model;

use InvalidArgumentException;

class ReturnModel extends AbstractModel
{
    public const RETURN_KEY = 'return';

    protected ?AbstractModel $return = null;

    /**
     * @var class-string $modelClass
     */
    protected string $modelClass;

    /**
     * @return string
     */
    public function getModelClass(): string
    {
        return $this->modelClass;
    }

    /**
     * @return AbstractModel|null
     */
    public function getReturn(): ?AbstractModel
    {
        return $this->return;
    }

    /**
     * @param AbstractModel|null $return
     *
     * @return self
     */
    public function setReturn(?AbstractModel $return): self
    {
        $this->return = $return;

        return $this;
    }

    /**
     * @param string $modelClass
     *
     * @return self
     */
    public function setModelClass(string $modelClass): self
    {
        $this->modelClass = $modelClass;

        return $this;
    }

    public static function fromArray(array $response): static
    {
        $model = new static();

        if (! empty($response[self::RETURN_KEY]) && $modelClass) {
            if (is_subclass_of($modelClass, AbstractModel::class)) {
                $model->setReturn($modelClass::fromArray($response[self::RETURN_KEY]));
            } else {
                throw new InvalidArgumentException("Invalid model class provided.");
            }
        }

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return [
            self::RETURN_KEY => $this->return?->toArray(),
        ];
    }
}
