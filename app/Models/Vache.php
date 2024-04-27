<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
