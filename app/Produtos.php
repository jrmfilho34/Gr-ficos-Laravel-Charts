<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
     protected $fillable = [
        'titulo', 'categoria', 'descricao','preco',
    ];

}