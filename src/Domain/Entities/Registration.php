<?php

declare(strict_types=1);

namespace App\Domain\Entities;

use App\Domain\ValueObjects\RegistrationNumber;
use App\Domain\ValueObjects\Email;
use DateTimeInterface;

final class Registration
{
    private string $name;
    private Email $email;
    private DateTimeInterface $birthDate;
    private RegistrationNumber $registrationNumber;
    private DateTimeInterface $registrationAt;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Registration
     */
    public function setName(string $name): Registration
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Email
     */
    public function getEmail(): Email
    {
        return $this->email;
    }

    /**
     * @param Email $email
     * @return Registration
     */
    public function setEmail(Email $email): Registration
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getBirthDate(): DateTimeInterface
    {
        return $this->birthDate;
    }

    /**
     * @param DateTimeInterface $birthDate
     * @return Registration
     */
    public function setBirthDate(DateTimeInterface $birthDate): Registration
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return RegistrationNumber
     */
    public function getRegistrationNumber(): RegistrationNumber
    {
        return $this->registrationNumber;
    }

    /**
     * @param RegistrationNumber $registrationNumber
     * @return Registration
     */
    public function setRegistrationNumber(RegistrationNumber $registrationNumber): Registration
    {
        $this->registrationNumber = $registrationNumber;
        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getRegistrationAt(): DateTimeInterface
    {
        return $this->registrationAt;
    }

    /**
     * @param DateTimeInterface $registrationAt
     * @return Registration
     */
    public function setRegistrationAt(DateTimeInterface $registrationAt): Registration
    {
        $this->registrationAt = $registrationAt;
        return $this;
    }




}