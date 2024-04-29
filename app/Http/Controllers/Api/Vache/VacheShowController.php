<?php

namespace App\Http\Controllers\Api\Vache;

use App\Http\Controllers\Controller;
use App\Models\Vache;
use App\Http\Resources\VacheResource;

class VacheShowController extends Controller
{

    public function __invoke(Vache $vache): VacheResource
    {
        return new VacheResource($vache);
    }
}
