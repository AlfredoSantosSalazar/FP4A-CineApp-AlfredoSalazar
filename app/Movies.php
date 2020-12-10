<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
'name',
'synopsis',
'category',
'director',
'duration',
'actors',
'gender'
    ];
}
