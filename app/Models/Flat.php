<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $fillable = ['id', 'square', 'floor', 'number_of_rooms', 'house_id'];

    public function sale()
    {
        return $this->hasOne(Sale::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
