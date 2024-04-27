<?php

namespace App\Http\Controllers\Api\Vache;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vache;
use App\Http\Resources\VacheCollection;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        return new VacheCollection(
            resource: Vache::all(),
        );
    }
}
