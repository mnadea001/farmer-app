<?php

namespace App\Http\Controllers\Api\Vache;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vache;
use App\Http\Resources\VacheCollection;

class VacheIndexController extends Controller
{

    public function __invoke(Request $request)
    {

        $filter = $request->query('filter');



        $query = Vache::query();

    if ($filter === 'price') {
        $query->orderBy('price', 'asc');
    }
    if ($filter === 'is_sold') {
        $query->orderBy('is_sold', 'asc');
    }
    elseif ($filter === 'name') {
        $query->orderBy('name', 'asc');
    }
    
    $vaches = $query->get();

    return new VacheCollection($vaches);

    }
}
