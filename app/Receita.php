<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Receita extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'receitas';

    protected $fillable = [
        '_id', 'nome', 'secao',
    ];
}
