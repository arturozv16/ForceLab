<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudio extends Model
{
    protected $fillable = [
        'tipoEstudio', 'fechaEstudio', 'asistioPaciente','fechaEntrega',
        'fechaProximo', 'fechaRevision', 'resultadoEstudio'
    ];
}
