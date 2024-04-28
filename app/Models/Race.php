<?php

namespace App\Models;
use App\Models\Vache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];


    public function vaches(): HasMany
    {
        return $this->hasMany(
            Vache::class,
            'race_id',
        );
    }
}
