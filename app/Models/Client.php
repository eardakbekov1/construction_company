<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id', 'name', 'phone_number', 'email'];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
