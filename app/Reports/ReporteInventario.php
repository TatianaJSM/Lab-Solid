<?php

namespace App\Reports;

use App\Contracts\ReporteGeneratorInterface;
use App\Models\Animal;

class ReporteInventario implements ReporteGeneratorInterface
{
    public function tipo(): string
    {
        return 'inventario';
    }

    public function generar(int $ranchoId): array
    {
        return Animal::where('rancho_id', $ranchoId)
            ->select('nombre', 'numero_arete', 'raza_id', 'sexo')
            ->get()
            ->toArray();
    }
}