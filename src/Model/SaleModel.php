<?php

namespace Onepix\EAvtovokzalApiClient\Model;

use DateTime;
use DateTimeInterface;
use Exception;
use Onepix\EAvtovokzalApiClient\Enum\GenderEnum;

class SaleModel extends AbstractModel
{
    public const LAST_NAME_KEY        = 'lastName';
    public const FIRST_NAME_KEY       = 'firstName';
    public const MIDDLE_NAME_KEY      = 'middleName';
    public const DOC_TYPE_CODE_KEY    = 'docTypeCode';
    public const DOC_SERIES_KEY       = 'docSeries';
    public const DOC_NUM_KEY          = 'docNum';
    public const GENDER_KEY           = 'gender';
    public const CITIZENSHIP_KEY      = 'citizenship';
    public const BIRTHDAY_KEY         = 'birthday';
    public const PHONE_KEY            = 'phone';
    public const EMAIL_KEY            = 'email';
    public const SEAT_CODE_KEY        = 'seatCode';
    public const TICKET_TYPE_CODE_KEY = 'ticketTypeCode';
    public const BENEFIT_KEY          = 'benefit';

    protected ?string $lastName = null;
    protected ?string $firstName = null;
    protected ?string $middleName = null;
    protected ?string $docTypeCode = null;
    protected ?string $docSeries = null;
    protected ?string $docNum = null;
    protected ?GenderEnum $gender = null;
    protected ?string $citizenship = null;
    protected ?DateTime $birthday = null;
    protected ?string $phone = null;
    protected ?string $email = null;
    protected ?string $seatCode = null;
    protected ?string $ticketTypeCode = null;
    protected ?BenefitModel $benefit = null;

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
    public function getDocNum(): ?string
    {
        return $this->docNum;
    }

    /**
     * @return string|null
     */
    public function getTicketTypeCode(): ?string
    {
        return $this->ticketTypeCode;
    }

    /**
     * @return string|null
     */
    public function getSeatCode(): ?string
    {
        return $this->seatCode;
    }

    /**
     * @return string|null
     */
    public function getDocTypeCode(): ?string
    {
        return $this->docTypeCode;
    }

    /**
     * @return BenefitModel|null
     */
    public function getBenefit(): ?BenefitModel
    {
        return $this->benefit;
    }

    /**
     * @return DateTime|null
     */
    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
    }

    /**
     * @return string|null
     */
    public function getCitizenship(): ?string
    {
        return $this->citizenship;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return GenderEnum|null
     */
    public function getGender(): ?GenderEnum
    {
        return $this->gender;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
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
     * @param string|null $ticketTypeCode
     *
     * @return self
     */
    public function setTicketTypeCode(?string $ticketTypeCode): self
    {
        $this->ticketTypeCode = $ticketTypeCode;

        return $this;
    }

    /**
     * @param string|null $seatCode
     *
     * @return self
     */
    public function setSeatCode(?string $seatCode): self
    {
        $this->seatCode = $seatCode;

        return $this;
    }

    /**
     * @param string|null $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string|null $docTypeCode
     *
     * @return self
     */
    public function setDocTypeCode(?string $docTypeCode): self
    {
        $this->docTypeCode = $docTypeCode;

        return $this;
    }

    /**
     * @param BenefitModel|null $benefit
     *
     * @return self
     */
    public function setBenefit(?BenefitModel $benefit): self
    {
        $this->benefit = $benefit;

        return $this;
    }

    /**
     * @param DateTime|null $birthday
     *
     * @return self
     */
    public function setBirthday(?DateTime $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * @param string|null $citizenship
     *
     * @return self
     */
    public function setCitizenship(?string $citizenship): self
    {
        $this->citizenship = $citizenship;

        return $this;
    }

    /**
     * @param string|null $email
     *
     * @return self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param GenderEnum|null $gender
     *
     * @return self
     */
    public function setGender(?GenderEnum $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * @param string|null $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string|null $middleName
     *
     * @return self
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @param string|null $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

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
            ->setLastName($response[self::LAST_NAME_KEY] ?? null)
            ->setFirstName($response[self::FIRST_NAME_KEY] ?? null)
            ->setMiddleName($response[self::MIDDLE_NAME_KEY] ?? null)
            ->setDocTypeCode($response[self::DOC_TYPE_CODE_KEY] ?? null)
            ->setDocSeries($response[self::DOC_SERIES_KEY] ?? null)
            ->setDocNum($response[self::DOC_NUM_KEY] ?? null)
            ->setGender(GenderEnum::tryFrom($response[self::GENDER_KEY] ?? ''))
            ->setCitizenship($response[self::CITIZENSHIP_KEY] ?? null)
            ->setBirthday(isset($response[self::BIRTHDAY_KEY]) ? new DateTime($response[self::BIRTHDAY_KEY]) : null)
            ->setPhone($response[self::PHONE_KEY] ?? null)
            ->setEmail($response[self::EMAIL_KEY] ?? null)
            ->setSeatCode($response[self::SEAT_CODE_KEY] ?? null)
            ->setTicketTypeCode($response[self::TICKET_TYPE_CODE_KEY] ?? null)
            ->setBenefit(
                isset($response[self::BENEFIT_KEY]) ? BenefitModel::fromArray($response[self::BENEFIT_KEY]) : null
            );

        return $model;
    }

    /**
     * @inheritDoc
     */
    public function toArray(): array
    {
        return array_filter([
            self::LAST_NAME_KEY        => $this->getLastName(),
            self::FIRST_NAME_KEY       => $this->getFirstName(),
            self::MIDDLE_NAME_KEY      => $this->getMiddleName(),
            self::DOC_TYPE_CODE_KEY    => $this->getDocTypeCode(),
            self::DOC_SERIES_KEY       => $this->getDocSeries(),
            self::DOC_NUM_KEY          => $this->getDocNum(),
            self::GENDER_KEY           => $this->getGender()?->value,
            self::CITIZENSHIP_KEY      => $this->getCitizenship(),
            self::BIRTHDAY_KEY         => $this->getBirthday()?->format(DateTimeInterface::ATOM),
            self::PHONE_KEY            => $this->getPhone(),
            self::EMAIL_KEY            => $this->getEmail(),
            self::SEAT_CODE_KEY        => $this->getSeatCode(),
            self::TICKET_TYPE_CODE_KEY => $this->getTicketTypeCode(),
            self::BENEFIT_KEY          => $this->getBenefit()?->toArray(),
        ], function ($value) {
            return $value !== null;
        });
    }
}
