<?php

namespace App\Http\Controllers;

use App\Models\DeliveryService;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function send(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $request->validate([
            'sender' => 'required|array',
            'receiver' => 'required|array',
            'packageData' => 'required|array',
            'serviceName' => 'required|string',
        ]);

        $serviceName = $data['serviceName'];
        unset($data['serviceName']);

        try {
            $deliveryService = DeliveryService::create($serviceName);
            $result = $deliveryService->send(
                $data['sender'],
                $data['receiver'],
                $data['packageData']
            );

            if ($result) {
                return response()->json(['success' => true]);
            } else {
                return response()->json(['success' => false], 500);
            }
        } catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
