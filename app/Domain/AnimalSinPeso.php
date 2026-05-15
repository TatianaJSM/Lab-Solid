<?php

namespace App\Domain;

class AnimalSinPeso
{
    public function __construct(
        private string $numeroArete,
        private string $nombre
    ) {}

    public function obtenerNumeroArete(): string
    {
        return $this->numeroArete;
    }

    public function obtenerNombre(): string
    {
        return $this->nombre;
    }

    public function asignarPesoInicial(float $pesoInicial): Animal
    {
        return new Animal();
    }
}