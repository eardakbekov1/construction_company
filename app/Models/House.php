<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $fillable = ['id', 'name', 'completion_date', 'number_of_floors', 'price'];

    public function flats()
    {
        return $this->hasMany(Flat::class);
    }

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
