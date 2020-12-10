<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entrances extends Model
{
    protected $fillable = [
        'name',
        'sala',
        'prince',
        'hourEntrance'
            ];
}
