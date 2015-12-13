<?php
/**
 * Created by PhpStorm.
 * User: jsaavedrao
 * Date: 16/11/2015
 * Time: 03:46 PM
 */

namespace App\Repository;
use App\Entities\User;
use Illuminate\Support\Facades\DB;

class UsuarioRepository extends BaseRepository{


    public function  getModel()
    {
        return new User();
    }
    public function login($usuario,$clave){
      $conexion=$this->newConexionDBA('mysql2');
        $datos= $conexion->table('usuario')->select(['usuario.usuario_id'])
            ->where('usuario.usuario',$usuario)
            ->where('usuario.clave',$clave)->get();

        if(count($datos)!=0){
            RETURN  $datos[0]->usuario_id;
        }else{
            RETURN  0;
        }


    }
    public function  DatosUsuario($id_usuario){
        $conexion=$this->newConexionDBA('mysql2');
       return  $datos= $conexion->table('usuario')->select(['usuario.usuario','usuario.email','perfil.nombre'])
            ->where('usuario.usuario_id',$id_usuario)
            ->join('perfil','usuario.perfil_id','=','perfil.perfil_id')
            ->get();
    }
    public function  buscarUsuario($id_usuario){
        $conexion=$this->newConexionDBA('mysql2');
        return $datos= $conexion->table('usuario')->where('usuario.usuario_id',$id_usuario)->get();
    }
}