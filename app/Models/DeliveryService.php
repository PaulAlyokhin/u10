<?php

namespace App\Models;

use App\Interfaces\DeliveryServiceInterface;
use App\Models\DeliveryServices\NovaPoshtaService;
use App\Models\DeliveryServices\UkrPoshtaService;

class DeliveryService
{
    public const NOVA_POSHTA = 'NovaPoshta';
    public const UKR_POSHTA = 'UkrPoshta';

    public static function create(string $serviceName): DeliveryServiceInterface
    {
        switch ($serviceName) {
            case self::NOVA_POSHTA: return new NovaPoshtaService();
            case self::UKR_POSHTA: return new UkrPoshtaService();
            default: throw new \InvalidArgumentException('Unsupported service name');
        }
    }
}
