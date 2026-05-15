<?php

namespace App\Contracts;

use App\Domain\RegistroPeso;

interface AnimalPesoInterface
{
    public function agregarRegistroPeso(int $animalId, RegistroPeso $registro): void;

    public function obtenerHistorialPeso(int $animalId): array;
}