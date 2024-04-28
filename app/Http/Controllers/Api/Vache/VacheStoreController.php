<?php

namespace App\Http\Controllers\Api\Vache;
use App\Models\Vache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VacheStoreController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
        ]);
        $vache = Vache::create($validated);

        return response()->json([
            'success' => true,
            'vache' => $vache,
        ]);
    }
}
