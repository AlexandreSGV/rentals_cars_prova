<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cpf',
        'birth_date',
    ];

    /**
     * A client can have many rentals
     */
    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }
}
