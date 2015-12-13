<?php


namespace App\Repository;


use App\Entities\Alumno;


class AlumnoRepository extends BaseRepository
{


    public function  getModel()
    {
        return new Alumno();
    }
    public function listarAlumno(){

        return $this->getAllModel();
    }
    public function AlumnoDatos2($alumno){

        return $this->find($alumno);

    }
    public function  newAlumno($request,$cod_persona){
        $this->getModel()->create([
            'codigo_alumno'=>$request->codigo_alumno,
            'nombre'=>$request->nombre,
            'apellido_completo'=>$request->apellido,
            'tipDocumento'=>$request->tipDocumento,
            'numero_doc'=>$request->numeroDoc,
            'estado'=>1,
            'persona_id'=>$cod_persona,

        ]);
        return true;
    }


}