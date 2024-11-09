<?php

namespace Onepix\EAvtovokzalApiClient\Model\Document;

use Onepix\EAvtovokzalApiClient\Enum\DocumentTypeEnum;
use Onepix\EAvtovokzalApiClient\Model\AbstractModel;

class DocumentTypeModel extends AbstractModel
{
    public const BENEFIT_CODE_KEY = 'benefitCode';
    public const CODE_KEY = 'code';
    public const NAME_KEY = 'name';
    public const TYPE_KEY = 'type';

    protected ?string $benefitCode = null;
    protected ?string $code = null;
    protected ?string $name = null;
    protected ?DocumentTypeEnum $type = null;

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return DocumentTypeEnum|null
     */
    public function getType(): ?DocumentTypeEnum
    {
        return $this->type;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @return string|null
     */
    public function getBenefitCode(): ?string
    {
        return $this->benefitCode;
    }

    /**
     * @param string|null $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param DocumentTypeEnum|null $type
     *
     * @return self
     */
    public function setType(?DocumentTypeEnum $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @param string|null $benefitCode
     *
     * @return self
     */
    public function setBenefitCode(?string $benefitCode): self
    {
        $this->benefitCode = $benefitCode;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setBenefitCode($response[self::BENEFIT_CODE_KEY] ?? null)
            ->setCode($response[self::CODE_KEY] ?? null)
            ->setName($response[self::NAME_KEY] ?? null)
            ->setType(DocumentTypeEnum::tryFrom($response[self::TYPE_KEY] ?? ''));

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::BENEFIT_CODE_KEY   => $this->getBenefitCode(),
            self::CODE_KEY   => $this->getCode(),
            self::NAME_KEY   => $this->getName(),
            self::TYPE_KEY   => $this->getType()?->value,
        ], function ($value) {
            return $value !== null;
        });
    }
}
