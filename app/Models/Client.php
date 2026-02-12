<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'cpf',
        'name',
        'phone',
    ];

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
