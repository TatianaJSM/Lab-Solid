<?php

namespace App\Services;

use App\Contracts\AnimalReaderInterface;
use App\Domain\Animal;

class ReportadorSoloLectura implements AnimalReaderInterface
{
    public function buscarPorArete(string $arete): ?Animal
    {
        return null;
    }

    public function listarPorRancho(int $ranchoId): array
    {
        return [];
    }

    public function calcularEstadisticasRancho(int $ranchoId): array
    {
        return [];
    }
}