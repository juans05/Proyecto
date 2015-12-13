<?php

namespace App\Entities;


use Illuminate\Database\Eloquent\Model;

class Apoderado extends Entity
{
    protected $table='apoderado';

    protected $fillable = ['dni', 'nombre_apoderado', 'apellido_apoderado',
                           'parentesco', 'correo_electronico',
                           'telefono','celular', 'telefono_oficina',
                           'Direccion','ubigeo', 'autorizacion',
                           'Vive','nivelEducativo', 'ocupacion','estado','created_at','updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['dni', 'nombre_apoderado', 'apellido_apoderado',
        'parentesco', 'correo_electronico',
        'telefono','celular', 'telefono_oficina',
        'Direccion','ubigeo', 'autorizacion',
        'Vive','nivelEducativo', 'ocupacion','estado','created_at','updated_at'];

    public function alumno(){
        return $this->belongsToMany(Alumno::class);
    }
}
