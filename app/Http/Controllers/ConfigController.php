<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Configuration;
use Illuminate\Http\JsonResponse;

class ConfigController extends Controller
{
    
    public function index(): JsonResponse
    {
        $config = Configuration::first();

        if (!$config) {
            return response()->json(['error' => 'Nenhuma configuração encontrada.'], 404);
        }

        return response()->json($config);
    }
}