<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'name',
        'breed',
        'b_date',
        'weight',
        'gender',
        'id_client',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
}
