<?php

declare(strict_types=1);

namespace App\Application\Usecases\ExportRegistration;

use App\Domain\Repositories\LoadRegistrationRepository;
use App\Domain\ValueObjects\registrationNumber;
use DateTimeInterface;

final class ExportRegistration
{
    private LoadRegistrationRepository $repository;

    public function __construct(LoadRegistrationRepository $repository)
    {
        $this->repository = $repository;
    }

    public function handle(InputBoundary $input): OutputBoundary
    {
        $registrationNumber = new RegistrationNumber($input->getRegistrationNumber());
        $registration = $this->repository->loadByRegistrationNumber($registrationNumber);
        return new OutputBoundary([
            'name' => $registration->getName(),
            'email' => (string) $registration->getEmail(),
            'birthDate' => $registration->getBirthDate()->format(DateTimeInterface::ATOM),
            'registrationNumber' => (string) $registration->getRegistrationNumber(),
            'registrationAt' => $registration->getRegistrationAt()->format(DateTimeInterface::ATOM),
        ]);
    }

}