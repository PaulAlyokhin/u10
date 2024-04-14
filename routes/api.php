<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/send', [\App\Http\Controllers\DeliveryController::class, 'send']);

/*
 Body example:
 {
    "sender": {
      "name": "Sender Name",
      "address": "Sender Address"
    },
    "receiver": {
      "name": "Receiver Name",
      "address": "Receiver Address"
    },
    "packageData": {
      "weight": "1 kg",
      "dimensions": "10x10x10 cm"
    },
    "serviceName": "UkrPoshta"
}
 */
