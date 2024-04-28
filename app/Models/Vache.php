<?php

namespace App\Models;

use App\Models\Race;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vache extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        // 'age',
        // race
        'price',
        'is_sold',
        'category_id',
        'race_id',
    ];

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $name ;

    /**
     * The database connection that should be used by the model.
     *
     * @var string
     */
    protected $description ;

    protected $casts = [
        'price' => 'float',
        'is_sold' => 'boolean',
      ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(
            Category::class,
            'category_id',
        );
    }

    public function race(): BelongsTo
    {
        return $this->belongsTo(
            Race::class,
            'race_id',
        );
    }
}
