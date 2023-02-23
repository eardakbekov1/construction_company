<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['id', 'sale_date', 'client_id', 'flat_id', 'house_id'];

    public function flat()
    {
        return $this->belongsTo(Flat::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
