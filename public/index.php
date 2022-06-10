<?php

use App\Domain\Entities\Registration;
use App\Domain\ValueObjects\RegistrationNumber;
use App\Domain\ValueObjects\Email;

require_once __DIR__ . '/../vendor/autoload.php';


$registration = new Registration();
$registration->setName('Gustavo Barros de Sousa')
    ->setBirthDate(new DateTimeImmutable('1999-02-11'))
    ->setEmail(new Email('gustavo@gmail.com'))
    ->setRegistrationNumber(new RegistrationNumber('01234567890'))
    ->setRegistrationAt(new DateTimeImmutable());

echo "<pre>"; print_r($registration);