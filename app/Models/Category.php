<?php

namespace App\Models;
use App\Models\Vache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function vaches(): HasMany
    {
        return $this->hasMany(
            Vache::class,
            'category_id',
        );
    }
}
