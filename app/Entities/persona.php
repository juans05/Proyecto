<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $table='persona';

    protected $fillable = ['fecha_nacimiento', 'lugar_nacimiento', 'Nacionalidad',
        'Direccion', 'Telefono',
        'celular','correo_electronico', 'hijos',
        'Hijos_institucion','estadoCivil', 'grupoSanguineo',
        'created_at','updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['fecha_nacimiento', 'lugar_nacimiento', 'Nacionalidad',
        'Direccion', 'Telefono',
        'celular','correo_electronico', 'hijos',
        'Hijos_institucion','estadoCivil', 'grupoSanguineo',
        'created_at','updated_at'];

    public function alumno(){
        return $this->belongsTo(Alumno::getClass());
    }

}
