<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    protected $table='trabajador';
    protected $primaryKey='trabajador_id';

    protected $fillable = ['cod_trabajador', 'nombre_trabajador', 'tipDocumento',
        'nroDocumento', 'Persona_idPersona',
        'tipoTrabajador_id'];

    protected $hidden = ['cod_trabajador', 'nombre_trabajador', 'tipDocumento',
        'nroDocumento', 'Persona_idPersona',
        'tipoTrabajador_id'];
}
