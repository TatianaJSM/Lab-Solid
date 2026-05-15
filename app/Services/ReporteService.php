<?php

namespace App\Services;

use App\Contracts\ReporteGeneratorInterface;
use InvalidArgumentException;

class ReporteService
{
    public function __construct(
        private array $generadores
    ) {}

    public function generar(string $tipo, int $ranchoId): array
    {
        foreach ($this->generadores as $generador) {
            if ($generador instanceof ReporteGeneratorInterface && $generador->tipo() === $tipo) {
                return $generador->generar($ranchoId);
            }
        }

        throw new InvalidArgumentException("Tipo de reporte desconocido: {$tipo}");
    }
}