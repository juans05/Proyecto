<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table='empresa';
    protected $primaryKey='empresa_id';

    protected $fillable = ['ruc_empresa','nombre_empresa', 'razon_social', 'rubro',
        'direccion', 'telefono',
        'correo_empresa','ciudad', 'estado' ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['ruc_empresa','nombre_empresa', 'razon_social', 'rubro',
        'direccion', 'telefono',
        'correo_empresa','ciudad', 'estado' ];
}
