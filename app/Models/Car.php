<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'brand',
        'plate',
        'year',
    ];

    /**
     * A car can have many rentals
     */
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
