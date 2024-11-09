<?php

namespace Onepix\EAvtovokzalApiClient\Model;

abstract class AbstractReturnModel extends AbstractModel
{
    public const RETURN_KEY = 'return';

    /**
     * Model class in return
     */
    public const RETURN_MODEL = '';

    public const ARRAY_MODELS = true;

    /**
     * Single entity or null
     *
     * @var AbstractModel|null
     */
    protected ?AbstractModel $singleReturn = null;

    /**
     * List of entities or null
     *
     * @var AbstractModel[]|null
     */
    protected ?array $multipleReturns = null;

    /**
     * @return array|null
     */
    public function getMultipleReturns(): ?array
    {
        return $this->multipleReturns;
    }

    /**
     * @return AbstractModel|null
     */
    public function getSingleReturn(): ?AbstractModel
    {
        return $this->singleReturn;
    }

    /**
     * @param array $return
     *
     * @return AbstractModel
     */
    public function setReturn(array $return): AbstractModel
    {
        /**
         * @var AbstractModel $returnModel
         */
        $returnModel = static::RETURN_MODEL;

        if (static::ARRAY_MODELS) {
            $this->multipleReturns = array_map(
                function ($item) use ($returnModel) {
                    return is_array($item) ? $returnModel::fromArray($item) : $item;
                },
                $return
            );
        } else {
            $this->singleReturn = $returnModel::fromArray($return);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        if (isset($response[self::RETURN_KEY]) && is_array($response[self::RETURN_KEY])) {
            $model->setReturn($response[self::RETURN_KEY]);
        }

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        $return = ! static::ARRAY_MODELS
            ? $this->getSingleReturn()?->toArray()
            : array_map(fn($item) => $item->toArray(), $this->getMultipleReturns() ?? []);

        if (! empty($return)) {
            return [
                self::RETURN_KEY => $return,
            ];
        }

        return [];
    }
}
