<?php
/**
 * Created by PhpStorm.
 * User: juan
 * Date: 07/11/2015
 * Time: 18:04
 */

namespace app\Repository;




use App\Entities\persona;

class PersonaRepository extends BaseRepository
{

    public function  getModel()
    {

       return new persona();
    }

    public function newPersona($request){
       $Persona= $this->getModel()->create([
            'fecha_nacimiento'=>$request->fec_nacimiento,
            'lugar_nacimiento'=>$request->lugarNac,
            'Nacionalidad'=>$request->Nacionalidad,
            'Direccion'=>$request->direccion,
            'Telefono'=>$request->telefono,
            'celular'=>$request->celular,
            'correo_electronico'=>$request->email,
            'hijos'=>$request->hijos,
            'Hijos_institucion'=>$request->hijos_institucion,
            'estadoCivil'=>$request->estado,
            'grupoSanguineo'=>$request->grupoSanguineo,

        ]);
        return $Persona->persona_id;
    }

    public function buscarDatosTrabajador($idTrabajador){

    }
    public function MostrarDatosTrabajador($id){
        $Persona= $this->DatosRelacion('Persona')->get();
        return $Persona;
    }

}