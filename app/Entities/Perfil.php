<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $connection = 'mysql2';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'perfil';
    protected $primaryKey='perfil_id';

    protected $fillable = ['perfil_id','nombre', 'descripcion', 'rol_id', 'created_at', 'updated_at'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['perfil_id','nombre', 'descripcion', 'rol_id', 'created_at', 'updated_at'];
}
