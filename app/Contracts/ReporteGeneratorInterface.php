<?php

namespace App\Contracts;

interface ReporteGeneratorInterface
{
    public function tipo(): string;

    public function generar(int $ranchoId): array;
}