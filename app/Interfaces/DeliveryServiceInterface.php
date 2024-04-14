<?php

namespace App\Interfaces;

interface DeliveryServiceInterface
{
    public function send(array $sender, array $receiver, array $packageData): bool;
}
