<?php
/**
 * Created by PhpStorm.
 * User: jsaavedrao
 * Date: 16/11/2015
 * Time: 03:46 PM
 */

namespace App\Repository;
use App\Entities\Perfil;

use Illuminate\Support\Facades\DB;

class PerfilRepository extends BaseRepository{
      private  $mensaje="";

    public function  getModel()
    {
        return new Perfil();
    }
    public function allPerfil(){
      $conexion=$this->newConexionDBA('mysql2');
        $datos= $conexion->table('perfil')->get();

        if(count($datos)!=0){
            RETURN  $datos;
        }else{
            RETURN  $mensaje= 'No hay Informacion  a mostrar';
        }


    }

}