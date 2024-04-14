<?php

namespace App\Models\DeliveryServices;

use App\Interfaces\DeliveryServiceInterface;

class NovaPoshtaService implements DeliveryServiceInterface
{
    public function send(array $sender, array $receiver, array $packageData): bool
    {
        // Logic of sending data to Nova Poshta
        return true;
    }
}
