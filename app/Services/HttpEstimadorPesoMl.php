<?php

namespace App\Services;

use App\Contracts\EstimadorPesoMlInterface;
use Illuminate\Support\Facades\Http;
use RuntimeException;

class HttpEstimadorPesoMl implements EstimadorPesoMlInterface
{
    public function __construct(
        private string $mlServiceUrl
    ) {}

    public function estimarPeso(array $urlsFotos, string $raza, int $edadMeses): array
    {
        $respuesta = Http::timeout(30)
            ->post($this->mlServiceUrl . '/estimate', [
                'image_urls' => $urlsFotos,
                'breed' => $raza,
                'age_months' => $edadMeses,
            ]);

        if (!$respuesta->successful()) {
            throw new RuntimeException('El servicio de estimación ML no respondió correctamente.');
        }

        return $respuesta->json();
    }
}