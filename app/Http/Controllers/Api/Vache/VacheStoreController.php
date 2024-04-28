<?php

namespace App\Http\Controllers\Api\Vache;
use App\Models\Vache;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacheStoreController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'is_sold' => 'boolean',
            'category_id' => 'required|exists:categories,id',
            'race_id' => 'required|exists:races,id',
        ]);
        $vache = Vache::create($validated);

        return response()->json([
            'success' => true,
            'vache' => $vache,
        ]);
    }
}
