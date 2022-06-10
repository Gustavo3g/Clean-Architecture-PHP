<?php

declare(strict_types=1);

namespace App\Domain\Repositories;

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\RegistrationNumber;

interface LoadRegistrationRepository
{
    public function loadByRegistrationNumber(RegistrationNumber $registrationNumber): Registration;
}