<?php

namespace App\Contracts;

use App\Domain\RegistroPeso;

interface PuedeRegistrarPeso
{
    public function agregarRegistroPeso(RegistroPeso $registro): void;
}