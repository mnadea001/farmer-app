<?php

namespace App\Http\Controllers\Api\Vache;

use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;
use App\Models\Vache;

class VacheDeleteController extends Controller
{

    public function __invoke(Vache $vache)
    {
        $vache = Vache::findOrFail($request->id); 

        $vache->delete();

        // return response()->noContent();
    }
}
