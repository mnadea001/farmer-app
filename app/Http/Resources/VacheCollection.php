<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class VacheCollection extends ResourceCollection
{
    public $collection = VacheResource::class; 
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return 
        [
            'data' => $this->collection,
        ];
    }
}
