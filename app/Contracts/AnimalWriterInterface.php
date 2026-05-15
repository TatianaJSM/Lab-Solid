<?php

namespace App\Contracts;

use App\Domain\Animal;

interface AnimalWriterInterface
{
    public function crear(array $datos): Animal;

    public function actualizar(int $id, array $datos): Animal;

    public function eliminar(int $id): void;
}