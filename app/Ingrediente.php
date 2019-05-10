<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Ingrediente extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'ingredientes';

    protected $fillable = [
        '_id', 'nome'
    ];
}
