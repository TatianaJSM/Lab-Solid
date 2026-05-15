<?php

namespace App\Contracts;

interface EstimadorPesoMlInterface
{
    public function estimarPeso(array $urlsFotos, string $raza, int $edadMeses): array;
}