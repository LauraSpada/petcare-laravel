<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'date',
        'hour',
        'reason',
        'vet_id',
        'animal_id',
   ];

    public function vet()
    {
        return $this->belongsTo(Vet::class, 'vet_id');
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }
}
