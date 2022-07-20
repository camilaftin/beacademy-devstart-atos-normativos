<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atos extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero', 
        'ano', 
        'ementa',
        'setor', 
        'classificacao',
        'data_envio',


    ];
}



