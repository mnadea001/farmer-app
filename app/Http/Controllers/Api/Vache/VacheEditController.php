<?php

namespace App\Http\Controllers\Api\Vache;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vache;
use Illuminate\Http\JsonResponse;

class VacheEditController extends Controller
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
        $vache = Vache::findOrFail($request->id); 

        $vache->update($validated);
    
        return response()->json([
            'success' => true,
            'vache' => $vache,
        ]);
    }
}
