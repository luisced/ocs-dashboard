<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class HealthCheckController extends Controller
{
    /**
     * Health check endpoint.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function check(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'healthy',
            'timestamp' => now(),
            'version' => config('app.version', '1.0.0')
        ], 200);
    }

}
