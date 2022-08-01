<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atos extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'numero',
        'ano',
        'ementa',
        'setor',
        'classificacao',
        'resposta',
        'data_envio',
    ];

    public function getAtos(string $search = null)
    {
        $atos = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('classificacao', 'LIKE', "%{$search}%");
                $query->orWhere('resposta', 'LIKE', "%{$search}%");
                $query->orWhere('setor', 'LIKE', "%{$search}%");
                $query->orWhere('ano', 'LIKE', "%{$search}%");
                $query->orWhere('numero', 'LIKE', "%{$search}%");
                $query->orWhere('data_envio', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);

        return $atos;
    }
}
