<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negotiators extends Model
{

    const SEX = ['F' => 'feminino', 'M' => 'masculino'];

    protected $fillable = [
        'name', 'document', 'sex'
    ];
}
