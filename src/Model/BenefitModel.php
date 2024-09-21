<?php

namespace Onepix\EAvtovokzalApiClient\Model;

class BenefitModel extends AbstractModel
{
    public const ADDRESS_KEY    = 'address';
    public const DOC_NUM_KEY    = 'docNum';
    public const DOC_SERIES_KEY = 'docSeries';
    public const SCHOOL_KEY     = 'school';

    protected ?string $address = null;
    protected ?string $docNum = null;
    protected ?string $docSeries = null;
    protected ?string $school = null;

    /**
     * @return string|null
     */
    public function getDocNum(): ?string
    {
        return $this->docNum;
    }

    /**
     * @return string|null
     */
    public function getDocSeries(): ?string
    {
        return $this->docSeries;
    }

    /**
     * @return string|null
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * @return string|null
     */
    public function getSchool(): ?string
    {
        return $this->school;
    }

    /**
     * @param string|null $docNum
     *
     * @return self
     */
    public function setDocNum(?string $docNum): self
    {
        $this->docNum = $docNum;

        return $this;
    }

    /**
     * @param string|null $docSeries
     *
     * @return self
     */
    public function setDocSeries(?string $docSeries): self
    {
        $this->docSeries = $docSeries;

        return $this;
    }

    /**
     * @param string|null $address
     *
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string|null $school
     *
     * @return self
     */
    public function setSchool(?string $school): self
    {
        $this->school = $school;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public static function fromArray(array $response): static
    {
        $model = new static();

        $model
            ->setAddress($response[self::ADDRESS_KEY] ?? null)
            ->setDocNum($response[self::DOC_NUM_KEY] ?? null)
            ->setDocSeries($response[self::DOC_SERIES_KEY] ?? null)
            ->setSchool($response[self::SCHOOL_KEY] ?? null);

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::ADDRESS_KEY    => $this->getAddress(),
            self::DOC_NUM_KEY    => $this->getDocNum(),
            self::DOC_SERIES_KEY => $this->getDocSeries(),
            self::SCHOOL_KEY     => $this->getSchool(),
        ], function ($key, $value) {
            return $value !== null;
        });
    }
}
