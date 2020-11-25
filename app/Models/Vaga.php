<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $fillable = ['nome_vaga', 'pais', 'cidade', 'estado', 'departamento', 'tipo_emprego', 'descricao_html', 'descricao_formatada'];
}
