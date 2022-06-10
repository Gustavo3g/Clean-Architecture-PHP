<?php

namespace App\Domain\ValueObjects;

use DomainException;

final class RegistrationNumber
{
    private string $registrationNumber;

    public function __construct(string $registrationNumber)
    {
        if (!$this->validate($registrationNumber)) {
            throw new DomainException('registrationNumber is not valid');
        }

        $this->registrationNumber = $registrationNumber;
    }

    function validate(string $registrationNumber)
    {

        // Extrai somente os números
        $registrationNumber = preg_replace('/[^0-9]/is', '', $registrationNumber);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($registrationNumber) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $registrationNumber)) {
            return false;
        }

        // Faz o calculo para validar o registrationNumber
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $registrationNumber[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($registrationNumber[$c] != $d) {
                return false;
            }
        }
        return true;

    }

    public function __toString()
    {
        return $this->registrationNumber;
    }
}