<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Functions extends Model
{
    protected $fillable = [
        'nombre',
        'start',
        'end',
        'available',
        'type'
            ];
}
