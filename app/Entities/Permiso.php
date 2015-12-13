<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $connection = 'mysql2';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'permmiso';
    protected $primaryKey='permiso_id';
}
