<?php

namespace App\Entities;



use Illuminate\Database\Eloquent\Model;

class Alumno extends Entity
{
    protected $table='alumno';

    protected $fillable = ['alumno_id','codigo_alumno', 'nombre', 'apellido_completo',
        'tipDocumento', 'numero_doc',
        'updated_at','created_at', 'estado',
        'persona_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['alumno_id','codigo_alumno', 'nombre', 'apellido_completo',
        'tipDocumento', 'numero_doc',
        'updated_at','created_at', 'estado',
        'persona_id'];

    public function persona(){
        return $this->hasOne(persona::class);
    }
    public function apoderado(){
        return $this->belongsToMany(Apoderado::class,'alumno_has_apoderado','Alumno_id','Apoderado_id');
    }
}
