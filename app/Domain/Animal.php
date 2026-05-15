<?php

namespace App\Domain;

use App\Contracts\PuedeRegistrarPeso;

class Animal implements PuedeRegistrarPeso
{
    private array $registrosPeso = [];

    public function agregarRegistroPeso(RegistroPeso $registro): void
    {
        $this->registrosPeso[] = $registro;
    }

    public function calcularGananciaDiariaPromedio(): ?float
    {
        if (count($this->registrosPeso) < 2) {
            return null;
        }

        return 0.0;
    }

    public function calcularIndiceCondicionCorporal(): float
    {
        return 5.0;
    }
}