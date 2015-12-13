<?php
/**
 * Created by PhpStorm.
 * User: jsaavedrao
 * Date: 16/11/2015
 * Time: 05:09 PM
 */

namespace App\Repository;


use App\Entities\Trabajador;

class TrabajadorRepository  extends BaseRepository{

    public function  getModel()
    {
        return new Trabajador();
    }

    public function buscarTrabajador($idTrabajador){

        return  $result=\DB::table('trabajador')
            ->select('trabajador.trabajador_id','trabajador.cod_trabajador','trabajador.nombre_trabajador',
                'trabajador.tipDocumento','trabajador.nroDocumento',
                'persona.lugar_nacimiento','persona.Nacionalidad','persona.Direccion','persona.Telefono',
                'persona.celular','persona.Telefono','persona.correo_electronico','persona.hijos','persona.estadoCivil')


            ->where('trabajador.trabajador_id',$idTrabajador)
            ->join('persona','trabajador.Persona_idPersona','=','persona.persona_id')
            ->join('tipotrabajador','trabajador.tipoTrabajador_id','=','tipotrabajador.tipoTrabajador_id')
            ->get();
    }

}