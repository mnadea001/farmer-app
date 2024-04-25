<?php

namespace App\Http\Controllers\Api\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\UserCollection;

class IndexController extends Controller
{

    public function __invoke(Request $request)
    {
        return new UserCollection(
            resource: User::all(),
        );
    }
}
 