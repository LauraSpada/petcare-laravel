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
        'client_id',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
