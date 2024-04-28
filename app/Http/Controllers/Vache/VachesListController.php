<?php

namespace App\Http\Controllers\Vache;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;


class VachesListController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): View
    {
        return view('vaches.index');
    }
}
