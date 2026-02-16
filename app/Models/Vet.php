<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    protected $fillable = [
        'crmv',
        'name',
        'adm_date',
        'salary',
    ];     

    public function vets()
    {
        return $this->hasMany(Vet::class);
    }
}
