<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumables extends Model
{
    protected $fillable = [
        'name',
        'price',
        'quantity'
            ];
}
