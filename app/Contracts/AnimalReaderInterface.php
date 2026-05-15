<?php

namespace App\Contracts;

use App\Domain\Animal;

interface AnimalReaderInterface
{
    public function buscarPorArete(string $arete): ?Animal;

    public function listarPorRancho(int $ranchoId): array;

    public function calcularEstadisticasRancho(int $ranchoId): array;
}