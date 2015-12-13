<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 08/11/2015
 * Time: 16:56
 */

namespace App\Repository;


use App\Entities\Apoderado;

class ApoderadoRepository extends  BaseRepository
{
    public function Apoderado($idAlumno){
        return  $result=\DB::table('alumno')
            ->select('alumno.nombre','alumno.apellido_completo',
                     'alumno.codigo_alumno','apoderado.dni',
                     'apoderado.nombre_apoderado','apoderado.parentesco',
                     'apoderado.correo_electronico','apoderado.telefono','apoderado.celular',
                     'apoderado.autorizacion')

            ->where('alumno.estado',1)
            ->where('alumno.alumno_id',$idAlumno)
            ->join('alumno_has_apoderado','alumno.alumno_id','=','alumno_has_apoderado.Alumno_id')
            ->join('apoderado','alumno_has_apoderado.Apoderado_id','=','apoderado.apoderado_id')
            ->get();
    }

    public function  getModel()
    {
       return new Apoderado();
    }
    public function crearApoderado($request){
        $this->getModel()->create([
            'dni'=>$request->dni,
            'nombre_apoderado'=>$request->nombre,
            'apellido_apoderado'=>$request->apellido,
            'parentesco'=>$request->parentesco,
            'correo_electronico'=>$request->email,
            'telefono'=>$request->telefono,
            'celular'=>$request->celular,
            'telefono_oficina'=>$request->tele_oficina,
            'Direccion'=>$request->direccion,
            'ubigeo'=>$request->ubigeo,
            'autorizacion'=>$request->autorizacion,
            'Vive'=>$request->vive,
            'nivelEducativo'=>$request->nivelEducativo,
            'ocupacion'=>$request->ocupacion,
            'estado'=>1,

        ]);

        return true;


    }
}